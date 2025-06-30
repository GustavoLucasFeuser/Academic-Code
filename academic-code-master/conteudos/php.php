<?php
    session_start();  
    include_once('../aluno/aluno.php'); 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/conteudos.css">
    <title>Conteúdos</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <a href="../aluno/perfil.php">
                    <img src="../img/capivaraa.png" id="user_avatar" alt="Avatar">
                </a>
                <p id="user_infos">
                    <span class="item-description">
                        <?php echo $_SESSION['nome'];?>
                    </span>
                    <span class="item-description">
                    <?php echo $_SESSION['email'];?>
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
                    <a href="html.php">
                    <i class="fa-brands fa-html5"></i>
                        <span class="item-description">
                            Html5
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="css.php">
                    <i class="fa-brands fa-css3-alt"></i>
                        <span class="item-description">
                            Css3
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="php.php">
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

    <!-- Coluna de links -->
    <div class="links">
        <h3>Conteúdos de CSS 3</h3>
        <ul>
            <li><a href="#introducao">Introdução ao PHP</a></li>
            <li><a href="#varaiavel">Variáveis</a></li>
            <li><a href="#if">If e Else em PHP</a></li>
            <li><a href="#for">Estrutura de Repetição: For em PHP</a></li>
            <li><a href="#foreach">Estrutura de Repetição: Foreach em PHP</a></li>
        </ul>
    </div>

    <!-- Conteúdo principal -->
     
    <div class="container">
    <h1 id="introducao">Introdução ao PHP</h1>
    <p>PHP (Hypertext Preprocessor) é uma linguagem de script do lado do servidor, amplamente utilizada para o desenvolvimento de sites dinâmicos e interativos. Com PHP, você pode conectar-se a bancos de dados, gerar conteúdo dinâmico e muito mais.</p><br>

    <p>O código PHP é executado no servidor, e o resultado é enviado para o navegador como HTML. Abaixo, um exemplo simples de como o PHP funciona:</p>

    <div class="code">
        <pre><code>&lt;?php<br> echo "Olá, mundo!";<br>?&gt;</code></pre>
    </div>

    <p>No exemplo acima, o código PHP usa o comando <strong>echo</strong> para exibir o texto "Olá, mundo!" na página.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>
    
    <!------------------------------------------------------------------------------------------>

    <h1 id="varaiavel">Variáveis em PHP</h1>
    <p>As variáveis em PHP são usadas para armazenar valores, como números, strings ou arrays. Elas sempre começam com o símbolo <strong>$</strong> seguido do nome da variável. Os tipos de dados das variáveis são determinados automaticamente com base no valor atribuído a elas.</p><br>
    
    <p>Abaixo está um exemplo de uso de variáveis em PHP:</p>

    <div class="code">
        <pre><code>&lt;?php<br> $nome = "João";<br> $idade = 25;<br> echo "Nome: " . $nome . " - Idade: " . $idade;<br>?&gt;</code></pre>
    </div>

    <p>No exemplo acima, criamos duas variáveis: <strong>$nome</strong> e <strong>$idade</strong>, e usamos o <strong>echo</strong> para imprimir os valores armazenados nelas.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>
    
        <hr>
    
    <!------------------------------------------------------------------------------------------>

    <h1 id="if">If e Else em PHP</h1>
    <p>No PHP, as estruturas condicionais <strong>if</strong> e <strong>else</strong> são usadas para executar um bloco de código baseado em uma condição. Se a condição for verdadeira, o bloco <strong>if</strong> é executado; caso contrário, o bloco <strong>else</strong> será executado (se presente).</p><br>
    
    <p>Veja um exemplo simples:</p>

    <div class="code">
        <pre><code>&lt;?php<br> $idade = 18;<br> if ($idade >= 18) {<br> echo "Você é maior de idade.";<br> } else {<br> echo "Você é menor de idade.";<br> }<br>?&gt;</code></pre>
    </div>

    <p>No exemplo acima, a estrutura condicional verifica se a variável <strong>$idade</strong> é maior ou igual a 18, e exibe uma mensagem de acordo.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>

    <!------------------------------------------------------------------------------------------>

    <h1 id="for">Estrutura de Repetição: For em PHP</h1>
    <p>A estrutura de repetição <strong>for</strong> em PHP é usada quando você sabe de antemão quantas vezes deseja repetir um bloco de código. Ela permite a iteração por um número de vezes determinado.</p><br>
    
    <p>Veja o exemplo de um loop <strong>for</strong> em PHP:</p>

    <div class="code">
        <pre><code>&lt;?php<br> for ($i = 0; $i < 5; $i++) {<br> echo "Número: " . $i . "&lt;br&gt;";<br> }<br>?&gt;</code></pre>
    </div>

    <p>No exemplo acima, o laço <strong>for</strong> executa o bloco de código 5 vezes, imprimindo o valor da variável <strong>$i</strong> a cada iteração.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>
    
    <hr>

        <!------------------------------------------------------------------------------------------>
        <h1 id="foreach">Estrutura de Repetição: Foreach em PHP</h1>
    <p>O <strong>foreach</strong> é usado em PHP para iterar sobre arrays ou objetos. Ele facilita a navegação pelos elementos sem a necessidade de controlar manualmente a variável de contagem.</p><br>
    
    <p>Aqui está um exemplo de uso do <strong>foreach</strong>:</p>

    <div class="code">
        <pre><code>&lt;?php<br> $frutas = array("Maçã", "Banana", "Laranja");<br> foreach ($frutas as $fruta) {<br> echo "Fruta: " . $fruta . "&lt;br&gt;";<br> }<br>?&gt;</code></pre>
    </div>

    <p>No exemplo acima, o <strong>foreach</strong> percorre o array <strong>$frutas</strong>, imprimindo o nome de cada fruta em uma nova linha.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>
    </div>

    <script src="../js/conteudos.js"></script>
</body>
</html>