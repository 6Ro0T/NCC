-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 07:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(93, 'varsha@ncc.com', 'varsha', '102', 'Present', '2021-09-02', 'navy'),
(100, 'abc@ncc.com', 'abc', '12345', 'Present', '2021-09-03', 'navy'),
(101, 'nandhana12@gmail.com', 'Nandhana', '10281', 'Absent', '2021-09-03', 'navy'),
(102, 'nethravthi@gmail.com', 'Nethravathi S', '10282', 'Present', '2021-09-03', 'navy'),
(103, 'darshan872@gmail.com', 'Darshan', '10283', 'Present', '2021-09-03', 'navy'),
(104, 'deepthi76@gmail.com', 'Deepthi G', '10291', 'Present', '2021-09-03', 'navy'),
(105, 'dhruva@gmail.com', 'Dhruva Kumar', '10292', 'Absent', '2021-09-03', 'navy'),
(106, 'girish45@gmail.com', 'Girish', '10293', 'Absent', '2021-09-03', 'navy'),
(107, 'keerthi89@gmail.com', 'Keerthi G', '10201', 'Present', '2021-09-03', 'navy'),
(108, 'supriya@gmail.com', 'Supriya', '10202', 'Absent', '2021-09-03', 'navy'),
(109, 'aditya34@gmail.com', 'Aditya J', '10203', 'Present', '2021-09-03', 'navy'),
(110, 'kumar56@gmail.com', 'Kumar T', '10204', 'Present', '2021-09-03', 'navy'),
(111, 'test@mail.com', 'test user', '102', 'Present', '2021-09-04', 'army'),
(112, 'shilpa45@gmail.com', 'Shilpa', '10281', 'Present', '2021-09-04', 'army'),
(113, 'rutu78@gmail.com', 'Rutu', '10282', 'Present', '2021-09-04', 'army'),
(114, 'druvant@gmail.com', 'Druvant', '10283', 'Present', '2021-09-04', 'army'),
(115, 'chethan@gmail.com', 'Chethan', '10291', 'Present', '2021-09-04', 'army'),
(116, 'chitra34@gmail.com', 'Chitra K', '10292', 'Present', '2021-09-04', 'army'),
(117, 'keerthan@gmail.com', 'Keerthan', '10294', 'Absent', '2021-09-04', 'army'),
(118, 'manjesh67@gmail.com', 'Manjesh', '10293', 'Absent', '2021-09-04', 'army'),
(119, 'lavanya09@gmail.com', 'Lavanya L', '10201', 'Present', '2021-09-04', 'army'),
(120, 'surya32@gmail.com', 'Surya', '10202', 'Present', '2021-09-04', 'army'),
(121, 'priyajagdesh@gmail.com', 'Priya B ', '10203', 'Present', '2021-09-04', 'army'),
(122, 'abc@ncc.com', 'abc', '12345', 'Present', '2021-09-04', 'navy'),
(123, 'nandhana12@gmail.com', 'Nandhana', '10281', 'Present', '2021-09-04', 'navy'),
(124, 'nethravthi@gmail.com', 'Nethravathi S', '10282', 'Absent', '2021-09-04', 'navy'),
(125, 'darshan872@gmail.com', 'Darshan', '10283', 'Present', '2021-09-04', 'navy'),
(126, 'deepthi76@gmail.com', 'Deepthi G', '10291', 'Present', '2021-09-04', 'navy'),
(127, 'dhruva@gmail.com', 'Dhruva Kumar', '10292', 'Present', '2021-09-04', 'navy'),
(128, 'girish45@gmail.com', 'Girish', '10293', 'Present', '2021-09-04', 'navy'),
(129, 'keerthi89@gmail.com', 'Keerthi G', '10201', 'Absent', '2021-09-04', 'navy'),
(130, 'supriya@gmail.com', 'Supriya', '10202', 'Present', '2021-09-04', 'navy'),
(131, 'aditya34@gmail.com', 'Aditya J', '10203', 'Present', '2021-09-04', 'navy'),
(132, 'kumar56@gmail.com', 'Kumar T', '10204', 'Present', '2021-09-04', 'navy'),
(133, 'test@ncc.com', 'test user', '102', 'Present', '2021-09-04', 'airforce'),
(134, 'xyz@gmail.com', 'abc', '12345', 'Absent', '2021-09-04', 'airforce'),
(135, 'teju12@gmail.com', 'Tejas', '30281', 'Present', '2021-09-04', 'airforce'),
(136, 'mailtovarsha@gmail.com', 'Varsha M', '30282', 'Present', '2021-09-04', 'airforce'),
(137, 'ranju56@gmail.com', 'Ranjitha G', '30283', 'Present', '2021-09-04', 'airforce'),
(138, 'rohankumar43@gmail.com', 'Rohan Kumar', '30291', 'Absent', '2021-09-04', 'airforce'),
(139, 'krishnak@gmail.com', 'Krishna P', '30292', 'Present', '2021-09-04', 'airforce'),
(140, 'preethih67@gmail.com', 'Preethi H', '30293', 'Present', '2021-09-04', 'airforce'),
(141, 'sujays@gmail.com', 'Sujay', '30201', 'Present', '2021-09-04', 'airforce'),
(142, 'shrija90@gmail.com', 'Shrija', '30202', 'Absent', '2021-09-04', 'airforce'),
(143, 'soumya09@gmail.com', 'Soumya K', '30203', 'Present', '2021-09-04', 'airforce'),
(144, 'harish76@gmail.com', 'Harish H', '30204', 'Absent', '2021-09-04', 'airforce');

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
(43, 'Embed Iframe in PHP', '1M17S', 'Ranjith', '2cVu7KZxW3c', '8345-4469-7143-airforc.jpeg', 'asdfghj', 'airforce'),
(46, 'New year Mix', '1M17S', 'Ranjith ccc', '2cVu7KZxW3c', '2854-4203-airforc.jpeg', 'z-xxxxxxxxxxxx', 'navy'),
(47, 'Naval Orientation', '19M32S', 'Admin', 'D28rKKcaefk', '9218-classses-navy.jpg', 'NCC - NAVAL ORIENTATION for B & C Certificate exam\r\n', 'navy'),
(48, 'Seamanship and Navigation', '5M59S', 'Admin', '8w8Ryy85wmk', '2951-classses-navy.jpg', 'What is seamanship and navigation?\r\nLearn here\r\n', 'navy'),
(49, 'Naval Communication', '3M7S', 'Admin', 'SulHXA4JbE8', '9647-classses-navy.jpg', 'Flag semaphore\r\n', 'navy'),
(50, 'Firefighting and Fire safety', '27M8S', 'Archana Patel', 'QeLqppM9oA4', '7581-classses-navy.jpg', 'Fire Fighting and fire safety (NCC lecturer) by Professor Archana Patel\r\n', 'navy'),
(51, 'NCC General(Duties of NCC Cadets)', '7M42S', 'Admin', 'tB_v2iGSNw8', '2108-classses-army.jpg', '', 'army'),
(52, 'National Integration', '17M4S', 'Admin', 'ZBkV0GVMyf0', '6717-classses-army.jpg', '', 'army'),
(53, 'Health and Hygiene', '7M38S', 'Admin', 'QiOC_JWNzkQ', '1990-classses-army.jpg', '', 'army'),
(54, 'Personality Development and Leadership', '44M52S', 'Admin', 'NYOn6SVt5-E', '9221-classses-army.jpg', 'All about Personality Development in NCC', 'army'),
(55, 'Disaster Management', '16M27S', 'Admin', 'FZf6EOXirYM', '8932-classses-army.jpg', '', 'army'),
(56, 'Armed Forces', '26M34S', 'Admin', 'axbNS9sH19o', '5188-classses-army.jpg', 'General about Armed Forces | Specialized subject in NCC | Army Wing ', 'army'),
(57, 'Map Reading', '46M50S', 'Admin', 'QWTFKMukwFc', '7226-classses-army.jpg', '', 'army'),
(58, 'Field Craft and Battle Craft', '26M30S', 'Admin', 'Ypx7HlOrabU', '1064-classses-army.jpg', 'All about Field Craft Battle Craft in NCC', 'army'),
(59, 'Military History', '12M29S', 'Admin', 'fmTfDBFW7xM', '2362-classses-army.jpg', 'Military History in NCC', 'army'),
(61, 'Communication', '35M16S', 'Admin', 'gitcSa0DWqw', '9359-classses-army.jpg', '', 'army'),
(62, 'NCC General(Duties of NCC Cadets)', '7M42S', 'Admin', 'tB_v2iGSNw8', '7787-classses-navy.jpg', '', 'navy'),
(63, 'NCC General(Duties of NCC Cadets)', '7M42S', 'Admin', 'tB_v2iGSNw8', '8281-classses-airforce.jpg', '', 'airforce'),
(64, 'National Integration', '17M4S', 'Admin', 'ZBkV0GVMyf0', '4692-classses-navy.jpg', '', 'navy'),
(65, 'National Integration', '17M4S', 'Admin', 'ZBkV0GVMyf0', '1815-classses-airforce.jpg', '', 'airforce'),
(66, 'Health and Hygiene', '7M38S', 'Admin', 'QiOC_JWNzkQ', '6752-classses-airforce.jpg', '', 'navy'),
(67, 'Health and Hygiene', '7M38S', 'Admin', 'QiOC_JWNzkQ', '7648-classses-airforce.jpg', '', 'airforce'),
(68, 'Personality Development and Leadership', '44M52S', 'Admin', 'NYOn6SVt5-E', '7607-classses-navy.jpg', '', 'navy'),
(69, 'Personality Development and Leadership', '44M52S', 'Admin', 'NYOn6SVt5-E', '1439-classses-airforce.jpg', '', 'airforce'),
(70, 'Disaster Management', '16M27S', 'Admin', 'FZf6EOXirYM', '8066-classses-airforce.jpg', '', 'airforce'),
(71, 'Disaster Management', '16M27S', 'Admin', 'FZf6EOXirYM', '6805-classses-navy.jpg', '', 'navy'),
(72, 'General Service Knowledge', '22M11S', 'Admin', 'xRPP_c9M8xQ', '3666-classses-airforce.jpg', '', 'airforce'),
(73, 'General Service Knowledge', '22M11S', 'Admin', 'xRPP_c9M8xQ', '6315-classses-airforce.jpg', '', 'airforce'),
(74, 'Principles of Flights', '18M38S', 'Admin', 'SAc9aYLiS3E', '1936-classses-airforce.jpg', '', 'airforce'),
(75, 'Air Campaign', '10M7S', 'Admin', 'cl4wcAw5yQ0', '5109-classses-airforce.jpg', '', 'airforce'),
(76, 'Airmanship', '20M56S', 'Admin', '1ZHnScnHxDE', '3205-classses-airforce.jpg', '', 'airforce'),
(77, 'Aero Modelling', '9M39S', 'Admin', 'I_pDh0zj_4w', '6524-classses-airforce.jpg', '', 'airforce');

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
(71, 102, 'test user', 'Flight cadet', 2, '2021-09-09', 8254564984, 'test@ncc.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'airforce', 'student'),
(78, 10281, 'Shilpa', 'Under Officer', 3, '2001-02-15', 7890654789, 'shilpa45@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(79, 10282, 'Rutu', 'CQMS', 3, '2002-05-17', 6578902345, 'rutu78@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(80, 10283, 'Druvant', 'Sergent', 3, '2002-10-10', 8790654732, 'druvant@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(81, 10291, 'Chethan', 'Corporal', 2, '2002-10-23', 7890564321, 'chethan@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(82, 10292, 'Chitra K', 'Lance Corporal', 2, '2003-04-09', 9876543210, 'chitra34@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(83, 10294, 'Keerthan', 'Lance Corporal', 2, '2002-09-21', 8431170987, 'keerthan@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(84, 10293, 'Manjesh', 'Cadet', 2, '2003-04-08', 7890678900, 'manjesh67@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(85, 10201, 'Lavanya L', 'Cadet', 1, '2003-09-16', 9807689056, 'lavanya09@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(86, 10202, 'Surya', 'Cadet', 1, '2004-02-09', 7890678954, 'surya32@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'army', 'student'),
(87, 10203, 'Priya B ', 'Cadet', 1, '2004-12-30', 8907645890, 'priyajagdesh@gmail.com', 'de758b92c1b76c46adff0d6c3ce349fa24d3f5de8bdb070d59365a05b9d40222', 'army', 'student'),
(88, 10281, 'Nandhana', 'Cadet Captain', 3, '2002-07-15', 7890654345, 'nandhana12@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(89, 10282, 'Nethravathi S', 'Petty Officer Cadet', 3, '2002-10-21', 9876543223, 'nethravthi@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(90, 10283, 'Darshan', 'Leading Cadet', 3, '2000-02-15', 9874567320, 'darshan872@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(91, 10291, 'Deepthi G', 'Cadet', 2, '2001-03-17', 7865543210, 'deepthi76@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(92, 10292, 'Dhruva Kumar', 'Leading Cadet', 2, '2003-02-14', 8776543219, 'dhruva@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(93, 10293, 'Girish', 'Cadet', 2, '2003-02-07', 9876547890, 'girish45@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(94, 10201, 'Keerthi G', 'Cadet', 1, '2004-12-09', 7689045320, 'keerthi89@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(95, 10202, 'Supriya', 'Cadet', 1, '2003-02-13', 8765490234, 'supriya@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(96, 10203, 'Aditya J', 'Cadet', 1, '2002-10-09', 7890564327, 'aditya34@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(97, 10204, 'Kumar T', 'Cadet', 1, '2002-10-09', 6367899045, 'kumar56@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'navy', 'student'),
(98, 30281, 'Tejas', 'Cadet Under Officer', 3, '2002-03-25', 7890675453, 'teju12@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(99, 30282, 'Varsha M', 'Cadet Warrant Officer', 3, '2000-02-17', 7890675453, 'mailtovarsha@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(100, 30283, 'Ranjitha G', 'Cadet Sergent', 3, '2002-09-13', 7890654328, 'ranju56@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(101, 30291, 'Rohan Kumar', 'Cadet Corporal', 2, '2002-08-24', 6789054321, 'rohankumar43@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(102, 30292, 'Krishna P', 'Leading Flight Cadet', 2, '2003-10-16', 8907675480, 'krishnak@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(103, 30293, 'Preethi H', 'Flight Cadet', 2, '2003-02-18', 7890654789, 'preethih67@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(104, 30201, 'Sujay', 'Flight Cadet', 1, '2004-05-21', 9068765789, 'sujays@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(105, 30202, 'Shrija', 'Flight Cadet', 1, '2004-03-31', 7890971234, 'shrija90@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(106, 30203, 'Soumya K', 'Flight Cadet', 1, '2003-10-09', 9876543210, 'soumya09@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student'),
(107, 30204, 'Harish H', 'Flight Cadet', 1, '2004-12-13', 7896548923, 'harish76@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'airforce', 'student');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
