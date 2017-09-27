-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Set-2017 às 12:00
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prnewswire`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `resumo` text NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `contador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `resumo`, `data`, `imagem`, `contador`) VALUES
(1, 'Esporte', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos', '2017-09-05', './img/esporte.jpg', 0),
(2, 'Ciencia', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos', '2017-09-07', './img/ciencia.jpg', 0),
(3, 'Tecnologia', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos', '2017-09-06', './img/tecnologia.jpg', 0),
(4, 'Alimentação', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos', '2017-09-08', './img/alimentação.jpg', 0),
(5, 'Segurança', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos', '2017-09-05', './img/segurança.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
