# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-01-23 17:09:33
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "personalize"
#

DROP TABLE IF EXISTS `personalize`;
CREATE TABLE `personalize` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "personalize"
#

