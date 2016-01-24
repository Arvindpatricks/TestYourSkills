-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 30, 2015 at 06:28 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testyourskills`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `regid` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `college` varchar(150) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `grpid` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`regid`, `name`, `college`, `dob`, `pass`, `dept`, `grpid`, `role`, `year`) VALUES
('cse1@mit', 'Arun', 'mit', '-1995', 'arun', 'cse', '', 'staff', 0),
('cse1@smvec', 'Arvind', 'smvec', '-95', 'indian', 'cse', 'SMVEC_CSE_II_A', 'staff', 0),
('cse2@smvec', 'Kumar', 'smvec', '-95', 'kumar', 'cse', 'SMVEC_CSE_II_A', 'student', 0),
('cse3@smvec', 'daya', 'smvec', '909', 'karthikayan92', 'cse', 'SMVEC_CSE_II_A', 'student', 0),
('cse4@smvec', 'Premkumar', 'smvec', '-1995', 'premkumar', 'cse', '', 'hod', 0),
('it1@smvec', 'Raju', 'smvec', '-1995', 'raju', 'it', '', 'hod', 0),
('it2@smvec', 'arul', 'smvec', '-1995', 'arul', 'it', '', 'student', 0),
('smvec@smvec', 'Venkatachalpathy', 'smvec', '-1995', 'venkatachalapathy', 'cse', '', 'principal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `colgname` varchar(100) NOT NULL,
  `hoi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `grps_formed` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `pts` int(11) NOT NULL,
  `hoiid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`colgname`, `hoi`, `email`, `grps_formed`, `balance`, `rank`, `pts`, `hoiid`) VALUES
('Sri Manakula Vinayagar Engineering College', 'Mr. Cailasamae', 'placement@smvec.ac.in', 30, 10000, 1, 2000, 'smvec@smvec'),
('Sri Manakula Vinayagar Institue Of Technology', 'Rajan', 'placement@smvit.ac.in', 30, 5000, 2, 40, '');

-- --------------------------------------------------------

--
-- Table structure for table `overall_count`
--

CREATE TABLE `overall_count` (
  `smvec_cse` int(11) NOT NULL,
  `smvec_it` int(11) NOT NULL,
  `mit_cse` int(11) NOT NULL,
  `mit_it` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `overall_count`
--

INSERT INTO `overall_count` (`smvec_cse`, `smvec_it`, `mit_cse`, `mit_it`) VALUES
(5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `tysid` varchar(30) NOT NULL,
  `questions_posted` varchar(40) NOT NULL,
  `last_active` varchar(50) NOT NULL,
  `colg_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`tysid`, `questions_posted`, `last_active`, `colg_id`) VALUES
('cse1@smvec', '30', '2015-12-24', 'smvec@smvec');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `regid` varchar(30) NOT NULL,
  `hackos` int(11) NOT NULL,
  `test_attended` int(11) NOT NULL,
  `test_passed` int(11) NOT NULL,
  `highest_rank` int(11) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`regid`, `hackos`, `test_attended`, `test_passed`, `highest_rank`, `rank`) VALUES
('cse2@smvec', 100, 4, 2, 5, 7),
('cse3@smvec', 90, 5, 3, 2, 1),
('it2@smvec', 83, 5, 2, 10, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`colgname`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`tysid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
