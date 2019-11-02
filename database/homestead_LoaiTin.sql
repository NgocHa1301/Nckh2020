-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `LoaiTin`
--

DROP TABLE IF EXISTS `LoaiTin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LoaiTin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTheLoai` int(10) unsigned NOT NULL,
  `Ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhongDau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LoaiTin`
--

LOCK TABLES `LoaiTin` WRITE;
/*!40000 ALTER TABLE `LoaiTin` DISABLE KEYS */;
INSERT INTO `LoaiTin` VALUES (1,1,'Bức tranh ngành nghề','buc-tranh-nganh-nghe',NULL,'2019-10-29 15:30:33'),(2,1,'Góc cựu học sinh','goc-cuu-hoc-sinh',NULL,'2019-10-29 15:31:31'),(3,1,'Người nổi tiếng','nguoi-noi-tieng',NULL,'2019-10-29 15:32:02'),(4,2,'Du Học','Du-Hoc',NULL,NULL),(5,2,'Bậc đại học','bac-dai-hoc',NULL,'2019-10-29 15:42:09'),(6,2,'Bậc cao đẳng','bac-cao-dang',NULL,'2019-10-29 15:42:45'),(7,2,'Học bổng','hoc-bong',NULL,'2019-10-29 15:45:34'),(9,3,'Tìm hiểu bản thân','tim-hieu-ban-than',NULL,'2019-10-29 15:46:46'),(10,3,'Kỹ năng mềm','ky-nang-mem',NULL,'2019-10-29 15:47:32'),(11,3,'Câu hỏi thường gặp','cau-hoi-thuong-gap',NULL,'2019-10-29 15:48:33'),(12,3,'Khoa học hướng nghiệp','khoa-hoc-huong-nghiep',NULL,'2019-10-29 15:49:02'),(13,3,'Tư vấn chuyên gia','tu-van-chuyen-gia',NULL,'2019-10-29 15:49:35'),(14,1,'Góc doanh nghiệp','goc-doanh-nghiep',NULL,'2019-10-29 15:50:19');
/*!40000 ALTER TABLE `LoaiTin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-31 22:03:10
