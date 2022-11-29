-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 02:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `name`, `email`, `password`) VALUES
(1, 'Admin1', 'admin1@admins.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_basket_view`
--

CREATE TABLE `admin_basket_view` (
  `adminck` int(11) NOT NULL,
  `basketck` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `basketid` int(11) NOT NULL,
  `userfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basket_contents`
--

CREATE TABLE `basket_contents` (
  `basketck` int(11) NOT NULL,
  `productck` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `totalPrice` int(11) NOT NULL DEFAULT 0,
  `orderfk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Ongoing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(5) NOT NULL DEFAULT 'S',
  `price` int(11) NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0,
  `description` varchar(535) NOT NULL DEFAULT 'No description given.',
  `gender` varchar(10) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `productck` int(11) NOT NULL,
  `categoryck` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postCode` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstName`, `surname`, `address`, `postCode`, `gender`, `dateOfBirth`, `email`, `password`) VALUES
(1, 'Test', 'Man', 'test', 'test', 'male', '2000-01-01', 'testman@testers.com', '$2y$10$xQLlV3tNRA6/nhi1j.ysOOKMasnhOzsfKtkx5w7kbu0zGW0YC2tc2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `admin_basket_view`
--
ALTER TABLE `admin_basket_view`
  ADD PRIMARY KEY (`adminck`,`basketck`),
  ADD KEY `adminck_2` (`adminck`,`basketck`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basketid`),
  ADD KEY `UserID` (`userfk`);

--
-- Indexes for table `basket_contents`
--
ALTER TABLE `basket_contents`
  ADD PRIMARY KEY (`basketck`,`productck`),
  ADD KEY `basketck_2` (`basketck`,`productck`),
  ADD KEY `orderfk` (`orderfk`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`productck`,`categoryck`),
  ADD KEY `productck` (`productck`,`categoryck`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `basketid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_basket_view`
--
ALTER TABLE `admin_basket_view`
  ADD CONSTRAINT `admin_basket_view_ibfk_1` FOREIGN KEY (`adminck`) REFERENCES `admins` (`adminid`),
  ADD CONSTRAINT `admin_basket_view_ibfk_2` FOREIGN KEY (`basketck`) REFERENCES `basket` (`basketid`);

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`userfk`) REFERENCES `users` (`userid`);

--
-- Constraints for table `basket_contents`
--
ALTER TABLE `basket_contents`
  ADD CONSTRAINT `basket_contents_ibfk_1` FOREIGN KEY (`basketck`) REFERENCES `basket` (`basketid`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_ibfk_1` FOREIGN KEY (`productck`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_categories_ibfk_2` FOREIGN KEY (`categoryck`) REFERENCES `categories` (`categoryid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
