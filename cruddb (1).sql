-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `ID` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`ID`, `name`, `email`) VALUES
(4, 'Priyanka Mulik', 'pm123@gmail.com'),
(5, 'Sonali Patil', 'sonu123@gmail.com'),
(6, 'Mansi Panchal', 'mansi12@gmail.com'),
(7, 'Sonakshi patil', 'sd34@gmail.com'),
(8, 'Manisha Kale', 'km5436@gmail.com'),
(9, 'Manisha Kale', 'km5436@gmail.com'),
(10, 'Neha Mulik', 'nm245@gmail.com'),
(11, 'Sai Patil', 'ssp23@gmail.com'),
(12, 'Rupali Desai', 'pr987@gmail.com'),
(13, 'Prachi Roge', 'sd34@gmail.com'),
(14, 'Suchita Savant', 'ss432@gmail.com'),
(19, 'Sneha patil', 'sp98545@gmail.com'),
(20, 'Shrya Rote', 'Sr4132@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
