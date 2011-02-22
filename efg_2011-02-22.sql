# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: efg
# Generation Time: 2011-02-22 15:35:07 +0800
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table boards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boards`;

CREATE TABLE `boards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `content` text,
  `category` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='最新消息';

LOCK TABLES `boards` WRITE;
/*!40000 ALTER TABLE `boards` DISABLE KEYS */;
INSERT INTO `boards` (`id`,`title`,`content`,`category`,`created`,`modified`,`lang`)
VALUES
	(8,'莒光越改越慢！越貴！ 北-高七小時','<p>\n	台鐵下個月將改點，大有約3百班次受到影響，復興號也將全面退出西部幹線，改由莒光號行駛，但是停靠車站幾乎一樣，部分班次卻越跑越慢，票價卻貴了一百零七元，不少乘客聽到抱怨不合理。</p>\n',14,'2010-11-19 05:22:09','2010-11-19 05:22:09','zhtw'),
	(9,'低底盤公車 明年底達四分之一','<div class=\"w\">\n	<div id=\"ynwsartcontent\">\n		<p>\n			〔<a class=\"ynwsyq yqclass\" href=\"http://tw.news.yahoo.com/article/url/d/a/101119/78/2hely.html?\" id=\"yui-gen10\" title=\"自由時報\"><span>自由時報</span></a>記者劉榮／台北報導〕北市逐年推廣低底盤公車，獲中央補助一億九千二百萬元，年底前購置四十七輛油電<a class=\"ynwsyq yqclass\" href=\"http://tw.news.yahoo.com/article/url/d/a/101119/78/2hely.html?\" id=\"yui-gen11\" title=\"混合動力\"><span>混合動力</span></a>低底盤公車、廿七輛低底盤公車，正式上路。</p>\n		<p>\n			台北市交通局表示，到民國一百年底，<a class=\"ynwsyq yqclass\" href=\"http://tw.news.yahoo.com/article/url/d/a/101119/78/2hely.html?\" id=\"yui-gen12\" title=\"台北市\"><span>台北市</span></a>低底盤公車數量將達千輛以上，全市四分之一公車都將汰換為低底盤公車，而這次添購的油電動力及低底盤公車，會全數投入三○七這條<a class=\"ynwsyq yqclass\" href=\"http://tw.news.yahoo.com/article/url/d/a/101119/78/2hely.html?\" id=\"yui-gen13\" title=\"黃金\"><span>黃金</span></a>路線行駛。</p>\n		<p>\n			台北客運總經理李建文說，投入三○七這條黃金路線行駛，是首條橫跨<a class=\"ynwsyq yqclass\" href=\"http://tw.news.yahoo.com/article/url/d/a/101119/78/2hely.html?\" id=\"yui-gen14\" title=\"台北縣\"><span>台北縣</span></a>市，以油電動力低底盤公車營運路線，除了平穩，也符合低碳環保的趨勢。</p>\n		<p>\n			台北市交通局公共運輸處表示，全市低底盤公車預估年底可達到五百九十九輛，明年可以再汰換至少二百五十輛，加上配合中央推動公共運輸發展計畫，台北市低底盤公車數量到民國一百年，預估可以達到千輛以上，達到北市聯營公車四分之一。</p>\n	</div>\n</div>\n',16,'2010-11-19 05:25:34','2010-11-19 05:25:34','zhtw');

