-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 11 Juin 2017 à 19:51
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

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
  `nom` varchar(15) NOT NULL,
  `etat` int(1) NOT NULL,
  `connect` tinyint(1) NOT NULL,
  `user` varchar(15) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equipement`
--

INSERT INTO `equipement` (`id_equipement`, `piece`, `nom`, `etat`, `connect`, `user`, `type`) VALUES
(1, 2167651, 'lamp', 0, 0, '', 'lampe'),
(2, 2167651, 'lampeeee', 1, 1, '', 'lampe'),
(3, 2167650, 'portecuis', 1, 0, '', 'porte'),
(4, 2167652, 'portecuis1', 0, 0, '', 'porte'),
(5, 2167654, 'lampact', 1, 0, '', 'lampe');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id_historique` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
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
  `nom` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `maison`
--

INSERT INTO `maison` (`id_maison`, `nom`) VALUES
(1, ''),
(2, 'hjb'),
(3, 'hjb'),
(4, 'hjb'),
(5, 'hjb'),
(6, 'iuiu'),
(7, 'kjl'),
(8, 'jkjk'),
(9, 'jkjk'),
(10, 'jkjk'),
(11, 'jkjk'),
(12, 'kjk'),
(13, 'kjkhg'),
(14, 'kjkhg'),
(15, 'kjkhg'),
(16, 'kjkhg'),
(17, 'kkj'),
(22, 'jnck'),
(23, 'jkncjk'),
(24, 'jkncjk'),
(25, 'jkncjk'),
(26, 'jkncjk'),
(27, 'jkncjk'),
(28, 'jkncjk'),
(29, 'jkncjk'),
(30, 'jkncjk'),
(31, 'jkncjk'),
(32, 'maison'),
(33, 'maison'),
(34, 'maison'),
(35, 'maison'),
(36, 'maison'),
(37, 'maison'),
(38, 'maison'),
(39, 'maison'),
(40, 'maison'),
(41, 'maison'),
(42, 'maison'),
(43, 'maison'),
(44, 'maison'),
(45, 'maison'),
(46, 'maison'),
(47, 'home'),
(48, 'home'),
(49, 'home'),
(50, 'home'),
(51, 'home'),
(52, 'home'),
(53, 'home'),
(54, 'home'),
(55, 'home'),
(56, 'home'),
(57, 'home'),
(58, 'home'),
(59, 'home'),
(60, 'home'),
(61, 'home'),
(62, 'home'),
(63, 'home'),
(64, 'home'),
(65, 'home'),
(66, 'home'),
(67, 'home'),
(68, 'home'),
(69, 'home'),
(70, 'home'),
(71, 'home'),
(72, 'home'),
(73, 'home'),
(74, 'home'),
(75, 'home'),
(76, 'home'),
(77, 'home'),
(78, 'home'),
(79, 'home'),
(80, 'home'),
(81, 'home'),
(82, 'home'),
(83, 'home'),
(84, 'MAI'),
(85, 'MAI'),
(86, 'MAI'),
(87, 'oumaima and adi'),
(88, 'oumaima and adi'),
(89, 'oumaima and adi'),
(90, 'oumaima and adi'),
(91, 'oumaima and adi'),
(92, 'oumaima and adi'),
(93, 'oumaima and adi'),
(94, 'oumaima and adi'),
(95, 'oumaima and adi'),
(96, 'oumaima and adi'),
(97, 'oumaima and adi'),
(98, 'oumaima and adi'),
(99, 'oumaima and adi'),
(100, 'oumaima and adi'),
(101, 'oumaima and adi'),
(102, 'oumaima and adi'),
(103, 'aa'),
(104, 'aa'),
(105, 'kjjk'),
(106, 'kjjk'),
(107, 'kjjk'),
(108, 'kjjk'),
(109, 'kjjk'),
(110, 'adib'),
(111, 'adib'),
(112, 'adib'),
(113, 'adib'),
(114, 'adib'),
(115, 'adib'),
(116, 'adib'),
(117, 'adib'),
(118, 'adib'),
(119, 'adib'),
(120, 'adib'),
(121, 'kjkj'),
(122, 'kjjk'),
(123, 'kjjk'),
(124, 'mison'),
(125, 'cc'),
(126, 'jcnd'),
(127, 'jcnd'),
(128, 'vfv'),
(129, 'vfv'),
(130, 'vfv'),
(131, 'vfv'),
(132, 'vfv'),
(133, 'vfv'),
(134, 'vfv'),
(135, 'maiso'),
(136, 'k'),
(137, 'achraf home'),
(138, '');

