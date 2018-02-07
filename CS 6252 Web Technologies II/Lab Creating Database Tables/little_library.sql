-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 03:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `little_library`
--
CREATE DATABASE IF NOT EXISTS `little_library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `little_library`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `bookID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `libraryID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `categoryID`, `libraryID`, `title`, `author`, `image`, `publisher`, `pages`, `cost`) VALUES
(0, 2, 2, 'Moon Atlanta', 'Tray Butler', 'book_0.jpg', 'Moon Travel', 260, '12.83'),
(1, 4, 1, 'Green Eggs and Ham', 'Dr. Seuss', 'book_1.jpg', 'Random House', NULL, '6.73'),
(2, 4, 1, 'Harry Potter and the Chamber of Secrets', 'J. K. Rowling', 'book_2.jpg', 'Scholastic', 341, '7.48'),
(3, 4, 1, 'Harry Potter and the Scorecerer\'s Stone', 'J. K. Rowling', 'book_3.jpg', 'Scholastic', 309, '7.48'),
(4, 0, 0, 'The Dark Tower', 'Stephen King', 'book_4.jpg', 'Pocket Books', 528, '5.25'),
(5, 0, 0, 'Sense and Sensibility', 'Jane Austin', 'book_5.jpg', 'Classic Books Publishing', 222, '9.62'),
(6, 4, 1, 'The Cat in the Hat', 'Dr. Seuss', NULL, NULL, NULL, '6.75'),
(7, 3, 1, 'The Merriam-Webster Dictionary', 'Merriam-Webster', NULL, 'Merriam-Webster', 939, '66.00'),
(8, 5, 3, 'White House Diary', 'J. Carter', 'book_8.jpg', 'Farrar, Straus and Giroux', 952, '26.50'),
(9, 1, 2, 'Jimmy Carter', 'J. E. Zelizer', NULL, 'Times Books', 208, '17.55'),
(10, 5, 2, 'Christmas in Plains: Memories', 'J. Carter', NULL, 'Simon & Schuster', 160, '9.90');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(0, 'Fiction'),
(1, 'Biographies'),
(2, 'Travel'),
(3, 'Dictionaries'),
(4, 'Children'),
(5, 'History'),
(6, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

DROP TABLE IF EXISTS `libraries`;
CREATE TABLE `libraries` (
  `libraryID` int(11) NOT NULL,
  `libraryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`libraryID`, `libraryName`) VALUES
(0, 'Adamson Square'),
(1, 'City Schools'),
(2, 'Senior Center'),
(3, 'Water Park');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `messageID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `libraryID` int(11) NOT NULL,
  `comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `libraryID` (`libraryID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`libraryID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `libraryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- create the users and grant privileges to those users
--
GRANT SELECT, INSERT, DELETE, UPDATE
ON little_library.*
TO librarian@localhost
IDENTIFIED BY 'b00kw0rm';

GRANT SELECT
ON little_library.books
TO patron@localhost
IDENTIFIED BY 'r3ad3r';

GRANT SELECT
ON little_library.categories
TO patron@localhost
IDENTIFIED BY 'r3ad3r';

GRANT SELECT
ON little_library.libraries
TO patron@localhost
IDENTIFIED BY 'r3ad3r';

