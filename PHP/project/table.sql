-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2022 at 05:39 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalai`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id`, `name`, `email`, `password`, `image`) VALUES
(10, 'goldking', 'gold@gmail.com', '0987', 'upload/1670606292IMG_20220303_232307_compress7.jpg'),
(9, 'gold', 'kala@gmail.com', '123', 'upload/1670605728IMG_20220303_232307_compress7.jpg'),
(7, 'kalai', 'kalai@gmail.com', '0987', 'upload/16706046352126.jpg'),
(8, 'selva', 'selva@gmail.com', '1234', 'upload/16706048612162.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
