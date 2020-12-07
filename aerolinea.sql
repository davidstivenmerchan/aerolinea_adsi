-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 15:19:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aerolinea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aeropuerto`
--

CREATE TABLE `aeropuerto` (
  `id_aeropuerto` int(11) NOT NULL,
  `nom_aeropuerto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aeropuerto`
--

INSERT INTO `aeropuerto` (`id_aeropuerto`, `nom_aeropuerto`) VALUES
(1, 'Aeropuerto de Zurich (Suiza)'),
(2, 'Aeropuerto Internacional de Hong Kong (China)'),
(3, 'Aeropuerto Internacional de Incheon (Corea del Sur)'),
(4, 'Aeropuerto de Changi (Singapur)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id_clase` int(11) NOT NULL,
  `nom_clase` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id_clase`, `nom_clase`) VALUES
(1, 'Economica'),
(2, 'Premium Economy'),
(3, 'Ejecutiva/Business'),
(4, 'Primera Clase');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_de_pago`
--

CREATE TABLE `forma_de_pago` (
  `id_for_pag` int(11) NOT NULL,
  `nom_for_pag` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_docu`
--

CREATE TABLE `tipo_docu` (
  `id_tip_docu` int(11) NOT NULL,
  `nom_tip_docu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_docu`
--

INSERT INTO `tipo_docu` (`id_tip_docu`, `nom_tip_docu`) VALUES
(1, 'Cedula De Ciudadania'),
(2, 'Tarjeta De Identidad'),
(3, 'Cedula Extranjera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_user`
--

CREATE TABLE `tipo_user` (
  `id_tip_user` int(11) NOT NULL,
  `nom_tip_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_user`
--

INSERT INTO `tipo_user` (`id_tip_user`, `nom_tip_user`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiquetes`
--

CREATE TABLE `tiquetes` (
  `id_tiquete` int(11) NOT NULL,
  `id_vuelo` int(12) NOT NULL,
  `documento` int(12) NOT NULL,
  `num_pasajeros` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` int(12) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nom_user` varchar(30) NOT NULL,
  `ape_user` varchar(30) NOT NULL,
  `celular` bigint(1) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(15) NOT NULL,
  `id_tip_docu` int(11) NOT NULL,
  `id_tip_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `usuario`, `nom_user`, `ape_user`, `celular`, `direccion`, `correo`, `clave`, `id_tip_docu`, `id_tip_user`) VALUES
(1108, 'stefa21', 'Estefania', 'Herrera', 3219542300, 'Carrera 5 ibague', 'eherrera@misena.edu.co', 'tefa21', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id_vuelo` int(12) NOT NULL,
  `hora_salida` time NOT NULL,
  `hora_llegada` time NOT NULL,
  `aeropuerto_salida` int(11) NOT NULL,
  `aeropuerto_llegada` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id_vuelo`, `hora_salida`, `hora_llegada`, `aeropuerto_salida`, `aeropuerto_llegada`, `estado`) VALUES
(987, '09:15:00', '01:12:00', 2, 3, 'por salir'),
(1234, '09:08:00', '01:08:00', 4, 2, 'retrasado'),
(12345, '23:22:00', '02:30:00', 1, 4, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aeropuerto`
--
ALTER TABLE `aeropuerto`
  ADD PRIMARY KEY (`id_aeropuerto`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id_clase`);

--
-- Indices de la tabla `forma_de_pago`
--
ALTER TABLE `forma_de_pago`
  ADD PRIMARY KEY (`id_for_pag`);

--
-- Indices de la tabla `tipo_docu`
--
ALTER TABLE `tipo_docu`
  ADD PRIMARY KEY (`id_tip_docu`);

--
-- Indices de la tabla `tipo_user`
--
ALTER TABLE `tipo_user`
  ADD PRIMARY KEY (`id_tip_user`);

--
-- Indices de la tabla `tiquetes`
--
ALTER TABLE `tiquetes`
  ADD PRIMARY KEY (`id_tiquete`),
  ADD KEY `documento` (`documento`),
  ADD KEY `id_clase` (`id_clase`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `id_tip_docu` (`id_tip_docu`),
  ADD KEY `id_tip_user` (`id_tip_user`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`id_vuelo`),
  ADD KEY `aeropuerto_salida` (`aeropuerto_salida`),
  ADD KEY `aeropuerto_llegada` (`aeropuerto_llegada`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aeropuerto`
--
ALTER TABLE `aeropuerto`
  MODIFY `id_aeropuerto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `id_clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `forma_de_pago`
--
ALTER TABLE `forma_de_pago`
  MODIFY `id_for_pag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_docu`
--
ALTER TABLE `tipo_docu`
  MODIFY `id_tip_docu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_user`
--
ALTER TABLE `tipo_user`
  MODIFY `id_tip_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tiquetes`
--
ALTER TABLE `tiquetes`
  MODIFY `id_tiquete` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tiquetes`
--
ALTER TABLE `tiquetes`
  ADD CONSTRAINT `tiquetes_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `usuario` (`documento`),
  ADD CONSTRAINT `tiquetes_ibfk_2` FOREIGN KEY (`id_clase`) REFERENCES `clase` (`id_clase`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tip_docu`) REFERENCES `tipo_docu` (`id_tip_docu`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_tip_user`) REFERENCES `tipo_user` (`id_tip_user`);

--
-- Filtros para la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD CONSTRAINT `vuelos_ibfk_1` FOREIGN KEY (`aeropuerto_salida`) REFERENCES `aeropuerto` (`id_aeropuerto`),
  ADD CONSTRAINT `vuelos_ibfk_2` FOREIGN KEY (`aeropuerto_llegada`) REFERENCES `aeropuerto` (`id_aeropuerto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
