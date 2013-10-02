-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Mer 02 Octobre 2013 à 16:01
-- Version du serveur: 5.1.54
-- Version de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(3) NOT NULL AUTO_INCREMENT,
  `message` varchar(300) NOT NULL,
  `DateCreation` date NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `HeureCreation` time NOT NULL,
  PRIMARY KEY (`idMessage`),
  KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idMessage`, `message`, `DateCreation`, `pseudo`, `HeureCreation`) VALUES
(125, 'salut', '2013-09-30', 'Dandy2Love', '13:31:28'),
(126, 'aaa', '2013-09-30', 'Dandy2Love', '13:31:35'),
(127, 'ooo', '2013-09-30', 'Dandy2Love', '13:33:41'),
(128, 'Comment vas tu ? ', '2013-09-30', 'Dandy2Love', '13:39:09'),
(129, 'Je vais bien ', '2013-09-30', 'Dandy2Love', '14:08:20'),
(130, '[b]Texte[/b] ', '2013-09-30', 'Dandy2Love', '14:08:53'),
(131, ':D', '2013-09-30', 'admin', '14:30:36'),
(132, 'je vais bien', '2013-09-30', 'admin', '14:49:48'),
(133, 'Tu pensais Ã  quoi ? ', '2013-09-30', 'Sunny', '14:50:15'),
(134, 'Je suis bien connectÃ© ', '2013-09-30', 'Professionel', '14:51:03'),
(135, 'Bien que la conversation ne sert Ã  rien ', '2013-09-30', 'Professionel', '14:51:36'),
(136, 'yo', '2013-10-02', 'Sunny', '14:19:55'),
(137, 'Bon bon je suis en mode agile', '2013-10-02', 'Sunny', '14:22:32'),
(138, 'Maintenant on va Ã©crire le dÃ©poser dans le github ', '2013-10-02', 'admin', '14:33:49');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(45) NOT NULL,
  `statut` varchar(30) NOT NULL,
  `heureDateConnexion` date NOT NULL,
  `topAdmin` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `password`, `statut`, `heureDateConnexion`, `topAdmin`) VALUES
('admin', '1234', 'online', '0000-00-00', 'oui'),
('Dandy2Love', 'pokemon6000', '', '0000-00-00', ''),
('Sunny', 'soleil', '', '0000-00-00', ''),
('Professionel', '1234', '', '0000-00-00', '');
