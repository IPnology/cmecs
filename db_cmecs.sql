# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2017-03-13 23:41:20
# Generator: MySQL-Front 5.4  (Build 1.4)

/*!40101 SET NAMES latin1 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'admin','i am','admin','1234','admin');

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

INSERT INTO `cart` VALUES (1,1480494235,10,1,1000),(2,1480498770,10,1,1000),(3,1480500130,10,1,1000),(4,1480504849,10,1,1000),(5,1480918721,10,2,8000),(6,1480918721,11,5,1000),(7,1480919752,10,1,1000),(8,1480919752,11,2,400),(9,1481112766,10,2,4000),(10,1481112766,13,4,8000),(11,1481112766,11,1,200),(12,1483956336,11,12,2400),(13,1483961972,11,1,200);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "category"
#

INSERT INTO `category` VALUES (5,'Cabinet','Cabinets','1480492788.jpg'),(6,'chairs','chairs','1481112545.jpg'),(7,'klnkln','klnklnklnkl','1483952124.jpg');

#
# Structure for table "checkout"
#

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `fname` varchar(150) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "checkout"
#

INSERT INTO `checkout` VALUES (1,'dalelicious',NULL,NULL,'1480494235','2016-11-30 16:23:55','Rejected',NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(2,'userk',NULL,NULL,'1480498770','2016-11-30 17:39:29','Delivery',NULL,'medel','dira','bacolod','neg occ','6100'),(3,'userk',NULL,NULL,'1480498770','2016-11-30 17:39:29','Pending',NULL,'medel','dira','bacolod','neg occ','6100'),(4,'userk',NULL,NULL,'1480500130','2016-11-30 18:02:10','Pending',NULL,'','','','',''),(5,'dalelicious',NULL,NULL,'1480504849','2016-11-30 19:20:49','Pending',NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(6,'dalelicious',NULL,NULL,'1480918721','2016-12-05 14:18:41','Pending',NULL,'medel encarnacion','granada','bacolod','negros occidental','6100'),(7,'dalelicious',NULL,NULL,'1480919752','2016-12-05 14:35:52','Pending',1400,'medel encarnacion','granada','bacolod','negros occidental','6100'),(8,'oma',NULL,NULL,'1481112766','2016-12-07 20:12:45','Rejected',12200,'lkhkl','hlkhkl','hklhklh','klhklhkl','hklhkl'),(9,'admin',NULL,NULL,'1483956336','2017-01-09 18:05:36','Pending',2400,'lhkklhkhkl','hlkhlkhkl','hklhklh','klhklh','khlhlkh'),(10,'admin',NULL,NULL,'1483961972','2017-01-09 19:39:31','Pending',200,'','','','','');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "delivery"
#

INSERT INTO `delivery` VALUES (1,1,'1480498770','2017-01-10','Shipping');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "product"
#

INSERT INTO `product` VALUES (10,5,'Small Cabinet','Small Cabinet','1000','1480492814.jpg'),(11,5,'big cabinet','big','200','1480917918.jpg'),(12,5,'Medium Cabinet','medium','500','1480931691.jpg'),(13,6,'wooden chair','kdlsfhjkdlsfj','2000','1481112589.jpg');

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

INSERT INTO `temp_cart` VALUES (4,'userk',10,1,1000);

#
# Structure for table "truck"
#

DROP TABLE IF EXISTS `truck`;
CREATE TABLE `truck` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "truck"
#

INSERT INTO `truck` VALUES (1,'Wild truck Updated'),(4,'truck ni fred u'),(5,'truck111');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin','i am','admin','1234','','0000-00-00 ','','','','','','','admin',NULL),(2,'dalelicious','dale','torre','123','daletorre1014@gmail.','0000-00-00 ','male','medel encarnacion','granada','bacolod','negros occidental','6100','client',NULL),(3,'fredowinz23','fred','garcia','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'client',NULL),(4,'userk','john','doe','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'client',NULL),(5,'oma','oma','amo','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'client',NULL);

#
# Structure for table "wishlist"
#

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `productId` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "wishlist"
#

INSERT INTO `wishlist` VALUES (3,'userk','10'),(4,'dalelicious','10'),(5,'oma','12');
