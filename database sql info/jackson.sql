-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 07:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jackson`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `listing_id` int(11) NOT NULL,
  `subject` enum('CSC 118','CSC 119','CSC 225','CSC 228','CSC 214','CSC 216','CSC 312','CSC 323','CSC 325','CSC 330','CSC 435','CSC 437','CSC 441','CSC 450','CSC 475','CSC 499') NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `edition` int(11) NOT NULL,
  `quality` enum('Poor','Okay','Average','Good','Very Good','Excellent') NOT NULL,
  `actions` enum('Buy','Sell','Trade','') NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`listing_id`, `subject`, `price`, `isbn`, `author`, `title`, `edition`, `quality`, `actions`, `email_user`, `id`) VALUES
(43, 'CSC 118', '10.00', '12342134123423', 'Me', 'How to do something', 15, 'Poor', 'Sell', '', 2),
(57, 'CSC 118', '4.56', '324', 'maybe', 'come on', 5, 'Poor', 'Buy', 'dfaj@example.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'raven', 'ravenlawrence7@aol.com', '2a447b1649050ad6023e40ba15c7eeba', '2017-03-21 21:38:21'),
(2, 'jason', 'jasondreams0513@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2017-03-22 20:16:02'),
(3, 'test', 'test@email.com', '098f6bcd4621d373cade4e832627b4f6', '2017-03-24 10:28:59'),
(4, 'xbox', 'xbox@email.com', '3a3417f5f20a03a98973689887fb72a2', '2017-03-24 11:13:00'),
(5, 'mom', 'mom@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2017-03-27 19:25:49'),
(6, 'xpxo', 'jasonsmells@hotmail.co.xpxo', 'c2f69402f8774b673bee06c4b3dce5d4', '2017-03-28 01:46:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`listing_id`),
  ADD KEY `fk_userid_books` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `listing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_userid_books` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
