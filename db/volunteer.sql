-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 01:49 AM
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
  `school_id` int(50) NOT NULL,
  `edu_item` varchar(100) NOT NULL,
  `e_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
  `school_id` int(50) NOT NULL,
  `unit_type` varchar(50) NOT NULL,
  `u_qunatity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `non_acedemic_staff`
--

CREATE TABLE IF NOT EXISTS `non_acedemic_staff` (
  `school_id` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `school_id` int(11) NOT NULL,
  `water` tinyint(1) NOT NULL,
  `electricity` tinyint(1) NOT NULL,
  `washrooms` int(11) NOT NULL,
  `lab_facility` tinyint(1) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `garbage_disposal` tinyint(1) NOT NULL,
  `collection_dates` tinyint(1) NOT NULL,
  `drainage_system` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE IF NOT EXISTS `personal_details` (
  `school_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `tel_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sports_coaches`
--

CREATE TABLE IF NOT EXISTS `sports_coaches` (
  `school_id` int(50) NOT NULL,
  `sport` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sports_equipment`
--

CREATE TABLE IF NOT EXISTS `sports_equipment` (
  `school_id` int(50) NOT NULL,
  `sports_item` varchar(100) NOT NULL,
  `s_qunatity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `school_id` int(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
