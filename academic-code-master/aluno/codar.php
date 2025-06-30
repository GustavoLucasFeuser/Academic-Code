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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codar ao vivo</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
            height: 100vh;
            background: linear-gradient(245.59deg, #2a2535 0%, #2b2732 28.53%, #201b2c 75.52%);
            color: white;
            font-family: Arial, sans-serif;
        }

        header {
            background: linear-gradient(245.59deg, #2a2535 0%, #2b2732 28.53%, #201b2c 75.52%);
            padding: 10px;
            text-align: center;
            z-index: 10;
        }

        .navlist {
            list-style: none;
            padding: 0;
        }

        .navlist li {
            display: inline;
            margin: 0 10px;
        }

        .navlist li a {
            color: white;
            text-decoration: none;
        }

        #editor-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            height: calc(100vh - 60px);
            overflow: hidden;
            margin-top: 30px; 
        }

        .editor-wrapper {
            display: flex;
            justify-content: space-between;
            width: 80%; 
            height: 80%; 
        }

        #editor, iframe {
            width: 48%;
            height: 100%; 
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        #editor {
            padding: 10px;
            font-family: monospace;
            font-size: 14px;
            background-color: white; 
            color: black; 
            resize: none; 
        }

        iframe {
            background-color: white; 
        }

        #back-button {
            margin: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            align-self: flex-start;
        }

        #back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <a href="index.php" class="logo">Academic Code</a>

        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="forum.php">Fórum</a></li>
            <li><a href="atividades.php">Atividades</a></li>
            <li><a href="../conteudos/html.php">Conteúdos</a></li>
            <li><a href="codar.php">Codar</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </header>

  
    <div id="editor-container">
        <div class="editor-wrapper">
            
            <textarea id="editor" placeholder="Escreva seu código HTML aqui..."></textarea>

            
            <iframe id="output"></iframe>
        </div>
    </div>

    <script>
    
        document.getElementById('editor').addEventListener('input', function() {
            const code = document.getElementById('editor').value;
            const iframe = document.getElementById('output');
            const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
            iframeDoc.open();
            iframeDoc.write(code);
            iframeDoc.close();
        });
    </script>

</body>
</html>
