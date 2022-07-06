-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Jul-2022 às 20:18
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
) ENGINE=MyISAM AUTO_INCREMENT=12354 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `Nome`, `Matricula`, `Funcao`, `Senha`) VALUES
(10, 'Vitoria Santos de Oliveira', '171047040001009', 'Recepcionista', '78999'),
(11, 'Rodrigo Mussi', '1710470400010', 'Deus', '34356'),
(13, 'Leonardo Camargo', '1710470400065', 'Programador', '34357'),
(12345, 'Uraraka Ochako', '1610470400012', 'Analista de Sistemas', '34389'),
(12346, 'Rodrigo Mussi', '1710470400010', 'Auxiliar de Ensumos', '34356'),
(12347, 'Rosangela Baiana De Freitas ', '2110460400010', 'Administracao', '22346'),
(12348, 'Diego GO', '1410470400015', 'Auxiliar de Ensumos', '34356'),
(12349, 'Diego Oliver', '1410470400345', 'Auxiliar de Ensumos', '656564'),
(12352, 'Francisco Matheus', '1710470777865', 'CrÃ­tico de Jogos', '34777'),
(12351, 'Dio Brando', '6610470400016', 'Programador', '666');

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
