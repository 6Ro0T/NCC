-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 09:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `division`, `role`) VALUES
(1, 'navy@ncc.com', '123456', 'army', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `roll_number`, `status`, `date`, `division`) VALUES
(49, 'thrupthi', '103', 'Absent', '2021-07-24', 'army'),
(50, 'Ranjith', '104', 'Absent', '2021-07-24', 'army'),
(51, 'thrupthi', '103', 'Present', '2021-08-07', 'army'),
(52, 'Ranjith', '104', 'Present', '2021-08-07', 'army'),
(53, 'thrupthi', '103', 'Present', '2021-08-10', 'army'),
(54, 'Ranjith', '104', 'Absent', '2021-08-10', 'army'),
(55, 'Kishan', '120', 'Present', '2021-08-10', 'army'),
(56, '10281', '0', 'Absent', '2021-08-10', 'army'),
(57, 'Chandan Kumar', '102834', 'Present', '2021-08-10', 'army'),
(58, 'Pooja', '18205', 'Absent', '2021-08-10', 'army');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `duration` varchar(25) NOT NULL,
  `professor` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `duration`, `professor`, `url`, `filename`, `description`, `division`) VALUES
(32, 'Best Songs', '52M31S', 'Theerthaaaa', 'HPkydJOXXNs', '4100-airforc.jpeg', 'qqqqqqqqqqq', 'army'),
(33, 'Dua lipa', '3M45S', 'chandan', 'k2qgadSvNyU', '9739-airforc.jpeg', 'aaaaaaaaaaaaaa', 'army'),
(34, 'Ed sheeran', '', 'kishan', 'kk42xRof9cY', '7390-airforc.jpeg', 'vvvvvvvvvv', 'army'),
(35, 'Arijit Songs', '55M28S', 'pooja', '5mFTXbZzOAE', '4203-airforc.jpeg', 'dddddd', 'army'),
(36, 'Party Play', '52M31S', 'chandan', 'HPkydJOXXNs', '6534-airforc.jpeg', 'aaaaaaaa', 'army'),
(37, 'New year Mix', '', 'kishan', 'WdBldz3YL', '5732-airforc.jpeg', 'aaaaa', 'army');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `roll_number` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Cadet_rank` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `division` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roll_number`, `name`, `Cadet_rank`, `year`, `dob`, `phone`, `email`, `password`, `division`, `role`) VALUES
(64, 102834, 'Chandan Kumar', 'Flight cad', 1, '1997-01-31', 8105897579, 'chandangowda@mail.com', '123456', 'army', 'student'),
(65, 18203, 'Pooja Gowda', 'Army Cadet', 3, '1997-12-15', 9876543111, 'poojagowda@mail.com', '123456', 'army', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
