<?php

require_once("../classes/Aluno.class.php");
require_once("../classes/Login.class.php");


$id =  isset($_GET['id'])?$_GET['id']:0; // pegar busca
$msg =  isset($_GET['MSG'])?$_GET['MSG']:""; // pegar busca
if ($id > 0){
    $contato = Aluno::listar(1,$id)[0]; 
}

// Inserir e alterar dados
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id =  isset($_POST['id'])?$_POST['id']:0; 
    $nome =  isset($_POST['nome'])?$_POST['nome']:0; 
    $email =  isset($_POST['email'])?$_POST['email']:0;
    $usuario =  isset($_POST['usuario'])?$_POST['usuario']:0; 
    // dados do login
    $senha =  isset($_POST['senha'])?$_POST['senha']:0; 
    $acao =  isset($_POST['acao'])?$_POST['acao']:0; 

    try{
        
      
        $login = new Login($usuario,$senha);
        $aluno = new Aluno($id,$nome,$email,$login);

        $resultado = "";
        if($acao == 'salvar'){
            if($id > 0)

                $resultado = $aluno->alterar();
            else 
                $resultado = $aluno->incluir();
        }elseif ($acao == 'excluir'){
            
            $resultado = $aluno->excluir();
        }
        if ($resultado)
        header('location: ../login/index.php?MSG=Dados inseridos/Alterados com sucesso!');
        exit;

            header('location: index.php?MSG=Erro ao inserir/alterar registro');
    }catch(Exception $e){ 
        header('location: index.php?MSG=Erro: '.$e->getMessage()); 
    }
}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){ 
    //  Listagem e Pesquisa
    $busca =  isset($_GET['busca'])?$_GET['busca']:0; 
    $tipo =  isset($_GET['tipo'])?$_GET['tipo']:0; 
    
    $lista = Aluno::listar($tipo,$busca); 
}



