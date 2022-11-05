-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-11-2022 a las 13:30:53
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `konecta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `referencia` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha_creacion`) VALUES
(2, 'papas', '12345', 5000, 45, 'papas', 0, '2022-11-05'),
(22, 'galletas', 'galletas dechocolate', 2000, 10, 'paqueteria', 10, '2022-11-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventarealizada`
--

DROP TABLE IF EXISTS `ventarealizada`;
CREATE TABLE IF NOT EXISTS `ventarealizada` (
  `idventas` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idventas`),
  KEY `idproducto_idx` (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventarealizada`
--

INSERT INTO `ventarealizada` (`idventas`, `idproducto`, `cantidad`) VALUES
(1, 22, 3),
(11, 22, 2),
(12, 22, 2),
(13, 22, 2),
(14, 22, 2),
(15, 22, 2),
(16, 22, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventarealizada`
--
ALTER TABLE `ventarealizada`
  ADD CONSTRAINT `idproducto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


/*   consulta que permite conocer cuál es el producto que más stock tiene. */
SELECT  nombre  from producto where stock in (SELECT max(producto.stock) FROM producto);

/*  consulta que permite conocer cuál es el producto más vendido. */
SELECT p.idproducto,p.nombre, SUM(v.cantidad) as cantidad ,p.stock as stockproductos,v.cantidad as cantidadvendida from ventarealizada v LEFT JOIN producto p on p.idproducto=v.idproducto group by p.idproducto ORDER BY SUM(v.cantidad) DESC LIMIT 1;