-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 08:48 AM
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
-- Database: `jorim`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `cnum` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pass` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `fname`, `lname`, `gender`, `cnum`, `address`, `email`, `pass`) VALUES
(2, 'Tan', 'S', 'Female', '0', 'Chennai', 'tiask369@gmail.com', '123'),
(3, 'Vignesh', 'C K', 'Male', '0', 'Chennai', 'vigneshck2003@gmail.com', '123'),
(4, 'Arun', 'Mozhi', 'Male', '0', 'Chennai', 'amozhi@gmail.com', '123'),
(5, 'Vinayak', 'E', 'Male', '0', 'Chennai', 'vinu2003@gmail.com', '123'),
(6, 'Shriram', 'R', 'Male', '0', 'Chennai', 'shriramr@gmail.com', '123'),
(7, 'Ribhu', 'M', 'Male', '0', 'Mumbai', 'ribhu456@gmail.com', '123'),
(8, 'Adhi', 'S', 'Male', '0', 'Chennai', 'adhi2023@gmail.com', '123'),
(9, 'Jawan', 'Senthil', 'Male', '0', 'Chennai', 'tanujavaan2020@gmail.com', '123'),
(10, 'Geetha', 'Senthil', 'Female', '0', 'Flat.No.415, Siddharth Natura Apartments, No.40, Vadakkupatu Main Road, BHEL Nagar, Medavakkam', 'geethuja369@gmail.com', '369963'),
(11, 'Naveen kumar', 'Gowda', 'Male', '0', 'No: 3 Koramangla, Bengaluru, karnataka', 'yashboss159@gmail.com', 'Radhika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
