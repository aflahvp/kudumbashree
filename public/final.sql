-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2016 at 10:32 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kudumbasree`
--
use kudumbasree;
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

INSERT INTO `events` (`id`, `type`, `name`, `time`, `date`, `venue`, `description`, `units_id`) VALUES
(17, 'ss', 'gg', '00:00:00', '0000-00-00', 'nilambur', 'ff', 0),
(18, 'ss', 'gg', '00:00:00', '0000-00-00', 'nilambur', 'ff', 0),
(19, 'dwfw', 'gg', '00:01:22', '0000-00-00', 'edv', 'ff', 0),
(20, 'ss', 'gg', '00:00:00', '0000-00-00', 'nilambur', 'cyber crime', 0),
(21, 'ss', 'gg', '00:00:00', '0000-00-00', 'nilambur', 'cyber crime', 0),
(22, 'ss', 'gg', '00:00:00', '0000-00-00', 'nilambur', 'cyber crime', 0),
(24, 'dwfw', 'gg', '00:00:09', '0000-00-00', 'nilambur', 'ff', 0),
(25, 'ss', 'nisha', '00:00:00', '0000-00-00', 'nilambur', 'cyber crime', 0),
(26, 'dwfw', 'ghj', '00:00:00', '0000-00-00', 'edv', 'jhb', 0),
(27, 'dwfw', 'first event', '00:00:09', '0000-00-00', 'nilambur', 'ff', 0),
(28, 'dwfw', 'first event', '00:00:09', '0000-00-00', 'nilambur', 'ff', 0),
(29, 'dwfw', 'nisha', '00:01:22', '0000-00-00', 'edv', 'ff', 0),
(31, 'lkml', 'event tets', '00:00:09', '0000-00-00', 'manjeri', 'kjnkjn', 0),
(32, '', 'nisha', '00:00:00', '0000-00-00', 'nilambur', 'cyber crime', 0),
(33, '', 'nisha', '00:00:00', '0000-00-00', 'nilambur', 'cyber crime', 0),
(34, '', 'nisha', '00:00:00', '0000-00-00', 'nilambur', 'cyber crime', 0),
(35, 'aaa', 'gg', '00:00:09', '0000-00-00', 'qqqqqqq', 'wwwwww', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `units_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `age`, `dob`, `address`, `place`, `spousesname`, `fathername`, `mothername`, `rationcardtype`, `category`, `bloodgroup`, `eligibility`, `religion`, `cast`, `district`, `taluk`, `panchayath`, `mobileno`, `idno`, `accountno`, `adharno`, `email`, `units_id`) VALUES
(3, 'fghd', 3, '0000-00-00', 'rfessd', '', 'dsff', 'sdf', 'fsdfd', NULL, 'sc', 'o+', 'sslc', 'hindu', 'fddsf', 'sslc', 'sdfdsf', 'fsd', '4334543', NULL, '3545', 435435, 'vpaflahafi@gmail.com', 0),
(4, 'ddsasad', 55, '0000-00-00', 'dsadsa', 'sadsad', 'sdasda', 'dsadsa', 'sadsad', NULL, 'geneal', 'ab-', 'other', 'other', 'sadsad', 'waynad', 'eadw', 'dsa', '546', NULL, 'sad', 0, '', 0),
(5, 'fdgfg', 0, '0000-00-00', 'dfgdffdg', 'fgdgdffdg', 'fgdfdfgd', 'fgdfg', 'fsddsf', NULL, 'sc', 'b+', 'sslc', 'hindu', 'gdfgfd', 'alappuza', 'fdgdf', 'dfgdfg', 'fgdfgd', NULL, 'fgfgd', 0, 'dfsdfs', 0),
(6, 'gfhfghgfh', 0, '0000-00-00', 'gfhgf', 'fghghf', 'fghfgh', 'gfhfgh', 'gfh', NULL, 'st', 'a+', 'highersecondary', 'hindu', 'fghgfh', 'alappuza', 'ghf', 'fgh', 'fgh', NULL, 'fgh', 0, 'fgh', 0),
(7, 'jolj', 0, '0000-00-00', 'joij', 'oij', 'joi', 'j', 'oij', NULL, 'st', 'o+', 'highersecondary', 'hindu', 'dsv', 'pathanamthitta', 'jhb', 'jhbjh', 'bh', NULL, 'hjb', 0, 'info@info.com', 0),
(8, 'jolj', 0, '0000-00-00', 'joij', 'oij', 'joi', 'j', 'oij', NULL, 'st', 'o+', 'highersecondary', 'hindu', 'dsv', 'pathanamthitta', 'jhb', 'jhbjh', 'bh', NULL, 'hjb', 0, 'info@info.com', 0),
(9, 'first', 0, '0000-00-00', 'joij', 'oij', 'joi', 'j', 'oij', NULL, 'st', 'o+', 'highersecondary', 'hindu', 'dsv', 'pathanamthitta', 'jhb', 'jhbjh', 'bh', NULL, 'hjb', 0, 'info@info.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `files_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `files_id`) VALUES
(1, 'first event', 'cyber crime', 0),
(2, 'first event', 'cyber crime', 0),
(3, 'fgfghf', 'sfgcg', 0),
(4, 'fff', 'ff', 0),
(5, 'ddd', 'ff', 0),
(6, 'ddd', 'ff', 0),
(7, 'qqqqqq', 'fghfggfhjgfjgyj', 0),
(8, 'qqqqqq', 'cyber crime', 0),
(9, 'first event', 'sfgcg', 0),
(10, 'first event', 'cyber crime', 0),
(11, 'gg', 'ff', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `usertype` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'unit1', 'unit1', 'unit'),
(2, 'dcd', 'aa', 'unit_member'),
(3, 'first', 'asd', 'unit_member'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_deposits_members1_idx` (`members_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_events_units1_idx` (`units_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanpayments`
--
ALTER TABLE `loanpayments`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_loanpayments_loans1_idx` (`loans_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_loans_members1_idx` (`members_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_members_units1_idx` (`units_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_products_files_idx` (`files_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	';
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loanpayments`
--
ALTER TABLE `loanpayments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
