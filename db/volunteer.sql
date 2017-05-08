-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 03:03 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `volunteer`
--

-- --------------------------------------------------------

--
-- Table structure for table `edu_resources`
--

CREATE TABLE IF NOT EXISTS `edu_resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(50) NOT NULL,
  `edu_item` varchar(100) NOT NULL,
  `e_quantity` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `edu_resources`
--

INSERT INTO `edu_resources` (`id`, `school_id`, `edu_item`, `e_quantity`) VALUES
(1, 5, 'zcczc', 0),
(2, 5, 'czC', 0),
(3, 6, 'zcczc', 0),
(4, 6, 'czC', 0),
(5, 5, 'cxzvxzv', 0),
(6, 5, 'xzvxz', 0),
(33, 1, 'a', 1),
(34, 1, 'a', 1),
(35, 1, 'a', 1),
(36, 1, 'a', 1),
(37, 1, 'a', 1),
(38, 0, 'a', 2),
(39, 0, 'a', 2),
(40, 0, '', 0),
(41, 0, '', 0),
(42, 0, '', 0),
(43, 3, '', 0),
(44, 3, '', 0),
(45, 1, '', 0),
(46, 1, '', 0),
(47, 1, '', 0),
(48, 3, '', 0),
(49, 0, '', 0),
(50, 0, '', 0),
(51, 0, '', 0),
(52, 1, '', 0),
(53, 1, '', 0),
(54, 1, '', 0),
(55, 1, '', 0),
(56, 0, '', 0),
(57, 0, '', 0),
(58, 0, '', 0),
(59, 0, '', 0),
(60, 0, '', 0),
(61, 0, '', 0),
(62, 0, '', 0),
(63, 1, '', 0),
(64, 1, '', 0),
(65, 1, '', 0),
(66, 1, '', 0),
(67, 1, '', 0),
(68, 1, '', 0),
(69, 1, '', 0),
(70, 3, '', 0),
(71, 3, '', 0),
(72, 3, '', 0),
(73, 3, '', 0),
(74, 0, '', 0),
(75, 0, '', 0),
(76, 0, '', 0),
(77, 1, '', 0),
(78, 1, '', 0),
(79, 1, '', 0),
(80, 1, '', 0),
(81, 3, '', 0),
(82, 0, '', 0),
(83, 0, '', 0),
(84, 0, '', 0),
(85, 0, '', 0),
(86, 0, '', 0),
(87, 0, '', 0),
(88, 0, '', 0),
(89, 0, '', 0),
(90, 0, '', 0),
(91, 0, '', 0),
(92, 1, '', 0),
(93, 3, '', 0),
(94, 3, '', 0),
(95, 3, '', 0),
(96, 3, '', 0),
(97, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
  `school_id` int(50) NOT NULL,
  `unit_type` varchar(50) NOT NULL,
  `u_qunatity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`school_id`, `unit_type`, `u_qunatity`) VALUES
