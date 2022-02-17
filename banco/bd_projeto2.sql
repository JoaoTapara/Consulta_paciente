-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Nov-2021 às 00:24
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_projeto2`
--
CREATE DATABASE IF NOT EXISTS `bd_projeto2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bd_projeto2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--
-- Criação: 20-Nov-2021 às 13:59
-- Última actualização: 22-Nov-2021 às 00:23
--

DROP TABLE IF EXISTS `tb_paciente`;
CREATE TABLE IF NOT EXISTS `tb_paciente` (
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  `paciente` varchar(80) NOT NULL,
  `tipo_sanguineo` char(2) NOT NULL,
  `fator_rh` char(1) NOT NULL,
  `convenio` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`id_paciente`, `paciente`, `tipo_sanguineo`, `fator_rh`, `convenio`) VALUES
(1, 'Ugo', 'AB', '+', 1),
(2, 'Bia', 'O', '+', 0),
(3, 'Bianca', 'B', '-', 0),
(4, 'Antonio', 'B', '+', 1),
(5, 'Gabi', 'A', '-', 1),
(6, 'Sabrina', 'B', '-', 1),
(7, 'Rena', 'O', '+', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--
-- Criação: 20-Nov-2021 às 13:59
-- Última actualização: 20-Nov-2021 às 13:59
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `senha` varchar(5) NOT NULL,
  `tipo` varchar(5) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `login`, `nome`, `senha`, `tipo`) VALUES
(1, 'Maria', 'Maria da Silva', '1234', 'admin'),
(2, 'Paulo', 'Paulo Oliveira', '4321', 'comum');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
