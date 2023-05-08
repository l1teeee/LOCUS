-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 01:49:28
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
-- Base de datos: `locus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`id`, `ip`, `fecha`) VALUES
(1, '::1', '2021-09-01 10:07:11'),
(2, '::1', '2021-09-01 10:07:34'),
(3, '::1', '2021-09-01 10:08:51'),
(4, '::1', '2021-09-01 10:09:21'),
(5, '::1', '2021-09-01 10:14:59'),
(6, '::1', '2021-09-01 10:26:01'),
(7, '::1', '2021-09-01 10:27:21'),
(8, '::1', '2021-09-01 13:14:53'),
(9, '::1', '2021-09-01 13:17:09'),
(10, '::1', '2021-09-01 13:54:46'),
(11, '::1', '2021-09-01 13:54:46'),
(12, '::1', '2021-09-01 13:54:47'),
(13, '::1', '2021-09-01 13:56:34'),
(14, '::1', '2021-09-01 13:56:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contador`
--
ALTER TABLE `contador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
