-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2016 at 08:58 AM
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
use kudumbasree;
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_products_files_idx` (`files_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
