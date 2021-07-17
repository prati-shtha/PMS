-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2021 at 07:12 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `sr_no` int(5) NOT NULL AUTO_INCREMENT,
  `emp_id` int(5) NOT NULL,
  `atd` enum('P','A') NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sr_no`, `emp_id`, `atd`, `date`) VALUES
(26, 4, 'P', '2019-07-15'),
(27, 5, 'P', '2019-07-15'),
(28, 6, 'P', '2019-07-15'),
(29, 7, 'P', '2019-07-15'),
(30, 8, 'P', '2019-07-15'),
(31, 5, 'P', '2019-07-16'),
(32, 6, 'P', '2019-07-16'),
(33, 7, 'P', '2019-07-16'),
(34, 8, 'P', '2019-07-16'),
(35, 4, 'A', '2019-07-16'),
(36, 4, 'P', '2019-07-20'),
(37, 5, 'P', '2019-07-20'),
(38, 6, 'P', '2019-07-20'),
(39, 7, 'A', '2019-07-20'),
(40, 8, 'A', '2019-07-20'),
(41, 4, 'P', '2019-07-21'),
(42, 6, 'P', '2019-07-21'),
(43, 7, 'P', '2019-07-21'),
(44, 8, 'P', '2019-07-21'),
(45, 5, 'A', '2019-07-21'),
(46, 4, 'P', '2019-07-21'),
(47, 6, 'P', '2019-07-21'),
(48, 7, 'P', '2019-07-21'),
(49, 8, 'P', '2019-07-21'),
(50, 5, 'A', '2019-07-21'),
(51, 4, 'P', '2019-07-22'),
(52, 8, 'P', '2019-07-22'),
(53, 5, 'A', '2019-07-22'),
(54, 6, 'A', '2019-07-22'),
(55, 7, 'A', '2019-07-22'),
(56, 4, 'P', '2019-07-23'),
(57, 9, 'P', '2019-07-23'),
(58, 7, 'A', '2019-07-23'),
(59, 8, 'A', '2019-07-23'),
(60, 4, 'P', '2019-07-24'),
(61, 9, 'P', '2019-07-24'),
(62, 7, 'A', '2019-07-24'),
(63, 8, 'A', '2019-07-24'),
(64, 4, 'P', '2019-07-27'),
(65, 7, 'P', '2019-07-27'),
(66, 8, 'P', '2019-07-27'),
(67, 9, 'P', '2019-07-27'),
(68, 10, 'P', '2019-07-27'),
(69, 4, 'P', '2019-07-27'),
(70, 7, 'P', '2019-07-27'),
(71, 8, 'P', '2019-07-27'),
(72, 9, 'P', '2019-07-27'),
(73, 10, 'P', '2019-07-27'),
(74, 4, 'P', '2019-07-27'),
(75, 7, 'P', '2019-07-27'),
(76, 8, 'P', '2019-07-27'),
(77, 9, 'P', '2019-07-27'),
(78, 10, 'P', '2019-07-27'),
(84, 4, 'P', '2019-08-03'),
(85, 7, 'P', '2019-08-03'),
(86, 8, 'A', '2019-08-03'),
(87, 9, 'A', '2019-08-03'),
(91, 7, 'P', '2020-11-17'),
(92, 8, 'P', '2020-11-17'),
(93, 9, 'P', '2020-11-17'),
(102, 7, 'P', '2021-06-27'),
(103, 8, 'P', '2021-06-27'),
(104, 9, 'P', '2021-06-27'),
(105, 10, 'P', '2021-06-27'),
(116, 7, 'P', '2021-07-04'),
(117, 8, 'P', '2021-07-04'),
(118, 11, 'P', '2021-07-04'),
(119, 9, 'A', '2021-07-04'),
(120, 10, 'A', '2021-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `date_of_birth` varchar(15) NOT NULL,
  `experience` varchar(2) NOT NULL,
  `daily_wages` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `session` varchar(30) NOT NULL,
  `status` enum('E','A') NOT NULL,
  `reg_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `father_name`, `gender`, `email`, `password`, `address`, `mobile_number`, `date_of_birth`, `experience`, `daily_wages`, `department`, `session`, `status`, `reg_at`) VALUES
(7, 'gunjan', 'G.Sharma', 'F', 'gunjan18@gmail.com', '1', 'abc', '7676567557', '0002-02-22', '1', '10000', 'management', '20', 'A', '2019-07-11 16:44:06'),
(8, 'Harsh tripathi', 'harvind tripathi', 'M', 'fgfgfg@gf.gdg', 'afega', 'xyz', '7676567557', '2019-07-06', '1', '10000', 'management', '20', 'E', '2019-07-11 16:45:12'),
(9, 'rishabh kumar verma', 'mahesh verma', 'M', 'rishabh@gmail.com', '1234', 'pqr', '1234567896', '2019-07-22', '1', '10000', 'management', '20', 'E', '2019-07-23 05:30:49'),
(10, 'aditi devi', 'S.P singh', 'F', 'u@gmail.com', '1', 'lmn', '7005427670', '1999-04-26', '1', '1222', 'management', '20', 'E', '2020-11-17 04:28:53'),
(11, 'Nisha sharma', 'Viond sharma', 'F', 'nisha@gmail.com', 'nish', 'xtz', '7794565265', '2008-02-06', '2', '5000', 'btech', '21', 'E', '2021-07-04 15:51:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 06:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--


--
-- Table structure for table `tblleaves`
--

CREATE TABLE `tblleaves` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleaves`
--

INSERT INTO `tblleaves` (`id`, `LeaveType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `empid`) VALUES
(7, 'Casual Leave', '30/11/2017', '29/10/2017', 'test description test descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest description', '2017-11-19 13:11:21', 'Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n', '2017-12-02 23:26:27 ', 2, 1, 1),
(8, 'Medical Leave test', '21/10/2017', '25/10/2017', 'test description test descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest description', '2017-11-20 11:14:14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-12-02 23:24:39 ', 1, 1, 1),
(9, 'Medical Leave test', '08/12/2017', '12/12/2017', 'Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n', '2017-12-02 18:26:01', NULL, NULL, 0, 1, 2),
(10, 'Restricted Holiday(RH)', '25/12/2017', '25/12/2017', 'Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2017-12-03 08:29:07', 'Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2017-12-03 14:06:12 ', 1, 1, 1),
(11, 'Casual Leave', '22/02/2022', '22/02/2022', 'sad', '2020-11-03 05:20:58', NULL, NULL, 0, 0, 1),
(12, 'Casual Leave', '22/02/2022', '22/02/2022', 'sad', '2020-11-03 05:52:49', NULL, NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleavetype`
--

INSERT INTO `tblleavetype` (`id`, `LeaveType`, `Description`, `CreationDate`) VALUES
(1, 'Casual Leave', 'Casual Leave ', '2017-11-01 12:07:56'),
(2, 'Medical Leave test', 'Medical Leave  test', '2017-11-06 13:16:09'),
(3, 'Restricted Holiday(RH)', 'Restricted Holiday(RH)', '2017-11-06 13:16:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--


--
-- Indexes for table `tbldepartments`
--


--
-- Indexes for table `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--


--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
