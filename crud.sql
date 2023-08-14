-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 02:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `id` int(50) NOT NULL,
  `comp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`id`, `comp`) VALUES
(1, 'EF'),
(2, 'FMC'),
(3, 'MSC'),
(4, 'MBI');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(50) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `uname` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `comp` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `access` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `employee_id`, `fname`, `lname`, `uname`, `password`, `comp`, `dept`, `access`) VALUES
(1, 'admin', 'admin', 'admin', 0, '1', '1', '1', 'admin'),
(2, '1111', '', '', 0, '', '', '', 'user'),
(3, 'aaa', 'aaa', '', 0, '', '', '', ''),
(4, '', '', '', 0, '', '', '', ''),
(5, '', '', '', 0, '', '', '', ''),
(6, 'AA', '', '', 0, '', '', '', ''),
(7, '', '', '', 0, '', '', '', ''),
(8, '', '', '', 0, '', '', '', ''),
(9, '', '', '', 0, '', '', '', ''),
(10, 'd', '', '', 0, '', '', '', ''),
(11, '', '', '', 0, '', '', '', ''),
(12, '111', '', '', 0, '', '', '', ''),
(13, '111', '', '', 0, '', '', '', ''),
(14, '', '', '', 0, '', '', '', ''),
(15, '', '', '', 0, '', '', '', ''),
(16, '', '', '', 0, '', '', '', ''),
(17, '', '', '', 0, '', '', '', ''),
(18, '', '', '', 0, '', '', '', ''),
(19, '', '', '', 0, '', '', '', ''),
(20, '', '', '', 0, '', '', '', ''),
(21, '1111', 'user', 'user', 0, '', '', '', ''),
(22, '', '', '', 0, '', '', '', ''),
(23, '', '', '', 0, '', '', '', ''),
(24, '', '', '', 0, '', '', '', ''),
(25, '', '', '', 0, '', '', '', ''),
(26, '', '', '', 0, '', '', '', ''),
(27, '', '', '', 0, '', '', '', ''),
(28, '', '', '', 0, '', '', '', ''),
(29, '', '', '', 0, '', '', '', ''),
(30, '', '', '', 0, '', '', '', ''),
(31, '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(50) NOT NULL,
  `comp_id` int(50) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `comp_id`, `dept`) VALUES
(1, 1, 'dept1'),
(2, 1, 'dept2'),
(3, 1, 'dept3'),
(4, 2, 'dept4'),
(5, 2, 'dept5'),
(6, 2, 'dept6'),
(7, 3, 'dept7'),
(8, 3, 'dept8'),
(9, 3, 'dept9'),
(10, 4, 'dept10'),
(11, 4, 'dept11'),
(12, 4, 'dept12');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(50) NOT NULL,
  `comp_id` int(50) NOT NULL,
  `dept_id` int(50) NOT NULL,
  `position` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `comp_id`, `dept_id`, `position`) VALUES
(1, 1, 1, 'pos1'),
(2, 1, 1, 'pos2'),
(3, 1, 1, 'pos3'),
(4, 1, 1, 'pos4'),
(5, 2, 2, 'pos5'),
(6, 2, 2, 'pos6'),
(7, 2, 2, 'pos7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
