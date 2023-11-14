-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 11-08-2023 a las 21:18:52
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_clase`
--

CREATE TABLE `alumno_clase` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `calificacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno_clase`
--

INSERT INTO `alumno_clase` (`id`, `id_alumno`, `id_materia`, `id_periodo`, `id_maestro`, `calificacion`) VALUES
(1, 6, 5, 1, 5, 10),
(2, 6, 1, 1, 1, 9),
(3, 6, 7, 1, 6, 8),
(4, 6, 2, 1, 2, 7),
(5, 6, 4, 1, 4, 6),
(6, 6, 6, 1, 5, 5),
(9, 6, 3, 1, 3, 8),
(10, 31, 5, 1, 5, 9),
(11, 31, 1, 1, 1, 9),
(12, 31, 7, 1, 6, 10),
(13, 31, 2, 1, 2, 9),
(14, 31, 4, 1, 4, 10),
(15, 31, 6, 1, 5, 9),
(16, 31, 3, 1, 3, 10),
(17, 19, 5, 1, 5, 10),
(18, 19, 1, 1, 1, 9),
(19, 19, 7, 1, 6, 10),
(20, 19, 2, 1, 2, 10),
(21, 19, 4, 1, 4, 10),
(22, 19, 6, 1, 5, 9),
(23, 19, 3, 1, 3, 10),
(24, 7, 5, 1, 5, 9),
(25, 7, 1, 1, 1, 10),
(26, 7, 7, 1, 6, 10),
(27, 7, 2, 1, 2, 9),
(28, 7, 4, 1, 4, 8),
(29, 7, 6, 1, 5, 9),
(30, 7, 3, 1, 3, 10),
(31, 21, 5, 1, 5, 9),
(32, 21, 1, 1, 1, 9),
(33, 21, 7, 1, 6, 10),
(34, 21, 2, 1, 2, 7),
(35, 21, 4, 1, 4, 8),
(36, 21, 6, 1, 5, 9),
(37, 21, 3, 1, 3, 4),
(38, 22, 5, 1, 5, 8),
(39, 22, 1, 1, 1, 7),
(40, 22, 7, 1, 6, 8),
(41, 22, 2, 1, 2, 9),
(42, 22, 4, 1, 4, 10),
(43, 22, 6, 1, 5, 9),
(44, 22, 3, 1, 3, 7),
(45, 10, 5, 1, 5, 10),
(46, 10, 1, 1, 1, 9),
(47, 10, 7, 1, 6, 10),
(48, 10, 2, 1, 2, 7),
(49, 10, 4, 1, 4, 8),
(50, 10, 6, 1, 5, 9),
(51, 10, 3, 1, 3, 9),
(76, 52, 1, 1, 2, 5),
(77, 15, 1, 4, 10, 0),
(78, 15, 5, 4, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login1`
--

