-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 09:23 AM
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
(1, 'army@ncc.com', '123456', 'army', 'admin'),
(2, 'navy@ncc.com', '123456', 'navy', 'admin'),
(3, 'airforce@ncc.com', '123456', 'airforce', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll_number` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `email`, `name`, `roll_number`, `status`, `date`, `division`) VALUES
(88, 'poojagowda@mail.com', 'Pooja Gowda', '18203', 'Present', '2021-09-02', 'army'),
(89, 'pig@mail.com', 'P1GP3N_T3ST3R', '102', 'Present', '2021-09-02', 'army'),
(90, 'ranjith@mail.com', 'Ranjith', '102', 'Present', '2021-09-02', 'army'),
(91, 'test@mail.com', 'test user', '102', 'Present', '2021-09-02', 'army'),
(92, 'test@ncc.com', 'test user', '102', 'Absent', '2021-09-02', 'airforce'),
(93, 'varsha@ncc.com', 'varsha', '102', 'Present', '2021-09-02', 'navy'),
(94, 'varsha@ncc.com', 'varsha', '102', 'Present', '2021-09-03', 'navy'),
(95, 'test@ncc.com', 'test user', '102', 'Present', '2021-09-03', 'airforce'),
(96, 'poojagowda@mail.com', 'Pooja Gowda', '18203', 'Absent', '2021-09-03', 'army'),
(97, 'pig@mail.com', 'P1GP3N_T3ST3R', '102', 'Absent', '2021-09-03', 'army'),
(98, 'ranjith@mail.com', 'Ranjith', '102', 'Absent', '2021-09-03', 'army'),
(99, 'test@mail.com', 'test user', '102', 'Absent', '2021-09-03', 'army');

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
(41, 'Embed Iframe in PHP', '1M17S', 'kishan', '2cVu7KZxW3c', '7810-4203-airforc.jpeg', 'aaaaaaaaaaaa', 'army'),
(42, 'Embed Iframe in PHP', '1M17S', 'kishan', '2cVu7KZxW3c', '2646-4469-7143-airforc.jpeg', 'aaaaaaaaa', 'army'),
(43, 'Embed Iframe in PHP', '1M17S', 'Ranjith', '2cVu7KZxW3c', '8345-4469-7143-airforc.jpeg', 'asdfghj', 'airforce'),
(46, 'New year Mix', '1M17S', 'Ranjith ccc', '2cVu7KZxW3c', '2854-4203-airforc.jpeg', 'z-xxxxxxxxxxxx', 'navy');

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
  `password` varchar(255) NOT NULL,
  `division` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roll_number`, `name`, `Cadet_rank`, `year`, `dob`, `phone`, `email`, `password`, `division`, `role`) VALUES
(65, 18203, 'Pooja Gowda', 'Army Cadet', 3, '1997-12-15', 9876543111, 'poojagowda@mail.com', '123456', 'army', 'student'),
(67, 102, 'P1GP3N_T3ST3R', 'Flight cad', 2, '2021-08-04', 1234567890, 'pig@mail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(68, 102, 'Ranjith', 'Army Cadet', 2, '2021-01-04', 1234567890, 'ranjith@mail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'army', 'student'),
(69, 102, 'test user', 'Flight cadet', 1, '2021-07-25', 1234567890, 'test@mail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'army', 'student'),
(71, 102, 'test user', 'Flight cadet', 2, '2021-09-09', 1234567123, 'test@ncc.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(74, 102, 'varsha', 'navy cadet', 1, '2021-08-31', 9876543210, 'varsha@ncc.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
