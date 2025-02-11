-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2025 a las 12:33:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaiapweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `nombreArticulo` varchar(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `unidades` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `nombreArticulo`, `descripcion`, `precio`, `unidades`) VALUES
(5, 'ordenador', 'ordenador 01', 50, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `edad` int(3) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `nombre`, `edad`, `contraseña`, `email`) VALUES
(2, 'Pepe', 0, 'pepe', 'pepe@gmail.com'),
(29, 'pedro ', 34, 'picapiedra', 'loco@gmail.com'),
(30, 'pepe2', 0, 'pepe2', ''),
(31, 'pepe456', 0, 'hola', ''),
(32, 'pepe3', 23, 'pepe3', 'cortinflowers@gmail.com'),
(33, 'Sergiohg', 33, 'Sistemas1', 'osiosi@gmail.com'),
(34, 'Yolanda', 20, 'Sistemas1', 'yolandais@gmail.com'),
(35, 'Sirenita', 50, 'Sistemas1', 'correo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `IdUsuario` (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
