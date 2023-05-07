-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thongtin`
--
CREATE DATABASE IF NOT EXISTS `thongtin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thongtin`;

-- --------------------------------------------------------

--
-- Table structure for table `ttsp`
--

CREATE TABLE `ttsp` (
  `id` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `gia` int(50) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `mota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ttsp`
--

INSERT INTO `ttsp` (`id`, `img`, `gia`, `ten`, `mota`) VALUES
(9, 'anh1-1682868792.jfif', 550000, 'Chuột có dây Gaming', 'Kết nối dây USB'),
(11, 'anh3-1683113310.jpg', 650000, 'Headphone', 'Tai nghe bản mới chống ồn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ttsp`
--
ALTER TABLE `ttsp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ttsp`
--
ALTER TABLE `ttsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
