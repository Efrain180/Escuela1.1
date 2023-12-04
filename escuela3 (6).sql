-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 09:12:20
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
  `id_maestro` int(11) NOT NULL,
  `numero_unidad` int(11) NOT NULL,
  `calificacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno_clase`
--

INSERT INTO `alumno_clase` (`id`, `id_alumno`, `id_materia`, `id_maestro`, `numero_unidad`, `calificacion`) VALUES
(86, 17, 17, 4, 1, 8.8),
(87, 18, 17, 4, 1, 9),
(88, 18, 17, 4, 2, 6.7),
(90, 27, 17, 4, 1, 8),
(91, 27, 17, 4, 2, 6),
(92, 17, 17, 4, 3, 9),
(101, 21, 17, 4, 1, 9.6),
(106, 18, 17, 4, 3, 8.5),
(115, 21, 17, 4, 2, 8.6),
(117, 21, 17, 4, 3, 9.2),
(120, 17, 17, 4, 2, 8.6),
(121, 27, 17, 4, 3, 10),
(123, 18, 17, 4, 4, 8.3),
(124, 17, 17, 4, 4, 8.5),
(125, 15, 22, 10, 1, 9.3);

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
(298, 15, 17, '2023-11-27', 'retardo'),
(299, 17, 17, '2023-11-27', 'no_vino'),
(300, 18, 17, '2023-11-27', 'asistio'),
(301, 21, 17, '2023-11-27', 'asistio'),
(302, 22, 17, '2023-11-27', 'asistio'),
(303, 23, 17, '2023-11-27', 'retardo'),
(304, 27, 17, '2023-11-27', 'asistio'),
(305, 15, 17, '2023-11-28', 'asistio'),
(306, 17, 17, '2023-11-28', 'retardo'),
(307, 18, 17, '2023-11-28', 'no_vino'),
(308, 21, 17, '2023-11-28', 'asistio'),
(309, 22, 17, '2023-11-28', 'asistio'),
(310, 23, 17, '2023-11-28', 'asistio'),
(311, 27, 17, '2023-11-28', 'asistio'),
(312, 15, 17, '2023-11-29', 'asistio'),
(313, 17, 17, '2023-11-29', 'no_vino'),
(314, 18, 17, '2023-11-29', 'asistio'),
(315, 21, 17, '2023-11-29', 'asistio'),
(316, 22, 17, '2023-11-29', 'asistio'),
(317, 23, 17, '2023-11-29', 'asistio'),
(318, 27, 17, '2023-11-29', 'no_vino'),
(319, 15, 17, '2023-11-30', 'asistio'),
(320, 17, 17, '2023-11-30', 'asistio'),
(321, 18, 17, '2023-11-30', 'asistio'),
(322, 21, 17, '2023-11-30', 'asistio'),
(323, 22, 17, '2023-11-30', 'asistio'),
(324, 23, 17, '2023-11-30', 'asistio'),
(325, 27, 17, '2023-11-30', 'asistio'),
(326, 15, 17, '2023-12-01', 'retardo'),
(327, 17, 17, '2023-12-01', 'asistio'),
(328, 18, 17, '2023-12-01', 'asistio'),
(329, 21, 17, '2023-12-01', 'asistio'),
(330, 22, 17, '2023-12-01', 'asistio'),
(331, 23, 17, '2023-12-01', 'asistio'),
(332, 27, 17, '2023-12-01', 'asistio'),
(333, 15, 17, '2023-12-04', 'retardo'),
(334, 17, 17, '2023-12-04', 'asistio'),
(335, 18, 17, '2023-12-04', 'asistio'),
(336, 21, 17, '2023-12-04', 'asistio'),
(337, 22, 17, '2023-12-04', 'no_vino'),
(338, 23, 17, '2023-12-04', 'asistio'),
(339, 27, 17, '2023-12-04', 'asistio');

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
(8, 'Entornos Virtuales Y Negocios Digitales', 2, '2023-11-17 03:25:54'),
(9, 'Entornos Virtuales Y Negocios Digitales', 4, '2023-12-04 05:51:55');

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
(87, 17, 17, 'Borrador Product Backlog.pdf', '../../justificantes/Borrador Product Backlog.pdf', '1Py6tANNq8EvU53CVWqHfyWmRri3mmJLA', '2023-12-04 07:11:50');

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
(15, 'Uriel ', 'Gonzales', 'Trejo', '2021-11-24', 'a02003819@utmir.edu.mx', '02003819', 2, 7, '../Fotos_alumnos/Pic1.jpeg'),
(17, 'Luis Jonathan', 'Lopez', 'Garcia', '2021-11-20', 'a02003724@utmir.edu.mx', '02003724', 2, 7, '../Fotos_alumnos/Pic2.jpg'),
(18, 'Jesus', 'Luna', 'Plata', '2021-11-11', 'a02003730@utmir.edu.mx', '02003730', 2, 7, '../Fotos_alumnos/Pic6.jpg'),
(21, 'Maria de los angeles', 'Mercado', 'Martinez', '2021-11-09', 'a02003825@utmir.edu.mx', '02003825', 2, 7, '../Fotos_alumnos/Pic3.jpeg'),
(22, 'Hugo Alejandro', 'Orta ', 'Ruiz', '2021-11-05', 'a02003698@utmir.edu.mx', '02003698', 2, 7, '../Fotos_alumnos/pic12.jpeg'),
(23, 'Juan Manuel', 'Ortiz', 'Tapia', '2021-11-11', 'a02003800@utmir.edu.mx', '02003800', 2, 7, '../Fotos_alumnos/Pic17.jpeg'),
(27, 'Josafat Gael', 'Rodriguez', 'Martinez', '2021-11-12', 'a02003704@utmir.edu.mx', '02003704', 2, 7, '../Fotos_alumnos/pic18.jpeg'),
(72, 'ALEJANDRA', 'AZPEITIA', 'VERA', '2023-12-11', 'a02103151@utmir.edu.mx', '02103151', 2, 8, '../Fotos_alumnos/pic28.jpg'),
(73, 'ARLETH MICHEL', 'PEÑA', 'CRUZ', '2023-12-04', 'a02103068@utmir.edu.mx', '02103068', 2, 8, '../Fotos_alumnos/pic10.jpg'),
(74, 'ALEXIS', 'HERNÁNDEZ ', 'PÉREZ', '2023-12-11', '2303367@utmir.edu.mx', '2303367', 2, 8, '../Fotos_alumnos/pic26.jpeg'),
(75, 'CELSO YAIR', 'IBARRA', ' BASILIO', '2023-12-06', 'a02103052@utmir.edu.mx', '02103052', 2, 8, '../Fotos_alumnos/pic30.jpeg'),
(76, 'ESTRELLA JEZABEL', 'PEREZ ', 'LOZANO', '2023-12-13', 'a02103145@utmir.edu.mx', '02103145', 2, 8, '../Fotos_alumnos/pic25.jpeg'),
(77, 'ANA LIZBETH', 'SANCHEZ ', 'HERNANDEZ', '2023-12-05', '2303073@utmir.edu.mx', '2303073', 2, 9, '../Fotos_alumnos/pic15.jpeg'),
(78, 'BRUNO', 'MARQUEZ ', 'HERNANDEZ', '2023-12-11', '2303348@utmir.edu.mx', '2303348', 2, 9, '../Fotos_alumnos/pic21.jpg'),
(79, 'CARLOS AXEL', 'ZAZUETA', ' GARNICA', '2023-12-04', '2303032@utmir.edu.mx', '2303032', 2, 9, '../Fotos_alumnos/Pic6.jpg'),
(80, 'CESAR LUIS', 'GUTIERREZ', ' CHARGOY', '2023-12-12', '2303009@utmir.edu.mx', '2303009', 2, 9, '../Fotos_alumnos/pic26.jpeg'),
(81, 'CHRISTOPER ALEXANDER', 'BALANDRANO', ' DELGADO', '2023-12-12', '2303174@utmir.edu.mx', '2303174', 2, 9, '../Fotos_alumnos/Pic17.jpeg'),
(82, 'DORIANY MAYERLY', 'RODRIGUEZ ', 'MEJIA', '2023-12-20', '2303010@utmir.edu.mx', '2303010', 2, 9, '../Fotos_alumnos/Pic4.jpeg');

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
(11, 'Victor Erwin', 'Escalante', 'Lopez', 'Victor@utmir.edu.mx', 'Victor', 1),
(18, 'ZARETZA', 'PEÑA', 'HHHH', 'zaretza@utmir.edu.mx', 'zaretza', 1),
(19, 'NITZIA', 'LOAIZA', 'ORTIZ', 'nitzia@utmir.edu.mx', 'nitzia', 1),
(20, 'EDGAR', 'BUSTOS', 'AAAAA', 'edgar@utmir.edu.mx', 'edgar', 1),
(21, 'VICTOR', 'HUGO', 'SSS', 'victorhugo@utmir.edu.mx', 'victorhugo', 1);

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
(17, 'Analitica de datos para negocios digitales', 4, '2023-11-22', '2023-12-01', 7, '2023-11-24 01:39:35'),
(21, 'Tutorias', 4, '2023-11-05', '2023-11-30', 7, '2023-11-24 15:18:46'),
(22, 'ingles VIII', 18, '2023-11-05', '2023-11-30', 7, '2023-11-24 20:37:23'),
(24, 'Gestion de proyectos', 11, '2023-11-30', '2023-11-30', 7, '2023-11-29 14:37:12'),
(25, 'Ciberseguridad aplicada a negocios digitales', 5, '2023-12-05', '2023-12-21', 7, '2023-12-04 06:09:53'),
(26, 'Matematicas para ingenieria II', 5, '2023-12-11', '2023-12-22', 7, '2023-12-04 06:10:38'),
(27, 'Direccion de equipos de alto rendimiento ', 19, '2023-12-11', '2023-12-12', 7, '2023-12-04 06:11:22'),
(28, 'Programacion de videojuegos I', 5, '2023-12-27', '2023-12-15', 8, '2023-12-04 06:16:30'),
(29, 'Administracion del tiempo ', 21, '2023-12-11', '2023-12-21', 8, '2023-12-04 06:16:58'),
(30, 'Produccion de efectos visuales ', 19, '2023-12-03', '2023-12-23', 8, '2023-12-04 06:17:29'),
(31, 'Tutoria', 4, '2023-12-05', '2023-12-14', 8, '2023-12-04 06:17:59'),
(32, 'Ingles VI', 20, '2023-12-10', '2023-12-14', 8, '2023-12-04 06:18:53'),
(33, 'Matematicas para ingenieria ', 4, '2023-12-10', '2023-12-15', 8, '2023-12-04 06:19:36'),
(34, 'Algebra lineal', 11, '2023-12-11', '2023-12-14', 9, '2023-12-04 06:20:52'),
(35, 'Fundamentos de redes ', 21, '2023-12-10', '2023-12-30', 9, '2023-12-04 06:21:10'),
(36, 'Ingles I', 20, '2023-12-10', '2023-12-13', 9, '2023-12-04 06:21:42'),
(37, 'Fundamentos de TI', 4, '2023-12-12', '2023-12-14', 9, '2023-12-04 06:22:02'),
(38, 'Metodologia de la progrmacion', 5, '2023-12-10', '2023-12-22', 9, '2023-12-04 06:22:28');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT de la tabla `cuatrimestre`
--
ALTER TABLE `cuatrimestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `justificante`
--
ALTER TABLE `justificante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `login1`
--
ALTER TABLE `login1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `materia` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
