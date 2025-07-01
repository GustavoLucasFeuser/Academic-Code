<!-- CSS By lucianesantcs -->
<?php
    session_start();
    include_once('aluno.php'); 
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/perfil.css"/>
    <link rel="stylesheet" href="../css/edita_perfil.css">
    <title>Perfil</title>
  </head>
  <body>

  <header>
        <a href="#" class= "logo">Academic Code</a>

        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="forum.php">Fórum</a></li>
            <li><a href="atividades.php">Atividades</a></li>
            <li><a href="../conteudos/html.php">Conteúdos</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>

    </header>
    <div class="container">
      <div class="wrapper">
        <div class="user">
          <div class="info">
            <div style="clear: both;"><div class="icon" style="margin-bottom: -20%;"></div></div>
            <div class="textfield">
                    <label for="nome" style="margin-left:36%;">Alterar Nome</label>
                    <input type="text" required="required" name="nome" placeholder="<?php echo $_SESSION['nome']?>">
              
                </div>
                 <div class="textfield">
                    <label for="nome" style="margin-left:36%;">Alterar Email</label>
                    <input type="text" required="required" name="email" placeholder="<?php echo $_SESSION['email']?>">
                      <button type='submit' name='acao' value='salvar' class="btn-login">Salvar Edição</button>
                </div>
          </div>
         
        </div>
        
  </body>
</html>