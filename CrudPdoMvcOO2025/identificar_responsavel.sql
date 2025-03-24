-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/03/2025 às 10:33
-- Versão do servidor: 8.0.41
-- Versão do PHP: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `identificar_responsavel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estudantes`
--

CREATE TABLE `estudantes` (
  `id` int NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `ano_ingresso` year NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `estudantes`
--

INSERT INTO `estudantes` (`id`, `matricula`, `nome`, `curso`, `ano_ingresso`) VALUES
(1, '1525230', 'Mayara', 'Des Sistemas', '2023'),
(5, '1523324', 'Lucas Oliveira3', 'Des Sistemas', '2022'),
(7, '2536476', 'Lívia', 'informática', '2023');

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsaveis`
--

CREATE TABLE `responsaveis` (
  `id` int NOT NULL,
  `id_estudante` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `contato` varchar(20) NOT NULL,
  `parentesco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `responsaveis`
--

INSERT INTO `responsaveis` (`id`, `id_estudante`, `nome`, `contato`, `parentesco`) VALUES
(1, 1, 'Edicilene', '88888888888', 'mãe'),
(2, 5, 'José Pereira', '8888888888', 'pai');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `estudantes`
--
ALTER TABLE `estudantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Índices de tabela `responsaveis`
--
ALTER TABLE `responsaveis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudante` (`id_estudante`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estudantes`
--
ALTER TABLE `estudantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `responsaveis`
--
ALTER TABLE `responsaveis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `responsaveis`
--
ALTER TABLE `responsaveis`
  ADD CONSTRAINT `responsaveis_ibfk_1` FOREIGN KEY (`id_estudante`) REFERENCES `estudantes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
