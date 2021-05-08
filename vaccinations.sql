-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Mars 2021 à 14:02
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vaccinations`
--

-- --------------------------------------------------------

--
-- Structure de la table `s_vaccine`
--

CREATE TABLE IF NOT EXISTS `s_vaccine` (
  `idsujet` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `lieu_naiss` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adress` varchar(45) NOT NULL,
  `nationalite` varchar(45) NOT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `profession` varchar(45) DEFAULT NULL,
  `situation_matri` varchar(45) DEFAULT NULL,
  `date_inscription` date NOT NULL,
  `maladie` varchar(5) DEFAULT NULL,
  `typemaladie` varchar(30) NOT NULL,
  `traitement` varchar(5) DEFAULT NULL,
  `typetraitement` varchar(30) NOT NULL,
  `complication` varchar(35) NOT NULL,
  `cni_pasport` varchar(20) NOT NULL,
  `login` varchar(40) DEFAULT NULL,
  `motpasse` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idsujet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `s_vaccine`
--

INSERT INTO `s_vaccine` (`idsujet`, `nom`, `prenom`, `date_naiss`, `lieu_naiss`, `email`, `adress`, `nationalite`, `genre`, `telephone`, `profession`, `situation_matri`, `date_inscription`, `maladie`, `typemaladie`, `traitement`, `typetraitement`, `complication`, `cni_pasport`, `login`, `motpasse`) VALUES
(1, 'Ba', 'amadou', '2021-02-26', 'dakar', 'amadouba@gmail.com', 'Yarakh', 'Sénégalaise', 'masculin', '0782902645', 'vendeur', 'celibataire', '2021-03-05', 'oui', 'ghjkuyg', 'oui', 'lkjhgf', 'lkjh', '1 2002 00 1900', 'login', 'passe'),
(2, 'Ba', 'amadou', '2021-02-26', 'dakar', 'amadouba@gmail.com', 'Yarakh', 'Sénégalaise', 'masculin', '0782902645', 'vendeur', 'celibataire', '2021-03-05', 'oui', 'ghjkuyg', 'oui', 'lkjhgf', 'lkjh', '', NULL, NULL),
(3, 'Ba', 'amadou', '2021-02-26', 'dakar', 'amadouba@gmail.com', 'Yarakh', 'Sénégalaise', 'masculin', '0782902645', 'vendeur', 'celibataire', '2021-03-05', 'oui', 'ghjkuyg', 'oui', 'lkjhgf', 'lkjh', '', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
