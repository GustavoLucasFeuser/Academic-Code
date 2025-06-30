<!-- CSS By lucianesantcs -->
<?php
    session_start();  
    include_once('aluno.php'); 
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/perfil.css" />
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
            <div class="icon"></div>
            <h1><?php echo $_SESSION['nome'];?></h1>
            <p><?php echo $_SESSION['email'];?></p> 
          </div>
          <div class="button">
            <i data-feather="edit"></i>
            <a href="edita_perfil.php" style="text-decoration: none; color:#b7b7b7;"><p>Editar</p></a>
          </div>
        </div>
        <div class="stats">
          <div class="projects">
            <p>Atividades</p>
            <h1>25</h1>
          </div>
          <div class="projects">
            <p>Respostas</p>
            <h1>302</h1>
          </div>
          <div class="projects">
            <p>Seguidores</p>
            <h1>42</h1>
          </div>
        </div>
      </div>
    </div>
    <script>
      feather.replace();
    </script>
  </body>
</html>