(0, '', 0),
(0, '', 0),
(1, '', 0),
(3, '', 0),
(3, '', 0),
(3, '', 0),
(3, '', 0),
(0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `non_acedemic_staff`
--

CREATE TABLE IF NOT EXISTS `non_acedemic_staff` (
  `school_id` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_acedemic_staff`
--

INSERT INTO `non_acedemic_staff` (`school_id`, `category`, `number`) VALUES
(1, 'aaa', 0),
(1, 'aaa', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(1, '', 0),
(1, '', 0),
(1, '', 0),
(1, '', 0),
(1, '', 0),
(1, '', 0),
(1, '', 0),
(3, '', 0),
(3, '', 0),
(3, '', 0),
(3, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(1, '', 0),
(1, '', 0),
(1, '', 0),
(1, '', 0),
(3, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(0, '', 0),
(1, '', 0),
(3, '', 0),
(3, '', 0),
(3, '', 0),
(3, '', 0),
(0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(11) NOT NULL,
  `water` tinyint(1) NOT NULL,
  `electricity` tinyint(1) NOT NULL,
  `washrooms` int(11) NOT NULL,
  `lab_facility` tinyint(1) NOT NULL,
  `buildings` int(11) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `garbage_disposal` tinyint(1) NOT NULL,
  `collection_dates` tinyint(1) NOT NULL,
  `drainage_system` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `school_id`, `water`, `electricity`, `washrooms`, `lab_facility`, `buildings`, `internet`, `garbage_disposal`, `collection_dates`, `drainage_system`) VALUES
(1, 1, 7, 0, 12, 1, 0, 0, 0, 0, 0),
(6, 3, 2, 0, 0, 1, 1, 1, 0, 0, 0),
(8, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1),
(9, 3, 0, 0, 0, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE IF NOT EXISTS `school_details` (
  `school_id` int(50) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `province` varchar(50) NOT NULL,
  `school_telno` int(10) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`school_id`, `school_name`, `address`, `province`, `school_telno`, `contact_person`, `occupation`, `contact_no`, `email`) VALUES
(1, 'Isipathana College', 'Colombo 5', 'Colombo', 112678987, 'Namal', 'student', 711446323, 'namalSilva@gmail.com'),
(2, 'Royel College', 'Colombo 7', 'Colombo', 112678987, 'Namal', 'student', 711446323, 'namalSilva@gmail.com'),
(3, 'Ibbagamuwa Maha Vidyalaya', 'Ibbagamuwa', 'North', 117654543, 'Nimal', 'Student', 77829990, 'nimalse@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sports_coaches`
--

CREATE TABLE IF NOT EXISTS `sports_coaches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(50) NOT NULL,
  `sport` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `sports_coaches`
--

INSERT INTO `sports_coaches` (`id`, `school_id`, `sport`) VALUES
(12, 1, ''),
(13, 1, ''),
(14, 3, ''),
(15, 0, ''),
(16, 0, ''),
(17, 0, ''),
(18, 1, ''),
(19, 1, ''),
(20, 1, ''),
(21, 1, ''),
(22, 0, ''),
(23, 0, ''),
(24, 0, ''),
(25, 0, ''),
(26, 0, ''),
(27, 0, ''),
(28, 0, ''),
(29, 1, ''),
(30, 1, ''),
(31, 1, ''),
(32, 1, ''),
(33, 1, ''),
(34, 1, ''),
(35, 1, ''),
(36, 3, ''),
(37, 3, ''),
(38, 3, ''),
(39, 3, ''),
(40, 0, ''),
(41, 0, ''),
(42, 0, ''),
(43, 1, ''),
(44, 1, ''),
(45, 1, ''),
(46, 1, ''),
(47, 3, ''),
(48, 0, ''),
(49, 0, ''),
(50, 0, ''),
(51, 0, ''),
(52, 0, ''),
(53, 0, ''),
(54, 0, ''),
(55, 0, ''),
(56, 0, ''),
(57, 0, ''),
(58, 1, ''),
(59, 3, ''),
(60, 3, ''),
(61, 3, ''),
(62, 3, ''),
(63, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sports_equipment`
--

CREATE TABLE IF NOT EXISTS `sports_equipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(50) NOT NULL,
  `sports_item` varchar(100) NOT NULL,
  `s_qunatity` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `sports_equipment`
--

INSERT INTO `sports_equipment` (`id`, `school_id`, `sports_item`, `s_qunatity`) VALUES
(10, 1, '', 0),
(11, 1, '', 0),
(12, 3, '', 0),
(13, 0, '', 0),
(14, 0, '', 0),
(15, 0, '', 0),
(16, 1, '', 0),
(17, 1, '', 0),
(18, 1, '', 0),
(19, 1, '', 0),
(20, 0, '', 0),
(21, 0, '', 0),
(22, 0, '', 0),
(23, 0, '', 0),
(24, 0, '', 0),
(25, 0, '', 0),
(26, 0, '', 0),
(27, 1, '', 0),
(28, 1, '', 0),
(29, 1, '', 0),
(30, 1, '', 0),
(31, 1, '', 0),
(32, 1, '', 0),
(33, 1, '', 0),
(34, 3, '', 0),
(35, 3, '', 0),
(36, 3, '', 0),
(37, 3, '', 0),
(38, 0, '', 0),
(39, 0, '', 0),
(40, 0, '', 0),
(41, 1, '', 0),
(42, 1, '', 0),
(43, 1, '', 0),
(44, 1, '', 0),
(45, 3, '', 0),
(46, 0, '', 0),
(47, 0, '', 0),
(48, 0, '', 0),
(49, 0, '', 0),
(50, 0, '', 0),
(51, 0, '', 0),
(52, 0, '', 0),
(53, 0, '', 0),
(54, 0, '', 0),
(55, 0, '', 0),
(56, 1, '', 0),
(57, 3, '', 0),
(58, 3, '', 0),
(59, 3, '', 0),
(60, 3, '', 0),
(61, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `school_id` int(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`school_id`, `subject`, `grade`) VALUES
(1, 'aa', 3),
(1, 'aa', 3),
(1, 'aa', 3),
(3, 'aas', 2),
(3, 'aas', 2),
(0, '', 0),
(0, '', 0),
(0, 'zczcz', 5),
(1, 'aaa', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
