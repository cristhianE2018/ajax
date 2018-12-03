-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.31-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para usuarios
CREATE DATABASE IF NOT EXISTS `usuarios` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `usuarios`;

-- Volcando estructura para tabla usuarios.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla usuarios.personas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
REPLACE INTO `personas` (`ID_USUARIO`, `NOMBRE`, `EMAIL`) VALUES
	(1, 'samuel gomez Balderas', 'samuel.gomez.balderas@gmail.com'),
	(3, 'Cristhian Olivares Lara', 'olivas@gmail.com'),
	(4, 'Diana Flor Cruz Rosado', 'diana@gmail.com'),
	(5, 'Roberto Zamudio', 'robert@gmail.com');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
