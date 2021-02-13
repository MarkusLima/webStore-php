-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Fev-2021 às 22:42
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `php_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `hash_validacao` varchar(250) NOT NULL,
  `ativo` tinyint NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `senha`, `endereco`, `cidade`, `bairro`, `cep`, `telefone`, `estado`, `complemento`, `hash_validacao`, `ativo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Markus', '', '', '', '', '', '', '', '', '0', '', 0, '2021-02-13 19:42:14', '2021-02-13 19:42:14', NULL),
(2, 'Markus', '', '', '', '', '', '', '', '', '0', '', 0, '2021-02-13 19:42:14', '2021-02-13 19:42:14', NULL),
(3, 'jucilane', '', '', '', '', '', '', '', '', '0', '', 0, '2021-02-13 19:42:14', '2021-02-13 19:42:14', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
