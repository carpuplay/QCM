-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2023 a las 22:58:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chapitres`
--

CREATE TABLE `chapitres` (
  `id` int(11) NOT NULL,
  `spe` varchar(10) NOT NULL,
  `niveaux` varchar(10) NOT NULL,
  `chapitre` varchar(64) NOT NULL,
  `année` year(4) NOT NULL DEFAULT 2023,
  `numero de chapitre` int(10) NOT NULL,
  `user` varchar(15) DEFAULT 'alex'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `chapitres`
--

INSERT INTO `chapitres` (`id`, `spe`, `niveaux`, `chapitre`, `année`, `numero de chapitre`, `user`) VALUES
(1, 'nsi', 'terminale', 'Structures de données', '2023', 1, 'alex'),
(2, 'nsi', 'terminale', 'Base de données', '2023', 2, 'alex'),
(4, 'nsi', 'terminale', 'Langages et programmation', '2023', 3, 'alex'),
(8, 'nsi', 'terminale', 'Architectures matérielles, systèmes d\'exploitation et réseaux', '2023', 4, 'alex'),
(10, 'nsi', 'terminale', 'Algorithmique', '2023', 5, 'alex'),
(11, 'ses', 'terminale', 'Les sources de la croissance économique', '2023', 1, 'alex'),
(12, 'ses', 'terminale', 'Comment expliquer l\'instabilité de la croissance ?', '2023', 2, 'alex'),
(13, 'ses', 'terminale', 'Quels sont les fondements du commerce international et de l’inte', '2023', 3, 'alex'),
(14, 'ses', 'terminale', 'Quelle est la place de l’Union européenne dans l’économie mondia', '2023', 4, 'alex'),
(15, 'ses', 'terminale', 'La croissance économique est-elle compatible avec la préservatio', '2023', 5, 'alex'),
(16, 'ses', 'terminale', 'Comment analyser la structure sociale ?', '2023', 6, 'alex'),
(17, 'ses', 'terminale', 'Comment rendre compte de la mobilité sociale ?', '2023', 7, 'alex'),
(18, 'ses', 'terminale', 'Quels liens sociaux dans des sociétés où s’affirme le primat de ', '2023', 8, 'alex'),
(19, 'ses', 'terminale', 'La conflictualité sociale : pathologie, facteur de cohésion ou m', '2023', 9, 'alex'),
(20, 'ses', 'terminale', 'Comment les pouvoirs publics peuvent-ils contribuer à la justice', '2023', 10, 'alex'),
(21, 'ses', 'terminale', 'Comment s’articulent marché du travail et gestion de l’emploi ?', '2023', 11, 'alex'),
(22, 'ses', 'terminale', 'Quelles politiques pour l’emploi ?', '2023', 12, 'alex'),
(23, 'ses', 'terminale', 'Spécialité sciences sociales et politiques', '2023', 13, 'alex'),
(24, 'ses', 'terminale', 'Spécialité économie approfondie', '2023', 14, 'alex'),
(39, 'svt', 'terminale', 'Origine de la diversité génétique des espèces et conséquences su', '2023', 1, 'alex'),
(40, 'svt', 'terminale', 'À la recherche du passé géologique de notre planète', '2023', 2, 'alex'),
(41, 'svt', 'terminale', 'De la plante sauvage à la plante domestiquée', '2023', 3, 'alex'),
(42, 'svt', 'terminale', 'Les climats de la Terre, comprendre le passé pour agir aujourd’h', '2023', 4, 'alex'),
(43, 'svt', 'terminale', 'Comportements, mouvement et système nerveux', '2023', 5, 'alex'),
(44, 'svt', 'terminale', 'Produire le mouvement : contraction musculaire et apport d’énerg', '2023', 6, 'alex'),
(45, 'svt', 'terminale', 'Comportement et stress : vers une vision intégrée de l’organisme', '2023', 7, 'alex'),
(53, 'maths', 'terminale', 'Les suites', '2023', 1, 'alex'),
(54, 'maths', 'terminale', 'Limites et continuités de fonctions', '2023', 2, 'alex'),
(55, 'maths', 'terminale', 'Fonction trigonométrique', '2023', 3, 'alex'),
(56, 'maths', 'terminale', 'Fonction exponentielle', '2023', 4, 'alex'),
(57, 'maths', 'terminale', 'Fonction logarithme', '2023', 5, 'alex'),
(58, 'maths', 'terminale', 'Nombres complexes', '2023', 6, 'alex'),
(59, 'maths', 'terminale', 'Calcul intégral', '2023', 7, 'alex'),
(60, 'maths', 'terminale', 'Géométrie dans l\'espace', '2023', 8, 'alex'),
(61, 'maths', 'terminale', 'Probabilités', '2023', 9, 'alex'),
(62, 'maths', 'terminale', 'Échantillonnage', '2023', 10, 'alex'),
(63, 'maths', 'terminale', 'Spécialité mathématiques', '2023', 11, 'alex'),
(64, 'hlp', 'terminale', 'Éducation, transmission et émancipation', '2023', 1, 'alex'),
(65, 'hlp', 'terminale', 'Les expressions de la sensibilité', '2023', 2, 'alex'),
(66, 'hlp', 'terminale', 'Les métamorphoses du moi', '2023', 3, 'alex'),
(67, 'hlp', 'terminale', 'Création, continuités et ruptures', '2023', 4, 'alex'),
(68, 'hlp', 'terminale', 'Histoire et violence', '2023', 5, 'alex'),
(69, 'hlp', 'terminale', 'L’humain et ses limites', '2023', 6, 'alex'),
(70, 'geopo', 'terminale', 'De nouveaux espaces de conquête', '2023', 1, 'alex'),
(71, 'geopo', 'terminale', 'Faire la guerre, faire la paix : formes de conflits et modes de ', '2023', 2, 'alex'),
(72, 'geopo', 'terminale', 'Histoire et mémoires', '2023', 3, 'alex'),
(73, 'geopo', 'terminale', 'Les enjeux géopolitiques liés à la conservation et à la valorisa', '2023', 4, 'alex'),
(74, 'geopo', 'terminale', 'L’environnement, un enjeu planétaire', '2023', 5, 'alex'),
(75, 'geopo', 'terminale', 'L’enjeu de la connaissance', '2023', 6, 'alex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(64) NOT NULL,
  `r1` varchar(64) NOT NULL,
  `r2` varchar(64) NOT NULL,
  `r3` varchar(64) NOT NULL,
  `r4` varchar(64) NOT NULL,
  `pos` varchar(4) NOT NULL,
  `type` varchar(12) NOT NULL,
  `chapitre` varchar(20) NOT NULL,
  `spe` varchar(10) NOT NULL,
  `niveaux` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `question`, `r1`, `r2`, `r3`, `r4`, `pos`, `type`, `chapitre`, `spe`, `niveaux`, `image`, `date`, `user`) VALUES
(17, 'Un acide selon Brönsted est une espêce chimique capable de:', 'Céder un ou plusieurs électrons', 'Capter un ou plusieurs protons', 'Cédér un ou plusieurs protons', '', '3', 'u', '-', 'physique', 'terminale ', '', '2023-05-23 21:20:04', ''),
(18, 'Lors d\'un titrage, il faut placer la solution titrante dans:', 'Un béchier', 'Un Erlenmeyer', 'Une ampoule à décanter', '0', '4', 'u', '-', 'physique', 'terminale', '', '2023-05-23 21:20:18', ''),
(19, 'Un alcène peut être un réactif donnant lieu à une réaction de:', 'Substitution', 'Addition', 'Élimination', 'aver si esto si', '2', 'u', '-', 'physique', 'terminale', '', '2023-05-23 21:19:58', ''),
(20, 'Un fluide parfait correspond à:', 'Une masse volumique constante', 'Un fluide immobile', 'Une absence de frottement', '0', '3', 'u', '-', 'physique', 'terminale', '', '2023-05-23 21:20:11', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `verification_code` varchar(64) NOT NULL,
  `prof` int(1) NOT NULL,
  `niveaux` varchar(64) NOT NULL,
  `spe_nsi` int(1) NOT NULL DEFAULT 0,
  `spe_geopo` int(1) NOT NULL DEFAULT 0,
  `spe_ses` int(1) NOT NULL DEFAULT 0,
  `spe_math` int(1) NOT NULL DEFAULT 0,
  `spe_physique` int(1) NOT NULL DEFAULT 0,
  `spe_anglais` int(1) NOT NULL DEFAULT 0,
  `spe_hlp` int(1) NOT NULL DEFAULT 0,
  `spe_svt` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `verification_code`, `prof`, `niveaux`, `spe_nsi`, `spe_geopo`, `spe_ses`, `spe_math`, `spe_physique`, `spe_anglais`, `spe_hlp`, `spe_svt`) VALUES
(2, 'alex2', 'acarp@educand.ad', '$2y$10$UyEtNGlmWsZZnegMfUDaA.HJ3xfJc3cIFTWFGser.Rjl2pA4r6an2', '2023-04-14 20:38:08', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'lex', 'exonstudiosnextgen@gmail.com', '$2y$10$57lb/AbkCk6Ha8CsxE2q9OkWs87D65MlDaKy1czQp527s8UnImjyu', '2023-04-14 21:08:57', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'alextest', 'acarpmihai2005@gmail.com', '$2y$10$NS92lApDGPpI26BtDrkgEOqNV7EMBa..cIunAgMTd1xuTR6G89gna', '2023-04-14 22:41:04', 'T8jLsr8u0GMgSzXS2CPV', 0, '', 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'marte', 'mgassetr@educand.ad', '$2y$10$BgZy5g1Z9qg8CqCLYJnTbOmTV1bsEELfElXrJ3Vn68UpVhp/jyxw6', '2023-04-27 11:13:55', '', 0, 'Terminale', 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'Jan', 'janpujolandorra@gmail.com', '$2y$10$gjNiSusuoLj30Bg1eKzmDu0z8xb7Ja/kLIQMr6p2XFMDeetpLRfj.', '2023-04-27 11:34:24', '', 0, 'Terminale', 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'miguel', 'miguel@gmail.com', '$2y$10$jGDTT9W8/Xe0kTXVxJRnputTWyLVit5O5vegJ8gwyEnth2teuV6VG', '2023-05-02 23:53:10', '', 0, 'Terminale', 0, 1, 1, 1, 0, 0, 0, 0),
(36, 'alexcasa', 'casaalex@email.com', '$2y$10$vyp502Bal/1/tdWe5QJ9eOftYZxA2Z4rchxwIZPSqxX3S9wd2oUwC', '2023-05-03 00:11:34', '', 0, 'Terminale', 0, 0, 1, 1, 0, 0, 0, 0),
(37, 'manolo', 'prof12@email.com', '$2y$10$KpxjXvaZl1r0Wgg1SW91xuTU3VgqyGIViVpjGCLC3D8uvHNn1hN4i', '2023-05-05 00:27:49', '', 0, 'Terminale', 0, 1, 1, 1, 0, 0, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chapitres`
--
ALTER TABLE `chapitres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chapitres`
--
ALTER TABLE `chapitres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
