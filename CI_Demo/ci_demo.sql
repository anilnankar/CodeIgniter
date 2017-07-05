-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2017 at 12:11 PM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE IF NOT EXISTS `performance` (
  `performance_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `performance_year` smallint(4) unsigned NOT NULL,
  `performance_sales` int(10) unsigned NOT NULL,
  `performance_expense` double NOT NULL,
  `performance_profit` double NOT NULL,
  PRIMARY KEY (`performance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`performance_id`, `performance_year`, `performance_sales`, `performance_expense`, `performance_profit`) VALUES
(1, 2010, 1000, 400, 200),
(2, 2011, 1100, 450, 220),
(3, 2012, 760, 1120, 400),
(4, 2013, 1030, 540, 310),
(5, 2014, 850, 420, 260),
(6, 2015, 1250, 560, 330);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE IF NOT EXISTS `tbl_data` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `count` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `first_name`, `last_name`, `contact_no`, `count`) VALUES
(1, 'Anil', 'Nankar', 909993903, 5),
(2, 'Ashish', 'Swami', 0, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
