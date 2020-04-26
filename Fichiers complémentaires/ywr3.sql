-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Ven 05 Avril 2019 à 11:36
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ywr`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `noArticle` int(11) NOT NULL AUTO_INCREMENT,
  `nomArticle` varchar(100) DEFAULT NULL,
  `descArticle` varchar(10000) DEFAULT NULL,
  `imgArticle` varchar(200) DEFAULT NULL,
  `stockArticle` int(255) DEFAULT NULL,
  `noMarque` int(11) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`noArticle`),
  KEY `noMarque` (`noMarque`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`noArticle`, `nomArticle`, `descArticle`, `imgArticle`, `stockArticle`, `noMarque`, `prix`) VALUES
(1, 'Gurkha Spec ops', 'Il s''agit d''un mélange corsé utilisant une combinaison audacieuse et savoureuse de tabac dominicain, nicaraguayen et indonésien. Les cigares sont emballés dans un étui de voyage de style pélican. L''étui est fait d''un matériau balistique, de sorte qu''il peut contenir tout ce que vous lui lancez et garder vos cigares en sécurité et prêts à fumer ! Vous recevrez également un couteau de combat personnalisé pour éloigner tout danger de votre précieuse réserve ! C''est le cigare des amateurs les plus courageux et les plus dévoués !', 'IMG/Product/Product1.png', 200, 1, '209.99'),
(2, 'Gurkha Genghis Khan', 'L''emballage maduro à feuilles larges du Connecticut offre un riche assortiment de saveurs complexes, consistantes et légèrement sucrées, complétées par une combustion lente et délibérée. Mais cela ne s''arrête pas là. Doté d''un mélange vivant de tabacs honduriens parfaitement vieillis (6 ans) et d''un rare liant camerounais, ce cigare Gurkha s''enorgueillit également d''un goût doux et terreux avec des notes subtiles de poivre.', 'IMG/Product/Product2.png', 200, 1, '299.99'),
(3, 'Gurkha the Beauty', 'Il s''agit d''un cigare doux à moyennement corsé avec un profil de saveur lisse et crémeuse avec des notes de châtaigne, de vanille et de caramel. Les cigars The Beauty sont emballés dans d''élégants tubes givrés et logés dans d''étonnantes boîtes de 25 unités.', 'IMG/Product/Product3.png', 200, 1, '599.99'),
(4, 'Cohiba Talismán - Limited Edition 2017', 'Dès les premières bouffées, la complexité aromatique surprend : les saveurs sont épicées, soutenues par des notes de poivre rose et de chocolat noir. Au fil de la dégustation, que l’on apprécie tant le tirage est bon, les arômes s’intensifient en laissant entrapparaître des touches de cuir. La maîtrise du roulage et du choix des feuilles est évidente pour ces vitoles de premier choix. Une magnifique pièce qui ravira les amateurs de havanes et les collectionneurs.', 'IMG/Product/Product4.png', 200, 2, '610.00'),
(5, 'Cohiba Behike 40th Anniversary Humidor', 'Ces caves à cigares spéciales de Cohiba ont été conçues pour commémorer le 40e anniversaire de la marque Cohiba. Tous les cigares Cohiba Behike à l''intérieur sont roulés par un seul rouleau à cigares.', 'IMG/Product/Product5.png', 200, 2, '15000.00');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `noClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `ville` varchar(200) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `civilite` varchar(20) DEFAULT NULL,
  `noRole` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `utilisateur` varchar(200) DEFAULT NULL,
  `mdp` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`noClient`),
  KEY `noRole` (`noRole`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`noClient`, `nom`, `prenom`, `ville`, `cp`, `adresse`, `civilite`, `noRole`, `email`, `telephone`, `pays`, `utilisateur`, `mdp`) VALUES
(2, 'Admin', 'Admin', 'Paris', 75000, 'admin', 'monsieur', 1, 'admin@gmail.com', '06 69 69 22 04', 'France', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `noCommande` int(11) NOT NULL AUTO_INCREMENT,
  `dateCommande` date DEFAULT NULL,
  `etatCommande` varchar(20) DEFAULT NULL,
  `noClient` int(11) DEFAULT NULL,
  PRIMARY KEY (`noCommande`),
  KEY `noClient` (`noClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

CREATE TABLE IF NOT EXISTS `composer` (
  `noCommande` int(100) NOT NULL AUTO_INCREMENT,
  `noArticle` int(11) NOT NULL DEFAULT '0',
  `nbArticle` int(11) DEFAULT NULL,
  PRIMARY KEY (`noCommande`,`noArticle`),
  KEY `noArticle` (`noArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `noMarque` int(11) NOT NULL AUTO_INCREMENT,
  `libelMarque` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`noMarque`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`noMarque`, `libelMarque`) VALUES
(1, 'Gurkha'),
(2, 'Cohiba');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `noRole` int(11) NOT NULL AUTO_INCREMENT,
  `libelRole` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`noRole`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`noRole`, `libelRole`) VALUES
(1, 'Administrateur'),
(2, 'Client');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`noMarque`) REFERENCES `marque` (`noMarque`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`noRole`) REFERENCES `role` (`noRole`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`noClient`) REFERENCES `client` (`noClient`);

--
-- Contraintes pour la table `composer`
--
ALTER TABLE `composer`
  ADD CONSTRAINT `composer_ibfk_1` FOREIGN KEY (`noArticle`) REFERENCES `article` (`noArticle`),
  ADD CONSTRAINT `composer_ibfk_2` FOREIGN KEY (`noCommande`) REFERENCES `commande` (`noCommande`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
