-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 09:59 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greencyc`
--

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `bizname` varchar(100) NOT NULL,
  `biztype` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `collection` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `lastlogindate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`id`, `firstname`, `lastname`, `bizname`, `biztype`, `email`, `password`, `phone`, `address`, `city`, `interest`, `collection`, `comment`, `lastlogindate`) VALUES
(1, 'lawal goodness', '', 'wash it', 'startup', 'lawalgoodness14@gmail.com', '1a129c534a', '08107773727', 'oscar juction, ifite', 'Awka', 'recycling', 'bottles', 'Thank you', ''),
(2, 'kenneth', '', 'wash it', 'startup', 'tnzewi@gmail.com', 'e0a57131f6', '08066707872', 'oscar juction, ifite', 'Awka', 'recycling', 'bottles', 'Thank you', '');

-- --------------------------------------------------------

--
-- Table structure for table `commercialaccount`
--

CREATE TABLE `commercialaccount` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `money` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instant`
--

CREATE TABLE `instant` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `collection` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instant`
--

INSERT INTO `instant` (`id`, `firstname`, `lastname`, `email`, `phone`, `address`, `landmark`, `city`, `interest`, `collection`, `comment`) VALUES
(1, 'lawal goodness', '', 'lawalgoodness14@gmail.com', '08107773727', 'oscar juction, ifite', 'landmark', 'Awka', 'recycling', 'bottles', 'Thank you');

-- --------------------------------------------------------

--
-- Table structure for table `residential`
--

CREATE TABLE `residential` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `junction` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `collection` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `lastlogindate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residential`
--

INSERT INTO `residential` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`, `junction`, `city`, `interest`, `collection`, `comment`, `lastlogindate`) VALUES
(2, 'lawal goodness', '', 'lawalgoodness14@gmail.com', 'hope123', '08107773527', 'oscar juction, ifite', 'SU', 'Awka', 'recycling', 'bottles', 'Thank you', '');

-- --------------------------------------------------------

--
-- Table structure for table `residentialaccount`
--

CREATE TABLE `residentialaccount` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `money` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `commercialaccount`
--
ALTER TABLE `commercialaccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `instant`
--
ALTER TABLE `instant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential`
--
ALTER TABLE `residential`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `residentialaccount`
--
ALTER TABLE `residentialaccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commercial`
--
ALTER TABLE `commercial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commercialaccount`
--
ALTER TABLE `commercialaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instant`
--
ALTER TABLE `instant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residential`
--
ALTER TABLE `residential`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `residentialaccount`
--
ALTER TABLE `residentialaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
