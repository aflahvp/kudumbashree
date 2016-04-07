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

INSERT INTO `events` (`id`, `type`, `name`, `time`, `date`, `venue`, `description`, `units_id`) VALUES
(38, 'th', 'first event', '00:01:21', '0000-00-00', 'lkjnh', 'kjk;l', 0);

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

INSERT INTO `loans` (`id`, `bankname`, `accountno`, `loantype`, `mobile`, `email`, `loanamount`, `members_id`, `status`) VALUES
(1, 'sib', '2345', 'sfgfdg', '234543534', 'rte@gmail.com', '1000', 1, ' requierd'),
(2, 'sbt', '123414342', 'grgeggfd', '234454', 'rte@gmail.com', '200', 3, 'requierd'),
(3, NULL, 'hkjh', 'kj', '65465', 'test@test.com', '54534', 0, 'request'),
(4, NULL, 'kjhk', 'jh', '+656', 'test@test.com', '852', 0, 'request'),
(5, NULL, '54254', 'domestic', '54254', 'test@test.com', '8524', 0, 'request'),
(6, 'test member id', 'kjlkj', 'jhbj', '54548', 'test@test.com', '85245', 8, 'request'),
(7, 'asdsdad', '1245895', 'aaaq', '453435', 'test@test.com', '5435', 9, 'request');

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
--

INSERT INTO `members` (`id`, `name`, `age`, `dob`, `address`, `place`, `spousesname`, `fathername`, `mothername`, `rationcardtype`, `category`, `bloodgroup`, `eligibility`, `religion`, `cast`, `district`, `taluk`, `panchayath`, `mobileno`, `idno`, `accountno`, `adharno`, `email`, `units_id`, `position`) VALUES
(8, 'first', 0, '0000-00-00', 'joij', 'oij', 'joi', 'j', 'oij', NULL, 'st', 'o+', 'highersecondary', 'hindu', 'dsv', 'pathanamthitta', 'jhb', 'jhbjh', 'bh', NULL, 'hjb', 0, 'info@info.com', 0, '0'),
(9, 'second', 12, '1900-01-01', 'sd', 'dfg', 'sad', 'sd', 'ssad', NULL, NULL, 'b+', 'pg', 'hindu', 'dffdf', 'waynad', 'dff', 'adsf', 'dsadsa', NULL, 'saddsa', 0, 'test@test.com', 0, '0'),
(10, 'dggdfghghghj', 45, '1900-01-01', 'trrtfg', 'rftgrter', 'dsfgtg', 'ret', 'rtet', NULL, NULL, 'b+', 'pg', 'muslim', 'tretrt', 'thrissur', 'fghgh', 'rtert', '7565565', NULL, '3546', 34656, 'cdfgdb!@gmail.com', 0, '0'),
(11, 'husna', 54, '1903-03-04', 'tyghftghg', 'frrt', 'dfghfgh', 'fghdfg', 'dfgdg', NULL, NULL, 'b-', 'ug', 'christian', 'ser', 'palakad', 'dsfsd', 'sf', '456346', NULL, '45656', 43545, 'rdfg@te.com', 0, '0');

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

INSERT INTO `products` (`id`, `name`, `description`, `files_id`, `units_id`) VALUES
(1, 'first event', 'cyber crime', 0, 0),
(2, 'first event', 'cyber crime', 0, 0),
(3, 'fgfghf', 'sfgcg', 0, 0),
(4, 'fff', 'ff', 0, 0),
(5, 'ddd', 'ff', 0, 0),
(6, 'ddd', 'ff', 0, 0),
(7, 'qqqqqq', 'fghfggfhjgfjgyj', 0, 0),
(8, 'qqqqqq', 'cyber crime', 0, 0),
(9, 'first event', 'sfgcg', 0, 0),
(10, 'first event', 'cyber crime', 0, 0),
(11, 'gg', 'ff', 0, 0),
(12, 'hjgsfgdsf', 'xvcbghgfjgj', 0, 0),
(13, 'dggdfghghghj', 'fdgdfgdfgdfg', 0, 0),
(14, 'nisha', 'cyber crime', 0, 0),
(15, 'gg', 'cyber crime', 0, 0),
(16, 'gg', 'ff', 0, 0),
(17, 'nisha', 'cyber crime', 0, 0),
(18, 'gg', 'cyber crime', 0, 0);

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

INSERT INTO `units` (`id`, `name`, `isapproved`, `ward`, `address`, `place`, `username`, `password`) VALUES
(12, 'admin', NULL, 'edff', 'fgdfgfg', 'gfh', 'admin', 'admin'),
(13, 'xgdgg', NULL, 'edff', 'dfgfgf', 'manjeri', 'xgdgg', 'hfhfhfhfh'),
(14, 'admin', NULL, 'dfgfdg', 'dfgdfg', 'dfg', 'admin', 'admin');

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

INSERT INTO `users` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'unit1', 'unit1', 'unit'),
(2, 'dcd', 'aa', 'unit_member'),
(3, 'first', '21232f297a57a5a743894a0e4a801fc3', 'member'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'second', 'a9f0e61a137d86aa9db53465e0801612', 'member'),
(6, 'mmv', '81dc9bdb52d04dc20036dbd8313ed055', 'member');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
