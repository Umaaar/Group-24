-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220418.7005844990
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2022 at 10:58 AM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 8.0.25

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
  `AdminID` int NOT NULL,
  `BasketID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `AdminID` int NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Basket`
--

CREATE TABLE `Basket` (
  `BasketID` int NOT NULL,
  `UserID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Basket Contents`
--

CREATE TABLE `Basket Contents` (
  `BasketID` int NOT NULL,
  `ProductID` int NOT NULL,
  `Quantity` int NOT NULL,
  `TotalPrice` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `CategoryID` int NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Product Categories`
--

CREATE TABLE `Product Categories` (
  `ProductID` int NOT NULL,
  `CategoryID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ProductID` int NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Size` int NOT NULL,
  `Price` int NOT NULL,
  `Stock` int NOT NULL DEFAULT '0',
  `Description` varchar(535) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `Gender` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Images` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int NOT NULL,
  `FirstName` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `PostCode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Gender` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin Basket View`
--
ALTER TABLE `Admin Basket View`
  ADD PRIMARY KEY (`AdminID`,`BasketID`),
  ADD KEY `BasketID` (`BasketID`);

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `Basket`
--
ALTER TABLE `Basket`
  ADD PRIMARY KEY (`BasketID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `Basket Contents`
--
ALTER TABLE `Basket Contents`
  ADD PRIMARY KEY (`BasketID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `Product Categories`
--
ALTER TABLE `Product Categories`
  ADD PRIMARY KEY (`ProductID`,`CategoryID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `AdminID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Basket`
--
ALTER TABLE `Basket`
  MODIFY `BasketID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `CategoryID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Admin Basket View`
--
ALTER TABLE `Admin Basket View`
  ADD CONSTRAINT `Admin Basket View_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `Admins` (`AdminID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Admin Basket View_ibfk_2` FOREIGN KEY (`BasketID`) REFERENCES `Basket` (`BasketID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Basket`
--
ALTER TABLE `Basket`
  ADD CONSTRAINT `Basket_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Basket Contents`
--
ALTER TABLE `Basket Contents`
  ADD CONSTRAINT `Basket Contents_ibfk_1` FOREIGN KEY (`BasketID`) REFERENCES `Basket` (`BasketID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Basket Contents_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Product Categories`
--
ALTER TABLE `Product Categories`
  ADD CONSTRAINT `Product Categories_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Product Categories_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `Categories` (`CategoryID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
