-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 02:21 AM
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
(2, 'Humor', 'Just remember... if we get caught, you\'re deaf and I don\'t speak English.', 'PEN', 'speak.jpg'),
(3, 'Humor', 'I love you more than pizza.', 'TIM', 'pizza.jpg'),
(4, 'Romance', 'If snowflakes were kisses, I\'d send you a blizzard.', 'PAT', 'snowflakes.jpg'),
(5, 'Romance', 'You + me = Happiness forever.', 'TOM', 'happiness.jpg'),
(6, 'Humor', 'Sorry, I dropped my phone and I can\'t find it. I\'ll text you when I find it.', 'PAN', 'dropped.jpg'),
(7, 'Birthdays', 'I wish you a year full of good surprises, joy, and laughter. Happy Birthday!', 'KJK', 'joy.jpg'),
(8, 'Congratulations', 'Congratulations! Hard work pays off and you have proved it. Wish you all the best.', 'LAN', 'work.jpg'),
(9, 'Apologies', 'I\'m not perfect, I make mistakes, I hurt people, but when I say sorry, I actually mean it.', 'KIM', 'mistakes.jpg'),
(10, 'Birthdays', 'I never thought I\'d love anything more than ice cream, until I found you. Wishing you the best birthday ever! Happy Birthday!', 'OLI', 'icecream.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `reviewId` int(11) NOT NULL,
  `messageId` int(11) NOT NULL,
  `date` date NOT NULL,
  `review` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `messageId`, `date`, `review`) VALUES
(1, 2, '2018-02-01', 'When you can\'t think of something amazing to say, this is perfect for any time you are separated from those you care about.'),
(2, 4, '2017-12-29', 'Very original! I love this one.'),
(4, 0, '2018-03-01', 'This one is my favorite!'),
(5, 6, '2018-03-01', 'I think this one is too funny!'),
(7, 5, '2018-03-01', 'I think this one is great!');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors` (
  `visitorId` int(11) NOT NULL,
  `signature` varchar(512) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitorId`, `signature`, `date`) VALUES
(2, 'kjkraus', '2018-02-28'),
(3, 'deangelo', '2018-02-01'),
(4, 'Thomas Jardy', '2018-02-11'),
(5, 'saraline t.', '2017-12-01'),
(6, 'Pamela Green', '2018-01-31');

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
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitorId`);

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
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
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