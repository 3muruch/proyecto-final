-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3309
-- Tiempo de generación: 14-10-2024 a las 19:49:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `email`, `telefono`, `contraseña`) VALUES
(36, 'friguel', 'friguel@gmail.com', ' 01169108906 ', ' friguel'),
(39, 'maxi', 'maxi@gmail.com', '21234312', '$2y$10$xqtCMWp9DhYe/2b5ArC8iOQm8OOVGovyZ2G9ogC2a6m'),
(41, 'friguel', 'friguel@gmail.com', '1169108906', '$2y$10$W/p.XwnKSEZ7AjDSFNRgvew7C1oeZEZ8aenF1IMyksY'),
(43, 'm7', 'm7ruch@gmail.com', '01169108901', '$2y$10$MG2yq2H96j/eiA3NUgBXlehsv5ZtqcBzRzyi0oLS1DK'),
(51, 'm7', 'miltonmuruchi_97@hotmail.com', '124324324', '$2y$10$0QP6TUyvVIxRkzXLDCBLtedm29i26zC80BFcLsipHJq'),
(55, 'friguel', 'm7ruch@gmail.com', '01169108901', '$2y$10$OZ.9LFeZjFpO9FfdsqmROumrn84JT2rdoMUh4Ff7n9Q'),


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
