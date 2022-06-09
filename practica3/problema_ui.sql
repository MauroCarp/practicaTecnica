-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-06-2022 a las 15:07:10
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `problema_ui`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(150) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `sexo` text DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidos`, `fechaNacimiento`, `sexo`, `estado`) VALUES
(1, 'Usuario0', 'Apellido0', '1972-02-13', 'F', 0),
(2, 'Usuario1', 'Apellido1', '1990-07-07', 'F', 0),
(3, 'Usuario2', 'Apellido2', '1976-05-02', 'M', 0),
(4, 'Usuario3', 'Apellido3', '1972-06-12', 'M', 0),
(5, 'Usuario4', 'Apellido4', '1970-06-27', 'F', 0),
(6, 'Usuario5', 'Apellido5', '1995-09-20', 'M', 0),
(7, 'Usuario6', 'Apellido6', '1974-04-30', 'M', 0),
(8, 'Usuario7', 'Apellido7', '1997-03-02', 'M', 0),
(9, 'Usuario8', 'Apellido8', '1978-06-28', 'F', 0),
(10, 'Usuario9', 'Apellido9', '1998-05-27', 'F', 0),
(11, 'Usuario10', 'Apellido10', '1992-10-21', 'F', 0),
(12, 'Usuario11', 'Apellido11', '1975-08-05', 'M', 0),
(13, 'Usuario12', 'Apellido12', '1990-06-02', 'F', 0),
(14, 'Usuario13', 'Apellido13', '1984-10-25', 'M', 0),
(15, 'Usuario14', 'Apellido14', '1979-04-26', 'F', 1),
(16, 'Usuario15', 'Apellido15', '1996-02-24', 'M', 0),
(17, 'Usuario16', 'Apellido16', '1996-02-01', 'F', 1),
(18, 'Usuario17', 'Apellido17', '1979-12-04', 'M', 1),
(19, 'Usuario18', 'Apellido18', '1993-05-11', 'M', 1),
(20, 'Usuario19', 'Apellido19', '1977-10-30', 'F', 0),
(21, 'Usuario20', 'Apellido20', '1976-12-18', 'M', 0),
(22, 'Usuario21', 'Apellido21', '1981-04-08', 'F', 0),
(23, 'Usuario22', 'Apellido22', '1970-12-05', 'M', 0),
(24, 'Usuario23', 'Apellido23', '1972-10-18', 'F', 0),
(25, 'Usuario24', 'Apellido24', '1985-04-03', 'M', 1),
(26, 'Usuario25', 'Apellido25', '1973-04-28', 'F', 1),
(27, 'Usuario26', 'Apellido26', '1973-03-09', 'F', 0),
(28, 'Usuario27', 'Apellido27', '1994-01-04', 'F', 1),
(29, 'Usuario28', 'Apellido28', '1975-09-25', 'F', 0),
(30, 'Usuario29', 'Apellido29', '1975-04-22', 'M', 0),
(31, 'Usuario30', 'Apellido30', '1983-02-16', 'M', 1),
(32, 'Usuario31', 'Apellido31', '1984-03-09', 'F', 1),
(33, 'Usuario32', 'Apellido32', '1992-02-27', 'M', 0),
(34, 'Usuario33', 'Apellido33', '1983-08-23', 'F', 1),
(35, 'Usuario34', 'Apellido34', '1993-01-26', 'M', 1),
(36, 'Usuario35', 'Apellido35', '1973-05-16', 'F', 0),
(37, 'Usuario36', 'Apellido36', '1974-09-02', 'F', 1),
(38, 'Usuario37', 'Apellido37', '1978-09-25', 'F', 1),
(39, 'Usuario38', 'Apellido38', '1986-02-03', 'M', 1),
(40, 'Usuario39', 'Apellido39', '1995-09-24', 'F', 1),
(41, 'Usuario40', 'Apellido40', '1981-11-04', 'F', 1),
(42, 'Usuario41', 'Apellido41', '1995-07-22', 'M', 1),
(43, 'Usuario42', 'Apellido42', '1993-09-18', 'F', 0),
(44, 'Usuario43', 'Apellido43', '1989-11-12', 'M', 1),
(45, 'Usuario44', 'Apellido44', '1980-10-22', 'F', 0),
(46, 'Usuario45', 'Apellido45', '1980-12-27', 'F', 1),
(47, 'Usuario46', 'Apellido46', '1996-03-01', 'M', 1),
(48, 'Usuario47', 'Apellido47', '1982-08-29', 'F', 1),
(49, 'Usuario48', 'Apellido48', '1990-11-08', 'M', 0),
(50, 'Usuario49', 'Apellido49', '1972-12-14', 'M', 1),
(51, 'Usuario50', 'Apellido50', '1990-10-29', 'M', 1),
(52, 'Usuario51', 'Apellido51', '1993-03-27', 'M', 0),
(53, 'Usuario52', 'Apellido52', '1971-11-26', 'F', 1),
(54, 'Usuario53', 'Apellido53', '1983-11-17', 'M', 1),
(55, 'Usuario54', 'Apellido54', '1993-07-05', 'F', 1),
(56, 'Usuario55', 'Apellido55', '1981-04-08', 'F', 0),
(57, 'Usuario56', 'Apellido56', '1996-11-24', 'F', 0),
(58, 'Usuario57', 'Apellido57', '1997-05-15', 'M', 0),
(59, 'Usuario58', 'Apellido58', '1991-09-12', 'F', 1),
(60, 'Usuario59', 'Apellido59', '1994-08-08', 'M', 1),
(61, 'Usuario60', 'Apellido60', '1990-07-16', 'M', 1),
(62, 'Usuario61', 'Apellido61', '1977-01-18', 'F', 1),
(63, 'Usuario62', 'Apellido62', '1993-04-06', 'M', 0),
(64, 'Usuario63', 'Apellido63', '1994-10-28', 'M', 1),
(65, 'Usuario64', 'Apellido64', '1978-02-16', 'F', 0),
(66, 'Usuario65', 'Apellido65', '1971-01-10', 'M', 1),
(67, 'Usuario66', 'Apellido66', '1970-02-27', 'F', 0),
(68, 'Usuario67', 'Apellido67', '1979-01-29', 'F', 1),
(69, 'Usuario68', 'Apellido68', '1993-09-29', 'M', 0),
(70, 'Usuario69', 'Apellido69', '1980-08-07', 'M', 1),
(71, 'Usuario70', 'Apellido70', '1986-09-21', 'F', 0),
(72, 'Usuario71', 'Apellido71', '1995-02-27', 'M', 1),
(73, 'Usuario72', 'Apellido72', '1974-08-15', 'M', 1),
(74, 'Usuario73', 'Apellido73', '1970-11-17', 'M', 1),
(75, 'Usuario74', 'Apellido74', '1987-05-06', 'M', 1),
(76, 'Usuario75', 'Apellido75', '1995-04-29', 'F', 0),
(77, 'Usuario76', 'Apellido76', '1985-09-17', 'F', 1),
(78, 'Usuario77', 'Apellido77', '1981-10-18', 'M', 1),
(79, 'Usuario78', 'Apellido78', '1983-05-23', 'M', 0),
(80, 'Usuario79', 'Apellido79', '1998-06-18', 'M', 0),
(81, 'Usuario80', 'Apellido80', '1985-10-11', 'F', 1),
(82, 'Usuario81', 'Apellido81', '1975-12-13', 'F', 1),
(83, 'Usuario82', 'Apellido82', '1991-10-26', 'M', 1),
(84, 'Usuario83', 'Apellido83', '1976-08-24', 'F', 1),
(85, 'Usuario84', 'Apellido84', '1996-05-21', 'F', 1),
(86, 'Usuario85', 'Apellido85', '1997-10-15', 'F', 1),
(87, 'Usuario86', 'Apellido86', '1977-09-18', 'M', 0),
(88, 'Usuario87', 'Apellido87', '1976-08-04', 'F', 1),
(89, 'Usuario88', 'Apellido88', '1983-09-10', 'M', 1),
(90, 'Usuario89', 'Apellido89', '1981-09-10', 'M', 0),
(91, 'Usuario90', 'Apellido90', '1972-03-08', 'F', 0),
(92, 'Usuario91', 'Apellido91', '1980-05-05', 'F', 1),
(93, 'Usuario92', 'Apellido92', '1994-10-28', 'F', 0),
(94, 'Usuario93', 'Apellido93', '1973-03-22', 'M', 1),
(95, 'Usuario94', 'Apellido94', '1989-07-11', 'M', 1),
(96, 'Usuario95', 'Apellido95', '1970-12-05', 'M', 1),
(97, 'Usuario96', 'Apellido96', '1975-12-31', 'M', 1),
(98, 'Usuario97', 'Apellido97', '1997-08-08', 'M', 0),
(99, 'Usuario98', 'Apellido98', '1973-06-29', 'M', 0),
(100, 'Usuario99', 'Apellido99', '1989-01-20', 'M', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
