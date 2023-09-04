-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 03:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directionsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `directionvalues`
--

CREATE TABLE `directionvalues` (
  `data_id` int(11) NOT NULL,
  `direction` char(10) NOT NULL,
  `distance` int(10) NOT NULL,
  `input_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `directionvalues`
--

INSERT INTO `directionvalues` (`data_id`, `direction`, `distance`, `input_time`) VALUES
(1, 'forward', 1, '2023-09-04 01:34:33'),
(2, 'forward', 1, '2023-09-04 01:34:34'),
(3, 'right', 1, '2023-09-04 01:34:35'),
(4, 'right', 1, '2023-09-04 01:34:35'),
(5, 'left', 1, '2023-09-04 01:34:36'),
(6, 'left', 1, '2023-09-04 01:34:39'),
(7, 'forward', 1, '2023-09-04 01:34:43'),
(8, 'right', 1, '2023-09-04 01:34:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directionvalues`
--
ALTER TABLE `directionvalues`
  ADD PRIMARY KEY (`data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `directionvalues`
--
ALTER TABLE `directionvalues`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
