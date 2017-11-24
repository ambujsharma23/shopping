-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 04:24 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `state_ganna`
--

CREATE TABLE IF NOT EXISTS `state_ganna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `state_ganna`
--

INSERT INTO `state_ganna` (`id`, `state_name`, `status`) VALUES
(1, '\r\nAndhra Pradesh', 1),
(2, 'Bihar', 1),
(3, 'Chandigarh', 1),
(4, 'Delhi', 1),
(5, 'Gujarat', 1),
(6, 'Harayana', 1),
(7, 'Jammu & Kashmir', 1),
(8, 'Jharkhand', 1),
(9, 'Karnataka', 1),
(10, 'Kerala', 1),
(11, 'Madhya Pradesh', 1),
(12, 'Maharashtra', 1),
(13, 'Punjab', 1),
(14, 'Rajasthan', 1),
(15, 'Tamil Nadu', 1),
(16, 'Uttar Pradesh', 1),
(17, 'West Bengal', 1),
(18, 'Chhattisgarh', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
