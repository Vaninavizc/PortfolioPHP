-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Mars 2020 à 00:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `DtJour` datetime NOT NULL,
  PRIMARY KEY (`DtJour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `NumProfil` char(10) CHARACTER SET utf8 NOT NULL,
  `Nom` text CHARACTER SET utf8,
  `Paragra1` text CHARACTER SET utf8,
  `UrlPhoto` text CHARACTER SET utf8,
  PRIMARY KEY (`NumProfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `profile`
--

INSERT INTO `profile` (`NumProfil`, `Nom`, `Paragra1`, `UrlPhoto`) VALUES
('1', 'Marie', 'qsfynuso,ipss', '	insérer photo marie'),
('2', 'Clélia', 'dfnycdxuos, raccoon', 'dnfuo,sis photo cléclé');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `NumPro` char(10) CHARACTER SET utf8 NOT NULL,
  `DtCreaPro` date DEFAULT NULL,
  `LibTitrPro` text CHARACTER SET utf8,
  `LibChapo` text,
  `Parag1` text CHARACTER SET utf8,
  `Parag2` text CHARACTER SET utf8,
  `LibConclu` text CHARACTER SET utf8,
  `UrlPhoto` text CHARACTER SET utf8,
  `NumProfil` char(8) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`NumPro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`NumPro`, `DtCreaPro`, `LibTitrPro`, `LibChapo`, `Parag1`, `Parag2`, `LibConclu`, `UrlPhoto`, `NumProfil`) VALUES
('1', '2020-03-18', 'Coco na Chanel', 'Hihi Coco Chanel is my idole kiss', 'BLABLABLA', 'BLABLABLA', 'BLABLABLA', 'https://resize-elle.ladmedia.fr/r/300,,forcex/crop/300,386,center-middle,forcex,ffffff/img/var/plain_site/storage/images/personnalites/coco-chanel/9726378-1-fre-FR/coco_chanel.jpg', '1'),
('2', '2020-03-17', 'Phoque you Bitch', 'Phoque ALL', 'FCIUS?OIS', 'VINDSO?IPS', 'DFIDYNUOS?P', 'https://www.sblanc.com/wp-content/uploads/2008/10/Phoque-Weddell-Samuel_Blanc-20061020_174855.jpg', '1'),
('3', '2020-03-03', 'Recette de Raccoon', 'Miam miam', 'blablabla', 'blablabla', 'blablablabla', 'https://images.unsplash.com/photo-1524246009948-6dddf3f8fc23?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60', '2');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Login` char(30) CHARACTER SET utf8 NOT NULL,
  `Pass` char(15) CHARACTER SET utf8 NOT NULL,
  `LastName` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `FirstName` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `Email` char(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Login`,`Pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`Login`, `Pass`, `LastName`, `FirstName`, `Email`) VALUES
('admin', 'admin', 'test', 'test', 'test.test@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
