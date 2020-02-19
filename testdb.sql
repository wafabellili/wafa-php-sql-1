-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 fév. 2020 à 15:10
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--

CREATE TABLE `employer` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `salaira_an` int(11) DEFAULT NULL,
  `mf` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employer`
--

INSERT INTO `employer` (`matricule`, `nom`, `prenom`, `adresse`, `genre`, `salaira_an`, `mf`) VALUES
('1254215', 'bellili', 'wafa', 'rue de palesetine', 'femme', 10215987, '52152451/T'),
('12542151', 'trabelssi', 'hedi', 'lafayette tunis', 'homme', 9215987, '9854751/A'),
('2215458', 'trabelssi', 'ahmed', 'rue de maroc', 'homme', 10215987, '52152451/T');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `matricule_fisc` varchar(10) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `chiffre_d_affaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`matricule_fisc`, `nom`, `chiffre_d_affaire`) VALUES
('52152451/T', 'BeTech', 250000000),
('9854751/A', 'TT', 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `cin` varchar(8) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`cin`, `nom`, `prenom`, `age`, `email`) VALUES
('01215236', 'ayari', 'houda', 25, 'ayarihouda@gmail.com'),
('02581479', 'med ali', 'ben ali', 74, 'benalimedali@gmail.com'),
('07478566', 'ali', 'ben ali', 55, 'alibenali@gmail.com'),
('09188614', 'jallouli', 'rim', 50, 'rimjl@gmail.com'),
('0936548', 'trabelssi', 'hayet', 38, 'trabelssi001@gmail.com'),
('11001251', 'jebali', 'hedi', 23, 'hedijebali@gmail.com'),
('11223344', 'ali', 'ben ali', 55, 'alibenali55@gmail.com'),
('11235214', 'ben arfa', 'ahmed', 14, 'ahmedarfa@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `infovoyage`
--

CREATE TABLE `infovoyage` (
  `codee` varchar(10) NOT NULL,
  `type_ticket` varchar(50) DEFAULT NULL,
  `type_voyage` varchar(50) DEFAULT NULL,
  `ref` varchar(10) DEFAULT NULL,
  `matricule` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `infovoyage`
--

INSERT INTO `infovoyage` (`codee`, `type_ticket`, `type_voyage`, `ref`, `matricule`) VALUES
('21524515', 'Busines', 'Mission', 'A212541', '2215458');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `ref` varchar(10) NOT NULL,
  `date_depart` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `lieu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`ref`, `date_depart`, `date_retour`, `lieu`) VALUES
('A212541', '2019-12-29', '2020-02-01', 'Turquie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `fk_employer_entreprise` (`mf`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`matricule_fisc`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`cin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `infovoyage`
--
ALTER TABLE `infovoyage`
  ADD PRIMARY KEY (`codee`),
  ADD KEY `fk_infovoyage_voyage` (`ref`),
  ADD KEY `fk_employer_voyage` (`matricule`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`ref`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `fk_employer_entreprise` FOREIGN KEY (`mf`) REFERENCES `entreprise` (`matricule_fisc`);

--
-- Contraintes pour la table `infovoyage`
--
ALTER TABLE `infovoyage`
  ADD CONSTRAINT `fk_employer_voyage` FOREIGN KEY (`matricule`) REFERENCES `employer` (`matricule`),
  ADD CONSTRAINT `fk_infovoyage_voyage` FOREIGN KEY (`ref`) REFERENCES `voyage` (`ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
