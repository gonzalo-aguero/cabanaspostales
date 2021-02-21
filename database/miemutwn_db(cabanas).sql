-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2021 at 02:58 AM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miemutwn_db`
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
(1, '2021-01-16', '2021-01-17', 'Cabaña', 'Cielo  Marcolini', 'mariacielomarcolini@gmail.com', '3564618152', 'buen dia queria saber precios y disponibilidad, los niños tienen 5 años y 3 meses. gracias', 2, 2),
(2, '2021-02-14', '2021-02-17', 'Cabaña', 'Marcos Contarde', 'elianaartaz@gmail.com', '3425581568', 'Hola me gustaria un presupuesto de esos dias y saber de que forma se realiza el pago. Desde ya gracias.', 4, 0),
(3, '2021-02-04', '2021-02-06', 'Cabaña', 'Mara  Ceriani ', 'maraceriani@hotmail.com', '3424236986', 'Hola cabaña o quinta para 6 o 7 personas tendrán? Con pileta ', 3, 3);

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
('2021-01-16'),
('2021-01-17'),
('2021-02-04'),
('2021-02-05'),
('2021-02-06'),
('2021-02-14'),
('2021-02-15'),
('2021-02-16'),
('2021-02-17');

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
(3, 'MarianaMariana', '66f35ef0488bf34e65eb8a39b56d4896');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
