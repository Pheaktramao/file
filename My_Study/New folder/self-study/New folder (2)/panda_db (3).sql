-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 05:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `add_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`add_id`, `name`, `price`) VALUES
(8, 'Egg', '10'),
(9, 'Noodle', '12'),
(6, 'Egg', '10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` bigint(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `description`, `name`) VALUES
(1, 0, 'Steak'),
(4, 0, 'Fries'),
(5, 0, 'Coffee'),
(6, 0, 'Steak ColaCan');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `content` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `deliver_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliverers`
--

CREATE TABLE `deliverers` (
  `deliver_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `Food_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `Food_id` int(10) UNSIGNED NOT NULL,
  `Foodname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`Food_id`, `Foodname`, `description`, `price`, `category_id`) VALUES
(1, 'checken', '', '200', 6),
(2, 'Soup', '', '200', 6),
(3, 'Cheese corn Roll', '', '200', 1),
(4, 'Cheese corn Roll', '', '200', 1),
(5, 'Cheese corn Roll', '', '200', 3),
(6, 'Egg', '', '10', 4),
(7, 'Noodle', '', '12', 4),
(8, 'Egg', '', '10', 4),
(9, 'Noodle', '', '12', 4),
(10, 'Checken', '', '10', 6),
(11, 'Sandwich', '', '10', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notificatins`
--

CREATE TABLE `notificatins` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `Food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `checkorder` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `deliver_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `time_open` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_close` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `address`, `time_open`, `description`, `user_id`, `time_close`) VALUES
(1, 'Fafa', 'Cambodia, Phnom Penh', '8:40', 'My restaurant', 1, NULL),
(2, 'Fafa', 'Cambodia, Phnom Penh', '8:40', 'My restaurant', 1, '6:30'),
(3, 'The osahan Restaurant', 'Cambodia, Kompong Thom', '7:30', 'The best restaurant in Cambodia and have a lot of food', 2, '7:30'),
(4, 'The Famous Restaurant', 'Cambodia, Kompong Cham', '7:30', 'The best restaurant in Cambodia and have a lot of food', 2, '8:30'),
(5, 'Bite Me Now Sandwiches', 'Cambodia, Kompong Cham', '7:30', 'The best restaurant in Cambodia and have a lot of food', 1, '8:30'),
(6, 'Nham 24', 'Cambodia, Kompong Cham', '7:30', 'The best restaurant in Cambodia and have a lot of food', 1, '8:30');

-- --------------------------------------------------------

--
-- Table structure for table `res_categories`
--

CREATE TABLE `res_categories` (
  `res_categoryID` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_categories`
--

INSERT INTO `res_categories` (`res_categoryID`, `restaurant_id`, `category_id`) VALUES
(1, 1, 4),
(2, 1, 6),
(3, 2, 1),
(4, 3, 5),
(5, 4, 5),
(6, 5, 4),
(7, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_type`) VALUES
(1, 'Customer'),
(2, 'Owner'),
(3, 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `phoneNumber` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `gender`, `role_id`, `phoneNumber`) VALUES
(1, 'Chanthou', 'chanthou.voeun@student.passerellesnumeriques.org', '1242323', 'M', 2, '12324324234'),
(2, 'Chanthou', 'voeunchanthou724@gmail.com', '', 'M', 2, '12324324234'),
(3, 'Chanthou', 'voeunchanthou7454@gmail.com', '3254234324', 'M', 2, '234234234'),
(4, 'channa', 'v@gmail.com', '1232323232', 'F', 0, '1213123132'),
(5, 'tra', 'et@gmail.com', '123', 'F', 1, '0938343483'),
(6, 'Roth', 'roth@gmail.com', '12345', 'M', 3, '08694433'),
(7, 'thou', 'voeunchanthou74@gmail.com', '123456', 'M', 3, '23456'),
(8, 'Chan', 'chanthouere.voeun@student.passerellesnumeriques.org', '23456', 'M', 1, '34567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_deliver_id_index` (`deliver_id`),
  ADD KEY `comments_user_id_index` (`user_id`);

--
-- Indexes for table `deliverers`
--
ALTER TABLE `deliverers`
  ADD PRIMARY KEY (`deliver_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `favorites_user_id_index` (`user_id`),
  ADD KEY `favorites_food_id_index` (`Food_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`Food_id`),
  ADD KEY `foods_category_id_index` (`category_id`);

--
-- Indexes for table `notificatins`
--
ALTER TABLE `notificatins`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `notificatins_comment_id_index` (`comment_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetail_id`),
  ADD KEY `orderdetails_order_id_index` (`order_id`),
  ADD KEY `orderdetails_food_id_index` (`Food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_user_id_index` (`user_id`),
  ADD KEY `orders_deliver_id_index` (`deliver_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `res_categories`
--
ALTER TABLE `res_categories`
  ADD PRIMARY KEY (`res_categoryID`),
  ADD KEY `res_categories_restaurant_id_index` (`restaurant_id`),
  ADD KEY `res_categories_category_id_index` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliverers`
--
ALTER TABLE `deliverers`
  MODIFY `deliver_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favorite_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `Food_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notificatins`
--
ALTER TABLE `notificatins`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `res_categories`
--
ALTER TABLE `res_categories`
  MODIFY `res_categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
