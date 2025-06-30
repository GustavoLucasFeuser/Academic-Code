<?php

require_once("../classes/Login.class.php");
require_once("../classes/Aluno.class.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = isset($_POST['usuario'])?$_POST['usuario']:0; 
    $senha = isset($_POST['senha'])?$_POST['senha']:0; 

    try{
        $aluno = Login::efetuarLogin($usuario,$senha);
        if ($aluno){
            session_start();
            $_SESSION['idusuario'] = $aluno->getId();
            $_SESSION['nome'] = $aluno->getNome();
            $_SESSION['email'] = $aluno->getEmail();
            header('location: ../aluno/index.php');

        }
        
        else{
            echo "<script> alert('Usuário ou senha incorreto')</script>";
        }
    }catch(Exception $e){ 
        header('location: index.php?MSG=Erro: '.$e->getMessage()); 
    }
}