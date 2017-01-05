-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Janvier 2017 à 20:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `morning`
--

-- --------------------------------------------------------

--
-- Structure de la table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `assets`
--

INSERT INTO `assets` (`id`, `team`, `name`, `description`) VALUES
(2, 'systeme', 'O365', 'Comprend toute le suite office, word, excel, outlook'),
(3, 'systeme', 'Salle serveurs', 'Salles de Courbevoie, Poitiers et les DR'),
(4, 'systeme', 'Sauvegardes', 'Sauvegardes sur bande, incrementielles..'),
(5, 'systeme', 'MIB et Barracuda', 'Antispam et sauvegarde des archives'),
(6, 'systeme', 'Serveurs virtuels', 'Vmware, virtualbox..'),
(7, 'telecom', 'Avaya', 'L''ensemble des serveurs et telephones ip');

-- --------------------------------------------------------

--
-- Structure de la table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `writer` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `states`
--

INSERT INTO `states` (`id`, `team`, `name`, `datetime`, `writer`, `state`, `comment`) VALUES
(1, 'systeme', 'O365', '2017-01-03 12:38:46', 'jballai', 'GOOD', ''),
(2, 'systeme', 'Salle serveurs', '2017-01-03 12:38:46', 'jballai', 'POOR', 'Le serveur frq92mm08 a l''alimentation défaillante, celle ci a coupé deux fois dans la nuit.'),
(3, 'systeme', 'Sauvegardes', '2017-01-03 16:58:48', 'avilpoux', 'GOOD', ''),
(4, 'systeme', 'MIB et Barracuda', '2017-01-03 17:02:01', 'avilpoux', 'GOOD', ''),
(5, 'systeme', 'Serveurs virtuels', '2017-01-03 17:02:01', 'mboutbel', 'WEAK', 'La VM n''a plus d''emplacement de sauvegardes');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'Contributor',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `log`, `email`, `password`, `team`, `role`) VALUES
(1, 'jballai', 'jballai@carglass.fr', 'password', 'systeme', 'administrator'),
(2, 'aamat', 'aamat@carglass.fr', 'password', 'reseau', 'Contributor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
