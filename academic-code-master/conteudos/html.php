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
        <h3>Conteúdos de HTML</h3>
        <ul>
            <li><a href="#introducao">Introdução ao HTML</a></li>
            <li><a href="#titulo">Títulos de Cabeçalho</a></li>
            <li><a href="#paragrafo">Parágrafos</a></li>
            <li><a href="#links">Links</a></li>
            <li><a href="#imagens">Imagens</a></li>
        </ul>
    </div>

    <!-- Conteúdo principal -->
     
    <div class="container">
        <h1 id="introducao">Introdução ao HTML</h1>
        <p>HTML (HyperText Markup Language) é a linguagem padrão usada para criar páginas da web. A estrutura de uma página HTML é feita por meio de <strong>tags</strong>, que indicam ao navegador como o conteúdo deve ser exibido.</p><br>
        
        <p>Abaixo, você pode ver um exemplo básico de um documento HTML:</p>
        
        <div class="code">
            <pre><code>&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;Título da Página&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;h1&gt;Bem-vindo ao HTML&lt;/h1&gt;<br>    &lt;p&gt;Este é um parágrafo.&lt;/p&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;</code></pre>
        </div>

        <p>O exemplo acima cria uma página HTML simples com um título e um parágrafo.</p>
        
        <p>Principais elementos de um documento HTML:</p>
        <ul>
        <li><strong>&lt;!DOCTYPE html&gt;</strong>: Declara o tipo do documento como HTML5.</li>
        <li><strong>&lt;html&gt;</strong>: A tag raiz que engloba todo o conteúdo da página.</li>
        <li><strong>&lt;head&gt;</strong>: Contém metadados sobre a página, como o título.</li>
        <li><strong>&lt;body&gt;</strong>: Contém o conteúdo visível da página, como texto, imagens e links.</li><br>
    </ul>
    
    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>
    
    <!------------------------------------------------------------------------------------------>

        <h1 id="titulo">HTML:5 Títulos de Cabeçalho</h1>
        <p>Para criar títulos de cabeçalhos em HTML, você pode usar as tags <strong>&lt;h1&gt;</strong> até <strong>&lt;h6&gt;</strong> onde <strong>&lt;h1&gt;</strong> é o título principal e <strong>&lt;h6&gt;</strong> o de menor importância. Exemplo:<code></code></p><br>
        <div class="code">
            <pre><code>&lt;h1&gt;Título Principal&lt;/h1&gt;<br>&lt;h2&gt;Subtítulo&lt;/h2&gt;<br>&lt;h3&gt;Subtítulo Menor&lt;/h3&gt;</code></pre>
        </div>

        <p>O resultado do exemplo acima será esse:</p>

        <div class="code">
            <pre><code><h1>Título Principal</h1><br><h2>Subtítulo</h2><br><h3>Subtítulo Menor</h3></code></pre>
        </div>

        <a href="../aluno/atividades.php" class="btn">Tente fazer uma atividade</a>
    
        <hr>
    
    <!------------------------------------------------------------------------------------------>

        <h1 id="paragrafo">Parágrafos em HTML</h1>
    <p>Em HTML, parágrafos são definidos usando a tag <strong>&lt;p&gt;</strong>. Parágrafos são blocos de texto que geralmente contêm informações escritas e são automaticamente quebrados para uma nova linha pelo navegador.</p><br>
    
    <p>Abaixo está um exemplo de como criar parágrafos em HTML:</p>
    
    <div class="code">
        <pre><code>&lt;p&gt;Este é o primeiro parágrafo.&lt;/p&gt;<br>&lt;p&gt;Este é o segundo parágrafo.&lt;/p&gt;</code></pre>
    </div>

    <p>No exemplo acima, cada tag <strong>&lt;p&gt;</strong> cria um novo parágrafo, separando-os automaticamente com espaçamento.</p>

    <p>Se você quiser inserir uma quebra de linha simples sem iniciar um novo parágrafo, pode usar a tag <strong>&lt;br&gt;</strong>. Veja o exemplo abaixo:</p>
    
    <div class="code">
        <pre><code>&lt;p&gt;Esta é uma linha.&lt;br&gt;Esta é uma nova linha no mesmo parágrafo.&lt;/p&gt;</code></pre>
    </div>

    <p>Principais dicas sobre parágrafos:</p>
    <ul>
        <li>Parágrafos são automaticamente separados por margens no navegador.</li>
        <li>A tag <strong>&lt;br&gt;</strong> deve ser usada para quebras de linha simples, sem iniciar um novo parágrafo.</li><br>
    </ul>
    
    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>

    <!------------------------------------------------------------------------------------------>

    <h1 id="links">Links em HTML</h1>
    <p>Em HTML, os links são criados usando a tag <strong>&lt;a&gt;</strong>. Links são usados para navegar para outras páginas da web ou recursos, como documentos, imagens, ou até mesmo outras seções da mesma página. A tag <strong>&lt;a&gt;</strong> usa o atributo <strong>href</strong> para especificar o destino do link.</p><br>
    
    <p>Abaixo está um exemplo de como criar um link em HTML:</p>
    
    <div class="code">
        <pre><code>&lt;a href="https://www.exemplo.com"&gt;Visite o Exemplo&lt;/a&gt;</code></pre>
    </div>

    <p>O exemplo acima cria um link de texto que, ao ser clicado, leva o usuário ao site "https://www.exemplo.com". O texto "Visite o Exemplo" é o texto visível do link.</p>

    <p>Você também pode criar links que abrem em uma nova aba usando o atributo <strong>target="_blank"</strong>, como no exemplo abaixo:</p>
    
    <div class="code">
        <pre><code>&lt;a href="https://www.exemplo.com" target="_blank"&gt;Abrir em Nova Aba&lt;/a&gt;</code></pre>
    </div>

    <p>Links podem ser estilizados com CSS para alterar sua aparência, como remover o sublinhado ou alterar a cor. Veja um exemplo básico de como estilizar links:</p>
    
    <div class="code">
        <pre><code>a {<br> color: blue;<br> text-decoration: none;<br>}</code></pre>
    </div>

    <p>Principais dicas sobre links:</p>
    <ul>
        <li>Use o atributo <strong>href</strong> para definir o destino do link.</li>
        <li>Use <strong>target="_blank"</strong> para abrir o link em uma nova aba.</li>
        <li>Links podem ser usados para navegar para URLs externas ou recursos internos.</li><br>
    </ul>
    
    <a href="#" class="btn">Tente fazer uma atividade</a>

    <hr>

        <!------------------------------------------------------------------------------------------>


    <h1 id="imagens">Imagens em HTML</h1>
    <p>Em HTML, as imagens são inseridas usando a tag <strong>&lt;img&gt;</strong>. Essa tag é usada para exibir imagens que podem estar localizadas no seu servidor ou em uma URL externa. A tag <strong>&lt;img&gt;</strong> não tem uma tag de fechamento e usa o atributo <strong>src</strong> para especificar o caminho da imagem e o atributo <strong>alt</strong> para fornecer um texto alternativo para a imagem.</p><br>
    
    <p>Abaixo está um exemplo básico de como inserir uma imagem em HTML:</p>
    
    <div class="code">
        <pre><code>&lt;img src="caminho/da/imagem.jpg" alt="Descrição da imagem"&gt;</code></pre>
    </div>

    <p>O exemplo acima exibe uma imagem a partir do caminho especificado em <strong>src</strong>, e o texto "Descrição da imagem" é mostrado caso a imagem não seja carregada, ou para leitores de tela.</p>

    <p>Você também pode definir o tamanho da imagem usando os atributos <strong>width</strong> e <strong>height</strong>, como mostrado no exemplo a seguir:</p>
    
    <div class="code">
        <pre><code>&lt;img src="caminho/da/imagem.jpg" alt="Descrição da imagem" width="300" height="200"&gt;</code></pre>
    </div>

    <p>O código acima define a largura da imagem para 300 pixels e a altura para 200 pixels.</p>

    <p>Além disso, você pode estilizar as imagens usando CSS. Aqui está um exemplo de como adicionar bordas e ajustar o espaçamento ao redor da imagem:</p>
    
    <div class="code">
        <pre><code>img {<br> border: 2px solid #000;<br> margin: 10px;<br>}</code></pre>
    </div>

    <p>Principais dicas sobre imagens:</p>
    <ul>
        <li>Use o atributo <strong>src</strong> para especificar o caminho da imagem.</li>
        <li>O atributo <strong>alt</strong> é importante para acessibilidade e SEO.</li>
        <li>Você pode definir o tamanho da imagem com os atributos <strong>width</strong> e <strong>height</strong>.</li>
        <li>Imagens podem ser estilizadas com CSS para ajustar aparência e layout.</li><br>
    </ul>

    <a href="#" class="btn">Tente fazer uma atividade</a>


    </div>

    <script src="../js/conteudos.js"></script>
</body>
</html>