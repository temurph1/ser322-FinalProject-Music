-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 09:58 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `userId` int(11) NOT NULL,
  `songId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`userId`, `songId`) VALUES
(11, 2),
(11, 3),
(11, 4),
(15, 2),
(15, 9),
(15, 11),
(15, 14),
(18, 4),
(18, 5),
(18, 8),
(18, 11),
(18, 12),
(18, 14),
(18, 15),
(19, 2),
(19, 3),
(19, 11),
(19, 13);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `artist` varchar(25) NOT NULL,
  `album` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`) VALUES
(2, 'Work', 'Rihanna, Drake', ''),
(3, 'Don''t Let Me Down', 'The Chainsmokers, Daya', ''),
(4, 'Me, Myself & I', 'G-Eazy, Bebe Rexha', ''),
(5, '7 Years', 'Lukas Graham', ''),
(6, 'My House', 'Flo Rida', ''),
(7, 'Cake By The Ocean', 'DNCE', ''),
(8, 'Jumpman', 'Drake, Future', ''),
(9, 'Famous', 'Kanye West', ''),
(10, 'Stressed Out', 'Twenty One Pilots', ''),
(11, 'Never Be Like You', 'Flume, Kai', ''),
(12, 'Love Yourself', 'Justin Bieber', ''),
(13, 'Sorry', 'Justin Bieber', ''),
(14, 'One Dance', 'Drake, Wizkid, Kyla', ''),
(15, 'PILLOWTALK', 'Zayn', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES
(15, 'Tommy', 'Murphy', 'tommymurphy', 'tommy', 'tommy@gmail.com'),
(16, 'John', 'Smith', 'johnsmith', 'pw', 'johnsmith@gmail.com'),
(17, 'Bob', 'Smith', 'bobsmith', 'pw', 'bobsmith@yahoo.com'),
(18, 'John', 'Johnson', 'johnjohnson', 'pw', 'johnjohnson@gmail.com'),
(19, 'Steve', 'Smith', 'steve1234', 'pw', 'steve@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`userId`,`songId`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
