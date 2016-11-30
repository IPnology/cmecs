# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2016-11-30 14:22:41
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'admin','i am','admin','1234','admin'),(2,'dalelicious','dale','torre','123','client'),(3,'fredowinz23','fred','garcia','123','client');

#
# Structure for table "cart"
#

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderNumber` int(10) DEFAULT NULL,
  `productId` int(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT '1',
  `price` float DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "cart"
#

INSERT INTO `cart` VALUES (1,NULL,5,1,600),(2,NULL,5,1,600),(3,NULL,7,1,1000),(4,NULL,8,1,1000),(5,1480338895,7,1,1000),(6,1480338895,8,1,1000),(7,1480339067,7,1,1000),(8,1480339067,8,1,1000),(9,1480339118,8,1,1000),(10,1480339118,7,1,1000),(11,1480339118,5,1,600),(12,1480339118,3,1,0),(13,1480339333,8,1,1000);

#
# Structure for table "category"
#

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "category"
#

INSERT INTO `category` VALUES (1,'cat1','','1480310724.jpg'),(2,'cat2','','1480310734.jpg'),(4,'cat4','cat ni sa','1480310743.jpg');

#
# Structure for table "checkout"
#

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `orderNumber` varchar(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `totalPrice` float DEFAULT NULL,
  `street` text,
  `brgy` text,
  `city` text,
  `province` text,
  `postal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "checkout"
#

INSERT INTO `checkout` VALUES (1,'dalelicious','1','0000-00-00 00:00:00','delivered',100,NULL,NULL,NULL,NULL,NULL),(2,'dalelicious','1480338046',NULL,NULL,NULL,'medel encarnacion','','bacolod','negros occidental','6100'),(3,'dalelicious','1480338083',NULL,NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(4,'dalelicious','1480338284','2016-11-28 21:04:44',NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(5,'dalelicious','1480338761','2016-11-28 21:12:40',NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(6,'dalelicious','1480338833','2016-11-28 21:13:52',NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(7,'dalelicious','1480338895','2016-11-28 21:14:55',NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(8,'dalelicious','1480339067','2016-11-28 21:17:46',NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(9,'dalelicious','1480339118','2016-11-28 21:18:37',NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(10,'dalelicious','1480339333','2016-11-28 21:22:12',NULL,NULL,'medel encarnacion','granada','bacolod','negros occidental','6100');

#
# Structure for table "item"
#

DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `current` int(10) DEFAULT '0',
  `ordered` int(10) DEFAULT '0',
  `sold` int(10) DEFAULT '0',
  `month` varchar(2) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "item"
#

INSERT INTO `item` VALUES (1,4,'insert','fredowinz23','2017-05-18 02:30:09',100,100,4,'05','2017'),(2,4,'insert','fredowinz23','2017-06-15 02:30:35',136,40,3,'06','2017'),(3,4,'insert','fredowinz23','2017-07-13 02:31:04',133,0,70,'07','2017'),(4,4,'insert','fredowinz23','2017-08-17 02:31:34',163,100,50,'08','2017'),(5,4,'insert','fredowinz23','2017-09-14 02:32:17',113,0,5,'09','2017'),(6,4,'insert','fredowinz23','2017-10-13 02:32:44',208,100,30,'10','2017'),(7,4,'insert','fredowinz23','2017-11-17 02:33:26',208,30,60,'11','2017'),(8,4,'insert','fredowinz23','2017-12-15 02:34:00',208,60,60,'12','2017'),(9,4,'insert','fredowinz23','2018-01-18 02:34:57',188,40,0,'01','2018'),(10,4,'insert','fredowinz23','2018-02-15 02:36:08',199,11,140,'02','2018'),(11,5,'insert','fredowinz23','2016-11-27 19:57:53',30,10,0,'11','2016'),(12,5,'insert','fredowinz23','2016-12-01 19:59:14',1035,1000,0,'12','2016'),(14,5,'insert','fredowinz23','2017-03-01 23:54:49',9824,8789,40,'03','2017');

#
# Structure for table "product"
#

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "product"
#

INSERT INTO `product` VALUES (1,NULL,'prod1',NULL,NULL,NULL),(2,NULL,'prod2',NULL,NULL,NULL),(3,NULL,'prod3',NULL,NULL,NULL),(5,NULL,'prouduct','super','600','ab'),(7,NULL,'proddds','prodds','1000','1479722823.jpg'),(8,NULL,'Product1','pro','1000','1479731194.jpg'),(9,1,'wishlist','wish','500','1480486276.jpg');

#
# Structure for table "temp_cart"
#

DROP TABLE IF EXISTS `temp_cart`;
CREATE TABLE `temp_cart` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT '1',
  `price` float DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "temp_cart"
#

INSERT INTO `temp_cart` VALUES (8,'dalelicious',3,1,0),(9,'fredowinz23',8,1,1000),(10,'fredowinz23',7,1,1000);

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `street` text,
  `brgy` text,
  `city` text,
  `province` text,
  `postal` varchar(20) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin','i am','admin','1234','','0000-00-00 00:00:00','','','','','','','admin'),(2,'dalelicious','dale','torre','123','daletorre1014@gmail.','0000-00-00 00:00:00','male','medel encarnacion','granada','bacolod','negros occidental','6100','client'),(3,'fredowinz23','fred','garcia','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'client');

#
# Structure for table "wishlist"
#

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `productId` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "wishlist"
#

INSERT INTO `wishlist` VALUES (1,'dalelicious','8'),(2,'dalelicious','9');
