CREATE DATABASE  IF NOT EXISTS `hdeskk` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hdeskk`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `namagroup`
--

LOCK TABLES `namagroup` WRITE;
/*!40000 ALTER TABLE `namagroup` DISABLE KEYS */;
INSERT INTO `namagroup` VALUES (1,'Administrator'),(2,'PIC Hardware'),(3,'PIC Software'),(4,'PIC Network'),(5,'PIC LKD/ATM'),(6,'PIC LKD/Mobile'),(7,'Risk'),(8,'CCD'),(9,'AFI'),(10,'User BO');
/*!40000 ALTER TABLE `namagroup` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statushistory`
--

LOCK TABLES `statushistory` WRITE;
/*!40000 ALTER TABLE `statushistory` DISABLE KEYS */;
/*!40000 ALTER TABLE `statushistory` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiket`
--

LOCK TABLES `tiket` WRITE;
/*!40000 ALTER TABLE `tiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiket` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiketassignment`
--

LOCK TABLES `tiketassignment` WRITE;
/*!40000 ALTER TABLE `tiketassignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiketassignment` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiketgroup`
--

LOCK TABLES `tiketgroup` WRITE;
/*!40000 ALTER TABLE `tiketgroup` DISABLE KEYS */;
INSERT INTO `tiketgroup` VALUES (1,1,2),(2,1,7),(3,1,9),(4,2,3),(5,2,6),(6,2,7),(7,2,8),(8,2,9),(9,3,4),(10,3,2),(11,3,5),(12,3,6),(13,4,5),(14,4,6),(15,4,2),(16,4,3),(17,4,4),(18,4,9),(19,5,6),(20,5,5),(21,5,3),(22,5,9),(23,6,7),(24,6,3),(25,6,8),(26,6,9),(27,7,8),(28,7,3),(29,7,7),(30,7,9),(31,8,9),(32,8,3),(33,8,5),(34,8,6),(35,8,7),(36,8,8);
/*!40000 ALTER TABLE `tiketgroup` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiketkategori`
--

LOCK TABLES `tiketkategori` WRITE;
/*!40000 ALTER TABLE `tiketkategori` DISABLE KEYS */;
INSERT INTO `tiketkategori` VALUES (1,'Hardware','Masalah sehubungan dengan Perangkat Komputer, Printer, CCTV, Genset, AC, Dispenser '),(2,'Software','Masalah sehubungan dengan Program SIP dan transaksi SIP'),(3,'Network','Masalah sehubungan dengan Jaringan dan akses SIP'),(4,'LKD/ATM','Masalah sehubungan dengan LKD/ATM'),(5,'LKD/Mobile','Masalah sehubungan dengan LKD/Mobile'),(6,'Risk','Masalah sehubungan Poljak/SOP/aturan-aturan CUKK'),(7,'CCD','Masalah sehubungan Kredit'),(8,'AFI','Masalah sehubungan Keuangan BO');
/*!40000 ALTER TABLE `tiketkategori` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Yensi Kumala','yensi',1,'123456!','08699877967','Admin ITD','Sintang',1),(2,'Tendo Padagi','teten',1,'123456!','08699877967','Staf ITD','Kantor Pusat',2),(3,'Andi Sianida','andi',1,'123456!','08699877967','Staf ITD','ITD Sintang',3),(4,'Ridwan','ridwan',1,'123456!','08699877967','Staf ITD','ITD Sintang',4),(5,'Riyo Papa Riva','riyo',1,'123456!','08699877967','Staf ITD','ITD Sintang',5),(6,'Severinus Grata Gandi','atot',1,'123456!','08699877967','Staf ITD','Kantor Pusat',6),(7,'Eki After Oyon','ekiaf',1,'123456!','08699877967','Staf ITD','Risk Sintang',7),(8,'Natalia Kristika','icana',1,'123456!','08699877967','Staf CCD','CCD Sintang',8),(9,'Popol dan Kupa','kupa',1,'123456!','08699877967','Staf AFI/HO','HO Sintang',9),(10,'Ansilmus','ansil',1,'123456!','08699877967','Jer Siantan','BO Siantan',10),(11,'Agakhan Olga','agakan',1,'123456!','08699877967','Jer Sinar Pekayau','BO Sinar Pekayau',10);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

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
/*!50001 VIEW `login_view` AS select `user`.`user_id` AS `user_id`,`user`.`nama_pengguna` AS `nama_pengguna`,`user`.`username` AS `username`,`user`.`active` AS `active`,`user`.`password_hash` AS `password_hash`,`user`.`kantor` AS `kantor`,`user`.`namagroup_id` AS `namagroup_id`,`namagroup`.`nama_group` AS `nama_group` from (`user` join `namagroup` on(`user`.`namagroup_id` = `namagroup`.`namagroup_id`)) */;
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

-- Dump completed on 2024-05-13 22:34:43
