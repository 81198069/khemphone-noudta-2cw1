-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 11:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE `real_estate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `monthly_charges` float NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`id`, `name`, `monthly_charges`, `images`) VALUES
(1, 'Drink', 15000, 'drink9.jpeg,drink2.png,drink5.jpg,drink6.jpg,drink4.jpg,drink7.jpg,drink8.jpg'),
(2, 'Burger', 25000, 'burger1.jpg,17.png,19.png,14.jfif'),
(3, 'Candy', 18000, 'candy7.jpeg,candy5.jpeg,candy9.jpeg,candy8.jpeg,candy4.jpeg,candy10.jpeg,candy1.jpeg'),
(4, 'khao piek', 20000, 'khao piek3.jpeg,khao piek1.jpeg,khao piek2.jpeg,khao piek4.jpeg,khao piek5.jpeg'),
(5, 'Khao', 20000, 'khao2.jpeg,khao1.jpeg,khao3.jpeg,khao4.jpeg,khao5.jpeg,khao6.jpeg,khao7.jpeg'),
(6, 'Pizza', 150000, 'pizza7.jpeg,pizza9.jpeg,pizza4.jpeg,pizza1.jpeg,pizza3.jpeg,pizza5.jpeg,pizza6.jpeg'),
(7, 'ice cream', 15000, 'ice cream5.jpeg,ice cream1.jpeg,ice cream2.jpeg,ice cream3.jpeg,ice cream7.jpeg,ice cream8.jpeg,ice cream4.jpeg'),
(8, 'Tum', 30000, 'tum1.jpeg,tum2.jpeg,tum3.jpeg,tum4.jpeg,tum5.jpeg,tum6.jpeg,tum7.jpeg'),
(12, 'Fried chicken', 30000, 'chicken8.jpeg,chicken1.jpeg,chicken2.jpeg,chicken3.jpeg,chicken5.jpeg,chicken6.jpeg,chicken7.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `real_estate`
--
ALTER TABLE `real_estate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `real_estate`
--
ALTER TABLE `real_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
