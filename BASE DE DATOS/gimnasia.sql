-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2020 a las 10:44:56
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasia`
--
CREATE DATABASE IF NOT EXISTS `gimnasia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gimnasia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `idasistencia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `descripcion`) VALUES
(1, 'PRE'),
(3, 'PRE-SELECCION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_asistencia`
--

CREATE TABLE `detalle_asistencia` (
  `iddetalle_asistencia` int(11) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `idasistencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_evaluacion`
--

CREATE TABLE `detalle_evaluacion` (
  `iddetalle_evaluacion` int(11) NOT NULL,
  `idejercicio` int(11) NOT NULL,
  `puntos` decimal(10,0) NOT NULL,
  `idevaluacion_aspirante` int(11) NOT NULL,
  `tipo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_evaluacion`
--

INSERT INTO `detalle_evaluacion` (`iddetalle_evaluacion`, `idejercicio`, `puntos`, `idevaluacion_aspirante`, `tipo`) VALUES
(1, 1, '0', 6, 'F'),
(2, 1, '0', 6, 'C'),
(3, 1, '10', 7, 'F'),
(4, 1, '10', 7, 'C'),
(5, 1, '10', 8, 'F'),
(6, 1, '1', 9, 'F'),
(7, 1, '1', 10, 'F'),
(8, 1, '1', 11, 'F'),
(9, 1, '1', 12, 'F'),
(10, 1, '1', 14, 'F'),
(11, 1, '1', 14, 'C'),
(12, 1, '1', 15, 'F'),
(13, 1, '1', 15, 'C'),
(14, 3, '10', 16, 'F'),
(15, 1, '10', 16, 'F'),
(16, 3, '1', 16, 'C'),
(17, 1, '10', 17, 'F'),
(18, 1, '10', 17, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id_ejercicio` int(11) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id_ejercicio`, `id_nivel`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 1, 'sentadillas al clavo', 'muy pesado', 0x78),
(3, 1, 'FLEXIONES DE PECHO', 'FLEXIONES', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenador`
--

CREATE TABLE `entrenador` (
  `id_entrenador` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrenador`
--

INSERT INTO `entrenador` (`id_entrenador`, `id_persona`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `id_entrenador` int(11) NOT NULL,
  `club` varchar(45) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `id_persona`, `id_nivel`, `id_entrenador`, `club`, `id_categoria`) VALUES
(1, 3, 1, 1, 'x', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_aspirante`
--

CREATE TABLE `evaluacion_aspirante` (
  `id_evaluacion_aspirante` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evaluacion_aspirante`
--

INSERT INTO `evaluacion_aspirante` (`id_evaluacion_aspirante`, `id_estudiante`, `fecha`) VALUES
(6, 1, '1970-01-01'),
(7, 1, '1970-01-01'),
(8, 1, '2000-06-21'),
(9, 1, '2000-06-21'),
(10, 1, '2000-06-21'),
(11, 1, '2000-06-21'),
(12, 1, '2000-06-21'),
(13, 1, '2000-06-21'),
(14, 1, '2000-06-21'),
(15, 1, '2000-06-21'),
(16, 1, '2000-03-30'),
(17, 1, '2000-06-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `rango` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nombre`, `rango`) VALUES
(1, 'prueba', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

CREATE TABLE `parametro` (
  `id_parametro` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `respuesta` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `cedula` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `direccion` text NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `provincia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `cedula`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `ciudad`, `fecha_nacimiento`, `sexo`, `provincia`) VALUES
(1, '0953865177', 'Nelio Reynaldo', 'Ciguencia Cadena', '3872803', 'neliomarcos040@gmail.com', 'carchi 4619', 'guayaquil', '2000-06-21', 'M', 'Guayas'),
(2, '0915636195', 'JAIMILTON CEVALLOS', 'KJKJKJK', '3872803', 'LUISARDILAMACIAS@GMAIL.COM', 'CARCHI Y FRANSISCO SEGURA', 'GUAYAQUIL', '2000-07-21', 'M', 'GUAYAS'),
(3, '098765432', 'ROBINSON CETRE', 'VALENCIA', '1234567', 'XXX@EXAMPLE.COM', '', 'GUAYAQUIL', '2000-06-21', '', 'GUAYAS'),
(5, '0915636195', 'ROBERT', 'DENILO', '3456765432', 'LUISARDILAMARCIAS@GMAIL.COM', 'CIUDAD', '', '2222-06-21', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `idRepresentante` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Cedula` varchar(12) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sector` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `idpersona` int(11) NOT NULL,
  `estado` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `idpersona`, `estado`) VALUES
(1, 'nelio', '1234', 1, ''),
(2, 'ardila', '1234', 1, ''),
(3, 'NELIO', '1234', 1, ''),
(4, 'nelio', '1234', 1, ''),
(5, 'nelio', '1234', 1, ''),
(6, 'NELIO', '1234', 1, ''),
(7, 'NELIO', '1234', 1, ''),
(8, 'NELIO', '1234', 1, ''),
(9, 'MATEO', '1234', 1, ''),
(10, 'MATEO', '1234', 1, ''),
(11, 'MATEO', '1234', 1, ''),
(12, 'MATEO GOLDST', '1234', 3, 'ACTIVO'),
(13, 'GAARA', '1234', 2, 'INACTIVO'),
(14, 'NCIGUENCIA', '1234', 1, 'ACTIVO'),
(15, 'CHE', '1234', 3, 'INACTIVO'),
(16, 'CHE', '1234', 1, 'INACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`idasistencia`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `detalle_asistencia`
--
ALTER TABLE `detalle_asistencia`
  ADD PRIMARY KEY (`iddetalle_asistencia`),
  ADD KEY `fk_asistencia_idx` (`idasistencia`),
  ADD KEY `fk_estudiante_asistencia_idx` (`idestudiante`);

--
-- Indices de la tabla `detalle_evaluacion`
--
ALTER TABLE `detalle_evaluacion`
  ADD PRIMARY KEY (`iddetalle_evaluacion`),
  ADD KEY `fk_ejercicio_idx` (`idejercicio`),
  ADD KEY `fk_cabecera_idx` (`idevaluacion_aspirante`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id_ejercicio`),
  ADD KEY `fk__ejercicio_idx` (`id_nivel`);

--
-- Indices de la tabla `entrenador`
--
ALTER TABLE `entrenador`
  ADD PRIMARY KEY (`id_entrenador`),
  ADD KEY `fk_persona_idx` (`id_persona`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `fk_id_persona_idx` (`id_persona`),
  ADD KEY `fk_id_nivel_idx` (`id_nivel`),
  ADD KEY `fk_id_entrenador_idx` (`id_entrenador`),
  ADD KEY `persona_idx` (`id_persona`),
  ADD KEY `fk_categoria_idx` (`id_categoria`);

--
-- Indices de la tabla `evaluacion_aspirante`
--
ALTER TABLE `evaluacion_aspirante`
  ADD PRIMARY KEY (`id_evaluacion_aspirante`),
  ADD KEY `fk_estudiante_evaluacion_idx` (`id_estudiante`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `parametro`
--
ALTER TABLE `parametro`
  ADD PRIMARY KEY (`id_parametro`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`idRepresentante`),
  ADD KEY `fk_estudiante_representante_idx` (`id_estudiante`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_persona_idx` (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `idasistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_asistencia`
--
ALTER TABLE `detalle_asistencia`
  MODIFY `iddetalle_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_evaluacion`
--
ALTER TABLE `detalle_evaluacion`
  MODIFY `iddetalle_evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id_ejercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entrenador`
--
ALTER TABLE `entrenador`
  MODIFY `id_entrenador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `evaluacion_aspirante`
--
ALTER TABLE `evaluacion_aspirante`
  MODIFY `id_evaluacion_aspirante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `parametro`
--
ALTER TABLE `parametro`
  MODIFY `id_parametro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `idRepresentante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_asistencia`
--
ALTER TABLE `detalle_asistencia`
  ADD CONSTRAINT `fk_asistencia` FOREIGN KEY (`idasistencia`) REFERENCES `asistencia` (`idasistencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_asistencia` FOREIGN KEY (`idestudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_evaluacion`
--
ALTER TABLE `detalle_evaluacion`
  ADD CONSTRAINT `fk_cabecera` FOREIGN KEY (`idevaluacion_aspirante`) REFERENCES `evaluacion_aspirante` (`id_evaluacion_aspirante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejercicio` FOREIGN KEY (`idejercicio`) REFERENCES `ejercicio` (`id_ejercicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD CONSTRAINT `fk_nivel_ejercicio` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);

--
-- Filtros para la tabla `entrenador`
--
ALTER TABLE `entrenador`
  ADD CONSTRAINT `fk_persona_entrenador` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_entrenador_estudiante` FOREIGN KEY (`id_entrenador`) REFERENCES `entrenador` (`id_entrenador`),
  ADD CONSTRAINT `fk_nivel_estudiante` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`),
  ADD CONSTRAINT `fk_persona_estudiante` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `evaluacion_aspirante`
--
ALTER TABLE `evaluacion_aspirante`
  ADD CONSTRAINT `fk_estudiante_evaluacion` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`);

--
-- Filtros para la tabla `representante`
--
ALTER TABLE `representante`
  ADD CONSTRAINT `fk_est` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
