-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 avr. 2022 à 15:46
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetmusic`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

DROP TABLE IF EXISTS `adherents`;
CREATE TABLE IF NOT EXISTS `adherents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `niveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adherents`
--

INSERT INTO `adherents` (`id`, `niveau`) VALUES
(1, 1),
(45, NULL),
(73, NULL),
(74, NULL),
(76, NULL),
(77, NULL),
(78, NULL),
(79, NULL),
(80, NULL),
(81, NULL),
(82, NULL),
(83, NULL),
(84, NULL),
(85, NULL),
(86, NULL),
(87, NULL),
(88, NULL),
(89, NULL),
(90, NULL),
(91, NULL),
(92, NULL),
(93, NULL),
(94, NULL),
(95, NULL),
(96, NULL),
(97, NULL),
(98, NULL),
(99, NULL),
(100, NULL),
(101, NULL),
(102, NULL),
(103, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jourheure` varchar(200) NOT NULL,
  `nbPlace` int(11) NOT NULL,
  `idProfesseur` int(11) NOT NULL,
  `idInstrument` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_professeur` (`idProfesseur`),
  KEY `fk_instrument` (`idInstrument`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `idAdherent` int(11) NOT NULL,
  `idCours` int(11) NOT NULL,
  `paye` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idAdherent`,`idCours`),
  KEY `fk_cours` (`idCours`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

DROP TABLE IF EXISTS `instrument`;
CREATE TABLE IF NOT EXISTS `instrument` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`id`, `nom`) VALUES
(1, 'violon'),
(2, 'guitare');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `tel`, `adresse`, `mail`) VALUES
(1, 'huet', 'dolores', '06958576251', 'mon dieu ', 'lebosscjesus.com'),
(6, 'jean', 'michel', '55555', 'salle-boeuf', 'jean-michel@gmail.com'),
(7, 'huet', 'dolores', '058523', 'paris', 'dolores@efrei.net'),
(19, 'non', 'non', '85', 'no', 'no@gmail.fr'),
(21, 'oui', 'oui', '75', 'oui', 'oui@gmai.fr'),
(23, 'Boisobert', 'vimif', '6845937', 'montfort', 'lol@fr'),
(25, 'hu', 'gu', 'hu', 'uji', 'iujk@j'),
(27, 'dd', 'i', 'k', 'k', 's@5'),
(29, 'Mali', 'KA', '88', 'joli', 'k@o.fr'),
(30, 'a', 'b', '4', 'd', 'oo@dr'),
(31, 'a', 'b', '4', 'd', 'oo@dr'),
(32, 'huetuu', 'bjr', '058523', 'ty', 'ty@k'),
(45, 'd', 'd', 'd', 'd', 'dolores@efrei.net'),
(53, 'ok', 'ok', '752', '52', 'ert@ert'),
(57, 'g', 'ad', '0000', 'azertyui', 'azerty@azerty'),
(58, 'azerty', 'sdfcgvlk,', '45623', 'dfcglk', 'dfghjk@gfvbh'),
(59, 'o', 'o', '5623', 'p', 'azer@oo'),
(60, 'azer', 'regfv', '8520', 'AQZSDF', 'F@FD'),
(61, 'r', 'er', '52', 'ersdf', 't@h'),
(62, 'azertplokjhnbv', 'dfgthujk', '87520', 'dfvgbthyujiolkjh', 'gt@hngvbc'),
(63, 'azertplokjhnbv', 'dfgthujk', '87520', 'dfvgbthyujiolkjh', 'gt@hngvbc'),
(64, 'zsertfghrtfgyuhij', 'fghyuoijkp', '563', 'fghujk', 'i@i'),
(65, 'k', 'kj', '74', 'ghj', 'j@hy'),
(66, 'frtghbj', 'gfhjn', '541', 'fgvbhjnkfgh', 'uhj@hgbj'),
(67, 'dfghj', 'FGHJK', '5623', 'GHYUJKO', 'jh@kjh'),
(68, 'dfghj', 'FGHJK', '5623', 'GHYUJKO', 'jh@kjh'),
(69, 'dfgchj', 'fghjk', '854120', 'fgchjkyy', 'y@y'),
(70, 'fghujkpoiu', 'huj', '8653', 'dfghj', 'lkj@m'),
(71, 'fghujkpoiu', 'huj', '8653', 'dfghj', 'lkj@m'),
(72, 'ghj', 'hbgj', '741', 'azer', 'h@h'),
(73, 'essai', 'ok', '8555', 'ok', 'ok@ok'),
(74, 'tgb ', '  ', '52', 'ghjukl', 'u@u'),
(75, 'tgb ', '  ', '52', 'ghjukl', 'u@u'),
(76, 'test', 'test', '55', 'tests', 'l@l'),
(77, 'ttt', 'ttt', '96', 'ert', 'm@k'),
(78, 's', 'sx', '85', 'yu', 'u@tg'),
(79, 'z', 'z', 'z', 'z', 'z@z'),
(80, 'azerty', 'azsdefghj', '856', 'ty', 'i@iu'),
(81, 'tu', 'r', '99', 'r', 'o@uj'),
(82, 'a', 'aaa', '555', 'aaaa', 'a@a'),
(83, 'gh', 'vfgh', '52', 'b', 'p@p'),
(84, 'k', 'k', '444', 'k', 'k@k'),
(85, 'u', 'u', '8', 'u', '6@4'),
(86, 'jesus', 'jesus', '33', 'Paradis', 'jesus@jess'),
(87, 'ss', 's', '52', 's', 'p@k'),
(88, 'Dieu', 'dieu', '55555', 'dieu', 'dieu@dieu'),
(89, 'azedazer', 'zer', '852', 'drfgthj', 'o@jhg'),
(90, 'Malika', 'Djebbar', '069854238', 'paradis', 'o@o'),
(91, 'ds', 'sdf', '52', 'dfsq', 'sdf@fsd'),
(92, 'd', 'd', '7', 'd', 'd@d'),
(93, 't', 't', 't', 'r', 't@j'),
(94, 'd', 'd', 'f', 'd', 'f@f'),
(95, 'y', 'y', '85', 'y', 'y@y'),
(96, 'd', 'd', '5123', 'gfd', 'gef@tgf'),
(97, 's', 's', 's', 's', 's@s'),
(98, 'd', 'd', '3', 'd', 'd@d'),
(99, 'RAPHAEL', 'RAPHAEL', '444', 'JKDS', 'JH@KLJ'),
(100, 'd', 'f', '41', 'fgh', 'f@f'),
(101, 'sqdx', 'fds', '9+562', 'xfdgchjk', 'dxvc@sx'),
(102, 'tgyhui', 'fghjk', '5210', 'sdfghjkl', 'hjk@uy'),
(103, 'd', 'd', '685', 'dqsq', 'L@A'),
(104, 'dejean', 'Marie', '78829495263', '10 rue de la république', 'dejean@free.com'),
(105, 'elon', 'musk', '589243675', '44 rue de la musique', 'o@k.com'),
(106, 'huji', 'pauline', '569314862', '1 rue du poulet', 'o@o');

--
-- Déclencheurs `personne`
--
DROP TRIGGER IF EXISTS `verifPersonne`;
DELIMITER $$
CREATE TRIGGER `verifPersonne` BEFORE INSERT ON `personne` FOR EACH ROW Begin

DECLARE nb INTEGER ;
SELECT COUNT(*) INTO nb
FROM personne
WHERE nom = NEW.nom
and prenom = NEW.prenom
and tel = NEW.tel ;
  
   IF (nb>0) THEN
      SIGNAL SQLSTATE "45000" 
      SET MESSAGE_TEXT = "Personne déja existante" ; 
   END IF ;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE IF NOT EXISTS `professeurs` (
  `id` int(11) NOT NULL,
  `salaire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeurs`
--

INSERT INTO `professeurs` (`id`, `salaire`) VALUES
(104, 2000),
(105, 2000);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adherents`
--
ALTER TABLE `adherents`
  ADD CONSTRAINT `fk_personne2` FOREIGN KEY (`id`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_instrument` FOREIGN KEY (`idInstrument`) REFERENCES `instrument` (`id`),
  ADD CONSTRAINT `fk_professeur` FOREIGN KEY (`idProfesseur`) REFERENCES `professeurs` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `fk_adherent` FOREIGN KEY (`idAdherent`) REFERENCES `adherents` (`id`),
  ADD CONSTRAINT `fk_cours` FOREIGN KEY (`idCours`) REFERENCES `cours` (`id`);

--
-- Contraintes pour la table `professeurs`
--
ALTER TABLE `professeurs`
  ADD CONSTRAINT `fk_personne` FOREIGN KEY (`id`) REFERENCES `personne` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
