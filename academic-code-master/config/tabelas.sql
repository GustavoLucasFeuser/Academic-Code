CREATE Database academiccode;
USE academiccode;

CREATE TABLE alunos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(250) NOT NULL,
    email VARCHAR(250) UNIQUE NOT NULL,
    usuario VARCHAR(250) UNIQUE NOT NULL,
    senha VARCHAR(250) NOT NULL,
    nivel ENUM('iniciante', 'intermediario', 'avancado') NOT NULL DEFAULT 'iniciante',
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    foto_perfil VARCHAR(250)
);

CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(250) NOT NULL,
    conteudo TEXT NOT NULL,
    autor VARCHAR(250) NOT NULL,
    data_publicacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);