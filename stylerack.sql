-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2020 at 11:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stylerack`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`) VALUES
(1, 'Fabindia', 3000),
(2, 'Manyavar', 4000),
(3, 'Neeru\'s ', 6000),
(4, 'Mebaz', 4500),
(5, 'Diesel', 2000),
(6, 'LeeCooper', 1200),
(7, 'Levis', 1600),
(8, 'Pepe Jeans', 1900),
(9, 'Peter England', 1500),
(10, 'Louis Philippe', 1400),
(11, 'Allen Solly', 1000),
(12, 'Arrow', 1100),
(13, 'Vero Moda', 2000),
(14, 'Forever21', 1500),
(15, 'Allen Solly', 1000),
(16, 'Ginger', 800),
(17, 'Aurelas', 1200),
(18, 'Biba', 1500),
(19, 'Wills', 1300),
(20, 'Neeru\'s', 3000),
(21, 'Banarsi Saree', 5000),
(22, 'Chiffon Saree', 2400),
(23, 'Handloom Cotton Saree', 4000),
(24, 'Silk Saree', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Vaishnavi', 'vaishnavi@xyz.com', '49cd12499e51e7245814337bfab30aa2', '9123456780', 'Hyderabad', 'Telengana'),
(2, 'Riddhi', 'riddhi25@xyz.com', 'f966bd920a5fd6335e37336e17fa0430', '9394093608', 'Hyderabad', 'Telengana');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `status`) VALUES
(6, 1, 15, 'Confirmed'),
(7, 1, 13, 'Added to cart'),
(9, 2, 15, 'Confirmed'),
(10, 2, 2, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
