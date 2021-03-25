# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: udemy_join
# Generation Time: 2018-01-04 21:55:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kategoriler
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategoriler`;

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `kategoriler` WRITE;
/*!40000 ALTER TABLE `kategoriler` DISABLE KEYS */;

INSERT INTO `kategoriler` (`id`, `ad`)
VALUES
	(1,'Blog'),
	(2,'Dersler'),
	(3,'PHP'),
	(4,'Udemy');

/*!40000 ALTER TABLE `kategoriler` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table konular
# ------------------------------------------------------------

DROP TABLE IF EXISTS `konular`;

CREATE TABLE `konular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `uye_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `konular` WRITE;
/*!40000 ALTER TABLE `konular` DISABLE KEYS */;

INSERT INTO `konular` (`id`, `baslik`, `icerik`, `uye_id`, `kategori_id`, `tarih`)
VALUES
	(1,'deneme başlık','içerik',6,1,'2018-01-05 00:49:10'),
	(2,'deneme başlık 2','içerik\n',6,1,'2018-01-05 00:49:28'),
	(3,'deneme başlık 3','içerik',5,2,'2018-01-05 00:49:38'),
	(4,'deneme başlık 4','içerik',7,4,'2018-01-05 00:49:54'),
	(5,'deneme başlık 5','içerik',8,3,'2018-01-05 00:50:05'),
	(6,'deneme başlık 6','içerik',9,2,'2018-01-05 00:50:16');

/*!40000 ALTER TABLE `konular` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table uyeler
# ------------------------------------------------------------

DROP TABLE IF EXISTS `uyeler`;

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_kadi` varchar(255) NOT NULL,
  `uye_sifre` varchar(255) NOT NULL,
  `uye_eposta` varchar(255) NOT NULL,
  `kayit_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uye_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `uyeler` WRITE;
/*!40000 ALTER TABLE `uyeler` DISABLE KEYS */;

INSERT INTO `uyeler` (`uye_id`, `uye_kadi`, `uye_sifre`, `uye_eposta`, `kayit_tarih`)
VALUES
	(6,'tayfunerbilen','123','tayfunerbilen@gmail.com','2018-01-05 00:53:44'),
	(7,'test1','test1','test1@gmail.com','2018-01-05 00:54:15'),
	(9,'test3','yenişifre','test3@gmail.com','2018-01-05 00:54:31'),
	(10,'test4','yenişifre','test4@gmail.com','2018-01-05 00:54:44');

/*!40000 ALTER TABLE `uyeler` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
