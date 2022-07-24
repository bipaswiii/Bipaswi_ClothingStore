-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 04:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `title` text NOT NULL,
  `price` int(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `material` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `picture`, `type`, `title`, `price`, `size`, `material`) VALUES
(28, '321604_clothing.jpg', 'ds', 'asd', 0, 'sd', 'sd'),
(29, '3771886_clothing.jpg', 'dsssaasd', 'asdasd', 0, 'sdscc', 'sddfs');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `clothesid` int(11) NOT NULL,
  `rating` int(50) NOT NULL,
  `usercomment` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `clothesid`, `rating`, `usercomment`, `userid`) VALUES
(17, 'bipaswi', 29, 0, 'nice clothes', 0),
(18, 'bipaswi', 28, 0, 'hello', 0),
(19, 'bipaswi', 28, 2, 'hello world', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `Address`, `fb`, `insta`, `twitter`, `pic`) VALUES
(10, 'bipaswi', 'de6ae3d208871cfa077c81f845ef246d', 'bipaswi777@gmail.com', 'chandol', '', '', '', ''),
(11, 'bipaswi', 'de6ae3d208871cfa077c81f845ef246d', 'bipaswi777@gmail.com', 'chandol', '', '', '', ''),
(13, 'suprim', 'de6ae3d208871cfa077c81f845ef246d', 'suprimlamichhane90@g', 'Banasthali', '', '', '', ''),
(14, 'sds', '7815696ecbf1c96e6894b779456d330e', 'bipaswi777@gmail.com', 'asd', 'asd', 'asd', 'as', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
