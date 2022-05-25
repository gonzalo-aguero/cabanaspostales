-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2022 at 10:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabanaspostales`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
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
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`id`, `start`, `end`, `reserva`, `nombre`, `correo`, `telefono`, `comentarios`, `cantAdultos`, `cantNiños`) VALUES
(5, '2022-05-11', '2022-05-12', 'Cabaña', 'AnyUser Lastname', 'anyuser@localhost', '123123123', '-', 2, 2),
(6, '2022-05-27', '2022-05-29', 'Cabaña', 'AnyUser Lastname', 'anyuser@localhost', '123123123', '-', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservas_cabana`
--

CREATE TABLE `reservas_cabana` (
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservas_cabana`
--

INSERT INTO `reservas_cabana` (`fecha`) VALUES
('2022-05-11'),
('2022-05-12'),
('2022-05-27'),
('2022-05-28'),
('2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `reservas_quinta`
--

CREATE TABLE `reservas_quinta` (
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUs` int(11) NOT NULL,
  `nameUs` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `passUs` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUs`, `nameUs`, `passUs`) VALUES
(1, 'Mariana', 'c1670254e9ecc829dbeb35af3bd00b0d'),
(2, 'GMA', '767f4f24dc8a8467db8a0754da4f40da'),
(3, 'MarianaMariana', '66f35ef0488bf34e65eb8a39b56d4896'),
(4, 'Gonzalo', '4c882dcb24bcb1bc225391a602feca7c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas_cabana`
--
ALTER TABLE `reservas_cabana`
  ADD PRIMARY KEY (`fecha`);

--
-- Indexes for table `reservas_quinta`
--
ALTER TABLE `reservas_quinta`
  ADD PRIMARY KEY (`fecha`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
