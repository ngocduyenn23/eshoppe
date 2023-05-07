-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 05:38 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `sigup`
--

CREATE TABLE `sigup` (
  `ten` varchar(100) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `passs` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sigup`
--

INSERT INTO `sigup` (`ten`, `pass`, `passs`, `id`) VALUES
(NULL, NULL, '$2y$10$unHuCbm9aGVA1qCl/ti6Iebg/uTA6O1fq5MAnS0Oj1M80/cK/pgI6', 1),
(NULL, NULL, '$2y$10$ADAbyNeuOJS3BuA0.Q.NduOc2LhIn718i5Zu8AEtbHFuo.FUrZ8KS', 2),
(NULL, NULL, '$2y$10$URSaLprHNtgSgVbyurAIaOL3rOdJ2tYuzYxXnBloTQc.HQxmZ8rDW', 3),
(NULL, NULL, '$2y$10$g/NSij0pLb5uAu1MBqWxfuSTmju4lsIIYf1W1QcdePWf/X6FIMh0O', 4),
(NULL, NULL, '$2y$10$w.EJ83CqYIa/GA0z0SATIuHFJMHNUXFIaPbuMLCe4Pl6ciouWpkdK', 5),
(NULL, NULL, '$2y$10$1aJ3SdTX3LwWczPWGV9mQ.dRf8n06qau78ffnNYF9vSUKlFHZDEmm', 6),
(NULL, '1234', '$2y$10$FB7kpujqxH/l9pcNPW7/suGNrjtCluhIzKquikRH.yY3JZb5MeOQm', 7),
('1234', '1234', '$2y$10$LFcoDMQk5xmoDB5HJWOOIeqQBdRNUJxUCUVNaCbFCQkqGW7KaStKy', 8),
('12345', '12345', '$2y$10$CaMwSlMkhcbfT4iFJtxbX.oLRbfQ6U5hB1mgZh8Az/jrZqP04j9aO', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sigup`
--
ALTER TABLE `sigup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sigup`
--
ALTER TABLE `sigup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
