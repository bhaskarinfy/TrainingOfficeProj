-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2022 at 12:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traininginsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchmst`
--

DROP TABLE IF EXISTS `batchmst`;
CREATE TABLE IF NOT EXISTS `batchmst` (
  `batch_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `batch_name` varchar(30) NOT NULL,
  `start date` date NOT NULL,
  `enddate` date NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`batch_id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batchmst`
--

INSERT INTO `batchmst` (`batch_id`, `course_id`, `company_id`, `batch_name`, `start date`, `enddate`, `faculty_id`, `fees`, `status`) VALUES
(123, 456, 10, 'icon', '2022-11-10', '2023-12-15', 675, 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `companymst`
--

DROP TABLE IF EXISTS `companymst`;
CREATE TABLE IF NOT EXISTS `companymst` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_registration` varchar(30) NOT NULL,
  `company_emailid` varchar(50) NOT NULL,
  `company_phoneno` int(11) NOT NULL,
  `company_contactperson` varchar(30) NOT NULL,
  `company_designation` varchar(10) NOT NULL,
  `company_image` varchar(30) NOT NULL,
  `company_logo` varchar(30) NOT NULL,
  `classrooms` int(11) NOT NULL,
  `subscript_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companymst`
--

INSERT INTO `companymst` (`company_id`, `company_name`, `company_registration`, `company_emailid`, `company_phoneno`, `company_contactperson`, `company_designation`, `company_image`, `company_logo`, `classrooms`, `subscript_id`, `start_date`, `status`) VALUES
(10, 'abc', '112233', 'abc@gmail.com', 1234567891, 'sowjanya', 'manager', '', '', 5, 1, '2022-11-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coursemst`
--

DROP TABLE IF EXISTS `coursemst`;
CREATE TABLE IF NOT EXISTS `coursemst` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(30) DEFAULT NULL,
  `course_contents` text NOT NULL,
  `course_description` text NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`course_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursemst`
--

INSERT INTO `coursemst` (`course_id`, `course_name`, `course_contents`, `course_description`, `company_id`, `status`) VALUES
(456, 'neon', 'it is one of the section .', 'we have a lot of section like icon ,neonand leo.', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facultycourselink`
--

DROP TABLE IF EXISTS `facultycourselink`;
CREATE TABLE IF NOT EXISTS `facultycourselink` (
  `faculty_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `lnk_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `batch_status` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facultymst`
--

DROP TABLE IF EXISTS `facultymst`;
CREATE TABLE IF NOT EXISTS `facultymst` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `faculty_email` varchar(30) NOT NULL,
  `faculty_contact no` varchar(10) NOT NULL,
  `company_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`faculty_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultymst`
--

INSERT INTO `facultymst` (`faculty_id`, `faculty_name`, `faculty_email`, `faculty_contact no`, `company_id`, `status`) VALUES
(675, 'sowmya', 'sowmya123@gmail.com', '1234567890', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentmst`
--

DROP TABLE IF EXISTS `studentmst`;
CREATE TABLE IF NOT EXISTS `studentmst` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) DEFAULT NULL,
  `student_idno` varchar(10) DEFAULT NULL,
  `student_email` varchar(50) DEFAULT NULL,
  `student_phoneno` varchar(12) DEFAULT NULL,
  `date_registration` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `remarks` text DEFAULT NULL,
  `company_id` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmst`
--

INSERT INTO `studentmst` (`student_id`, `student_name`, `student_idno`, `student_email`, `student_phoneno`, `date_registration`, `status`, `remarks`, `company_id`) VALUES
(1, 'sowmya', '123', 'sowmya@gmail.com', '123456789', '2022-11-18', 1, 'gsdssfdjsdashsna', 1),
(2, 'sam', '456', 'sam@gmail.com', '4561237891', '2022-11-16', 1, 'hsjsfdgmdfgdfk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_courselink`
--

DROP TABLE IF EXISTS `student_courselink`;
CREATE TABLE IF NOT EXISTS `student_courselink` (
  `lnk_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `fc_id` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `fee_status` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`lnk_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

DROP TABLE IF EXISTS `student_fee`;
CREATE TABLE IF NOT EXISTS `student_fee` (
  `fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `fee_amount` int(11) DEFAULT NULL,
  `paid_amount` int(11) DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  `paid_status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`fee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `timetable_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `t_date` date NOT NULL,
  `start_time` time NOT NULL,
  `duration` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `class_held` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`timetable_id`),
  KEY `FK_course_id` (`course_id`),
  KEY `FK_batch_id` (`batch_id`),
  KEY `FK_faculty_id` (`faculty_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `course_id`, `batch_id`, `faculty_id`, `month_id`, `company_id`, `t_date`, `start_time`, `duration`, `status`, `class_held`) VALUES
(12, 456, 123, 675, 125, 10, '2022-11-16', '01:10:12', 4, 1, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
