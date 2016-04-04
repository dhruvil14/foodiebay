-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2014 at 11:43 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zomoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupan`
--

CREATE TABLE IF NOT EXISTS `coupan` (
`id` int(10) NOT NULL,
  `coupan` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`location_id` int(11) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `city_id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `city_id`) VALUES
(1, 'lajpatnagar', 1),
(2, 'kola', 1),
(3, 'sec-15', 3),
(4, 'sec-12', 3),
(5, 'sec-16', 3),
(6, 'sec-37', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`menu_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `rest_id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `item_name`, `rest_id`) VALUES
(1, 'rice', 4),
(2, 'starter', 4),
(3, 'rolls', 4),
(4, 'raita', 4),
(5, 'rice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
`id` int(10) NOT NULL,
  `userid` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ord` varchar(100) NOT NULL,
  `amoun` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `restro` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `userid`, `name`, `ord`, `amoun`, `date`, `restro`) VALUES
(2, '1', 'yogesh', '', '140', '2014-12-09', 'bihari'),
(3, '1', 'yogesh', '', '240', '2014-12-09', 'bihari'),
(4, ',hhh,', '$name', '', '$pric', '0000-00-00', '$restro'),
(5, ',jjjj', '$name', '', '$pric', '0000-00-00', '$restro'),
(6, '', '', ',jdnfkj,fbwfuw', '', '0000-00-00', ''),
(7, '1', 'yogesh', ',jeerarice,planepulao', '240', '2014-12-09', 'bihari'),
(8, '1', 'yogesh', ',chilly panner rolls,achari paneer tikka,jeerarice', '1340', '2014-12-09', 'bihari');

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE IF NOT EXISTS `rest` (
`rest_id` int(11) NOT NULL,
  `rest_name` varchar(200) NOT NULL,
  `location_id` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `area` varchar(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL,
  `open` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`rest_id`, `rest_name`, `location_id`, `address`, `area`, `type`, `cost`, `time`, `open`) VALUES
(1, 'pizza Hut', 6, 'Shop No.12 Jaipuria plaza marg, Sector 26, Noida', 'sector 26', 'chinees', '300', '30 min', '10:00 AM'),
(2, 'Dominoz', 1, '# 18, Ashish Corporate Tower, Karkarduma Community Centre, Delhi', 'lajpatnagar', 'indian', '400', '20 min', '11:00 Am'),
(3, 'punjabi ', 6, 'Ship No. 25, Block I, Ganga Shopping Complex, Sector 29, Noida', 'sector 37', 'south indian', '1200', '30 min', '12:00 AM'),
(4, 'bihari', 6, 'Shop No.109/107 Jaipuria plaza, Sector 26, Noida', 'sector 26', 'indian, south indian, chineese', '200', '10 min', '1:00 PM'),
(5, 'thali hut', 1, 'G-4, V3S Mall, Near Nirman Vihar Metro Station, Laxmi Nagar, New Delhi', 'nirman vihar', 'continental, indian', '400', '1 hr', '11:00 AM'),
(6, 'sharma', 2, 'Shop No.107 Jaipuria plaza, indrapuram, delhi', 'indrapuram', 'chineesse', '100', '2 hr', '11:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
`id` int(10) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `review` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `userid`, `name`, `review`) VALUES
(14, '1', 'yogesh', 'hadsgvhksdv'),
(15, '1', 'yogesh', 'hjcbsjdhbvjlsd'),
(16, '1', 'yogesh', 'yess its godd food'),
(17, '4', 'vinod', 'hi\r\n  its very yummy....'),
(18, '3', 'manoj', 'its provide very tasty food and good service...'),
(19, '1', 'yogesh', 'hi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `seek_city`
--

CREATE TABLE IF NOT EXISTS `seek_city` (
`city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `subcity_id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `seek_city`
--

INSERT INTO `seek_city` (`city_id`, `city_name`, `subcity_id`) VALUES
(1, 'Delhi', 0),
(2, 'Gurgaon', 0),
(3, 'Noida', 0),
(4, 'Chandigarh', 0),
(5, 'Ludhiana', 0),
(6, 'Jaipur', 0),
(7, 'Bangalore', 0),
(8, 'Chennai', 0),
(9, 'Hyderabad', 0),
(10, 'Mumbai', 0),
(11, 'Pune', 0),
(12, 'Kolkata', 0);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
`submenu_id` int(11) NOT NULL,
  `submenu_name` varchar(200) NOT NULL,
  `submenu_price` varchar(20) NOT NULL,
  `menu_id` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`submenu_id`, `submenu_name`, `submenu_price`, `menu_id`) VALUES
(1, 'jeerarice', '140', '1'),
(2, 'planepulao', '100', '1'),
(3, 'butter pulao', '160', '1'),
(4, 'peos pulao', '200', '1'),
(5, 'chilly panner rolls', '200', '3'),
(6, 'soya rolls', '100', '3'),
(7, 'achari paneer tikka', '1000', '3'),
(8, 'chilly tikka', '122', '3'),
(9, 'briyani', '200', '5');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
`id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `message`) VALUES
(2, 'yogesh gupta', '"Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo.'),
(3, 'vinod', 'hiu jhcjas ucgasc hudcbashucbqw chjwfbqw');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
`id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'yogesh', 'yogesh62000@gmail.com', '123456'),
(2, 'vinod', 'vinod@123', '123'),
(3, 'manoj', 'manoj@gmail.com', '123'),
(4, 'vinod', 'vinod@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupan`
--
ALTER TABLE `coupan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
 ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seek_city`
--
ALTER TABLE `seek_city`
 ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
 ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupan`
--
ALTER TABLE `coupan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
MODIFY `rest_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `seek_city`
--
ALTER TABLE `seek_city`
MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
