-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 12:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_p5_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_game_score`
--

CREATE TABLE `tbl_game_score` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_game_score`
--

INSERT INTO `tbl_game_score` (`id`, `userId`, `score`) VALUES
(1, 1, 1),
(2, 1, 8),
(3, 1, 2),
(4, 1, 12),
(5, 1, 3),
(6, 1, 3),
(7, 1, 1),
(8, 1, 1),
(9, 1, 2),
(10, 1, 2),
(11, 1, 2),
(12, 1, 2),
(13, 1, 1),
(14, 1, 1),
(15, 1, 2),
(16, 1, 2),
(17, 1, 1),
(18, 1, 1),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1),
(28, 1, 2),
(29, 1, 1),
(30, 1, 1),
(31, 1, 2),
(32, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'k1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'kamal', '2022-05-04 19:28:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_game_score`
--
ALTER TABLE `tbl_game_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_game_score`
--
ALTER TABLE `tbl_game_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
