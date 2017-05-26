-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2017 at 07:12 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `region` text NOT NULL,
  `event_address` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(100) NOT NULL,
  `id_status` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `blood_type` text NOT NULL,
  `rhesus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_status`, `username`, `name`, `sex`, `email`, `password`, `address`, `phone_number`, `blood_type`, `rhesus`) VALUES
(1, 0, 'cokbun', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0),
(2, 0, 'kocak', '', 0, 'jems.p14@gmail.com', '3f1169ac7339dbbedb422f2f54347a0e', '', '', '', 0),
(5, 0, 'coklat', '', 0, 'san@gmail.com', '3f1169ac7339dbbedb422f2f54347a0e', '', '', '', 0),
(8, 0, 'haha', 'haha', 0, 'tod@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(9, 0, 'wkwkw', 'mwu', 0, 'mu@gmail.com', '3c59dc048e8850243be8079a5c74d079', '', '', '', 0),
(10, 0, '21', 'waka', 0, 'waka@gmail.com', '3c59dc048e8850243be8079a5c74d079', '', '', '', 0),
(21, 0, 'pramesywara21', 'Pramesywara J', 0, 'jems.p13@gmail.com', '3f1169ac7339dbbedb422f2f54347a0e', '', '', '', 0),
(22, 1, 'wek', 'cokbun', 0, 'waha@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(23, 1, 'jek', 'Asik', 0, 'jojo@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(24, 1, 'bellakor', 'bella kurnia gatau', 0, 'bella@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
