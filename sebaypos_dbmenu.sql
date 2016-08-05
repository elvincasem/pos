-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2016 at 12:24 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sebaypos_dbmenu`
--
CREATE DATABASE IF NOT EXISTS `sebaypos_dbmenu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sebaypos_dbmenu`;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`categoryid`, `category_name`) VALUES
(1, 'BREAKFAST'),
(2, 'APPETIZER'),
(3, 'SALAD'),
(4, 'SIZZLERS'),
(5, 'INIHAW'),
(6, 'PORK'),
(7, 'BEEF'),
(8, 'SOUP'),
(9, 'VEGETABLES'),
(10, 'RICE MEALS'),
(11, 'SANDWICHES'),
(12, 'NOODLES'),
(13, 'DESSERTS'),
(14, 'DRINKS'),
(15, 'BEER'),
(16, 'ICE CREAM SHAKES'),
(17, 'LIQUORS AND WINES'),
(18, 'EXTRA'),
(19, 'CIGARETTE'),
(20, 'ICE CREAM');

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE IF NOT EXISTS `tblmenu` (
  `menuid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`menuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=376 ;

--
-- Dumping data for table `tblmenu`
--

INSERT INTO `tblmenu` (`menuid`, `categoryid`, `menu_name`, `cost`, `price`) VALUES
(1, 1, 'Toast Bread with Butter and Marmalade', 75, 75),
(2, 1, 'Omelette', 225, 225),
(3, 1, 'Silog', 149, 149),
(4, 1, 'Breakfast Buffet', 169, 169),
(5, 1, 'American Breakfast', 179, 179),
(6, 2, 'French Fries', 109, 109),
(7, 2, 'Spicy Beef Tapa', 259, 259),
(8, 2, 'Calamares Fritos', 229, 229),
(9, 2, 'Kilawen Tanique', 229, 229),
(10, 2, 'Sashimi', 179, 179),
(11, 2, 'Chicken in the Basket', 279, 279),
(12, 3, 'Coleslaw', 69, 69),
(13, 3, 'Green Tossed Salad (Plain)', 119, 119),
(14, 3, 'Green Tossed Salad (Ham and Cheese)', 129, 129),
(15, 3, 'Green Tossed Salad (Grilled Chicken)', 139, 139),
(16, 4, 'Sizzling Pork Sisig', 249, 249),
(17, 4, 'Sizzling Fish Sisig', 249, 249),
(18, 4, 'Sizzling Chicken', 249, 249),
(19, 4, 'Sizzling Gambas', 299, 299),
(20, 4, 'Sizzling Pusit', 249, 249),
(21, 4, 'Sizzling Pusit Curry', 249, 249),
(22, 4, 'Sizzling Hipon Curry', 299, 299),
(23, 4, 'Sizzling Tanique', 229, 229),
(24, 5, 'Inihaw na Pusit', 249, 249),
(25, 5, 'inihaw na Liempo', 299, 299),
(26, 5, 'Inihaw na Pork Chop', 199, 199),
(27, 5, 'Inihaw na Tilapia', 199, 199),
(28, 5, 'Inihaw na Bangus', 249, 249),
(29, 5, 'Inihaw na Hito', 249, 249),
(30, 5, 'Inihaw na Malaga', 249, 249),
(31, 5, 'Inihaw na Panga ng isda', 399, 399),
(32, 5, 'Inihaw na Buntot ng Isda', 399, 399),
(33, 5, 'Inihaw na Tuna Belly', 399, 399),
(34, 5, 'Inihaw na Talong', 100, 100),
(35, 6, 'Adobong Baboy', 299, 299),
(36, 6, 'Fried Cholettas (2pcs. Porck Chop)', 199, 199),
(37, 6, 'Lechon Kawali sa Kangkong', 299, 299),
(38, 6, 'Crispy Pata', 489, 489),
(39, 6, 'Pata Tim', 489, 489),
(40, 6, 'Lechon Paksiw', 199, 199),
(41, 6, 'Lechon Kawali', 299, 299),
(42, 7, 'Beef Ampalaya', 239, 239),
(43, 7, 'Beef Kangkong', 239, 239),
(44, 7, 'Beef Brocoli', 239, 239),
(45, 7, 'Beef Teriyaki', 239, 239),
(46, 7, 'Beef Oriental', 239, 239),
(47, 7, 'Bistek Pinoy', 239, 239),
(48, 7, 'Bulalo Steak', 299, 299),
(49, 7, 'Kare-Kare', 299, 299),
(50, 8, 'Nilagang Baboy', 199, 199),
(51, 8, 'Nilagang Manok', 199, 199),
(52, 8, 'Sinigang na Baboy', 199, 199),
(53, 8, 'Sinigang na Chicken', 199, 199),
(54, 8, 'Sinigang na Tanique', 229, 229),
(55, 8, 'Sinigang na Malaga', 249, 249),
(56, 8, 'Sinigang na Panga ng Isda', 399, 399),
(57, 8, 'Sinigang na Buntot ng Isda', 399, 399),
(58, 8, 'Sinigang na Bangus', 249, 249),
(59, 8, 'Sinigang na Hipon', 299, 299),
(60, 8, 'BULALO', 249, 249),
(61, 8, 'Tinolang Manok', 199, 199),
(77, 9, 'Chopsuey', 229, 229),
(78, 9, 'Pinakbet', 179, 179),
(79, 9, 'Lo Han Chai', 229, 229),
(80, 9, 'Dinengdeng', 149, 149),
(81, 9, 'Steamed 9', 99, 99),
(82, 9, 'Chopsuey', 229, 229),
(83, 9, 'Pinakbet', 179, 179),
(84, 9, 'Lo Han Chai', 229, 229),
(85, 9, 'Dinengdeng', 149, 149),
(86, 9, 'Steamed 9', 99, 99),
(87, 10, 'Rice Meals', 199, 199),
(88, 10, 'Boodle SET', 949, 949),
(89, 10, 'Customized Boodle Set', 1199, 1199),
(90, 11, 'Ham and Egg Sandwich', 99, 99),
(91, 11, 'Ham and Cheese Sandwich', 99, 99),
(92, 11, 'Grilled Chicken Sandwich', 99, 99),
(93, 11, 'Crispy Chicken Sandwich', 99, 99),
(94, 11, 'Hamburger Sandwich (plain)', 99, 99),
(95, 11, 'Hamburger Sandwich (plain with bacon)', 139, 139),
(96, 11, 'Clubhouse Sandwich', 129, 129),
(97, 11, 'Sebay Grandslam Burger', 129, 129),
(98, 11, 'SEBAY TUNA FUSION PIZZA Sandwich', 215, 215),
(99, 11, 'RY MEATY DELIGHT PIZZA Sandwich', 215, 215),
(100, 11, 'SMORE PIZZA Sandwich', 215, 215),
(101, 11, 'BLT (Bacon,  Lettuce and Tomato Sandwich)', 99, 99),
(102, 11, 'Egg and Cheese Sandwich', 99, 99),
(103, 11, 'Ham and Egg Sandwich', 99, 99),
(104, 11, 'Ham and Cheese Sandwich', 99, 99),
(105, 11, 'Grilled Chicken Sandwich', 99, 99),
(106, 11, 'Crispy Chicken Sandwich', 99, 99),
(107, 11, 'Hamburger Sandwich (plain)', 99, 99),
(108, 11, 'Hamburger Sandwich (plain with bacon)', 139, 139),
(109, 11, 'Clubhouse Sandwich', 129, 129),
(110, 11, 'Sebay Grandslam Burger', 129, 129),
(111, 11, 'SEBAY TUNA FUSION PIZZA Sandwich', 215, 215),
(112, 11, 'RY MEATY DELIGHT PIZZA Sandwich', 215, 215),
(113, 11, 'SMORE PIZZA Sandwich', 215, 215),
(114, 11, 'BLT (Bacon,  Lettuce and Tomato Sandwich)', 99, 99),
(115, 11, 'Egg and Cheese Sandwich', 99, 99),
(116, 11, 'Ham and Egg Sandwich', 99, 99),
(117, 11, 'Ham and Cheese Sandwich', 99, 99),
(118, 11, 'Grilled Chicken Sandwich', 99, 99),
(119, 11, 'Crispy Chicken Sandwich', 99, 99),
(120, 11, 'Hamburger Sandwich (plain)', 99, 99),
(121, 11, 'Hamburger Sandwich (plain with bacon)', 139, 139),
(122, 11, 'Clubhouse Sandwich', 129, 129),
(123, 11, 'Sebay Grandslam Burger', 129, 129),
(124, 11, 'SEBAY TUNA FUSION PIZZA Sandwich', 215, 215),
(125, 11, 'RY MEATY DELIGHT PIZZA Sandwich', 215, 215),
(126, 11, 'SMORE PIZZA Sandwich', 215, 215),
(127, 11, 'BLT (Bacon,  Lettuce and Tomato Sandwich)', 99, 99),
(128, 11, 'Egg and Cheese Sandwich', 99, 99),
(129, 12, 'Pancit Bihon', 179, 179),
(130, 12, 'Pancit Canton', 179, 179),
(131, 12, 'Pancit Sotanghon', 199, 199),
(132, 12, 'Pancit Mix (Canton & Bihon)', 179, 179),
(133, 13, 'Ice Cream Per Scoop', 35, 35),
(134, 13, 'Buko Halo-Halo', 129, 129),
(135, 13, 'Mango Shake', 99, 99),
(136, 13, 'Vanilla Shake', 99, 99),
(137, 13, 'Ube Shake', 99, 99),
(138, 13, 'Strawberry Shake', 99, 99),
(139, 13, 'Chocolate Shake', 99, 99),
(140, 13, 'Deep fry Oreo w/ 1 Scoop of Ice Cream', 60, 60),
(141, 13, 'Magnum Ice Cream', 65, 65),
(142, 13, 'Cornetto Ice Cream', 30, 30),
(143, 13, 'Ice Cream Stick', 15, 15),
(144, 14, 'Nestea House Blend', 45, 45),
(145, 14, 'Nestea Blue Lemonade', 45, 45),
(146, 14, 'Nestea Honey Blend (Bottomless)', 69, 69),
(147, 14, 'Nestea Blue Lemonade (Bottomless)', 69, 69),
(148, 14, 'Nestea House Blend (Pitcher)', 175, 175),
(149, 14, 'Nestea Blue Lemonade (Pitcher)', 175, 175),
(150, 14, 'Coke (Zero)', 40, 40),
(151, 14, 'Royal', 40, 40),
(152, 14, 'Mountain Dew', 45, 45),
(153, 14, 'Gatorade', 45, 45),
(154, 14, 'Mineral (500ml)', 35, 35),
(155, 14, 'Mineral (1000ml)', 75, 75),
(156, 14, 'Mango Juice', 45, 45),
(157, 14, 'Pineapple Juice', 45, 45),
(158, 14, 'Orange Juice', 45, 45),
(159, 14, 'C2', 45, 45),
(160, 14, 'Bear Brand', 45, 45),
(161, 14, 'Chuckie', 45, 45),
(162, 14, 'Coffee', 35, 35),
(163, 14, 'Tea', 35, 35),
(164, 14, 'Milo', 55, 55),
(165, 14, 'COKE LIGHT', 40, 40),
(166, 14, 'COKE RED', 40, 40),
(167, 14, 'SPRITE', 40, 40),
(168, 14, 'RTO', 40, 40),
(169, 14, 'WILKINS(B)', 75, 75),
(170, 14, 'PITCHER', 179, 179),
(171, 14, 'alegria coffee', 20, 55),
(172, 14, 'Minute Maid', 45, 45),
(173, 14, 'Fit and Right', 45, 45),
(174, 14, 'Real Leaf', 45, 45),
(175, 14, 'Calamansi Juice', 45, 45),
(196, 15, 'Smirnoff (Mule)', 60, 60),
(197, 15, 'San Miguel Light (Apple)', 45, 45),
(198, 15, 'San miguel Light (Lemon)', 45, 45),
(199, 15, 'San Miguel 15 (Pale Pilsen)', 45, 45),
(200, 15, 'Red Horse', 45, 45),
(201, 15, '15 Tower with Fries', 369, 369),
(202, 15, 'SAN MIGUEL LIGHT IN BTL.', 45, 45),
(203, 15, 'SAN MIGUEL 15 IN BTL.', 45, 45),
(204, 15, '15 Bucket with Fries', 369, 369),
(205, 15, '15 TOWER & BUCKET(ASSORTED)', 369, 369),
(206, 16, 'Vanilla', 99, 99),
(207, 16, 'Mango', 99, 99),
(208, 16, 'Chocolate', 99, 99),
(209, 16, 'Ube', 99, 99),
(210, 16, 'Strawberry', 99, 99),
(313, 17, 'Alfonso I Solera (1L)', 650, 650),
(314, 17, 'Boracay Rhum (70cl)', 200, 200),
(315, 17, 'Boones Sangria (750ml)', 450, 450),
(316, 17, 'Carlo Rossi California Red Wine (700ml)', 500, 500),
(317, 17, 'Carlo Rossi Red Wine (187ml)', 220, 220),
(318, 17, 'Carlo Rossi California Muscat (700ml)', 500, 500),
(319, 17, 'Carlo Rossi California Red Muscat (1.5L)', 800, 800),
(320, 17, 'El Hombre Tequila Gold (700ml)', 550, 550),
(321, 17, 'El Hombre Tequila White (700ml)', 325, 325),
(322, 17, 'Emperador Light (750ml)', 240, 240),
(323, 17, 'Francia California (750ml)', 450, 450),
(324, 17, 'Fundador Golf (700ml)', 1250, 1250),
(325, 17, 'GSM Blue (700ml)', 200, 200),
(326, 17, 'Isand Lime Mixer (375ml)', 120, 120),
(327, 17, 'Jenard Chadoney (750ml)', 670, 670),
(328, 17, 'Maria Clara Sangria (750ml)', 325, 325),
(329, 17, 'Novelino R. Azienda (750ml)', 475, 475),
(330, 17, 'Tanduay 5 Years Longneck (750ml)', 200, 200),
(331, 17, 'Tanduay Dark in box (1L)', 350, 350),
(332, 17, 'Fundador (1L)', 949, 949),
(333, 17, 'Fundador Light', 599, 599),
(334, 17, 'Fundador Ultra Smooth (1L)', 799, 799),
(335, 17, 'Captain Morgan', 499, 499),
(336, 17, 'Jose Cuervo (1L)', 1300, 1300),
(337, 17, 'Johnny Walker (Dounle Black)', 2200, 2200),
(338, 17, 'Black Label (1L)', 1300, 1300),
(339, 17, 'Red label', 878, 878),
(340, 17, 'Molly''s Cream', 800, 800),
(341, 17, 'Suntory Whiskey', 1220, 1220),
(342, 17, 'Bacardi (White)', 675, 675),
(343, 17, 'Bacardi (Gold)', 775, 775),
(344, 17, 'Carlo Rossi (Sweet Red)', 500, 500),
(345, 17, 'Franzia', 450, 450),
(346, 17, 'Bordeaux Reservo (White Wine)', 849, 849),
(347, 17, 'Bordeaux Reservo (Red Wine)', 849, 849),
(348, 17, 'Little Penguin Chiraz', 499, 499),
(349, 17, 'Little Penguin Cabernet Sauvignon', 499, 499),
(350, 17, 'Little Penguin Merlot', 499, 499),
(351, 17, 'Rosemound Shiraz Cabernet', 1049, 1049),
(352, 17, 'Dona Elena', 399, 399),
(353, 17, 'Saint Anna (750ml)', 375, 375),
(354, 17, 'Saint Celine', 349, 349),
(355, 17, 'Marker''s Mark', 1299, 1299),
(356, 17, 'Jim Beam(White 750ml)', 899, 899),
(357, 17, 'Little Penguin Chardony', 499, 499),
(358, 17, 'St. Anna(750ml)', 375, 375),
(359, 17, 'St. Celine', 349, 349),
(360, 17, 'Sake Berry(Bottle)', 200, 200),
(361, 17, 'Ikezo (Berry)', 0, 0),
(362, 17, 'Ikezo (Peach)', 0, 0),
(363, 17, 'Jack Daniels(Double Black)', 2200, 2200),
(364, 18, 'RICE', 15, 15),
(365, 18, 'EGG', 25, 25),
(366, 18, 'GARLIC RICE', 25, 25),
(367, 18, 'Red Egg', 50, 50),
(368, 19, 'MARLBORO LIGHTS', 90, 90),
(369, 19, 'MARLBORO RED', 90, 90),
(370, 19, 'MARLBORO GREEN', 90, 90),
(371, 19, 'MARLBORO BLACK', 100, 100),
(372, 19, 'Pall Mall', 60, 60),
(373, 20, 'Vanilla Ice Cream', 35, 35),
(374, 20, 'Ube Ice Cream', 35, 35),
(375, 20, 'Mango Ice CReam', 35, 35);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubmenu`
--

