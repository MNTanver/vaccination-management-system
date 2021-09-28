-- MySQL dump 10.18  Distrib 10.3.27-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: CVMS
-- ------------------------------------------------------
-- Server version	10.3.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_registration`
--

DROP TABLE IF EXISTS `admin_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `first_password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_registration`
--

LOCK TABLES `admin_registration` WRITE;
/*!40000 ALTER TABLE `admin_registration` DISABLE KEYS */;
INSERT INTO `admin_registration` VALUES (1,'demo','demo@gmail.com','1234'),(2,'example','example@gmail.com','1234');
/*!40000 ALTER TABLE `admin_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_registration`
--

DROP TABLE IF EXISTS `student_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(20) DEFAULT NULL,
  `matric_no` varchar(20) DEFAULT NULL,
  `mobile_no` int(20) DEFAULT NULL,
  `residence` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `virus_type` varchar(10) DEFAULT NULL,
  `student_affected` varchar(10) DEFAULT NULL,
  `student_vaccination_dose` varchar(50) DEFAULT NULL,
  `vaccine_type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_registration`
--

LOCK TABLES `student_registration` WRITE;
/*!40000 ALTER TABLE `student_registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stuff_registration`
--

DROP TABLE IF EXISTS `stuff_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stuff_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(20) DEFAULT NULL,
  `nid_no` int(20) DEFAULT NULL,
  `mobile_no` int(20) DEFAULT NULL,
  `residence` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `virus_type` varchar(10) DEFAULT NULL,
  `stuff_affected` varchar(10) DEFAULT NULL,
  `stuff_vaccination_dose` varchar(50) DEFAULT NULL,
  `vaccine_type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stuff_registration`
--

LOCK TABLES `stuff_registration` WRITE;
/*!40000 ALTER TABLE `stuff_registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `stuff_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_registration`
--

DROP TABLE IF EXISTS `teacher_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(20) DEFAULT NULL,
  `nid_no` int(20) DEFAULT NULL,
  `mobile_no` int(20) DEFAULT NULL,
  `residence` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `virus_type` varchar(10) DEFAULT NULL,
  `teacher_affected` varchar(10) DEFAULT NULL,
  `teacher_vaccination_dose` varchar(50) DEFAULT NULL,
  `vaccine_type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_registration`
--

LOCK TABLES `teacher_registration` WRITE;
/*!40000 ALTER TABLE `teacher_registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'CVMS'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-22 22:22:22
