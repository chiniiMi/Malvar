-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 04:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mshs_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fullname`, `address`, `contactnumber`, `position`, `username`, `password`) VALUES
(1, 'Quinn Villapando', 'Luta Sur Malvar Batangas', '09454929819', 'ADMIN', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `timein` varchar(255) NOT NULL,
  `timeout` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `LOGDATE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `lrn`, `timein`, `timeout`, `STATUS`, `LOGDATE`) VALUES
(62, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(63, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(64, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(65, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(66, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(67, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(68, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(69, '48040693', '12:39 am', '12:39 am', '1', '2023-03-04'),
(70, '48040693', '12:41 am', '', '0', '2023-03-04'),
(71, '414360', '12:41 am', '12:41 am', '1', '2023-03-04'),
(72, '414360', '12:41 am', '12:41 am', '1', '2023-03-04'),
(73, '123456789', '07:54 pm', '07:55 pm', '1', '2023-03-27'),
(74, '48040693', '08:04 pm', '08:05 pm', '1', '2023-03-27'),
(75, '48040693', '09:54 am', '', '0', '2023-04-07'),
(76, '48040693', '03:24 pm', '', '0', '2023-04-16'),
(77, '48040693', '04:48 pm', '04:49 pm', '1', '2023-05-10'),
(78, '48040693', '12:06 pm', '12:07 pm', '1', '2023-05-13'),
(79, '48040693', '12:34 am', '12:34 am', '1', '2023-06-24'),
(81, '3983362787', '06:32 pm', '06:32 pm', '1', '2023-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barrowedbooks`
--

CREATE TABLE `tbl_barrowedbooks` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `book_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barrowing`
--

CREATE TABLE `tbl_barrowing` (
  `id` int(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `bookid` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barrowing`
--

INSERT INTO `tbl_barrowing` (`id`, `lrn`, `studentname`, `bookid`, `category`, `quantity`) VALUES
(1, 'N350L00114', 'Quinn Villapando', '3', 'Research', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `eventdate` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `name`, `description`, `eventdate`, `file`) VALUES
(4, 'Sample Event', 'Sample Event Description', '2023-04-07', './uploads/ee612c263e3aa9a6be32af0425e080cd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guidancerecord`
--

CREATE TABLE `tbl_guidancerecord` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `parents` varchar(255) NOT NULL,
  `parentscontactnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `guidancedate` varchar(255) NOT NULL,
  `councelingtype` varchar(255) NOT NULL,
  `reasonforcounseling` varchar(255) NOT NULL,
  `actionrequired` text NOT NULL,
  `actiontaken` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guidancerecord`
--

INSERT INTO `tbl_guidancerecord` (`id`, `name`, `gender`, `lrn`, `contactnumber`, `parents`, `parentscontactnumber`, `email`, `address`, `guidancedate`, `councelingtype`, `reasonforcounseling`, `actionrequired`, `actiontaken`) VALUES
(13, 'Quinn Villapando', 'Male', '48040693', '09454929819', 'juan dela cruz', '91298391829', 'siletnceas@gmail.com', '213 Luta Sur,Malvar,Batangas', '2024-03-03', 'Type 1', 'Personal', 'asdas', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `id` int(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `initialstock` int(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `itemname`, `category`, `initialstock`, `file`) VALUES
(3, 'adsdasdasd', 'Research', 51, './uploads/71bee02f13ef72b4cc226ff693c05ce0Imag-Scope and Features.xlsx'),
(4, 'English Learning Materials', 'Noble', 1, './uploads/7168292e8b3a28f246792af541507d47Imag-Scope and Features.xlsx'),
(5, 'Turbo C', 'Research', 1, './uploads/a095610add262f1857dad4dc060b378bImag-Scope and Features.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_learning_materials`
--

CREATE TABLE `tbl_learning_materials` (
  `id` int(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_learning_materials`
--

INSERT INTO `tbl_learning_materials` (`id`, `itemname`, `category`, `file`) VALUES
(1, 'test', 'Research', './uploads/c58a4aa0705ee260350fa294a8b19fce71bee02f13ef72b4cc226ff693c05ce0Imag-Scope and Features.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programs`
--

CREATE TABLE `tbl_programs` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_programs`
--

INSERT INTO `tbl_programs` (`id`, `name`, `description`, `program`, `file`) VALUES
(2, 'Sample Program', 'Sample Program Description', 'Academic Track', './uploads/3729bf2da96b14643b22aaf2c43f36d5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stockin`
--

CREATE TABLE `tbl_stockin` (
  `id` int(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `stocks` varchar(255) NOT NULL,
  `stocktype` varchar(255) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  `yearlevel` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `parents` varchar(255) NOT NULL,
  `parentscontactnumber` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `name`, `gender`, `lrn`, `schoolyear`, `yearlevel`, `strand`, `contactnumber`, `parents`, `parentscontactnumber`, `section`, `email`, `file`, `username`, `password`, `type`) VALUES
(9, 'Quinn Villapando', 'Male', 'N350L00114', '2022-2023', 'Grade 11', 'HUMS', '09454929819', 'juan dela cruz', '91298391829', 'Section 1', 'siletnceas@gmail.com', '', '48040693', '12345', 'Student'),
(10, 'Vince', 'Female', '414360', '2022-2023', 'Grade 12', 'HUMS', '09454929819', 'Jose P Laurel', '01293091209', 'Section 1', 'asjdkjsd2@gmail.com', '', '414360', '1234', 'Student'),
(11, 'Quinn Teacher', '', '123456789', '', '', '', '11231231231', '', '', 'Section 2', 'quinn.villapando23@gmail.com', '', '123456789', '123456', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barrowedbooks`
--
ALTER TABLE `tbl_barrowedbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barrowing`
--
ALTER TABLE `tbl_barrowing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guidancerecord`
--
ALTER TABLE `tbl_guidancerecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_learning_materials`
--
ALTER TABLE `tbl_learning_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stockin`
--
ALTER TABLE `tbl_stockin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tbl_barrowedbooks`
--
ALTER TABLE `tbl_barrowedbooks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_barrowing`
--
ALTER TABLE `tbl_barrowing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_guidancerecord`
--
ALTER TABLE `tbl_guidancerecord`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_learning_materials`
--
ALTER TABLE `tbl_learning_materials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_stockin`
--
ALTER TABLE `tbl_stockin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
