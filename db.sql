-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-05-2024 a las 00:52:25
-- Versión del servidor: 10.11.7-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u515788307_li`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aut`
--

CREATE TABLE `aut` (
  `id` int(11) NOT NULL,
  `idc` varchar(20) NOT NULL,
  `nt` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `mo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aut`
--

INSERT INTO `aut` (`id`, `idc`, `nt`, `rol`, `mo`) VALUES
(126, '11', 'Aprobar', 'cb', ''),
(128, '11', 'Aprobar', 'a', ''),
(129, '11', 'Aprobar', 'a', ''),
(135, '11', 'Aprobar', 'cb', ''),
(136, '11', 'Aprobar', 'cb', ''),
(137, '1', 'Rechazar', 'cb', 'kuyh'),
(138, '11', 'Rechazar', 'c', 'Lepra'),
(144, '1', 'Aprobar', 'cc', ''),
(145, '1', 'Rechazar', 'cc', 'khj'),
(146, '23', 'Rechazar', 'cc', ''),
(147, '23', 'Rechazar', 'cc', ''),
(148, '25', 'Rechazar', 'cc', ''),
(149, '25', 'Rechazar', 'cc', ''),
(150, '19', 'Aprobar', 'cc', ''),
(151, '19', 'Aprobar', 'cb', ''),
(152, '23', 'Rechazar', 'cb', ''),
(153, '25', 'Rechazar', 'cb', ''),
(154, '19', 'Aprobar', 'cb', ''),
(155, '23', 'Rechazar', 'c', ''),
(156, '25', 'Rechazar', 'c', ''),
(157, '19', 'Aprobar', 'c', ''),
(158, '23', 'Rechazar', 's', ''),
(159, '25', 'Rechazar', 's', 'nmjkjnkjn'),
(160, '19', 'Aprobar', 's', ''),
(161, '19', 'Aprobar', 's', ''),
(162, '19', 'Aprobar', 'j', ''),
(163, '23', 'Rechazar', 'j', 'mn'),
(164, '25', 'Rechazar', 'j', 'mnmm n'),
(165, '', 'Aprobar', 'cc', ''),
(166, '40', 'Rechazar', 'cb', ''),
(167, '40', 'Aprobar', 'cc', 'er'),
(168, '40', 'Aprobar', 'j', ''),
(169, '40', 'Aprobar', 's', ''),
(170, '40', 'Aprobar', 'c', ''),
(171, '40', 'Aprobar', 'cc', ''),
(172, '19', 'Aprobar', 'cc', ''),
(173, '40', 'Aprobar', 'cc', ''),
(174, '19', 'Aprobar', 'cc', ''),
(175, '49', 'Aprobar', 'cc', ''),
(176, '49', 'Aprobar', 'cb', ''),
(177, '49', 'Aprobar', 'c', ''),
(178, '49', 'Aprobar', 's', ''),
(179, '49', 'Aprobar', 'j', ''),
(180, '49', 'Rechazar', 'cb', 'Ese alumno es Muy Negro'),
(181, '6', 'Aprobar', 'cc', ''),
(182, '11', 'Aprobar', 'cc', ''),
(183, '49', 'Aprobar', 'cb', ''),
(184, '49', 'Aprobar', 'cb', ''),
(185, '6', 'Rechazar', 'cb', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bajas`
--

CREATE TABLE `bajas` (
  `id` int(11) NOT NULL,
  `idc` varchar(60) NOT NULL,
  `rol` varchar(60) NOT NULL,
  `mo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bajas`
--

INSERT INTO `bajas` (`id`, `idc`, `rol`, `mo`) VALUES
(1, '', 'ad', 'vapafuera vapafeura '),
(2, '', 'ad', 'kjdkjhdf'),
(3, '', 'ad', 'dfdf'),
(4, '1', 'ad', 'dfdfdf'),
(5, '1', 'ad', 'dfd'),
(6, '6', 'ad', 'fffff'),
(7, '7', 'ad', 'dddd'),
(8, '7', 'ad', 'dddd'),
(9, '8', 'ad', 'dddddd'),
(10, '24', 'ad', 'uhuhu'),
(11, '25', 'ad', 'yhuyh'),
(12, '23', 'ad', 'hiuhiu'),
(13, '27', 'ad', 'fd'),
(14, '29', 'ad', ''),
(15, '28', 'ad', ''),
(16, '30', 'ad', ''),
(17, '26', 'ad', ''),
(18, '11', 'ad', ''),
(19, '11', 'ad', ''),
(20, '21', 'ad', ''),
(21, '20', 'ad', ''),
(22, '18', 'ad', ''),
(23, '18', 'ad', ''),
(24, '19', 'ad', 'por perra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `f` varchar(500) NOT NULL,
  `idp` varchar(100) NOT NULL,
  `ot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `dia` varchar(30) NOT NULL,
  `mes` varchar(30) NOT NULL,
  `an` varchar(34) NOT NULL,
  `ho` varchar(34) NOT NULL,
  `di` varchar(34) NOT NULL,
  `me` varchar(34) NOT NULL,
  `ano` varchar(34) NOT NULL,
  `hor` varchar(34) NOT NULL,
  `n` varchar(100) NOT NULL,
  `i` varchar(30) NOT NULL,
  `d` varchar(100) NOT NULL,
  `m` longtext NOT NULL,
  `t` varchar(60) NOT NULL,
  `nt` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`id`, `dia`, `mes`, `an`, `ho`, `di`, `me`, `ano`, `hor`, `n`, `i`, `d`, `m`, `t`, `nt`) VALUES
(9, '03', '05', '2024', '5:00pm', '12', '05', '2024', '11:00am', 'rojelio flores', '234234', 'bogotá', 'Cumpleaños', '3203984888', '6'),
(12, '05', '05', '2024', '01:20pm', '15', '05', '2024', '10:00am', 'fernando colorado', '234234', 'bogotá', 'Cumpleaños', '3203984888', '1'),
(20, '', '', '', '', '', '', '', '', 'Sanches Mendoza', '1072098765', 'Melgar', 'Permiso', '3115912050', '11'),
(21, '', '', '', '', '', '', '', '', 'Sanches Mendoza', '1072098765', 'Melgar', 'Permiso', '3115912050', '11'),
(25, '', '', '', '', '', '', '', '', 'dffd', 'fd', 'df', 'df', 'fd', '25'),
(26, '', '', '', '', '', '', '', '', 'ddfdf', 'fd', 'df', 'fd', 'fd', '23'),
(27, '22', '09', '2024', '12:00', '24', '09', '2024', '18:00', 'Hernan Guanaran ', '1072098765', 'Melgar', 'Permiso', '3115912050', '19'),
(28, '', '', '', '', '', '', '', '', 'Cristian Camilo Palma Camargo', '1026558599', 'cajamarca', 'permiso ', '3008564836', ''),
(29, '05', '05', '2024', '01:20pm', '15', '05', '2024', '10:00am', 'emiliano camacho', '34342', 'bogota', 'nacimiento de mi hija', '423522', '40'),
(30, '', '', '', '', '', '', '', '', 'Garcia Perea', '1072098765', 'Melgar', 'Permiso', '3115912050', '49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `n` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cc` varchar(40) NOT NULL,
  `ide` varchar(50) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `s` varchar(20) NOT NULL,
  `f` varchar(20) NOT NULL,
  `ni` varchar(50) NOT NULL,
  `de` varchar(50) NOT NULL,
  `fo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `rol`, `n`, `email`, `cc`, `ide`, `clave`, `s`, `f`, `ni`, `de`, `fo`) VALUES
(31, 'ad', 'Hernan Guanaran ', 'hernanguanarancuastumal@emsub.org', '1072098954', '111-456', 'keiner1020', 'Masculino', '22/09/2005', 'Nivel 3', 'Melgar', ''),
(32, 'cc', 'Sanches Mendoza', 'sanches1234@emsub.org', '1072098765', '111-456', 'keiner1020', 'Masculino', '22/09/2004', 'Nivel 3', 'Melgar', ''),
(33, 'ad', 'yonatan', 'admin@em.edu.co', '43252', '423423', 'htE0.TvBvNIg', 'm', '23/04/1990', 'we', 'bogota', ''),
(34, 'cb', 'Callejas Marquez Nelton', 'callejasmarqueznelton@emsub.org', '1072098765', '111-098', 'keiner1020', 'Masculino', '22/09/2004', 'Nivel 3', 'Melgar', ''),
(35, 'ad', 'yonatan', 'admin@em.com.co', '43252', '423423', 'htE0.TvBvNIg', 'm', '23/04/1990', 'we', 'bogota', ''),
(36, 'c', 'leon Rodriguez', 'leonrodriguez09@emsub.org', '1072098765', '111-098', 'keiner1020', 'Masculino', '22/09/2004', 'Nivel 3', 'Melgar', ''),
(37, 's', 'Angulo Oliveros', 'sv.angulo@emsub.org', '1072098765', '111-098', 'keiner1020', 'Masculino', '22/09/2004', 'Nivel 3', 'Melgar', ''),
(38, 'j', 'rincón Mendivelson', 'sv.rincon@emsub.org', '1072098765', '111-098', 'keiner1020', 'Masculino', '22/09/2004', 'Nivel 3', 'Melgar', ''),
(39, 'cc', 'Cristian Camilo Palma Camargo', 'kadmel.g12@gmail.com', '1026558599', '223433', '12345', 'masculino', '09/08/1996', 'especialista', 'cajamarca', 'img/WhatsApp Image 2023-03-15 at 9.58.03 AM.jpeg'),
(40, 'a', 'emilio camacho', 'emi@gmail.com', '12345', '314235', '1234', 'm', '23/04/1990', 'we', 'bogota', 'img/logoe.jpg'),
(41, 'cb', 'camilo montoya', 'cami@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(42, 'cc', 'fernando anzola', 'fer@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(43, 'j', 'andres ', 'and@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(44, 's', 'ernesto corrales', 'ernesto@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(45, 'c', 'elbrayan', 'brayan@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(46, 'cc', 'calamardo', 'calamar@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(47, 'a', 'casio', 'casio@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(48, 'a', 'erik', 'erik@gmail.com', '5235245', '452452', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(49, 'a', 'Garcia Perea', 'garciapereajamer@emsub.org', '1072098765', '111-098', 'keiner1020', 'Masculino', '22/09/2004', 'Nivel 3', 'Melgar', 'img/gggggg.jpeg'),
(50, 'cc', 'Ernesto corrales', 'ernesto@gmail.com', '32352', '2234', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(51, 'cc', 'Carlos Andrade', 'carlos@gmail.com', '32352', '2234', '1234', 'm', '23/04/1990', 'we', 'bogota', ''),
(52, 'ad', 'Sambrano Mora', 'mora@gmail.com', '32352', '2234', '1234', 'm', '23/04/1990', 'we', 'bogota', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aut`
--
ALTER TABLE `aut`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bajas`
--
ALTER TABLE `bajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aut`
--
ALTER TABLE `aut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT de la tabla `bajas`
--
ALTER TABLE `bajas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
