-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 06:14 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `top_line_communications`
--
CREATE DATABASE IF NOT EXISTS `top_line_communications` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `top_line_communications`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `category`, `message`, `author`, `image`) VALUES
(1, 'Romance', 'I can\'t get rid of that smile you gave me this morning.', 'BIN', 'smile.jpg'),
(2, 'Romance', 'Just wanted to say I\'m thinking of you.', 'BAB', 'thinking.jpg'),
(3, 'Humor', 'I love you more than pizza.', 'TIM', 'pizza.jpg'),
(4, 'Romance', 'If snowflakes were kisses, I\'d send you a blizzard.', 'PAT', 'snowflakes.jpg'),
(5, 'Romance', 'You + me = Happiness forever.', 'TOM', 'happiness.jpg'),
(6, 'Humor', 'Sorry, I dropped my phone and I can\'t find it. I\'ll text you when I find it.', 'PAN', 'dropped.jpg'),
(7, 'Birthdays', 'I wish you a year full of good surprises, joy, and laughter. Happy Birthday!', 'KJK', 'joy.jpg'),
(8, 'Congratulations', 'Congratulations! Hard work pays off and you have proved it. Wish you all the best.', 'LAN', 'work.jpg'),
(9, 'Apologies', 'I\'m not perfect, I make mistakes, I hurt people, but when I say sorry, I actually mean it.', 'KIM', 'mistakes.jpg'),
(10, 'Apologies', 'I\'m sorry. It\'s my fault. What can I do to make it right?', 'KEN', 'right.jpg'),
(11, 'Humor', 'Just remember... if we get caught, you\'re deaf and I don\'t speak English.', 'PEN', 'speak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `reviewId` int(11) NOT NULL,
  `messageId` int(11) NOT NULL,
  `date` date NOT NULL,
  `review` varchar(3000) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `messageId`, `date`, `review`, `rating`) VALUES
(1, 2, '2018-02-01', 'When you can\'t think of something amazing to say, this is perfect for any time you are separated from those you care about.', 4),
(2, 4, '2017-12-29', 'Very original! I love this one.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors` (
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`firstName`, `lastName`, `email`) VALUES
('Kent', 'K', 'kkraus2@my.westga.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- create the users and grant privileges to those users
--
GRANT SELECT, INSERT, DELETE, UPDATE
ON top_line_communications.*
TO tlccurator@localhost
IDENTIFIED BY 'm0rem3ssag3s';