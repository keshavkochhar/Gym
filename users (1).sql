-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sno` int(30) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `username`, `password`, `dt`) VALUES
(1, 'Keshav', '123', '2023-11-21 17:16:43'),
(2, 'parth', '23', '2023-11-21 17:17:34'),
(3, 'muskan', '$2y$10$4Bv/6eNhSZSg0QUd', '2023-11-21 17:19:11'),
(4, 'gargi', '$2y$10$LyavEuzZbPABqP7d', '2023-11-21 17:38:24'),
(5, 'd', '$2y$10$yrxBOUmzCbxiJ546', '2023-11-21 17:54:17'),
(6, 'vibhor', '$2y$10$Cr8PKupL3iZRgzX3', '2023-11-21 18:05:19'),
(7, 'secure', '$2y$10$IfLDCKM3WCsER4K9gtaFguNPvNbPq7FrMTtfS0l66zdchEdLDY/fm', '2023-11-22 14:10:57'),
(8, 'keshav1', '$2y$10$TMvhF7D78a0Y98LA9GEs9OnvR7LrX.0bi2pr90xLr7XVoNwgvtES2', '2023-11-22 14:18:15'),
(9, 'disha', '$2y$10$hRDohElvkIlgh9lUxFIDw.t8cM9q7Tzf2LP/BFMZFHytV.VCs5yXC', '2023-12-05 19:47:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Sno` (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
