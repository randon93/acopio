-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2019 a las 16:02:54
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
-- Base de datos: `cafe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id` int(11) NOT NULL,
  `entrada` int(11) DEFAULT NULL,
  `calidad` varchar(1) NOT NULL,
  `cafe_tipo` varchar(3) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `entrada`, `calidad`, `cafe_tipo`, `cantidad`) VALUES
(3, 13, '2', '2', 555),
(6, 15, '1', '2', 555),
(7, 15, '1', '1', 10000),
(8, 15, '1', '1', 40000),
(9, 16, '1', '1', 90000),
(10, 14, '1', '2', 120),
(11, 16, '1', '1', 5000),
(12, 17, '1', '1', 88);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen_distribuidor`
--

CREATE TABLE `almacen_distribuidor` (
  `cafe_empaqutado` int(11) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad`
--

CREATE TABLE `calidad` (
  `id` varchar(2) NOT NULL,
  `descripcion` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calidad`
--

INSERT INTO `calidad` (`id`, `descripcion`) VALUES
('1', 'B'),
('2', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empaquetado`
--

CREATE TABLE `empaquetado` (
  `cafe_almacen` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `tipo_paca` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_cafe`
--

CREATE TABLE `entrada_cafe` (
  `id` int(11) NOT NULL,
  `cant_cafe` int(11) DEFAULT NULL,
  `procedencia` int(11) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada_cafe`
--

INSERT INTO `entrada_cafe` (`id`, `cant_cafe`, `procedencia`, `fecha_ingreso`) VALUES
(8, 999, 1, '2019-05-14 06:35:00'),
(9, 77, 1, '2019-05-14 06:37:00'),
(10, 6, 1, '2019-05-14 06:46:00'),
(11, 123, 1, '2019-05-14 20:43:00'),
(12, 123, 1, '2019-05-14 22:33:00'),
(13, 55000, 1, '2019-05-14 22:47:00'),
(14, 3, 3, '2019-05-14 23:18:00'),
(15, 5000, 3, '2019-05-14 23:20:00'),
(16, 5000, 2, '2019-05-15 00:40:00'),
(17, 1, 2, '2019-05-29 04:06:00'),
(18, 40000, 3, '2019-05-31 06:20:00'),
(19, 456, 2, '2019-05-31 07:04:00'),
(20, 3123, 1, '2019-05-31 07:12:00'),
(21, 123123, 1, '2019-05-31 07:12:00'),
(22, 1231321, 1, '2019-05-31 07:12:00'),
(23, 2147483647, 1, '2019-05-31 07:12:00'),
(24, 1312313131, 1, '2019-05-31 07:12:00'),
(25, 131213, 1, '2019-05-31 07:12:00'),
(26, 123, 2, '2019-05-31 19:48:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finca`
--

CREATE TABLE `finca` (
  `nombre` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `propietario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `finca`
--

INSERT INTO `finca` (`nombre`, `id`, `direccion`, `propietario`) VALUES
('gerson con sida', 1, 'calle falsa 123', 'gersiton el gordis'),
('bradon', 2, 'no se', 'javier'),
('fanny', 3, 'tampoco se', 'carmen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secado_limpieza`
--

CREATE TABLE `secado_limpieza` (
  `id` int(11) NOT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `cant_cafe` int(11) DEFAULT NULL,
  `cafe_almacen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cafe`
--

CREATE TABLE `tipo_cafe` (
  `id` varchar(3) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_cafe`
--

INSERT INTO `tipo_cafe` (`id`, `descripcion`) VALUES
('1', 'Blanco'),
('2', 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_paca`
--

CREATE TABLE `tipo_paca` (
  `id` varchar(2) NOT NULL,
  `peso` int(11) DEFAULT NULL,
  `material` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_secado`
--

CREATE TABLE `tipo_secado` (
  `id` varchar(2) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `tiempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `entrada` (`entrada`,`calidad`,`cafe_tipo`),
  ADD KEY `calidad` (`calidad`),
  ADD KEY `cafe_tipo` (`cafe_tipo`);

--
-- Indices de la tabla `almacen_distribuidor`
--
ALTER TABLE `almacen_distribuidor`
  ADD KEY `cafe_empaqutado` (`cafe_empaqutado`,`fecha_ingreso`,`fecha_salida`);

--
-- Indices de la tabla `calidad`
--
ALTER TABLE `calidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `empaquetado`
--
ALTER TABLE `empaquetado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `cafe_almacen` (`cafe_almacen`,`tipo_paca`),
  ADD KEY `tipo_paca` (`tipo_paca`);

--
-- Indices de la tabla `entrada_cafe`
--
ALTER TABLE `entrada_cafe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `procedencia` (`procedencia`);

--
-- Indices de la tabla `finca`
--
ALTER TABLE `finca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `secado_limpieza`
--
ALTER TABLE `secado_limpieza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `tipo` (`tipo`,`cafe_almacen`),
  ADD KEY `cafe_almacen` (`cafe_almacen`);

--
-- Indices de la tabla `tipo_cafe`
--
ALTER TABLE `tipo_cafe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_paca`
--
ALTER TABLE `tipo_paca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tipo_secado`
--
ALTER TABLE `tipo_secado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empaquetado`
--
ALTER TABLE `empaquetado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrada_cafe`
--
ALTER TABLE `entrada_cafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `finca`
--
ALTER TABLE `finca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `secado_limpieza`
--
ALTER TABLE `secado_limpieza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD CONSTRAINT `almacen_ibfk_1` FOREIGN KEY (`entrada`) REFERENCES `entrada_cafe` (`id`),
  ADD CONSTRAINT `almacen_ibfk_2` FOREIGN KEY (`calidad`) REFERENCES `calidad` (`id`),
  ADD CONSTRAINT `almacen_ibfk_4` FOREIGN KEY (`cafe_tipo`) REFERENCES `tipo_cafe` (`id`);

--
-- Filtros para la tabla `almacen_distribuidor`
--
ALTER TABLE `almacen_distribuidor`
  ADD CONSTRAINT `almacen_distribuidor_ibfk_1` FOREIGN KEY (`cafe_empaqutado`) REFERENCES `empaquetado` (`id`);

--
-- Filtros para la tabla `empaquetado`
--
ALTER TABLE `empaquetado`
  ADD CONSTRAINT `empaquetado_ibfk_1` FOREIGN KEY (`cafe_almacen`) REFERENCES `almacen` (`id`),
  ADD CONSTRAINT `empaquetado_ibfk_2` FOREIGN KEY (`tipo_paca`) REFERENCES `tipo_paca` (`id`);

--
-- Filtros para la tabla `entrada_cafe`
--
ALTER TABLE `entrada_cafe`
  ADD CONSTRAINT `entrada_cafe_ibfk_1` FOREIGN KEY (`procedencia`) REFERENCES `finca` (`id`);

--
-- Filtros para la tabla `secado_limpieza`
--
ALTER TABLE `secado_limpieza`
  ADD CONSTRAINT `secado_limpieza_ibfk_1` FOREIGN KEY (`cafe_almacen`) REFERENCES `almacen` (`id`),
  ADD CONSTRAINT `secado_limpieza_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipo_secado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
