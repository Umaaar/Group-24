-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2022 at 06:25 PM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_210103351_TP_website_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin basket view`
--

CREATE TABLE `admin basket view` (
  `adminck` int NOT NULL,
  `basketck` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `basketid` int NOT NULL,
  `userfk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basket contents`
--

CREATE TABLE `basket contents` (
  `basketck` int NOT NULL,
  `productck` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `totalPrice` int NOT NULL DEFAULT '0',
  `orderfk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Ongoing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product categories`
--

CREATE TABLE `product categories` (
  `productck` int NOT NULL,
  `categoryck` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `size` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'S',
  `price` int NOT NULL DEFAULT '0',
  `stock` int NOT NULL DEFAULT '0',
  `description` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'No description given.',
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `images` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `firstName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `postCode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin basket view`
--
ALTER TABLE `admin basket view`
  ADD PRIMARY KEY (`adminck`,`basketck`),
  ADD KEY `BasketID` (`basketck`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basketid`),
  ADD KEY `UserID` (`userfk`);

--
-- Indexes for table `basket contents`
--
ALTER TABLE `basket contents`
  ADD PRIMARY KEY (`basketck`,`productck`),
  ADD KEY `ProductID` (`productck`),
  ADD KEY `orderID` (`orderfk`);

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
-- Indexes for table `product categories`
--
ALTER TABLE `product categories`
  ADD PRIMARY KEY (`productck`,`categoryck`),
  ADD KEY `CategoryID` (`categoryck`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

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
  MODIFY `adminid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `basketid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin basket view`
--
ALTER TABLE `admin basket view`
  ADD CONSTRAINT `admin basket view_ibfk_1` FOREIGN KEY (`adminck`) REFERENCES `admins` (`adminid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `admin basket view_ibfk_2` FOREIGN KEY (`basketck`) REFERENCES `basket` (`basketid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`userfk`) REFERENCES `users` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `basket contents`
--
ALTER TABLE `basket contents`
  ADD CONSTRAINT `basket contents_ibfk_1` FOREIGN KEY (`basketck`) REFERENCES `basket` (`basketid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `basket contents_ibfk_2` FOREIGN KEY (`productck`) REFERENCES `products` (`productid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `basket contents_ibfk_3` FOREIGN KEY (`orderfk`) REFERENCES `orders` (`orderid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product categories`
--
ALTER TABLE `product categories`
  ADD CONSTRAINT `product categories_ibfk_1` FOREIGN KEY (`productck`) REFERENCES `products` (`productid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product categories_ibfk_2` FOREIGN KEY (`categoryck`) REFERENCES `categories` (`categoryid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
