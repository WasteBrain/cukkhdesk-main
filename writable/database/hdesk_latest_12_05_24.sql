-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: hdeskk
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_komen` datetime NOT NULL,
  `komentar` longtext NOT NULL,
  `new_status` enum('1','2','3','4','5','6') DEFAULT NULL,
  `tiketassignment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`komentar_id`),
  KEY `fk_tiketassignment_tiketassignment_idx` (`tiketassignment_id`),
  CONSTRAINT `fk_tiketassignment_tiketassignment` FOREIGN KEY (`tiketassignment_id`) REFERENCES `tiketassignment` (`tiketassignment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
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
-- Table structure for table `namagroup`
--

DROP TABLE IF EXISTS `namagroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `namagroup` (
  `namagroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`namagroup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `new_tiket_view`
--

DROP TABLE IF EXISTS `new_tiket_view`;
/*!50001 DROP VIEW IF EXISTS `new_tiket_view`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `new_tiket_view` AS SELECT 
 1 AS `user_id`,
 1 AS `nama_pengguna`,
 1 AS `kantor`,
 1 AS `namakategori`,
 1 AS `tiket_id`,
 1 AS `deskripsi`,
 1 AS `status`,
 1 AS `tgl_buat`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `statushistory`
--

DROP TABLE IF EXISTS `statushistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statushistory` (
  `statushistory_id` int(11) NOT NULL AUTO_INCREMENT,
  `old_status` varchar(45) DEFAULT NULL,
  `new_status` varchar(45) NOT NULL,
  `tgl_change` datetime NOT NULL,
  `komentar_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`statushistory_id`),
  KEY `fk_status_history_komentar_id` (`komentar_id`),
  CONSTRAINT `fk_status_history_komentar_id` FOREIGN KEY (`komentar_id`) REFERENCES `komentar` (`komentar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiket`
--

DROP TABLE IF EXISTS `tiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiket` (
  `tiket_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `tiketkategori_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `prioritas` varchar(45) DEFAULT NULL,
  `tgl_buat` datetime DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tiket_id`),
  KEY `fk_tiket_user` (`user_id`),
  KEY `fk_tiket_kategori` (`tiketkategori_id`),
  CONSTRAINT `fk_tiket_kategori` FOREIGN KEY (`tiketkategori_id`) REFERENCES `tiketkategori` (`tiketkategori_id`),
  CONSTRAINT `fk_tiket_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiketassignment`
--

DROP TABLE IF EXISTS `tiketassignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiketassignment` (
  `tiketassignment_id` int(11) NOT NULL AUTO_INCREMENT,
  `tiket_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tiketassignment_id`),
  KEY `fk_tiketassignment_tiket` (`tiket_id`),
  KEY `fk_tiketassignment_user` (`user_id`),
  CONSTRAINT `fk_tiketassignment_tiket` FOREIGN KEY (`tiket_id`) REFERENCES `tiket` (`tiket_id`),
  CONSTRAINT `fk_tiketassignment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiketgroup`
--

DROP TABLE IF EXISTS `tiketgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiketgroup` (
  `tiketgroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `tiketkategori_id` int(11) DEFAULT NULL,
  `namagroup_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tiketgroup_id`),
  KEY `fk_tiketgroup_tiketkategori` (`tiketkategori_id`),
  KEY `fk_tiketgroup_namagroup` (`namagroup_id`),
  CONSTRAINT `fk_tiketgroup_namagroup` FOREIGN KEY (`namagroup_id`) REFERENCES `namagroup` (`namagroup_id`),
  CONSTRAINT `fk_tiketgroup_tiketkategori` FOREIGN KEY (`tiketkategori_id`) REFERENCES `tiketkategori` (`tiketkategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiketkategori`
--

DROP TABLE IF EXISTS `tiketkategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiketkategori` (
  `tiketkategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  PRIMARY KEY (`tiketkategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(25) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `kantor` varchar(100) DEFAULT NULL,
  `namagroup_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `fk_user_namagroup_idx` (`namagroup_id`),
  CONSTRAINT `fk_user_namagroup` FOREIGN KEY (`namagroup_id`) REFERENCES `namagroup` (`namagroup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
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
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `login_view` AS select 1 AS `user_id`,1 AS `nama_pengguna`,1 AS `username`,1 AS `active`,1 AS `password_hash`,1 AS `kantor`,1 AS `namagroup_id`,1 AS `nama_group` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `new_tiket_view`
--

/*!50001 DROP VIEW IF EXISTS `new_tiket_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `new_tiket_view` AS select 1 AS `user_id`,1 AS `nama_pengguna`,1 AS `kantor`,1 AS `namakategori`,1 AS `tiket_id`,1 AS `deskripsi`,1 AS `status`,1 AS `tgl_buat` */;
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

-- Dump completed on 2024-05-12 22:17:13
