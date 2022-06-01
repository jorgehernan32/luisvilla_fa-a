-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-06-2022 a las 23:13:06
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricante`
--

DROP TABLE IF EXISTS `fabricante`;
CREATE TABLE IF NOT EXISTS `fabricante` (
  `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fabricante`
--

INSERT INTO `fabricante` (`codigo`, `nombre`) VALUES
(1, 'Asus'),
(2, 'Lenovo'),
(3, 'Hewlett-Packard'),
(4, 'Samsung'),
(5, 'Seagate'),
(6, 'Crucial'),
(7, 'Gigabyte'),
(8, 'Huawei'),
(9, 'Xiaomi'),
(10, 'Alcatel'),
(11, 'Alcatel'),
(12, 'sansun'),
(20, 'rol'),
(17, 'jorge');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `codigo_fabricante` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_fabricante` (`codigo_fabricante`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `precio`, `codigo_fabricante`) VALUES
(1, 'Disco duro SATA3 1TB', 86.99, 5),
(2, 'Memoria RAM DDR4 8GB', 120, 6),
(3, 'Disco SSD 1 TB', 150.99, 4),
(4, 'GeForce GTX 1050Ti', 185, 7),
(5, 'GeForce GTX 1080 Xtreme', 755, 6),
(6, 'Monitor 24 LED Full HD', 202, 1),
(7, 'Monitor 27 LED Full HD', 245.99, 1),
(8, 'Portátil Yoga 520', 559, 2),
(9, 'Portátil Ideapd 320', 444, 2),
(10, 'Impresora HP Deskjet 3720', 59.99, 3),
(11, 'Impresora HP Laserjet Pro M26nw', 180, 3),
(14, 'sisss', 1234, 21),
(13, 'disco duro', 530, 2),
(15, 'ger', 125, 4),
(16, 'tarjeta', 530, 213),
(29, 'disco duro', 530, 16),
(19, 'jo', 530, 15),
(35, 'disco duro', 1234, 4),
(22, 'aeiwl', 1234, 8),
(33, 'tarjetadecompu', 1234, 2),
(24, 'disco duro', 530, 3),
(25, 'disco duro', 530, 15),
(26, 'disco duro', 530, 1),
(27, 'ger', 125, 1),
(30, 'disco duro', 125, 6),
(36, 'llanta ', 578, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `nom` varchar(20) NOT NULL,
  `apellidopa` varchar(20) NOT NULL,
  `apellidoma` varchar(20) NOT NULL,
  `telefonoRegistro` bigint(10) NOT NULL,
  `correoRegistro` varchar(30) NOT NULL,
  `usuarioRegistro` varchar(20) NOT NULL,
  `passRegistro` varchar(20) NOT NULL,
  PRIMARY KEY (`usuarioRegistro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nom`, `apellidopa`, `apellidoma`, `telefonoRegistro`, `correoRegistro`, `usuarioRegistro`, `passRegistro`) VALUES
('Juan', 'RODRIGUEZ', 'PAZ', 561165432, 'x', 'jsdhwscd', '54322322'),
('joreh', 'RODRIGUEZ', '', 1234567890, 'jorge@ekfmeof.ef', '13434', '131234'),
('maria', '', '', 123345667, 'mrfer@gmail.com', 'wtghwehyw4124', '4514152'),
('joel', 'lopez', 'rodriguez', 1425243563, 'joelf4fmrk@gmail.com', 'joel234', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
