-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Jul-2022 às 03:56
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
-- Banco de dados: `faeterj3dawexer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus`
--

DROP TABLE IF EXISTS `onibus`;
CREATE TABLE IF NOT EXISTS `onibus` (
  `Id` int(36) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `qtdAssentos` varchar(100) NOT NULL,
  `temBanheiro` varchar(100) NOT NULL,
  `temArCondicionado` varchar(100) NOT NULL,
  `Chassis` varchar(100) NOT NULL,
  `Placa` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `onibus`
--

INSERT INTO `onibus` (`Id`, `Marca`, `Modelo`, `qtdAssentos`, `temBanheiro`, `temArCondicionado`, `Chassis`, `Placa`) VALUES
(1, 'Volkswagen', '820', '22', 'Nao', 'Sim', 'Scania', 'E200011'),
(2, 'Volvo', '678', '27', 'Sim', 'Sim', 'Eletrico', 'JR67790'),
(3, 'Marcopolo ', '717', '24', 'Nao', 'Nao', 'Monobloco ', 'BR30651'),
(4, 'Volkswagen', '345', '20', 'Sim', 'Sim', 'Monobloco ', 'TV20050'),
(6, 'Jimbei', '455', '18', 'Nao', 'Nao', 'Subchassi', 'PO20567');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(13) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Matricula` varchar(15) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `Funcao` varchar(50) CHARACTER SET latin1 COLLATE latin1_danish_ci NOT NULL,
  `Senha` varchar(100) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12360 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `Nome`, `Matricula`, `Funcao`, `Senha`) VALUES
(10, 'Vitoria Santos de Vieira', '171047040001009', 'Recepcionista', '78966'),
(11, 'Rodrigo Mussi', '1710470400010', 'Deus', '34356'),
(13, 'Leonardo Kitsune', '1710470400065', 'Programador', '34357'),
(12345, 'Uraraka Ochako', '1610470400012', 'Analista de Sistemas', '34389'),
(12346, 'Rodrigo Mussi', '1710470400010', 'Auxiliar de Ensumos', '34356'),
(12347, 'Rosangela Baiana De Freitas ', '2110460400010', 'Administracao', '22346'),
(12348, 'Diego GO', '1410470400015', 'Auxiliar de Ensumos', '34356'),
(12349, 'Diego Oliver', '1410470400345', 'Auxiliar de Ensumos', '656564'),
(12352, 'Francisco Matheus', '1710470777865', 'ADM', '34777'),
(12351, 'Dio Brando', '6610470400016', 'Programador', '666'),
(12356, 'Sabrina Sato', '1710470400050', 'Programadora', '23456'),
(12357, 'Chico Barney', '1820470471745', 'Opinador', '29146'),
(12359, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuário`
--

DROP TABLE IF EXISTS `usuário`;
CREATE TABLE IF NOT EXISTS `usuário` (
  `Id` varchar(36) DEFAULT NULL,
  `Nome` varchar(100) NOT NULL,
  `Matricula` varchar(15) NOT NULL,
  `Funcao` varchar(50) NOT NULL,
  `Senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuário`
--

INSERT INTO `usuário` (`Id`, `Nome`, `Matricula`, `Funcao`, `Senha`) VALUES
('10', 'Victória Marques Dias', '171047040001011', 'ADM', '12345'),
('10', 'Victória Marques Dias', '171047040001011', 'ADM', '12345'),
('9', 'Guilherme Souza Dias', '181097040001011', 'Eletricísta', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
