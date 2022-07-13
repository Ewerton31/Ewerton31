-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Jul-2022 às 11:23
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faeterj3dawnoite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus`
--

DROP TABLE IF EXISTS `onibus`;
CREATE TABLE IF NOT EXISTS `onibus` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `modelo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `qtdAssentos` int(11) NOT NULL,
  `temBanheiro` tinyint(1) NOT NULL,
  `temArCondicionado` tinyint(1) NOT NULL,
  `chassis` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `placa` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `onibus`
--

INSERT INTO `onibus` (`id`, `marca`, `modelo`, `qtdAssentos`, `temBanheiro`, `temArCondicionado`, `chassis`, `placa`) VALUES
('9', 'Torino ', '157', 18, 1, 1, 'LO 815', 'TP134567'),
('2', 'Volvo', '717', 22, 0, 0, 'Monobloco', 'E200011'),
('3', 'Jimbei', '455', 18, 0, 1, 'Scania', 'AU23476'),
('4', 'Volkswagen', '820', 20, 1, 1, 'Subchassi', 'BR30651'),
('5', 'Volvo', '234', 22, 1, 1, 'Scania', 'JR67790'),
('6', 'GranVia', '854', 20, 1, 1, 'Subchassi', 'URI2022'),
('7', 'Volvo', '790', 24, 1, 0, 'Scania', 'WS234512'),
('1', 'Volkswagen', '549', 18, 1, 0, 'Monobloco', 'URI2019'),
('8', 'Volvo', '717', 27, 1, 1, 'Subchassi', 'TV20043'),
('10', 'Jimbei', '718', 26, 0, 0, 'LO 815', 'PO20034');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
