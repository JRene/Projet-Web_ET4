-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 23 Août 2015 à 23:31
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `polycar`
--

-- --------------------------------------------------------

--
-- Structure de la table `chefgroupe`
--

CREATE TABLE IF NOT EXISTS `chefgroupe` (
  `idUtilisateur` int(10) NOT NULL,
  `idGroupe` int(10) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idGroupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `emissionmessage`
--

CREATE TABLE IF NOT EXISTS `emissionmessage` (
  `idUtilisateur` int(10) NOT NULL,
  `idMessage` int(12) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `idGroupe` int(10) NOT NULL AUTO_INCREMENT,
  `idVoiture` int(10) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `info` varchar(500) DEFAULT NULL,
  `contribution` varchar(200) DEFAULT NULL,
  `depart` varchar(64) NOT NULL,
  `arrivee` varchar(64) NOT NULL,
  PRIMARY KEY (`idGroupe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Structure de la table `horaireponctuel`
--

CREATE TABLE IF NOT EXISTS `horaireponctuel` (
  `idPonctuel` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`idPonctuel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `horairerecurrent`
--

CREATE TABLE IF NOT EXISTS `horairerecurrent` (
  `idRecurrent` int(10) NOT NULL AUTO_INCREMENT,
  `lundi` tinyint(1) NOT NULL,
  `mardi` tinyint(1) NOT NULL,
  `mercredi` tinyint(1) NOT NULL,
  `jeudi` tinyint(1) NOT NULL,
  `vendredi` tinyint(1) NOT NULL,
  `samedi` tinyint(1) NOT NULL,
  `dimanche` tinyint(1) NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`idRecurrent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(12) NOT NULL AUTO_INCREMENT,
  `texte` varchar(1000) NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `receptionmessage`
--

CREATE TABLE IF NOT EXISTS `receptionmessage` (
  `idUtilisateur` int(10) NOT NULL,
  `idMessage` int(12) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE IF NOT EXISTS `trajet` (
  `idTrajet` int(12) NOT NULL AUTO_INCREMENT,
  `depart` varchar(64) NOT NULL,
  `arrive` varchar(64) NOT NULL,
  `info` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idTrajet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `typehoraire`
--

CREATE TABLE IF NOT EXISTS `typehoraire` (
  `idGroupe` int(10) NOT NULL,
  `idRecurrent` int(10) DEFAULT NULL,
  `idPonctuel` int(10) DEFAULT NULL,
  `ponctuel` tinyint(1) NOT NULL,
  PRIMARY KEY (`idGroupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utigroupe`
--

CREATE TABLE IF NOT EXISTS `utigroupe` (
  `idUtilisateur` int(10) NOT NULL,
  `idGroupe` int(10) NOT NULL,
  `accepte` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idGroupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int(10) NOT NULL AUTO_INCREMENT,
  `mail` varchar(64) NOT NULL,
  `pseudo` varchar(64) DEFAULT NULL,
  `prenom` varchar(64) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `annee` varchar(5) NOT NULL,
  `specialite` varchar(4) DEFAULT NULL,
  `adresse` varchar(128) DEFAULT NULL,
  `urlPhoto` varchar(256) DEFAULT NULL,
  `musique` bit(1) NOT NULL DEFAULT b'0',
  `tabac` bit(1) NOT NULL DEFAULT b'0',
  `discussion` bit(1) NOT NULL DEFAULT b'0',
  `stop` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`idUtilisateur`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Structure de la table `utitrajet`
--

CREATE TABLE IF NOT EXISTS `utitrajet` (
  `idUtilisateur` int(10) NOT NULL,
  `idTrajet` int(12) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idTrajet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utivoit`
--

CREATE TABLE IF NOT EXISTS `utivoit` (
  `idUtilisateur` int(10) NOT NULL,
  `idVoiture` int(10) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idVoiture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `idVoiture` int(10) NOT NULL AUTO_INCREMENT,
  `marque` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `couleur` varchar(16) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL,
  `nbPlaces` int(2) NOT NULL,
  `urlPhoto` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`idVoiture`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
