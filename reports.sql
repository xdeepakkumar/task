-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 09:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) NOT NULL,
  `income` int(20) NOT NULL,
  `expence` int(20) NOT NULL,
  `dt` date NOT NULL,
  `c_dt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `income`, `expence`, `dt`, `c_dt`) VALUES
(400, 25638, 20168, '2020-09-01', '2020-09-25'),
(401, 18365, 15036, '2020-09-02', '2020-09-25'),
(402, 35621, 36520, '2020-09-03', '2020-09-25'),
(403, 23620, 20653, '2020-09-04', '2020-09-25'),
(404, 36520, 18920, '2020-09-05', '2020-09-25'),
(405, 22090, 32604, '2020-09-06', '2020-09-25'),
(406, 35604, 10524, '2020-09-07', '2020-09-25'),
(407, 28638, 20168, '2020-09-09', '2020-09-25'),
(408, 18365, 13036, '2020-09-10', '2020-09-25'),
(409, 45621, 36520, '2020-09-11', '2020-09-25'),
(410, 43620, 40653, '2020-09-12', '2020-09-25'),
(411, 36520, 18920, '2020-09-13', '2020-09-25'),
(412, 28090, 31604, '2020-09-14', '2020-09-25'),
(413, 35604, 524, '2020-09-15', '2020-09-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
