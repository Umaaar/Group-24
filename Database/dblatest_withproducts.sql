-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 05:02 PM
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
(1, 'Admin', 'admin@admin.com', '$2a$12$iWM4LhB8nR3O8hHAaD4he.gszRmSPN5y/s2/2PuLUsNUjYP37lSNq');

-- --------------------------------------------------------

--
-- Table structure for table `admin_basket_view`
--

CREATE TABLE `admin_basket_view` (
  `adminbasketviewid` int(11) NOT NULL,
  `adminck` int(11) NOT NULL,
  `basketck` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `basketid` int(11) NOT NULL,
  `userfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`basketid`, `userfk`) VALUES
(2, 2),
(17, 17);

-- --------------------------------------------------------

--
-- Table structure for table `basket_contents`
--

CREATE TABLE `basket_contents` (
  `basketcontentsid` int(11) NOT NULL,
  `basketck` int(11) NOT NULL,
  `productck` int(11) NOT NULL,
  `orderfk` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `totalprice` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basket_contents`
--

INSERT INTO `basket_contents` (`basketcontentsid`, `basketck`, `productck`, `orderfk`, `quantity`, `totalprice`) VALUES
(4, 2, 1, NULL, 1, 15);

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
  `userfk` int(11) DEFAULT NULL,
  `productfk` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `userfk`, `productfk`, `date`, `status`) VALUES
(1, NULL, NULL, '2022-11-30', 'Completed'),
(2, NULL, NULL, '2022-11-30', 'Completed'),
(3, NULL, NULL, '2022-11-17', 'Completed'),
(4, NULL, NULL, '2022-11-17', 'Completed'),
(5, NULL, NULL, '2022-11-16', 'Completed'),
(6, NULL, NULL, '2022-11-15', 'Completed'),
(7, NULL, NULL, '2022-11-15', 'Completed'),
(8, NULL, NULL, '2022-11-15', 'Completed'),
(9, NULL, NULL, '2022-11-14', 'Completed'),
(10, NULL, NULL, '2022-11-14', 'Completed'),
(11, NULL, NULL, '2022-11-12', 'Completed'),
(12, NULL, NULL, '2022-11-12', 'Completed'),
(13, NULL, NULL, '2022-11-09', 'Completed'),
(14, NULL, NULL, '2022-11-09', 'Completed'),
(15, NULL, NULL, '2022-11-02', 'Completed'),
(16, NULL, NULL, '2022-11-01', 'Completed'),
(17, NULL, NULL, '2022-10-31', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(5) NOT NULL DEFAULT 'S',
  `price` float NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0,
  `description` varchar(535) NOT NULL DEFAULT 'No description given.',
  `gender` varchar(10) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `size`, `price`, `stock`, `description`, `gender`, `images`) VALUES
