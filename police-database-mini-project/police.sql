-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 07:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_data`
--

CREATE TABLE `case_data` (
  `case_id` int(8) NOT NULL,
  `case_name` varchar(30) NOT NULL,
  `description` varchar(220) NOT NULL,
  `date_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_data`
--

INSERT INTO `case_data` (`case_id`, `case_name`, `description`, `date_update`) VALUES
(1, 'snach', 'chain snaching', '2021-01-21 23:01:05'),
(2, 'robbery', 'house store robbery', '2021-01-21 23:01:51'),
(3, 'murder', 'murder some people', '2021-01-21 23:03:55'),
(4, 'over speed', 'riding vehicle at high speed', '2021-01-21 23:04:52'),
(10, 'laps', 'uuyth', '2021-01-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `cmp_id` int(11) NOT NULL,
  `cmp_name` varchar(30) NOT NULL,
  `case_no` int(11) NOT NULL,
  `Description` varchar(220) NOT NULL,
  `date_reg` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `police_handle` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`cmp_id`, `cmp_name`, `case_no`, `Description`, `date_reg`, `police_handle`) VALUES
(1, 'raju', 2, 'robbery at his house last night', '2021-01-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `case_no` int(11) NOT NULL,
  `date_committed` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`c_id`, `c_name`, `case_no`, `date_committed`) VALUES
(1, 'john', 2, '2021-01-21 23:10:36'),
(2, 'jame', 3, '2021-01-21 23:10:36'),
(10, 'ijhu', 76, '2021-01-08 00:00:00'),
(11, 'suraj', 22, '2021-01-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `police_data`
--

CREATE TABLE `police_data` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `design` varchar(20) NOT NULL,
  `case_handle` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police_data`
--

INSERT INTO `police_data` (`id`, `name`, `design`, `case_handle`) VALUES
(0, 'suneesh', '4er', 56),
(89, 'eeee', '4e4', 45);

-- --------------------------------------------------------

--
-- Table structure for table `prison`
--

CREATE TABLE `prison` (
  `prisoner_id` int(11) NOT NULL,
  `prisoner_name` varchar(30) NOT NULL,
  `case_no` int(11) NOT NULL,
  `date_arrest` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_release` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_data`
--
ALTER TABLE `case_data`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`cmp_id`),
  ADD KEY `case_no` (`case_no`),
  ADD KEY `police_handle` (`police_handle`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `case_no` (`case_no`);

--
-- Indexes for table `police_data`
--
ALTER TABLE `police_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_handle` (`case_handle`);

--
-- Indexes for table `prison`
--
ALTER TABLE `prison`
  ADD PRIMARY KEY (`prisoner_id`),
  ADD KEY `case_no` (`case_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
