-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2020 a las 20:01:21
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CONTROL_PARAMETRO`
--

CREATE TABLE `CONTROL_PARAMETRO` (
  `ID` int(11) NOT NULL,
  `DETALLE_MISION_ID` int(11) NOT NULL,
  `PARAMETRO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DATA`
--

CREATE TABLE `DATA` (
  `ID` int(11) NOT NULL,
  `PERSONA_ID` int(11) NOT NULL,
  `TIMESTAMP` timestamp NULL DEFAULT current_timestamp(),
  `DESCRIPCION` varchar(255) DEFAULT NULL,
  `DETALLE_MISION_ID` int(11) NOT NULL,
  `TIPO_SOLICITUD` varchar(45) DEFAULT NULL,
  `USUARIO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DETALLE_MISION`
--

CREATE TABLE `DETALLE_MISION` (
  `ID` int(11) NOT NULL,
  `MISION_ID` int(11) NOT NULL,
  `FECHA_MEDICION` timestamp NULL DEFAULT current_timestamp(),
  `PH` float DEFAULT NULL,
  `TDS` float DEFAULT NULL,
  `TEMPERATURA` float DEFAULT NULL,
  `EC` float DEFAULT NULL,
  `TURBIDEZ` float DEFAULT NULL,
  `REDOX` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MANTENIMIENTO_SENSOR`
--

