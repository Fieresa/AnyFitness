-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Avril 2019 à 22:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `adam`
--

-- --------------------------------------------------------

--
-- Structure de la table `restriction`
--

CREATE TABLE IF NOT EXISTS `restriction` (
  `days` varchar(10) NOT NULL,
  `hours` varchar(3) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`days`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `restriction`
--

INSERT INTO `restriction` (`days`, `hours`, `image`) VALUES
('friday', NULL, NULL),
('monday', NULL, NULL),
('saturday', NULL, NULL),
('sunday', NULL, NULL),
('thursday', NULL, NULL),
('tuesday', NULL, NULL),
('wednesday', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
