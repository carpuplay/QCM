-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2023 a las 09:17:49
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

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
  `specialite` varchar(64) NOT NULL,
  `niveaux` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `verification_code`, `prof`, `specialite`, `niveaux`) VALUES
(2, 'alex2', 'acarp@educand.ad', '$2y$10$UyEtNGlmWsZZnegMfUDaA.HJ3xfJc3cIFTWFGser.Rjl2pA4r6an2', '2023-04-14 20:38:08', '', 0, 'ses, maths', ''),
(4, 'lex', 'exonstudiosnextgen@gmail.com', '$2y$10$57lb/AbkCk6Ha8CsxE2q9OkWs87D65MlDaKy1czQp527s8UnImjyu', '2023-04-14 21:08:57', '', 0, '', ''),
(5, 'alextest', 'acarpmihai2005@gmail.com', '$2y$10$NS92lApDGPpI26BtDrkgEOqNV7EMBa..cIunAgMTd1xuTR6G89gna', '2023-04-14 22:41:04', 'T8jLsr8u0GMgSzXS2CPV', 0, '', ''),
(6, 'louis', 'anastasiosierras@educand.ad', '$2y$10$1JA9wLxxO9lg2iw/43nQGOaynpy5j2t809reDyIi54siz8RJf1w/.', '2023-04-18 14:33:25', '', 0, '', ''),
(7, '221', '55@email.com', '$2y$10$FF27DJfETjXVG3OZILr/h.5MuWOWtT4EKe3Q1xuL9CcAXG/sCG9Ku', '2023-04-20 08:44:15', '', 0, '', ''),
(8, '5454', '444@email.com', '$2y$10$YJ19LlUKUOMHwyrlXg3XLetd4c5fgoUhZAA11EInDyIZUXSJIbaHK', '2023-04-20 08:56:37', '', 0, 'maths', '');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;