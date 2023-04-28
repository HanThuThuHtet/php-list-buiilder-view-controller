-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_22
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Prof. Edwardo Marvin IV','erwin20@hotmail.com','male','05394 Robin Drive\nVeumstad, AR 17511-3612','2021-10-13 13:48:20','2003-10-18 06:31:13'),(2,'Prof. Cathryn Champlin PhD','mireille76@gulgowski.com','male','24001 Monte Spurs Suite 639\nMurrayhaven, AZ 10856-1025','2014-11-04 08:11:03','2002-12-25 01:42:53'),(3,'Lorine Swaniawski','alivia69@wyman.net','male','17528 Audrey Burgs\nRunteborough, GA 03018','1993-01-15 11:53:11','1971-02-03 02:33:51'),(4,'Victor Emard','maryse.lueilwitz@hotmail.com','male','13240 Buford Mission\nWest Donnatown, ID 33421-4869','1997-10-29 08:43:20','1988-07-07 16:40:54'),(5,'Augustus O\'Connell','daugherty.clementine@wolfwhite.com','female','610 General Route\nKuhnmouth, DC 24131-7201','2005-08-01 22:46:01','2007-04-03 16:25:07'),(6,'Ottis Fay','ntrantow@gmail.com','male','1406 Bogisich Flat Apt. 609\nJenkinsfurt, NV 34867-3443','2008-10-30 13:17:36','2017-12-22 16:05:11'),(7,'Mrs. Alison Gottlieb Jr.','rmann@yahoo.com','male','518 Stuart Creek Apt. 491\nRennerfurt, CO 48996','2015-05-20 06:08:28','1977-09-10 14:57:43'),(8,'May Brekke Sr.','pokuneva@wilderman.com','male','65194 Chanel Track Suite 222\nUrbanshire, WV 62718-9258','1991-09-05 19:46:11','2007-07-17 17:45:27'),(9,'Alessandro Bogan','marilyne39@miller.com','female','666 Alessandro Village Suite 910\nSouth Jammiemouth, NY 45120','2009-08-14 12:13:12','1970-08-07 01:50:39'),(10,'Connie Hansen','hillary.armstrong@collier.com','female','129 Towne Ports\nWest Johnny, SD 45990-5686','1997-03-18 14:32:36','2005-12-02 23:19:20'),(11,'Adolph Quitzon','loyal06@swiftlind.com','female','94999 Roy Estates Suite 379\nStokeschester, WI 89473','2019-03-30 12:41:31','2002-05-05 15:36:00'),(12,'Darwin Collins','co\'kon@steuberschinner.com','male','53931 Tillman Springs\nPort Alysson, ME 33484','1995-02-06 03:16:49','1990-05-16 17:36:42'),(13,'Autumn Bartoletti DVM','schmeler.freeman@greenholt.info','female','429 Virginie Rapids\nEast Shaynaville, DE 69554-8734','2011-05-13 02:34:38','1992-07-25 21:49:11'),(14,'Yasmeen Rogahn','wtorp@romaguera.com','female','4059 Ian Ridges Apt. 395\nNorth Virginiastad, NJ 28053','1979-06-07 08:36:27','2011-12-27 13:25:49'),(15,'Dorian Goodwin','cora11@hotmail.com','female','0734 Smitham Ports Apt. 425\nPort Marie, NE 19121','2018-05-22 02:06:47','2018-10-19 06:42:00'),(16,'Maud Crooks','nthompson@cruickshank.biz','male','0281 Armstrong Highway Suite 327\nCronashire, DE 97193-7710','1994-12-27 20:42:07','1991-08-22 12:13:54'),(17,'Jeffrey Kuhic','claude79@yahoo.com','male','684 Carroll Mall Suite 834\nNew Annabellton, FL 29014','2009-02-07 08:33:46','2007-08-11 04:38:44'),(18,'Coby Larson','valentina.beier@hotmail.com','male','278 Conroy Keys\nWest Donnymouth, ID 01550','1979-06-29 21:02:17','1979-09-26 09:26:43'),(19,'Dorcas Frami','cpaucek@hickle.com','female','578 Cormier Inlet\nSouth Bridgetteport, OR 66674-7775','2000-12-12 18:49:52','1971-02-02 12:39:18'),(20,'Dr. Frieda McClure III','jennifer41@gmail.com','male','04734 Keeling Ports\nWest Agnesbury, NM 92170','1993-12-20 09:01:06','1991-08-18 03:35:31'),(21,'Dr. Ashton Labadie','carli41@dickensgusikowski.com','female','69591 Schmeler Pike Apt. 413\nGibsonview, MO 92550-2370','1970-12-30 04:56:33','1982-03-07 01:19:44'),(22,'Miss Myrtis Dooley','shannon.runte@yahoo.com','male','00617 Alejandrin Neck Suite 852\nSchummhaven, OK 89277','2019-09-19 19:49:03','1999-03-20 21:26:07'),(23,'Dr. Jeffrey Herman','lhalvorson@gmail.com','male','864 Delpha Plaza\nAntonettefurt, MI 98120','1986-01-31 14:38:02','2006-12-28 06:36:18'),(24,'Dr. Bettie Maggio Sr.','fosinski@hotmail.com','male','70025 Lynn Walks\nSouth Zechariah, MT 55292-0456','1989-08-13 01:47:16','1972-12-30 22:59:16'),(25,'Gregoria Kassulke','xkerluke@hotmail.com','male','8608 Rogahn Light\nPort Staceybury, IL 22370-8118','1988-03-11 14:56:14','1992-12-26 18:36:14'),(26,'Ms. Sister Hermann','eda88@yahoo.com','female','70096 O\'Hara Trace Suite 056\nUniquetown, CO 60380','1973-12-19 11:43:16','2022-05-15 00:29:37'),(27,'Marlon Langosh','claudie.dooley@wilkinson.com','male','277 Corkery Keys\nJustusstad, NY 40447-0774','1996-10-06 22:49:39','2013-02-22 04:01:00'),(28,'Dr. Kip Rempel','alberto.labadie@yahoo.com','female','5007 Deanna Field Apt. 366\nEast Jeff, NJ 97646-0130','1984-04-29 02:08:09','2001-10-01 19:00:17'),(29,'Brady Lind','kallie.rippin@gmail.com','male','2043 Muller Plains Apt. 500\nWest Jany, WY 80896-1893','1972-12-11 19:43:39','1986-05-11 21:51:04'),(30,'Dell Wisozk','sammie.batz@gmail.com','female','3972 Marks Pike Suite 691\nNew Terry, ID 80354-8155','2015-01-07 12:42:32','1982-03-07 17:09:18'),(31,'Kiara Klocko','noemie40@kshlerincummerata.com','male','4933 Gutkowski Lights Suite 887\nPort Mandy, FL 07278-3249','1994-02-21 22:59:01','1978-07-03 17:34:37'),(32,'Audie Walsh','marian.champlin@hotmail.com','female','075 Sherwood Trail Suite 766\nEast Maxine, MO 07795-4541','1980-06-15 00:17:17','2004-04-28 21:55:17'),(33,'Dr. Ryleigh Keeling','janae.heathcote@nienow.com','female','112 Schultz Park\nEast Tyraville, NY 34114','1974-05-20 16:17:58','2016-01-26 18:37:07'),(34,'Cristian Hoppe','derek58@roberts.org','male','7822 Althea Orchard Suite 278\nGreenholtchester, LA 56034','2010-10-09 21:17:19','1982-07-17 09:57:09'),(35,'Joseph Boyer','webster46@gmail.com','male','341 Mayer Mill\nNorth Lavadamouth, NV 46253','2017-09-10 18:53:58','1978-06-15 18:32:24'),(36,'Kameron Swaniawski','morissette.ralph@gmail.com','female','7356 Asa Hollow\nEast Christina, CT 87645','1981-11-29 17:13:13','1982-01-20 23:23:32'),(37,'Creola Reynolds','dbartoletti@beckercormier.info','female','0651 Wiley Place\nIsaiahbury, AZ 03471-5624','1990-05-28 12:11:41','1991-02-06 23:09:22'),(38,'Muhammad Mayert','kmertz@hotmail.com','female','169 Senger Via Apt. 236\nPattown, HI 09887','1990-02-14 05:19:25','2000-12-24 03:15:48'),(39,'Travis Shanahan','carlie07@hermiston.com','male','17621 Larson Square Apt. 494\nElroyburgh, VA 67976-9110','2023-01-04 18:21:42','1994-12-28 04:30:20'),(40,'Geoffrey Lindgren DVM','malachi.rodriguez@beckeraltenwerth.biz','female','835 Charlene Village Apt. 781\nVinnieberg, OH 41263','2005-03-30 03:38:48','1979-11-20 12:09:52'),(41,'Stella Spencer','greyson05@hotmail.com','male','9454 Anita Court\nJacobiland, TN 65887-7392','1998-03-16 03:44:14','1971-02-17 11:06:20'),(42,'Dr. Grayce Cartwright','shakira01@ullrich.net','female','3689 Boyle Fall Apt. 282\nWest Orphafort, PA 73314','2021-08-11 16:25:18','1985-10-23 06:11:57'),(43,'Jerrod Denesik IV','gibson.gus@robel.com','male','458 Myrna Island\nAdrianaborough, AL 13714-3617','2005-03-09 17:00:17','2021-12-23 10:48:53'),(44,'Prof. Collin Beahan','shyatt@thompson.com','male','997 Loraine Oval Apt. 577\nWilhelmineberg, HI 28506-0837','2021-10-28 10:08:18','2009-08-18 14:37:34'),(45,'Prof. Ted Klocko III','nhackett@wisokyparisian.com','female','35340 Price Mount\nNorth Nellatown, DC 54924','2016-03-03 01:24:11','1973-10-11 22:21:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-27  7:44:54
