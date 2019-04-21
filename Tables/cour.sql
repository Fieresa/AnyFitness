-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Avril 2019 à 22:47
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
-- Structure de la table `cour`
--

CREATE TABLE IF NOT EXISTS `cour` (
  `Id_cour` int(10) NOT NULL,
  `Id_coach` int(10) NOT NULL,
  `Id_backupcoach` int(10) DEFAULT NULL,
  `Capacity` int(10) DEFAULT NULL,
  `Duration` int(3) DEFAULT NULL,
  `Heure` int(2) DEFAULT NULL,
  `Jour` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_cour`),
  KEY `cour_ibfk_1` (`Id_coach`),
  KEY `cour_ibfk_2` (`Id_backupcoach`),
  KEY `cour_ibfk_3` (`Jour`),
  KEY `Capacity` (`Capacity`),
  KEY `Capacity_2` (`Capacity`),
  KEY `Id_coach` (`Id_coach`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cour`
--

INSERT INTO `cour` (`Id_cour`, `Id_coach`, `Id_backupcoach`, `Capacity`, `Duration`, `Heure`, `Jour`) VALUES
(1, 1, 55, 6, 60, 2, 'friday');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
