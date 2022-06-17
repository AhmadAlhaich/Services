-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2020 at 10:14 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaintmessages`
--

DROP TABLE IF EXISTS `complaintmessages`;
CREATE TABLE IF NOT EXISTS `complaintmessages` (
  `Messages` varchar(300) NOT NULL,
  PRIMARY KEY (`Messages`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintmessages`
--

INSERT INTO `complaintmessages` (`Messages`) VALUES
(''),
('how to become better ');

-- --------------------------------------------------------

--
-- Table structure for table `plumbing_form`
--

DROP TABLE IF EXISTS `plumbing_form`;
CREATE TABLE IF NOT EXISTS `plumbing_form` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `city` varchar(25) NOT NULL,
  `streetname` varchar(25) NOT NULL,
  `buildingname` varchar(25) NOT NULL,
  `floornumber` int(25) NOT NULL,
  `roomnumber` int(25) NOT NULL,
  `contactnumber` int(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plumbing_form`
--

INSERT INTO `plumbing_form` (`id`, `city`, `streetname`, `buildingname`, `floornumber`, `roomnumber`, `contactnumber`, `description`) VALUES
(1, 'beirut', 'hamra', 'sayed', 9, 6, 80894561, 'My Problem is etc...'),
(2, 'beirut', 'salim slam ', 'B3', 6, 606, 70987456, 'My apartment is flooded '),
(3, 'beirut', 'verdun', 'B3', 7, 714, 80987456, 'Problem in etc....'),
(4, 'beirut', 'rawche', 'B1', 9, 918, 789654123, 'I have a problem in etc...');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `recoverypassword` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `email`, `recoverypassword`) VALUES
(128, 'nour', 'zlXkAK3M', 'nour@example.com', '789'),
(129, 'mohammad', '12345', 'mohammad@gmail.com', '987'),
(127, 'islam ', '12345', 'islam@example.com', '789'),
(126, 'mohammad', '12345', 'mohammad.itani1999@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `wrench_form`
--

DROP TABLE IF EXISTS `wrench_form`;
CREATE TABLE IF NOT EXISTS `wrench_form` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `city` varchar(20) NOT NULL,
  `streetname` varchar(20) NOT NULL,
  `buildingname` varchar(20) NOT NULL,
  `floornumber` varchar(20) NOT NULL,
  `roomnumber` varchar(20) NOT NULL,
  `contactnumber` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wrench_form`
--

INSERT INTO `wrench_form` (`id`, `city`, `streetname`, `buildingname`, `floornumber`, `roomnumber`, `contactnumber`, `description`) VALUES
(1, 'beirut', 'verdun', 'B3', '7', '714', '80987456', 'Problem in etc....'),
(3, 'qqq', 'qqq', 'qqq', 'qqq', 'qqq', 'qqq', 'qqq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
