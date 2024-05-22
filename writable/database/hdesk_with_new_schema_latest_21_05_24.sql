-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: hdeskk
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

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
-- Table structure for table `branch_office`
--

DROP TABLE IF EXISTS `branch_office`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch_office` (
  `branch_id` int NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  `address` text,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `employee_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employee_branch`
--

DROP TABLE IF EXISTS `employee_branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_branch` (
  `employee_branch_id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `branch_id` int NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`employee_branch_id`),
  KEY `employee_id` (`employee_id`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `employee_branch_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  CONSTRAINT `employee_branch_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch_office` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employee_branch_history`
--

DROP TABLE IF EXISTS `employee_branch_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_branch_history` (
  `history_id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `branch_id` int NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`history_id`),
  KEY `employee_id` (`employee_id`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `employee_branch_history_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  CONSTRAINT `employee_branch_history_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch_office` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employee_position`
--

DROP TABLE IF EXISTS `employee_position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_position` (
  `employee_position_id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `position_id` int NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`employee_position_id`),
  KEY `employee_id` (`employee_id`),
  KEY `position_id` (`position_id`),
  CONSTRAINT `employee_position_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  CONSTRAINT `employee_position_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `employee_position_history`
--

DROP TABLE IF EXISTS `employee_position_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_position_history` (
  `history_id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `position_id` int NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`history_id`),
  KEY `employee_id` (`employee_id`),
  KEY `position_id` (`position_id`),
  CONSTRAINT `employee_position_history_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  CONSTRAINT `employee_position_history_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `komentar` (
  `komentar_id` int NOT NULL AUTO_INCREMENT,
  `tgl_komen` datetime NOT NULL,
  `komentar` longtext NOT NULL,
  `new_status` enum('1','2','3','4','5','6') DEFAULT NULL,
  `tiketassignment_id` int DEFAULT NULL,
  PRIMARY KEY (`komentar_id`),
  KEY `fk_tiketassignment_tiketassignment_idx` (`tiketassignment_id`),
  CONSTRAINT `fk_tiketassignment_tiketassignment` FOREIGN KEY (`tiketassignment_id`) REFERENCES `tiketassignment` (`tiketassignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `login_view`
--

DROP TABLE IF EXISTS `login_view`;
/*!50001 DROP VIEW IF EXISTS `login_view`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `login_view` AS SELECT 
 1 AS `user_id`,
 1 AS `nama_pengguna`,
 1 AS `username`,
 1 AS `active`,
 1 AS `password_hash`,
 1 AS `kantor`,
 1 AS `namagroup_id`,
 1 AS `nama_group`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `login_view_active`
--

DROP TABLE IF EXISTS `login_view_active`;
/*!50001 DROP VIEW IF EXISTS `login_view_active`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `login_view_active` AS SELECT 
 1 AS `user_id`,
 1 AS `nama_pengguna`,
 1 AS `username`,
 1 AS `active`,
 1 AS `password_hash`,
 1 AS `kantor`,
 1 AS `namagroup_id`,
 1 AS `nama_group`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `namagroup`
--

DROP TABLE IF EXISTS `namagroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `namagroup` (
  `namagroup_id` int NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`namagroup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `position` (
  `position_id` int NOT NULL AUTO_INCREMENT,
  `position_name` varchar(100) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `statushistory`
--

DROP TABLE IF EXISTS `statushistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statushistory` (
  `statushistory_id` int NOT NULL AUTO_INCREMENT,
  `old_status` varchar(45) DEFAULT NULL,
  `new_status` varchar(45) NOT NULL,
  `tgl_change` datetime NOT NULL,
  `komentar_id` int DEFAULT NULL,
  PRIMARY KEY (`statushistory_id`),
  KEY `fk_status_history_komentar_id` (`komentar_id`),
  CONSTRAINT `fk_status_history_komentar_id` FOREIGN KEY (`komentar_id`) REFERENCES `komentar` (`komentar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiket`
--

DROP TABLE IF EXISTS `tiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiket` (
  `tiket_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `tiketkategori_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `prioritas` varchar(45) DEFAULT NULL,
  `tgl_buat` datetime DEFAULT NULL,
  `deskripsi` text,
  `nama_file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tiket_id`),
  KEY `fk_tiket_user` (`user_id`),
  KEY `fk_tiket_kategori` (`tiketkategori_id`),
  CONSTRAINT `fk_tiket_kategori` FOREIGN KEY (`tiketkategori_id`) REFERENCES `tiketkategori` (`tiketkategori_id`),
  CONSTRAINT `fk_tiket_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiketassignment`
--

DROP TABLE IF EXISTS `tiketassignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiketassignment` (
  `tiketassignment_id` int NOT NULL AUTO_INCREMENT,
  `tiket_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`tiketassignment_id`),
  KEY `fk_tiketassignment_tiket` (`tiket_id`),
  KEY `fk_tiketassignment_user` (`user_id`),
  CONSTRAINT `fk_tiketassignment_tiket` FOREIGN KEY (`tiket_id`) REFERENCES `tiket` (`tiket_id`),
  CONSTRAINT `fk_tiketassignment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiketgroup`
--

DROP TABLE IF EXISTS `tiketgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiketgroup` (
  `tiketgroup_id` int NOT NULL AUTO_INCREMENT,
  `tiketkategori_id` int DEFAULT NULL,
  `namagroup_id` int DEFAULT NULL,
  PRIMARY KEY (`tiketgroup_id`),
  KEY `fk_tiketgroup_tiketkategori` (`tiketkategori_id`),
  KEY `fk_tiketgroup_namagroup` (`namagroup_id`),
  CONSTRAINT `fk_tiketgroup_namagroup` FOREIGN KEY (`namagroup_id`) REFERENCES `namagroup` (`namagroup_id`),
  CONSTRAINT `fk_tiketgroup_tiketkategori` FOREIGN KEY (`tiketkategori_id`) REFERENCES `tiketkategori` (`tiketkategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiketkategori`
--

DROP TABLE IF EXISTS `tiketkategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiketkategori` (
  `tiketkategori_id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`tiketkategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `active` tinyint DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(25) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `kantor` varchar(100) DEFAULT NULL,
  `namagroup_id` int DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `fk_user_namagroup_idx` (`namagroup_id`),
  CONSTRAINT `fk_user_namagroup` FOREIGN KEY (`namagroup_id`) REFERENCES `namagroup` (`namagroup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Final view structure for view `login_view`
--

/*!50001 DROP VIEW IF EXISTS `login_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `login_view` AS select `user`.`user_id` AS `user_id`,`user`.`nama_pengguna` AS `nama_pengguna`,`user`.`username` AS `username`,`user`.`active` AS `active`,`user`.`password_hash` AS `password_hash`,`user`.`kantor` AS `kantor`,`user`.`namagroup_id` AS `namagroup_id`,`namagroup`.`nama_group` AS `nama_group` from (`user` join `namagroup` on((`user`.`namagroup_id` = `namagroup`.`namagroup_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `login_view_active`
--

/*!50001 DROP VIEW IF EXISTS `login_view_active`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `login_view_active` AS select `user`.`user_id` AS `user_id`,`user`.`nama_pengguna` AS `nama_pengguna`,`user`.`username` AS `username`,`user`.`active` AS `active`,`user`.`password_hash` AS `password_hash`,`user`.`kantor` AS `kantor`,`user`.`namagroup_id` AS `namagroup_id`,`namagroup`.`nama_group` AS `nama_group` from (`user` join `namagroup` on((`user`.`namagroup_id` = `namagroup`.`namagroup_id`))) where (`user`.`active` = 0) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-21 15:36:38
