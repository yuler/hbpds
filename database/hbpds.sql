-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hbpds
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `hb_ads`
--

DROP TABLE IF EXISTS `hb_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `enable` int(11) NOT NULL,
  `image_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `target_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `asa_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_ads`
--

LOCK TABLES `hb_ads` WRITE;
/*!40000 ALTER TABLE `hb_ads` DISABLE KEYS */;
/*!40000 ALTER TABLE `hb_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_art_atts`
--

DROP TABLE IF EXISTS `hb_art_atts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_art_atts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `att_id` int(10) unsigned NOT NULL,
  `art_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hb_art_atts_art_id_foreign` (`art_id`),
  CONSTRAINT `hb_art_atts_art_id_foreign` FOREIGN KEY (`art_id`) REFERENCES `hb_artworks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_art_atts`
--

LOCK TABLES `hb_art_atts` WRITE;
/*!40000 ALTER TABLE `hb_art_atts` DISABLE KEYS */;
INSERT INTO `hb_art_atts` VALUES (9,30,5),(10,34,6);
/*!40000 ALTER TABLE `hb_art_atts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_artworks`
--

DROP TABLE IF EXISTS `hb_artworks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_artworks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `art_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `art_author` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `art_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `art_size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `art_material` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `art_age` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `art_price_hkd` double(20,2) DEFAULT '0.00',
  `art_price_rmb` double(20,2) DEFAULT '0.00',
  `author_sumarry` text COLLATE utf8_unicode_ci NOT NULL,
  `art_inscription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_tizhi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_mark` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_seal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_collection_seal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_publish` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `art_annotation` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `art_signature` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `art_phase` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `art_reference` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `art_record` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_exhibition` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_source` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `art_lot` int(11) NOT NULL,
  `begin_price_hkd` double(20,2) DEFAULT '0.00',
  `end_price_hkd` double(20,2) DEFAULT '0.00',
  `begin_price_rmb` double(20,2) DEFAULT '0.00',
  `end_price_rmb` double(20,2) DEFAULT '0.00',
  `art_sumarry` text COLLATE utf8_unicode_ci NOT NULL,
  `art_dynasty` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `art_description` text COLLATE utf8_unicode_ci NOT NULL,
  `is_liupai` tinyint(4) NOT NULL,
  `lang` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `asa_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hb_artworks_asa_id_foreign` (`asa_id`),
  CONSTRAINT `hb_artworks_asa_id_foreign` FOREIGN KEY (`asa_id`) REFERENCES `hb_asas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_artworks`
--

LOCK TABLES `hb_artworks` WRITE;
/*!40000 ALTER TABLE `hb_artworks` DISABLE KEYS */;
INSERT INTO `hb_artworks` VALUES (5,'','齊白石','齊白石','100cm','','1980',0.00,0.00,'齊白石','齊白石','齊白石','齊白石','齊白石','','','','齊白石','','','','','橋太',1,1000.00,2000.00,800.00,1000.00,'左側“歷史拍賣”先去掉不顯示，待本次拍賣結束后再出現 現在沒有歷史拍賣，又和右側正在進行的拍賣不吻合。  右側，內容冗贅，重複內容太多。 預展會場和拍賣會場內容能否統一放在左側，這樣僅顯示一次即可 時間展示，不要顯示分鐘    刪除：預展會場、拍賣會場 刪除：時間顯示的分鐘秒鐘部分 例如：2015-05-30 10:30 拍賣 刪除：右側每個專場的所有 日期時間及預展文字  ，只保留（2015-05-30 10:30 拍賣）OK  參考嘉德： http://www.cguardian.com.hk/tc/auction/','213123','',0,0,'2015-05-19 06:21:29','2015-05-19 08:56:56',1),(6,'313123123','312312312','313132','3123123','3113123','31123123',1.00,1.00,'3123123','313123','3123123','313123','3123123','312312','312312','312312','312312','312312','312312','3123123','3123123','312312',2,1.00,1.00,1.00,1.00,'','312312','',0,0,'2015-05-19 06:59:55','2015-05-19 07:02:05',1),(8,'','','侧额','','','',0.00,0.00,'','','','','','','','','','','','','','',0,2654.23,123.00,1234.00,16699888.00,'','','',0,0,'2015-05-19 08:15:12','2015-05-19 08:22:38',1);
/*!40000 ALTER TABLE `hb_artworks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_asas`
--

DROP TABLE IF EXISTS `hb_asas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_asas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asa_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preview_begin_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `preview_end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `begin_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `asa_addr` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `asa_preview_addr` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `asa_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `asa_only_online` tinyint(4) NOT NULL,
  `asa_online_url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `asa_online_logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lang` tinyint(4) NOT NULL,
  `asa_group` tinyint(4) NOT NULL,
  `auction_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `hb_asas_auction_id_foreign` (`auction_id`),
  CONSTRAINT `hb_asas_auction_id_foreign` FOREIGN KEY (`auction_id`) REFERENCES `hb_auctions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_asas`
--

LOCK TABLES `hb_asas` WRITE;
/*!40000 ALTER TABLE `hb_asas` DISABLE KEYS */;
INSERT INTO `hb_asas` VALUES (1,'瓷苑擷珍 —— 瓷器精品專場','2015-05-18 00:00:00','2015-05-29 02:00:00','2015-05-11 07:00:00','2015-05-30 02:30:00','香港灣仔港灣道1號香港萬麗海景酒店8樓宴會廳','香港灣仔港灣道1號香港萬麗海景酒店8樓宴會廳','/uploads/2015/05/06/BY7Kp0OWiSDxEEFt.jpg',0,'www.epailive.com','网拍LOGO',0,1,1,'2015-04-26 07:34:54','2015-05-19 14:43:29'),(5,'稽韻千古 —— 高古陶瓷專場','2015-05-29 02:00:00','2015-05-29 11:00:00','2015-05-19 06:47:08','2015-05-30 03:30:00','香港灣仔港灣道1號香港萬麗海景酒店8樓宴會廳','香港灣仔港灣道1號香港萬麗海景酒店8樓宴會廳','/uploads/2015/05/19/oMOrD90NZihc3RQs.jpg',0,'','',0,1,1,'2015-05-19 06:36:03','2015-05-19 06:47:08'),(6,'物華天寶 —— 古董珍玩專場','2015-05-29 02:00:00','2015-05-29 11:00:00','2015-05-19 06:45:10','2015-05-30 05:30:00','香港灣仔港灣道1號萬麗海景酒店8樓宴會廳','香港灣仔港灣道1號萬麗海景酒店8樓宴會廳','/uploads/2015/05/19/ZHqI2q88YN6GdGhH.jpg',0,'','',0,1,1,'2015-05-19 06:45:10','2015-05-19 12:49:17'),(7,'丹青不渝 —— 中國書畫專場','2015-05-29 02:00:00','2015-05-29 11:00:00','2015-05-19 06:46:50','2015-05-30 06:30:00','香港灣仔港灣道1號香港萬麗海景酒店8樓宴會廳','香港灣仔港灣道1號香港萬麗海景酒店8樓宴會廳','/uploads/2015/05/19/7erkaIcZ62d4vLrW.jpg',0,'','',0,1,1,'2015-05-19 06:46:50','2015-05-19 12:49:24');
/*!40000 ALTER TABLE `hb_asas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_attachments`
--

DROP TABLE IF EXISTS `hb_attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `att_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `att_path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `att_type` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_attachments`
--

LOCK TABLES `hb_attachments` WRITE;
/*!40000 ALTER TABLE `hb_attachments` DISABLE KEYS */;
INSERT INTO `hb_attachments` VALUES (1,'QQ图片20150422214159.jpg','/uploads/2015/04/26/xgXEP55cbbbxtpPE.jpg',0,'2015-04-26 07:34:52','2015-04-26 07:34:52'),(2,'2.png','/uploads/2015/04/26/ykcrq65CV4VsV4Cw.png',0,'2015-04-26 07:38:08','2015-04-26 07:38:08'),(3,'psb.jpg','/uploads/2015/04/26/9tiEHYNLHIXbs6lp.jpg',0,'2015-04-26 08:03:39','2015-04-26 08:03:39'),(4,'psb (1).jpg','/uploads/2015/04/26/2GQcuQsvON1zcYcg.jpg',0,'2015-04-26 08:15:20','2015-04-26 08:15:20'),(5,'psb.jpg','/uploads/2015/04/26/pxsUMso7h2pBogjU.jpg',0,'2015-04-26 08:15:26','2015-04-26 08:15:26'),(6,'证件照.jpg','/uploads/2015/04/26/Th26fChNYBnWryb8.jpg',0,'2015-04-26 08:15:31','2015-04-26 08:15:31'),(7,'2.png','/uploads/2015/04/26/M0QteYESWgscdQOR.png',0,'2015-04-26 08:16:14','2015-04-26 08:16:14'),(8,'QQ图片20150422214159.jpg','/uploads/2015/04/26/rlggzqqJrHmUDPwO.jpg',0,'2015-04-26 08:16:17','2015-04-26 08:16:17'),(9,'QQ图片20150422225040.png','/uploads/2015/04/26/FkeyjQw2qnx8QXxm.png',0,'2015-04-26 08:16:19','2015-04-26 08:16:19'),(10,'psb (1).jpg','/uploads/2015/04/26/widUSEp3Ss4HOfVr.jpg',0,'2015-04-26 08:16:26','2015-04-26 08:16:26'),(11,'psb.jpg','/uploads/2015/04/26/544sq76pxySN9VKX.jpg',0,'2015-04-26 08:16:30','2015-04-26 08:16:30'),(12,'屏幕快照 2015-03-18 上午10.39.57.png','/uploads/2015/04/27/FGe7Vi3WZxMeIU0D.png',1,'2015-04-27 07:24:08','2015-04-27 07:24:08'),(13,'屏幕快照 2015-04-27 下午3.04.37.png','/uploads/2015/04/27/tGvPnC2OWjBs7lTO.png',1,'2015-04-27 07:24:22','2015-04-27 07:24:22'),(14,'Koala.jpg','/uploads/2015/04/27/Oa7vEj2CTW9OVKsl.jpg',0,'2015-04-27 13:14:17','2015-04-27 13:14:17'),(15,'Penguins.jpg','/uploads/2015/04/27/lCyOb3AXedkrLnZD.jpg',0,'2015-04-27 13:14:31','2015-04-27 13:14:31'),(16,'Penguins.jpg','/uploads/2015/04/27/zkFIHTJDZTdSBw51.jpg',0,'2015-04-27 13:14:42','2015-04-27 13:14:42'),(17,'Penguins.jpg','/uploads/2015/04/27/RBoIzBpLggUYljCN.jpg',0,'2015-04-27 13:15:04','2015-04-27 13:15:04'),(18,'Tulips.jpg','/uploads/2015/04/27/uYkz1RhICpxW12Aw.jpg',0,'2015-04-27 13:15:21','2015-04-27 13:15:21'),(19,'image.jpg','/uploads/2015/04/27/kkcfUCdey9VNy31z.jpg',0,'2015-04-27 14:23:41','2015-04-27 14:23:41'),(20,'屏幕快照 2015-03-18 上午10.39.57.png','/uploads/2015/04/28/TIPaOjGlyJtdkZ7i.png',0,'2015-04-28 13:47:15','2015-04-28 13:47:15'),(21,'psb (1).jpg','/uploads/2015/05/05/2GppJQH8reqiiasg.jpg',0,'2015-05-05 14:49:49','2015-05-05 14:49:49'),(22,'1078891_171634084463_2.jpg','/uploads/2015/05/06/jOjzE2ieOMQ0jhns.jpg',0,'2015-05-06 08:50:08','2015-05-06 08:50:08'),(23,'1078891_171634084463_2.jpg','/uploads/2015/05/06/RUIEpUDR7BOJN3Qo.jpg',0,'2015-05-06 12:08:25','2015-05-06 12:08:25'),(24,'1367046916977.jpg','/uploads/2015/05/06/BY7Kp0OWiSDxEEFt.jpg',0,'2015-05-06 15:34:06','2015-05-06 15:34:06'),(25,'e52a4afdea938b4c0b8568976ff3aedf.jpg','/uploads/2015/05/06/aCHFDmObw1dWWHqX.jpg',0,'2015-05-06 15:37:14','2015-05-06 15:37:14'),(26,'u=986598686,4193954648&fm=21&gp=0.jpg','/uploads/2015/05/06/MP6It9nBvEfO5xDk.jpg',0,'2015-05-06 15:38:20','2015-05-06 15:38:20'),(27,'2459179_161059054893_2.jpg','/uploads/2015/05/06/hjCK31gtUW7aVse7.jpg',0,'2015-05-06 15:40:15','2015-05-06 15:40:15'),(28,'20140510104901_1880 (1).jpg','/uploads/2015/05/06/HMrDl2Kn54IXcumw.jpg',0,'2015-05-06 15:51:33','2015-05-06 15:51:33'),(29,'20150513001001035_TB.jpg','/uploads/2015/05/14/EjrUcxK05t2hYXOy.jpg',0,'2015-05-14 01:05:33','2015-05-14 01:05:33'),(30,'0002..jpg','/uploads/2015/05/19/gxyCxosvsszLIGOE.jpg',0,'2015-05-19 06:21:12','2015-05-19 06:21:12'),(31,'0001.jpg','/uploads/2015/05/19/oMOrD90NZihc3RQs.jpg',0,'2015-05-19 06:35:57','2015-05-19 06:35:57'),(32,'0001.jpg','/uploads/2015/05/19/ZHqI2q88YN6GdGhH.jpg',0,'2015-05-19 06:45:05','2015-05-19 06:45:05'),(33,'0001.jpg','/uploads/2015/05/19/7erkaIcZ62d4vLrW.jpg',0,'2015-05-19 06:46:48','2015-05-19 06:46:48'),(34,'0001.jpg','/uploads/2015/05/19/llLSTkkJkSHQ4gpj.jpg',0,'2015-05-19 06:59:28','2015-05-19 06:59:28'),(35,'辜1.jpg','/uploads/2015/05/19/JTmLUI3xPOTYt7Hv.jpg',0,'2015-05-19 08:39:21','2015-05-19 08:39:21'),(36,'辜1.jpg','/uploads/2015/05/19/OvZwGWYbbzMgvKuj.jpg',0,'2015-05-19 08:39:58','2015-05-19 08:39:58');
/*!40000 ALTER TABLE `hb_attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_auctions`
--

DROP TABLE IF EXISTS `hb_auctions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_auctions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auction_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preview_begin_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `preview_end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `auction_begin_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `auction_end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lang` tinyint(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_auctions`
--

LOCK TABLES `hb_auctions` WRITE;
/*!40000 ALTER TABLE `hb_auctions` DISABLE KEYS */;
INSERT INTO `hb_auctions` VALUES (1,'橫濱國際香港春季拍賣會','2015-05-29 02:00:00','2015-05-29 11:00:00','2015-05-30 02:00:00','2015-05-30 11:00:00',0,'2015-04-26 07:32:43','2015-05-19 07:23:58');
/*!40000 ALTER TABLE `hb_auctions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_banners`
--

DROP TABLE IF EXISTS `hb_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `target_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `enable` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_banners`
--

LOCK TABLES `hb_banners` WRITE;
/*!40000 ALTER TABLE `hb_banners` DISABLE KEYS */;
INSERT INTO `hb_banners` VALUES (1,'123','/uploads/2015/04/27/Oa7vEj2CTW9OVKsl.jpg','http://www.baidu.com',123,1,'2015-04-27 13:14:19','2015-04-27 13:44:15'),(2,'11111','/uploads/2015/04/27/kkcfUCdey9VNy31z.jpg','http://www.baidu.com',111111,1,'2015-04-27 13:14:29','2015-04-27 14:23:46'),(3,'pic1','/uploads/2015/05/06/RUIEpUDR7BOJN3Qo.jpg','http://182.92.64.86/',1,1,'2015-05-06 12:11:15','2015-05-06 12:11:15'),(4,'2015春拍总广告','/uploads/2015/05/14/EjrUcxK05t2hYXOy.jpg','',0,1,'2015-05-13 10:54:00','2015-05-14 01:05:35');
/*!40000 ALTER TABLE `hb_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_materials`
--

DROP TABLE IF EXISTS `hb_materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` tinyint(4) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_materials`
--

LOCK TABLES `hb_materials` WRITE;
/*!40000 ALTER TABLE `hb_materials` DISABLE KEYS */;
INSERT INTO `hb_materials` VALUES (1,'2015-05-03 13:09:29','2015-05-04 06:29:56','111','<p>11111</p>',0,'2015-05-04 06:29:56',1);
/*!40000 ALTER TABLE `hb_materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_new_attachments`
--

DROP TABLE IF EXISTS `hb_new_attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_new_attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attachment_id` int(10) unsigned NOT NULL,
  `new_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `hb_new_attachments_new_id_foreign` (`new_id`),
  KEY `hb_new_attachments_attachment_id_foreign` (`attachment_id`),
  CONSTRAINT `hb_new_attachments_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `hb_attachments` (`id`) ON DELETE CASCADE,
  CONSTRAINT `hb_new_attachments_new_id_foreign` FOREIGN KEY (`new_id`) REFERENCES `hb_news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_new_attachments`
--

LOCK TABLES `hb_new_attachments` WRITE;
/*!40000 ALTER TABLE `hb_new_attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `hb_new_attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hb_news`
--

DROP TABLE IF EXISTS `hb_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hb_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` tinyint(4) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hb_news`
--

LOCK TABLES `hb_news` WRITE;
/*!40000 ALTER TABLE `hb_news` DISABLE KEYS */;
INSERT INTO `hb_news` VALUES (1,'新闻测试标题新闻测试标题','<p><b>有内容，</b>没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。有内容，没有图片的新闻测试。</p>',0,'2015-04-27 07:15:54',1,'2015-04-27 07:15:54','2015-04-27 07:15:54'),(2,'测试新闻带图片带图片','<p>测试新闻带图片带图片测试新闻带图片带图片测试新闻带图片带图片测试新闻带图片带图片测试新闻带图片带图片<br></p><p><img alt=\"屏幕快照 2015-03-18 上午10.39.57.png\" src=\"/uploads/2015/04/27/FGe7Vi3WZxMeIU0D.png\" data-image-size=\"708,485\"><br></p><p><br></p><p>测试新闻带图片带图片<br></p><p><img alt=\"屏幕快照 2015-04-27 下午3.04.37.png\" src=\"/uploads/2015/04/27/tGvPnC2OWjBs7lTO.png\" data-image-size=\"223,125\"><br></p><p><br></p><p>测试新闻带图片带图片<br></p>',0,'2015-04-27 07:24:25',1,'2015-04-27 07:24:25','2015-04-27 07:24:25'),(3,'12','<p>1111</p>',0,'0000-00-00 00:00:00',0,'2015-05-04 13:38:56','2015-05-04 13:38:56');
/*!40000 ALTER TABLE `hb_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_04_05_040046_create_hb_news_table',1),('2015_04_05_080701_create_hb_attachments_table',1),('2015_04_05_083350_create_hb_new_attachments_table',1),('2015_04_08_123049_create_hb_auctions_table',1),('2015_04_08_221939_create_hb_asas_table',1),('2015_04_08_221940_create_hb_artworks_table',1),('2015_04_12_132052_create_hb_banners_table',1),('2015_04_12_132819_create_hb_ads_table',1),('2015_04_14_211409_create_hb_art_atts_table',1),('2015_04_29_202424_create_hb_materials_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com','$2y$10$kxpPB3OxZvX2hn5oD1LrhukXfStxVud.manjfXHxBIDrLi/pkOHo2','3QEGyHNmOVocL4uY3AjzfHWYnuXMJoObruxfNu9kmh0Z1s51rhZxpXTl3bBH','2015-04-27 06:06:12','2015-05-19 06:44:24');
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

-- Dump completed on 2015-05-19 22:48:05