(1, 'T-Shirt (White)', 'S', 14.99, 10, 'Comfortable and breathable t-shirt, suitable for sports and leisure wear. Made using 100% recycled cotton. Machine washable at 40 degrees.', 'Male', 'm-white-shirt.png'),
(2, 'T-Shirt (Grey)', 'M', 14.99, 10, 'Comfortable and breathable t-shirt, suitable for sports and leisure wear. Made using 100% recycled cotton. Machine washable at 40 degrees.', 'Male', 'm-grey-tshirt.png'),
(3, 'T-Shirt (Green)', 'L', 14.99, 10, 'Comfortable and breathable t-shirt, suitable for sports and leisure wear. Made using 100% recycled cotton. Machine washable at 40 degrees.', 'Male', 'm-green-tshirt.png'),
(4, 'Sweatshirt (Red)', 'L', 19.99, 15, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Male', 'm-red-sweatshirt.png'),
(5, 'Sweatshirt (Dark Red)', 'S', 19.99, 15, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Male', 'm-green-sweatshirt.png'),
(6, 'Sweatshirt (Blue)', 'M', 19.99, 15, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Male', 'm-blue-sweatshirt.png'),
(7, 'Sweatshirt (Black)', 'S', 19.99, 15, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Male', 'm-black-sweatshirt.png'),
(8, 'Joggers (Grey)', 'M', 12.99, 20, 'Stretchable and comfortable made for sport and leisure. High quality and made to last. Made using 80% Polyamide, 20% Elastane.', 'Male', 'm-grey-jogger.png'),
(9, 'Joggers (Blue)', 'M', 12.99, 20, 'Stretchable and comfortable made for sport and leisure. High quality and made to last. Made using 80% Polyamide, 20% Elastane.', 'Male', 'm-blue-jogger.png'),
(10, 'Joggers (Black)', 'L', 12.99, 20, 'Stretchable and comfortable made for sport and leisure. High quality and made to last. Made using 80% Polyamide, 20% Elastane.', 'Male', 'm-black-jogger.png'),
(11, 'Hoodie (Red)', 'S', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Male', 'm-red-hoodie.png'),
(12, 'Hoodie (Grey)', 'L', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Male', 'm-grey-hoodie.png'),
(13, 'Hoodie (Green)', 'M', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Male', 'm-green-hoodie.png'),
(14, 'Hoodie (Blue)', 'L', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Male', 'm-blue-hoodie.png'),
(15, 'Hoodie (Black)', 'M', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Male', 'm-black-hoodie.png'),
(16, 'T-Shirt (Grey)', 'M', 14.99, 10, 'comfortable and breathable t-shirt, suitable for sports and leisure wear. Made using 100% recycled cotton. Machine washable at 40 degrees.', 'Female', 'f-grey-tshirt.png'),
(17, 'T-Shirt (Pink)', 'L', 14.99, 10, 'comfortable and breathable t-shirt, suitable for sports and leisure wear. Made using 100% recycled cotton. Machine washable at 40 degrees.', 'Female', 'f-pink-tshirt.png'),
(18, 'T-Shirt (Purple)', 'M', 14.99, 10, 'comfortable and breathable t-shirt, suitable for sports and leisure wear. Made using 100% recycled cotton. Machine washable at 40 degrees.', 'Female', 'f-purple-tshirt.png'),
(19, 'T-Shirt (Yellow)', 'L', 14.99, 10, 'comfortable and breathable t-shirt, suitable for sports and leisure wear. Made using 100% recycled cotton. Machine washable at 40 degrees.', 'Female', 'f-yellow-tshirt.png'),
(20, 'Sweatshirt (Grey)', 'L', 19.99, 10, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Female', 'f-grey-sweatshirt.png'),
(21, 'Sweatshirt (Black)', 'S', 19.99, 10, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Female', 'f-black-sweatshirt.png'),
(22, 'Sweatshirt (Pink)', 'L', 19.99, 10, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Female', 'f-pink.sweatshirt.png'),
(23, 'Sweatshirt (Purple)', 'M', 19.99, 10, 'Basic sweatshirts made using high quality and stretchable fabric. 40% polyester and 60% cotton. Machine washable at 55 degrees.', 'Female', 'f-purple-sweatshirt.png'),
(24, 'Joggers (Black)', 'L', 12.99, 20, 'Stretchable and comfortable made for sport and leisure. High quality and made to last. Made using 80% Polyamide, 20% Elastane.', 'Female', 'f-black-jogger.png'),
(25, 'Joggers (Grey)', 'S', 12.99, 20, 'Stretchable and comfortable made for sport and leisure. High quality and made to last. Made using 80% Polyamide, 20% Elastane.', 'Female', 'f-grey-jogger.png'),
(26, 'Hoodie (Black)', 'S', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Female', 'f-black-hoodie.png'),
(27, 'Hoodie (Blue)', 'S', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Female', 'f-blue-hoodie.png'),
(28, 'Hoodie (Green)', 'M', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Female', 'f-green-hoodie.png'),
(29, 'Hoodie (Grey)', 'L', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Female', 'f-grey-hoodie.png'),
(30, 'Hoodie (Red)', 'M', 24.99, 30, 'High quality and breathable hoodie made for sports and leisure. Machine washable at 40 degrees and tumble dry suitable. Made using blended and recycled fabrics. 80% cotton and 20% polyester.', 'Female', 'f-red-hoodie.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `productcategoriesid` int(11) NOT NULL,
  `productck` int(11) NOT NULL,
  `categoryck` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'John', 'Smith', '10 Example Road', '000 000', 'Male', '2000-01-05', 'john@hotmail.com', '$2a$12$9DIeWOa0spd8RnBcyMs4XOa/SwFOdMiEYqMl1UsdI08zTIWg6Ihbu'),
(2, 'Bailey', 'Hill', '11 Example Road', '000 000', 'Female', '1998-02-12', 'bailey@outlook.com', '$2a$12$g0NGmXkAlCPbq2ceU02cBun0mt/KXuc2fAmwVe85ksfqr6UhhoYtG'),
(3, 'Melody', 'Langley', '12 Example Road', '000 000', 'Female', '2000-01-24', 'melody@hotmail.com', '$2a$12$.5a85QAw1BhQLVkJ13E34emKgY52/fEbTC5pXVjoNRu19wEXm4B7m'),
(4, 'Antonio', 'Young', '13 Example Road', '000 000', 'Male', '2000-01-09', 'antonio@hotmail.com', '$2a$12$aZfa1BH8G1vOHjHW36xcFzX13.ou185EFXcyP70KSBz6VBUGcqtEioJ7i'),
(5, 'Liam', 'Stevens', '14 Example Road', '000 000', 'Male', '2000-01-28', 'liam@hotmail.com', '$2a$12$7nAlP0IR53N5ctTEEiaTOukJTlbqdqKXUWPpgysG40bWRrIr9X5UO2'),
(6, 'Alaia', 'Levine', '15 Example Road', '000 000', 'Female', '1998-03-06', 'alaia@outlook.com', '$2y$10$xQLlV3tNRA6/nhi1j.ysOOKMasn2ghOzsfKtkx5w7kbu0zGW0YC2tc2'),
(7, 'Lyla', 'Kade', '16 Example Road', '000 000', 'Female', '1999-10-04', 'lyla@hotmail.com', '$2a$12$tspzXjIBkiQuSmj.7/S5W.QcNhGsvV2VY8RGB5cBKViJFDbO5DxGa43'),
(8, 'Ace', 'White', '17 Example Road', '000 000', 'Male', '2000-01-06', 'ace@hotmail.com', '$2a$12$lLOSJ4nlcfXGXRgLDAR61OS8sm7GnHONxYaOTGIxgEYS2a.FHKTM2'),
(9, 'Elijah', 'Hall', '18 Example Road', '000 000', 'Male', '1999-10-12', 'elijah@hotmail.com', '$2a$12$qWlaVK9RzbVWso.dFEbVteGNQYzB6K1/oFu.0KE9xf9kTE.Xfd7vhv3c'),
(10, 'Hailey', 'Jackson', '19 Example Road', '000 000', 'Female', '1998-07-16', 'hailey@outlook.com', '$2a$12$eKCf7tFNhTJwIMG0tEPugu6xcLJddpkz/noHYaVfS7cWShCDViQFu7s'),
(11, 'Felix', 'Jones', '20 Example Road', '000 000', 'Male', '2000-06-29', 'felix@hotmail.com', '$2a$12$BUkPRcpL2/9jEdkkiRArFeWzvDhnT5K9hAH3r4RUWFVrk9AqYR9cal'),
(12, 'Stella', 'Thompson', '21 Example Road', '000 000', 'Female', '2000-02-18', 'stella@hotmail.com', '$2a$12$vepFKmpJsbmjkjy0UhVs2eeiBb/HSyGi3LR9yvI2lPuWVW1r.oHnan28'),
(13, 'Ivy', 'Clark', '22 Example Road', '000 000', 'Male', '2000-07-07', 'ivy@hotmail.com', '$2a$12$iISvDaxpX99umQBdQ4P2uOynaz15YSK14dXc3e6HMtyNIT6Lcs3O6f'),
(14, 'Wesley', 'Peterson', '23 Example Road', '000 000', 'Male', '1997-05-06', 'Wesley@outlook.com', '$2a$12$4oCgj3HSCX3Vm9fuWzaThediJlciKUPsUyOg4WUeDmjmmiMTTVviy'),
(15, 'Oliver', 'Scott', '24 Example Road', '000 000', 'Male', '1999-02-09', 'oliver@hotmail.com', '$2a$12$MHh/kkT26tS0aHpJ/jRvset5It5fcLXgRDL81iYP3/gbttOJbfsQij1v4jsm'),
(16, 'Leah', 'Wilson', '25 Example Road', '000 000', 'Female', '1999-11-09', 'leah@hotmail.com', '$2a$12$oK.z/mXaHBbmNWMMbNReMulTr4M77/Bh4fT6SJ/RNpN2F2dLKQ'),
(17, 'User', 'User', 'Example Test Address', '999 999', 'Male', '2021-10-13', 'user@user.com', '$2a$12$OcW2gISK84xsMdadB4QrQ.ItJvNXAO4J95XEym6xHoxNhvLxe.fGu');

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
  ADD PRIMARY KEY (`adminbasketviewid`),
  ADD KEY `adminck` (`adminck`),
  ADD KEY `basketck` (`basketck`);

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
  ADD PRIMARY KEY (`basketcontentsid`),
  ADD KEY `basketck` (`basketck`),
  ADD KEY `productck` (`productck`),
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
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `userfk` (`userfk`),
  ADD KEY `productfk` (`productfk`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`productcategoriesid`),
  ADD KEY `productck` (`productck`),
  ADD KEY `categoryck` (`categoryck`);

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
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_basket_view`
--
ALTER TABLE `admin_basket_view`
  MODIFY `adminbasketviewid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `basketid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `basket_contents`
--
ALTER TABLE `basket_contents`
  MODIFY `basketcontentsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `productcategoriesid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `basket_contents_ibfk_1` FOREIGN KEY (`basketck`) REFERENCES `basket` (`basketid`),
  ADD CONSTRAINT `basket_contents_ibfk_2` FOREIGN KEY (`productck`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `basket_contents_ibfk_3` FOREIGN KEY (`orderfk`) REFERENCES `orders` (`orderid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userfk`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productfk`) REFERENCES `products` (`id`);

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
