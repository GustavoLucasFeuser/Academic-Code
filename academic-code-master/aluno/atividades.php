<?php
    session_start();  
    include_once('../aluno/aluno.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="anonymous" />
    <link rel="stylesheet" href="../css/conteudos.css">
    <title>Conteúdos</title>
</head>
<style>
    #drag-drop-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 20px;
    }

    #code-blocks {
        display: flex;
        gap: 20px;
    }

    #dropzone {
        min-height: 100px;
        max-height: 300px;
        width: 100%;
        background-color: lightgray;
        border: 2px dashed #000;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        overflow: auto;
    }

    #code-blocks div, #dropzone div {
        width: 100px;
        padding: 10px;
        background-color: #f0f0f0;
        border: 1px solid #000;
        text-align: center;
        cursor: move;
    }

    #verificar {
        margin-top: 20px;
        padding: 10px 20px;
        cursor: pointer;
    }

    #feedback {
        margin-top: 20px;
        font-weight: bold;
    }
</style>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <a href="perfil.php"><img src="../img/capivaraa.png" id="user_avatar" alt="Avatar"></a>
    
                <p id="user_infos">
                    <span class="item-description">
                        <?php echo $_SESSION['nome']; ?>
                    </span>
                    <span class="item-description">
                    <?php echo $_SESSION['email']; ?>
                    </span>
                </p>
            </div>
    
            <ul id="side_items">
                <li class="side-item active">
                    <a href="../aluno/index.php">
                        <i class="fa-solid fa-house"></i>
                        <span class="item-description">
                            Menu
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#html">
                    <i class="fa-brands fa-html5"></i>
                        <span class="item-description">
                            Html5
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#css">
                    <i class="fa-brands fa-css3-alt"></i>
                        <span class="item-description">
                            Css3
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#php">
                    <i class="fa-brands fa-php"></i>
                        <span class="item-description">
                            PHP
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                    <i class="fa-brands fa-square-github"></i>
                        <span class="item-description">
                            GitHub
                        </span>
                    </a>
                </li>
            </ul>
    
            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </nav>

    <div class="container">
        <section id="html">
            <h1>HTML5 - Organize o Código</h1>
            <p>Arraste os blocos de código abaixo para formar corretamente uma tag <code>&lt;h1&gt;</code> que exibe o texto "Bem-vindo".</p>

            <div id="drag-drop-container">
                <div id="code-blocks">
                    <div id="block1" draggable="true" ondragstart="drag(event)">&lt;h1&gt;</div>
                    <div id="block2" draggable="true" ondragstart="drag(event)">Bem-vindo</div>
                    <div id="block3" draggable="true" ondragstart="drag(event)">&lt;/h1&gt;</div>
                </div>
                <div id="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)">
                    Arraste os blocos de código para cá
                </div>
            </div>
            <button onclick="checkOrder('html')" id="verificar">Verificar Resposta</button>
            <p id="feedback"></p>
        </section>

        <section id="css">
            <h1>CSS3 - Organize o Código</h1>
            <p>Arraste os blocos de código para formar uma regra CSS que altera a cor do texto de um elemento para azul.</p>

            <div id="drag-drop-container">
                <div id="code-blocks">
                    <div id="block1-css" draggable="true" ondragstart="drag(event)">color</div>
                    <div id="block2-css" draggable="true" ondragstart="drag(event)">:</div>
                    <div id="block3-css" draggable="true" ondragstart="drag(event)">blue</div>
                    <div id="block4-css" draggable="true" ondragstart="drag(event)">;</div>
                </div>
                <div id="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)">
                    Arraste os blocos de código para cá
                </div>
            </div>
            <button onclick="checkOrder('css')" id="verificar">Verificar Resposta</button>
            <p id="feedback"></p>
        </section>

        <section id="php">
    <h1>PHP - Organize o Código</h1>
    <p>Arraste os blocos de código para formar um comando PHP que imprime "Hello, World!".</p>

    <div id="drag-drop-container">
        <div id="code-blocks">
            <div id="block1-php" draggable="true" ondragstart="drag(event)">&lt;?php</div>
            <div id="block2-php" draggable="true" ondragstart="drag(event)">echo</div>
            <div id="block3-php" draggable="true" ondragstart="drag(event)">'Hello, World!';</div>
            <div id="block4-php" draggable="true" ondragstart="drag(event)">?&gt;</div>
        </div>
        <div id="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)">
            Arraste os blocos de código para cá
        </div>
    </div>
    <button onclick="checkOrder('php')" id="verificar">Verificar Resposta</button>
    <p id="feedback"></p>
</section>

<script>
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        const data = ev.dataTransfer.getData("text");
        const draggedElement = document.getElementById(data);

        // Verificar se o destino é o dropzone
        if (ev.target.id === "dropzone" || ev.target.parentElement.id === "dropzone") {
            ev.target.appendChild(draggedElement);
        }
    }

    function checkOrder(section) {
        const correctOrders = {
            'html': ["block1", "block2", "block3"],
            'css': ["block1-css", "block2-css", "block3-css", "block4-css"],
            'php': ["block1-php", "block2-php", "block3-php", "block4-php"]
        };

        const dropzone = document.querySelector(`#${section} #dropzone`);
        const blocks = Array.from(dropzone.children).map(el => el.id);

        const feedback = document.querySelector(`#${section} #feedback`);
        if (JSON.stringify(blocks) === JSON.stringify(correctOrders[section])) {
            feedback.textContent = "Correto! Ótimo trabalho!";
            feedback.style.color = "green";
        } else {
            feedback.textContent = "Ops, a ordem está incorreta. Tente novamente.";
            feedback.style.color = "red";
        }
    }
</script>
</body>
</html>

  
