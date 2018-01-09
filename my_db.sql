-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2015 at 02:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acad_emp`
--

CREATE TABLE IF NOT EXISTS `acad_emp` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `desig` varchar(60) NOT NULL,
  `hours` varchar(60) NOT NULL,
  `year` varchar(60) NOT NULL,
  `salary` varchar(60) NOT NULL,
  `religion` text NOT NULL,
  `nationality` text NOT NULL,
  `assistent_to` text NOT NULL,
  `shift` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acad_emp`
--

INSERT INTO `acad_emp` (`id`, `name`, `cnic`, `addr`, `contact`, `email`, `desig`, `hours`, `year`, `salary`, `religion`, `nationality`, `assistent_to`, `shift`) VALUES
(5, 'Faraz', '4441515151616', 'Jinah Town', '222222', 'abc@gmail.com', 'clerk', '8', '02-01-2008', 'Rs 15,000', 'Islam', 'Pakistan', 'None', 'Morning'),
(7, 'admin', '3130484441515', 'Jinnah Town', '03047337490', 'humamalik49@yahoo.com', 'Clerk', '6', '2011', 'Rs.20,000', 'Islam', 'Pakistani', 'None', 'Mor');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(30) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'login', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `admin_emp`
--

CREATE TABLE IF NOT EXISTS `admin_emp` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `desig` varchar(60) NOT NULL,
  `hours` varchar(60) NOT NULL,
  `year` varchar(60) NOT NULL,
  `salary` varchar(60) NOT NULL,
  `religion` text NOT NULL,
  `nationality` text NOT NULL,
  `assistent_to` text NOT NULL,
  `shift` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_emp`
--

INSERT INTO `admin_emp` (`id`, `name`, `cnic`, `addr`, `contact`, `email`, `desig`, `hours`, `year`, `salary`, `religion`, `nationality`, `assistent_to`, `shift`) VALUES
(5, 'Faraz', '4441515151616', 'Jinah Town', '1111111', 'abc@gmail.com', 'clerk', '8', '02-01-2008', 'Rs 15,000', 'Islam', 'Pakistan', 'None', 'Morning'),
(7, 'Rasheed', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bscs_admisson`
--

