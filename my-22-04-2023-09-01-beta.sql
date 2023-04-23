-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_19
-- ------------------------------------------------------
-- Server version	10.5.19-MariaDB-cll-lve

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
-- Table structure for table `my`
--

DROP TABLE IF EXISTS `my`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `debt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my`
--

LOCK TABLES `my` WRITE;
/*!40000 ALTER TABLE `my` DISABLE KEYS */;
INSERT INTO `my` VALUES (34,'Rudolph Fadel',44,'2017-12-02 16:07:39'),(35,'Janiya Wuckert',6,'2020-01-07 13:14:40'),(36,'Antonia O\'Hara Jr.',82474675,'2000-10-18 17:15:40'),(37,'Ms. Susana Bergnaum',378973,'1990-08-21 09:37:11'),(38,'Josue Schowalter',39559,'2019-12-22 01:14:16'),(39,'Dina Gerhold',528680,'2007-03-25 10:45:44'),(40,'Dr. Camryn Bayer',71,'2009-08-31 19:07:51'),(41,'Letitia Ratke',698849,'2022-06-29 12:10:16'),(42,'Virginie Nienow V',73,'2012-08-11 12:51:44'),(43,'Abel Luettgen Sr.',13813,'1999-09-29 16:11:52'),(44,'Dr. Kari Toy I',62828672,'1998-11-06 17:55:08'),(45,'Gonzalo Walsh',18857,'1999-05-15 00:58:17'),(46,'Pearlie Wolff V',830893,'1982-03-24 19:56:02'),(47,'Prof. Jaiden Lehner',0,'2003-03-10 01:38:04'),(48,'Prof. Darlene Huel',2223252,'1988-08-09 19:33:17'),(49,'Dr. Amparo Wehner I',6399,'2006-03-20 03:47:45'),(50,'Ms. Laura Boyle',94,'2004-06-21 02:19:04'),(51,'Domenick Jacobs',8,'1975-01-08 04:27:58'),(52,'Sharon Satterfield',2517,'1981-06-05 12:03:47'),(53,'Zora Rohan DDS',5718,'2002-08-09 13:36:43'),(54,'Jennifer Cruickshank',730566,'1975-10-11 04:35:21'),(55,'Mrs. Peggie Stroman I',23042,'1976-11-02 12:14:09'),(56,'Rosalee Kautzer',9,'1982-01-26 11:20:34'),(57,'Cristian Hagenes',674,'1975-11-16 05:12:35'),(58,'Dr. Dangelo Carroll',74504036,'1987-05-21 12:39:16'),(59,'Jasmin Boyer',4459642,'2019-07-09 23:17:33'),(60,'Ms. Jada McLaughlin I',792,'1994-10-14 11:31:11'),(61,'Alec Bahringer',27,'1996-11-10 12:06:16'),(62,'Curtis Rosenbaum',13,'1977-04-07 02:40:09'),(63,'Valerie Hartmann II',0,'2015-08-16 13:25:08'),(64,'Shayna Reinger',197147,'2022-10-01 23:20:28'),(65,'Lorenz Russel',632,'1989-06-29 18:24:14'),(66,'Lucius Romaguera',645,'1988-12-21 02:07:30'),(67,'Juvenal Langosh',233178,'1992-10-06 16:42:26'),(68,'Dr. Laurel Wunsch',490,'2023-03-10 01:26:11'),(69,'Denis Dickinson',25942286,'1970-09-10 16:08:48'),(70,'Kayli McClure',21724,'2011-11-18 11:51:13'),(71,'Prof. Isac Nolan',8,'1983-03-08 05:08:47'),(72,'Jan Doyle II',0,'1986-07-22 07:53:32'),(73,'Ms. Eileen Barton DDS',0,'1970-12-08 03:24:36'),(74,'Eliane Kunze',1948,'1982-08-24 15:52:32'),(75,'Marshall Bahringer',995189761,'1998-12-23 08:21:45'),(76,'Triston Gleichner',1642,'1970-08-04 17:25:31'),(77,'Bridget Johnson',0,'1997-09-16 15:06:20'),(78,'Macey Hintz II',72646,'2015-10-17 14:52:01'),(79,'Dejon Hegmann II',5242,'2012-01-26 05:03:03'),(80,'Ryleigh Berge',2,'1976-12-04 13:10:28'),(81,'Prof. Marcellus Emmerich IV',283,'2002-07-04 00:09:02'),(82,'Dustin Dooley',2,'1988-06-09 21:31:48'),(83,'Alexandrea Hintz',2,'1974-11-20 03:49:11'),(84,'Rico Kirlin V',99582,'1993-06-13 13:33:08'),(85,'Watson Wuckert',9909932,'2007-07-25 16:54:42'),(86,'Effie O\'Keefe',52376475,'2004-04-28 15:40:54'),(87,'Danielle Predovic',4859,'1980-11-25 01:58:21'),(88,'Katelynn Boyle',26234428,'2018-12-19 10:40:58'),(89,'Prof. Brannon Cassin DDS',0,'1981-09-16 22:09:35'),(90,'Isabelle Murray',7,'1998-03-14 06:43:42'),(91,'Mrs. Aileen Murazik II',631125286,'2000-07-25 22:00:29'),(92,'Prof. Timmy Morar Sr.',6753,'1982-08-09 18:44:44'),(93,'Ryley Koelpin',91,'1986-01-04 06:12:42'),(94,'Prof. Anibal VonRueden PhD',45126713,'1978-02-03 07:55:06'),(95,'Brooklyn Cronin',691,'2014-07-11 15:41:58'),(96,'Dr. Diego Padberg',1214525,'2002-09-27 06:08:26'),(97,'Kendrick Abbott DDS',17,'1999-10-16 11:44:47'),(98,'Dana Sanford I',499155,'1974-04-17 07:05:46'),(99,'Nia Wisozk',9,'1973-11-05 20:27:35'),(100,'Mr. Jarod Lemke',804,'2018-01-02 10:22:28'),(101,'Toy Larkin',54341633,'1971-07-12 16:17:19'),(102,'Brielle Schmitt Jr.',2797695,'2018-06-05 00:13:02'),(103,'Troy Kunze IV',0,'1993-03-10 22:25:47'),(104,'Prof. Geraldine Kutch',9919599,'1970-03-19 14:46:37'),(105,'Clemens Hamill',63495807,'2007-04-22 02:15:47'),(106,'Adelbert Heaney',6,'2019-07-30 08:58:54'),(107,'Madalyn Berge',594,'1996-02-15 17:58:07'),(108,'Dr. Troy Koss',0,'1993-03-25 06:40:22'),(109,'Anabelle Crist IV',2347581,'2007-09-24 05:43:11'),(110,'Trystan Beer DDS',51528,'2022-06-24 03:04:32'),(111,'Gwen Hyatt',636525,'2006-12-23 09:43:38'),(112,'Dariana Kassulke III',3658,'1991-09-19 07:07:10'),(113,'Hal Hodkiewicz',5051142,'1976-08-22 13:57:00'),(114,'Mrs. June Wisoky',7,'2005-12-25 20:45:31'),(115,'Guido Haley II',0,'1998-03-25 00:57:41'),(116,'Travis Robel Sr.',1048209,'2008-02-08 01:05:07'),(117,'Chadrick Pollich',458568714,'1995-11-12 11:36:37'),(118,'Adolphus O\'Hara',33,'2009-11-04 18:38:16'),(119,'Orie Streich',252810,'1984-08-13 21:42:10'),(120,'Ms. Fleta Larson III',5125120,'1989-01-01 23:40:59'),(121,'Clarissa Leannon Sr.',4147809,'2006-06-15 12:09:36'),(122,'Araceli Crona Jr.',30,'1979-08-11 06:39:43'),(123,'Dianna Stokes III',845,'2018-07-26 01:21:17'),(124,'Broderick Kirlin',70511,'2000-09-04 01:15:55'),(125,'Willa Kub IV',33173046,'1972-11-30 04:05:57'),(126,'Mable O\'Conner',37737312,'1970-03-14 11:54:09'),(127,'Dallin Cartwright',9647,'1984-05-04 11:51:59'),(128,'Mattie Paucek',6878553,'2022-10-02 16:03:28'),(129,'Clare Brekke II',44043,'2002-06-28 00:46:39'),(130,'Rubye Bashirian',90377,'2004-11-05 15:01:41'),(131,'Madyson Kulas',641372560,'2015-01-15 06:01:43'),(132,'Dr. Esta Macejkovic',663351756,'1993-02-27 05:16:10'),(133,'Jackson Wisozk MD',33,'1981-04-30 03:50:23');
/*!40000 ALTER TABLE `my` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-22  9:01:08
