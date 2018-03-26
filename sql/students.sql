-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 06:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `gpa`
--

CREATE TABLE `gpa` (
  `id` int(11) NOT NULL,
  `roll` int(6) NOT NULL,
  `cgpa` float NOT NULL,
  `grade` varchar(3) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `roll` int(6) NOT NULL,
  `semister` varchar(5) NOT NULL,
  `sub1` int(3) NOT NULL,
  `sub2` int(3) NOT NULL,
  `sub3` int(3) NOT NULL,
  `sub4` int(3) NOT NULL,
  `sub5` int(3) NOT NULL,
  `sub6` int(3) NOT NULL,
  `gpa` float NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `roll`, `semister`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `gpa`, `log`) VALUES
(38, 836514, '5th', 0, 0, 0, 0, 0, 0, 5, '2018-03-12 07:37:27'),
(55, 836515, '', 0, 0, 0, 0, 0, 0, 5, '2018-03-12 11:10:09'),
(64, 45, '', 0, 0, 0, 0, 0, 0, 4.66667, '2018-03-12 15:57:31'),
(67, 100, '8th', 80, 80, 80, 80, 80, 80, 3.45, '2018-03-12 16:24:57'),
(68, 100, '7th', 80, 80, 80, 80, 80, 80, 5, '2018-03-12 16:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `st_information`
--

CREATE TABLE `st_information` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `roll` int(6) NOT NULL,
  `reg` int(6) NOT NULL,
  `semister` varchar(3) NOT NULL,
  `session` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `blood` varchar(4) NOT NULL,
  `photo` text NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_information`
--

INSERT INTO `st_information` (`id`, `fname`, `lname`, `department`, `roll`, `reg`, `semister`, `session`, `email`, `gender`, `blood`, `photo`, `log`) VALUES
(31, 'Mahadeb Kumar', 'Das', 'Computer', 836514, 742998, '8th', '2014-15', 'mahadebdas836514@gmail.com', 'Male', 'B+', '', '2018-03-12 06:36:46'),
(32, 'Sirajul', 'Islam', 'Computer', 836514, 742586, '7th', '2014-15', 'ma@gmail.com', 'Male', 'B+', '', '2018-03-12 06:48:36'),
(36, 'Mahadeb Kumar', 'Das', 'Computer', 836514, 742998, '6th', '2014-15', 'mahadebdas836514@gmail.com', 'Male', 'B+', 'IMG_20180311_120425.jpg', '2018-03-12 06:59:31'),
(40, 'Mahadeb Kumar', 'Das', 'Computer', 836515, 742998, '5th', '2014-15', 'mahadebdas836514@gmail.com', 'Male', 'B+', '20180212_152443.jpg', '2018-03-12 07:04:38'),
(42, 'Mahadeb', 'das', 'Computer', 83657, 742998, '8th', '2014-15', 'm@gmail.com', 'Male', '', 'M .k .das.jpg', '2018-03-12 10:09:51'),
(44, '', '', '', 45542, 0, '', '', '', 'Female', '', '', '2018-03-12 15:59:25'),
(45, 'Sirajul', 'Islam', 'Civil', 100, 44, '8th', '2014-15', 'h@gmail.com', 'Male', 'B+', '20180212_152333.jpg', '2018-03-12 16:16:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gpa`
--
ALTER TABLE `gpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_information`
--
ALTER TABLE `st_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gpa`
--
ALTER TABLE `gpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `st_information`
--
ALTER TABLE `st_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
