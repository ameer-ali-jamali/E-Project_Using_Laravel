-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2022 at 08:18 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `issueDate` varchar(55) NOT NULL,
  `authorName` varchar(55) NOT NULL,
  `authorEmail` varchar(55) NOT NULL,
  `description` varchar(101) NOT NULL,
  `file` varchar(100) NOT NULL,
  `image` varchar(55) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `issueDate`, `authorName`, `authorEmail`, `description`, `file`, `image`, `updated_at`, `created_at`) VALUES
(7, 'Ameer_alihhhh', '2022-12-26T13:06', 'James Dollen', 'khanhmdkhn13@gmail.com', 'Living In the Light', 'assests/booksPdf/book.pdf', 'book/images/image (1).jpg', '2022-12-26', '2022-12-26'),
(8, 'Ameer_alihhhh', '2022-12-26T13:06', 'James Dollen', 'khanhmdkhn13@gmail.com', 'Living In the Light', 'assests/booksPdf/book.pdf', 'book/images/image (1).jpg', '2022-12-26', '2022-12-26'),
(9, 'Ameer_alihhhh', '2022-12-26T13:06', 'James Dollen', 'khanhmdkhn13@gmail.com', 'Living In the Light', 'assests/booksPdf/book.pdf', 'book/images/image (1).jpg', '2022-12-26', '2022-12-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
