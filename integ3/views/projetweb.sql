-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 20 Avril 2019 à 02:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `Id_coach` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `Path` varchar(100) NOT NULL DEFAULT 'images.png',
  PRIMARY KEY (`Id_coach`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  KEY `Capacity_2` (`Capacity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(1, 'fallaggerd.png'),
(2, 'classes-8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `Id_reservation` int(10) NOT NULL,
  `Id_cour` int(10) NOT NULL,
  `Id_client` int(10) NOT NULL,
  `dates` date DEFAULT NULL,
  PRIMARY KEY (`Id_reservation`),
  KEY `reservation_ibfk_1` (`Id_cour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_ibfk_1` FOREIGN KEY (`Id_coach`) REFERENCES `coach` (`Id_coach`) ON DELETE NO ACTION,
  ADD CONSTRAINT `cour_ibfk_2` FOREIGN KEY (`Id_backupcoach`) REFERENCES `coach` (`Id_coach`) ON DELETE NO ACTION,
  ADD CONSTRAINT `cour_ibfk_3` FOREIGN KEY (`Jour`) REFERENCES `restriction` (`days`) ON DELETE NO ACTION;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Id_cour`) REFERENCES `cour` (`Id_cour`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