-- --------------------------------------------------------

--
-- Structure de la table `maison_user`
--

CREATE TABLE `maison_user` (
  `id_maison` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `role` enum('1','2','3','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `maison_user`
--

INSERT INTO `maison_user` (`id_maison`, `username`, `role`) VALUES
(1, 'admin', '2'),
(1, 'azzaeze', '2'),
(1, 'ezeze', '2'),
(1, 'snyless', '1'),
(1, 'zezezeze', '2');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id_piece` int(15) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `maison` int(15) NOT NULL,
  `etage` varchar(10) NOT NULL DEFAULT '1',
  `type` varchar(14) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `nom`, `maison`, `etage`, `type`, `username`) VALUES
(2167650, 'j', 136, 'etage1', 'cuisine', 'admin'),
(2167651, 'cuisine 1', 137, 'etage1', 'cuisine', 'admin'),
(2167652, 'fffff', 137, 'etage1', 'chambre', 'admin'),
(2167653, '', 138, 'etage1', 'cuisine', 'admin'),
(2167654, '', 138, 'etage1', 'cuisine', 'admin'),
(2167655, '', 138, 'etage1', 'cuisine', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
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

INSERT INTO `user` (`id_user`, `username`, `phone`, `email`, `mdp`, `nom`, `prenom`) VALUES
(0, 'achraaaaaaaff', 867678, 'achraf@gmail.com', 'achraf', 'ffg', 'achraf'),
(0, 'admin', 65765675, 'oum@gmail.com', 'admin', 'jkj', 'kjkjk'),
(0, 'azzaeze', 527575, 'oum@gmaifl.com', 'admin', 'efdfdfd', 'zezeze'),
(0, 'ezeze', 456565, 'oum@gffmail.com', 'admin', 'zezezez', 'dsdfdfd'),
(0, 'hjh', 8787, 'jh@', 'jhj', 'jkj', 'kjkjk'),
(0, 'hjjh', 778, 'h@', 'nbnb', 'kkj', 'jkjk'),
(0, 'nbnb', 7676, 'bnb@n', 'bnbn', 'test', 'j'),
(0, 'snyless', 25055633, 'oum@gmail.cof', '123456', 'achraf', 'mahir'),
(0, 'zezezeze', 4, 'ouem@gmail.com', 'admin', 'ffffff', 'zezeze');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id_equipement`),
  ADD KEY `piece` (`piece`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id_historique`),
  ADD KEY `username` (`username`),
  ADD KEY `id_equipement` (`id_equipement`);

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
  ADD KEY `maison` (`maison`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `gmail` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id_equipement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id_historique` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `id_maison` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `id_piece` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2167656;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD CONSTRAINT `equipement_ibfk_1` FOREIGN KEY (`piece`) REFERENCES `piece` (`id_piece`);

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `historique_ibfk_1` FOREIGN KEY (`username`) REFERENCES `maison_user` (`username`),
  ADD CONSTRAINT `historique_ibfk_2` FOREIGN KEY (`id_equipement`) REFERENCES `equipement` (`id_equipement`);

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
  ADD CONSTRAINT `piece_ibfk_2` FOREIGN KEY (`maison`) REFERENCES `maison` (`id_maison`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
