-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2023 at 04:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campuscompass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `uname`, `password`) VALUES
(15, 'anik', 'ab', 202),
(23, 'UU', 'aa', 111);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `uni_name` varchar(256) NOT NULL,
  `department` text NOT NULL,
  `courses_duration` int(11) NOT NULL,
  `location` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `uni_name`, `department`, `courses_duration`, `location`) VALUES
(1, 'Daffodil University', 'CSE', 3, 'Dhaka'),
(2, 'North South University', 'EEE', 4, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `unis`
--

CREATE TABLE `unis` (
  `id` int(11) NOT NULL,
  `uniName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `type` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `tuition_fee` int(11) NOT NULL,
  `credit_system` text NOT NULL,
  `entrance_system` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unis`
--

INSERT INTO `unis` (`id`, `uniName`, `location`, `semester`, `type`, `description`, `tuition_fee`, `credit_system`, `entrance_system`) VALUES
(1, 'Dhaka University', 'Dhaka, Bangladesh', 0, 'Public', 'Very Popular', 0, '', ''),
(2, 'Daffodil International University', 'Savar, Dhaka', 0, 'Private', 'Popular private univerity', 0, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
