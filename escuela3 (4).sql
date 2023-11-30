-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 23:06:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admini`
--

CREATE TABLE `admini` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admini`
--

INSERT INTO `admini` (`id`, `nombre`, `apellido1`, `apellido2`, `correo`, `contrasena`, `rol`) VALUES
(1, 'Victor Manuel', 'del Villar', 'Delgadillo', 'Victormauel@utmir.edu.mx', 'Victormauel', 3),
(2, 'Carolia', 'Islas', 'Luna', 'carolina@utmir.edu.mx', 'carolina', 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `estado` enum('asistio','no_vino','retardo','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id`, `id_alumno`, `id_materia`, `fecha_asistencia`, `estado`) VALUES
(155, 17, 17, '2023-11-25', 'asistio'),
(156, 18, 17, '2023-11-25', 'asistio'),
(157, 21, 17, '2023-11-25', 'asistio'),
(158, 27, 17, '2023-11-25', 'asistio'),
(163, 17, 17, '2023-11-26', 'asistio'),
(164, 18, 17, '2023-11-26', 'asistio'),
(165, 21, 17, '2023-11-26', 'asistio'),
(166, 27, 17, '2023-11-26', 'asistio'),
(167, 15, 22, '2023-11-20', 'asistio'),
(168, 22, 22, '2023-11-20', 'asistio'),
(169, 23, 22, '2023-11-20', 'no_vino'),
(170, 64, 22, '2023-11-20', 'asistio'),
(171, 15, 22, '2023-11-21', 'asistio'),
(172, 22, 22, '2023-11-21', 'asistio'),
(173, 23, 22, '2023-11-21', 'asistio'),
(174, 64, 22, '2023-11-21', 'asistio'),
(175, 15, 22, '2023-11-22', 'asistio'),
(176, 22, 22, '2023-11-22', 'no_vino'),
(177, 23, 22, '2023-11-22', 'asistio'),
(178, 64, 22, '2023-11-22', 'asistio'),
(179, 15, 22, '2023-11-23', 'asistio'),
(180, 22, 22, '2023-11-23', 'retardo'),
(181, 23, 22, '2023-11-23', 'retardo'),
(182, 64, 22, '2023-11-23', 'asistio'),
(183, 15, 22, '2023-11-24', 'retardo'),
(184, 22, 22, '2023-11-24', 'asistio'),
(185, 23, 22, '2023-11-24', 'asistio'),
(186, 64, 22, '2023-11-24', 'asistio'),
(187, 15, 22, '2023-11-25', 'no_vino'),
(188, 22, 22, '2023-11-25', 'asistio'),
(189, 23, 22, '2023-11-25', 'asistio'),
(190, 64, 22, '2023-11-25', 'asistio'),
(191, 15, 22, '2023-11-26', 'retardo'),
(192, 22, 22, '2023-11-26', 'asistio'),
(193, 23, 22, '2023-11-26', 'asistio'),
(194, 64, 22, '2023-11-26', 'asistio'),
(251, 17, 21, '2023-11-26', 'no_vino'),
(252, 18, 21, '2023-11-26', 'asistio'),
(253, 21, 21, '2023-11-26', 'asistio'),
(254, 27, 21, '2023-11-26', 'asistio'),
(255, 15, 22, '2023-11-27', 'retardo'),
(256, 22, 22, '2023-11-27', 'asistio'),
(257, 23, 22, '2023-11-27', 'asistio'),
(258, 64, 22, '2023-11-27', 'asistio'),
(259, 15, 22, '2023-11-28', 'retardo'),
(260, 22, 22, '2023-11-28', 'asistio'),
(261, 23, 22, '2023-11-28', 'asistio'),
(262, 64, 22, '2023-11-28', 'asistio'),
(263, 15, 22, '2023-11-29', 'retardo'),
(264, 22, 22, '2023-11-29', 'asistio'),
(265, 23, 22, '2023-11-29', 'asistio'),
(266, 64, 22, '2023-11-29', 'asistio'),
(267, 17, 17, '2023-11-27', 'retardo'),
(268, 18, 17, '2023-11-27', 'asistio'),
(269, 21, 17, '2023-11-27', 'asistio'),
(270, 27, 17, '2023-11-27', 'asistio'),
(271, 17, 17, '2023-11-28', 'retardo'),
(272, 18, 17, '2023-11-28', 'asistio'),
(273, 21, 17, '2023-11-28', 'asistio'),
(274, 27, 17, '2023-11-28', 'asistio'),
(275, 17, 17, '2023-11-29', 'retardo'),
(276, 18, 17, '2023-11-29', 'asistio'),
(277, 21, 17, '2023-11-29', 'asistio'),
(278, 27, 17, '2023-11-29', 'asistio'),
(279, 15, 22, '2023-11-30', 'retardo'),
(280, 22, 22, '2023-11-30', 'asistio'),
(281, 23, 22, '2023-11-30', 'asistio'),
(282, 64, 22, '2023-11-30', 'asistio'),
(283, 15, 22, '2023-12-01', 'no_vino'),
(284, 22, 22, '2023-12-01', 'asistio'),
(285, 23, 22, '2023-12-01', 'asistio'),
(286, 64, 22, '2023-12-01', 'asistio'),
(288, 17, 24, '2023-11-30', 'no_vino'),
(289, 18, 24, '2023-11-30', 'asistio'),
(290, 21, 24, '2023-11-30', 'asistio'),
(291, 27, 24, '2023-11-30', 'retardo'),
(292, 71, 24, '2023-11-30', 'asistio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuatrimestre`
--

CREATE TABLE `cuatrimestre` (
  `id` int(11) NOT NULL,
  `cuatrimestre` varchar(50) NOT NULL,
  `duracion` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuatrimestre`
--

INSERT INTO `cuatrimestre` (`id`, `cuatrimestre`, `duracion`, `fecha`) VALUES
(1, '9', '4 meses', '2023-11-16 02:43:48'),
(2, '7', '4 meses', '2023-11-16 03:58:15'),
(3, '0', '4 meses', '2023-11-17 03:24:01'),
(4, '1', '4 meses', '2023-11-17 03:24:01'),
(5, '2', '4 meses', '2023-11-17 03:24:01'),
(6, '3', '4 meses', '2023-11-17 03:24:01'),
(7, '4', '4 meses', '2023-11-17 03:24:01'),
(8, '5', '4 meses', '2023-11-17 03:24:01'),
(9, '6', '4 meses', '2023-11-17 03:24:01'),
(10, '8', '4 meses', '2023-11-17 03:24:01'),
(11, '10', '4 meses', '2023-11-17 03:24:01'),
(12, '11', '4 meses', '2023-11-17 03:24:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_cuatri` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `id_cuatri`, `fecha`) VALUES
(7, 'Entornos Virtuales Y Negocios Digitales', 1, '2023-11-17 03:25:40'),
(8, 'Entornos Virtuales Y Negocios Digitales', 2, '2023-11-17 03:25:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justificante`
--

CREATE TABLE `justificante` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `archivo_nombre` varchar(255) DEFAULT NULL,
  `archivo_ruta` varchar(255) DEFAULT NULL,
  `archivo_drive_id` varchar(255) DEFAULT NULL,
  `fecha_subida` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `justificante`
--

INSERT INTO `justificante` (`id`, `id_alumno`, `id_materia`, `archivo_nombre`, `archivo_ruta`, `archivo_drive_id`, `fecha_subida`) VALUES
(19, 15, 22, 'Borrador Product Backlog.pdf', '../../justificantes/Borrador Product Backlog.pdf', '1KYRuJ4ix44fo_DwfOg2krI14QW_jVgkI', '2023-11-27 20:35:22');

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
  `contrasena` varchar(100) NOT NULL,
  `rol_id` int(2) NOT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `ruta_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login1`
--

INSERT INTO `login1` (`id`, `nombrea`, `apellido1`, `apellido2`, `fechana`, `correo`, `contrasena`, `rol_id`, `id_grupo`, `ruta_foto`) VALUES
(15, 'Uriel ', 'Gonzales', 'Trejo', '2021-11-24', 'a02003819@utmir.edu.mx', '02003819', 2, 8, '../Fotos_alumnos/Pic1.jpeg'),
(17, 'Luis Jonathan', 'Lopez', 'Garcia', '2021-11-20', 'a02003724@utmir.edu.mx', '02003724', 2, 7, '../Fotos_alumnos/Pic2.jpg'),
(18, 'Jesus', 'Luna', 'Plata', '2021-11-11', 'a02003730@utmir.edu.mx', '02003730', 2, 7, '../Fotos_alumnos/Pic6.jpg'),
(21, 'Maria de los angeles', 'Mercado', 'Martinez', '2021-11-09', 'a02003825@utmir.edu.mx', '02003825', 2, 7, '../Fotos_alumnos/Pic3.jpeg'),
(22, 'Hugo Alejandro', 'Orta ', 'Ruiz', '2021-11-05', 'a02003698@utmir.edu.mx', '02003698', 2, 8, '../Fotos_alumnos/pic12.jpeg'),
(23, 'Juan Manuel', 'Ortiz', 'Tapia', '2021-11-11', 'a02003800@utmir.edu.mx', '02003800', 2, 8, '../Fotos_alumnos/Pic17.jpeg'),
(27, 'Josafat Gael', 'Rodriguez', 'Martinez', '2021-11-12', 'a02003704@utmir.edu.mx', '02003704', 2, 7, '../Fotos_alumnos/pic18.jpeg'),
(64, 'Efrain', 'aa', 'Vargas', '2023-11-14', 'garciavargasefrain12@gmail.com', 'aaa', 2, 8, '../Fotos_alumnos/pic19.jpeg'),
(71, 'Efrain', 'ccccccc', 'Vargas', '2023-11-28', 'garciavargasefrain12@gmail.com', 'cccccccc', 2, 7, '../Fotos_alumnos/pic20.jpeg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `nombre`, `apellido1`, `apellido2`, `correo`, `contrasena`, `rol`) VALUES
(4, 'Alfonso', 'Naranjo', 'bfvjsbhv,', 'alfonso.naranjo@utmir.edu.mx', 'alfonso', 1),
(5, 'Jose Vicente', 'Perez', 'aas', '5@gmail.com', '112355', 1),
(6, 'Neftali', 'Valencia', 'dnklmnkg', '6@gmail.com', '6', 1),
(10, 'Efrain', 'Garcia', 'Vargas', 'garciavargasefrain12@gmail.com', 'Efrain123', 1),
(11, 'Victor Erwin', 'Escalante', 'Lopez', 'Victor@utmir.edu.mx', 'Victor', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `per_ini` date DEFAULT NULL,
  `per_fin` date DEFAULT NULL,
  `id_grupos` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`, `id_profesor`, `per_ini`, `per_fin`, `id_grupos`, `fecha`) VALUES
(17, 'analitica', 4, '2023-11-22', '2023-12-01', 7, '2023-11-24 01:39:35'),
(21, 'Tutorias', 4, '2023-11-05', '2023-11-30', 7, '2023-11-24 15:18:46'),
(22, 'ingles', 10, '2023-11-05', '2023-11-30', 8, '2023-11-24 20:37:23'),
(24, 'Gestion de proyectos', 11, '2023-11-30', '2023-11-30', 7, '2023-11-29 14:37:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_transaccion` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `cantidad` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `id_transaccion`, `correo`, `fecha`, `status`, `cantidad`) VALUES
(1, '4WA8412379814090J', 'sb-a47mjr27058748@personal.example.com', '2023-11-15 22:34:04', 'COMPLETED', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL DEFAULT current_timestamp(),
  `fecha_final` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'alumno'),
(3, 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol` (`rol`);

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
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `cuatrimestre`
--
ALTER TABLE `cuatrimestre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cuatri` (`id_cuatri`);

--
-- Indices de la tabla `justificante`
--
ALTER TABLE `justificante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_foto` (`ruta_foto`);

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
  ADD KEY `id` (`id`),
  ADD KEY `id_profesor` (`id_profesor`),
  ADD KEY `id_grupos` (`id_grupos`);

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
-- AUTO_INCREMENT de la tabla `admini`
--
ALTER TABLE `admini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `alumno_clase`
--
ALTER TABLE `alumno_clase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT de la tabla `cuatrimestre`
--
ALTER TABLE `cuatrimestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `justificante`
--
ALTER TABLE `justificante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `login1`
--
ALTER TABLE `login1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admini`
--
ALTER TABLE `admini`
  ADD CONSTRAINT `admini_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno_clase`
--
ALTER TABLE `alumno_clase`
  ADD CONSTRAINT `alumno` FOREIGN KEY (`id_alumno`) REFERENCES `login1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maestros` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periodo_clase_ibfk_1` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `login1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_cuatri`) REFERENCES `cuatrimestre` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `justificante`
--
ALTER TABLE `justificante`
  ADD CONSTRAINT `justificante_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `login1` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `justificante_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `login1`
--
ALTER TABLE `login1`
  ADD CONSTRAINT `login1_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `roll` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD CONSTRAINT `rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `maestros` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `materias_ibfk_2` FOREIGN KEY (`id_grupos`) REFERENCES `grupos` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
