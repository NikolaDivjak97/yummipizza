-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2020 at 07:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zadatak`
--

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

DROP TABLE IF EXISTS `narudzba`;
CREATE TABLE IF NOT EXISTS `narudzba` (
  `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customers_order` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `prize` varchar(10) NOT NULL,
  `comment` varchar(250) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`order_id`, `customer_name`, `customers_order`, `phone`, `address`, `prize`, `comment`) VALUES
(1, 'John Doe', 'Margherita - 1', '+38766555444', 'Main Street 5', '', 'Extra ketchup'),
(15, 'John Malkovich', 'Margherita - 1<br>Capricciosa - 1<br>Prosciutto - 2<br>Quattro Formaggi - 1<br>', '065111222', 'Main Street', '55.0', 'Filled crust please');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
