<?php

require_once("../classes/Database.class.php");
require_once("../classes/Login.class.php");

class Aluno
{
    
    private $id;
    private $nome;
    private $email;
    private $login;

    
    public function __construct($id = 0, $nome = "null", $email = "null", $login)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setLogin(new Login($login->getUsuario(), $login->getSenha()));
    }

    
    public function setLogin(Login $login)
    {
        $this->login = $login;
    }

    public function setId($novoId)
    {
        if ($novoId < 0)
            throw new Exception("Erro: id inválido!");
        else
            $this->id = $novoId;
    }

    public function setNome($novoNome)
    {
        if ($novoNome == "")
            throw new Exception("Erro: nome inválido!");
        else
            $this->nome = $novoNome;
    }

    public function setEmail($novoEmail)
    {
        if ($novoEmail == "")
            throw new Exception("Erro: E-mail inválido!");
        else
            $this->email = $novoEmail;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getLogin()
    {
        return $this->login;
    }

    
    public function incluir()
    {
        $conexao = Database::getInstance();
        $sql = 'INSERT INTO alunos (nome, email, usuario, senha)
                VALUES (:nome, :email, :usuario, :senha)';
        $comando = $conexao->prepare($sql);
        $comando->bindValue(':nome', $this->nome);
        $comando->bindValue(':email', $this->email);
        $comando->bindValue(':usuario', $this->login->getUsuario(), PDO::PARAM_STR);
        //sha1 método de criptografia
        $comando->bindValue(':senha', sha1($this->login->getSenha()), PDO::PARAM_STR);

        try {
            $comando->execute();
            return true;
        } catch (PDOException $e) {
            throw new Exception("Erro ao executar o comando no banco de dados: " . $e->getMessage() . " - " . $comando->errorInfo()[2]);
        }
    }

    public function autenticar()
    {
        try {
            $conexao = Database::getInstance();
            $sql = 'SELECT * FROM alunos WHERE usuario = :usuario';
            $comando = $conexao->prepare($sql);
            $comando->bindValue(':usuario', $this->login->getUsuario(), PDO::PARAM_STR);
            $comando->execute();
            $user = $comando->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                if (password_verify($this->login->getSenha(), $user['senha'])) {
                    return $user['id'];
                } else {
                    throw new Exception("Senha incorreta!");
                }
            } else {
                throw new Exception("Usuário não encontrado!");
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw new Exception("Erro ao autenticar usuário!");
        }
    }

    
    public function excluir()
    {
        $sql = 'DELETE FROM alunos WHERE id = :id';
        $parametros = array(':id' => $this->id);
        return Database::executar($sql, $parametros);
    }

    
    public function alterar()
    {
        $conexao = Database::getInstance();
        $sql = 'UPDATE alunos
                SET nome = :nome, email = :email, usuario = :usuario, senha = :senha
                WHERE id = :id';
        $comando = $conexao->prepare($sql);
        $comando->bindValue(':id', $this->id);
        $comando->bindValue(':nome', $this->nome);
        $comando->bindValue(':email', $this->email);
        $comando->bindValue(':usuario', $this->login->getUsuario());
        $comando->bindValue(':senha', password_hash($this->login->getSenha(), PASSWORD_DEFAULT), PDO::PARAM_STR);
        try {
            $comando->execute();
            return true;
        } catch (PDOException $e) {
            throw new Exception("Erro ao executar o comando no banco de dados: " . $e->getMessage() . " - " . $comando->errorInfo()[2]);
        }
    }

    
    public static function listar($tipo = 0, $busca = "")
    {
        $conexao = Database::getInstance();
        $sql = "SELECT * FROM alunos";
        if ($tipo > 0) {
            switch ($tipo) {
                case 1:
                    $sql .= " WHERE id = :busca";
                    break;
                case 2:
                    $sql .= " WHERE nome like :busca";
                    $busca = "%{$busca}%";
                    break;
                case 3:
                    $sql .= " WHERE email like :busca";
                    $busca = "%{$busca}%";
                    break;
            }
        }
        $comando = $conexao->prepare($sql);
        if ($tipo > 0) {
            $comando->bindValue(':busca', $busca);
        }
        $comando->execute();
        $alunos = array();
        while ($registro = $comando->fetch()) {
            $login = new Login($registro['usuario'], $registro['senha']);
            $aluno = new Aluno($registro['id'], $registro['nome'], $registro['email'], $login);
            array_push($alunos, $aluno);
        }
        return $alunos;
    }
}

?>