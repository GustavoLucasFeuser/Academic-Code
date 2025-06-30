<?php
require_once("../classes/Database.class.php");
class Login{
   
    private $usuario;
   
    private $senha;

    
    public function __construct($usuario = null, $senha = null){
        $this->setUsuario($usuario);
        $this->setSenha($senha);
    }

    public function setUsuario($novoUsuario) {
        if (empty($novoUsuario)) {
            throw new Exception("Erro: Usuário inválido!");
        } else {
            $this->usuario = $novoUsuario;
        }
    }
    public function setSenha($novaSenha) {
        if (empty($novaSenha)) {
            throw new Exception("Erro: Senha inválida!");
        } else {
            $this->senha = $novaSenha; 
        }
    }

    public function getUsuario(){ return $this->usuario;}
    public function getSenha(){ return $this->senha;}

    /**
     * @param string $usuario
     * @param string $senha
     */
    public static function efetuarLogin($usuario, $senha){
        $conexao = Database::getInstance();
        $sql = 'SELECT * FROM alunos
                 WHERE usuario = :usuario
                   AND senha = :senha';
        $comando = $conexao->prepare($sql); 
        $comando->bindValue(':usuario',$usuario);
        $comando->bindValue(':senha',sha1($senha));
        if ($comando->execute()){
            while($registro = $comando->fetch()){ 
                $login = new Login($registro['usuario'],$registro['senha'] );
                $aluno = new Aluno($registro['id'],$registro['nome'],$registro['email'] , $login);
                return $aluno;
            }
        }
        return false;
    }
}