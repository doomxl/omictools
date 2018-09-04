-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 04 sep. 2018 à 15:13
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `omicdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `tool`
--

CREATE TABLE `tool` (
  `id` int(5) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `author` int(4) NOT NULL,
  `datecreation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tool`
--

INSERT INTO `tool` (`id`, `name`, `description`, `author`, `datecreation`) VALUES
(23, 'Gohz 11', 'Jeux de strategie', 3, '2018-09-04 14:52:30'),
(22, 'Pandora', 'CMS open source', 3, '2018-09-04 14:51:38'),
(21, 'legaLynx 7', 'Gestionnaire de client ', 3, '2018-09-04 14:51:18'),
(20, 'Doom-b', 'Jeux débile', 1, '2018-09-04 14:42:35'),
(19, 'Citrex 11.4', 'Layer mapper', 1, '2018-09-04 14:41:48'),
(18, 'NEMO', 'Parseur syntaxique', 1, '2018-09-04 14:41:07'),
(16, 'Visu 5.6', 'Outil de visualisation 3D', 1, '2018-09-04 14:35:44'),
(17, 'MARABOUT 5.7', 'Outil de gestion de réseaux', 1, '2018-09-04 14:39:22');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `description`, `email`, `hash`) VALUES
(1, 'Fahri', 'DAHMANI', 'description', 'fahri.dahmani@hotmail.fr', '$2y$10$RKLXDLA1sKZHQB7cjPdFFuUmaNXFM9/lE5RDiGOkktZIyEc2zDcuO'),
(3, 'Fabien', 'DURANT', 'Descript fab', 'fab.durant@yahoo.com', '$2y$10$uRAn7pR2z49FmsdrH2DBr.sLfpto3it37myFiP6vVGZ6HcGhHBQBK');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tool`
--
ALTER TABLE `tool`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
