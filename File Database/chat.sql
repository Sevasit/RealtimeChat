-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 06:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(43, 17928795, 380495260, '1'),
(44, 17928795, 380495260, '2'),
(45, 380495260, 17928795, '1'),
(46, 380495260, 17928795, '3'),
(47, 17928795, 380495260, '1'),
(48, 17928795, 380495260, 'หวัดดี'),
(49, 380495260, 17928795, 'ครับ'),
(50, 17928795, 380495260, '5555555555555555555555555'),
(51, 17928795, 380495260, 'มากกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกครับ'),
(52, 17928795, 380495260, 'suuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuugarrrrrrrrrrrrrrrrrrr'),
(53, 380495260, 17928795, 'ครับ'),
(54, 380495260, 17928795, 'ครับ'),
(55, 380495260, 17928795, 'ครับ'),
(56, 380495260, 17928795, 'ครับ'),
(57, 380495260, 17928795, 'ครับ'),
(58, 380495260, 17928795, 'หรอ'),
(59, 380495260, 17928795, 'หรอ'),
(60, 380495260, 17928795, 'หรอ'),
(61, 380495260, 17928795, 'หรอ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 17928795, 'Sevasit', 'Senpradit', 'new12253952@gmail.com', '0991588559', '1656513019new.jpg', 'Active now'),
(3, 410337857, 'Jason', 'Tan', 'jason_tan@gmail.com', '123456', '1656513451new.jpg', 'Offline now'),
(4, 380495260, 'BB', 'SS', '123@gmail.com', '123456', '1656559993hqdefault.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
