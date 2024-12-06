-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/12/2024 às 04:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinemathic`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuariocadastro`
--

CREATE TABLE `usuariocadastro` (
  `codigo` int(11) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `admin` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuariocadastro`
--

INSERT INTO `usuariocadastro` (`codigo`, `nome_completo`, `cpf`, `email`, `senha`, `admin`) VALUES
(1, 'Daniel Telecken Schäfer ', '71461931010', 'danielschafer0715@gmail.com', '0389f6f76b040b503253a4eb3efcda49', 1),
(2, 'Thierry Fagundes', '13842344031', 'thifag8@gmail.com', '2cfa3e146a6fbd90bffc1a33d43c87e4', 1),
(3, 'Felipe de Lima Fernandes', '67338330000', 'nataliafelipe@gmail.com', 'natalia2007', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuariocadastro`
--
ALTER TABLE `usuariocadastro`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuariocadastro`
--
ALTER TABLE `usuariocadastro`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
