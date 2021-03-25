-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2017 at 10:02 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `udemy_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `calisanlar`
--

CREATE TABLE `calisanlar` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `meslek` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `maas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calisanlar`
--

INSERT INTO `calisanlar` (`id`, `ad`, `soyad`, `meslek`, `sehir`, `maas`) VALUES
(1, 'Tayfun', 'Erbilen', 'Developer', 'Eskişehir', 2000),
(2, 'Ahmet', 'Gergin', 'Usta', 'Eskişehir', 2400),
(3, 'Fuat', 'Aydın', 'Usta', 'Eskişehir', 1800),
(4, 'İbrahim', 'Yavaş', 'Aşçı', 'Adana', 2700),
(5, 'Bülent', 'Erson', 'Sanatçı', 'Adana', 2400),
(6, 'Hakan', 'Sakallı', 'Aşçı', 'İstanbul', 6000),
(7, 'Mehmet', 'Seven', 'Developer', 'İstanbul', 8500),
(8, 'Batuhan', 'Aydın', 'Developer', 'İstanbul', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calisanlar`
--
ALTER TABLE `calisanlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calisanlar`
--
ALTER TABLE `calisanlar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;