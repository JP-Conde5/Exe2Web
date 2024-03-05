-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/03/2024 às 14:44
-- Versão do servidor: 8.0.35-0ubuntu0.22.04.1
-- Versão do PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `highvision`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Setor`
--

CREATE TABLE `Setor` (
  `id` int NOT NULL,
  `nome` varchar(40) NOT NULL,
  `despesa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Trabalhador`
--

CREATE TABLE `Trabalhador` (
  `id` int NOT NULL,
  `nome` varchar(40) NOT NULL,
  `idade` int NOT NULL,
  `id_setor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Setor`
--
ALTER TABLE `Setor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Trabalhador`
--
ALTER TABLE `Trabalhador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_setor` (`id_setor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Setor`
--
ALTER TABLE `Setor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Trabalhador`
--
ALTER TABLE `Trabalhador`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `Trabalhador`
--
ALTER TABLE `Trabalhador`
  ADD CONSTRAINT `fk_setor` FOREIGN KEY (`id_setor`) REFERENCES `Setor` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
