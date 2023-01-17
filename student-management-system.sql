-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `role` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `dateRegister` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fname`, `lname`, `gender`, `role`, `email`, `password`, `photo`, `dateRegister`) VALUES
(17, 'Ronel', 'Florida', 'Male', 'Admin', 'ronel@gmail.com', 'dc21b333ef1ec56197ebb30c1d92803d', 'policeman-(1).png', '2022-12-19'),
(18, 'Meghan', 'Little', 'Female', 'Teacher', 'meghan.little@example.com', '78bb2c24a3316d90675787767ac3b371', 'teacher.png', '2022-12-19'),
(24, 'Noah', 'Hall', 'Male', 'Admin', 'noah.hall@example.com', '1fe743d4fa890450aa44c2e66dcdb03d', 'policeman.png', '2022-12-21'),
(25, 'Irma', 'Cooper', 'Female', 'Teacher', 'irma.cooper@example.com', '07adfb36242b94870c554d245d2885b9', 'seaman.png', '2022-12-21'),
(26, 'Teresa', 'Johnson', 'Male', 'Teacher', 'teresa.johnson@example.com', '03b68003984ad2837094261dd8563fe2', 'default.png', '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `abbreviation` varchar(255) NOT NULL,
  `dateAdded` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `civilStatus` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `stateProvince` varchar(200) NOT NULL,
  `zipCode` int(10) NOT NULL,
  `dateRegister` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `student_id`, `fname`, `mname`, `lname`, `gender`, `dateOfBirth`, `civilStatus`, `nationality`, `photo`, `course`, `phoneNumber`, `email`, `street`, `city`, `stateProvince`, `zipCode`, `dateRegister`) VALUES
(14, 'UA-45', 'Barry', 'Adams', 'Karnes', 'Male', '1973-09-26', 'Single', 'US(United States)', 'policeman.png', 'BSIT', '09454565676', 'katrina1994@yahoo.com', '4994 Ashmor Drive', 'Puposky', 'Minnesota(MN)', 56667, '2023-01-11'),
(15, 'UA-34', 'Randall', 'Ruiz', 'Moskowitz', 'Male', '1997-04-23', 'Single', 'US(United States)', 'seaman.png', 'BSIT', '09568763565', 'jared.brekk3@yahoo.com', '586 Norma Avenue', 'Houston', 'Texas(TX)', 77006, '2023-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
