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
-- Table structure for table `txn_book`
--

DROP TABLE IF EXISTS `txn_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `txn_book` (
  `transaction_no` int NOT NULL AUTO_INCREMENT,
  `transaction_date` varchar(45) DEFAULT NULL,
  `amount_type` varchar(45) DEFAULT NULL,
  `credit_amt` varchar(45) DEFAULT NULL,
  `debit_amt` varchar(45) DEFAULT NULL,
  `net_balace` varchar(45) DEFAULT NULL,
  `particuler_to` varchar(45) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  `main_head` varchar(45) DEFAULT NULL,
  `sub_head` varchar(45) DEFAULT NULL,
  `bill_cheque_no` varchar(45) DEFAULT NULL,
  `invoice_date` varchar(45) DEFAULT NULL,
  `invoice_no` varchar(45) DEFAULT NULL,
  `gst_no` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `form_status` varchar(45) NOT NULL DEFAULT 'SAVE',
  `currentUser` varchar(45) DEFAULT NULL,
  `currentTime` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transaction_no`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txn_book`
--

LOCK TABLES `txn_book` WRITE;
/*!40000 ALTER TABLE `txn_book` DISABLE KEYS */;
INSERT INTO `txn_book` VALUES (17,'2024-09-07','Credit','2000','',NULL,'Fuel','Fuel','donation','dayavasti','201','2201-02-22','101','123','abc','SUBMIT','admin',''),(18,'2024-09-14','Debit','','1000',NULL,'Fuel','Fuel','office','jahangir_puri_badli','202','2002-11-11','102','345','abc','SUBMIT','admin',NULL),(19,'2024-09-16','Debit','','3000',NULL,'Office Welfare','Travel','donation','jahangir_puri_badli','203','2002-11-15','103','678','abc','SUBMIT','admin',NULL),(20,'2024-09-20','Credit','4000','',NULL,'Office Puerpose','Travel','donation','dayavasti','204','2002-11-21','104','910','abc','SUBMIT','Antosh',NULL),(21,'2024-09-14','Credit','12000','',NULL,'Fuel','Fuel','dda','pers','105','2024-10-12','105','12342','abc','SUBMIT','admin',NULL),(22,'2024-09-14','Debit','','11000',NULL,'Fuel','Fuel','cash_received','staff_welfare','106','2024-09-20','106','12321','abc','SUBMIT','admin',NULL),(23,'2024-09-14','Debit','','13000',NULL,'Fuel','Fuel','cash_received','col_hkb','107','2024-09-12','107','123211','abc','SUBMIT','admin',NULL),(24,'2024-09-06','Credit','10000','',NULL,'Fuel','Fuel','cd_9','salary','108','2024-09-14','108','123211','abc','SUBMIT','Antosh',NULL),(25,'2024-09-12','Debit','','100000',NULL,'Fuel','Fuel','salary','ramesh_nagar','109','2024-09-14','101','12132','abc','SUBMIT','Antosh',NULL),(26,'2024-09-06','Debit','','20000',NULL,'Fuel','Fuel','office_running','col_hkb','102','2024-09-14','106','102','abc','SUBMIT','admin',NULL),(27,'2024-09-15','Credit','12000','',NULL,'Fuel','Fuel','ss','salary','110','2024-09-20','110','3432345','abc','SUBMIT','admin','2024-09-14 10:07:22'),(28,'2024-09-13','Credit','12000','',NULL,'Fuel','Fuel','office','khanna','111','2024-10-04','111','3232','abc','SUBMIT','admin','2024-09-14 10:11:43'),(29,'2024-09-21','Debit','','1200',NULL,'Fuel','Fuel','cd_9','ip_ajadpur','112','2024-09-14','112','87656789','ABC','SUBMIT','admin\'','2024-09-14 10:14:49'),(30,'2024-09-20','Debit','','2000',NULL,'Fuel','Fuel','office','dayavasti','112','2024-10-12','112','7656789876','ABC','SUBMIT','admin','2024-09-14 10:24:23'),(31,'2024-09-20','Credit','1000','',NULL,'Fuel','Fuel','office','khanna','113','2024-10-12','113','54323','abc','SUBMIT','admin','2024-09-14 10:25:36'),(32,'2024-09-22','Credit','2000','',NULL,'Fuel','Fuel','office','khanna','114','2024-10-12','114','423423','abc','SUBMIT','admin','2024-09-14 10:26:11'),(33,'2024-09-07','Debit','','3000',NULL,'Fuel','Fuel','dda','col_hkb','115','2024-10-10','115','123432','abc','SUBMIT','admin','2024-09-14 11:46:41'),(34,'2024-09-07','Debit','','13000',NULL,'Fuel','Fuel','office_running','bf','118','2024-09-13','118','7654345','ABC','SUBMIT','admin','2024-09-14 12:32:06'),(35,'2024-09-01','Credit','20000','',NULL,'Fuel','Fuel','dda','staff_welfare','101','2024-09-01','101','65476543','abc','SUBMIT','admin','2024-09-14 13:11:28'),(36,'2024-10-08','Credit','50000','',NULL,'Fuel','Fuel','salary','col_hkb','117','2024-09-11','117','28234','abc','SUBMIT','Antosh','2024-09-14 13:54:36'),(37,'2024-09-01','Credit','30000','',NULL,'Fuel','Fuel','bf','bf','119','2024-09-11','190','3564532','abc','SUBMIT','Antosh','2024-09-14 13:55:35'),(38,'','Credit','1000','',NULL,'Fuel','Fuel','office_running','fuel','101','2024-09-25','102','103','abc','SUBMIT','admin','2024-09-25 16:24:42'),(39,'','Credit','1000','',NULL,'Fuel','Fuel','cash_received','ramesh_nagar','101','2024-10-17','101','101','abc','SUBMIT','admin','2024-10-01 14:12:10'),(40,'','Debit','','1000',NULL,'Fuel','Fuel','fuel_vm','pers','101','2024-10-10','101','101','abc','SUBMIT','admin','2024-10-01 14:13:38'),(41,'2024-10-03','Debit','','1000',NULL,'Fuel','Fuel','office','donation','101','2024-10-01','101','101','abc','SUBMIT','admin','2024-10-01 14:48:42'),(42,'','Select one','','',NULL,'','','Select one','Select one','','','','','','SAVE','admin','2024-10-03 11:02:40'),(43,'','Credit','1000','',NULL,'Fuel','Fuel','donation','c_5','101','2024-10-03','101','101','101','SUBMIT','admin','2024-10-03 11:03:51'),(44,'','Credit','1000','',NULL,'Fuel','Fuel','disp','salary','101','2024-10-10','101','101','abc','SAVE','admin','2024-10-08 07:42:22'),(45,'','Credit','1000','',NULL,'Fuel','Fuel','cash','nagi','101','2024-10-10','101','101','abc','SAVE','admin','2024-10-08 07:49:53'),(46,'','Credit','1000','',NULL,'Fuel','Fuel','dda','esic_disp','101','2024-10-31','101','101','abc','SAVE','admin','2024-10-08 07:52:36'),(47,'','Debit','','1000',NULL,'Fuel','Fuel','disp','khanna','101','2024-10-08','101','101','abc','SAVE','admin','2024-10-08 07:54:18'),(48,'2024-10-08','Credit','1000','',NULL,'Fuel','Fuel','office','donation','101','2024-11-09','101','101','abc','SAVE','admin','2024-10-08 07:56:50'),(49,'2024-10-03','Debit','','1000',NULL,'Fuel','Fuel','cd_9','cd_iii','101','2024-10-10','101','101','abc','SAVE','admin','2024-10-08 07:58:22'),(50,'2024-10-04','Debit','','500','','Fuel','Fuel','disp','dda_saket','101','2024-10-31','101','101','abc','SAVE','admin','2024-10-08 07:59:09'),(51,'2024-10-08','Credit','1000','','1000','Fuel','Fuel','office_running','staff_welfare','101','2024-10-23','101','101','abc','SAVE','admin','2024-10-08 08:02:12'),(52,'2024-10-08','Credit','1000','0','1000','Fuel','Fuel','dda','pers','101','2024-10-30','101','101','abc','SAVE','admin','2024-10-08 08:30:42'),(53,'2024-10-08','Debit','','500',NULL,'Fuel','Fuel','ss','dda_rskp','101','2024-10-16','101','101','abc','SAVE','admin','2024-10-08 08:32:44'),(54,'2024-10-08','Credit','1000','',NULL,'Fuel','Fuel','office_running','ramesh_nagar','101','2024-10-22','101','101','abc','SAVE','admin','2024-10-08 08:33:47'),(55,'2024-10-08','Credit','1000','',NULL,'Fuel','Fuel','ss','fuel','101','2024-10-08','101','101','abc','SAVE','admin','2024-10-08 08:36:26'),(56,'2024-10-08','Credit','1000','',NULL,'Fuel','Fuel','ss','ip_ajadpur','101','2024-10-16','101','101','abc','SAVE','admin','2024-10-08 08:38:25');
/*!40000 ALTER TABLE `txn_book` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-08 12:57:23
