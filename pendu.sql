-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 fév. 2023 à 10:11
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pendu`
--

-- --------------------------------------------------------

--
-- Structure de la table `difficile`
--

CREATE TABLE `difficile` (
  `idD` int(11) NOT NULL,
  `mot` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `difficile`
--

INSERT INTO `difficile` (`idD`, `mot`) VALUES
(1, 'Nordschleife'),
(2, 'Tambourin'),
(4, 'Ascenseur'),
(5, 'Ascension'),
(6, 'Aseptiser'),
(7, 'Autoroute'),
(8, 'Avalanche'),
(10, 'Bilboquet'),
(11, 'Bourricot'),
(12, 'Brillance'),
(13, 'Cabriolet'),
(14, 'Contrario'),
(15, 'Cornemuse'),
(16, 'Dangereux'),
(19, 'Forteresse'),
(20, 'Gondolier'),
(21, 'Graphique'),
(22, 'Horoscope'),
(24, 'Klaxonner'),
(25, 'Mascarade'),
(26, 'Métaphore'),
(27, 'Narrateur'),
(28, 'Populaire'),
(29, 'Printemps'),
(31, 'Acrostiche'),
(32, 'Apocalypse'),
(33, 'Attraction'),
(34, 'Aventurier'),
(35, 'Bouillotte'),
(36, 'Citrouille'),
(37, 'Controverse'),
(38, 'Coquelicot'),
(39, 'Dissimuler'),
(40, 'Flibustier'),
(42, 'Grenouille'),
(43, 'Impossible'),
(44, 'Labyrinthe'),
(46, 'Abracadabra'),
(47, 'Francophile'),
(49, 'Chlorophylle'),
(54, 'Conquistador'),
(55, 'Conspirateur'),
(56, 'Rhododendron'),
(57, 'Qualification'),
(58, 'Protozoaire'),
(60, 'Zygomatique'),
(61, 'Sorcellerie');

-- --------------------------------------------------------

--
-- Structure de la table `facile`
--

CREATE TABLE `facile` (
  `idF` int(11) NOT NULL,
  `mot` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facile`
--

INSERT INTO `facile` (`idF`, `mot`) VALUES
(2, 'Bip'),
(3, 'Car'),
(4, 'Coq'),
(5, 'Cri'),
(6, 'Gaz'),
(7, 'Gel'),
(8, 'Jus'),
(9, 'Nul'),
(10, 'Ski'),
(11, 'Tic'),
(12, 'Beau'),
(13, 'Car'),
(14, 'Coq'),
(15, 'Cri'),
(16, 'Gaz'),
(17, 'Gel'),
(18, 'Jus'),
(19, 'Nul'),
(20, 'Ski'),
(21, 'Tic'),
(22, 'Beau'),
(24, 'Brun'),
(25, 'Cerf'),
(26, 'Chez'),
(27, 'Cire'),
(28, 'Dame'),
(29, 'Dent'),
(30, 'Drap'),
(31, 'Dune'),
(32, 'Emeu'),
(33, 'Faux'),
(34, 'Jazz'),
(35, 'Joli'),
(36, 'Joue'),
(37, 'Logo'),
(38, 'Long'),
(39, 'Lune'),
(40, 'Lynx'),
(41, 'Mine'),
(44, 'Brun'),
(45, 'Cerf'),
(46, 'Chez'),
(47, 'Cire'),
(48, 'Dame'),
(49, 'Dent'),
(50, 'Drap'),
(51, 'Dune'),
(52, 'Emeu'),
(53, 'Faux'),
(54, 'Jazz'),
(55, 'Joli'),
(56, 'Joue'),
(57, 'Logo'),
(58, 'Long'),
(59, 'Lune'),
(60, 'Lynx'),
(61, 'Mine');

-- --------------------------------------------------------

--
-- Structure de la table `moyen`
--

CREATE TABLE `moyen` (
  `idM` int(11) NOT NULL,
  `mot` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `moyen`
--

INSERT INTO `moyen` (`idM`, `mot`) VALUES
(2, 'Aimer'),
(3, 'Avion'),
(4, 'Balai'),
(5, 'Barbe'),
(6, 'Capot'),
(7, 'Bruit'),
(8, 'Buche'),
(9, 'Cache'),
(10, 'Route'),
(11, 'Carte'),
(12, 'Chien'),
(14, 'Gifle'),
(15, 'Radar'),
(16, 'Cycle'),
(17, 'Robot'),
(18, 'Taupe'),
(19, 'Radis'),
(20, 'Tenue'),
(22, 'Aimer'),
(23, 'Avion'),
(24, 'Balai'),
(25, 'Barbe'),
(26, 'Capot'),
(27, 'Bruit'),
(28, 'Buche'),
(29, 'Cache'),
(30, 'Route'),
(31, 'Carte'),
(32, 'Chien'),
(34, 'Gifle'),
(35, 'Radar'),
(36, 'Cycle'),
(37, 'Robot'),
(38, 'Taupe'),
(39, 'Radis'),
(40, 'Tenue'),
(41, 'Acajou'),
(42, 'Alarme'),
(43, 'Azimut'),
(44, 'Balade'),
(45, 'Aviron'),
(46, 'Basson'),
(47, 'Billet'),
(48, 'Bouche'),
(50, 'Cirage'),
(51, 'Poulpe'),
(52, 'Quartz'),
(53, 'Abriter'),
(54, 'Billard'),
(55, 'Macadam'),
(56, 'Acajou'),
(57, 'Alarme'),
(58, 'Azimut'),
(59, 'Balade'),
(60, 'Aviron'),
(61, 'Basson'),
(62, 'Billet'),
(63, 'Bouche'),
(65, 'Cirage'),
(66, 'Poulpe'),
(67, 'Quartz'),
(68, 'Abriter'),
(69, 'Billard'),
(70, 'Macadam'),
(71, 'Pouvoir'),
(73, 'Scooter'),
(74, 'Spirale'),
(75, 'Sucette'),
(76, 'Tunique'),
(77, 'Vautour'),
(78, 'Zozoter'),
(79, 'Senteur'),
(81, 'Aquarium'),
(84, 'Banquise'),
(85, 'Batterie'),
(86, 'Pouvoir'),
(88, 'Scooter'),
(89, 'Spirale'),
(90, 'Sucette'),
(91, 'Tunique'),
(92, 'Vautour'),
(93, 'Zozoter'),
(94, 'Senteur'),
(96, 'Aquarium'),
(99, 'Banquise'),
(100, 'Batterie'),
(101, 'Hautbois'),
(103, 'Objectif'),
(104, 'Question'),
(107, 'Tomahawk'),
(108, 'Tourisme'),
(109, 'Triangle'),
(110, 'Utopique'),
(111, 'Zeppelin'),
(112, 'Hautbois'),
(114, 'Objectif'),
(115, 'Question'),
(118, 'Tomahawk'),
(119, 'Tourisme'),
(120, 'Triangle'),
(121, 'Utopique'),
(122, 'Zeppelin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `difficile`
--
ALTER TABLE `difficile`
  ADD PRIMARY KEY (`idD`);

--
-- Index pour la table `facile`
--
ALTER TABLE `facile`
  ADD PRIMARY KEY (`idF`);

--
-- Index pour la table `moyen`
--
ALTER TABLE `moyen`
  ADD PRIMARY KEY (`idM`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `difficile`
--
ALTER TABLE `difficile`
  MODIFY `idD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `facile`
--
ALTER TABLE `facile`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `moyen`
--
ALTER TABLE `moyen`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
