-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2017 às 20:35
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jean`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `razao` varchar(132) NOT NULL,
  `nome` varchar(132) NOT NULL,
  `cnpj` varchar(25) NOT NULL,
  `ddd` int(3) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `site` varchar(132) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `razao`, `nome`, `cnpj`, `ddd`, `telefone`, `site`) VALUES
(1, 'teste', 'Jean Zadoreski', '05285274958', 47, '34342002', 'zadoreski@gmail.com'),
(2, 'teste', 'Jean Zadoreski', '000000', 47, '47 34342002', 'zadoreski@gmail.com'),
(3, 'teste', 'Jean Zadoreski', '000000', 47, '4734342002', 'zadoreski@gmail.com'),
(4, 'teste', 'Jean Zadoreski', '000000', 47, '4734342002', 'zadoreski@gmail.com'),
(12, 'TESTE', 'TESTE', '000000', 0, '34342002', 'zadoreski@gmail.com'),
(6, 'teste', 'teste', '0000', 0, '0000000', 'teste@teste.com.be'),
(7, 'teste1', 'teste', '00000', 0, '000000000', 'teste'),
(8, 'opa', 'opa', '00000', 0, '000000000', 'opa1'),
(9, 'teste', 'Jean Zadoreski', '000', 0, '000000', 'zadoreski@gmail.com'),
(10, 'teste', 'teste', '0000', 0, '0000000', 'teste'),
(11, 'Jean Zadoreski', 'PROGRAMADOR', '0000000', 0, '34342002', 'zadoreski@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
