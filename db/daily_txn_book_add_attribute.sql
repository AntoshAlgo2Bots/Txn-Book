-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: daily_txn_book
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `add_attribute`
--

DROP TABLE IF EXISTS `add_attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `add_attribute` (
  `s_no` int NOT NULL AUTO_INCREMENT,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  `main_head_name` varchar(45) DEFAULT NULL,
  `sub_main_name` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_attribute`
--

LOCK TABLES `add_attribute` WRITE;
/*!40000 ALTER TABLE `add_attribute` DISABLE KEYS */;
INSERT INTO `add_attribute` VALUES (11,'admin','2024-10-09','BF','BF','2024-10-09','',NULL,NULL),(12,'admin','2024-10-09','FUEL','FUEL','2024-10-09','',NULL,NULL),(13,'admin','2024-10-09','OFFICE RUNNING','STAFF WELFARE','2024-10-09','',NULL,NULL),(14,'asd','2024-10-09','CASH RECEIVED','COL HKB','2024-10-09','',NULL,NULL),(15,'asd','2024-10-09','ESIC','RAMESH NAGAR','2024-10-09','',NULL,NULL),(16,'admin','2024-10-09','SALARY','SALARY','2024-10-09','',NULL,NULL),(17,'admin','2024-10-09','HKB','DAYAVASTI','2024-10-09','',NULL,NULL),(18,'admin','2024-10-09','DVR','IP AJADPUR','2024-10-09','',NULL,NULL),(19,'admin','2024-10-09','SS','C-5','2024-10-09','',NULL,NULL),(20,'admin','2024-10-09','CASH','NAGI','2024-10-09','',NULL,NULL),(21,'admin','2024-10-09','DONATION','DMD','2024-10-09','',NULL,NULL),(22,'admin','2024-10-09','CD 9','DDA RSKP','2024-10-09','',NULL,NULL),(23,'admin','2024-10-09','DISP','DDA SAKET','2024-10-09','',NULL,NULL),(24,'admin','2024-10-09','FUEL & VM','PERS','2024-10-09','',NULL,NULL),(25,'admin','2024-10-09','DDA','ADV','2024-10-09','',NULL,NULL),(26,'admin','2024-10-09','OFFICE','CD-III','2024-10-09','',NULL,NULL),(27,'admin','2024-10-09','','KHANNA','2024-10-09','',NULL,NULL),(28,'admin','2024-10-09','','DDA ROHANI','2024-10-09','',NULL,NULL),(29,'admin','2024-10-09','','ESIC DISP','2024-10-09','',NULL,NULL),(30,'admin','2024-10-09','','DONATION','2024-10-09','',NULL,NULL),(31,'admin','2024-10-09','','SS','2024-10-09','',NULL,NULL),(32,'admin','2024-10-09','','MAHERPOIL','2024-10-09','',NULL,NULL),(33,'admin','2024-10-09','','SHASTRI NAGAR','2024-10-09','',NULL,NULL),(34,'admin','2024-10-09','','AVANTIKA','2024-10-09','',NULL,NULL),(35,'admin','2024-10-09','','DIV 6','2024-10-09','',NULL,NULL),(36,'admin','2024-10-09','','STAITNORY','2024-10-09','',NULL,NULL),(37,'admin','2024-10-09','','JAHANGIR PURI BADLI','2024-10-09','',NULL,NULL);
/*!40000 ALTER TABLE `add_attribute` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-09 20:05:15
