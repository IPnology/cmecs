# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2017-02-09 00:10:21
# Generator: MySQL-Front 5.4  (Build 4.102) - http://www.mysqlfront.de/

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'admin','admin','admin','1234','admin'),(2,'staff','staff','staff','1234','staff'),(3,'delivery','delivery','delivery','1234','delivery'),(4,'oma123','Oma','quiatchon','1234','staff');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "cart"
#

INSERT INTO `cart` VALUES (1,1485866625,3,1,10),(2,1486074951,2,1,7687),(3,1486118333,2,1,7687),(4,1486297393,2,1,7687),(5,1486298057,2,1,7687),(6,1486298371,2,1,7687),(7,1486560525,5,3,4500),(8,1486560525,6,1,5000),(9,1486560525,2,2,15374),(10,1486565673,3,10,50000),(11,1486565673,8,4,4194320000),(12,1486569310,8,1,100);

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

INSERT INTO `category` VALUES (3,'Bedroom','bedroom ','1486559712.jpg'),(4,'Foams','dskjfnds jkdsnfjsdnf kdsjnfsdjkfn','1486559883.jpg');

#
# Structure for table "checkout"
#

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(150) DEFAULT NULL,
  `lname` varchar(150) DEFAULT NULL,
  `username` varchar(11) DEFAULT NULL,
  `orderNumber` varchar(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(11) DEFAULT 'Pending',
  `totalPrice` float DEFAULT NULL,
  `street` text,
  `brgy` text,
  `city` text,
  `province` text,
  `postal` varchar(20) DEFAULT NULL,
  `rejectReason` text,
  `paymentMethod` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "checkout"
#

INSERT INTO `checkout` VALUES (1,'fred','garcia','1486297334','1486298057','2017-02-05 20:34:17','Delivery',7687,'dsklfdsfkln','lknlknlkn','bc','lkjkljkljklj','6100',NULL,NULL,NULL),(2,'james','bond','1486297334','1486298371','2017-02-05 20:39:30','Delivery',7687,'dslkfndsflkn','lknlknlkn','klnlknlkn','lknlknlkn','61909',NULL,NULL,NULL),(3,'juan','de la cruz','1486297334','1486560525','2017-02-08 21:28:45','Delivery',24874,'lacon','29','bacolod','negros','6100',NULL,NULL,NULL),(4,'jjj','jjj','1486297334','1486565673','2017-02-08 22:54:32','Rejected',4194370000,'jj','jj','jj','jj','jj',',jnklnlknklnkln',NULL,NULL),(5,'nbklnlknklnkl','nklnklnk','1486297334','1486569365','2017-02-08 23:56:05','Pending',100,'lnklnkl','nlknklnkl','nklnklnkl','nklnklnlk','lknklnkln',NULL,NULL,'2020202002'),(6,'nbklnlknklnkl','nklnklnk','1486297334','1486569502','2017-02-08 23:58:22','Pending',100,'lnklnkl','nlknklnkl','nklnklnkl','nklnklnlk','lknklnkln',NULL,NULL,'2020202002');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "delivery"
#

INSERT INTO `delivery` VALUES (1,1,'1486298057','2017-02-11','Canceled'),(2,1,'1486298057','2017-02-15','Canceled'),(3,1,'1486298057','2017-02-11','Canceled'),(4,3,'1486298371','2017-02-06','Shipping'),(5,1,'1486560525','2017-02-11','Pending');

#
# Structure for table "personalize"
#

DROP TABLE IF EXISTS `personalize`;
CREATE TABLE `personalize` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "personalize"
#

INSERT INTO `personalize` VALUES (1,'Narra','White');

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
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "product"
#

INSERT INTO `product` VALUES (1,1,'jkbjkb','jkbjkbjk','10',0,'1485866567.jpg'),(2,1,'kgjkbgkj','jgjkgjkg','7687',0,'1485866577.jpg'),(3,2,'jkgjkbgjk','gjkgjkgkj','10',40,'1485866588.jpg'),(4,3,'Bed 1102203 xp','slkfjs sjn slkdnf dslk ndsklf ndslkf ','1500',0,'1486559785.jpg'),(5,3,'bed dsfkljndslkjsd','dskfhsdklfdsl','500',0,'1486559857.jpg'),(6,4,'Mandaue Foams','dslkj selkfjdsklf jdslkf dlkf jdkl f','5000',0,'1486559958.jpg'),(7,4,'klhklhnklhkl','lkhlkhlkhlkh','100',5,'1486563151.'),(8,4,'foam 101','dsklfndsfkldsfnl','100',0,'1486563258.'),(9,4,'lkjnkljnkln','klnlknlknlkn','100',1000,'1486567698.jpg'),(10,4,'kjbklnlkNLKNKL','lknkdlnfslkdfndsklfndklfdnfkldnfdklfnflkdnfkdlnfdklfnkl','1000',100,'1486567726.jpg');

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


#
# Structure for table "truck"
#

DROP TABLE IF EXISTS `truck`;
CREATE TABLE `truck` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "truck"
#

INSERT INTO `truck` VALUES (1,'Truck A'),(2,'Truck B'),(3,'TRUCK C');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "user"
#


#
# Structure for table "wishlist"
#

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `productId` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "wishlist"
#

INSERT INTO `wishlist` VALUES (1,'1485866522','1');