CREATE TABLE `login1` (
  `id` int(11) NOT NULL,
  `nombrea` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `fechana` date NOT NULL DEFAULT current_timestamp(),
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login1`
--

INSERT INTO `login1` (`id`, `nombrea`, `apellido1`, `apellido2`, `fechana`, `correo`, `contrasena`, `rol_id`) VALUES
(6, 'Efrain', 'Garcia', 'Vargas', '2002-03-18', 'a02003806@utmir.edu.mx', '02003806', 2),
(7, 'Valeria Sarahi', 'Salazar ', 'Alanis', '2021-10-20', 'a02003831@utmir.edu.mx', '02003831', 2),
(8, 'Bayron Ali', 'Barrientos', 'Olvera', '2021-11-02', 'a02003763@utmir.edu.mx', '02003763', 2),
(9, 'Leonardo Omar', 'Calderon', 'Monroy', '2021-11-17', 'a02003888@utmir.edu.mx', '02003888', 2),
(10, 'Williams Uriel', 'Cortez', 'Gonzales ', '2021-11-30', 'a02003895@utmir.edu.mx', '02003895', 2),
(13, 'Diego Ivan', 'Enriquez ', 'Arambula', '2021-11-09', 'a02003902@utmir.edu.mx', '02003902', 2),
(14, 'Jose Alexander', 'Garcia', 'Hernandez', '2021-11-10', 'a02003708@utmir.edu.mx', '02003708', 2),
(15, 'Uriel ', 'Gonzales', 'Trejo', '2021-11-24', 'a02003819@utmir.edu.mx', '02003819', 2),
(16, 'Jorge Luis', 'Gutierrez', 'Mendez', '2021-11-02', 'a02003882@utmir.edu.mx', '02003882', 2),
(17, 'Luis Jonathan', 'Lopez', 'Garcia', '2021-11-20', 'a02003724@utmir.edu.mx', '02003724', 2),
(18, 'Jesus', 'Luna', 'Plata', '2021-11-11', 'a02003730@utmir.edu.mx', '02003730', 2),
(19, 'Nancy ', 'Martinez', 'Melo', '2021-11-10', 'a01903630@utmir.edu.mx', '01903630', 2),
(20, 'Jesus Daniel', 'Mendoza', 'Islas', '2021-11-03', 'a02003848@utmir.edu.mx', '02003848', 2),
(21, 'Maria de los angeles', 'Mercado', 'Martinez', '2021-11-09', 'a02003825@utmir.edu.mx', '02003825', 2),
(22, 'Hugo Alejandro', 'Orta ', 'Ruiz', '2021-11-05', 'a02003698@utmir.edu.mx', '02003698', 2),
(23, 'Juan Manuel', 'Ortiz', 'Tapia', '2021-11-11', 'a02003800@utmir.edu.mx', '02003800', 2),
(24, 'Fidela', 'Ramirez', 'Mayor', '2021-11-10', 'a02003702@utmir.edu.mx', '02003702', 2),
(25, 'Mariano de jesus', 'Rivero ', 'Bosques', '2021-11-05', 'a02003822@utmir.edu.mx', '02003822', 2),
(26, 'Diego', 'Rodrigues', 'Garcia', '2021-07-07', 'a02003873@utmir.edu.mx', '02003873', 2),
(27, 'Josafat Gael', 'Rodriguez', 'Martinez', '2021-11-12', 'a02003704@utmir.edu.mx', '02003704', 2),
(28, 'Axel Daniel', 'Rosas ', 'Centeno', '2021-11-03', 'a02003687@utmir.edu.mx', '02003687', 2),
(29, 'Diana Monserrat', 'Sanchez', 'Gomez', '2021-11-11', 'a02003870@utmir.edu.mx', '02003870', 2),
(30, 'Lisbeth Nayeli', 'Sanchez ', 'Hernandez', '2021-11-10', 'a02003712@utmir.edu.mx', '02003712', 2),
(31, 'Alexia Ivanna', 'Urrea ', 'Carrillo', '2012-08-15', 'a02003837@utmir.edu.mx', '02003837', 2),
(32, 'Estefania', 'Valencia', 'Vera', '2021-11-03', 'a02003709@utmir.edu.mx', '02003709', 2),
(51, 'Andres', 'ruiz', 'Linarez', '2021-12-06', '234352@utmir.edu.mx', '234352', 2),
(52, 'Rodolfo', 'gdsfdg', 'sd', '2022-06-08', 'garciavargasefrain12@gmail.com', 'thjjcg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `nombre`, `apellido1`, `apellido2`, `correo`, `contrasena`, `rol`) VALUES
(1, 'Rodrigo', 'Jimenez', 'hfbfh', '1@gmail.com', '1', 1),
(2, 'Isamara', 'Escamilla', 'Leines ', '2@gmail.com', '2', 1),
(3, 'Flor Seleyde', 'Hernandez', 'Mendoza', '3@gmail.com', '3', 1),
(4, 'Alfonso', 'Naranjo', 'bfvjsbhv,', 'alfonso.naranjo@utmir.edu.mx', 'alfonso', 1),
(5, 'Jose Vicente', 'Perez', 'Soto', '5@gmail.com', '5', 1),
(6, 'Neftali', 'Valencia', 'dnklmnkg', '6@gmail.com', '6', 1),
(10, 'Efrain', 'Garcia', 'Vargas', 'garciavargasefrain12@gmail.com', 'Efrain123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`) VALUES
(1, 'Calculo diferencial'),
(2, 'Ingles'),
(3, 'Sistemas operativos'),
(4, 'Integradora'),
(5, 'Aplicaciones web'),
(6, 'Marketing digital'),
(7, 'Diseño digital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL DEFAULT current_timestamp(),
  `fecha_final` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id`, `nombre`, `fecha_inicio`, `fecha_final`) VALUES
(1, 'Septiembre', '2021-09-01', '2021-09-30'),
(2, 'Octubre', '2021-10-01', '2021-10-31'),
(3, 'Noviembre', '2021-11-01', '2021-11-30'),
(4, 'Final', '2021-12-01', '2021-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'alumno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno_clase`
--
ALTER TABLE `alumno_clase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumno` (`id_alumno`),
  ADD KEY `periodo_clase_ibfk_1` (`id_periodo`),
  ADD KEY `maestros` (`id_maestro`),
  ADD KEY `materia` (`id_materia`);

--
-- Indices de la tabla `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_4` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno_clase`
--
ALTER TABLE `alumno_clase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `login1`
--
ALTER TABLE `login1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_clase`
--
ALTER TABLE `alumno_clase`
  ADD CONSTRAINT `alumno` FOREIGN KEY (`id_alumno`) REFERENCES `login1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maestros` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periodo_clase_ibfk_1` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login1`
--
ALTER TABLE `login1`
  ADD CONSTRAINT `roll` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD CONSTRAINT `rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
