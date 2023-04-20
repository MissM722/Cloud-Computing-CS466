-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_22
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-cll-lve

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
-- Table structure for table `DISTRICT`
--

DROP TABLE IF EXISTS `DISTRICT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DISTRICT` (
  `D_ID` int(2) NOT NULL,
  `D_W_ID` int(1) NOT NULL,
  `D_NAME` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_STREET_1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_STREET_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_CITY` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_STATE` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_ZIP` char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_TAX` decimal(4,4) DEFAULT NULL,
  `D_YTD` decimal(12,2) DEFAULT NULL,
  `D_NEXT_O_ID` int(255) DEFAULT NULL,
  PRIMARY KEY (`D_W_ID`,`D_ID`),
  CONSTRAINT `DISTRICT_ibfk_1` FOREIGN KEY (`D_W_ID`) REFERENCES `WAREHOUSE` (`W_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DISTRICT`
--

LOCK TABLES `DISTRICT` WRITE;
/*!40000 ALTER TABLE `DISTRICT` DISABLE KEYS */;
INSERT INTO `DISTRICT` VALUES (3,1,'Marquardt ','6732 Makayla Plaza A','','South Frederic','Ge','21431-843',0.0416,30402776.09,6),(4,1,'Romaguera-','52670 Lueilwitz Spri','','New Itzelton','Ka','68092',0.0308,581070268.19,4),(5,1,'Pfannersti','2169 Dandre Manors A','','North Laurenmouth','Di','61472',0.0396,444945359.68,8),(6,1,'Johnston, ','48665 Augusta Dale A','','Leannonborough','Ut','78363-516',0.0146,842190592.87,0),(7,1,'Will Inc','0936 Dach Trace Suit','','New Adrian','Ge','33729-136',0.0000,393755040.56,1),(10,1,'Thompson-M','8348 Elwyn Turnpike','','Ashlyville','Ne','52703-032',0.0000,857692157.19,2),(13,1,'Torphy, Wa','455 Eli Roads','','West Michaelaburgh','Ne','14067-241',0.0368,418572706.75,6),(16,1,'Hettinger-','7948 Konopelski Port','','New Raheemhaven','Ge','24975-534',0.0290,979470213.44,0),(20,1,'Hettinger-','64613 Stark Port Sui','','East Gaylord','Rh','72202',0.0000,47824535.50,8),(1,2,'Hills PLC','25416 Stroman Viaduc','','Schadenberg','Or','49795-175',0.0000,524502135.00,1),(2,2,'Mohr, Wiso','71761 Miller Groves ','4473','East Sheilaview','In','81382-165',0.0305,658330019.94,4),(8,2,'Goodwin, P','269 Kyleigh Groves A','1267','Lake Lupe','Ge','30070',0.0387,408597376.96,7),(9,2,'McKenzie-A','379 Abernathy Shores','','West Ebbafurt','Mi','78738-520',0.0395,874535359.00,6),(11,2,'Orn, Armst','6937 Colby Lakes Apt','','West Jamal','Ca','75656',0.0361,818957195.98,9),(12,2,'Sauer, Mur','0733 Karson Roads','','New Horace','Ne','00432',0.0410,764014022.67,5),(14,2,'Ferry-Pauc','40444 Carroll Passag','13880','New Libbybury','Wa','61537-893',0.0367,558856311.23,0),(15,2,'Schmidt-Mo','140 Kunze Causeway A','82583','Port Immanuel','Co','67677',0.0000,279974198.36,6),(17,2,'Lebsack, H','2754 Cielo Causeway','','North Ivy','Co','36659',0.0000,881251233.13,2),(18,2,'Marvin PLC','2795 Wehner Roads Su','','Pattieland','Co','22856',0.0012,378657903.66,2),(19,2,'Borer, Str','72926 Dillan Canyon ','9459','Javonstad','Wy','02871',0.0424,620289418.45,3);
/*!40000 ALTER TABLE `DISTRICT` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-20 19:29:44
