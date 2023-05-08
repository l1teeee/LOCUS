-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 01:51:58
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombreUsu` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `foto` longblob DEFAULT NULL,
  `tipo` varchar(30) NOT NULL,
  `dinero` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreUsu`, `nombre`, `email`, `pass`, `foto`, `tipo`, `dinero`) VALUES
('20200312', 'Denis Josué Vásquez Rodríguez', 'josuee@gmail.com', '1234', NULL, 'user', '0.00'),
('Angalobi19041', 'Andrea Velásquez', 'yao@gmail.com', '$2y$10$BXFrgPAex1MEkysHYyh6c.tSXW6Uo9kg5JKYYTk5zWK', NULL, 'mod', '0.00'),
('jjkk', 'jkjn', 'josueee@gmail.com', '321', NULL, 'user', '0.00'),
('josu', 'Denis Josué Vásquez Rodríguez', 'josu@gmail.com', '12345', NULL, 'user', '0.00'),
('Joszuee', 'Denis Vásquez ', 'joszu@gmail.com', '12345', NULL, 'user', '0.00'),
('Joszzue', 'Andrea Velásquez', 'yo@gmail.com', '$2y$10$0JB6Mja.hlCRa.jA9jlKRutRqAUO/DQNOzBpplyGa/5', NULL, '', '0.00'),
('Kenay', 'Kennet Vargas', 'kenayred@gmail.com', '12345', NULL, 'user', '2.50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombreUsu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
