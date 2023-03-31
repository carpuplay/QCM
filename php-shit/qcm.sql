-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 mars 2023 à 10:19
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
-- Structure de la table `qcm`
--

CREATE TABLE `qcm` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `matière` text NOT NULL,
  `theme` text NOT NULL,
  `question` text NOT NULL,
  `r1` text NOT NULL,
  `r2` text NOT NULL,
  `r3` text NOT NULL,
  `r4` text NOT NULL,
  `Bonne réponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `qcm`
--

INSERT INTO `qcm` (`id`, `type`, `matière`, `theme`, `question`, `r1`, `r2`, `r3`, `r4`, `Bonne réponse`) VALUES
(1, 1, 'math', 'primitives', 'Qu\'est ce qu\'une primitive d\'une fonction f ?', 'C\'est une fonction continue F telle que F\'= f ', 'C\'est un vecteur', 'C\'est f\'', 'C\'est l\'image de la fonction inverse.', '1000'),
(2, 2, 'math', 'fonctions', 'Qu\'est ce qui est vrai pour cette fonction ?<p><img src=\'fonction.jpg\' /></p>', 'Elle est continue', 'Elle est dérivable', 'Elle est concave', 'f\'(2)=0', '1101'),
(3, 1, 'math', 'derivee', 'quelle fonction est égale a sa dérivée?', 'exp x', 'ln x', 'n!/(n-1)!', '2/5exp 2/5x', '1000'),
(4, 1, 'math', 'geometrie dans l\'espace', 'un vecteur normal du plan (ABC) qui a pour équation 5x-3y+9z-4=13 est:', 'DE(9,3,5)', 'FG(9,-3,5)', 'HI(5,-3,9)', 'JK(5,3,9)', '0010'),
(5, 2, 'math', 'equation diferentielle', 'On a l\'équation diférentielle y\'=5y.Celle-ci a pour solution:', 'C*exp x', 'exp 5x', 'exp 5', 'C*exp 5x', '0101'),
(6, 1, 'math', 'limites', 'Que vaut lim (x**2-1)/(2x**2−2x+1) quand x  tend vers +∞?', '0', '-1', '+∞', '1/2', '0001'),
(7, 1, 'math', 'limites', 'On suppose que lim Un=+∞ et lim Vn=-150 quand n tend vers +∞. Que vaut alors lim Un+Vn quand n tend +∞? ', '-150', '+∞', '-∞', '150', '0100'),
(8, 1, 'math', 'derivee', 'Quelle est la formule de la dérivée de f∘g', 'f ∘ g\'', ' f\'x g\'', 'f\'∘ g x g\'', 'f\'∘ g\'x g', '0010'),
(9, 1, 'math', 'derivee', 'Soit f la fonction définie sur R par f(x)= exp(x**2). Quelle est l\'expression de f\'', 'exp(2x)', 'x**2 exp(x**2)', 'exp(x**2)', '2x exp(x**2)', '0001'),
(10, 1, 'math', 'limites', 'Soit Un=-n**2 +2020. Alors la suite(Un):', 'tend vers +∞', 'tend vers -∞', 'tend vers 2020', 'n\'a pas de limite', '0100'),
(11, 1, 'math', 'limites', 'Soit Soit Vn=3/n. Alors la suite(Vn):', 'tend vers 3', 'tend vers +∞', 'tend vers 0', 'n\'a pas de limite', '0010'),
(12, 1, 'math', 'probabilites', 'Qu\'est ce qu\'un schéma de Bernoulli ?', 'C\'est lorsqu\'on lance une pièce et que l\'on regarde si elle tombe sur pile ou face.', 'C\'est lorsqu\'on effectue un certain nombre de fois une même épreuve de Bernoulli.', 'C\'est lorsqu\'on fait une expérience totalement aléatoire.', 'C\'est lorsqu\'il y a trois issue à une expérience aléatoire.', '0100'),
(13, 1, 'math', 'probabilites', 'Dans un schéma de Bernoulli n désigne:', 'la probabilité de succès', 'la probabilité d\'échec', 'le nombre d\'épreuves', 'le nombres de succès', '0010'),
(14, 1, 'math', 'probabilites', 'Dans un schéma de Bernoulli k désigne:', 'la probabilité de succès', 'la probabilité d\'échec', 'le nombre d\'épreuves', 'le nombres de succès', '0001'),
(15, 1, 'math', 'probabilites', 'Dans un schéma de Bernoulli p désigne:', 'la probabilité de succès', 'la probabilité d\'échec', 'le nombre d\'épreuves', 'le nombres de succès', '1000'),
(16, 1, 'math', 'probablites', 'La formule de la loi binomiale est:', '(kCn)p**k x (1-p)**(n-k)', '(nCk)p**k x (1-p)**(n-k)', '(kCn)p**k x (1-p)**(k-n)', '(nCk)p**k x (1-p)**(k-n)', '1000'),
(17, 2, 'math', 'probabilites', 'Comment on calcule P(X>=3)?', '1-P(X=2)-P(X=1)-P(X=0)', '1-P(X=3)-P(X=2)-P(X=1)-P(X=0)', '1-P(X<=2)', '1-P(X<=3)', '1010');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `qcm`
--
ALTER TABLE `qcm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `qcm`
--
ALTER TABLE `qcm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
