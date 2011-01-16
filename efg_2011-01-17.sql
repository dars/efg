# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: efg
# Generation Time: 2011-01-17 05:14:47 +0800
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`,`name`,`file_type`,`category`,`hash_id`,`weight`,`created`,`modified`)
VALUES
	(1,'f_2529087_1.jpg','pix','project',30,NULL,'2010-11-19 00:39:38','2010-11-19 00:39:38'),
	(2,'f_2529099_1.jpg','pix','project',30,NULL,'2010-11-19 00:39:38','2010-11-19 00:39:38'),
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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='記錄雜項資料';

LOCK TABLES `nodes` WRITE;
/*!40000 ALTER TABLE `nodes` DISABLE KEYS */;
INSERT INTO `nodes` (`id`,`title`,`content`,`type`,`parent`,`lang`,`created`,`modified`)
VALUES
	(1,'首頁歡迎','<p>\n	<img alt=\"\" src=\"http://192.168.1.131/~Dars/efg/public/files/ckfiles/177ba48b9222da86db2dec2e4a1d9361.jpg\" style=\"border-bottom: 0px solid; border-left: 0px solid; margin: 5px; width: 100px; float: left; height: 126px; border-top: 0px solid; border-right: 0px solid\" /><span style=\"font-size: 12px\">配合電影<strong>《</strong></span><span style=\"font-size: 12px\"><strong>哈利</strong></span><span style=\"font-size: 12px\"><strong>波特》</strong>宣傳，飾演劇中主角榮恩雙胞胎哥哥的演員詹姆斯與奧立佛．菲爾普斯兄弟檔前往台北花博參觀，所到之處引起遊客騷動。也因參觀經驗美好，昨續留台北一天，體會台北一○一與北市寺廟文化。</span><br />\n	<br />\n	<span style=\"font-size: 12px\">歷經十年，電影<span style=\"color: rgb(0,0,255)\">《哈利波特》</span>最終章<span style=\"color: rgb(0,0,255)\">《死神的聖物》</span>即將在台上映。上映前夕，電影裏飾演榮恩雙胞胎哥哥喬治與弗雷的兩位年輕演員詹姆斯與奧立佛，在台北市副市長邱文祥陪同下，前天中午前往花博新生公園區參觀超人氣夢想館。</span></p>\n<p>\n	&nbsp;</p>\n','7',NULL,'zhtw','2010-11-12 03:03:00','2010-12-08 19:32:56'),
	(2,'設計規劃','<p>\n	<span style=\"font-size: 14px;\"><span style=\"color: rgb(255, 0, 0);\"><img alt=\"\" src=\"http://192.168.1.131/~Dars/efg/public/files/ckfiles/6b4a4a1d7f880f559bbae5a78bdb4094.jpg\" style=\"width: 196px; height: 154px; float: left; margin-left: 5px; margin-right: 5px;\" />bala bala bala bala</span><span style=\"font-size: 18px;\"><span style=\"color: rgb(0, 128, 0);\"> bala bala</span></span> </span></p>\n<p>\n	<span style=\"font-size: 14px;\"><u><span style=\"font-size: 16px;\">bala bala bala bala bala bala bala </span></u></span></p>\n','8',NULL,'zhtw','2010-11-12 03:03:00','2010-11-20 02:10:34'),
	(3,'備料加工',NULL,'9',NULL,'zhtw','2010-11-12 03:03:00','2010-11-18 03:31:34'),
	(4,'責任施工','<p>\n	<span style=\"color: rgb(255, 0, 0);\"><span style=\"font-size: 14px;\"><strong>hola hola hola</strong></span></span> hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola</p>\n','10',NULL,'zhtw','2010-11-12 03:03:00','2010-11-18 03:31:34'),
	(5,'顧問監造',NULL,'11',NULL,'zhtw','2010-11-12 03:03:00','2010-11-18 03:31:34'),
	(6,'承攬項目',NULL,'12',NULL,'zhtw','2010-11-12 03:03:00','2010-11-18 03:31:34'),
	(7,'資訊百科',NULL,'13',NULL,'zhtw','2010-11-12 03:03:00','2010-11-18 03:31:34'),
	(8,'welcome','Welcom to...','7',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(9,'design',NULL,'8',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(10,'material',NULL,'9',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(11,'installation',NULL,'10',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(12,'consultation',NULL,'11',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(13,'service',NULL,'12',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(14,'knowledge',NULL,'13',NULL,'en','2010-11-18 03:31:34','2010-11-18 03:31:34'),
	(15,'雨遮採光罩',NULL,'24',NULL,'zhtw','2010-11-18 21:10:13','2010-11-18 21:10:13'),
	(16,'玻璃帷幕系統','<p>\n	<span style=\"color: rgb(0, 0, 255);\">玻璃帷幕</span></p>\n','20',NULL,'zhtw','2010-11-18 21:10:13','2010-11-21 21:49:01'),
	(17,'結構玻璃系統','<p>\n	結構玻璃</p>\n<div firebugversion=\"1.5.4\" id=\"_firebugConsole\" style=\"display: none;\">\n	&nbsp;</div>\n','21',NULL,'zhtw','2010-11-18 21:10:13','2010-11-21 21:48:45'),
	(21,'System_menu1',NULL,'28',NULL,'en','2010-11-18 22:55:02','2010-11-18 22:55:02'),
	(22,'玻璃帷幕','<p>\n	YYYYYYYY</p>\n','30',NULL,'zhtw','2010-11-18 23:23:32','2010-11-18 23:23:32'),
	(24,'產品類別一',NULL,'31',NULL,'zhtw','2010-11-19 17:05:14','2010-11-19 17:05:14'),
	(25,'德國多瑪',NULL,'32',NULL,'zhtw','2010-11-19 17:05:14','2010-11-19 17:05:14'),
	(26,'DORMA',NULL,'32',NULL,'en','2010-11-19 17:05:14','2010-11-19 17:05:14');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

LOCK TABLES `taxonomies` WRITE;
/*!40000 ALTER TABLE `taxonomies` DISABLE KEYS */;
INSERT INTO `taxonomies` (`id`,`name`,`category`,`bio`,`parent`,`weight`,`lang`)
VALUES
	(30,'玻璃帷幕','project',NULL,NULL,0,'zhtw'),
	(31,'產品類別一','product',NULL,NULL,0,'zhtw'),
	(32,'德國多瑪','summary',NULL,NULL,0,NULL),
	(7,'首頁歡迎','summary',NULL,NULL,0,NULL),
	(8,'設計規劃','summary',NULL,NULL,0,NULL),
	(9,'備料加工','summary',NULL,NULL,0,NULL),
	(10,'責任施工','summary',NULL,NULL,0,NULL),
	(11,'顧問監造','summary',NULL,NULL,0,NULL),
	(12,'承攬項目','summary',NULL,NULL,0,NULL),
	(13,'資訊百科','summary',NULL,NULL,0,NULL),
	(14,'第一手消息','news',NULL,NULL,0,'zhtw'),
	(16,'第二手訊息','news',NULL,NULL,2,'zhtw'),
	(17,'第三手訊息','news',NULL,NULL,1,'zhtw'),
	(18,'FIRST','news',NULL,NULL,0,'en'),
	(19,'SECOND','news',NULL,NULL,0,'en'),
	(20,'玻璃帷幕系統','sys',NULL,NULL,1,'zhtw'),
	(21,'結構玻璃系統','sys',NULL,NULL,0,'zhtw'),
	(24,'雨遮採光罩','sys',NULL,NULL,2,'zhtw'),
	(28,'System_menu1','sys',NULL,NULL,0,'en');

/*!40000 ALTER TABLE `taxonomies` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
