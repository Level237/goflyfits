-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: goflyfits
-- ------------------------------------------------------
-- Server version	8.0.34-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `measures`
--

DROP TABLE IF EXISTS `measures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `measures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_shoulder_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sleeves` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_chest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hips` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_shoulder_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_shoulder_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_jacket_length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trouser_waist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crotch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thigh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `throuser_length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point_bust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sleeve_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `armHole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coat_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skirt_length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hight_hip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inseam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trouser_thigh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `measures`
--

LOCK TABLES `measures` WRITE;
/*!40000 ALTER TABLE `measures` DISABLE KEYS */;
INSERT INTO `measures` VALUES (1,'23','11','33','33','44','32','56','43','32','56','55','11','33','44',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-10-04 09:22:47','2024-10-04 09:22:47'),(2,NULL,NULL,NULL,NULL,'34','33','45','46','56',NULL,NULL,NULL,'22','11',NULL,'21','45','12','54','21','33','11','33','45','53','11','2024-10-04 11:10:39','2024-10-04 11:10:39');
/*!40000 ALTER TABLE `measures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-04 13:13:20
