-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 11:51 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adco`
--
CREATE DATABASE IF NOT EXISTS `adco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adco`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_number` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `account_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `account_number` int(255) NOT NULL,
  `user_account` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `transaction date` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
  `property_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `category`, `location`, `city`, `district`, `price`, `user_email`, `latitude`, `longitude`) VALUES
(50, 'Housing', 'area 47', 'lilongwe', 'lilongwe', 50000, 'sulemartin87@gmail.com', '-13.953006', '33.799939');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `review_id` int(255) NOT NULL,
  `review_summary` varchar(255) NOT NULL,
  `review` varchar(100) DEFAULT NULL,
  `rating` varchar(11) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_summary`, `review`, `rating`, `location`, `user_name`) VALUES
(27, 'theft', 'a lot of thieves\r\n', '5', 'kawale', 'sulemartin87@gmail.com'),
(28, 'it was ok', 'mixed bag of a time', '4', 'kawale', 'sulemartin87@gmail.com'),
(30, 'great place ', 'electricity situation was amazing', '4', 'kawale', 'sulemartin87@gmail.com'),
(67, 'nice people', '', '5', 'kasungu', 'sulemartin87@gmail.com'),
(68, 'woooowww', 'can\'t wait to go back', '5', 'kasungu', 'sulemartin87@gmail.com'),
(69, 'frankly amazing', 'must stay', '5', 'kasungu', 'sulemartin87@gmail.com'),
(70, 'great', 'amazing area to live in', '4', 'kawale', 'sulemartin87@gmail.com'),
(71, 'BAD', 'had a horrible time there', '2', 'kawale', 'sulemartin87@gmail.com'),
(72, 'great place', '', '4', 'namiwawa', 'sulemartin87@gmail.com'),
(97, '1', '', '2', '1', 'sulemartin87@gmail.com'),
(98, '11', '11', '2', '1', 'sulemartin87@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`) VALUES
(7, 'martin', '123456'),
(8, 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_number`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `user_id` (`user_email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
