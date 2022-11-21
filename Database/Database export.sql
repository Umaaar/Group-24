-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2022 at 01:25 PM
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
-- Table structure for table `Admin Basket View`
--

CREATE TABLE `Admin Basket View` (
  `adminID` int NOT NULL,
  `basketID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `adminID` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Basket`
--

CREATE TABLE `Basket` (
  `basketID` int NOT NULL,
  `userID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Basket Contents`
--

CREATE TABLE `Basket Contents` (
  `basketID` int NOT NULL,
  `productID` int NOT NULL,
  `quantity` int NOT NULL,
  `totalPrice` int NOT NULL,
  `orderID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `categoryID` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `orderID` int NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Product Categories`
--

CREATE TABLE `Product Categories` (
  `productID` int NOT NULL,
  `categoryID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `productID` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `size` int NOT NULL,
  `price` int NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `description` varchar(535) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `images` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userID` int NOT NULL,
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
-- Indexes for table `Admin Basket View`
--
ALTER TABLE `Admin Basket View`
  ADD PRIMARY KEY (`adminID`,`basketID`),
  ADD KEY `BasketID` (`basketID`);

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `Basket`
--
ALTER TABLE `Basket`
  ADD PRIMARY KEY (`basketID`),
  ADD KEY `UserID` (`userID`);

--
-- Indexes for table `Basket Contents`
--
ALTER TABLE `Basket Contents`
  ADD PRIMARY KEY (`basketID`,`productID`),
  ADD KEY `ProductID` (`productID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `Product Categories`
--
ALTER TABLE `Product Categories`
  ADD PRIMARY KEY (`productID`,`categoryID`),
  ADD KEY `CategoryID` (`categoryID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `adminID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Basket`
--
ALTER TABLE `Basket`
  MODIFY `basketID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `categoryID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `orderID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Admin Basket View`
--
ALTER TABLE `Admin Basket View`
  ADD CONSTRAINT `Admin Basket View_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `Admins` (`adminID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Admin Basket View_ibfk_2` FOREIGN KEY (`basketID`) REFERENCES `Basket` (`basketID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Basket`
--
ALTER TABLE `Basket`
  ADD CONSTRAINT `Basket_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `Users` (`userID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Basket Contents`
--
ALTER TABLE `Basket Contents`
  ADD CONSTRAINT `Basket Contents_ibfk_1` FOREIGN KEY (`basketID`) REFERENCES `Basket` (`basketID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Basket Contents_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `Products` (`productID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Basket Contents_ibfk_3` FOREIGN KEY (`orderID`) REFERENCES `Orders` (`orderID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Product Categories`
--
ALTER TABLE `Product Categories`
  ADD CONSTRAINT `Product Categories_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `Products` (`productID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Product Categories_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `Categories` (`categoryID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
