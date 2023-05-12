-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 mai 2023 à 13:29
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `intitule` text NOT NULL,
  `type` varchar(64) NOT NULL,
  `rep_1` text NOT NULL,
  `rep_2` text NOT NULL,
  `rep_3` text NOT NULL,
  `rep_4` text NOT NULL,
  `correct` varchar(4) NOT NULL,
  `spe` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `intitule`, `type`, `rep_1`, `rep_2`, `rep_3`, `rep_4`, `correct`, `spe`, `level`) VALUES
(1, 'pregunta test', 'solo', 'rep 1', 'rep 2', 'rep 3', 'rep 4', '0010', 2, 1),
(2, 'pregunta test 2 ', 'solo', '98', '23', '656', 'gtrhy', '0100', 2, 1),
(3, 'pregunta test multi 1', 'multi', '12', '13', '14', '15', '1010', 2, 1),
(4, 'pregunta test multi 2', 'multi', '21', '22', '23', '24', '0101', 2, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
