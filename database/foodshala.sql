-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 03:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile_no` int(11) NOT NULL,
  `preferences` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `mobile_no`, `preferences`) VALUES
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'Veg'),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'Veg'),
(9, 'Gurucharan Maparu', 'gmaparu.cse18@chitkarauniversity.edu.in', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, 'Veg'),
(10, 'Gurucharan Maparu', 'gmaparu.cse18@chitkarauniversity.edu.in', '202cb962ac59075b964b07152d234b70', 2147483647, 'Veg'),
(11, 'abcd', 'abcd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 'Veg'),
(12, 'abcd', 'abcd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1234567890, 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `restaurant_name`, `email`, `password`, `mobile_no`) VALUES
(1, 'Gurucharan Maparu', 'gmaparu.cse18@chitkarauniversity.edu.in', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647),
(2, 'gura', 'togmaparu@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647),
(3, 'gura', 'guru@gmail.com', '01cfcd4f6b8770febfb40cb906715822', 2147483647),
(4, 'Gurucharan Maparu', 'gmaparu.cse18@chitkarauniversity.edu.in', '86109d400f0ed29e840b47ed72777c84', 2147483647),
(5, 'Gurucharan Maparu', 'gmaparu@chitkarauniversity.edu.in', '25f9e794323b453885f5181f1b624d0b', 2147483647),
(6, 'abcd', 'abcd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(7, 'abcd', 'abcd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(8, 'abcd', 'abcd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567890);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
