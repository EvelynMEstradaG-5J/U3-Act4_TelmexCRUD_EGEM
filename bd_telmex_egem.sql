-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2021 a las 06:13:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_telmex_egem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `NoUsuario` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` bigint(13) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `FechaDeNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla "Usuario" - BDTelmex - Estrada Gallegos Evelyn M. - 5J';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`NoUsuario`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `FechaDeNacimiento`) VALUES
(1, 'Evelyn', 'Estrada', 1123456789, 'Colonia X, Calle X #1010, int. #01', '2004-07-24'),
(2, 'Juan', 'Perez', 2136547892, 'Colonia Y, Calle Y #2020, int. #02', '1989-11-11'),
(3, 'Daniela', 'Spalla', 6568632939, 'Colonia Z, Calle Z #3030, int. #03', '1999-04-21'),
(4, 'Eduardo', 'Espinoza', 7591235645, 'Colonia A, Calle A #4040, int. #04', '1989-01-28'),
(5, 'Steven', 'Universe', 4581239582, 'Colonia B, Calle B #5050, int. #05', '2002-08-09'),
(6, 'Evelyn Marisol', 'Estrada Gallegos', 7851239245, 'Parajes del Valle, Fortin De la Soledad #1307, int. #27', '2004-07-24'),
(8, 'Francisco', 'Suarez', 6561502332, 'Colonia C, Calle C #6060, int. #06', '1999-12-30'),
(9, 'Mario', 'Capistran', 7552301225, 'Colonia D, Calle D #7070, int. #07', '1990-04-02'),
(12, 'Jose Antonio', 'Badia Pazos', 6568441212, 'Colonia E, Calle E #8080, int. #08', '1981-08-10'),
(13, 'Aibī', 'uwu', 8289395482, 'Colonia G, Calle G #1010, int. #10', '1991-02-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`NoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `NoUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