CREATE TABLE IF NOT EXISTS `tblsubmenu` (
  `submenuid` int(11) NOT NULL AUTO_INCREMENT,
  `menuid` int(11) NOT NULL,
  `submenu_name` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `rel_menuid` int(11) NOT NULL,
  PRIMARY KEY (`submenuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tblsubmenu`
--

INSERT INTO `tblsubmenu` (`submenuid`, `menuid`, `submenu_name`, `cost`, `price`, `rel_menuid`) VALUES
(1, 1, 'Toast Bread with Butter and Marmalade', 75, 75, 0),
(2, 4, 'BREAKFAST BUFFET', 169, 169, 0),
(3, 2, 'Omelette (Shrimp - Served with Toast Bread, Butter, Jam and Coffee)', 225, 225, 0),
(4, 2, 'Omelette (Cheese - Served with Toast Bread, Butter, Jam and Coffee)', 225, 225, 0),
(5, 2, 'Omelette (Ham - Served with Toast Bread, Butter, Jam and Coffee)', 225, 225, 0),
(6, 2, 'Omelette (Bacon - Served with Toast Bread, Butter, Jam and Coffee)', 225, 225, 0),
(7, 2, 'Omelette(Longganisa - Served with Toast Bread, Butter, Jam and Coffee)', 225, 225, 0),
(8, 2, 'Omelette (Mushroom - Served with Toast Bread, Butter, Jam and Coffee)', 225, 225, 0),
(9, 5, 'American Breakfast (Ham with Toast Bread, Butter, Jam and Coffee)', 179, 179, 0),
(10, 5, 'American Breakfast (Bacon with Toast Bread, Butter, Jam and Coffee)', 179, 179, 0),
(11, 2, 'Omelette (Chicken - Served with Toast Bread, Butter, Jam and Milo)', 225, 225, 0),
(12, 2, 'Omelette (Chicken - Served with Toast Bread, Butter, Jam and Tea)', 225, 225, 0),
(13, 2, 'Omelette (Shrimp - Served with Toast Bread, Butter, Jam and Tea)', 225, 225, 0),
(14, 2, 'Omelette (Shrimp - Served with Toast Bread, Butter, Jam and Milo)', 225, 225, 0),
(15, 2, 'Omelette (Cheese - Served with Toast Bread, Butter, Jam and Tea)', 225, 225, 0),
(16, 2, 'Omelette (Cheese - Served with Toast Bread, Butter, Jam and Milo)', 225, 225, 0),
(17, 2, 'Omelette (Ham - Served with Toast Bread, Butter, Jam and Tea)', 225, 225, 0),
(18, 2, 'Omelette (Ham - Served with Toast Bread, Butter, Jam and Milo)', 225, 225, 0),
(19, 2, 'Omelette (Bacon - Served with Toast Bread, Butter, Jam and Tea)', 225, 225, 0),
(20, 2, 'Omelette (Bacon - Served with Toast Bread, Butter, Jam and Milo)', 225, 225, 0),
(21, 2, 'Omelette(Longganisa - Served with Toast Bread, Butter, Jam and Tea)', 225, 225, 0),
(22, 2, 'Omelette(Longganisa - Served with Toast Bread, Butter, Jam and Milo)', 225, 225, 0),
(23, 2, 'Omelette (Mushroom - Served with Toast Bread, Butter, Jam and Tea)', 225, 225, 0),
(24, 2, 'Omelette (Mushroom - Served with Toast Bread, Butter, Jam and Milo)', 225, 225, 0),
(25, 5, 'American Breakfast (Ham with Toast Bread, Butter, Jam and Tea)', 179, 179, 0),
(26, 5, 'American Breakfast (Ham with Toast Bread, Butter, Jam and Milo)', 179, 179, 0),
(27, 5, 'American Breakfast (Bacon with Toast Bread, Butter, Jam and Tea)', 179, 179, 0),
(28, 5, 'American Breakfast (Bacon with Toast Bread, Butter, Jam and Milo)', 179, 179, 0),
(29, 3, 'Bangsilog (Incluvive of Tea)', 149, 149, 0),
(30, 3, 'Bangsilog (Incluvive of Milo)', 149, 149, 0),
(31, 3, 'Tapsilog (Inclusive of Tea)', 149, 149, 0),
(32, 3, 'Tapsilog (Inclusive of Milo)', 149, 149, 0),
(33, 3, 'Longsilog (Inclusive of Tea)', 149, 149, 0),
(34, 3, 'Longsilog (Inclusive of Milo)', 149, 149, 0),
(35, 3, 'Tocilog (Inclusive of Tea)', 149, 149, 0),
(36, 3, 'Tocilog (Inclusive of Milo)', 149, 149, 0),
(37, 3, 'Cornsilog (Inclusive of Tea)', 149, 149, 0),
(38, 3, 'Cornsilog (Inclusive of Milo)', 149, 149, 0),
(39, 3, 'Bangsilog (Incluvive of Coffee)', 149, 149, 0),
(40, 3, 'Tapsilog (Inclusive of Coffee)', 149, 149, 0),
(41, 3, 'Longsilog (Inclusive of Coffee)', 149, 149, 0),
(42, 3, 'Tocilog (Inclusive of Coffee)', 149, 149, 0),
(43, 3, 'Cornsilog (Inclusive of Coffee)', 149, 149, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbltable`
--

CREATE TABLE IF NOT EXISTS `tbltable` (
  `tableid` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) NOT NULL,
  PRIMARY KEY (`tableid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbltable`
--

INSERT INTO `tbltable` (`tableid`, `table_name`) VALUES
(1, 'TABLES'),
(2, 'SALA'),
(3, 'RAIL'),
(4, 'HUTS'),
(5, 'EXTRA TABLES');

-- --------------------------------------------------------

--
-- Table structure for table `tbltcontent`
--

CREATE TABLE IF NOT EXISTS `tbltcontent` (
  `tcontentid` int(11) NOT NULL AUTO_INCREMENT,
  `tableid` int(11) NOT NULL,
  `tcontent_name` varchar(255) NOT NULL,
  PRIMARY KEY (`tcontentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbltcontent`
--

INSERT INTO `tbltcontent` (`tcontentid`, `tableid`, `tcontent_name`) VALUES
(1, 1, '1-A'),
(2, 1, '1-B'),
(3, 1, '1-C'),
(4, 1, '2-A'),
(5, 1, '2-B'),
(6, 1, '2-C'),
(7, 1, '3'),
(8, 1, '4'),
(9, 1, '5'),
(10, 1, '6'),
(11, 1, '7'),
(12, 2, 'S1'),
(13, 2, 'S2'),
(14, 2, 'S3'),
(15, 3, '1-A'),
(16, 3, '2-A'),
(17, 3, '2-B'),
(18, 3, '3-A'),
(19, 3, '3-B'),
(20, 3, '4-A'),
(21, 3, '4-B'),
(22, 3, '5-A'),
(23, 3, '5-B'),
(24, 4, 'HUTS1'),
(25, 4, 'HUTS2'),
(26, 4, 'HUTS3'),
(27, 4, 'HUTS4'),
(28, 4, 'HUTS5'),
(29, 4, 'HUTS6'),
(30, 4, 'HUTS7'),
(31, 4, 'HUTS8'),
(32, 5, 'X1'),
(33, 5, 'X2'),
(34, 5, 'X3'),
(35, 5, 'X4'),
(36, 5, 'X5'),
(37, 5, 'X6'),
(38, 5, 'X7'),
(39, 5, 'X8'),
(40, 5, 'X9'),
(41, 5, 'X10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `userType` varchar(10) NOT NULL DEFAULT 'staff',
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `password`, `userType`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1'),
(5, 'lynnette', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
