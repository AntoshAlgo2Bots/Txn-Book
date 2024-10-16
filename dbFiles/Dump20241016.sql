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
  `net_balance` varchar(45) DEFAULT NULL,
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
  `updatedBy` varchar(45) DEFAULT NULL,
  `updatedDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transaction_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txn_book`
--

LOCK TABLES `txn_book` WRITE;
/*!40000 ALTER TABLE `txn_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `txn_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `emai_id` varchar(45) DEFAULT NULL,
  `effective_from_date` varchar(45) DEFAULT NULL,
  `effective_to_date` varchar(45) DEFAULT NULL,
  `membership_id` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `days` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'admin','admin@123',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'col.hkb','colhkb@123','','','','','','',''),(3,'manager','user@123','','','','','','','');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_report`
--

DROP TABLE IF EXISTS `user_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_report` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `updataed_by` varchar(50) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  `mobile_number` bigint NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `person_id` int NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_report`
--

LOCK TABLES `user_report` WRITE;
/*!40000 ALTER TABLE `user_report` DISABLE KEYS */;
INSERT INTO `user_report` VALUES (1,'rg1','system','syetem','2024-07-24','2024-08-26',7382783,'example.com',2,'rg1@123','2000-12-02','2000-12-12','User View '),(2,'rg2','admin','admin','2024-07-04','2024-08-06',84934809,'example@.com',1,'rg2@123','2000-12-12','2004-12-12','User Write'),(3,'rg3','system','system','2024-07-24','2024-08-26',938493,'admin@admin.com',1,'rg3@123','2024-07-24','2024-12-12','Txn View'),(4,'admin_read','system','system','2024-07-24','2024-07-24',938493,'admin_read@admin.com',1,'admin@123','2024-07-24','2024-12-12','Txn View'),(5,'admin_write','system','system','2024-07-24','2024-07-24',938493,'admin_write@admin.com',1,'admin@123','2024-07-24','2024-12-12','Txn Report'),(6,'admin_modify','system','system','2024-07-24','2024-07-26',938493,'admin_modify@admin.com',1,'admin@1234','2024-07-24','2024-12-12','User Report'),(7,'user_admin','system','system','2024-08-09','2024-08-26',798788,'admin@example.com',3,'admin@123','2024-08-09','2024-08-09','Txn Report'),(8,'rg4',' sysgtem','system','2024-07-07','2024-07-29',45784,'admin1@admin.com',12,'rg4@123','2024-12-31','2024-12-12','User Write'),(9,'admin_9',' sysgtem','system','2024-07-07','2024-07-29',78,'78',1,'admin@123','2024-01-01','2024-07-07','User Write'),(10,'admin10',' sysgtem','system','2024-07-07','2024-07-29',788,'exampk@dw.co',12,'admin@123','2024-11-02','2024-07-07','Txn Report'),(11,'admin11',' sysgtem','system','2024-07-07','2024-07-29',898,'admin@13',56,'124','2022-11-01','2024-07-07','Txn Report'),(12,'admin_12',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',32,'admin@1234','2024-01-01','2024-07-07','Txn View'),(13,'admin13',' sysgtem','system','2024-07-07','2024-07-29',73289,'admin1@admin.com',12,'admin@123','2024-12-01','2024-07-07','User Report'),(14,'user14',' sysgtem','system','2024-07-07','2024-07-29',73289,'78',2,'admin@123','2025-10-02','2000-12-12','User Report'),(15,'usre15',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'admin@123','2026-01-02','2024-12-12','User Report'),(16,'admin',' sysgtem','system','2024-07-07','2024-07-29',898,'admin@13',32,'admin@123','2024-01-01','2000-12-12','Txn View'),(17,'admin17',' sysgtem','system','2024-07-07','2024-07-29',45784,'78',12,'ad','2025-02-03','2000-12-12','User Write'),(18,'admin18',' sysgtem','system','2024-07-29','2024-07-29',1234,'example@gmail.com',21,'admin@12','2024-02-01','2024-01-01','Txn Report'),(19,'admin19',' system','system','2024-07-29','2024-07-29',1233,'exampk@dw.co',12,'admin@1234','2025-01-01','2025-02-01','Txn Write'),(20,'adminRequisition','system','system','2024-08-03','2024-08-03',74349,'adminRequisition@gmail.com',1,'admin@123','2025-08-03','2025-08-03','Txn Write'),(21,'storeManager','system','system','2024-08-03','2024-08-03',74349,'storeManager@gmail.com',23,'admin@123','2025-08-03','2025-08-03','Txn Write'),(22,'L&S 2',' System ','System ','2024-08-26','2024-08-26',9876543210,'gfedty@gmail.com',1,'L&S@123','2024-08-26','2024-08-27','Txn Write');
/*!40000 ALTER TABLE `user_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `user_creation` tinyint(1) DEFAULT NULL,
  `user_creation_from_date` varchar(45) DEFAULT NULL,
  `user_creation_to_date` varchar(45) DEFAULT NULL,
  `user_search` tinyint(1) DEFAULT NULL,
  `user_search_from_date` varchar(45) DEFAULT NULL,
  `user_search_to_date` varchar(45) DEFAULT NULL,
  `user_report` tinyint(1) DEFAULT NULL,
  `user_report_from_date` varchar(45) DEFAULT NULL,
  `user_report_to_date` varchar(45) DEFAULT NULL,
  `transaction_creation` tinyint(1) DEFAULT NULL,
  `transaction_creation_from_date` varchar(45) DEFAULT NULL,
  `transaction_creation_to_date` varchar(45) DEFAULT NULL,
  `transaction_search` tinyint(1) DEFAULT NULL,
  `transaction_search_from_date` varchar(45) DEFAULT NULL,
  `transaction_search_to_date` varchar(45) DEFAULT NULL,
  `transaction_report` tinyint(1) DEFAULT NULL,
  `transaction_report_from_date` varchar(45) DEFAULT NULL,
  `transaction_report_to_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'61',1,'2024-09-27','2024-09-18',0,'','',1,'2024-09-17','2024-09-17',0,'','',0,'','',0,'',''),(2,'62',1,'2024-09-11','2024-09-06',0,'','',0,'','',0,'','',0,'','',1,'2024-09-18','2024-09-16'),(3,'63',1,'2024-10-08','2024-09-30',0,'','',0,'','',0,'','',0,'','',1,'2024-09-18','2024-09-16'),(4,'64',1,'2024-09-25','2024-09-15',0,'','',0,'','',0,'','',0,'','',1,'2024-10-02','2024-09-17'),(5,'65',1,'2024-10-07','2024-10-10',0,'','',0,'','',0,'','',0,'','',1,'2024-10-07','2024-10-10'),(6,'66',1,'2024-10-08','2024-10-08',0,'','',0,'','',0,'','',0,'','',1,'2024-10-08','2024-10-08'),(7,'67',0,'2025-01-02','2024-12-31',0,'','',0,'','',0,'','',0,'','',0,'',''),(8,'68',0,'','',0,'','',0,'','',1,'','',1,'','',1,'',''),(9,'2',0,'','',0,'','',0,'','',0,'','',0,'','',0,'',''),(10,'3',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'daily_txn_book'
--

--
-- Dumping routines for database 'daily_txn_book'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-16 15:31:09
