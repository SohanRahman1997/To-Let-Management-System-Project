-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 07:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `card` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `cvc` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `card`, `date`, `cvc`, `name`, `amount`) VALUES
(4, '1111', '08/23', '698d51a19d8a121ce581499d7b701668', 'Muhammad Sohanur Rahman Ovi', 0),
(5, '2222', '08/24', 'bcbe3365e6ac95ea2c0343a2395834dd', 'Najmoon Omrin', 0),
(6, '1211', '05/27', 'bcbe3365e6ac95ea2c0343a2395834dd', 'Shihab Hasan', 0),
(7, '1111', '08/24', '3338dbd33ce4efccfd5972a002912915', 'Omrin', 0),
(8, '1211', '08/27', '698d51a19d8a121ce581499d7b701668', 'Ayshi Zaman', 3000),
(9, '1111', '09/23', '4c56ff4ce4aaf9573aa5dff913df997a', 'Sakib', 1000),
(10, '1212 221 2223 1123', '08/21', '121', 'Rasid Karim', 5000),
(11, '1111 1111 1111 1111', '08/24', '121', 'Rahat', 2000),
(12, '1111 1111 1111 1111', '08/27', '121', 'Zahid Hossain', 1000),
(13, '1212 1212 1212 1212', '08/27', '121', 'Muhammad Sohanur Rahman Ovi', 1212),
(14, '1111 2222 1111 2222', '09/23', '222', 'Rofiq', 2000),
(15, '1111 1111 1111 1111 ', '08/23', '121', 'Jamil Hossain', 3000),
(16, '16521621454235612', '23232', '1232', 'Jamil Hossain', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
