<?php  
include_once('../aluno/aluno.php'); 
// if( isset($_FILES["photoInput"]) && !empty($_FILES["photoInput"]))
// {
//     move_uploaded_file($_FILES["photoInput"]["tmp_name"], "../imgperfil".$_FILES["photoInput"]["name"]);
//     echo "upload sucesso!";
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <div class="main-login">
        <div class= "left-login">
            <h1>Faça o seu cadastro<br>E entre para o time Academic Code</h1>
            <img src="../img/Astronaut.gif" class ="left-login-image" alt="">
        </div>
        <form action="../aluno/aluno.php" method="post" enctype="multipart/form-data">
        <div class="right-login">
            <div class="card-login">
                <h1>CADASTRO</h1>
                
            <!-- <div class="photo-container">
                <label for="photoInput" class="photo-label">
                    <img id="photoPreview" class="photo-preview default" src="" alt="">
                </label>
                    <input type="file" name= "photoInput" id="photoInput" accept="image/*" style="display: none;" >
            </div> -->
                
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" required="required" name="nome" placeholder="Nome" >
                </div>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" required="required" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" required="required" name="email" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" required="required" name="senha" placeholder="Senha">
                </div>
                <button type='submit' name='acao' value='salvar' class="btn-login">Salvar</button>
                <div class = "textfold">
                    <a href="index.php">Já possui cadastro?</a>
                </div>
            </div>
            </form>
          </div>
    </div>
    <script src="../js/cad.js"></script>
</body>
</html>
