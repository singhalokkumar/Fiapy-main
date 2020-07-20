-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 01:38 PM
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
(38, 'Akk', 'kskks', '8382328', 'sjsj@gmail.com', 'idsds');

--
-- Indexes for dumped tables
--

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
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
