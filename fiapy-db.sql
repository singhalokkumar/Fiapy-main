-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 05:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiapy-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `sno` int(10) NOT NULL,
  `locality` varchar(25) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `pin` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`sno`, `locality`, `city`, `state`, `country`, `pin`) VALUES
(1, 'Helloe Road', 'Ranchi', 'Jharkhand', 'India', '834432'),
(2, 'Railway Station', 'Ranchi', 'Jahrkahnd', 'India', '832392'),
(3, 'Civil Road', 'Ranchi', 'Jharkhand', 'India', '434545'),
(4, 'Railway Station', 'Mumbai', 'Maharastra', 'India', '738229');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Switch/Socket', 'switch.jpg', 100.00),
(2, 'Fan', 'switch.jpg', 299.00),
(3, 'light', 'switch.jpg', 125.00),
(4, 'Fuse', 'switch.jpg', 145.00),
(5, 'wiring', 'switch.jpg', 115.00),
(6, 'Others', 'switch.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `prof-registration`
--

CREATE TABLE `prof-registration` (
  `SNo` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prof-registration`
--

INSERT INTO `prof-registration` (`SNo`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(1, 'Rohit', 'Kumar', '8580013484', 'rohit@gmail.com', 'RohitKumar'),
(4, 'Samar', 'Kumar', '8188025476', 'samar@gmail.com', 'samarkumar'),
(6, 'Sameer', 'Kumar', '9145678765', 'sameer@gmail.com', 'sameerkumar'),
(12, 'kashish', 'kumar', '82812818', 'kashish@gmail.com', 'kashish'),
(13, 'Professional ', 'registration', '39239929', 'prof@gmail.com', 'prof'),
(14, 'prof', 'sws', '290392', 's@gmail.com', 'jjsds'),
(15, 'skks', 'dlsl', '84838', 'kdks@gamil.com', 'dsds'),
(16, 'dd', 'dkkd', '2939', 'jsjs@gmail.com', 'kskds'),
(17, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`) VALUES
(1, 'Electrician', 'Install, maintain, and repair electrical wiring, equipment, and fixtures.'),
(2, 'Plumber', 'Solve problem related to water-leakages etc.'),
(3, 'Carpenter', 'Solves Problem related to wood.'),
(4, 'Mechenic', 'Solves hardware related Problems'),
(5, 'Haircut/Salon', 'Cut Your hair in latest fashion designs');

-- --------------------------------------------------------

--
-- Table structure for table `user-registration`
--

CREATE TABLE `user-registration` (
  `SNo` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-registration`
--

INSERT INTO `user-registration` (`SNo`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(1, 'Rohit', 'Kumar', '8580013484', 'rohit@gmail.com', 'RohitKumar'),
(4, 'Samar', 'Kumar', '8188025476', 'samar@gmail.com', 'samarkumar'),
(6, 'Sameer', 'Kumar', '9145678765', 'sameer@gmail.com', 'sameerkumar'),
(36, 'dskdsk', 'kdkskdk', '8382838', 'ds@gmail.com', 'dkskdsd'),
(37, 'kumar', 'k', '29929', 'jsj@gmail.com', 'ksk'),
(38, 'Akk', 'kskks', '8382328', 'sjsj@gmail.com', 'idsds'),
(39, 'rohit', 'kumar', '8281281', 'rohit@gmail.com', 'rohit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prof-registration`
--
ALTER TABLE `prof-registration`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-registration`
--
ALTER TABLE `user-registration`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prof-registration`
--
ALTER TABLE `prof-registration`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user-registration`
--
ALTER TABLE `user-registration`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
