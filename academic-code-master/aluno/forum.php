<?php
require_once ('../classes/Acao.forum.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="anonymous" />
  <title>Fórum</title>
  <link rel="stylesheet" href="../css/forum.css">
</head> 
<body>
  <div class="dashboard">
    <aside class="sidebar">
      <div class="profile">
        <img src="../img/capivaraa.png" alt="Profile Picture" class="profile-picture">
        <div class="logo">
            <h3>Academic Code</h3>
        </div>

      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="perfil.php">Perfil</a></li>
          <li><a href="atividades.php">Atividades</a></li>
          <li><a href="../conteudos/html.php">Conteúdos</a></li>
        </ul>
      </nav>
      
    </aside>
    <main class="main-content">
      <header class="search-bar">
        <input type="text" placeholder="Pesquise aqui...">
      </header>
      <div class="applications">
        <aside class="application-list">
        
        </aside>
       <section class="application-details">
   <!-- Exibição dos posts -->
   <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="forum-post">
                        <h2><?php echo htmlspecialchars($post['titulo']); ?></h2>
                        <p>Autor: <strong><?php echo htmlspecialchars($post['autor']); ?></strong></p>
                        <p>Data: <?php echo date('d/m/Y H:i:s', strtotime($post['data_publicacao'])); ?></p>
                        <p><?php echo nl2br(htmlspecialchars($post['conteudo'])); ?></p>
                        <button type="submit" class="btn" style="margin-top: 1%;">Responder</button>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum post encontrado.</p>
            <?php endif; ?>
  </section>

        <aside class="applicant-details">
        <?php if (isset($mensagem)): ?>
            <p><?php echo $mensagem; ?></p>
        <?php endif; ?>

        <h3>Criar Novo Post</h3>
        <form action="forum.php" method="POST">
            <label for="post-title">Título:</label>
            <input type="text" id="post-title" name="post-title" required>

            <label for="post-content">Conteúdo:</label>
            <textarea id="post-content" name="post-content" rows="4" required></textarea>

            <button type="submit" class="btn">Publicar</button>
        </form>
        </aside>
      </div>
    </main>
  </div>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, sans-serif;
    color: #333;
    background-color: #f5f5f5;
  }
  
  .dashboard {
    display: flex;
    height: 100vh;
  }
  
  .logo{
    font-family: 'Courier New', Courier, monospace;
  }
  
  .sidebar {
    background-color: #2f2841;
    color: white;
    padding: 20px;
    width: 250px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .sidebar .profile {
    text-align: center;
  }
  
  .profile-picture {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-bottom: 10px;
  }
  
  nav ul {
    list-style: none;
    margin-top: 20px;
  }
  
  nav ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px 0;
  }
  
  nav ul li a:hover {
    background-color: #3e4155;
  }
  
  .help {
    margin-top: 20px;
    text-align: center;
  }
  
  .button {
    display: inline-block;
    background-color: #5568fe;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
  }
  
  .main-content {
    flex: 1;
    display: flex;
    flex-direction: column;
  }
  
  .search-bar {
    background-color: #2f2841;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
  }
  
  .search-bar input {
    flex: 1;
    padding: 10px;
    border: none;
    border-radius: 5px;
  }
  
  .icons {
    display: flex;
    gap: 15px;
    align-items: center;
  }
  
  .icon-profile {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
  
  .btn{
    background-color: #2ac075d1;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
      border: none;
  }
  
  .applications {
    display: flex;
    flex: 1;
    padding: 20px;
    gap: 20px;
  }
  
  .application-list {
    width: 25%;
    background-color: white;
    border-radius: 10px;
    padding: 15px;
  }
  
  .application-list ul {
    list-style: none;
  }
  
  .application-list li {
    padding: 10px;
    margin-bottom: 10px;
    cursor: pointer;
  }
  
  .application-list li.active {
    background-color: #f0f0f0;
  }
  
  .application-details {
    flex: 2;
    background-color: white;
    border-radius: 10px;
    padding: 15px;
  }
  
  .application-details img {
    width: 100%;
    border-radius: 10px;
  }
  
  .applicant-details {
    width: 25%;
    background-color: white;
    border-radius: 10px;
    padding: 15px;
  }
  
  </style>
</body>
</html>
