-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Jul-2023 às 19:05
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `id_filme` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `ano_lancamento` int NOT NULL,
  `duracao` int NOT NULL,
  `genero` varchar(30) NOT NULL,
  `faixa_etaria` int NOT NULL,
  PRIMARY KEY (`id_filme`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id_filme`, `nome`, `ano_lancamento`, `duracao`, `genero`, `faixa_etaria`) VALUES
(2, 'azul', 2002, 200, 'acao', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `login`, `senha`, `status`) VALUES
(1, 'pedro', 'pedro', 'pedro', 0),
(3, 'bernardo1', 'bernardo2', 'bernardo', 0),
(8, '1', '1', '1', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
