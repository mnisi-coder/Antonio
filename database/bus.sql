-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 05:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `staffNo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `staffNo`, `name`, `email`, `password`, `date`) VALUES
(1, '991143', 'Jali', 'mdawe@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `stdNumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `bookingDate` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `stdNumber`, `email`, `name`, `origin`, `bookingDate`, `time`, `destination`, `reference`, `status`) VALUES
(1, '216448155', 'JAli@gmail.com', 'JAli Mnisi', 'Arcadia Campus', '2021-11-09', '09', 'Arcadia Campus', '', ''),
(2, '216448154', 'JAli@gmail.com', 'JAli Mnisi', 'Arcadia Campus', '2021-11-09', '09', 'Arcadia Campus', '2164481541636231904JAli@gmail.com', 'Boarded'),
(3, '216448154', 'JAli@gmail.com', 'JAli Mnisi', 'Soshanguve', '2021-11-10', '09', 'Arcadia Campus', '21644815416362333002021-11-06', 'Pending'),
(4, '216448154', 'JAli@gmail.com', 'JAli Mnisi', 'Arcadia Campus', '2021-11-13', '17', 'Soshanguve', '21644815416362335012021-11-06', 'CANCELLED'),
(5, '216448154', 'mnisi@gmail.com', 'jali', 'Arcadia Campus', '2021-11-17', '16', 'Soshanguve', '21644815416368378582021-11-13', 'Pending'),
(6, '216448154', 'mnisi@gmail.com', 'jalo', 'Arcadia Campus', '2021-11-18', '21', 'Soshanguve', '21644815416372654842021-11-18', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stdNumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stdNumber`, `name`, `email`, `password`, `date`) VALUES
(1, '216448154', 'jalo', 'mnisi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-13'),
(2, '216457551', 'Malondana', 'londi@gmail.com', 'b2f21823cb50a9b3b70447736f1ea616', '2021-11-15'),
(3, '123456789', 'dolo', 'jali@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
