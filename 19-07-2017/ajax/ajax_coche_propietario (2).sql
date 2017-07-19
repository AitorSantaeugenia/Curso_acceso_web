-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2017 a las 14:07:45
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajax_coche_propietario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coche`
--

CREATE TABLE `coche` (
  `nombre` varchar(40) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coche`
--

INSERT INTO `coche` (`nombre`, `id`) VALUES
('Jaguar XE', 3),
('Maserati Cabrio 17', 5),
('Lamborghini Aventador', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(5) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `edad`) VALUES
(1, 'setwe', 4),
(2, 'setwe', 4),
(3, 'setwe', 4),
(4, 'setwe', 4),
(5, 'setwe', 4),
(6, 'setwe', 4),
(7, 'setwe', 4),
(8, 'setwe', 4),
(9, 'setwe', 4),
(10, 'setwe', 4),
(11, 'setwe', 4),
(12, 'setwe', 4),
(13, 'setwe', 4),
(14, 'setwe', 4),
(15, 'setwe', 4),
(16, 'setwe', 4),
(17, 'setwe', 4),
(18, 'setwe', 4),
(19, 'setwe', 4),
(20, 'setwe', 4),
(21, 'setwe', 4),
(22, 'setwe', 4),
(23, 'setwe', 4),
(24, 'setwe', 4),
(25, 'asdfas', 345),
(26, 'asdfas', 345),
(27, 'asdfas', 345),
(28, 'asdfas', 345),
(29, 'asdfas', 345),
(30, 'asdfas', 345),
(31, 'asdfas', 345),
(32, 'asdfas', 345),
(33, 'asdfas', 345),
(34, 'asdfas', 345),
(35, 'asdfas', 345),
(36, 'asdfas', 345),
(37, 'asdf', 44),
(38, 'asdf', 44),
(39, 'asdf', 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_coches`
--

CREATE TABLE `personas_coches` (
  `id` int(5) NOT NULL,
  `id_persona` int(5) NOT NULL,
  `id_coche` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas_coches`
--

INSERT INTO `personas_coches` (`id`, `id_persona`, `id_coche`) VALUES
(1, 36, 3),
(2, 36, 0),
(3, 36, 0),
(4, 37, 3),
(5, 38, 3),
(6, 39, 3),
(7, 39, 5),
(8, 39, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coche`
--
ALTER TABLE `coche`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `personas_coches`
--
ALTER TABLE `personas_coches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coche`
--
ALTER TABLE `coche`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `personas_coches`
--
ALTER TABLE `personas_coches`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
