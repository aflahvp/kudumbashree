-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2016 at 11:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kudumbashree`
--
CREATE DATABASE IF NOT EXISTS `kudumbashree` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kudumbashree`;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,0) DEFAULT NULL,
  `payeddate` date DEFAULT NULL,
  `balance` decimal(10,0) DEFAULT NULL,
  `members_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_deposits_members1_idx` (`members_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `venue` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `units_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_events_units1_idx` (`units_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `yourname` varchar(45) DEFAULT NULL,
  `youremail` varchar(45) DEFAULT NULL,
  `youraddress` varchar(45) DEFAULT NULL,
  `yourcomments` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(45) DEFAULT NULL,
  `file_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loanpayments`
--

CREATE TABLE IF NOT EXISTS `loanpayments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,0) DEFAULT NULL,
  `payeddate` date DEFAULT NULL,
  `balance` varchar(45) DEFAULT NULL,
  `loans_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_loanpayments_loans1_idx` (`loans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE IF NOT EXISTS `loans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bankname` varchar(45) DEFAULT NULL,
  `accountno` varchar(45) DEFAULT NULL,
  `loantype` varchar(45) DEFAULT NULL,
  `monileno` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `loanamount` decimal(10,0) DEFAULT NULL,
  `members_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_loans_members1_idx` (`members_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `spousesname` varchar(45) DEFAULT NULL,
  `fathername` varchar(45) DEFAULT NULL,
  `mothername` varchar(45) DEFAULT NULL,
  `rationcardtype` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `bloodgroup` varchar(45) DEFAULT NULL,
  `eligibility` varchar(45) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `cast` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `taluk` varchar(45) DEFAULT NULL,
  `panchayath` varchar(45) DEFAULT NULL,
  `mobileno` varchar(16) DEFAULT NULL,
  `idno` varchar(45) DEFAULT NULL,
  `accountno` varchar(45) DEFAULT NULL,
  `adharno` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `units_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_members_units1_idx` (`units_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `age`, `dob`, `address`, `place`, `spousesname`, `fathername`, `mothername`, `rationcardtype`, `category`, `bloodgroup`, `eligibility`, `religion`, `cast`, `district`, `taluk`, `panchayath`, `mobileno`, `idno`, `accountno`, `adharno`, `email`, `units_id`) VALUES
(3, 'fghd', 3, '0000-00-00', 'rfessd', '', 'dsff', 'sdf', 'fsdfd', NULL, 'sc', 'o+', 'sslc', 'hindu', 'fddsf', 'sslc', 'sdfdsf', 'fsd', '4334543', NULL, '3545', 435435, 'vpaflahafi@gmail.com', 0),
(4, 'ddsasad', 55, '0000-00-00', 'dsadsa', 'sadsad', 'sdasda', 'dsadsa', 'sadsad', NULL, 'geneal', 'ab-', 'other', 'other', 'sadsad', 'waynad', 'eadw', 'dsa', '546', NULL, 'sad', 0, '', 0),
(5, 'fdgfg', 0, '0000-00-00', 'dfgdffdg', 'fgdgdffdg', 'fgdfdfgd', 'fgdfg', 'fsddsf', NULL, 'sc', 'b+', 'sslc', 'hindu', 'gdfgfd', 'alappuza', 'fdgdf', 'dfgdfg', 'fgdfgd', NULL, 'fgfgd', 0, 'dfsdfs', 0),
(6, 'gfhfghgfh', 0, '0000-00-00', 'gfhgf', 'fghghf', 'fghfgh', 'gfhfgh', 'gfh', NULL, 'st', 'a+', 'highersecondary', 'hindu', 'fghgfh', 'alappuza', 'ghf', 'fgh', 'fgh', NULL, 'fgh', 0, 'fgh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `files_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_files_idx` (`files_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `isapproved` varchar(15) DEFAULT NULL,
  `ward` varchar(45) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `isapproved`, `ward`, `address`, `place`, `username`, `password`) VALUES
(3, 'unit2', NULL, '21', 'ertyuiop', 'ppll', 'unit2', 'unit2'),
(7, 'noufal', NULL, '15', 'k', 'pngl', 'noufal', 'noufal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `usertype` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'unit1', 'unit1', 'unit');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `fk_deposits_members1` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_events_units1` FOREIGN KEY (`units_id`) REFERENCES `units` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `loanpayments`
--
ALTER TABLE `loanpayments`
  ADD CONSTRAINT `fk_loanpayments_loans1` FOREIGN KEY (`loans_id`) REFERENCES `loans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `fk_loans_members1` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `fk_members_units1` FOREIGN KEY (`units_id`) REFERENCES `units` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_files` FOREIGN KEY (`files_id`) REFERENCES `files` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
