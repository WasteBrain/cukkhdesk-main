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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
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
  `namagroup_id` int NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`namagroup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `namagroup`
--

LOCK TABLES `namagroup` WRITE;
/*!40000 ALTER TABLE `namagroup` DISABLE KEYS */;
INSERT INTO `namagroup` VALUES (1,'Administrator'),(2,'PIC Hardware'),(3,'PIC Software'),(4,'PIC Jaringan'),(5,'PIC LKD/KKD'),(6,'PIC LKD/ATM'),(7,'Risk'),(8,'CCD'),(9,'Keuangan'),(10,'Logistik'),(11,'Users');
/*!40000 ALTER TABLE `namagroup` ENABLE KEYS */;
UNLOCK TABLES;

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
  `statushistory_id` int NOT NULL AUTO_INCREMENT,
  `old_status` varchar(45) DEFAULT NULL,
  `new_status` varchar(45) NOT NULL,
  `tgl_change` datetime NOT NULL,
  `komentar_id` int DEFAULT NULL,
  PRIMARY KEY (`statushistory_id`),
  KEY `fk_status_history_komentar_id` (`komentar_id`),
  CONSTRAINT `fk_status_history_komentar_id` FOREIGN KEY (`komentar_id`) REFERENCES `komentar` (`komentar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiket`
--

LOCK TABLES `tiket` WRITE;
/*!40000 ALTER TABLE `tiket` DISABLE KEYS */;
INSERT INTO `tiket` VALUES (7,7,2,1,'none','2024-04-29 00:00:00','salah TAK ke kejame','form trouble.docx','/assets/img/1_1_2024_04_06.jpg'),(8,8,1,1,'none','2024-04-29 00:00:00','Komputer kasir bluescreen','form trouble.docx','/assets/img/1_1_2024_04_06.jpg'),(9,8,2,1,'none','2024-04-29 00:00:00','user kasir expired','form trouble.docx','/assets/img/1_1_2024_04_06.jpg');
/*!40000 ALTER TABLE `tiket` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `tiketgroup_id` int NOT NULL AUTO_INCREMENT,
  `tiketkategori_id` int DEFAULT NULL,
  `namagroup_id` int DEFAULT NULL,
  PRIMARY KEY (`tiketgroup_id`),
  KEY `fk_tiketgroup_tiketkategori` (`tiketkategori_id`),
  KEY `fk_tiketgroup_namagroup` (`namagroup_id`),
  CONSTRAINT `fk_tiketgroup_namagroup` FOREIGN KEY (`namagroup_id`) REFERENCES `namagroup` (`namagroup_id`),
  CONSTRAINT `fk_tiketgroup_tiketkategori` FOREIGN KEY (`tiketkategori_id`) REFERENCES `tiketkategori` (`tiketkategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiketgroup`
--

LOCK TABLES `tiketgroup` WRITE;
/*!40000 ALTER TABLE `tiketgroup` DISABLE KEYS */;
INSERT INTO `tiketgroup` VALUES (1,1,2),(2,2,3),(3,3,4),(4,4,5),(5,5,6),(6,6,7),(7,6,8),(8,7,7),(9,7,8),(10,3,2),(11,2,5),(12,2,6),(13,2,7),(14,2,8),(15,2,9);
/*!40000 ALTER TABLE `tiketgroup` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiketkategori`
--

LOCK TABLES `tiketkategori` WRITE;
/*!40000 ALTER TABLE `tiketkategori` DISABLE KEYS */;
INSERT INTO `tiketkategori` VALUES (1,'Hardware','Masalah sehubungan dengan Perangkat Komputer kantor'),(2,'Software','Masalah sehubungan dengan System transaksi SIP, selisih, dll'),(3,'Jaringan','Masalah sehubungan dengan Jaringan internet kantor'),(4,'LKD/KKD','Masalah sehubungan dengan Kinerja layanan mobile, aplikasi KKD'),(5,'LKD/ATM','Masalah sehubungan dengan Kinerja layanan tarik tunai, mesin ATM'),(6,'POLJAK','Masalah sehubungan dengan Poljak'),(7,'SOP','Masalah sehubungan SOP Operasional');
/*!40000 ALTER TABLE `tiketkategori` ENABLE KEYS */;
UNLOCK TABLES;

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
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Yensi Kumala','yensi',1,'123456!','08334287647','Admin IT','ITD SINTANG'),(2,'Tendo Padagi','tendo',1,'123456!','08338876647','Staf ITD','ITD KP'),(3,'Abet Nego','abet',0,'123456!','08223876647','Staf ITD','ITD KP'),(4,'Severinus Grata Gandi','atot',0,'123456!','08223324647','Staf ITD','ITD KP'),(5,'Ridwan','ridwan',0,'123456!','08675876647','Staf ITD','ITD KP'),(6,'Popol dan Kupa','kupa',1,'123456!','08675887967','ACC HO Keuangan','HO SINTANG'),(7,'Gurning','gurning',1,'123456!','08675634786','Jer','Pintas Keladan'),(8,'Ansilmus','ansil',1,'123456!','08699877967','Jer','SIANTAN');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usergroup`
--

DROP TABLE IF EXISTS `usergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usergroup` (
  `usergroup_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `namagroup_id` int DEFAULT NULL,
  PRIMARY KEY (`usergroup_id`),
  KEY `fk_usergroup_user` (`user_id`),
  KEY `fk_usergroup_namagroup` (`namagroup_id`),
  CONSTRAINT `fk_usergroup_namagroup` FOREIGN KEY (`namagroup_id`) REFERENCES `namagroup` (`namagroup_id`),
  CONSTRAINT `fk_usergroup_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroup`
--

LOCK TABLES `usergroup` WRITE;
/*!40000 ALTER TABLE `usergroup` DISABLE KEYS */;
INSERT INTO `usergroup` VALUES (1,1,1),(2,2,2),(3,3,2),(4,4,5),(5,5,4),(6,6,9),(7,7,11),(8,8,11);
/*!40000 ALTER TABLE `usergroup` ENABLE KEYS */;
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
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `login_view` AS select `a`.`user_id` AS `user_id`,`a`.`nama_pengguna` AS `nama_pengguna`,`a`.`username` AS `username`,`a`.`active` AS `active`,`a`.`password_hash` AS `password_hash`,`a`.`kantor` AS `kantor`,`b`.`namagroup_id` AS `namagroup_id`,`b`.`nama_group` AS `nama_group` from ((`user` `a` join `usergroup` `c` on((`a`.`user_id` = `c`.`user_id`))) join `namagroup` `b` on((`c`.`namagroup_id` = `b`.`namagroup_id`))) */;
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
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `new_tiket_view` AS select `a`.`user_id` AS `user_id`,`a`.`nama_pengguna` AS `nama_pengguna`,`a`.`kantor` AS `kantor`,`b`.`nama_kategori` AS `namakategori`,`c`.`tiket_id` AS `tiket_id`,`c`.`deskripsi` AS `deskripsi`,`c`.`status` AS `status`,`c`.`tgl_buat` AS `tgl_buat` from ((`user` `a` join `tiket` `c` on((`a`.`user_id` = `c`.`user_id`))) join `tiketkategori` `b` on((`c`.`tiketkategori_id` = `b`.`tiketkategori_id`))) */;
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

-- Dump completed on 2024-04-30 16:06:23
