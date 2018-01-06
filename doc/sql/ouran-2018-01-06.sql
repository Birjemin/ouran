# ------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `ouran`

DROP TABLE IF EXISTS `Article`;

CREATE TABLE `Article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Article` WRITE;
/*!40000 ALTER TABLE `Article` DISABLE KEYS */;

INSERT INTO `Article` (`id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'1111','1111111',1212121,'2017-12-16 01:31:00',NULL),
	(2,'2222','222222',2323232,'2017-12-16 02:09:37',NULL),
	(3,NULL,NULL,NULL,'2017-12-16 14:30:13',NULL);

/*!40000 ALTER TABLE `Article` ENABLE KEYS */;
UNLOCK TABLES;