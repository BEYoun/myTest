-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 10 mars 2019 à 17:03
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_fashion`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_admins_users1` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `users_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `bags`
--

DROP TABLE IF EXISTS `bags`;
CREATE TABLE IF NOT EXISTS `bags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `piece_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  KEY `piece_id` (`piece_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `type`, `created`) VALUES
(1, 'jeans', '2019-03-09 11:37:24'),
(2, 'bag', '2019-03-09 11:37:33');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(200) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clients_users` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `address`, `tel`, `photo`, `users_id`) VALUES
(1, 'dieyzb', 3205840, NULL, 1),
(2, 'dazaz', 42343, 'sfzd', 7),
(3, 'reztrehrjytkylum', 1342543646, 'dazezrgeh', 8);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `clients_id` int(11) NOT NULL,
  `pieces_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_commandes_clients1` (`clients_id`),
  KEY `fk_commandes_pieces1` (`pieces_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `content` mediumtext NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `pseudo`, `mail`, `content`, `post_id`) VALUES
(1, 'younes', 'younes@gmailceo.cpm', 'foiehvs cn fezhnzd\r\nfezudbsn\r\nfozihvfbsjkv\r\nfrjefhvhl\r\nf*ojivhub', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

DROP TABLE IF EXISTS `pieces`;
CREATE TABLE IF NOT EXISTS `pieces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `color` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `price` double NOT NULL,
  `categories_id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pieces_categories1` (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`id`, `nom`, `color`, `size`, `created`, `price`, `categories_id`, `picture`) VALUES
(1, 'DENIM MEN SHIRT', 'brown', 36, '2019-03-09 11:40:22', 59.9, 1, 'images/product_4.jpg'),
(2, 'LONG SLEEVE JACKET', 'blue', 65, '2019-03-09 11:41:34', 59.9, 2, 'images/product_3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, '10 Nightwear dresses you need to see', 'Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.', NULL, NULL),
(2, 'Summer Vibes with these 10 essential pieces', 'Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.', NULL, NULL),
(3, 'Trend Allert: Hot Summer Sunglesses', 'Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.', NULL, NULL),
(4, 'nouveau article', 'voici un nouveau article interessant :3 je ne saispas uoi dire mais je dit nimporte quoi just pour remplir le formulaire ahahah ', '2019-03-06 22:05:07', '2019-03-06 22:05:07'),
(5, 'autre nouveau article', 'mon nouveau article est comme ci comme sa so dont be agresive', '2019-03-07 00:02:40', '2019-03-07 00:02:40'),
(6, 'damdij', 'fzeopkzepf;,vecpz fzepkfo,êzkf,', '2019-03-07 20:42:46', '2019-03-07 20:42:46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fisrt_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fisrt_name`, `last_name`, `role`) VALUES
(1, 'beailayounes@gmail.com', '$2y$10$boZ/hWZgdiW8lKm9.L5TTe0zQEkHzAZy5a4.1IpmIGQcliZCEo16O', 'younes', 'be', 'admin'),
(7, 'beaila@gmail.com', '$2y$10$uHn8ZmXcc8g86nqAEXxntuO1UKYfz9Ppqi7jQ12ZRmi54NPPOnOMq', 'dazdza', 'dazdz', 'client'),
(8, 'younesbed@gmail.com', '$2y$10$JRgpg/vMBm.1j2oASIJ.xudp4pgF.NMkLouN7KlyPDs2OM2VluRoa', 'ezrhttr', 'zefzefze', 'client');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `fk_admins_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `bags`
--
ALTER TABLE `bags`
  ADD CONSTRAINT `bags_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `bags_ibfk_2` FOREIGN KEY (`piece_id`) REFERENCES `pieces` (`id`);

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `fk_clients_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `fk_commandes_clients1` FOREIGN KEY (`clients_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commandes_pieces1` FOREIGN KEY (`pieces_id`) REFERENCES `pieces` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Contraintes pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD CONSTRAINT `fk_pieces_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
