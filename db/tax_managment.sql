-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2022 at 06:50 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tax_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp_type`
--

DROP TABLE IF EXISTS `comp_type`;
CREATE TABLE IF NOT EXISTS `comp_type` (
  `com_type_id` int NOT NULL AUTO_INCREMENT,
  `com_type` text,
  `reg_date` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
  PRIMARY KEY (`com_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comp_type`
--

INSERT INTO `comp_type` (`com_type_id`, `com_type`, `reg_date`) VALUES
(1, 'Shop', '2022-04-29 19:01:22.034'),
(3, 'Traditional Cloth', '2022-04-29 19:01:56.539');

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

DROP TABLE IF EXISTS `item_category`;
CREATE TABLE IF NOT EXISTS `item_category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` text,
  `reg_date` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

DROP TABLE IF EXISTS `item_list`;
CREATE TABLE IF NOT EXISTS `item_list` (
  `ilist_id` int NOT NULL AUTO_INCREMENT,
  `ilist_by` text,
  `ilist_name` text,
  `ilist_cate_id` text,
  `ilist_single_amount` text,
  `reg_date` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
  PRIMARY KEY (`ilist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `req_id` int NOT NULL AUTO_INCREMENT,
  `req_by_id` text,
  `req_document` text,
  `req_comp_name` text,
  `req_comp_type` text,
  `req_reg_date` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
  `req_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `req_by_id`, `req_document`, `req_comp_name`, `req_comp_type`, `req_reg_date`, `req_status`) VALUES
(1, '12', 'licenceChala12', 'sinaf', 'Traditional Cloth', '2022-05-03 17:39:34.324', 'Disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` text,
  `lname` text,
  `email` text,
  `username` text,
  `phone` text,
  `role` text,
  `sex` text,
  `status` varchar(10) DEFAULT 'Active',
  `address` text,
  `password` text,
  `reg_date` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `phone`, `role`, `sex`, `status`, `address`, `password`, `reg_date`) VALUES
(1, 'Tola', 'Gutu', 'gutu@gmail.com', 'tola', '0911118813', 'Admin', 'Male', 'Active', 'Mettu', '123123', '0000-00-00 00:00:00.000'),
(12, 'Chala', 'Balu', 'chala@gmail.com', 'chala', '1231231233', 'Not Assign', NULL, 'Active', 'mettu', '123123', '2022-04-28 17:13:05.200'),
(13, 'king', 'king2', 'fffff@sdsd.com', 'king', '1212121212', 'Employee', 'male', 'Active', 'sdf', '123123', '2022-04-28 17:15:36.981');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
