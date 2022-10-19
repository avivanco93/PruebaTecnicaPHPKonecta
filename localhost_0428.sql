-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:0428
-- Tiempo de generación: 19-10-2022 a las 20:26:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stock`
--
CREATE DATABASE IF NOT EXISTS `stock` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `stock`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--
-- Creación: 19-10-2022 a las 13:12:11
-- Última actualización: 19-10-2022 a las 16:17:23
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha_creacion`) VALUES
(1, 'CAFE', 'CAFE', 12, 12, 'CAFE', 12, '2022-10-04'),
(2, 'tinto', 'tinto', 3000, 2000, '1', 24, '2022-10-06'),
(3, 'LECHE', 'LECHE', 18, 11, 'YAY', 16, '2022-10-05'),
(5, 'caja', 'caja', 200, 27200, 'bajo', 200, '2022-09-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--
-- Creación: 19-10-2022 a las 16:10:09
-- Última actualización: 19-10-2022 a las 17:52:58
--

CREATE TABLE `ventas` (
  `id_producto` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_producto`, `cantidad_producto`) VALUES
(12, 0),
(12, 0),
(13, 1322),
(5, 10),
(4, 14),
(5, 5),
(3, 13),
(43, 1999);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
