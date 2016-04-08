-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2016 at 09:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kudumbashree`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `payeddate` date DEFAULT NULL,
  `balance` decimal(10,0) DEFAULT NULL,
  `members_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `venue` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `units_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL COMMENT '	',
  `yourname` varchar(45) DEFAULT NULL,
  `youremail` varchar(45) DEFAULT NULL,
  `youraddress` varchar(45) DEFAULT NULL,
  `yourcomments` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(45) DEFAULT NULL,
  `file_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loanpayments`
--

CREATE TABLE IF NOT EXISTS `loanpayments` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `payeddate` date DEFAULT NULL,
  `balance` varchar(45) DEFAULT NULL,
  `loans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE IF NOT EXISTS `loans` (
  `id` int(11) NOT NULL,
  `bankname` varchar(45) DEFAULT NULL,
  `accountno` varchar(45) DEFAULT NULL,
  `loantype` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `loanamount` decimal(10,0) DEFAULT NULL,
  `members_id` int(11) NOT NULL,
  `status` varchar(42) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loans`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
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
  `position` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `files_id` int(11) NOT NULL,
  `units_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `isapproved` varchar(15) DEFAULT NULL,
  `ward` varchar(45) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `units`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `usertype` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--