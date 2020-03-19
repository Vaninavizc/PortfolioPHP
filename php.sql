-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Mars 2020 à 12:28
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
('2', 'Clélia', 'dfnycdxuos, raccoon', 'dnfuo,sis photo cléclé'),
('3', 'Vanina', 'ahahah j''aime la vie', 'insérer jolie photo du pays basque');

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
('10', '2020-03-17', 'l''Histoire mgl', 'CC François', 'François c''est mon papa', 'le meilleur un peu', 'bref, in this house we stan françois', 'https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60', '3'),
('11', '2020-03-20', 'J''aime les fleurs', 'Je sais pas trop en prendre soin', 'En même temps si tu laisses ton chauffage allumé quand tu pars en vacances et que je dois venir l''éteindre.', 'Mais sinon elle est douée à d''autres trucs', 'Ne laissez pas vos plantes à vanino ', 'https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60', '3'),
('12', '2020-03-15', 'LES FOULARDS', 'All my life', 'Aidez-nous, on en peut plus', 'Si on critique ses foulards on se fait mordre', 'Send help #PrayForUs', 'https://www.princessefoulard.com/blog/wp-content/uploads/2019/02/mettre-foulard-cheveux.jpg', '3'),
('2', '2020-03-17', 'Phoque you Bitch', 'Phoque ALL', 'FCIUS?OIS', 'VINDSO?IPS', 'DFIDYNUOS?P', 'https://www.sblanc.com/wp-content/uploads/2008/10/Phoque-Weddell-Samuel_Blanc-20061020_174855.jpg', '1'),
('3', '2020-03-03', 'Recette de Raccoon', 'Miam miam', 'blablabla', 'blablabla', 'blablablabla', 'https://i.insider.com/57d1d20ab996eb94008b6c4f?width=1100&format=jpeg&auto=webp', '2'),
('4', '2020-03-20', 'CHO-CO-LAT', 'insérer ici probablement une vanne super drôle sur le chocolat', 'toujours le chocolat', 'berk le chocolat blanc', 'donc en conclusion : chocolat > vie', 'https://static.passeportsante.net/680x357/i89783-.jpeg', '1'),
('5', '2020-03-19', 'Harry Styles', 'hi biiiiitches', 'un king', 'toujours autant un king', 'berk les one direction ', 'https://www.glamourparis.com/uploads/images/thumbs/202008/0c/mode___5_looks_qui_prouvent_que_harry_styles_est_une_rockstar_991.jpeg_north_414x736_transparent.jpg', '1'),
('6', '2020-03-03', 'Le fromage moi j''adore', 'miam le st-félicien et le chèvre', 'ici je vous parlerai de mon amour pour le fromage', 'et encore ici aussi', 'la fondue > la raclette', 'https://cdn.radiofrance.fr/s3/cruiser-production/2018/11/b65732c2-ae25-4914-8d73-5ad7e13a89ce/870x489_marche-de-fromage.jpg', '2'),
('7', '2020-03-18', 'Ville : Toulouse', 'Rue : Lautrec', 'la seule bonne vanne de Vanina, à mon humble avis', 'regardez ce que fait ce monsieur tout petit, en vrai c''est super cool', 'la taille ne compte pas dans l''art, au final', 'https://p6.storage.canalblog.com/69/86/1111579/122094593.jpg', '2'),
('8', '2020-03-16', 'Blah blah blah blah cactus', 'Ferme la porte t''as des cactus dans l''sas', 'Cette chanson, incroyablement interprétée par Aya Cactus est exceptionnelle', 'Bref, achetez des cactus non', 'et des orchidées svp', 'https://images.truffaut.com/media/catalog/product/cache/ecd051e9670bd57df35c8f0b122d8aea/e/n/entretenir-cactus.jpg', '2'),
('9', '2020-03-17', 'Vintage vibes', 'Old things are better', 'En vrai y a que le vin qui mûrît bien', 'Globalement, le reste c''est pas ouf', 'Conclusion : préférez les choses jeunes et devenez politiciens', 'https://www.izoa.fr/12310-large_default/papier-peint-vintage-garage-retro.jpg', '3');

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
