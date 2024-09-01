-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 10:09 PM
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
-- Database: `application2`
--

-- --------------------------------------------------------

--
-- Table structure for table `burgers`
--

CREATE TABLE `burgers` (
  `id_burger` int(11) NOT NULL,
  `burger_name` varchar(150) NOT NULL,
  `burger_meal_price` varchar(100) NOT NULL,
  `burger_sandwich_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `burgers`
--

INSERT INTO `burgers` (`id_burger`, `burger_name`, `burger_meal_price`, `burger_sandwich_price`) VALUES
(1, 'Beef Burger', '2.25', '1.50'),
(2, 'cheese burger', '2.75', '1.65');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id_location` int(11) NOT NULL,
  `img_location` varchar(150) NOT NULL,
  `title_location` varchar(150) NOT NULL,
  `phonen_location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id_location`, `img_location`, `title_location`, `phonen_location`) VALUES
(1, '40.jpg', 'title one', '0795758321'),
(10, 'Creative (34).jpg', 'title tow', '0987654888');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `user_name_order` varchar(100) NOT NULL,
  `phone_number_order` varchar(150) NOT NULL,
  `location_order` varchar(200) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `meal` int(100) NOT NULL,
  `sandwich` int(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `qrt` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `user_name_order`, `phone_number_order`, `location_order`, `order_name`, `meal`, `sandwich`, `total_price`, `qrt`) VALUES
(1, 'Ahmad_21', '0755318621', 'amman', 'Ahmad', 3, 1, '11', 345),
(2, 'Ali79', '0999999999', 'amman', 'Ali ', 0, 2, '7.75', 778),
(7, 'dsfsd', '0999999999', 'amman', 'ccvd', 3, 7, '12.75', 55);

-- --------------------------------------------------------

--
-- Table structure for table `snaks`
--

CREATE TABLE `snaks` (
  `id_snaks` int(11) NOT NULL,
  `snack_name` varchar(150) NOT NULL,
  `snack_meal_price` varchar(100) NOT NULL,
  `snack_sandwich_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snaks`
--

INSERT INTO `snaks` (`id_snaks`, `snack_name`, `snack_meal_price`, `snack_sandwich_price`) VALUES
(1, 'Faheta', '2.75', '1.50'),
(2, 'shawrema', '2.25', '0.60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_all_users` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_all_users`, `id_user`, `full_name`, `email`, `username`, `phone`, `location`) VALUES
(1, '987', 'mmmbbbb lll', 'aaa32@gmail.com', 'aa786', '0755318888', 'irbid'),
(2, 't341', 'ppp gggg xxxx', 'ppp@gmail.com', 'ppp877', '0733348621', 'amman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`id_burger`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Indexes for table `snaks`
--
ALTER TABLE `snaks`
  ADD PRIMARY KEY (`id_snaks`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_all_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `burgers`
--
ALTER TABLE `burgers`
  MODIFY `id_burger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `snaks`
--
ALTER TABLE `snaks`
  MODIFY `id_snaks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_all_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
