-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 09:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `id` int(11) NOT NULL,
  `da` double(5,2) NOT NULL,
  `ta` double(5,2) NOT NULL,
  `it` double(5,2) NOT NULL,
  `department` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allowance`
--

INSERT INTO `allowance` (`id`, `da`, `ta`, `it`, `department`, `designation`) VALUES
(1, 3.00, 2.00, 3.00, 'account', 'peon'),
(2, 5.00, 2.00, 3.00, 'account', 'clerk'),
(3, 3.00, 3.00, 2.00, 'account', 'manager'),
(4, 3.00, 2.00, 2.00, 'finance', 'peon'),
(5, 5.00, 5.00, 5.00, 'finance', 'clerk'),
(6, 4.00, 2.00, 3.00, 'finance', 'manager'),
(7, 2.00, 3.00, 4.00, 'market', 'peon'),
(8, 5.00, 5.00, 5.00, 'market', 'clerk'),
(9, 2.00, 2.00, 2.00, 'market', 'manager'),
(10, 4.00, 4.00, 4.00, 'sales', 'peon'),
(11, 5.00, 3.00, 5.00, 'sales', 'clerk'),
(12, 5.00, 3.00, 5.00, 'sales', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `active`) VALUES
(1, 'account', 1),
(2, 'finance', 1),
(3, 'market', 1),
(4, 'sales', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation`, `active`) VALUES
(1, 'peon', 1),
(2, 'clerk', 1),
(3, 'manager', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_surname` varchar(50) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_department` varchar(50) NOT NULL,
  `employee_designation` varchar(50) NOT NULL,
  `salary` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_surname`, `employee_name`, `employee_department`, `employee_designation`, `salary`) VALUES
(1, 'chudasama', 'vishal', 'account', 'manager', 64165467.00),
(2, 'hadani', 'vishnu', 'finance', 'peon', 9464646.00),
(3, 'meghani', 'hitarth', 'sales', 'clerk', 546742.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowance`
--
ALTER TABLE `allowance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
