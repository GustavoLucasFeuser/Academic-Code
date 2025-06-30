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
            <li><a href="#introducao">Introdução ao CSS 3</a></li>
            <li><a href="#seletor">Seletor e Especificidade</a></li>
            <li><a href="#propriedades">Propriedades de Estilo de Texto e Cor</a></li>
            <li><a href="#boxmodel">Layout com Box Model</a></li>
            <li><a href="#flexbox">Flexbox</a></li>
            <li><a href="#grid">Grid Layout</a></li>
        </ul>
    </div>

    <!-- Conteúdo principal -->
     
    <div class="container">
    <h1 id="introducao">Introdução ao CSS 3</h1>
    <p>CSS (Cascading Style Sheets) é uma linguagem usada para estilizar e organizar o layout de páginas web. Com CSS, você pode alterar cores, fontes, espaçamento entre elementos, e muito mais, proporcionando uma experiência visual rica para os usuários.</p><br>
    
    <p>O CSS pode ser aplicado de três formas:</p>
    <ul>
        <li><strong>Inline CSS:</strong> Aplicado diretamente em elementos HTML usando o atributo <code>style</code>.</li>
        <li><strong>Internal CSS:</strong> Definido dentro da tag <code>&lt;style&gt;</code> no cabeçalho (<code>&lt;head&gt;</code>) de um documento HTML.</li>
        <li><strong>External CSS:</strong> Usando arquivos CSS externos vinculados com a tag <code>&lt;link&gt;</code>.</li>
    </ul>

    <div class="code">
        <pre><code>&lt;style&gt;<br> h1 { color: blue; }<br>&lt;/style&gt;</code></pre>
    </div>

    <p>No exemplo acima, o CSS interno está alterando a cor do texto do cabeçalho <strong>&lt;h1&gt;</strong> para azul.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>
    
    <!------------------------------------------------------------------------------------------>

    <h1 id="seletor">Seletor e Especificidade</h1>
    <p>Seletores em CSS são usados para "selecionar" os elementos HTML que você deseja estilizar. A especificidade determina quais regras CSS são aplicadas quando múltiplas regras têm o mesmo alvo.</p><br>
    
    <p>Abaixo estão alguns exemplos de seletores CSS:</p>
    <ul>
        <li><strong>Seletor de elemento:</strong> Seleciona todos os elementos do tipo especificado. Exemplo: <code>p { color: red; }</code></li>
        <li><strong>Seletor de classe:</strong> Usa uma classe com <code>.</code> antes do nome. Exemplo: <code>.botao { background-color: blue; }</code></li>
        <li><strong>Seletor de ID:</strong> Usa o ID de um elemento com <code>#</code> antes do nome. Exemplo: <code>#menu { font-size: 18px; }</code></li>
    </ul>

    <p>A especificidade é calculada com base nos seletores usados. IDs têm mais peso que classes, e classes têm mais peso que seletores de elementos.</p>

    <div class="code">
        <pre><code>#menu { color: blue; }<br>.botao { color: green; }<br>p { color: red; }</code></pre>
    </div>

    <p>No exemplo acima, o elemento com o ID <strong>#menu</strong> terá a cor azul, pois o seletor de ID tem maior especificidade.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>
    
        <hr>
    
    <!------------------------------------------------------------------------------------------>

    <h1 id="propriedades">Propriedades de Estilo de Texto e Cor</h1>
    <p>Com CSS, você pode personalizar a aparência do texto em uma página web. Propriedades como <strong>cor</strong>, <strong>tamanho da fonte</strong> e <strong>espaçamento</strong> permitem que você controle como o texto será exibido.</p><br>
    
    <p>Aqui estão algumas propriedades de estilo de texto:</p>
    <ul>
        <li><strong>color:</strong> Define a cor do texto.</li>
        <li><strong>font-size:</strong> Define o tamanho da fonte.</li>
        <li><strong>font-family:</strong> Define a família de fontes.</li>
        <li><strong>text-align:</strong> Alinha o texto (esquerda, centro, direita).</li>
    </ul>

    <div class="code">
        <pre><code>p {<br> color: #333;<br> font-size: 16px;<br> text-align: justify;<br>}</code></pre>
    </div>

    <p>No exemplo acima, o texto no parágrafo <strong>&lt;p&gt;</strong> será cinza, com tamanho de fonte de 16px e alinhamento justificado.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>

    <!------------------------------------------------------------------------------------------>

    <h1 id="boxmodel">Layout com Box Model</h1>
    <p>O Box Model é um conceito fundamental em CSS que envolve todos os elementos HTML como uma caixa retangular. Ele é composto por <strong>margem</strong>, <strong>borda</strong>, <strong>preenchimento (padding)</strong>, e <strong>conteúdo</strong>.</p><br>
    
    <p>Entendendo as partes do Box Model:</p>
    <ul>
        <li><strong>Content:</strong> A área onde o conteúdo (texto, imagens) é exibido.</li>
        <li><strong>Padding:</strong> Espaço entre o conteúdo e a borda.</li>
        <li><strong>Border:</strong> Borda ao redor do padding e do conteúdo.</li>
        <li><strong>Margin:</strong> Espaço fora da borda que separa o elemento de outros.</li>
    </ul>

    <div class="code">
        <pre><code>div {<br> margin: 10px;<br> padding: 20px;<br> border: 2px solid black;<br>}</code></pre>
    </div>

    <p>No exemplo acima, a <strong>div</strong> terá uma margem de 10px, um padding de 20px, e uma borda preta de 2px de espessura.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>

        <!------------------------------------------------------------------------------------------>


        <h1 id="flexbox">Layout com Flexbox</h1>
    <p>O Flexbox é um sistema de layout do CSS que facilita o alinhamento e distribuição de elementos em uma página web, especialmente quando o layout precisa ser responsivo.</p><br>
    
    <p>Os principais conceitos do Flexbox incluem:</p>
    <ul>
        <li><strong>flex-container:</strong> O elemento pai que contém os itens flexíveis.</li>
        <li><strong>flex-item:</strong> Os elementos filhos dentro do container.</li>
        <li><strong>justify-content:</strong> Controla o alinhamento horizontal dos itens.</li>
        <li><strong>align-items:</strong> Controla o alinhamento vertical dos itens.</li>
    </ul>

    <div class="code">
        <pre><code>div {<br> display: flex;<br> justify-content: space-between;<br> align-items: center;<br>}</code></pre>
    </div>

    <p>No exemplo acima, os itens dentro da <strong>div</strong> serão distribuídos com espaçamento uniforme e alinhados no centro verticalmente.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>

    <!------------------------------------------------------------------------------------------>
    <h1 id="grid">Layout com Grid</h1>
    <p>O Grid Layout é uma ferramenta poderosa do CSS para criar layouts de páginas web usando uma grade bidimensional. Ele permite o controle preciso da posição de elementos em linhas e colunas.</p><br>
    
    <p>Principais conceitos do Grid Layout:</p>
    <ul>
        <li><strong>grid-container:</strong> O elemento pai que contém os itens da grade.</li>
        <li><strong>grid-item:</strong> Os elementos filhos dentro da grade.</li>
        <li><strong>grid-template-columns:</strong> Define o número e o tamanho das colunas.</li>
        <li><strong>grid-template-rows:</strong> Define o número e o tamanho das linhas.</li>
    </ul>

    <div class="code">
        <pre><code>div {<br> display: grid;<br> grid-template-columns: 1fr 2fr;<br> grid-template-rows: auto;<br>}</code></pre>
    </div>

    <p>No exemplo acima, a <strong>div</strong> será exibida em uma grade com duas colunas: a primeira ocupando 1 parte e a segunda 2 partes da largura total.</p><br>

    <a href="#" class="btn">Tente fazer uma atividade</a>


    </div>

    <script src="../js/conteudos.js"></script>
</body>
</html>