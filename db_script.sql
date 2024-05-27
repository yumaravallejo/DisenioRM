-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: monorail.proxy.rlwy.net    Database: railway
-- ------------------------------------------------------
-- Server version	8.4.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `equipos`
--

DROP TABLE IF EXISTS `equipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipos` (
  `idequipos` int NOT NULL AUTO_INCREMENT,
  `nomequipo` varchar(45) DEFAULT NULL,
  `img_equipo` varchar(60) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idequipos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos`
--

LOCK TABLES `equipos` WRITE;
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` VALUES (1,'Real Madrid CF','img/equipos/escudo.png','España'),(2,'Barcelona FC','img/equipos/barcelona.png','España'),(3,'Borussia Dortmund','img/equipos/borussia.png','Alemania'),(4,'Real Betis Balompié','img/equipos/betis.png','España'),(5,'Athlético de Madrid','img/equipos/athletico-madrid.png','España');
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos`
--

DROP TABLE IF EXISTS `partidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos` (
  `idpartidos` int NOT NULL AUTO_INCREMENT,
  `fecha_partido` datetime DEFAULT NULL,
  `id_local` int DEFAULT NULL,
  `id_visitante` int DEFAULT NULL,
  `nom_competicion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpartidos`),
  KEY `id_local_idx` (`id_local`),
  KEY `idequipos_idx` (`id_visitante`),
  CONSTRAINT `fk_local` FOREIGN KEY (`id_local`) REFERENCES `equipos` (`idequipos`),
  CONSTRAINT `fk_visitante` FOREIGN KEY (`id_visitante`) REFERENCES `equipos` (`idequipos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos`
--

LOCK TABLES `partidos` WRITE;
/*!40000 ALTER TABLE `partidos` DISABLE KEYS */;
INSERT INTO `partidos` VALUES (1,'2024-06-01 21:00:00',1,3,'Champions League'),(2,'2024-06-11 18:00:00',1,2,'LaLiga'),(3,'2024-06-19 21:00:00',4,1,'LaLiga'),(4,'2024-06-25 16:00:00',1,5,'LaLiga');
/*!40000 ALTER TABLE `partidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_producto` text,
  `img_producto` varchar(60) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `descrip_producto` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Camiseta Real Madrid','img/productos/15Madrid.png',90.00,'Casmiseta Adidas Jugador Real Madrid 2da equipación 23/24'),(2,'Mochila Real Madrid','img/productos/mochilaMadrid.png',25.00,'Mochila Escolar Real Madrid'),(3,'Estuche Real Madrid','img/productos/estucheMadrid.png',15.50,'Estuche Blanco de Real Madrid'),(4,'Abrigo Real Madrid','img/productos/abrigoMadrid.png',120.00,'Abrigo para invierno de Real Madrid Oficial'),(5,'Camiseta Real Madrid','img/productos/mbappeMadrid.png',75.00,'Camiseta Adidas Jugador Real Madrid 1ra equipación 24/25'),(6,'Camiseta Real Madrid','img/productos/camiseta3Madrid.png',95.00,'Camiseta Adidas Jugador Real Madrid 2da equipación 23/24'),(7,'Chándal Real Madrid','img/productos/chandalMadrid.png',170.00,'Chándal completo Adidas Real Madrid'),(8,'Short Real Madrid','img/productos/shortMadrid.png',50.00,'Short Adidas Real Madrid Jugador'),(9,'Pelota de fútbol Real Madrid','img/productos/pelotaMadrid.png',35.00,'Pelota fútbol césped Real Madrid '),(10,'Pelota de fútbol sala Real Madrid','img/productos/pelotaSalaMadrid.png',25.00,'Pelota fútbol sala Real Madrid Adidas'),(11,'Chicles Ancelotti','img/productos/chiclesMadrid.png',5.99,'Chicles de Entrenador Ancelotti Orbit Hierbabuena'),(12,'Silla Alaba Champions','img/productos/sillaAlabaMadrid.png',15.99,'Silla que cogió Alaba al ganar la champions'),(13,'Puro Ancelotti','img/productos/puroMadrid.png',3.50,'Puro que se toma Ancelotti siempre que el Madrid gana'),(14,'Bufanda Toni Kroos','img/productos/kroosMadrid.png',12.50,'Bufanda de Toni Kroos 8');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nomusuario` text,
  `emailusuario` text,
  `contrausuario` text,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'nerea','nerealopez@gmail.com','123456'),(3,'nerea','nerealopez@gmail.com','123456'),(4,'javi','javiter@gmail.com','123456'),(5,'maria','maria@gmail.com','123456'),(6,'marcos','marcos@gmail.com','123456'),(7,'cristina','cristina@gmail.com','123456'),(8,'yumara12','yumara12@gmail.com','123456'),(9,'yumara23','yumara23@gmail.com','123456'),(11,'mami','mami@gmail.com','123456'),(12,'yumara123','yumara123@gmail.com','1234567'),(13,'yumara1234','yumara1234@gmail.com','1234567'),(14,'yumara12345','yumara12345@gmail.com','1234567'),(15,'yumara1','yumara1@gmail.com','123456'),(16,'yumaravalle','yumaravalle@gmail.com','123456'),(17,'alejandro','ale@gmail.com','1234567'),(18,'yumara','yumara@gmail.com','123456');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-27 16:13:36
