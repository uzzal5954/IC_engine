-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 08:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automotivedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `automotivetable01`
--

CREATE TABLE `automotivetable01` (
  `id` int(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automotivetable01`
--

INSERT INTO `automotivetable01` (`id`, `comment`, `email`) VALUES
(1, 'hay , i am uzzal;', 'uzzal5954@gmail.com'),
(2, 'hello , i am ucb', 'uzzal5954@gmail.com'),
(3, 'yep i am ucb', 'uzzal5954@gmail.com'),
(4, 'a', 'uzzal5954@gmail.com'),
(5, 'a', 'uzzal5954@gmail.com'),
(6, 'b', 'uzzal5954@gmail.com'),
(7, 'c', 'uzzal5954@gmail.com'),
(8, 'd', 'uzzal5954@gmail.com'),
(9, 'er', 'uzzal5954@gmail.com'),
(10, 'arf', 'uzzal5954@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `automotivetable02`
--

CREATE TABLE `automotivetable02` (
  `id` int(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Card_Types` varchar(100) NOT NULL,
  `Card_Number` int(100) NOT NULL,
  `Security_Code` int(100) NOT NULL,
  `Mobile_Number` int(100) NOT NULL,
  `Email_Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automotivetable02`
--

INSERT INTO `automotivetable02` (`id`, `Country`, `Card_Types`, `Card_Number`, `Security_Code`, `Mobile_Number`, `Email_Address`) VALUES
(1, 'Bangladesh', 'Maestro', 1624722991, 1234, 1624722991, 'uzzal5954@gmail.com'),
(2, 'India', 'Martercard', 12345, 123, 1624722991, 'uzzal5954@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `automotivetable03`
--

CREATE TABLE `automotivetable03` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automotivetable03`
--

INSERT INTO `automotivetable03` (`id`, `name`, `email`) VALUES
(1, 'Uzzal Chandra Boissha', 'uzzal5954@gmail.com'),
(2, 'Uzzal Chandra Boissha', 'uzzal5954@gmail.com'),
(3, 'uzzalChandraBoissha', 'uzzal5954@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automotivetable01`
--
ALTER TABLE `automotivetable01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automotivetable02`
--
ALTER TABLE `automotivetable02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automotivetable03`
--
ALTER TABLE `automotivetable03`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automotivetable01`
--
ALTER TABLE `automotivetable01`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `automotivetable02`
--
ALTER TABLE `automotivetable02`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `automotivetable03`
--
ALTER TABLE `automotivetable03`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
