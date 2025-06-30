<?php 
session_start(); 


if (!isset($_SESSION['idusuario'])) {
    header('location: ../login/index.php?MSG=Por favor, faça login para acessar.');
    exit;
}
?>
<!-- 
 https://scrollrevealjs.org/
 https://boxicons.com/
 https://remixicon.com/icon/arrow-down-s-fill
-->
<?php  
include_once('aluno.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <a href="#" class= "logo">Academic Code</a>

        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="forum.php">Fórum</a></li>
            <li><a href="atividades.php">Atividades</a></li>
            <li><a href="../conteudos/html.php">Conteúdos</a></li>
            <li><a href="codar.php">Codar</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>

    </header>
    <section class="hero">
        <div class="hero-text">
            <h5>V 1.1.0.1</h5>
            <h4><?php echo $_SESSION['nome'];?></h4>
            <h1>Bem-vindo</h1>
            <p>O site Academic Code tem como objetivo facilitar o aprendizado em programação, utilizando elementos visuais para facilitar o seu aprendizado.</p>
            <a href="../aluno/forum.php">Compare</a>
            <a href="../conteudos/html.php" class="ctaa"><i class="ri-play-fill"></i>Começar</a>
        </div>
            <div class="hero-img">
                <img src="../img/Astronaut suit-amico.png">
            </div>
    </section>
    <div class="icons">
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
        <a href="#"><i class="ri-dribbble-line"></i></a>
    </div>
    <div class="scroll-down">
        <a href="#"><i class="ri-arrow-down-s-fill"></i></a>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="../js/script.js"></script>    
</body>
</html>