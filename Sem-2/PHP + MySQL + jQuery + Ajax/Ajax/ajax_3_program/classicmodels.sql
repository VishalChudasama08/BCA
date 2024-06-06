-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 05:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classicmodels`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `cust_code` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`cust_code`, `cust_name`, `cust_city`) VALUES
(201, 'John Smith', 'New York'),
(205, 'Emma Watson', 'London'),
(208, 'Robert Johnson', 'Paris'),
(202, 'Mary Lee', 'Tokyo'),
(203, 'David Lee', 'Los Angeles'),
(204, 'Karen Chen', 'Sydney'),
(206, 'Alex Wong', 'Hong Kong'),
(207, 'Olivia Kim', 'Seoul'),
(209, 'Daniel Chen', 'Shanghai'),
(210, 'Julia Park', 'Toronto'),
(211, 'Sarah Lee', 'Vancouver'),
(212, 'Michael Kim', 'San Francisco'),
(213, 'Jennifer Lee', 'Boston'),
(214, 'Steven Chen', 'Houston'),
(215, 'Samantha Lee', 'Chicago'),
(216, 'Kevin Park', 'Washington DC'),
(217, 'Hannah Lee', 'Seattle'),
(218, 'Grace Kim', 'Miami'),
(219, 'Ethan Chen', 'Berlin'),
(220, 'Sophia Lee', 'Dubai'),
(221, 'Joseph Kim', 'Mumbai'),
(222, 'Isabella Lee', 'Beijing'),
(223, 'Jason Chen', 'Moscow'),
(224, 'Ava Kim', 'Rio de Janeiro'),
(225, 'Andrew Lee', 'Bangkok');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
