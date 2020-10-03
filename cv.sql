-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Septembre 2020 à 21:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(30) NOT NULL,
  `education` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `education`
--

INSERT INTO `education` (`id`, `Date`, `education`) VALUES
(1, '2019/2020', '1ere annee cycle d ingenieur en informatique'),
(2, '2020', 'formation perssonnel : infographique(debutant) , bootstrap\r\n\r\n'),
(3, '2017 - 2019', 'Les classes preparatoires a l ENSAO .'),
(4, '2016 - 2017', 'J ai obtenu mon bac en science mathamatique A , lycee NAHDA AHFIR .'),
(6, '2027', 'DOCTORAS data Science');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `experience` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `experience`
--

INSERT INTO `experience` (`id`, `date`, `experience`) VALUES
(1, 'dec 2017 - present', 'En effet, je participe chaque annee en decembre , dans forum tawjihi , je donne a les eleves toutes les informations de ENSA .'),
(2, '2019', 'J ai etais membre dans un club ENACTUS de l ecole nationale des sciences appliquee Oujda .'),
(5, 'toujours', 'En effet ,toujours je taravaille par word, powerpoint, excel,...');

-- --------------------------------------------------------

--
-- Structure de la table `info_pesonnelle`
--

CREATE TABLE IF NOT EXISTS `info_pesonnelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `info_pesonnelle`
--

INSERT INTO `info_pesonnelle` (`id`, `info`) VALUES
(1, 'Je suis ne le 24 janvier 1999 a AHFIR , province BERKEN. Je suis etudiant en informatique a 3eme annee ; 1 ere annee cycle ingenieur ; a l ecole nationale des sciences appliquee OUJDA .'),
(12, 'En effet , personnelment j aime tous quelle est Technologie .');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langues` varchar(60) NOT NULL,
  `niveau` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `languages`
--

INSERT INTO `languages` (`id`, `langues`, `niveau`) VALUES
(1, 'FRANCE', 80),
(3, 'ENGLISH', 73),
(11, 'ARABIC', 90);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nonSK` varchar(200) NOT NULL,
  `levelSK` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id`, `nonSK`, `levelSK`) VALUES
(1, 'JAVA', 85),
(2, 'JAVASCRIPT', 60),
(3, 'HTML & CSS\r\n\r\n', 85),
(4, 'PHP', 75),
(5, 'MYSQL', 75);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
