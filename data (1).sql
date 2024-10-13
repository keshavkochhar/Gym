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
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Sno` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Sno`, `name`, `email`, `address`, `phone`, `payment_method`, `dt`) VALUES
(1, 'keshav', 'kochhar23@gmail.com', 'new delhi', '8546922665', 'upi', '2023-11-25 16:02:11'),
(22, '.muskan.', '.muskan3@gmail.com.', '.vikas puri.', '.9989288930.', '.upi.', '2023-11-25 18:10:20'),
(23, '.naman.', '.naman2@gmail.com.', '.rani bagh.', '.77487697698.', '.debit-card.', '2023-11-25 18:26:29'),
(26, '.anamay.', '.anamay@gmail.com.', '.Dwarka.', '.23433564565.', '.credit-card.', '2023-11-25 20:22:00'),
(27, '.shalini.', '.shalini.singh@daffodilsw.com.', '.janakpuri.', '.9989288930.', '.paytm.', '2023-11-25 20:37:12'),
(28, '.disha.', '.disha1@gmail.com.', '.Dwarka.', '.25456698622.', '.debit-card.', '2023-12-05 19:48:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