CREATE TABLE `MANTENIMIENTO_SENSOR` (
  `ID` int(11) NOT NULL,
  `SENSOR_ID` int(11) NOT NULL,
  `FECHA_MANTENIMIENTO` datetime DEFAULT NULL,
  `TIPO_MANTENIMIENTO` varchar(45) DEFAULT NULL,
  `DESCRIPCION` varchar(250) DEFAULT NULL,
  `RESULTADO` varchar(15) DEFAULT NULL,
  `TIMESTAMP` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MISION`
--

CREATE TABLE `MISION` (
  `ID` int(11) NOT NULL,
  `USUARIO_ID` int(11) NOT NULL,
  `NOMBRE_MISION` varchar(45) DEFAULT NULL,
  `LUGAR_MISION` varchar(45) DEFAULT NULL,
  `TIPO_MEDICION` varchar(45) DEFAULT NULL,
  `DESCRIPCION_MISION` varchar(45) DEFAULT NULL,
  `LONGITUD` double DEFAULT NULL,
  `LATITUD` double DEFAULT NULL,
  `FECHA_INICIO` datetime DEFAULT NULL,
  `FECHA_FIN` datetime DEFAULT NULL,
  `ESTADO` varchar(45) NOT NULL,
  `TIMESTAMP` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PARAMETRO`
--

CREATE TABLE `PARAMETRO` (
  `ID` int(11) NOT NULL,
  `NOMBRE_PARAMETRO` varchar(45) DEFAULT NULL,
  `VALOR_OPTIMO` int(5) DEFAULT NULL,
  `VALOR_RIESGO` int(5) DEFAULT NULL,
  `UNIDAD` varchar(5) NOT NULL,
  `FECHA_CREACION` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `PARAMETRO`
--

INSERT INTO `PARAMETRO` (`ID`, `NOMBRE_PARAMETRO`, `VALOR_OPTIMO`, `VALOR_RIESGO`, `UNIDAD`, `FECHA_CREACION`) VALUES
(1, 'pH', 7, 2, 'mrtro', '2020-03-15 21:10:40'),
(2, 'EC', 0, 2500, 'mS/cm', '2020-03-15 22:23:00'),
(3, 'Turbidez', 1, 2, 'NTF', '2020-03-15 22:30:38'),
(4, 'TDS', 500, 900, 'ppm', '2020-03-15 22:50:30'),
(5, 'Temperatura', 18, 89, '°C', '2020-03-15 22:50:49'),
(6, 'ORP', 400, 9000, 'mV', '2020-03-15 22:52:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PERSONA`
--

CREATE TABLE `PERSONA` (
  `ID` int(11) NOT NULL,
  `TIPO_PERSONA` varchar(20) NOT NULL,
  `ESTADO` varchar(15) DEFAULT NULL,
  `CORREO` varchar(45) DEFAULT NULL,
  `NIT` int(25) DEFAULT NULL,
  `NOMBRE_EMPRESA` varchar(45) DEFAULT NULL,
  `REPRESENTANTE_EMPRESA` varchar(45) DEFAULT NULL,
  `RAZON_SOCIAL` varchar(45) DEFAULT NULL,
  `TIPO_ACTIVIDAD` varchar(45) DEFAULT NULL,
  `REGIMEN` varchar(45) DEFAULT NULL,
  `NATURALEZA` varchar(45) DEFAULT NULL,
  `TIPO_DOCUMENTO` varchar(45) DEFAULT NULL,
  `NUMERO_DOCUMENTO` varchar(45) DEFAULT NULL,
  `NOMBRE_1` varchar(45) DEFAULT NULL,
  `NOMBRE_2` varchar(45) DEFAULT NULL,
  `APELLIDO_1` varchar(45) DEFAULT NULL,
  `APELLIDO_2` varchar(45) DEFAULT NULL,
  `TELEFONO_1` int(15) DEFAULT NULL,
  `TELEFONO_2` int(15) DEFAULT NULL,
  `DIRECCION` varchar(100) DEFAULT NULL,
  `TIMESTAMP` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `PERSONA`
--

INSERT INTO `PERSONA` (`ID`, `TIPO_PERSONA`, `ESTADO`, `CORREO`, `NIT`, `NOMBRE_EMPRESA`, `REPRESENTANTE_EMPRESA`, `RAZON_SOCIAL`, `TIPO_ACTIVIDAD`, `REGIMEN`, `NATURALEZA`, `TIPO_DOCUMENTO`, `NUMERO_DOCUMENTO`, `NOMBRE_1`, `NOMBRE_2`, `APELLIDO_1`, `APELLIDO_2`, `TELEFONO_1`, `TELEFONO_2`, `DIRECCION`, `TIMESTAMP`) VALUES
(30, 'JURIDICA', 'Inactivo', 'UPortable@U', 2019, 'UPortable', 'UPortable', 'UPortable', 'UPortable', 'UPortable', 'UPortable', 'NIT', NULL, NULL, NULL, NULL, NULL, 2020, 2020, 'UPortable', '2020-03-21 00:49:56'),
(31, 'NATURAL', 'Inactivo', 'angel.bedoyao@campusucc.edu.co', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CC', '12121', '2WD', 'WDAD', 'DWAWD', 'DWA', 2323, 232, 'AWDDAWD', '2020-03-21 01:49:09'),
(32, 'JURIDICA', 'Inactivo', 'angel.bedoyao@campusucc.edu.co', 23232, 'DASDDA', 'DAWDAWD', 'WDAWDAW', 'DAWDA', 'DAWD', 'WDAWDAW', 'NIT', NULL, NULL, NULL, NULL, NULL, 22323, 2332, 'DWWADWAD', '2020-03-21 01:49:32'),
(39, 'NATURAL', 'Inactivo', 'JSON@JSON.COM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CC', '123445', 'JSON', 'JSON', 'JSON', 'JSON', 456, 456, 'JSON CLL12', '2020-03-23 04:27:30'),
(41, 'JURIDICA', 'Inactivo', 'empresademo@sas.co', 23456454, 'EMPRESA 1', 'Legal Covid', 'NO SE', 'NO SE ', 'COMUN', 'NO SE', 'NIT', NULL, NULL, NULL, NULL, NULL, 456767, 67676764, 'cll 23 cra 45', '2020-03-27 21:06:00'),
(67, 'NATURAL', 'Inactivo', 'angel@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CC', '12345', 'Angel', 'Daniel', 'Bedoya', 'Ortega', 7899090, 312345454, 'cl 45 cre45-34b', '2020-04-08 05:28:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SENSOR`
--

CREATE TABLE `SENSOR` (
  `ID` int(11) NOT NULL,
  `RANGO MEDICION` varchar(45) DEFAULT NULL,
  `PRECISION_MEDICION` varchar(15) DEFAULT NULL,
  `ESTADO_SENSOR` varchar(45) DEFAULT NULL,
  `PARAMETRO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(25) DEFAULT NULL,
  `APELLIDO` varchar(25) DEFAULT NULL,
  `ROL` varchar(45) DEFAULT NULL,
  `USUARIO` varchar(45) DEFAULT NULL,
  `PASSWORD` text DEFAULT NULL,
  `CORREO` varchar(45) DEFAULT NULL,
  `ESTADO` varchar(25) NOT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`ID`, `NOMBRE`, `APELLIDO`, `ROL`, `USUARIO`, `PASSWORD`, `CORREO`, `ESTADO`, `TIMESTAMP`) VALUES
(9, 'Angel', 'Bedoya', 'Administrador', 'angel.bedoyao', '$2y$10$B8YEry7PtlBCDnJYL25ay./cwLO/CFLofxuk1Xcb6ZoOL7k0KeLa2', 'angel@hotmail.com', 'Activo', '2020-04-11 22:16:12'),
(10, 'Daniel', 'Ortega', 'Administrador', 'angel.bedoyaoo', '$2y$10$cPh9FIvVN4By.nmBY86iH.0chWtFkM9gb8QZ9jSW0RKPsUAxS9HJy', 'daniel@hotmail.com', 'Activo', '2020-04-11 23:15:22'),
(11, 'Ortega', 'Bedoya', 'Operario', 'daniel.ortega', '$2y$10$5kw067uoilYYnLgXd/lmWe/ShIYn2hf/d//rX0lPZ3NvVwebd54.W', 'ortega@hotmail.com', 'Activo', '2020-04-12 00:07:38'),
(12, 'Admin', 'Admin', 'Administrador', 'angel.admin', '$2y$10$ceDCoaM6CGpbIbCE0AlIxOFjSEveX44UWT2AAzs0FtEuRNz6AagBu', 'admin@hotmail.com', 'Activo', '2020-04-12 00:08:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CONTROL_PARAMETRO`
--
ALTER TABLE `CONTROL_PARAMETRO`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_CONTROL_PARAMETRO_DETALLE_MISION1_idx` (`DETALLE_MISION_ID`),
  ADD KEY `fk_CONTROL_PARAMETRO_PARAMETRO1_idx` (`PARAMETRO_ID`);

--
-- Indices de la tabla `DATA`
--
ALTER TABLE `DATA`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_DATA_CLIENTE1_idx` (`PERSONA_ID`),
  ADD KEY `fk_DATA_DETALLE_MISION1_idx` (`DETALLE_MISION_ID`),
  ADD KEY `fk_DATA_USUARIO1_idx` (`USUARIO_ID`);

--
-- Indices de la tabla `DETALLE_MISION`
--
ALTER TABLE `DETALLE_MISION`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_DETALLE_MISION_MISION1_idx` (`MISION_ID`);

--
-- Indices de la tabla `MANTENIMIENTO_SENSOR`
--
ALTER TABLE `MANTENIMIENTO_SENSOR`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_MANTENIMIENTO_SENSOR_SENSOR1_idx` (`SENSOR_ID`);

--
-- Indices de la tabla `MISION`
--
ALTER TABLE `MISION`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_MISION_USUARIO1_idx` (`USUARIO_ID`);

--
-- Indices de la tabla `PARAMETRO`
--
ALTER TABLE `PARAMETRO`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `PERSONA`
--
ALTER TABLE `PERSONA`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `SENSOR`
--
ALTER TABLE `SENSOR`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_SENSOR_PARAMETRO1_idx` (`PARAMETRO_ID`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CONTROL_PARAMETRO`
--
ALTER TABLE `CONTROL_PARAMETRO`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `DATA`
--
ALTER TABLE `DATA`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `DETALLE_MISION`
--
ALTER TABLE `DETALLE_MISION`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `MANTENIMIENTO_SENSOR`
--
ALTER TABLE `MANTENIMIENTO_SENSOR`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `MISION`
--
ALTER TABLE `MISION`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PARAMETRO`
--
ALTER TABLE `PARAMETRO`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `PERSONA`
--
ALTER TABLE `PERSONA`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `SENSOR`
--
ALTER TABLE `SENSOR`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `CONTROL_PARAMETRO`
--
ALTER TABLE `CONTROL_PARAMETRO`
  ADD CONSTRAINT `fk_CONTROL_PARAMETRO_DETALLE_MISION1` FOREIGN KEY (`DETALLE_MISION_ID`) REFERENCES `DETALLE_MISION` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CONTROL_PARAMETRO_PARAMETRO1` FOREIGN KEY (`PARAMETRO_ID`) REFERENCES `PARAMETRO` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `DATA`
--
ALTER TABLE `DATA`
  ADD CONSTRAINT `fk_DATA_CLIENTE1` FOREIGN KEY (`PERSONA_ID`) REFERENCES `PERSONA` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DATA_DETALLE_MISION1` FOREIGN KEY (`DETALLE_MISION_ID`) REFERENCES `DETALLE_MISION` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DATA_USUARIO1` FOREIGN KEY (`USUARIO_ID`) REFERENCES `USUARIO` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `DETALLE_MISION`
--
ALTER TABLE `DETALLE_MISION`
  ADD CONSTRAINT `fk_DETALLE_MISION_MISION1` FOREIGN KEY (`MISION_ID`) REFERENCES `MISION` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `MANTENIMIENTO_SENSOR`
--
ALTER TABLE `MANTENIMIENTO_SENSOR`
  ADD CONSTRAINT `fk_MANTENIMIENTO_SENSOR_SENSOR1` FOREIGN KEY (`SENSOR_ID`) REFERENCES `SENSOR` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `MISION`
--
ALTER TABLE `MISION`
  ADD CONSTRAINT `fk_MISION_USUARIO1` FOREIGN KEY (`USUARIO_ID`) REFERENCES `USUARIO` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `SENSOR`
--
ALTER TABLE `SENSOR`
  ADD CONSTRAINT `fk_SENSOR_PARAMETRO1` FOREIGN KEY (`PARAMETRO_ID`) REFERENCES `PARAMETRO` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
