-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 10 Mai 2017 à 01:34
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `domotique_data`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id_equipement` int(11) NOT NULL,
  `piece` int(15) NOT NULL,
  `e_nom` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `connect` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equipement`
--

INSERT INTO `equipement` (`id_equipement`, `piece`, `e_nom`, `type`, `etat`, `connect`) VALUES
(1, 1, 'alarm2', 'alarm', 1, 1),
(2, 1, 'alarm1', 'alarm', 1, 1),
(3, 1, 'lamp1', 'lampe', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id_user` int(15) NOT NULL,
  `id_equipement` int(15) NOT NULL,
  `etat` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id_maison` int(10) NOT NULL,
  `portail` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `maison`
--

INSERT INTO `maison` (`id_maison`, `portail`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `maison_user`
--

CREATE TABLE `maison_user` (
  `id_maison` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `maison_user`
--

INSERT INTO `maison_user` (`id_maison`, `username`, `role`) VALUES
(1, 'admin', 2);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id_piece` int(15) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `maison` int(15) NOT NULL,
  `etage` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `nom`, `type`, `maison`, `etage`) VALUES
(1, 'cui1', 'cuisine', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mdp` varchar(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`username`, `phone`, `email`, `mdp`, `nom`, `prenom`) VALUES
('admin', 65765675, 'oum@gmail.com', 'admin', 'jkj', 'kjkjk'),
('uyuy', 78787, 'uyuyuy@', 'admin', 'iu', 'uuuu'),
('yjhjh', 7676, 'ff@g', 'hhh', 'aaa', 'aaa'),
('ytyty', 6656, 'tytyt@t', 'ttt', 'jlyiuy', 'uyuiyu');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id_equipement`),
  ADD KEY `piece` (`piece`),
  ADD KEY `type` (`type`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id_maison`);

--
-- Index pour la table `maison_user`
--
ALTER TABLE `maison_user`
  ADD PRIMARY KEY (`id_maison`,`username`),
  ADD KEY `username` (`username`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id_piece`),
  ADD KEY `maison` (`maison`),
  ADD KEY `type` (`type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `gmail` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id_equipement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `id_maison` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `id_piece` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `maison_user`
--
ALTER TABLE `maison_user`
  ADD CONSTRAINT `maison_user_ibfk_1` FOREIGN KEY (`id_maison`) REFERENCES `maison` (`id_maison`),
  ADD CONSTRAINT `maison_user_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`id_piece`) REFERENCES `equipement` (`piece`),
  ADD CONSTRAINT `piece_ibfk_2` FOREIGN KEY (`maison`) REFERENCES `maison` (`id_maison`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
