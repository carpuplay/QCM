-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 mars 2023 à 13:26
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
-- Base de données : `qcm`
--

-- --------------------------------------------------------

--
-- Structure de la table `maths`
--

CREATE TABLE `maths` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `question` text NOT NULL,
  `r1` text NOT NULL,
  `r2` text NOT NULL,
  `r3` text NOT NULL,
  `r4` text NOT NULL,
  `bonne_reponse` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `maths`
--

INSERT INTO `maths` (`id`, `type`, `question`, `r1`, `r2`, `r3`, `r4`, `bonne_reponse`) VALUES
(1, 1, 'Qu\'est ce qu\'une primitive d\'une fonction f ?', 'C\'est une fonction continue F telle que F\'= f ', 'C\'est un vecteur', 'C\'est f\'', 'C\'est l\'image de la fonction inverse.', '1000'),
(2, 2, 'Qu\'est ce qui est vrai pour cette fonction ?<p>\r\n<img src=\'fonction.jpg\' /></p>', 'Elle est continue', 'Elle est dérivable', 'Elle est concave', 'f\'(2)=0', '1101');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `maths`
--
ALTER TABLE `maths`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `maths`
--
ALTER TABLE `maths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
