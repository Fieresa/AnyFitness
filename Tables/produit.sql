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
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `categorie` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `Qt` int(11) NOT NULL,
  `folder` varchar(350) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `categorie`, `prix`, `Qt`, `folder`) VALUES
(1, 'halteres 5kg', 1, 11, 49, 'Product/haltere10kg.jpg'),
(2, 'halteres 10kg', 1, 0, 50, 'Product/haltere10kg.jpg'),
(3, 'whey 2kg', 2, 13, 1, 'Product/whey2kg.jpg'),
(11, 'proteine', 2, 0, 50, 'Product/proteine.jpg'),
(20, 'vitamineC', 1, 50, 1, 'Product/vitamine.jpg'),
(35, 'Gerd', 2, 0, 5, 'Product/gerd.jpg'),
(99999, 'bhim', 1, 0, 5, 'Product/bhim.jpg');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `categorie` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`NoC`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
