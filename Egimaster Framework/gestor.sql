-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-04-2014 a las 17:32:09
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestor`
--
CREATE DATABASE IF NOT EXISTS `gestor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestor`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso_log`
--

CREATE TABLE IF NOT EXISTS `acceso_log` (
  `idaccesos` int(100) NOT NULL AUTO_INCREMENT,
  `fecha_log` datetime(6) DEFAULT NULL,
  `idusuario` int(10) DEFAULT NULL,
  PRIMARY KEY (`idaccesos`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `acceso_log`
--

INSERT INTO `acceso_log` (`idaccesos`, `fecha_log`, `idusuario`) VALUES
(1, '2014-03-16 00:38:48.000000', 1),
(2, '2014-03-16 00:40:42.000000', 1),
(3, '2014-03-16 00:54:39.000000', 1),
(4, '2014-03-16 01:25:51.000000', 1),
(5, '2014-03-16 02:32:55.000000', 1),
(6, '2014-03-16 02:35:06.000000', 1),
(7, '2014-04-02 18:26:29.000000', 2),
(8, '2014-04-02 18:26:49.000000', 1),
(9, '2014-04-02 18:28:09.000000', 2),
(10, '2014-04-02 18:31:22.000000', 2),
(11, '2014-04-02 18:31:43.000000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idusuario` int(1) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `imagen` (`imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idusuario`, `usuario`, `imagen`, `clave`) VALUES
(1, 'Jose', 'http://localhost/framework/Vista/img/joseminiatura.jpg', '123456'),
(2, 'Gotzon', 'http://localhost/framework/Vista/img/j.jpg', '123456');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso_log`
--
ALTER TABLE `acceso_log`
  ADD CONSTRAINT `idusuario` FOREIGN KEY (`idusuario`) REFERENCES `admin` (`idusuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
