-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2023 a las 00:32:10
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
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(64) NOT NULL,
  `r1` varchar(64) NOT NULL,
  `r2` varchar(64) NOT NULL,
  `r3` varchar(64) NOT NULL,
  `r4` varchar(64) NOT NULL,
  `pos` varchar(1) NOT NULL,
  `type` varchar(1) NOT NULL DEFAULT 'm',
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
(17, 'Un acide selon Brönsted est une espêce chimique capable de:', 'Céder un ou plusieurs électrons', 'Capter un ou plusieurs protons', 'Cédér un ou plusieurs protons', 'Capter un ou plusieurs électrons', '3', 'u', '-', 'physique', 'terminale ', '', '2023-05-04 20:22:26', ''),
(18, 'Lors d\'un titrage, il faut placer la solution titrante dans:', 'Un béchier', 'Un Erlenmeyer', 'Une ampoule à décanter', 'Une burette', '4', 'u', '-', 'physique', 'terminale', '', '2023-05-04 20:22:26', ''),
(19, 'Un alcène peut être un réactif donnant lieu à une réaction de:', 'Substitution', 'Addition', 'Élimination', 'Aucune réponse ci-dessus', '2', 'u', '-', 'physique', 'terminale', '', '2023-05-04 20:22:26', ''),
(20, 'Un fluide parfait correspond à:', 'Une masse volumique constante', 'Un fluide immobile', 'Une absence de frottement', 'Une forte viscosité', '3', 'u', '-', 'physique', 'terminale', '', '2023-05-04 20:22:26', ''),
(35, 'Esto es una prueba', 'hey', 'esto', 'va ', 'a funcionar', '4', 'u', 'yes sir', 'maths', 'super admi', 'none', '2023-05-04 20:22:26', ''),
(36, 'prueba 2', 'esoooo', 'dssss', '', '', '2', 'u', '6666', 'maths', 'super admi', 'none', '2023-05-04 20:41:30', ''),
(37, 'jsiisds', 'oìok`pso', 'ew', 'ew', '', '2', 'w', 'ewewew', 'ewewew', '2', 'eee', '2023-05-04 21:07:57', ''),
(38, 'wewdsds', 'ewew', 'wewe', '222', '', '2', 'u', 'test', 'nsi', 'terminale', 'none', '2023-05-04 21:48:04', ''),
(39, 'wewdsds', 'ewds', 'weds', '2323222', '', '1', 'u', 'test', 'maths', 'premiere', 'none', '2023-05-04 21:49:02', ''),
(40, 'cela marche?', 'oui', 'non', '', '', '2', 'u', 'base-de-donnees-t', 'nsi', 'terminale', '', '2023-05-04 22:21:39', '');

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
