-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 09:24 AM
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
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

CREATE TABLE `contactdata` (
  `id` int(12) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Messages` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdata`
--

INSERT INTO `contactdata` (`id`, `Firstname`, `Lastname`, `Phone`, `Email`, `Messages`, `dt`, `file`) VALUES
(1, 'keshav', 'kochhar', '768839939', 'kochhar@gmail.com', 'hi', '2023-11-22 18:10:14', ''),
(2, 'parth', 'kochhar', '9989288930', 'kochharkeshav221@gmail.com', '', '2023-11-22 18:12:33', ''),
(3, 'muskan', 'Gupta', '99897674567', 'muskan3@gmail.com', '', '2023-11-22 19:11:24', ''),
(4, 'riya', 'rao', '76658898687', 'rao2@gmail.com', '', '2023-11-25 17:09:08', ''),
(5, 'disha', 'rao', '76658898687', 'rao2@gmail.com', '', '2023-12-05 19:50:28', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdata`
--
ALTER TABLE `contactdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdata`
--
ALTER TABLE `contactdata`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
