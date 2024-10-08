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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txn_book`
--

LOCK TABLES `txn_book` WRITE;
/*!40000 ALTER TABLE `txn_book` DISABLE KEYS */;
INSERT INTO `txn_book` VALUES (17,'2024-09-07','Credit','2000','',NULL,'Fuel','Fuel','donation','dayavasti','201','2201-02-22','101','123','abc','SUBMIT','admin',''),(18,'2024-09-14','Debit','','1000',NULL,'Fuel','Fuel','office','jahangir_puri_badli','202','2002-11-11','102','345','abc','SUBMIT','admin',NULL),(19,'2024-09-16','Debit','','3000',NULL,'Office Welfare','Travel','donation','jahangir_puri_badli','203','2002-11-15','103','678','abc','SUBMIT','admin',NULL),(20,'2024-09-20','Credit','4000','',NULL,'Office Puerpose','Travel','donation','dayavasti','204','2002-11-21','104','910','abc','SUBMIT','Antosh',NULL),(21,'2024-09-14','Credit','12000','',NULL,'Fuel','Fuel','dda','pers','105','2024-10-12','105','12342','abc','SUBMIT','admin',NULL),(22,'2024-09-14','Debit','','11000',NULL,'Fuel','Fuel','cash_received','staff_welfare','106','2024-09-20','106','12321','abc','SUBMIT','admin',NULL),(23,'2024-09-14','Debit','','13000',NULL,'Fuel','Fuel','cash_received','col_hkb','107','2024-09-12','107','123211','abc','SUBMIT','admin',NULL),(24,'2024-09-06','Credit','10000','',NULL,'Fuel','Fuel','cd_9','salary','108','2024-09-14','108','123211','abc','SUBMIT','Antosh',NULL),(25,'2024-09-12','Debit','','100000',NULL,'Fuel','Fuel','salary','ramesh_nagar','109','2024-09-14','101','12132','abc','SUBMIT','Antosh',NULL),(26,'2024-09-06','Debit','','20000',NULL,'Fuel','Fuel','office_running','col_hkb','102','2024-09-14','106','102','abc','SUBMIT','admin',NULL),(27,'2024-09-15','Credit','12000','',NULL,'Fuel','Fuel','ss','salary','110','2024-09-20','110','3432345','abc','SUBMIT','admin','2024-09-14 10:07:22'),(28,'2024-09-13','Credit','12000','',NULL,'Fuel','Fuel','office','khanna','111','2024-10-04','111','3232','abc','SUBMIT','admin','2024-09-14 10:11:43'),(29,'2024-09-21','Debit','','1200',NULL,'Fuel','Fuel','cd_9','ip_ajadpur','112','2024-09-14','112','87656789','ABC','SAVE','admin\'','2024-09-14 10:14:49'),(30,'2024-09-20','Debit','','2000',NULL,'Fuel','Fuel','office','dayavasti','112','2024-10-12','112','7656789876','ABC','SUBMIT','admin','2024-09-14 10:24:23'),(31,'2024-09-20','Credit','1000','',NULL,'Fuel','Fuel','office','khanna','113','2024-10-12','113','54323','abc','SUBMIT','admin','2024-09-14 10:25:36'),(32,'2024-09-22','Credit','2000','',NULL,'Fuel','Fuel','office','khanna','114','2024-10-12','114','423423','abc','SUBMIT','admin','2024-09-14 10:26:11'),(33,'2024-09-07','Debit','','3000',NULL,'Fuel','Fuel','dda','col_hkb','115','2024-10-10','115','123432','abc','SUBMIT','admin','2024-09-14 11:46:41'),(34,'2024-09-07','Debit','','13000',NULL,'Fuel','Fuel','office_running','bf','118','2024-09-13','118','7654345','ABC','SUBMIT','admin','2024-09-14 12:32:06'),(35,'2024-09-01','Credit','20000','',NULL,'Fuel','Fuel','dda','staff_welfare','101','2024-09-01','101','65476543','abc','SUBMIT','admin','2024-09-14 13:11:28'),(36,'2024-10-08','Credit','50000','',NULL,'Fuel','Fuel','salary','col_hkb','117','2024-09-11','117','28234','abc','SAVE','Antosh','2024-09-14 13:54:36'),(37,'2024-09-01','Credit','30000','',NULL,'Fuel','Fuel','bf','bf','119','2024-09-11','190','3564532','abc','SAVE','Antosh','2024-09-14 13:55:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (59,'xya','123','987654321','ag@gmail.com','2024-09-09','2024-09-09','101','sf','24'),(61,'Antosh','123','9999999999','e','2024-09-13','2024-09-11','101','sf','24'),(62,'h','tempuser1@123','987654321','antosh@gmail.com','2024-09-09','2024-09-10','101','sfnk','24'),(63,'mu','tempuser1@123','12323','antosh@gmail.com','2024-09-17','2024-09-10','102','lorem ipsum','24'),(64,'admin','123','987654321','admin@123','2004-02-22','2004-02-22','101','lorem ipsum','12');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'61',1,'2024-09-27','2024-09-18',0,'','',1,'2024-09-17','2024-09-17',0,'','',0,'','',0,'',''),(2,'62',1,'2024-09-11','2024-09-06',0,'','',0,'','',0,'','',0,'','',1,'2024-09-18','2024-09-16'),(3,'63',1,'2024-10-08','2024-09-30',0,'','',0,'','',0,'','',0,'','',1,'2024-09-18','2024-09-16'),(4,'64',1,'2024-09-25','2024-09-15',0,'','',0,'','',0,'','',0,'','',1,'2024-10-02','2024-09-17');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-14 21:25:39