CREATE TABLE IF NOT EXISTS `bscs_admisson` (
`id` int(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `prof` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `day` int(60) NOT NULL,
  `month` varchar(60) NOT NULL,
  `year` int(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `degree` varchar(60) NOT NULL,
  `marks` varchar(60) NOT NULL,
  `percent` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `passing` varchar(60) NOT NULL,
  `nat` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `deposit` varchar(60) NOT NULL,
  `bank` varchar(60) NOT NULL,
  `details` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bscs_admisson`
--

INSERT INTO `bscs_admisson` (`id`, `surname`, `name`, `fname`, `prof`, `gender`, `cnic`, `email`, `day`, `month`, `year`, `address`, `city`, `phone`, `mobile`, `degree`, `marks`, `percent`, `college`, `passing`, `nat`, `amount`, `deposit`, `bank`, `details`) VALUES
(2, '0', 'Tahir', '', '', 'Male', '', 'tahir.jutt9089@gmail.com', 6, '0', 1994, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bsit_admisson`
--

CREATE TABLE IF NOT EXISTS `bsit_admisson` (
`id` int(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `prof` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `day` int(60) NOT NULL,
  `month` varchar(60) NOT NULL,
  `year` int(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `degree` varchar(60) NOT NULL,
  `marks` varchar(60) NOT NULL,
  `percent` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `passing` varchar(60) NOT NULL,
  `nat` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `deposit` varchar(60) NOT NULL,
  `bank` varchar(60) NOT NULL,
  `details` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsit_admisson`
--

INSERT INTO `bsit_admisson` (`id`, `surname`, `name`, `fname`, `prof`, `gender`, `cnic`, `email`, `day`, `month`, `year`, `address`, `city`, `phone`, `mobile`, `degree`, `marks`, `percent`, `college`, `passing`, `nat`, `amount`, `deposit`, `bank`, `details`) VALUES
(1, '', 'Tahir', '', '', 'Male', '', '', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clerk_emp`
--

CREATE TABLE IF NOT EXISTS `clerk_emp` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `desig` varchar(60) NOT NULL,
  `hours` varchar(60) NOT NULL,
  `year` varchar(60) NOT NULL,
  `salary` varchar(60) NOT NULL,
  `religion` text NOT NULL,
  `nationality` text NOT NULL,
  `assistent_to` text NOT NULL,
  `shift` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clerk_emp`
--

INSERT INTO `clerk_emp` (`id`, `name`, `cnic`, `addr`, `contact`, `email`, `desig`, `hours`, `year`, `salary`, `religion`, `nationality`, `assistent_to`, `shift`) VALUES
(5, 'Naveed', '4441515151616', 'Jinah Town', '1111111', 'abc@gmail.com', 'clerk', '8', '02-01-2008', 'Rs 15,000', 'Islam', 'Pakistan', 'None', 'Morning'),
(6, 'Waqar', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_course`
--

CREATE TABLE IF NOT EXISTS `cs_course` (
`id` int(30) NOT NULL,
  `course_id` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `time` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `duration` varchar(60) NOT NULL,
  `fee` varchar(60) NOT NULL,
  `instructor` varchar(60) NOT NULL,
  `room` varchar(60) NOT NULL,
  `lec` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_course`
--

INSERT INTO `cs_course` (`id`, `course_id`, `name`, `time`, `date`, `duration`, `fee`, `instructor`, `room`, `lec`) VALUES
(14, 'cou-126', 'Operating system', '11-00 pm', '08-08-2015', '6 Months', 'Rs. 8,000', 'Sir Mujtaba', 'Room No,1', '32'),
(15, 'cou-126', 'Operating system', '11-00 pm', '08-08-2015', '6 Months', 'Rs. 8,000', 'Sir Ateeq', 'Room No,1', '32');

-- --------------------------------------------------------

--
-- Table structure for table `cs_eve_a`
--

CREATE TABLE IF NOT EXISTS `cs_eve_a` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_eve_a`
--

INSERT INTO `cs_eve_a` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(1, 'Tahir', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_eve_b`
--

CREATE TABLE IF NOT EXISTS `cs_eve_b` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_eve_b`
--

INSERT INTO `cs_eve_b` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(1, 'Tahir', '473', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs_morning`
--

CREATE TABLE IF NOT EXISTS `cs_morning` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cs_weekend`
--

CREATE TABLE IF NOT EXISTS `cs_weekend` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_weekend`
--

INSERT INTO `cs_weekend` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(2, 'Tahir', '473', '', '', '', '', 'Faqeer MUhammad', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `int_teacher`
--

CREATE TABLE IF NOT EXISTS `int_teacher` (
`id` int(30) NOT NULL,
  `name` text NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `quali` varchar(60) NOT NULL,
  `relig` text NOT NULL,
  `nationality` text NOT NULL,
  `joining` varchar(60) NOT NULL,
  `sal` varchar(60) NOT NULL,
  `post` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `int_teacher`
--

INSERT INTO `int_teacher` (`id`, `name`, `cnic`, `addr`, `contact`, `email`, `quali`, `relig`, `nationality`, `joining`, `sal`, `post`) VALUES
(1, 'Sir Haroon', '12121212', '', '', 'qeqeqeqee', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `it_course`
--

CREATE TABLE IF NOT EXISTS `it_course` (
`id` int(30) NOT NULL,
  `course_id` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `time` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `duration` varchar(60) NOT NULL,
  `fee` varchar(60) NOT NULL,
  `instructor` varchar(60) NOT NULL,
  `room` varchar(60) NOT NULL,
  `lec` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_course`
--

INSERT INTO `it_course` (`id`, `course_id`, `name`, `time`, `date`, `duration`, `fee`, `instructor`, `room`, `lec`) VALUES
(14, 'cou-126', 'Operating system', '11-00 pm', '08-08-2015', '6 Months', 'Rs. 8,000', 'Sir Mujtaba', 'Room No,1', '32'),
(15, 'cou-127', 'HRM', '9:00 am', '10-10-2015', '6 Months', 'Rs.8,000', 'sir Shaheer', 'Room N0.1', '32'),
(16, 'cou-127', 'HRM', '9:00 am', '10-10-2015', '4 Months', 'Rs.8,000', 'sir Shaheer', 'Room N0.1', '32');

-- --------------------------------------------------------

--
-- Table structure for table `it_eve_a`
--

CREATE TABLE IF NOT EXISTS `it_eve_a` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_eve_a`
--

INSERT INTO `it_eve_a` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(1, 'Azzam', '452', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `it_eve_b`
--

CREATE TABLE IF NOT EXISTS `it_eve_b` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_eve_b`
--

INSERT INTO `it_eve_b` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(2, 'Tahir', '473', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `it_morning`
--

CREATE TABLE IF NOT EXISTS `it_morning` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_morning`
--

INSERT INTO `it_morning` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(2, 'Azzam', '452', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `it_weekend`
--

CREATE TABLE IF NOT EXISTS `it_weekend` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_weekend`
--

INSERT INTO `it_weekend` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(1, 'Tahir', '473', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mcs`
--

CREATE TABLE IF NOT EXISTS `mcs` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` int(30) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` text NOT NULL,
  `religion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mcs_admisson`
--

CREATE TABLE IF NOT EXISTS `mcs_admisson` (
`id` int(30) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `prof` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `day` int(60) NOT NULL,
  `month` varchar(60) NOT NULL,
  `year` int(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `degree` varchar(60) NOT NULL,
  `marks` varchar(60) NOT NULL,
  `percent` varchar(60) NOT NULL,
  `college` varchar(60) NOT NULL,
  `passing` varchar(60) NOT NULL,
  `nat` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `deposit` varchar(60) NOT NULL,
  `bank` varchar(60) NOT NULL,
  `details` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcs_admisson`
--

INSERT INTO `mcs_admisson` (`id`, `surname`, `name`, `fname`, `prof`, `gender`, `cnic`, `email`, `day`, `month`, `year`, `address`, `city`, `phone`, `mobile`, `degree`, `marks`, `percent`, `college`, `passing`, `nat`, `amount`, `deposit`, `bank`, `details`) VALUES
(1, '', 'Hafiz Tahir Mehmood', '', '', 'Male', '', '', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 'Hafiz Tahir Mehmood', '', '', 'Male', '', 'tahirjutt1513@yahoo.com', 6, '0', 1994, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Mr.', 'Tahir', 'Faqeer Muhammad', 'student', 'Male', '13131314', 'abc@yahoo.com', 6, 'September', 1994, 'abc', 'sadiq abad', '123456', '111111', 'Fsc', '800', '70%', 'MTB', '2011', '54', 'Rs.26100', '29/8/2012', 'HBL', '');

-- --------------------------------------------------------

--
-- Table structure for table `mcs_course`
--

CREATE TABLE IF NOT EXISTS `mcs_course` (
`id` int(30) NOT NULL,
  `course_id` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `time` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `duration` varchar(60) NOT NULL,
  `fee` varchar(60) NOT NULL,
  `instructor` varchar(60) NOT NULL,
  `room` varchar(60) NOT NULL,
  `lec` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcs_course`
--

INSERT INTO `mcs_course` (`id`, `course_id`, `name`, `time`, `date`, `duration`, `fee`, `instructor`, `room`, `lec`) VALUES
(14, 'cou-126', 'Operating system', '11-00 pm', '08-08-2015', '6 Months', 'Rs. 8,000', 'Sir Mujtaba', 'Room No,1', '32'),
(15, 'cou-127', 'HRM', '9:00 am', '10-10-2015', '6 Months', 'Rs.8,000', 'sir Shaheer', 'Room N0.1', '32'),
(17, 'Course-123', 'Web Designing', '', '', '', '', '', '', ''),
(18, 'Course-123', 'Web Designing', '10:00 am', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mcs_eve_a`
--

CREATE TABLE IF NOT EXISTS `mcs_eve_a` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` text NOT NULL,
  `religion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcs_eve_a`
--

INSERT INTO `mcs_eve_a` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(1, 'Tahir', '473', '121121212', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mcs_eve_b`
--

CREATE TABLE IF NOT EXISTS `mcs_eve_b` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `religion` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcs_eve_b`
--

INSERT INTO `mcs_eve_b` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(1, 'TAhir', '1212', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mcs_weekend`
--

CREATE TABLE IF NOT EXISTS `mcs_weekend` (
`id` int(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` varchar(60) NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cntct` varchar(60) NOT NULL,
  `session` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `fcntct` varchar(60) NOT NULL,
  `nationality` text NOT NULL,
  `religion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcs_weekend`
--

INSERT INTO `mcs_weekend` (`id`, `name`, `roll`, `cnic`, `address`, `cntct`, `session`, `fname`, `fcntct`, `nationality`, `religion`) VALUES
(1, 'TAhir', '122112', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `per_teacher`
--

CREATE TABLE IF NOT EXISTS `per_teacher` (
`id` int(30) NOT NULL,
  `name` text NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `quali` varchar(60) NOT NULL,
  `relig` text NOT NULL,
  `nationality` text NOT NULL,
  `joining` varchar(60) NOT NULL,
  `sal` varchar(60) NOT NULL,
  `post` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_teacher`
--

INSERT INTO `per_teacher` (`id`, `name`, `cnic`, `addr`, `contact`, `email`, `quali`, `relig`, `nationality`, `joining`, `sal`, `post`) VALUES
(2, 'Sir Haroon', '12121212', '', '', '123@yahoo.com', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `old_pass` varchar(255) NOT NULL,
  `new_pass` varchar(255) NOT NULL,
  `con_new_pass` varchar(255) NOT NULL,
  `que1` varchar(255) NOT NULL,
  `que2` varchar(255) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `temp_pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `old_pass`, `new_pass`, `con_new_pass`, `que1`, `que2`, `ans1`, `ans2`, `temp_pass`) VALUES
(4, 'Hafiz Tahir Mehmood', 'admin@yahoo.com', '12345', '', '', '', '', '', '', '', 'abc123'),
(5, 'azzam', 'azzam8796@yahoo.com', 'qwerty', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_msg`
--

CREATE TABLE IF NOT EXISTS `user_msg` (
`id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `msg` longtext NOT NULL,
  `antispam` int(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_msg`
--

INSERT INTO `user_msg` (`id`, `name`, `email`, `msg`, `antispam`) VALUES
(1, 'Azzam', 'azzam8796@yahoo.com', 'Hi h r u?', 4);

-- --------------------------------------------------------

--
-- Table structure for table `vis_teacher`
--

CREATE TABLE IF NOT EXISTS `vis_teacher` (
`id` int(30) NOT NULL,
  `name` text NOT NULL,
  `cnic` varchar(60) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `quali` varchar(60) NOT NULL,
  `relig` text NOT NULL,
  `nationality` text NOT NULL,
  `joining` varchar(60) NOT NULL,
  `sal` varchar(60) NOT NULL,
  `post` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vis_teacher`
--

INSERT INTO `vis_teacher` (`id`, `name`, `cnic`, `addr`, `contact`, `email`, `quali`, `relig`, `nationality`, `joining`, `sal`, `post`) VALUES
(1, 'Sir Haroon', '12121313', 'gggggfjf', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acad_emp`
--
ALTER TABLE `acad_emp`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_emp`
--
ALTER TABLE `admin_emp`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `bscs_admisson`
--
ALTER TABLE `bscs_admisson`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsit_admisson`
--
ALTER TABLE `bsit_admisson`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clerk_emp`
--
ALTER TABLE `clerk_emp`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `cs_course`
--
ALTER TABLE `cs_course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_eve_a`
--
ALTER TABLE `cs_eve_a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_eve_b`
--
ALTER TABLE `cs_eve_b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_morning`
--
ALTER TABLE `cs_morning`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_weekend`
--
ALTER TABLE `cs_weekend`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `int_teacher`
--
ALTER TABLE `int_teacher`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_course`
--
ALTER TABLE `it_course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_eve_a`
--
ALTER TABLE `it_eve_a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_eve_b`
--
ALTER TABLE `it_eve_b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_morning`
--
ALTER TABLE `it_morning`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_weekend`
--
ALTER TABLE `it_weekend`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcs`
--
ALTER TABLE `mcs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcs_admisson`
--
ALTER TABLE `mcs_admisson`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcs_course`
--
ALTER TABLE `mcs_course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcs_eve_a`
--
ALTER TABLE `mcs_eve_a`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcs_eve_b`
--
ALTER TABLE `mcs_eve_b`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcs_weekend`
--
ALTER TABLE `mcs_weekend`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_teacher`
--
ALTER TABLE `per_teacher`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_msg`
--
ALTER TABLE `user_msg`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vis_teacher`
--
ALTER TABLE `vis_teacher`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acad_emp`
--
ALTER TABLE `acad_emp`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_emp`
--
ALTER TABLE `admin_emp`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bscs_admisson`
--
ALTER TABLE `bscs_admisson`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bsit_admisson`
--
ALTER TABLE `bsit_admisson`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clerk_emp`
--
ALTER TABLE `clerk_emp`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cs_course`
--
ALTER TABLE `cs_course`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cs_eve_a`
--
ALTER TABLE `cs_eve_a`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cs_eve_b`
--
ALTER TABLE `cs_eve_b`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cs_morning`
--
ALTER TABLE `cs_morning`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cs_weekend`
--
ALTER TABLE `cs_weekend`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `int_teacher`
--
ALTER TABLE `int_teacher`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `it_course`
--
ALTER TABLE `it_course`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `it_eve_a`
--
ALTER TABLE `it_eve_a`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `it_eve_b`
--
ALTER TABLE `it_eve_b`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `it_morning`
--
ALTER TABLE `it_morning`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `it_weekend`
--
ALTER TABLE `it_weekend`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mcs`
--
ALTER TABLE `mcs`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mcs_admisson`
--
ALTER TABLE `mcs_admisson`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mcs_course`
--
ALTER TABLE `mcs_course`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mcs_eve_a`
--
ALTER TABLE `mcs_eve_a`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mcs_eve_b`
--
ALTER TABLE `mcs_eve_b`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mcs_weekend`
--
ALTER TABLE `mcs_weekend`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `per_teacher`
--
ALTER TABLE `per_teacher`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_msg`
--
ALTER TABLE `user_msg`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vis_teacher`
--
ALTER TABLE `vis_teacher`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
