-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2020 a las 18:42:23
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `id_vuelo` int(11) NOT NULL,
  `tiquetes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`documento`, `nombre`, `apellido`, `id_vuelo`, `tiquetes`) VALUES
(20169774, 'Carlos Jair', 'Tona Pericles', 23445, 1),
(35684254, 'Miku', 'Izayoi', 2332, 2),
(64149685, 'Kurumi', 'Tokisaki', 996, 3),
(80167550, 'Alice ', 'Zuberg', 996, 4),
(87515336, 'Eolyne', 'Herlentz', 23445, 5),
(100980890, 'Light ', 'Yagami', 996, 1),
(117985323, 'Jeffrey J.', 'Stivers', 44453, 6),
(245811548, 'Adolf', 'Hitler', 1013, 8),
(415269635, 'Juan Camilo', 'Perez Rodríguez', 1111, 2),
(546548646, 'Ana', 'Frank', 3342, 1),
(548729430, 'Thomas M.', 'Jarvis', 3342, 7),
(556525877, 'Tony ', 'Stark', 1013, 8),
(585896662, 'Mr. Robot', 'Android', 1013, 9),
(641568484, 'Cristiano', 'Ronaldo', 1013, 1),
(753124569, 'Gabriel', 'Miller', 2332, 5),
(756812553, 'Tobiichi', 'Origami', 2332, 2),
(789696969, 'Tanjiro', 'Kamado', 44453, 4),
(1002340430, 'Yatogami', 'Tohka', 44453, 5),
(1005690960, 'Kirigaya', 'Kazuto', 996, 3),
(1151690960, 'Kotori', 'Itsuka', 2332, 4),
(1587459965, 'Ichinose', 'Chizuru', 23445, 2),
(2145869699, 'Rikka', 'Takanashi', 3342, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_docu`
--

CREATE TABLE `tipo_docu` (
  `id_tip_docu` int(12) NOT NULL,
  `nom_tip_docu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_docu`
--

INSERT INTO `tipo_docu` (`id_tip_docu`, `nom_tip_docu`) VALUES
(1, 'Cedula Ciudadania'),
(2, 'Tarjeta de Identidad'),
(3, 'Registro Civil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_user`
--

CREATE TABLE `tipo_user` (
  `id_tip_user` int(12) NOT NULL,
  `nom_tip_user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_user`
--

INSERT INTO `tipo_user` (`id_tip_user`, `nom_tip_user`) VALUES
(1, 'Administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` int(15) UNSIGNED NOT NULL,
  `nom_user` varchar(60) NOT NULL,
  `ape_user` varchar(60) NOT NULL,
  `celular` int(14) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `id_tip_docu` int(12) NOT NULL,
  `id_tip_user` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nom_user`, `ape_user`, `celular`, `direccion`, `correo`, `clave`, `id_tip_docu`, `id_tip_user`) VALUES
(565675, 'David', 'Merchan', 312313, 'mz d casa 6 ', 'shun@misn', '6677', 1, 2),
(3121123, 'andres', 'moreno', 312313121, 'mz 5 casa 23 ', 'evermo@mis.dom', '123', 2, 2),
(66271236, 'Jose ', '', 31123131, 'Mz k b esas', 'kirito@mis', '9900', 1, 2),
(123123131, 'oscar', 'llanos', 314413123, 'Mz n casa 4 esmerala', 'ojllansoq@misn.com', '123456', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id_vuelo` int(5) NOT NULL DEFAULT 0,
  `hora_programada` time DEFAULT NULL,
  `destino` varchar(15) DEFAULT NULL,
  `aeropuerto_salida` varchar(15) DEFAULT NULL,
  `aeropuerto_llegada` varchar(15) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `lugar_salida` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id_vuelo`, `hora_programada`, `destino`, `aeropuerto_salida`, `aeropuerto_llegada`, `estado`, `lugar_salida`) VALUES
(996, '20:00:00', 'BOGOTÁ', 'Tegel (BER)', 'El Dorado (BOG)', 'salida', 'BERLÍN'),
(1013, '18:00:00', 'SEÚL, COREA', 'OLAYA HERRERA', 'Incheon (ICN)', 'Llegada', 'MEDELLÍN, COL'),
(1111, '17:30:00', 'ORLANDO', 'El Dorado (BOG)', 'Orlando (MCO)', 'Salida', 'BOGOTÁ,COL'),
(2332, '13:31:32', 'TOKIO, JAPÓN', 'El Dorado (BOG)', 'Narita (NRT)', 'salida', 'BOGOTÁ, COL'),
(3342, '06:00:00', 'PARÍS, FRANCIA', 'OLAYA HERRERA', 'París (CDG)', 'llegada', 'BOGOTÁ, COL'),
(23445, '04:40:50', 'TORONTO, CANADÁ', 'Narita (NRT)', 'Toronto (YYZ)', 'Llegada', 'TOKIO, JPN'),
(44453, '04:44:40', 'MADRID, ESPAÑA', 'CDMX (MEX)', 'Barajas (MAD)', 'salida', 'CDMX, MEX');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `id_vuelo` (`id_vuelo`);

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `fk_tip_docu` (`id_tip_docu`),
  ADD KEY `id_tip_user` (`id_tip_user`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`id_vuelo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelos` (`id_vuelo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_tip_docu` FOREIGN KEY (`id_tip_docu`) REFERENCES `tipo_docu` (`id_tip_docu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tip_user`) REFERENCES `tipo_user` (`id_tip_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
