-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2018 at 02:21 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udemy_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bolumler`
--

CREATE TABLE `bolumler` (
  `id` int(11) NOT NULL,
  `bolum_no` int(11) NOT NULL,
  `bolum_sezon` int(11) NOT NULL,
  `bolum_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bolumler`
--

INSERT INTO `bolumler` (`id`, `bolum_no`, `bolum_sezon`, `bolum_tarih`) VALUES
(1, 1, 1, '2018-08-31 14:20:34'),
(2, 2, 2, '2018-08-31 14:20:43'),
(3, 3, 1, '2018-08-31 14:20:51'),
(4, 2, 1, '2018-08-31 14:21:00'),
(5, 3, 2, '2018-08-31 14:21:06'),
(6, 6, 5, '2018-08-31 14:21:15'),
(7, 2, 5, '2018-08-31 14:21:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolumler`
--
ALTER TABLE `bolumler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolumler`
--
ALTER TABLE `bolumler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
