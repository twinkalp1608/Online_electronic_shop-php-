-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 02:01 AM
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
-- Database: `db_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblreg`
--

CREATE TABLE `tblreg` (
  `Customer_ID` int(10) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Contactno` varchar(12) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblreg`
--

INSERT INTO `tblreg` (`Customer_ID`, `Firstname`, `Lastname`, `Email`, `Password`, `Contactno`, `Address`, `Gender`, `Pincode`, `Date`) VALUES
(2, 'lisa', 'patel', 'lisaaa567@gmail.com', '0000', '9567678767', 'baroda', 'female', '340098', '2024-02-01'),
(3, 'khushi', 'salat', 'khushi_000@gmail.com', '0000', '9456345333', 'Adajan, Surat', 'female', '359005', '2024-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fb`
--

CREATE TABLE `tbl_fb` (
  `ID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone_no` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblreg`
--
ALTER TABLE `tblreg`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `tbl_fb`
--
ALTER TABLE `tbl_fb`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblreg`
--
ALTER TABLE `tblreg`
  MODIFY `Customer_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_fb`
--
ALTER TABLE `tbl_fb`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
