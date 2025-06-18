-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS sistema_login DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE sistema_login;

-- Tabela: administradores (usuários do sistema que cadastram orientadores)
CREATE TABLE IF NOT EXISTS administradores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Tabela: orientadores (acessam o sistema para cadastrar alunos)
CREATE TABLE IF NOT EXISTS orientadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    curso VARCHAR(100) NOT NULL
);

-- Tabela: alunos (cadastrados por orientadores)
CREATE TABLE IF NOT EXISTS alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    matricula VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    curso VARCHAR(100) NOT NULL,
    orientador_id INT NOT NULL,
    FOREIGN KEY (orientador_id) REFERENCES orientadores(id) ON DELETE CASCADE
);
