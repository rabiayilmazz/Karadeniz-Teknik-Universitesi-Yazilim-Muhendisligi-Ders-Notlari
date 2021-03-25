# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: sayfalama
# Generation Time: 2018-03-14 23:57:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table test
# ------------------------------------------------------------

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;

INSERT INTO `test` (`id`, `ad`)
VALUES
	(1,'test'),
	(2,'test'),
	(3,'test'),
	(4,'test'),
	(5,'test'),
	(6,'test'),
	(7,'test'),
	(8,'test'),
	(9,'test'),
	(10,'test'),
	(11,'test'),
	(12,'test'),
	(13,'test'),
	(48,'test'),
	(49,'test'),
	(50,'test'),
	(51,'test'),
	(52,'test'),
	(53,'test'),
	(54,'test'),
	(55,'test'),
	(56,'test'),
	(57,'test'),
	(58,'test'),
	(59,'test'),
	(60,'test'),
	(61,'test'),
	(62,'test'),
	(63,'test'),
	(64,'test'),
	(65,'test'),
	(66,'test'),
	(67,'test'),
	(68,'test'),
	(69,'test'),
	(70,'test'),
	(71,'test'),
	(72,'test'),
	(73,'test'),
	(74,'test'),
	(75,'test'),
	(76,'test'),
	(77,'test'),
	(78,'test'),
	(79,'test'),
	(80,'test'),
	(81,'test'),
	(82,'test'),
	(83,'test'),
	(84,'test'),
	(85,'test'),
	(86,'test'),
	(87,'test'),
	(88,'test'),
	(89,'test'),
	(90,'test'),
	(91,'test'),
	(92,'test'),
	(93,'test'),
	(94,'test'),
	(95,'test'),
	(96,'test'),
	(97,'test'),
	(98,'test'),
	(99,'test'),
	(100,'test'),
	(101,'test'),
	(102,'test'),
	(103,'test'),
	(104,'test'),
	(105,'test'),
	(106,'test'),
	(107,'test'),
	(108,'test'),
	(109,'test'),
	(110,'test'),
	(111,'test'),
	(112,'test'),
	(113,'test'),
	(114,'test'),
	(115,'test'),
	(116,'test'),
	(117,'test'),
	(118,'test'),
	(119,'test'),
	(120,'test'),
	(121,'test'),
	(122,'test'),
	(123,'test'),
	(124,'test'),
	(125,'test'),
	(126,'test'),
	(127,'test'),
	(128,'test'),
	(129,'test'),
	(130,'test'),
	(131,'test'),
	(132,'test'),
	(133,'test'),
	(134,'test');

/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
