-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 07-Abr-2022 às 15:25
-- Versão do servidor: 5.7.25
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `signin`
--

CREATE TABLE `signin` (
  `cod` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `signin`
--

INSERT INTO `signin` (`cod`, `user`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Carlin', 'c320da61ab1833c3a4c25faa6f8b5fc2'),
(3, 'lorenzo', '14203778acb02eb9207e4cb05f023c02'),
(4, 'marcos', '0f5f58c35f8df74a12763a09f8780f73'),
(5, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'yohann', '7c8609ffaff78d0eb8bb0353894dc628'),
(7, 'artur', 'ddfe75521cfabceaad689feafcdfc638'),
(8, 'artur', 'ddfe75521cfabceaad689feafcdfc638'),
(9, 'negao', 'bcc974fb626c6568aebdc0a94be09b9a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
