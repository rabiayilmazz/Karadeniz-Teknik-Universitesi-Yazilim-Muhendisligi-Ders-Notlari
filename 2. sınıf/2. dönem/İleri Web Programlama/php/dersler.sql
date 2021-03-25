-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2017 at 01:30 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dersler`
--

-- --------------------------------------------------------

--
-- Table structure for table `dersler`
--

CREATE TABLE `dersler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `kategori_id` varchar(255) NOT NULL,
  `onay` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dersler`
--

INSERT INTO `dersler` (`id`, `baslik`, `icerik`, `kategori_id`, `onay`, `tarih`) VALUES
(7, 'test başlık', 'test içerik', '3,4,5', 1, '2017-12-13 22:02:24'),
(8, 'ahmet abi', 'test ahmet abi', '2,3,6', 1, '2017-12-13 09:56:20'),
(9, 'şeker kız candy', 'deneme bir içerik', '4,6', 1, '2017-12-05 09:56:28'),
(10, 'kimdir bu ahmet ve nereden geldi?', 'kimse bilmez, kimse bilmez..', '2', 1, '2017-12-15 09:56:40'),
(11, 'yılmaz morgül vakası?', 'nasıl yani, ne olmuş ki ona..', '3,5', 1, '2017-12-05 09:56:49'),
(12, 'test php başlık', 'içerik', '4,6', 1, '2017-12-02 10:11:34'),
(13, 'test içerik', 'tes t ew twet we wt', '2,3,6', 1, '2017-12-15 10:33:51'),
(14, ' 222 . test', 'test', '3,7,4,5', 1, '2017-12-16 10:42:07'),
(15, 'tayfun', 'tayfun', '7,4', 1, '2017-12-16 11:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `ad`) VALUES
(2, 'Blog'),
(3, 'CSS'),
(4, 'PHP'),
(5, 'Udemy'),
(6, 'Test'),
(7, 'deneme tayfun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dersler`
--
ALTER TABLE `dersler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
