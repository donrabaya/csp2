-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 09:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `username`, `email`, `password`, `type_id`) VALUES
(3, 'Fedricco', 'Admin', 'fedriccorabaya@gmail.com', 'c464af817287343305cbd6493c593885695df531', 2),
(4, 'John Doe', 'Doe', 'Doe@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(5, 'Marcus', 'Smart', 'Celtics@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(6, 'Red', 'John', 'red@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(7, 'Hello', 'World', 'hello@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(8, 'Black', 'Yellow', 'BY@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(9, 'asfs', 'Hello', 'f@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(10, 'asd', 'carl', 'asd@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(11, 'asd', 'carl', 'asd@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1),
(12, 'asd', 'asd', 'asd@gmail.com', 'c464af817287343305cbd6493c593885695df531', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Smart Watches'),
(2, 'Luxury Watches'),
(3, 'Casual Watches');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `user_order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `quantity`, `shop_id`, `user_order_id`) VALUES
(25, 1, 1, 26),
(26, 1, 2, 27),
(27, 1, 3, 27),
(32, 1, 1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `image`, `brand`, `model`, `price`, `category_id`) VALUES
(1, 'assets/images/smart1.jpg', 'Garmin', 'Fenix 5S Carrara White', 37000, 1),
(2, 'assets/images/luxury1.jpg', 'Omega', 'Seamaster Planet Ocean', 85000, 2),
(3, 'assets/images/casual1.jpg', 'Tissot', 'PRS 516 Chrongraph', 9500, 3),
(4, 'assets/images/smart2.jpg', 'Fitbit', 'Ionic', 18500, 1),
(5, 'assets/images/luxury2.jpg', 'Hublot', 'Classic Fusion 38mm', 55000, 2),
(9, 'assets/images/casual2.jpg', 'Luminox', 'Recon Pointman 8820 ', 9000, 3),
(10, 'assets/images/smart4.jpg', 'Apple', 'Nke GPS 42mm', 22000, 1),
(11, 'assets/images/luxury4.jpg', 'Breitling', 'Superocean III', 75000, 2),
(12, 'assets/images/casual4.jpg', 'Nixon', 'Sentry Browned Out', 6000, 3),
(13, 'assets/images/smart3.jpg', 'Suunto', 'Spartan Ultra Black HT', 31000, 1),
(14, 'assets/images/luxury3.jpg', 'Rolex', 'Submariner Steel Gold', 80000, 2),
(15, 'assets/images/casual3.jpg', 'Seiko', 'Sky Solar', 7000, 3),
(16, 'assets/images/smart5.jpg', 'Nixon', 'GPL Mission', 25000, 1),
(17, 'assets/images/luxury5.jpg', 'Breitling', 'Chronomat GMT', 69000, 2),
(18, 'assets/images/casual5.jpg', 'Nixon', 'Sentry Classic 52', 7000, 3),
(19, 'assets/images/smart6.jpg', 'Moto', '360 Sport 55mm', 5000, 1),
(20, 'assets/images/luxury6.jpg', 'Rolex', 'GMT Master', 90000, 2),
(21, 'assets/images/casual6.jpg', 'Luminox', 'SET Scott Cassel', 9000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `usertype`) VALUES
(1, 'customer'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(11) NOT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`id`, `account_id`) VALUES
(26, 4),
(27, 6),
(32, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `user_order_id` (`user_order_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_order_id`) REFERENCES `user_orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD CONSTRAINT `user_orders_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;