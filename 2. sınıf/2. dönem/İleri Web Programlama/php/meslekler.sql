-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2017 at 12:15 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `udemy_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `meslekler`
--

CREATE TABLE `meslekler` (
  `id` int(11) UNSIGNED NOT NULL,
  `meslek` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meslekler`
--

INSERT INTO `meslekler` (`id`, `meslek`) VALUES
(1, 'Developer'),
(2, 'Usta'),
(3, 'Sanatçı');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meslekler`
--
ALTER TABLE `meslekler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meslekler`
--
ALTER TABLE `meslekler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;