-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2021 a las 21:16:19
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

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
-- Estructura de tabla para la tabla `ingresar`
--

CREATE TABLE `ingresar` (
  `nombre` text COLLATE utf16_spanish_ci NOT NULL,
  `contraseña` varchar(20) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `ingresar`
--

INSERT INTO `ingresar` (`nombre`, `contraseña`) VALUES
('odette', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(25) NOT NULL,
  `nombre` text COLLATE utf16_spanish_ci NOT NULL,
  `unidad` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `foto` varchar(200) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `unidad`, `precio`, `foto`) VALUES
(1, 'Tarta de chocolate', '14', 25, 'C:\\ProyectoFinal-curso\\images\\cake1.png'),
(2, 'Tarta de zanahoria', '14', 23.5, 'C:\\ProyectoFinal-curso\\images\\carrot1.png'),
(3, 'Tarta red velvet', '15', 23, 'C:\\ProyectoFinal-curso\\images\\velvet.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `nombre` text COLLATE utf16_spanish_ci NOT NULL,
  `producto / cantidad` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`nombre`, `producto / cantidad`, `fecha`, `total`) VALUES
('odette', 'Tarta de chocolate x 1  ', '2021-03-09', 25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
