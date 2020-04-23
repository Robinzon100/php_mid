-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2020 at 03:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `data` varchar(225) NOT NULL,
  `bar_code` varchar(225) NOT NULL,
  `expiration` varchar(225) NOT NULL,
  `input_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `amount`, `data`, `bar_code`, `expiration`, `input_date`) VALUES
(2, 'asd', 'asd', '123', '857601130', '10', 'Thu Apr 23 2020 16:25:20 GMT+0400 (Georgia Standard Time)'),
(3, 'asd', 'asd', '2020-03-31', '941264937', '18', 'Thu Apr 23 2020 16:25:58 GMT+0400 (Georgia Standard Time)'),
(4, 'asd', '123', '2020-04-15', '698455726', '35', 'Thu Apr 23 2020 16:26:41 GMT+0400 (Georgia Standard Time)'),
(5, 'asdasdasd', '86', '2020-04-14', '1051270943', '22', 'Thu Apr 23 2020 16:58:47 GMT+0400 (Georgia Standard Time)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
