# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: udemy_join
# Generation Time: 2018-01-04 22:01:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table diziler
# ------------------------------------------------------------

DROP TABLE IF EXISTS `diziler`;

CREATE TABLE `diziler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dizi_adi` varchar(255) NOT NULL,
  `yapim_yili` int(11) NOT NULL,
  `turler` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `diziler` WRITE;
/*!40000 ALTER TABLE `diziler` DISABLE KEYS */;

INSERT INTO `diziler` (`id`, `dizi_adi`, `yapim_yili`, `turler`)
VALUES
	(1,'Game of Thrones',2011,'1,2,3'),
	(2,'Breaking Bad',2009,'11,22,33'),
	(3,'Vikings',2011,'1,5'),
	(4,'The Punisher',2017,'7,2'),
	(5,'Runaways',2017,'1,5,8'),
	(6,'Godless',2016,'7,5,8'),
	(7,'Babylon Berlin',2016,'8,2'),
	(8,'Future Man',2017,'16,5,9');

/*!40000 ALTER TABLE `diziler` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
