-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 01:50:56
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
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `portada` varchar(111) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `nombre_archivo` varchar(250) NOT NULL,
  `megusta` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `monetizacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id`, `titulo`, `descripcion`, `categoria`, `portada`, `fecha_publicacion`, `nombre_archivo`, `megusta`, `visitas`, `estado`, `usuario`, `monetizacion`) VALUES
(71, 'YA FURULAaaa', 'XDXDXDXDDDXDXDXDXDX', 'Terror', '9781543007572.jpg', '2021-08-24', 'La Casa Vacia.pdf', 10, 0, 'Aprobado', 'Kenay', 'Si'),
(72, 'Aurora Boreal', 'El cuerpo de Victor Strandgard, el predicador más famoso de Suecia, yace mutilado en una remota iglesia en Kiruna, una ciudad del norte sumergida en la eterna noche polar. La herman de la víctima ha encontrado el cadáver, y la sospecha se cierne sobr', 'Terror', 'boreal.jpg', '2021-08-24', 'Aurora Boreal.pdf', 0, 0, 'Aprobado', 'Joszuee', 'No'),
(73, 'Cuervos', 'Libro Cuervos', 'Terror', 'cuervoss.jpg', '2021-08-24', 'Cuervos.pdf', 0, 0, 'Aprobado', 'Joszuee', 'No'),
(75, 'h', 'El amor en los tiempos del cólera es una novela del escritor colombiano Gabriel García Márquez, publicada en 1985. Es una novela dedicada al verdadero amor que perdura y supera las adversidades toda una vida.', 'Romance', 'el amor.jpg', '2021-08-24', 'García Gabriel - El amor en.pdf', 1, 0, 'Aprobado', '20200312', 'No'),
(76, 'Orgullo y Prejuicio.', 'La señora Bennet ha criado a sus cinco hijas con el único deseo de encontrar marido. La llegada al vecindario de Charles Bingley, un joven rico y soltero, con algunas amistades despierta el interés de las hermanas Bennet y de las familias vecinas, qu', 'Romance', 'orgullo.jpg', '2021-08-24', 'orgullo_y_prejuicio.pdf', 0, 0, 'Aprobado', '', 'No'),
(77, 'Romeo y Julieta', 'En Verona, dos jóvenes enamorados, de dos familias enemigas, son víctimas de una situación de odio y violencia que ni desean ni pueden remediar. En una de esas tardes de verano en que el calor \"inflama la sangre\", Romeo, recién casado en secreto con ', 'Romance', 'descarga.jpg', '2021-08-24', 'Romeo y Julieta.pdf', 2, 0, 'Aprobado', '', 'No'),
(88, 'Hola', 'asdas', 'Ciencia Ficción', '9781543007572.jpg', '2021-09-09', 'Cuervos.pdf', 0, 0, 'Aprobado', '', 'No'),
(90, 'Esta es la segunda prueba de que funciona', 'JSJSJJSJSJSJSJS', 'Ciencia Ficción', 'imagen.png', '2021-09-11', 'Grupo 2 C - Empresaurios.pdf', 0, 0, 'Aprobado', 'josu', 'No'),
(91, 'Hola', 'hhh', 'Acción', 'imagen.png', '2021-09-11', '2 C - Actividad de Aula - Poemas.pdf', 0, 0, 'Aprobado', '20200312', 'No'),
(92, 'hh', 'hh', 'Fantasía', 'Captura.PNG', '2021-09-11', 'EXAMEN PERIODO 1 LENGUAJE.pdf', 0, 0, 'Aprobado', '20200312', 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
