-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2024 às 13:24
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
-- Estrutura da tabela `usuariocadastro`
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
-- Extraindo dados da tabela `usuariocadastro`
--

INSERT INTO `usuariocadastro` (`codigo`, `nome_completo`, `cpf`, `email`, `senha`, `admin`) VALUES
(1, 'Daniel Telecken Schäfer ', '05565555035', 'danielschafer0715@gmail.com', 'daniel123', 1),
(2, 'Thierry Fagundes', '05582095055', 'thifag8@gmail.com', '2cfa3e146a6fbd90bffc1a33d43c87e4', 1),
(3, 'Felipe de Lima Fernandes', '02648708081', 'nataliafelipe@gmail.com', 'natalia2007', 0),
(4, 'Caio ', '12345678910', 'caio@gmail.com', '0de1a1cbc0597c955c06c2a8e299a896', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuariocadastro`
--
ALTER TABLE `usuariocadastro`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuariocadastro`
--
ALTER TABLE `usuariocadastro`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
