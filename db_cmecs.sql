# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-02-07 21:17:15
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'admin','i am','admin','1234','admin'),(2,'dalelicious','dale','torre','123','client'),(3,'fredowinz23','fred','garcia','123','client'),(4,'admin2','mark','bautista','1234','admin'),(5,'deliveryboy','fritz','gad','1234','delivery'),(6,'joeylee','joey','lee','123','admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

#
# Data for table "cart"
#

INSERT INTO `cart` VALUES (1,1480494235,10,1,1000),(2,1480498770,10,1,1000),(3,1480500130,10,1,1000),(4,1480504849,10,1,1000),(5,1480918721,10,2,8000),(6,1480918721,11,5,1000),(7,1480919752,10,1,1000),(8,1480919752,11,2,400),(9,1484551702,10,1,1000),(10,1484552292,11,1,200),(11,1484553494,11,1,200),(12,1484553994,10,1,1000),(13,1484554068,12,1,500),(14,1484554176,12,1,500),(15,1484554234,10,1,1000),(16,1484554307,12,1,500),(17,1484554358,12,1,500),(18,1484554711,10,1,1000),(19,1484554929,11,1,200),(20,1485867318,10,1,1000),(21,1485867318,12,1,500);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "category"
#

INSERT INTO `category` VALUES (5,'Cabinet','Cabinets','1480492788.jpg');

#
# Structure for table "checkout"
#

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `orderNumber` varchar(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(11) DEFAULT 'Pending',
  `totalPrice` float DEFAULT NULL,
  `street` text,
  `brgy` text,
  `city` text,
  `province` text,
  `postal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "checkout"
#

INSERT INTO `checkout` VALUES (1,'dalelicious',NULL,NULL,'1480494235','2016-11-30 16:23:55','Delivery',NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(2,'userk',NULL,NULL,'1480498770','2016-11-30 17:39:29','Delivery',NULL,'medel','dira','bacolod','neg occ','6100'),(4,'userk',NULL,NULL,'1480500130','2016-11-30 18:02:10','Approved',NULL,'','','','',''),(5,'dalelicious',NULL,NULL,'1480504849','2016-11-30 19:20:49','Pending',NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(6,'dalelicious',NULL,NULL,'1480918721','2016-12-05 14:18:41','Pending',NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(7,'dalelicious',NULL,NULL,'1480919752','2016-12-05 14:35:52','Delivery',1400,'medel encarnacion','granada','bacolod','negros occidental','6100'),(8,'1484551614',NULL,NULL,'1484551702','2017-01-16 15:28:22','Canceled',1000,'asdf','asdf','asdf','asdf','adf'),(9,'1484551614',NULL,NULL,'1484552292','2017-01-16 15:38:11','Delivery',200,'asdfdsf','asdfd','sadfsdf','asdfsdf','sdfsdf'),(10,'1484551614',NULL,NULL,'1484554307','2017-01-16 16:11:47','Delivery',500,'sdf','klj','lj','lkj','lkj'),(11,'1484551614',NULL,NULL,'1484554358','2017-01-16 16:12:38','Pending',500,'jl','jl','jlkj','ljlj','ljl'),(12,'1484551614','ljlj','lkj','1484554711','2017-01-16 16:18:30','Approved',1000,'lj','lkkj','lkkj','lkkj','lkj'),(13,'1484551614','joey','lee','1484554929','2017-01-16 16:22:09','Delivery',200,'asdlfjklj','fasljflj','asdfjlsfjk','lsjdlfjsjdfl','sdjflslfj'),(14,'dalelicious','dale','torre','1485867318','2017-01-31 20:55:17','Pending',1500,'medel encarnacion','granada','bacolod','negros occidental','6100');

#
# Structure for table "delivery"
#

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE `delivery` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `truckId` int(11) DEFAULT NULL,
  `orderNumber` varchar(20) DEFAULT NULL,
  `deliveryDate` date DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "delivery"
#

INSERT INTO `delivery` VALUES (1,1,'1480494235','2017-01-10','Canceled'),(3,1,'1480919752','2017-01-10','Pending'),(4,1,'1484552292','2017-01-17','Pending'),(5,1,'1484554929','2017-01-17','Pending'),(6,1,'1484554307','2017-01-17','Shipping');

#
# Structure for table "personalize"
#

DROP TABLE IF EXISTS `personalize`;
CREATE TABLE `personalize` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "personalize"
#

INSERT INTO `personalize` VALUES (3,NULL,'Mahogany','Black');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "product"
#

INSERT INTO `product` VALUES (10,5,'Small Cabinet','Small Cabinet','1000','1480492814.jpg'),(11,5,'big cabinet','big','200','1480917918.jpg'),(12,5,'Medium Cabinet','medium','500','1480931691.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "temp_cart"
#

INSERT INTO `temp_cart` VALUES (4,'userk',10,1,1000),(5,'1484549813',10,1,1000),(6,'1484551065',10,1,1000),(7,'1484551128',11,1,200),(8,'1484551148',12,1,500),(9,'1484551204',10,1,1000);

#
# Structure for table "truck"
#

DROP TABLE IF EXISTS `truck`;
CREATE TABLE `truck` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "truck"
#

INSERT INTO `truck` VALUES (1,'Wild truck Updated'),(4,'truck ni fred u');

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
  `birthdate` varchar(11) DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `street` text,
  `brgy` text,
  `city` text,
  `province` text,
  `postal` varchar(20) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin','i am','admin','1234','','0000-00-00 ','','','','','','','admin',NULL),(2,'dalelicious','dale','torre','123','daletorre1014@gmail.','0000-00-00 ','male','medel encarnacion','granada','bacolod','negros occidental','6100','client',NULL),(3,'fredowinz23','fred','garcia','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'client',NULL),(4,'userk','john','doe','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'client',NULL);

#
# Structure for table "wishlist"
#

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `productId` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "wishlist"
#

INSERT INTO `wishlist` VALUES (3,'userk','10'),(4,'dalelicious','10');
