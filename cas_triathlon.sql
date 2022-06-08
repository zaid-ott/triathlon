-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 oct. 2021 à 00:17
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cas_triathlon`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie age`
--

CREATE TABLE `categorie age` (
  `CodeCategorieAge` int(11) NOT NULL,
  `LlibelleCategorieAge` int(11) NOT NULL,
  `AgeDebutCategorie` int(11) NOT NULL,
  `AgeFinCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `NumeroDossard` int(11) NOT NULL,
  `DateInscription` date NOT NULL,
  `IndicationForfait` varchar(50) NOT NULL,
  `TempsNatation` int(11) NOT NULL,
  `TempsCourseCycliste` int(11) NOT NULL,
  `TempsCoursePied` int(11) NOT NULL,
  `ClassementCategorie` int(11) NOT NULL,
  `NumTriathlon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `triathlete`
--

CREATE TABLE `triathlete` (
  `NumeroLicence` int(11) NOT NULL,
  `NomTriathlete` varchar(50) NOT NULL,
  `PrenomTriathlete` varchar(11) NOT NULL,
  `SexeTriathlete` varchar(10) NOT NULL,
  `RueTriathlete` varchar(50) NOT NULL,
  `VilleTriathlete` varchar(50) NOT NULL,
  `CodePostalTriathlete` int(11) NOT NULL,
  `ComplementAdresseTriathlete` varchar(50) NOT NULL,
  `DateNaissance` date NOT NULL,
  `EmailTriathlete` varchar(50) NOT NULL,
  `MdpTriathlete` int(11) NOT NULL,
  `CodeCategorieAge` int(11) NOT NULL,
  `NumeroDossard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `triathlete`
--

INSERT INTO `triathlete` (`NumeroLicence`, `NomTriathlete`, `PrenomTriathlete`, `SexeTriathlete`, `RueTriathlete`, `VilleTriathlete`, `CodePostalTriathlete`, `ComplementAdresseTriathlete`, `DateNaissance`, `EmailTriathlete`, `MdpTriathlete`, `CodeCategorieAge`, `NumeroDossard`) VALUES
(1711514029, 'OTTMANI', 'zaid', 'Masculin', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, 'appt 9', '0000-00-00', 'zaidott71@gmail.com', 2147483647, 0, 0),
(1712156046, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712156082, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712156131, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712156237, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712156341, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712156359, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712156902, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712156924, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157149, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157278, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157350, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157382, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157421, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157470, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157492, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0),
(1712157522, 'OTTMANI', 'zaid', '', '10 impasse Henri Tagneres', 'TOULOUSE', 31400, '10 impasse Henri Tagneres', '0000-00-00', 'zaidott71@gmail.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `triathlon`
--

CREATE TABLE `triathlon` (
  `NumTriathlon` int(11) NOT NULL,
  `NomTriathlon` varchar(50) NOT NULL,
  `LieuTriathlon` varchar(50) NOT NULL,
  `DateTriathlon` date NOT NULL,
  `CodeTypeTriathlon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `triathlon`
--

INSERT INTO `triathlon` (`NumTriathlon`, `NomTriathlon`, `LieuTriathlon`, `DateTriathlon`, `CodeTypeTriathlon`) VALUES
(1, 'grand toulouse', 'blagnac Toulouse', '2021-12-30', 9090),
(2, 'Grand SUD EST', 'occitanie', '2022-03-30', 9898),
(3, 'paris dakar', 'europe', '2021-09-30', 303);

-- --------------------------------------------------------

--
-- Structure de la table `type triathlon`
--

CREATE TABLE `type triathlon` (
  `CodeTypeTriathlon` int(11) NOT NULL,
  `libelleTypeTriathlon` varchar(50) NOT NULL,
  `DistanceNatation` int(11) NOT NULL,
  `distanceEpreuveCycliste` int(11) NOT NULL,
  `DistanceCoursePied` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie age`
--
ALTER TABLE `categorie age`
  ADD PRIMARY KEY (`CodeCategorieAge`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`NumeroDossard`),
  ADD KEY `NumTriathlon` (`NumTriathlon`);

--
-- Index pour la table `triathlete`
--
ALTER TABLE `triathlete`
  ADD PRIMARY KEY (`NumeroLicence`),
  ADD KEY `CodeCategorieAge` (`CodeCategorieAge`),
  ADD KEY `CodeCategorieAge_2` (`CodeCategorieAge`),
  ADD KEY `NumeroDossard` (`NumeroDossard`);

--
-- Index pour la table `triathlon`
--
ALTER TABLE `triathlon`
  ADD PRIMARY KEY (`NumTriathlon`),
  ADD KEY `CodeTypeTriathlon` (`CodeTypeTriathlon`);

--
-- Index pour la table `type triathlon`
--
ALTER TABLE `type triathlon`
  ADD PRIMARY KEY (`CodeTypeTriathlon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
