-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2021 a las 18:04:04
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_musical`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_password`
--

CREATE TABLE `tb_password` (
  `id` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `password` varchar(150) NOT NULL DEFAULT current_timestamp(),
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_password`
--

INSERT INTO `tb_password` (`id`, `id_registro`, `password`, `fecha`) VALUES
(1, 1, 'Luis1286608', '0000-00-00'),
(2, 2, 'Luis1286608', '0000-00-00'),
(3, 3, 'netbus123', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro`
--

CREATE TABLE `tb_registro` (
  `id` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `id_rol` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_registro`
--

INSERT INTO `tb_registro` (`id`, `edad`, `nombre`, `direccion`, `correo`, `fecha`, `id_rol`) VALUES
(1, 34, 'luis Ricardo', ' Libertadores 2329', 'luiscardonafime@gmail.com', '2021-03-11', 1),
(2, 34, 'luis Ricardo', ' Libertadores 2329', 'richy_milenium@gmail.com', '2021-03-11', NULL),
(3, 21, 'luis Ricardo', 'Orquidea 321', 'genarox@gmail.com', '2021-03-11', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id`, `rol`, `status`) VALUES
(1, 'Admin', 1),
(2, 'Musico', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_password`
--
ALTER TABLE `tb_password`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_password`
--
ALTER TABLE `tb_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
