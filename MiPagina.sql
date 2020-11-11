-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2020 a las 06:12:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MiPagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cedula` varchar(20) NOT NULL,
  `ti` varchar(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `clave` text NOT NULL,
  `celular` varchar(20) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cedula`, `ti`, `nick`, `clave`, `celular`, `nombres`, `apellidos`, `status`, `email`) VALUES
('12341234', 'CC', 'Moderador', '1234', '573186610404', 'Daniel ', 'Montenegro', 9, 'danielmontenegro1@gmail.com'),
('1234193470', 'CC', 'Admin', 'admin', '573185313379', 'Victor Alfonso', 'Calvache Motoa', 1, 'victorcalvache1@gmail.com'),
('12345678', 'CC', 'Father', 'admin', '573172114618', 'Jose Alfonso', 'Calvache Palta', 5, 'alfonsocalvache61@gmail.com'),
('123456789', 'CC', 'pruebas', '12345', '5731833333', 'asd', 'asd', 4, 'pruebas@bingo.com'),
('31969450', 'CC', 'Teresa', '2020', '573188021440', 'Teresa', 'Motoa Ortiz', 2, 'teres0926@hotmail.com'),
('543211', 'CC', 'wilfredo', '0926', '573134132', 'wilfredo ', 'motoa ortiz', 5, 'daadassd@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `cod_factura` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `cod_vendedor` varchar(11) NOT NULL,
  `cedula_cliente` varchar(20) NOT NULL,
  `fecha_venta` date NOT NULL,
  `nombre_cliente` varchar(30) NOT NULL,
  `comentarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`cod_factura`, `id_empresa`, `cod_vendedor`, `cedula_cliente`, `fecha_venta`, `nombre_cliente`, `comentarios`) VALUES
(1, 3, '2020', '55555555', '2020-07-03', 'Jose Dominguez', ''),
(2, 2, '2020', '23123', '2020-07-03', 'Bastidas SA', 'sdasdasd'),
(3, 3, '2020', '4321', '2020-07-03', 'Juan Jose Velez', 'sdasdasd'),
(5, 3, '2020', '11115994', '2020-07-06', 'BartiHogar S.A', 'dasds'),
(6, 3, '2020', '', '2020-07-10', '', ''),
(7, 3, '2020', '1234193470', '2020-07-10', 'Victor Calvache', 'Tapabocas, codigo TP-X'),
(8, 3, '2020', '111333444555', '2020-07-11', 'Deco Telecomunicaciones', 'Empresa de consumo masivo de Telecomunicaciones'),
(9, 3, '2020', '1111343435', '2020-07-15', 'Software TRD Inc', 'Empresa de Consumo masivo de software e e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cod_pedido` int(11) NOT NULL,
  `cod_factura` int(11) NOT NULL,
  `cod_producto` varchar(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_venta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`cod_pedido`, `cod_factura`, `cod_producto`, `cantidad`, `fecha_venta`) VALUES
(1, 1, '1191', 3, '0000-00-00 00:00:00'),
(2, 1, '1192', 4, '0000-00-00 00:00:00'),
(3, 2, '2450', 5, '0000-00-00 00:00:00'),
(4, 2, '2451', 2, '0000-00-00 00:00:00'),
(5, 2, '2452', 1, '0000-00-00 00:00:00'),
(6, 5, '1193', 5, '0000-00-00 00:00:00'),
(7, 5, '1194', 5, '0000-00-00 00:00:00'),
(8, 6, '1191', 1, '0000-00-00 00:00:00'),
(9, 6, '1192', 2, '0000-00-00 00:00:00'),
(10, 7, 'TP-X', 1, '0000-00-00 00:00:00'),
(11, 7, 'TP-X', 1, '2011-07-20 00:00:00'),
(12, 7, 'TP-X', 1, '2011-07-20 04:00:00'),
(13, 7, 'TP-X', 1, '2011-07-20 04:00:00'),
(14, 7, 'TP-X', 1, '2020-07-10 10:05:00'),
(15, 7, 'TP-X', 1, '2020-07-10 10:07:00'),
(16, 8, '1191', 2, '2020-07-11 02:13:00'),
(17, 8, '1192', 3, '2020-07-11 02:13:00'),
(18, 7, 'TP-X', 1, '2020-07-11 02:24:00'),
(19, 9, '1194', 2, '2020-07-14 08:42:00'),
(20, 9, '1195', 3, '2020-07-14 08:42:00'),
(21, 7, 'TP-X', 1, '2020-07-14 08:43:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` varchar(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `valor_neto` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL,
  `cantidad_ex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `id_empresa`, `descripcion`, `valor_neto`, `valor_venta`, `cantidad_ex`) VALUES
('1191', 3, 'AUDIFONOS', 1500, 4000, 0),
('1192', 3, 'AUDIFONOS MANO LIBRE', 2200, 6500, 0),
('1193', 3, 'AUDIFONOS MANO LIBRE AZULES', 2300, 6600, 0),
('1194', 3, 'AUDIFONOS MANO LIBRE BLUETOOH', 5500, 14900, 0),
('1195', 3, 'AUDIFONOS SENCILLOS', 1500, 3500, 0),
('2000', 3, 'MEMORIA USB DE 64GB', 25000, 40000, 0),
('2450', 2, 'CUADROS DE 1.40MT', 30000, 140000, 0),
('2451', 2, 'CUADROS DE 1.90MT', 40000, 170000, 0),
('2452', 2, 'CUADROS DE 90CM', 15000, 90000, 0),
('2453', 2, 'CUADROS DE DOBLE MARCO 1.60CM', 35000, 70000, 0),
('TP-X', 3, 'Tapabocas de Margot', 1500, 2500, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia_empresa`
--

CREATE TABLE `referencia_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `referencia_empresa`
--

INSERT INTO `referencia_empresa` (`id_empresa`, `nit`, `nombre`, `direccion`) VALUES
(1, '111111', 'MakroTecno S.A', 'Calle 5 # 10 - 11'),
(2, '2222222', 'Credi-Facil', 'Calle 15 # 10 - 20 Villa gorgona'),
(3, '33333333', 'TIVICOM', 'Calle 33E # 25 - 11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `cod_vendedor` varchar(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `dpto_trabajo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`cod_vendedor`, `cedula`, `dpto_trabajo`) VALUES
('05453', '543211', 'nada'),
('140', '123456789', 'Departamento de Pruebas'),
('2020', '1234193470', 'Gerencia de MT'),
('3001', '12341234', 'Gerencia de RRHH de Credi-Facil'),
('3002', '12345678', 'Supervisor de Cobros');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`cod_factura`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `cod_vendedor` (`cod_vendedor`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod_pedido`),
  ADD KEY `cod_factura` (`cod_factura`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `referencia_empresa`
--
ALTER TABLE `referencia_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`cod_vendedor`),
  ADD KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `cod_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `referencia_empresa`
--
ALTER TABLE `referencia_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cod_vendedor`) REFERENCES `vendedor` (`cod_vendedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `referencia_empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`cod_factura`) REFERENCES `factura` (`cod_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `referencia_empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `empleado` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
