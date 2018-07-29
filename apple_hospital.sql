-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2018 at 03:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathyapustak_Myapple`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `mobile` char(15) DEFAULT NULL,
  `admin_type` char(30) DEFAULT 'admin',
  `image` char(50) DEFAULT NULL,
  `a_status` tinyint(1) DEFAULT '1',
  `a_password` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `mobile`, `admin_type`, `image`, `a_status`, `a_password`, `full_name`) VALUES
(19, 'myname', 'abc@abc.com', '1234567890', 'admin', NULL, 1, 'myadmin', 'Admin1'),
(17, 'hsagar63', 'super@gmail.com', '12341234123', 'admin', NULL, 1, 'myadmin', 'Harsh Sagar '),
(20, 'Demo', 'Demo@gmai.com', '9876543211', 'admin', NULL, 1, 'admin', 'Demo');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_confirm`
--

DROP TABLE IF EXISTS `appointment_confirm`;
CREATE TABLE IF NOT EXISTS `appointment_confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `service_name` char(50) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `a_time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_confirm`
--

INSERT INTO `appointment_confirm` (`id`, `name`, `age`, `gender`, `service_name`, `amount`, `a_date`, `a_time`) VALUES
(1, 'Harsh', 21, 'male', 'heart', 1500, '2018-07-22', '12:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `service_desc`
--

DROP TABLE IF EXISTS `service_desc`;
CREATE TABLE IF NOT EXISTS `service_desc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` char(50) DEFAULT NULL,
  `service_desc` char(100) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `image` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_desc`
--

INSERT INTO `service_desc` (`id`, `service_name`, `service_desc`, `time`, `amount`, `image`) VALUES
(1, 'new', '', '2', 1200, 'Array'),
(2, 'myservice', '', '2years', 1200, 'Array'),
(3, 'newSevice', 'new desc', '1year', 1000, 'Array'),
(4, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(5, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(6, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(7, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(8, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(9, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(10, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(11, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(12, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(13, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(14, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(15, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(16, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(17, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(18, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(19, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(20, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(21, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(22, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(23, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg'),
(24, 'newSevice', 'new desc', '1year', 1000, 'IMG-20180717-WA0002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

DROP TABLE IF EXISTS `service_master`;
CREATE TABLE IF NOT EXISTS `service_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `mobile` char(15) DEFAULT NULL,
  `gender` char(30) DEFAULT NULL,
  `full_name` char(50) DEFAULT NULL,
  `a_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