/*!40000 ALTER TABLE `boards` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cases
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cases`;

CREATE TABLE `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `cases` WRITE;
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
INSERT INTO `cases` (`id`,`name`,`weight`,`project_id`,`created`,`modified`)
VALUES
	(1,'測試公司一',NULL,30,NULL,NULL);

/*!40000 ALTER TABLE `cases` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `hash_id` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`,`name`,`file_type`,`category`,`hash_id`,`weight`,`created`,`modified`)
VALUES
	(1,'f_2529087_1.jpg','pix','project',30,NULL,'2010-11-19 00:39:38','2010-11-19 00:39:38'),
	(3,'f_2529101_1.jpg','pix','project',30,NULL,'2010-11-19 00:39:38','2010-11-19 00:39:38'),
	(12,'f_2529088_11.jpg','pix','project',30,NULL,'2010-11-19 03:48:51','2010-11-19 03:48:51');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nodes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nodes`;

CREATE TABLE `nodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `type` varchar(45) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='記錄雜項資料';

LOCK TABLES `nodes` WRITE;
/*!40000 ALTER TABLE `nodes` DISABLE KEYS */;
INSERT INTO `nodes` (`id`,`title`,`content`,`type`,`parent`,`lang`,`created`,`modified`)
VALUES
	(1,'為建築帶來新的面貌‧也是為城市帶來生活新的風景','<p>\n	<span style=\"font-size: 12px\"><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/2fd64c267ff554ed3bd6b3bea361bc49.jpg\" style=\"width: 611px; height: 284px\" />&nbsp;</span></p>\n<p>\n	&nbsp;</p>\n','7',NULL,'zhtw','2010-11-12 03:03:00','2011-01-04 16:00:54'),
	(2,'設計規劃','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/c9af2358bcdb1a599df6d63fac4f431e.jpg\" style=\"width: 611px; height: 200px\" /></p>\n','8',NULL,'zhtw','2010-11-12 03:03:00','2011-01-04 16:05:06'),
	(3,'備料加工','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/67e08f7d6d11b13cd228f3ec233f4be9.jpg\" style=\"width: 611px; height: 250px\" /></p>\n','9',NULL,'zhtw','2010-11-12 03:03:00','2011-01-04 16:30:48'),
	(4,'責任施工','<p>\n	<span style=\"font-size: 14px\"><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/53dcb3a906321f25271778cb11f3c48e.jpg\" style=\"width: 610px; height: 206px\" /></span></p>\n','10',NULL,'zhtw','2010-11-12 03:03:00','2011-01-04 16:43:13'),
	(5,'顧問監造','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/35027a16296ee144a793660092ecfcb0.jpg\" style=\"width: 611px; height: 236px\" /></p>\n','11',NULL,'zhtw','2010-11-12 03:03:00','2011-01-04 17:28:22'),
	(6,'承攬項目','<p>\n	&quot;專業&quot;是整合過去連結未來的一種能力，而賦予建築的生命亦是如此</p>\n','12',NULL,'zhtw','2010-11-12 03:03:00','2010-12-13 15:48:43'),
	(7,'資訊百科',NULL,'13',NULL,'zhtw','2010-11-12 03:03:00','2010-11-18 03:31:34'),
	(8,'welcome','Welcom to...','7',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(9,'design',NULL,'8',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(10,'material',NULL,'9',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(11,'installation',NULL,'10',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(12,'consultation',NULL,'11',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(13,'service',NULL,'12',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(14,'knowledge',NULL,'13',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(15,'雨遮採光罩','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/3b96d71f4d780ba9e0f8a92c7cf61aeb.jpg\" /></p>\n','24',NULL,'zhtw','2010-11-18 21:10:13','2011-01-24 04:04:19'),
	(16,'帷幕牆系統','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/9da88e11af2723e904b15b79e765fbac.jpg\" /></p>\n','20',NULL,'zhtw','2010-11-18 21:10:13','2011-01-05 09:44:55'),
	(17,'結構玻璃系統','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/cea340f0fcc5acc60faf9bae3e0f4748.jpg\" style=\"width: 610px; height: 2085px\" /></p>\n','21',NULL,'zhtw','2010-11-18 21:10:13','2011-01-24 10:28:57'),
	(21,'System_menu1',NULL,'28',NULL,'en','2010-11-18 22:55:02','2010-11-18 22:55:02'),
	(22,'玻璃帷幕','<p>\n	工程實績測試範例頁面</p>\n','30',NULL,'zhtw','2010-11-18 23:23:32','2010-11-18 23:23:32'),
	(24,'玻璃五金','<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width: 500px\">\n	<tbody>\n		<tr>\n			<td>\n				<p>\n					玻璃爪具<a href=\"http://121.50.181.129/efg/zhtw/nodes/17\"><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/877f81b35d5aa215500e544f555e9c1a.png\" style=\"width: 283px; height: 151px\" /></a></p>\n			</td>\n			<td>\n				&nbsp;test</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;\n				<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width: 500px\">\n					<tbody>\n						<tr>\n							<td>\n								&nbsp;</td>\n							<td>\n								&nbsp;</td>\n							<td>\n								&nbsp;</td>\n						</tr>\n						<tr>\n							<td>\n								&nbsp;</td>\n							<td>\n								&nbsp;</td>\n							<td>\n								&nbsp;</td>\n						</tr>\n						<tr>\n							<td>\n								&nbsp;</td>\n							<td>\n								&nbsp;</td>\n							<td>\n								&nbsp;</td>\n						</tr>\n					</tbody>\n				</table>\n			</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n		<tr>\n			<td>\n				&nbsp;</td>\n			<td>\n				&nbsp;</td>\n		</tr>\n	</tbody>\n</table>\n<p>\n	&nbsp;</p>\n','31',NULL,'zhtw','2010-11-19 17:05:14','2011-02-11 06:31:36'),
	(25,'德國多瑪',NULL,'32',NULL,'zhtw','2010-11-19 17:05:14','2010-11-19 17:05:14'),
	(26,'DORMA',NULL,'32',NULL,'en','2010-11-19 17:05:14','2010-11-19 17:05:14'),
	(36,'連絡我們',NULL,'42',NULL,'zhtw',NULL,NULL),
	(37,'Contact Us',NULL,'42',NULL,'en',NULL,NULL),
	(31,'玻璃扶手欄杆系統','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/532e0cebb43b07d8c50c48ce3fa7968b.jpg\" style=\"width: 610px; height: 1183px\" /></p>\n','37',NULL,'zhtw','2011-01-24 08:43:02','2011-01-24 09:33:21'),
	(32,'玻璃隔間系統','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/600f7f56dc3ceafbe3e08638a61a3499.jpg\" style=\"width: 610px; height: 1183px\" /></p>\n','38',NULL,'zhtw','2011-01-24 10:28:01','2011-01-24 10:30:57'),
	(34,'氣密鋁門窗','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/de69490fa86d72784ca7d124a6b12ee0.jpg\" style=\"width: 610px; height: 1386px\" /></p>\n','40',NULL,'zhtw','2011-01-24 10:32:19','2011-01-24 10:44:10'),
	(27,'德國多瑪','<p>\n	<img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/874c18b59fc0f8d6bbf9ac271c48f6df.jpg\" style=\"width: 610px; height: 1075px\" /><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/c7b12f5f515812f70d168b2d21d77079.jpg\" style=\"width: 610px; height: 453px\" /><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/353eaa863ead6ca3003b0c5349e74087.jpg\" style=\"width: 610px; height: 349px\" /><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/e468ddf299f7f873c019f52871b9b66d.jpg\" style=\"width: 610px; height: 344px\" /><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/136b9a497875394b4c6270bb07739499.jpg\" style=\"width: 610px; height: 692px\" /><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/b55a767984a4b86d21590be7c9025933.jpg\" style=\"width: 610px; height: 837px\" /><img alt=\"\" src=\"http://121.50.181.129/efg/public/files/ckfiles/c958786d3cfcda76293b1639ad5a2acd.jpg\" style=\"width: 610px; height: 463px\" /></p>\n','33',NULL,'zhtw','2010-12-08 17:29:51','2011-01-25 09:48:33'),
	(28,'玻璃加工',NULL,'34',NULL,'zhtw','2010-12-08 17:32:17','2010-12-08 17:32:17');

/*!40000 ALTER TABLE `nodes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table taxonomies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taxonomies`;

CREATE TABLE `taxonomies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `weight` float DEFAULT '0',
  `lang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

LOCK TABLES `taxonomies` WRITE;
/*!40000 ALTER TABLE `taxonomies` DISABLE KEYS */;
INSERT INTO `taxonomies` (`id`,`name`,`category`,`bio`,`parent`,`weight`,`lang`)
VALUES
	(30,'玻璃帷幕','project',NULL,NULL,0,'zhtw'),
	(31,'玻璃五金','product',NULL,NULL,1,'zhtw'),
	(32,'德國多瑪','summary',NULL,NULL,0,NULL),
	(7,'首頁歡迎','summary',NULL,NULL,0,NULL),
	(8,'設計規劃','summary',NULL,NULL,0,NULL),
	(9,'備料加工','summary',NULL,NULL,0,NULL),
	(10,'責任施工','summary',NULL,NULL,0,NULL),
	(11,'顧問監造','summary',NULL,NULL,0,NULL),
	(12,'承攬項目','summary',NULL,NULL,0,NULL),
	(13,'資訊百科','summary',NULL,NULL,0,NULL),
	(14,'第一手消息','news',NULL,NULL,1,'zhtw'),
	(16,'第二手訊息','news',NULL,NULL,2,'zhtw'),
	(17,'第三手訊息','news',NULL,NULL,0,'zhtw'),
	(18,'FIRST','news',NULL,NULL,0,'en'),
	(19,'SECOND','news',NULL,NULL,0,'en'),
	(20,'帷幕牆系統','sys',NULL,NULL,1,'zhtw'),
	(21,'結構玻璃系統','sys',NULL,NULL,0,'zhtw'),
	(24,'雨遮採光罩','sys',NULL,NULL,2,'zhtw'),
	(28,'System_menu1','sys',NULL,NULL,0,'en'),
	(33,'德國多瑪','product',NULL,NULL,2,'zhtw'),
	(34,'玻璃加工','product',NULL,NULL,3,'zhtw'),
	(37,'玻璃扶手欄杆系統','sys',NULL,NULL,4,'zhtw'),
	(38,'玻璃隔間系統','sys',NULL,NULL,5,'zhtw'),
	(42,'連絡我們','summary',NULL,NULL,0,NULL),
	(40,'氣密鋁門窗','sys',NULL,NULL,3,'zhtw');

/*!40000 ALTER TABLE `taxonomies` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
