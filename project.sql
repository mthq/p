-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2012 at 04:06 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` char(15) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Restaurants'),
(2, 'Healt & Beauty'),
(3, 'Sport'),
(4, 'Shopping'),
(5, 'Food'),
(6, 'Electronics'),
(7, 'Clothing'),
(8, 'Night Life'),
(9, 'Motosport'),
(10, 'Pastries'),
(11, 'Toys'),
(12, 'Fasion');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `deal_id` int(10) NOT NULL AUTO_INCREMENT,
  `deal_name` varchar(20) NOT NULL,
  `deal_price` decimal(15,2) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `type_id` int(10) NOT NULL,
  `image_id` int(10) NOT NULL,
  PRIMARY KEY (`deal_id`),
  KEY `merchant_id` (`merchant_id`),
  KEY `type_id` (`type_id`),
  KEY `image_id` (`image_id`),
  KEY `cat_id` (`cat_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`deal_id`, `deal_name`, `deal_price`, `merchant_id`, `cat_id`, `type_id`, `image_id`) VALUES
(1, 'Samsung TV 40"', 320.00, 3, 6, 1, 0),
(2, 'Sony TV 32"', 340.00, 3, 6, 1, 0),
(3, 'Yamaha R1', 9.90, 12, 9, 1, 0),
(4, 'Cake', 17.99, 13, 10, 1, 0),
(5, 'Facial Therapy', 57.00, 11, 2, 1, 0),
(6, 'Lunch Menu', 6.99, 10, 5, 1, 0),
(7, 'Casual make up', 33.00, 14, 2, 1, 0),
(8, 'Hair Modeling', 49.99, 14, 2, 1, 0),
(9, 'Dietician Assesment', 24.99, 15, 2, 1, 0),
(10, 'Friut Therapy', 34.99, 11, 2, 1, 0),
(11, 'Sandwitch bar', 8.99, 10, 5, 1, 0),
(12, 'Angry Bird Toy', 11.99, 16, 11, 1, 0),
(13, 'Apple TV', 89.99, 3, 6, 1, 0),
(14, 'Friut Bar', 12.99, 15, 5, 1, 0),
(15, 'Baby Playground', 45.99, 16, 11, 1, 0),
(16, 'Freestyle Bike', 699.00, 16, 3, 1, 0),
(17, 'Burger meal', 5.00, 10, 5, 1, 0),
(18, 'Epson Multi-Printer', 69.99, 3, 6, 1, 0),
(19, 'Jelly Sweets', 9.99, 13, 10, 1, 0),
(20, 'Healthy burger', 12.99, 11, 5, 1, 0),
(21, 'French Fries', 3.99, 10, 5, 1, 0),
(22, 'Diner for two', 27.99, 17, 1, 1, 0),
(23, 'Friuts', 2.99, 8, 5, 1, 0),
(24, 'Vegatables', 1.99, 8, 5, 1, 0),
(25, 'Grilled chicken', 4.99, 8, 5, 1, 0),
(26, 'Gym Class', 10.00, 15, 2, 1, 0),
(27, 'Relax Theraphy', 39.99, 11, 2, 1, 0),
(28, 'Golf Clubs', 89.99, 7, 3, 1, 0),
(29, 'Dress', 29.99, 5, 12, 1, 0),
(30, 'Tenis racket', 35.99, 7, 3, 1, 0),
(31, 'Shoe Heels', 49.99, 1, 12, 1, 0),
(32, 'Dress', 39.99, 5, 12, 1, 0),
(33, 'Night out All inclus', 100.00, 18, 8, 1, 0),
(34, 'Disco', 8.00, 18, 8, 1, 0),
(35, 'Dress', 25.99, 5, 12, 1, 0),
(36, 'Gaelic Football', 19.99, 7, 3, 1, 0),
(37, 'Basketball Shoes', 49.99, 4, 3, 1, 0),
(38, 'Hurling bat', 19.99, 7, 3, 1, 0),
(39, 'Tenis racket', 50.00, 7, 3, 1, 0),
(40, 'Shoe heels', 89.99, 1, 12, 1, 0),
(41, 'Music Festival', 55.99, 18, 8, 1, 0),
(42, 'Active Shoes', 39.99, 4, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(20) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `images`
--


-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE IF NOT EXISTS `merchants` (
  `merchant_id` int(10) NOT NULL AUTO_INCREMENT,
  `mer_name` varchar(20) NOT NULL,
  `mer_address` varchar(30) NOT NULL,
  `mer_phone` varchar(12) NOT NULL,
  PRIMARY KEY (`merchant_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`merchant_id`, `mer_name`, `mer_address`, `mer_phone`) VALUES
(1, 'Wacky Shoes', '21 Jellow road', '05103234'),
(2, 'DIY', '2 Grange', '05135683'),
(3, 'PC World', '15 Cork Road', '05123423'),
(4, 'Azzure', '7 Kilcohan', '05143032'),
(5, 'River Island', '8 Johns Street', '05143232'),
(6, 'Woodies', '5 Tramore Road', '05132833'),
(7, 'Elverys', '13 Friday Street', '05123234'),
(8, 'Super Quinn', '1 Tramore Road', '05132955'),
(9, 'Footlocker', '3 Main Street', '05183738'),
(10, 'Instore', '8 Tramote Road', '05132385'),
(11, 'Spa Center', '12 Quay', '05100231'),
(12, 'Harley Motors', '77 Slim Road', '05120012'),
(13, 'Emmas Sweets', '1 Sweet Street', '05122222'),
(14, 'Nice Look Stylist', '5 Beauty Street', '05125324'),
(15, 'Well Being Center', '12 Healthy Street', '05123298'),
(16, 'Smyths', '8 Tramore Road', '05198345'),
(17, 'Bodega', '7 Michael Street', '05178234'),
(18, 'The Forum', '2 Circle Street', '05156473');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(3) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(15) NOT NULL DEFAULT 'Deal',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Deal'),
(2, 'Daily Deal'),
(3, 'Coupon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(12) NOT NULL,
  `surname` varchar(12) NOT NULL,
  `acc_type` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `surname`, `acc_type`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 2, 'admin', 'admin@admin.com', 'admin'),
(2, 'tom', 'tom', 1, 'tom', 'jkashdjksah@jsdh.ie', 'tom'),
(3, 'sut', 'sut', 1, 'sut', 'jkashdjksah@jsdh.ie', 'sut'),
(4, 'tor', 'tor', 1, 'tor', 'jkashdjksah@jsdh.ie', 'tor'),
(5, 'ray', 'ray', 1, 'ray', 'jkashdjksah@jsdh.ie', 'ray');
