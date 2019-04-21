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
-- Structure de la table `code`
--

CREATE TABLE IF NOT EXISTS `code` (
  `num` bigint(12) NOT NULL,
  `montant` int(11) NOT NULL,
  `validite` int(11) NOT NULL,
  `dateajout` date NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `code`
--

INSERT INTO `code` (`num`, `montant`, `validite`, `dateajout`, `user`) VALUES
(111111111111, 1000, 1, '2019-03-31', 5),
(123456123456, 50, 1, '0000-00-00', 5),
(123456789123, 50, 1, '2019-04-10', 5),
(154687925364, 50, 1, '2019-03-30', 5),
(213333333333, 25, 1, '2019-04-19', 33),
(222222222222, 200, 1, '2019-03-31', 5),
(222332111233, 60, 0, '2019-04-20', 0),
(333333333333, 60, 1, '2019-04-01', 5),
(380038003800, 80, 1, '2019-03-31', 5),
(470047004700, 60, 1, '2019-03-31', 5),
(474747474747, 100, 1, '2019-03-05', 5),
(555555555555, 30, 1, '2019-04-09', 5),
(666666666666, 47, 1, '2019-04-19', 33);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
