-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 juin 2023 à 17:42
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `charte`
--

-- --------------------------------------------------------

--
-- Structure de la table `admine`
--

CREATE TABLE `admine` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admine`
--

INSERT INTO `admine` (`id`, `nom`, `prenom`) VALUES
(1, 'Relia', 'Consulting');

-- --------------------------------------------------------

--
-- Structure de la table `polar_data`
--

CREATE TABLE `polar_data` (
  `id_vin` int(10) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polar_data`
--

INSERT INTO `polar_data` (`id_vin`, `label`, `value`) VALUES
(1, 'Vin Rouge', 195),
(2, 'Vin Gris', 100),
(3, 'Vin Appéritif', 105),
(4, 'Vin Rosée', 98),
(5, 'Vin Blanc', 68);

-- --------------------------------------------------------

--
-- Structure de la table `polar_data_2`
--

CREATE TABLE `polar_data_2` (
  `id` int(10) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polar_data_2`
--

INSERT INTO `polar_data_2` (`id`, `label`, `value`) VALUES
(1, 'Vin Rouge', 0),
(2, 'Vin Gris', 0),
(3, 'Vin Appéritif', 0),
(4, 'Vin Rosée', 0),
(5, 'Vin Blanc', 0);

-- --------------------------------------------------------

--
-- Structure de la table `polar_data_3`
--

CREATE TABLE `polar_data_3` (
  `id` int(10) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polar_data_3`
--

INSERT INTO `polar_data_3` (`id`, `label`, `value`) VALUES
(1, 'Vin Rouge', 0),
(2, 'Vin Gris', 0),
(3, 'Vin Appéritif', 0),
(4, 'Vin Rosée', 0),
(5, 'Vin Blanc', 0);

-- --------------------------------------------------------

--
-- Structure de la table `polar_data_4`
--

CREATE TABLE `polar_data_4` (
  `id` int(10) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polar_data_4`
--

INSERT INTO `polar_data_4` (`id`, `label`, `value`) VALUES
(1, 'Vin Rouge', 0),
(2, 'Vin Gris', 0),
(3, 'Vin Appéritif', 0),
(4, 'Vin Rosée', 0),
(5, 'Vin Blanc', 0);

-- --------------------------------------------------------

--
-- Structure de la table `polar_data_5`
--

CREATE TABLE `polar_data_5` (
  `id` int(10) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polar_data_5`
--

INSERT INTO `polar_data_5` (`id`, `label`, `value`) VALUES
(1, 'Vin Rouge', 0),
(2, 'Vin Gris', 0),
(3, 'Vin Appéritif', 0),
(4, 'Vin Rosée', 0),
(5, 'Vin Blanc', 0);

-- --------------------------------------------------------

--
-- Structure de la table `polar_data_6`
--

CREATE TABLE `polar_data_6` (
  `id` int(10) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `polar_data_6`
--

INSERT INTO `polar_data_6` (`id`, `label`, `value`) VALUES
(1, 'Vin Rouge', 0),
(2, 'Vin Gris', 0),
(3, 'Vin Appéritif', 0),
(4, 'Vin Rosée', 0),
(5, 'Vin Blanc', 0);

-- --------------------------------------------------------

--
-- Structure de la table `stock_vin`
--

CREATE TABLE `stock_vin` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `point_de_vente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stock_vin`
--

INSERT INTO `stock_vin` (`id`, `nom_produit`, `quantite`, `prix`, `point_de_vente`) VALUES
(2, 'Vin Blanc', 20, '4000.00', 'Antananarivo'),
(5, 'Vin Rouge', 30, '4000.00', 'Fianarantsoa');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUt` int(11) NOT NULL,
  `cle` varchar(20) NOT NULL,
  `NomUt` text NOT NULL,
  `PrenomUt` text NOT NULL,
  `AdresseUt` varchar(20) NOT NULL,
  `CINUt` int(15) NOT NULL,
  `Region` text NOT NULL,
  `MdpUt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUt`, `cle`, `NomUt`, `PrenomUt`, `AdresseUt`, `CINUt`, `Region`, `MdpUt`) VALUES
(1, 'regh0EAFwYIHuggJvDrf', 'RAHARIVONY', 'Mamilalaina Joël', 'Antanifotsy', 2015549875, 'Fianarantsoa', '123'),
(4, 'qksjfdghqsjkdf', 'Fiderana', 'Nambinintsoa', 'Antanix', 2147483647, 'Antananarivo', '456'),
(5, 'gfnikqdshtgozeip', 'Tsaratsiry', 'Tahina', 'Ranomafana', 2147483647, 'Toliara', '123'),
(6, 'dfjsdgfkssdf', 'Mialy', 'Andio', 'Antsirabe', 2015549875, 'Mania', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `polar_data`
--
ALTER TABLE `polar_data`
  ADD PRIMARY KEY (`id_vin`);

--
-- Index pour la table `polar_data_2`
--
ALTER TABLE `polar_data_2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `polar_data_3`
--
ALTER TABLE `polar_data_3`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `polar_data_4`
--
ALTER TABLE `polar_data_4`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `polar_data_5`
--
ALTER TABLE `polar_data_5`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `polar_data_6`
--
ALTER TABLE `polar_data_6`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stock_vin`
--
ALTER TABLE `stock_vin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUt`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `polar_data`
--
ALTER TABLE `polar_data`
  MODIFY `id_vin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `polar_data_2`
--
ALTER TABLE `polar_data_2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `polar_data_3`
--
ALTER TABLE `polar_data_3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `polar_data_4`
--
ALTER TABLE `polar_data_4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `polar_data_5`
--
ALTER TABLE `polar_data_5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `polar_data_6`
--
ALTER TABLE `polar_data_6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `stock_vin`
--
ALTER TABLE `stock_vin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
