-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 11:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_operation`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `uname`, `password`) VALUES
(15, 'anik', 'ab', 202);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `uni_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `courses_duration` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `uni_name`, `department`, `courses_duration`, `location` , `desc` ) VALUES
(2, 'American International University-Bangladesh', 'EEE', '3', 'Dhaka', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.'),
(3, 'Anwer Khan Modern University', 'BBA', '3', 'Dhaka', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.'),
(4, 'Daffodil International University', 'CSE', '4', 'Dhaka', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.'),
(7, 'Bangabandhu Sheikh Mujibur Rahman Agricultural University', 'Vatenary', '4', 'Gazipur', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.'),
(8, 'Bangladesh Agricultural University', 'Agg', '4', 'Mymensingh', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.'),
(9, 'Bangladesh University of Professionals', 'ICE', '4', 'Mirpur', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.'),
(10, 'Chittagong Medical University', 'MBBS', '4', 'Chittagong', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.'),
(11, 'Harvard University', 'CS', '4', 'Cambridge', 'Worcester Polytechnic Institute is a global leader in project-based learning and one of the nation’s first engineering and technology universities. As a research university centered on engineering, science, technology, and mathematics, WPI’s distinctive curriculum offers students opportunities to work closely with faculty and convert classroom concepts to real-world impact.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
