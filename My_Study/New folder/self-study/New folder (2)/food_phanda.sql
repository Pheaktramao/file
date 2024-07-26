-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 06:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_phanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `monthly_data`
--

CREATE TABLE `monthly_data` (
  `id` int(11) NOT NULL,
  `male` int(11) DEFAULT NULL,
  `female` int(11) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monthly_data`
--

INSERT INTO `monthly_data` (`id`, `male`, `female`, `month`) VALUES
(1, 20, 30, 'Jan'),
(2, 25, 35, 'Feb'),
(3, 22, 28, 'Mar'),
(4, 20, 32, 'Apr'),
(5, 23, 37, 'May'),
(6, 28, 40, 'Jun'),
(7, 30, 45, 'Jul'),
(8, 26, 39, 'Aug'),
(9, 21, 33, 'Sep'),
(10, 17, 28, 'Oct'),
(11, 15, 25, 'Nov'),
(12, 80, 90, 'Dec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monthly_data`
--
ALTER TABLE `monthly_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monthly_data`
--
ALTER TABLE `monthly_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
