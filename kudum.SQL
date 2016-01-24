/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.5.24-log : Database - myproject
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`myproject` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `myproject`;

/*Table structure for table `deposits` */

DROP TABLE IF EXISTS `deposits`;

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) DEFAULT NULL,
  `amount` decimal(50,0) DEFAULT NULL,
  `payeddate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `deposits` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `time` decimal(5,0) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `venue` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `events` */

/*Table structure for table `feedbacks` */

DROP TABLE IF EXISTS `feedbacks`;

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yourname` varchar(25) DEFAULT NULL,
  `youremail` varchar(20) DEFAULT NULL,
  `youraddress` varchar(100) DEFAULT NULL,
  `yourcomments` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedbacks` */

/*Table structure for table `loanpayments` */

DROP TABLE IF EXISTS `loanpayments`;

CREATE TABLE `loanpayments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `loan_id` int(10) DEFAULT NULL,
  `amount` decimal(50,0) DEFAULT NULL,
  `payeddate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `loan_id` (`loan_id`),
  CONSTRAINT `loan_id` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `loanpayments` */

/*Table structure for table `loans` */

DROP TABLE IF EXISTS `loans`;

CREATE TABLE `loans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) DEFAULT NULL,
  `bankname` varchar(20) DEFAULT NULL,
  `accountno` varchar(20) DEFAULT NULL,
  `loantype` varchar(20) DEFAULT NULL,
  `mobileno` int(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `loanamount` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `loans_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `loans` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `usertype` int(10) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `unit_id` int(10) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL,
  `spouses'sname` varchar(25) DEFAULT NULL,
  `father'sname` varchar(25) DEFAULT NULL,
  `mother'sname` varchar(25) DEFAULT NULL,
  `BPL/APL` varchar(10) DEFAULT NULL,
  `SC/ST/General` varchar(10) DEFAULT NULL,
  `bloodgroup` varchar(5) DEFAULT NULL,
  `eligibility` varchar(25) DEFAULT NULL,
  `relegion` varchar(25) DEFAULT NULL,
  `cast` varchar(25) DEFAULT NULL,
  `nationality` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `taluk` varchar(25) DEFAULT NULL,
  `panchayath` varchar(25) DEFAULT NULL,
  `mobno` int(10) DEFAULT NULL,
  `idno` int(10) DEFAULT NULL,
  `accountno` int(10) DEFAULT NULL,
  `adarno` int(10) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_id` (`unit_id`),
  CONSTRAINT `members_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `members` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `products` */

/*Table structure for table `units` */

DROP TABLE IF EXISTS `units`;

CREATE TABLE `units` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `isapproved` int(10) DEFAULT NULL,
  `ward` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `units` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
