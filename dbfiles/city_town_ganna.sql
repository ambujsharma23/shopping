-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 04:25 PM
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
-- Table structure for table `city_town_ganna`
--

CREATE TABLE IF NOT EXISTS `city_town_ganna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `city_town_ganna`
--

INSERT INTO `city_town_ganna` (`id`, `state_id`, `city_name`, `status`) VALUES
(1, 1, 'GVMC (Visakhapattanum)', 1),
(2, 1, 'Hyderabad ', 1),
(3, 1, 'Vijayawada', 1),
(4, 2, 'Patna', 1),
(5, 3, 'Chandigarh', 1),
(6, 18, 'Durg-Bhilainagar', 1),
(7, 18, 'Raipur', 1),
(8, 4, 'Delhi', 1),
(9, 5, 'Ahmadabad', 1),
(10, 5, 'Rajkot', 1),
(11, 5, 'Surat', 1),
(12, 5, 'Vadodara', 1),
(13, 6, 'Faridabad', 1),
(14, 7, 'Srinagar', 1),
(15, 8, 'Dhanbad', 1),
(16, 8, 'Jamshedpur', 1),
(17, 8, 'Ranchi', 1),
(18, 9, 'Bangalore', 1),
(19, 10, 'Kannur', 1),
(20, 10, 'Kochi', 1),
(21, 10, 'Kollam', 1),
(22, 10, 'Kozhikode', 1),
(23, 10, 'Malappuram', 1),
(24, 10, 'Thiruvananthapuram', 1),
(25, 10, 'Thrissur', 1),
(26, 11, 'Bhopal', 1),
(27, 11, 'Gwalior', 1),
(28, 11, 'Indore', 1),
(29, 11, 'Jabalpur', 1),
(30, 12, 'Aurangabad', 1),
(31, 12, 'Greater Mumbai', 1),
(32, 12, 'Nagpur', 1),
(33, 12, 'Nashik', 1),
(34, 12, 'Pune', 1),
(35, 12, 'Vasai Virar City', 1),
(36, 13, 'Amritsar', 1),
(37, 13, 'Ludhiana', 1),
(38, 14, 'Jaipur', 1),
(39, 14, 'Jodhpur', 1),
(40, 14, 'Kota', 1),
(41, 15, 'Chennai', 1),
(42, 15, 'Coimbatore', 1),
(43, 15, 'Madurai', 1),
(44, 15, 'Tiruchirappalli', 1),
(45, 16, 'Agra', 1),
(46, 16, 'Allahabad', 1),
(47, 16, 'Ghaziabad', 1),
(48, 16, 'Kanpur', 1),
(49, 16, 'Lucknow', 1),
(50, 16, 'Meerut', 1),
(51, 16, 'Varanasi', 1),
(52, 17, 'Asansol', 1),
(53, 17, 'Kolkata', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
