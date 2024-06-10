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
-- Table structure for table `aktivis`
--

DROP TABLE IF EXISTS `aktivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aktivis` (
  `aktivis_id` int(11) NOT NULL AUTO_INCREMENT,
  `nia` varchar(45) DEFAULT NULL,
  `nama_aktivis` varchar(100) NOT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `asal` text,
  PRIMARY KEY (`aktivis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_area` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cabang`
--

DROP TABLE IF EXISTS `cabang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cabang` (
  `cabang_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(100) NOT NULL,
  `alamat_cabang` text,
  `area_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cabang_id`),
  KEY `branch_office_ibfk_1_idx` (`area_id`),
  CONSTRAINT `cabang_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cabangaktivis`
--

DROP TABLE IF EXISTS `cabangaktivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cabangaktivis` (
  `cabangaktivis_id` int(11) NOT NULL AUTO_INCREMENT,
  `aktivis_id` int(11) NOT NULL,
  `cabang_id` int(11) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime DEFAULT NULL,
  PRIMARY KEY (`cabangaktivis_id`),
  KEY `cabangaktivis_ibfk_1_idx` (`aktivis_id`),
  KEY `cabangaktivis_ibfk_2_idx` (`cabang_id`),
  CONSTRAINT `cabangaktivis_ibfk_1` FOREIGN KEY (`aktivis_id`) REFERENCES `aktivis` (`aktivis_id`),
  CONSTRAINT `cabangaktivis_ibfk_2` FOREIGN KEY (`cabang_id`) REFERENCES `cabang` (`cabang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(45) NOT NULL,
  PRIMARY KEY (`jabatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jabatanaktivis`
--

DROP TABLE IF EXISTS `jabatanaktivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jabatanaktivis` (
  `jabatanaktivis_id` int(11) NOT NULL AUTO_INCREMENT,
  `aktivis_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime DEFAULT NULL,
  PRIMARY KEY (`jabatanaktivis_id`),
  KEY `jabatanaktivis_ibfk_1_idx` (`aktivis_id`),
  KEY `jabatanaktivis_ibfk_2_idx` (`jabatan_id`),
  CONSTRAINT `jabatanaktivis_ibfk_1` FOREIGN KEY (`aktivis_id`) REFERENCES `aktivis` (`aktivis_id`),
  CONSTRAINT `jabatanaktivis_ibfk_2` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`jabatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `tiket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `komen` text NOT NULL,
  `tgl_komen` datetime NOT NULL,
  PRIMARY KEY (`komentar_id`),
  KEY `komentar_ibfk_1_idx` (`tiket_id`),
  KEY `komentar_ibfk_2_idx` (`user_id`),
  CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`tiket_id`) REFERENCES `tiket` (`tiket_id`),
  CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pic`
--

DROP TABLE IF EXISTS `pic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pic` (
  `role_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  KEY `pic_ibfk_1_idx` (`role_id`),
  KEY `pic_ibfk_2_idx` (`area_id`),
  CONSTRAINT `pic_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  CONSTRAINT `pic_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(45) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tiket`
--

DROP TABLE IF EXISTS `tiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiket` (
  `tiket_id` int(11) NOT NULL AUTO_INCREMENT,
  `aktivis_id` int(11) NOT NULL,
  `cabang_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `tiket_kategori` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `aktivis_yg_salah` int(11) NOT NULL,
  `file_document` varchar(255) DEFAULT NULL,
  `file_image` varchar(255) DEFAULT NULL,
  `status` enum('Open','In Progress','Resolved','Closed') NOT NULL DEFAULT 'Open',
  `tgl_input` datetime NOT NULL,
  `tgl_update` datetime DEFAULT NULL,
  PRIMARY KEY (`tiket_id`),
  KEY `tiket_ibfk_1_idx` (`aktivis_id`),
  KEY `tiket_ibfk_2_idx` (`cabang_id`),
  KEY `tiket_ibfk_3_idx` (`jabatan_id`),
  KEY `tiket_ibfk_4_idx` (`aktivis_yg_salah`),
  CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`aktivis_id`) REFERENCES `aktivis` (`aktivis_id`),
  CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`cabang_id`) REFERENCES `cabang` (`cabang_id`),
  CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`jabatan_id`),
  CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`aktivis_yg_salah`) REFERENCES `aktivis` (`aktivis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tugastiket`
--

DROP TABLE IF EXISTS `tugastiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tugastiket` (
  `tugastiket_id` int(11) NOT NULL AUTO_INCREMENT,
  `tiket_id` int(11) NOT NULL,
  `tugaskan_ke` int(11) NOT NULL,
  `tgl_penugasan` datetime NOT NULL,
  PRIMARY KEY (`tugastiket_id`),
  KEY `tugastiket_ibfk_1_idx` (`tiket_id`),
  KEY `tugastiket_ibfk_2_idx` (`tugaskan_ke`),
  CONSTRAINT `tugastiket_ibfk_1` FOREIGN KEY (`tiket_id`) REFERENCES `tiket` (`tiket_id`),
  CONSTRAINT `tugastiket_ibfk_2` FOREIGN KEY (`tugaskan_ke`) REFERENCES `user` (`aktivis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `aktivis_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_ibfk_1_idx` (`aktivis_id`),
  KEY `user_ibfk_2_idx` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`aktivis_id`) REFERENCES `aktivis` (`aktivis_id`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-28 14:00:45
