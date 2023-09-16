-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 12:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_for_comments`
--

CREATE TABLE `tbl_for_comments` (
  `comment_id` int(120) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `user_id` int(50) NOT NULL,
  `art_id` int(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `commented_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_for_comments`
--

INSERT INTO `tbl_for_comments` (`comment_id`, `comment`, `user_id`, `art_id`, `username`, `commented_at`) VALUES
(1, 'great', 1, 4, 'Test', '2023-09-14 18:35:56'),
(5, 'Wonderful', 2, 4, 'Test02', '2023-09-14 18:45:37'),
(6, 'Superb', 4, 4, 'Test03', '2023-09-14 19:20:58'),
(7, 'Special work', 1, 5, 'Test', '2023-09-16 06:37:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_for_comments`
--
ALTER TABLE `tbl_for_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_for_comments`
--
ALTER TABLE `tbl_for_comments`
  MODIFY `comment_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
