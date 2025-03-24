-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2025 a las 14:08:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen2eval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--
CREATE DATABASE IF NOT EXISTS `examen2eval` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `examen2eval`;

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `prestado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `autor`, `sinopsis`, `img`, `stock`, `prestado`) VALUES
(1, 'Cien años de soledad', 'Gabriel García Márquez', 'Crónica mágica de la familia Buendía en Macondo.', 'assets/1.jpg', 3, 0),
(2, '1984', 'George Orwell', 'Distopía sobre un régimen totalitario y la vigilancia extrema.', 'assets/2.jpg', 3, 0),
(3, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 'Las aventuras del ingenioso hidalgo y su escudero Sancho.', 'assets/3.jpg', 4, 0),
(4, 'Orgullo y prejuicio', 'Jane Austen', 'Romance y crítica social en la Inglaterra del siglo XIX.', 'assets/4.jpg', 6, 0),
(5, 'El Principito', 'Antoine de Saint-Exupéry', 'Un niño de otro planeta nos enseña el sentido de la vida.', 'assets/5.jpg', 7, 0),
(6, 'Matar a un ruiseñor', 'Harper Lee', 'Historia sobre la justicia y la discriminación en EE.UU.', 'assets/6.jpg', 4, 0),
(7, 'Crimen y castigo', 'Fiódor Dostoyevski', 'Un joven asesino atormentado por la culpa y la redención.', 'assets/7.jpg', 3, 0),
(8, 'El Hobbit', 'J.R.R. Tolkien', 'Aventuras épicas de Bilbo Bolsón en la Tierra Media.', 'assets/8.jpg', 5, 0),
(9, 'Fahrenheit 451', 'Ray Bradbury', 'Sociedad futura donde los libros están prohibidos.', 'assets/9.jpg', 4, 0),
(10, 'Los juegos del hambre', 'Suzanne Collins', 'Una lucha por la supervivencia en una sociedad opresiva.', 'assets/10.jpg', 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'Laura', 'González', 'laura.gonzalez@email.com', '1234'),
(2, 'Carlos', 'Fernández', 'carlos.fernandez@email.com', '1234'),
(3, 'María', 'López', 'maria.lopez@email.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
