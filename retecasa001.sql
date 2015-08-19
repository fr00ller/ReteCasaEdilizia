-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2015 at 01:04 AM
-- Server version: 5.5.17
-- PHP Version: 5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retecasa001`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'qq'),
(2, 'Idrauilica');

-- --------------------------------------------------------

--
-- Table structure for table `ditte`
--

CREATE TABLE IF NOT EXISTS `ditte` (
  `id` int(11) NOT NULL,
  `id_utente` int(11) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `ragione_soc` varchar(200) NOT NULL,
  `indirizzo` varchar(100) NOT NULL,
  `cap` varchar(5) DEFAULT NULL,
  `citta` varchar(100) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `piva` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `preventivi`
--

CREATE TABLE IF NOT EXISTS `preventivi` (
  `id` int(11) NOT NULL,
  `id_ditta` int(11) DEFAULT NULL,
  `oggetto` int(11) NOT NULL,
  `descrizione` int(11) NOT NULL,
  `data_inserimento` datetime NOT NULL,
  `data_lavorazione` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(11) NOT NULL,
  `id_ditta` int(11) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ditte`
--
ALTER TABLE `ditte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preventivi`
--
ALTER TABLE `preventivi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ditta` (`id_ditta`),
  ADD KEY `utente` (`id_user`);

--
-- Indexes for table `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ditte`
--
ALTER TABLE `ditte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `preventivi`
--
ALTER TABLE `preventivi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `preventivi`
--
ALTER TABLE `preventivi`
  ADD CONSTRAINT `FK_4C4EDA5E2025F299` FOREIGN KEY (`id_ditta`) REFERENCES `ditte` (`id`),
  ADD CONSTRAINT `preventivi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `utenti` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
