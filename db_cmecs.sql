# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2016-11-28 17:20:54
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "cart"
#

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(10) DEFAULT NULL,
  `productId` int(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT '1',
  `price` float DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "cart"
#

INSERT INTO `cart` VALUES (1,NULL,5,1,600),(2,NULL,5,1,600);

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
# Structure for table "order"
#

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `orderNumber` varchar(11) DEFAULT NULL,
  `address` varchar(11) DEFAULT NULL,
  `date` varchar(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `totalPrice` float DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "order"
#

INSERT INTO `order` VALUES (1,'dalelicious','1','bacolod','1-1-2017','delivered',100);

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

INSERT INTO `product` VALUES (1,NULL,'prod1',NULL,NULL,NULL),(2,NULL,'prod2',NULL,NULL,NULL),(3,NULL,'prod3',NULL,NULL,NULL),(5,NULL,'prouduct','super','600','ab'),(7,NULL,'proddds','prodds','1000','1479722823.jpg'),(8,NULL,'Product1','pro','1000','1479731194.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "temp_cart"
#

INSERT INTO `temp_cart` VALUES (11,'dalelicious',2,2,0),(12,'dalelicious',2,1,0),(13,'dalelicious',5,1,600);

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin','i am','admin','1234','admin'),(2,'dalelicious','dale','torre','123','client'),(3,'fredowinz23','fred','garcia','123','client');
