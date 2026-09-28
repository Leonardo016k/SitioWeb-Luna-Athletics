-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2024 a las 22:09:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleriamary`
--
CREATE DATABASE IF NOT EXISTS `papeleriamary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `papeleriamary`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_com` int(11) NOT NULL,
  `id_usu` int(11) DEFAULT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `id_ser` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `pre_pro` int(11) DEFAULT NULL,
  `for_pag` varchar(25) DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `cambio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_com`, `id_usu`, `id_pro`, `id_ser`, `cantidad`, `pre_pro`, `for_pag`, `pago`, `total`, `cambio`) VALUES
(1, 1, 1, NULL, 2, 15, 'Tarjeta de credito', 30, NULL, NULL),
(2, 2, 2, NULL, 10, 5, 'Efectivo', 50, NULL, NULL),
(3, 3, 3, NULL, 1, 100, 'Transferencia', 100, NULL, NULL),
(4, 4, 4, NULL, 3, 120, 'Efectivo', 360, NULL, NULL),
(5, 5, 5, NULL, 1, 299, 'Tarjeta de credito', 299, NULL, NULL),
(6, 6, 6, NULL, 5, 18, 'Efectivo', 90, NULL, NULL),
(7, 7, 7, NULL, 2, 38, 'Transferencia', 76, NULL, NULL),
(8, 8, 8, NULL, 100, 2, 'Efectivo', 200, NULL, NULL),
(9, 9, 8, NULL, 3, 2, 'Tarjeta de credito', 75, NULL, NULL),
(10, 10, 9, NULL, 1, 25, 'Efectivo', 30, NULL, NULL),
(11, 1, 1, NULL, 2, 15, 'Tarjeta de credito', 30, NULL, NULL),
(12, 2, 2, NULL, 10, 5, 'Efectivo', 50, NULL, NULL),
(13, 3, 3, NULL, 1, 100, 'Transferencia', 100, NULL, NULL),
(14, 4, 4, NULL, 3, 120, 'Efectivo', 360, NULL, NULL),
(15, 5, 5, NULL, 1, 299, 'Tarjeta de credito', 299, NULL, NULL),
(16, 6, 6, NULL, 5, 18, 'Efectivo', 90, NULL, NULL),
(17, 7, 7, NULL, 2, 38, 'Transferencia', 76, NULL, NULL),
(18, 8, 8, NULL, 100, 2, 'Efectivo', 200, NULL, NULL),
(19, 9, 8, NULL, 3, 2, 'Tarjeta de credito', 75, NULL, NULL),
(20, 10, 9, NULL, 1, 25, 'Efectivo', 30, NULL, NULL);

--
-- Disparadores `compras`
--
DELIMITER $$
CREATE TRIGGER `before_insert_compras` BEFORE INSERT ON `compras` FOR EACH ROW BEGIN
    
    SET NEW.pre_pro = (SELECT pre_pro FROM productos WHERE id_pro = NEW.id_pro);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int(11) NOT NULL,
  `nom_pro` varchar(64) DEFAULT NULL,
  `can_pro` int(11) DEFAULT NULL,
  `pre_pro` int(11) DEFAULT NULL,
  `oferta` varchar(5) DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `nom_pro`, `can_pro`, `pre_pro`, `oferta`) VALUES
(1, 'Cuaderno Scribe de Raya', 50, 15, 'NO'),
(2, 'Boligrafo Bic', 100, 5, 'SI'),
(3, 'Caja de Colores Bacoris', 20, 100, 'NO'),
(4, 'Block de Hojas Blancas', 10, 120, 'NO'),
(5, 'Caja de Lapices', 15, 299, 'SI'),
(6, 'Pegamento Dixol', 30, 18, 'SI'),
(7, 'Corrector Liquido Bic', 40, 38, 'NO'),
(8, 'Hojas de Colores', 200, 2, 'SI'),
(9, 'Corrector en Cinta', 25, 25, 'NO'),
(10, 'Tijeras', 35, 30, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_ser` int(11) NOT NULL,
  `nom_ser` varchar(64) DEFAULT NULL,
  `can_ser` int(11) DEFAULT NULL,
  `pre_ser` int(11) DEFAULT NULL,
  `oferta` varchar(5) DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_ser`, `nom_ser`, `can_ser`, `pre_ser`, `oferta`) VALUES
(1, 'RFC', 100, 500, 'NO'),
(2, 'CURP', 150, 200, 'SI'),
(3, 'Etiquetas', 200, 50, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nom_usu` varchar(64) DEFAULT NULL,
  `ape_pat_usu` varchar(64) DEFAULT NULL,
  `ape_mat_usu` varchar(64) DEFAULT NULL,
  `email_usu` varchar(80) DEFAULT NULL,
  `pas_usu` varchar(128) DEFAULT NULL,
  `tipo_usu` varchar(20) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nom_usu`, `ape_pat_usu`, `ape_mat_usu`, `email_usu`, `pas_usu`, `tipo_usu`, `genero`, `fecha`, `direccion`, `telefono`, `estado_civil`) VALUES
(1, 'Juan', 'Perez', 'Garcia', 'juan.perez@example.com', 'password123', 'Admin', 'Masculino', '1990-05-14', 'Av. Reforma 123, Ciudad de Mexico', '5551234567', 'Soltero'),
(2, 'Maria', 'Lopez', 'Martinez', 'maria.lopez@example.com', 'pass456', 'Usuario', 'Femenino', '1985-03-22', 'Calle Constitucion 456, Guadalajara', '5559876543', 'Casada'),
(3, 'Carlos', 'Hernandez', 'Ramirez', 'carlos.hernandez@example.com', 'car1234', 'Usuario', 'Masculino', '1993-11-30', 'Carrera 7 #89, Monterrey', '5555678901', 'Soltero'),
(4, 'Ana', 'Rodriguez', 'Torres', 'ana.rodriguez@example.com', 'ana5678', 'Usuario', 'Femenino', '1995-07-08', 'Calle Juarez 12, Puebla', '5551230987', 'Soltera'),
(5, 'Luis', 'Fernandez', 'Morales', 'luis.fernandez@example.com', 'luispass', 'Admin', 'Masculino', '1988-02-16', 'Av. Independencia 34, Tijuana', '5558901234', 'Casado'),
(6, 'Laura', 'Gomez', 'Vega', 'laura.gomez@example.com', 'laura89', 'Usuario', 'Femenino', '1992-06-10', 'Calle Hidalgo 56, Cancun', '5552345678', 'Casada'),
(7, 'Jorge', 'Martinez', 'Flores', 'jorge.martinez@example.com', 'jorge77', 'Admin', 'Masculino', '1990-09-21', 'Av. Insurgentes 67, Leon', '5558765432', 'Viudo'),
(8, 'Lucia', 'Ortiz', 'Sanchez', 'lucia.ortiz@example.com', 'lucia12', 'Usuario', 'Femenino', '1997-01-15', 'Calle Morelos 98, Merida', '5554567890', 'Soltera'),
(9, 'Miguel', 'Castro', 'Diaz', 'miguel.castro@example.com', 'miguel99', 'Usuario', 'Masculino', '1993-10-05', 'Carrera 4 #23, Chihuahua', '5556789012', 'Soltero'),
(10, 'Elena', 'Vargas', 'Cruz', 'elena.vargas@example.com', 'elena20', 'Usuario', 'Femenino', '1989-04-12', 'Av. Juarez 45, Toluca', '5550987654', 'Casada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_usu` (`id_usu`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `fk_id_ser` (`id_ser`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_ser`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_ser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `productos` (`id_pro`),
  ADD CONSTRAINT `fk_id_ser` FOREIGN KEY (`id_ser`) REFERENCES `servicios` (`id_ser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
