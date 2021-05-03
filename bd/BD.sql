-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03-Maio-2021 às 22:30
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud-php-procedural`
--
CREATE DATABASE IF NOT EXISTS `crud-php-procedural` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `crud-php-procedural`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE IF NOT EXISTS `carro` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `matricula` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`id`, `nome`, `cor`, `matricula`) VALUES
(2, 'HYUNDAI I10', 'verde', 'AMBLK341'),
(3, 'HYUNDAI I10', 'preto', '1234MKAS'),
(4, 'HYUNDAI I10', 'laranja', 'LMKA89S'),
(5, 'HYUNDAI I10', 'preto', 'MKA8HHSD'),
(6, 'HYUNDAI I10', 'preto', 'KJA87SJH'),
(7, 'HYUNDAI I10', 'dourado', 'LK864AH'),
(8, 'HYUNDAI I10', 'violeta', '98AJHASD'),
(9, 'HYUNDAI I10', 'branco', 'LKA8IUS'),
(10, 'HYUNDAI I10', 'branco', 'LAK8YS'),
(11, 'HYUNDAY I22', 'verde', 'AML73DF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
