-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 juil. 2018 à 13:36
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mystudio`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(45) NOT NULL,
  `album_cover` varchar(255) DEFAULT NULL,
  `release_date` timestamp NULL DEFAULT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`id_album`),
  KEY `artist_id` (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id_artist` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(50) NOT NULL,
  `artist_picture` varchar(255) NOT NULL,
  `category` enum('amateur','pro') NOT NULL,
  PRIMARY KEY (`id_artist`),
  UNIQUE KEY `id_artist_UNIQUE` (`id_artist`),
  UNIQUE KEY `artist_name` (`artist_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id_artist`, `artist_name`, `artist_picture`, `category`) VALUES
(9, 'Joey Bad4$$', '', 'pro'),
(10, 'Lomepal', '', 'pro');

-- --------------------------------------------------------

--
-- Structure de la table `fav_by`
--

DROP TABLE IF EXISTS `fav_by`;
CREATE TABLE IF NOT EXISTS `fav_by` (
  `username` int(11) NOT NULL,
  `music` int(11) NOT NULL,
  `id_fav` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_fav`),
  KEY `music_idx` (`music`),
  KEY `username_idx` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `musics`
--

DROP TABLE IF EXISTS `musics`;
CREATE TABLE IF NOT EXISTS `musics` (
  `id_music` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `featuring` varchar(45) NOT NULL,
  `music_path` varchar(255) NOT NULL,
  `nb_listening` int(11) NOT NULL DEFAULT '0',
  `lyrics` longtext,
  `trans` longtext,
  `style` int(11) NOT NULL DEFAULT '0',
  `album` int(11) NOT NULL,
  `artist` int(11) NOT NULL,
  PRIMARY KEY (`id_music`),
  KEY `artist_idx` (`artist`),
  KEY `style_idx` (`style`),
  KEY `album_idx` (`album`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE IF NOT EXISTS `playlists` (
  `id_playlist` int(11) NOT NULL AUTO_INCREMENT,
  `play_title` varchar(45) NOT NULL,
  `birthdate` date NOT NULL,
  `users` int(11) NOT NULL,
  PRIMARY KEY (`id_playlist`),
  KEY `users_idx` (`users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `registered_in`
--

DROP TABLE IF EXISTS `registered_in`;
CREATE TABLE IF NOT EXISTS `registered_in` (
  `id_play` int(11) NOT NULL AUTO_INCREMENT,
  `music` int(11) NOT NULL,
  `playlist` int(11) NOT NULL,
  PRIMARY KEY (`id_play`),
  KEY `music_idx` (`music`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `styles`
--

DROP TABLE IF EXISTS `styles`;
CREATE TABLE IF NOT EXISTS `styles` (
  `id_style` int(11) NOT NULL AUTO_INCREMENT,
  `style_name` varchar(12) NOT NULL,
  PRIMARY KEY (`id_style`),
  UNIQUE KEY `idtable1_UNIQUE` (`id_style`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `styles`
--

INSERT INTO `styles` (`id_style`, `style_name`) VALUES
(1, 'Rap');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `pw` varchar(25) NOT NULL,
  `category` enum('artiste','auditeur') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `musics`
--
ALTER TABLE `musics`
  ADD CONSTRAINT `album` FOREIGN KEY (`album`) REFERENCES `albums` (`id_album`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `artist` FOREIGN KEY (`artist`) REFERENCES `artists` (`id_artist`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `style` FOREIGN KEY (`style`) REFERENCES `styles` (`id_style`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `users` FOREIGN KEY (`users`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `registered_in`
--
ALTER TABLE `registered_in`
  ADD CONSTRAINT `music` FOREIGN KEY (`music`) REFERENCES `musics` (`id_music`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `playlist` FOREIGN KEY (`id_play`) REFERENCES `playlists` (`id_playlist`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
