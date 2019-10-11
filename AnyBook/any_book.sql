-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 02:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `any_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `writer_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `book_price` double NOT NULL,
  `on_sale` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `book_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `writer_name`, `path`, `book_price`, `on_sale`, `best_seller`, `book_description`) VALUES
(1, 'c', 'Herbert Schildt', 'img/programming/c.jpg', 34.99, 0, 0, 'One of the most best book to learn c programming'),
(2, 'c++', 'Herbert Schildt', 'img/programming/c++.jpg', 49.99, 0, 0, 'one of the best book to learn c++'),
(3, 'c-sharp ', 'Herbert Schildt', 'img/programming/c-sharp.jpeg', 39.99, 0, 0, 'one of the best book to learn c sharp'),
(4, 'java', 'Herbert Schildt', 'img/programming/java.jpg', 49.99, 0, 0, 'one of the best book to learn java'),
(5, 'body-langulage', 'Allan & Pease', 'img/body-langulage.jpeg', 29.99, 0, 0, 'alkdjf akdjfakl fakjdlkajdklfjaldskfj'),
(6, 'Harry Potter 1', 'J. K. Rowling', 'img/hp-1.png', 29.99, 0, 0, 'Best seller book'),
(7, 'Harry Potter 2', 'J. K. Rowling', 'img/hp-2.png', 29.99, 0, 0, 'Best seller book'),
(8, 'Harry Potter 3', 'J. K. Rowling', 'img/HP-3.png', 29.99, 0, 0, 'Best seller book'),
(9, 'Harry Potter 4', 'J. K. Rowling', 'img/HP-4.png', 29.99, 0, 0, ''),
(10, 'Motivate Others', 'steve chandler', 'img/100-ways-motivate-others.jpg', 25.99, 1, 1, ''),
(11, 'subconscious mind', 'DR. Jospeh Murphy', 'img/subconscious-mind.jpeg', 25.5, 1, 1, ''),
(12, 'the-power of habit', 'Charles Duhigg', 'img/the-power-of-habit.jpg', 29.99, 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(6, 'Shahriar Moin', 'shahriarmoin.aust@gmail.com', '01719313097', 'this is working', '2019-10-11 02:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `phone`, `password`, `created_date`, `status`) VALUES
(11, 'moin', 'moin@gmail.com', '1521429409', '06a998cdd13c50b7875775d4e7e9fa74', '2019-10-08 12:25:32', 1),
(12, 'shahriar', 'shahriar@gmail.com', '1521429409', '3ca31dfb8c0b68860facc2fa2a83265d', '2019-10-08 12:33:18', 1),
(13, 'shahriar_moin', 'shahriarmoin.aust@gmail.com', '1719313097', '1f7f356811c769a4c073eee05731a474', '2019-10-11 02:24:02', 1),
(14, 'tisha', 'tisha@gmail.com', '1618659856', '05e1ae75ec96e66511116a280ddee34e', '2019-10-11 18:55:50', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
