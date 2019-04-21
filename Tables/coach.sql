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
-- Structure de la table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `Id_coach` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `Path` varchar(100) NOT NULL DEFAULT 'images.png',
  PRIMARY KEY (`Id_coach`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `coach`
--

INSERT INTO `coach` (`Id_coach`, `nom`, `prenom`, `Path`) VALUES
(1, 'bhim', 'firas', 'bhim.jpg'),
(55, '5', '5', 'images.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
