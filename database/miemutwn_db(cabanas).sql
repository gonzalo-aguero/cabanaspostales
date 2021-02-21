-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2021 a las 05:46:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hugo_aguilar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `start` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reserva` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comentarios` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cantAdultos` int(11) NOT NULL,
  `cantNiños` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `start`, `end`, `reserva`, `nombre`, `correo`, `telefono`, `comentarios`, `cantAdultos`, `cantNiños`) VALUES
(1, '2021-01-16', '2021-01-17', 'Cabaña', 'Cielo  Marcolini', 'mariacielomarcolini@gmail.com', '3564618152', 'buen dia queria saber precios y disponibilidad, los niños tienen 5 años y 3 meses. gracias', 2, 2),
(2, '2021-02-14', '2021-02-17', 'Cabaña', 'Marcos Contarde', 'elianaartaz@gmail.com', '3425581568', 'Hola me gustaria un presupuesto de esos dias y saber de que forma se realiza el pago. Desde ya gracias.', 4, 0),
(3, '2021-02-04', '2021-02-06', 'Cabaña', 'Mara  Ceriani ', 'maraceriani@hotmail.com', '3424236986', 'Hola cabaña o quinta para 6 o 7 personas tendrán? Con pileta ', 3, 3),
(4, '2021-02-25', '2021-02-28', 'Cabaña', 'Manuel Domínguez Apellido', 'correo@yhdi.com', '+13671828981', '¿Hay servicio de desayuno?', 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_cabana`
--

CREATE TABLE `reservas_cabana` (
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `reservas_cabana`
--

INSERT INTO `reservas_cabana` (`fecha`) VALUES
('2021-01-16'),
('2021-01-17'),
('2021-02-04'),
('2021-02-05'),
('2021-02-06'),
('2021-02-14'),
('2021-02-15'),
('2021-02-16'),
('2021-02-17'),
('2021-02-25'),
('2021-02-26'),
('2021-02-27'),
('2021-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_quinta`
--

CREATE TABLE `reservas_quinta` (
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUs` int(11) NOT NULL,
  `nameUs` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `passUs` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUs`, `nameUs`, `passUs`) VALUES
(1, 'Mariana', 'c1670254e9ecc829dbeb35af3bd00b0d'),
(2, 'GMA', '767f4f24dc8a8467db8a0754da4f40da'),
(3, 'MarianaMariana', '66f35ef0488bf34e65eb8a39b56d4896'),
(4, 'Gonzalo', '4c882dcb24bcb1bc225391a602feca7c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas_cabana`
--
ALTER TABLE `reservas_cabana`
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `reservas_quinta`
--
ALTER TABLE `reservas_quinta`
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUs`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
