<?php
session_start(); 

require_once('../classes/Database.class.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['post-title'];
    $conteudo = $_POST['post-content'];
    $autor = $_SESSION['nome']; 

    try {
        $sql = "INSERT INTO posts (titulo, conteudo, autor) VALUES (:titulo, :conteudo, :autor)";
        Database::executar($sql, [
            ':titulo' => $titulo,
            ':conteudo' => $conteudo,
            ':autor' => $autor
        ]);
        $mensagem = "Post publicado com sucesso!";
    } catch (Exception $e) {
        $mensagem = "Erro ao publicar o post: " . $e->getMessage();
    }
}

// Buscar os posts no banco de dados
try {
    $sql = "SELECT * FROM posts ORDER BY data_publicacao DESC";
    $conexao = Database::getInstance();
    $comando = $conexao->prepare($sql);
    $comando->execute();
    $posts = $comando->fetchAll(PDO::FETCH_ASSOC); // Obter os resultados como array associativo
} catch (Exception $e) {
    $mensagem = "Erro ao carregar os posts: " . $e->getMessage();
}