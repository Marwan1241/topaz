-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 06:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `authority` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `authority`, `name`, `image`, `country`, `password`) VALUES
('baher@email.com', 1, 'baher', 'https://upload.wikimedia.org/wikipedia/commons/2/2f/No-photo-m.png', 'Egypt', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` varchar(100) NOT NULL,
  `qauntity` int(11) NOT NULL,
  `shippingPrice` double NOT NULL,
  `totalPrice` double NOT NULL,
  `cartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(255) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `creationDate` date NOT NULL,
  `deliveryDate` date NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `shippingPrice` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `user_email`, `creationDate`, `deliveryDate`, `order_status`, `quantity`, `shippingPrice`, `totalPrice`) VALUES
(1, 'b@email.com', '2022-05-08', '2022-05-18', 'delivered', 1, 25, 525);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` text NOT NULL,
  `cost` double NOT NULL,
  `type` text NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `description`, `price`, `image`, `cost`, `type`, `productID`) VALUES
('amazing bracelet', 'sssss', 1600, 'https://upload.wikimedia.org/wikipedia/commons/2/2f/No-photo-m.png', 300, 'braclets', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `type` int(1) NOT NULL,
  `UserID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `LoggedIN` tinyint(1) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`type`, `UserID`, `name`, `username`, `email`, `password`, `phoneNumber`, `address`, `LoggedIN`, `Image`) VALUES
(0, 2, 'baher', '', 'b@email.com', '$2y$10$WMc5T7vvikoX14Ac6LSpnu0pLxXIWyvbvVZ05qtLx6KKuoawOSZPW', '', '', 0, 'https://upload.wikimedia.org/wikipedia/commons/2/2f/No-photo-m.png'),
(0, 4, 'y', '', 'y@email.com', '$2y$10$zV3X4m2GuGTCcXrdsRJpN.wcbmSigGByrelqLDxr1n2Eupml.33HK', '', '', 0, 'https://upload.wikimedia.org/wikipedia/commons/2/2f/No-photo-m.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
