-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2020 a las 05:49:25
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gigis_db`
--
CREATE DATABASE IF NOT EXISTS `gigis_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `gigis_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `IdPersonal` int(11) NOT NULL,
  `NombrePersonal` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `TelefonoPersonal` varchar(11) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CorreoPersonal` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `FechaInicioLaboral` date NOT NULL,
  `FechaFinLaboral` date DEFAULT NULL,
  `ContratoPersonal` blob DEFAULT NULL,
  `INEPersonal` blob DEFAULT NULL,
  `DomicilioPersonal` blob DEFAULT NULL,
  `RespaldoPersonal` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`IdPersonal`, `NombrePersonal`, `TelefonoPersonal`, `CorreoPersonal`, `FechaInicioLaboral`, `FechaFinLaboral`, `ContratoPersonal`, `INEPersonal`, `DomicilioPersonal`, `RespaldoPersonal`) VALUES
(1, 'Andres Alvarez Guzman', '4422345669', 'Andresal@hotmail.com', '2022-11-18', '2030-11-18', NULL, '', '', ''),
(2, 'Juan Gomez', '1923546789', 'Juan@hotmail.com', '2007-04-20', '0000-00-00', NULL, '', '', ''),
(3, 'Andres Alvarez Guzman', '9678524', 'Andres@hotmail.com', '0000-00-00', '0000-00-00', NULL, '', '', ''),
(4, 'Pola', '9678593', 'pol@hotmail.com', '2001-11-18', '2030-11-18', NULL, NULL, NULL, NULL),
(5, 'Polo', '9678523', 'seba@hotmail.com', '2011-10-20', '2012-10-20', NULL, NULL, NULL, NULL),
(10, 'CMLL', '9678103', 'poke@hotmail.com', '2011-11-20', '2012-11-21', NULL, NULL, NULL, NULL),
(12, 'www', '123', 'asdsds', '0000-00-00', NULL, NULL, NULL, NULL, NULL),
(13, 'Juan', '123', 'juan@hotmail.com', '0000-00-00', NULL, NULL, NULL, NULL, NULL),
(17, 'edmor', '333', 'adddddddddddddddddddw', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
(18, 'edmor', '333', 'adddddddddddddddddddw', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
(20, 'ed', '4423567890', 'd@hotmail.com', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
(29, 'Rodrigo ', '4422356667', 'Rodrigo@hotmail.com', '2018-11-18', '2017-11-18', NULL, NULL, NULL, NULL),
(32, '', '', '', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
(33, '', '', '', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`IdPersonal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `IdPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
