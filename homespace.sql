-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 02:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homespace`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(6) NOT NULL,
  `property_for` varchar(10) NOT NULL,
  `property_type` varchar(10) NOT NULL,
  `address` varchar(75) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `area` varchar(10) NOT NULL,
  `bedrooms` varchar(2) NOT NULL,
  `bathrooms` varchar(2) NOT NULL,
  `balconies` varchar(2) NOT NULL,
  `poojaroom` varchar(15) NOT NULL,
  `studyroom` varchar(15) NOT NULL,
  `serventroom` varchar(15) NOT NULL,
  `storeroom` varchar(15) NOT NULL,
  `furnishing` varchar(15) NOT NULL,
  `parking` varchar(3) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `property_age` varchar(5) NOT NULL,
  `price` varchar(20) NOT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
  `img4` varchar(100) DEFAULT NULL,
  `img5` varchar(100) DEFAULT NULL,
  `img6` varchar(100) DEFAULT NULL,
  `img7` varchar(100) DEFAULT NULL,
  `sold` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `user_id`, `user_type`, `property_for`, `property_type`, `address`, `landmark`, `pincode`, `city`, `state`, `area`, `bedrooms`, `bathrooms`, `balconies`, `poojaroom`, `studyroom`, `serventroom`, `storeroom`, `furnishing`, `parking`, `availability`, `property_age`, `price`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `sold`) VALUES
(27, 4, 'Owner', 'Sale', 'Villa', 'nadiad', 'nadiad', '390001', 'nadiad', 'gujarat', '300', '3', '4', '', 'poojaroom', 'studyroom', '', 'storeroom', 'furnished', 'Yes', 'Ready To Move', '0-1', '5000000', '01.jpg', '02.jpg', '03.jpg', 'kisspng-heart-rate-blood-donation-pulse-donation-blood-5abf4b586925f7.2089024415224861044307.jpg', 'logo.png', '01.jpg', '02.jpg', 'no'),
(28, 3, 'Owner', 'Rent', 'House', 'nadiad', 'nadiad', '387001', 'nadiad', 'gujarat', '500', '3', '4', '', 'poojaroom', 'studyroom', 'serventroom', 'storeroom', 'furnished', 'Yes', 'Ready To Move', '5-10', '10000000', 'hero_bg_1.jpg', 'img_2.jpg', 'img_3.jpg', 'img_4.jpg', 'img_6.jpg', 'hero_bg_4.jpg', 'img_7.jpg', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `password`, `email`, `mobile`) VALUES
(1, 'Divya Shah', '12345678', 'divyashah.qa@gmail.com', '7383367447'),
(3, 'Nihar Sodha', '12345678', 'niharsodha17@gmail.com', '7202016399'),
(4, 'Darsh Shah', '1234567890', 'darsh4521@gmail.com', '9714174778'),
(5, 'Ayushi Walia', '123456', 'ayushi.walia1999@gmail.com', '9091955594');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
