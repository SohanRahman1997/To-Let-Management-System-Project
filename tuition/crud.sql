-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 07:40 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `search` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `search`, `details`) VALUES
(16, 'Muhammad Sohanur Rahman Ovi', 'Azimpur, Dhaka', 'tuition', 'Class: 6-10 Subject: Maths/ ICT/ English/Science Salary: Negotiable Tuition Area: Kolabagan, Shukrabadh, Dhanmondi Phone No: 01912121212 University: Daffodil International University Dept.: Software Engineering.'),
(17, 'Ayshi Zaman', 'Shukrabadh, Dhanmondi', 'tuition', 'Class: 9-10 Subject: Maths/ ICT/ English/Science Salary: Negotiable Tuition Area: Kolabagan, Shukrabadh, Dhanmondi Phone No: 01912121212 University: Daffodil International University Dept.: Software Engineering.'),
(18, 'Omrin', 'Mirpur, Dhaka', 'tuition', 'Class: 8-10 Subject: Maths/ ICT/ English/Science Salary: Negotiable Tuition Area: Mirpur12, Mirpur14, ECB Phone No: 01812121212 University: Daffodil International University Dept.: Software Engineering.'),
(19, 'Jamil Hossain', 'Shukrabadh, Dhanmondi', 'tuition', 'Class: 8 Subject: Maths,ICT & English Salary: 3500 Phone No: 01812312331'),
(20, 'Jahid hasan', 'Shukrabadh, Dhanmondi', 'tuition', 'Class: 8 Subject: Maths & English Salary: 2500 Phone No: 01812121212'),
(21, 'Sakib Hasan', 'Banani, Dhaka', 'tutor', 'Class: 9\r\nSubject: Maths & English\r\nSalary: 3000\r\nPhone No: 01912456876'),
(22, 'Sakib Hasan', 'Banani, Dhaka', 'tutor', 'Class: 9\r\nSubject: Maths & English\r\nSalary: 3000\r\nPhone No: 01912456876'),
(25, 'Muhammad Sohanur Rahman Ovi', 'Shukrabadh, Dhanmondi', 'tuition', '1542y24w3221122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
