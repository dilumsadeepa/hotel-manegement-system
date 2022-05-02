-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 12:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookrooms`
--

CREATE TABLE `bookrooms` (
  `id` int(100) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `numof` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `ardate` varchar(20) NOT NULL,
  `dedate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookrooms`
--

INSERT INTO `bookrooms` (`id`, `rid`, `uid`, `numof`, `day`, `ardate`, `dedate`) VALUES
(2, '0', 'user@email.com', '2', '2', '2022-04-28', '2022-04-30'),
(3, '', 'user@email.com', '', '0', '', ''),
(4, '', 'user@email.com', '', '0', '', ''),
(5, '', 'user@email.com', '', '0', '', ''),
(6, '2', 'user@email.com', '2', '0', '2022-04-29', '2022-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `foodcat`
--

CREATE TABLE `foodcat` (
  `id` int(100) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodcat`
--

INSERT INTO `foodcat` (`id`, `cat`) VALUES
(1, 'Rice');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fcat` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `fcat`, `price`, `dis`, `img`) VALUES
(3, 'Full rice', '', '300', 'test oner for foods', 'selection-of-indian-food.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderfoods`
--

CREATE TABLE `orderfoods` (
  `id` int(100) NOT NULL,
  `usid` varchar(255) NOT NULL,
  `fid` varchar(255) NOT NULL,
  `loca` varchar(255) NOT NULL,
  `nofood` varchar(255) NOT NULL,
  `ordate` varchar(255) NOT NULL,
  `ortime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderfoods`
--

INSERT INTO `orderfoods` (`id`, `usid`, `fid`, `loca`, `nofood`, `ordate`, `ortime`) VALUES
(4, 'user@email.com', '3', 'No. 40, Aluth Dambewatana', '1', '2022-04-29', 'Breckfirst');

-- --------------------------------------------------------

--
-- Table structure for table `pac`
--

CREATE TABLE `pac` (
  `id` int(100) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdis` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `phall` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `rnum` varchar(50) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `ac` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `nofroom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `rnum`, `rtype`, `ac`, `price`, `dis`, `nofroom`) VALUES
(2, 'A001', 'Single room', 'AC', '2000', 'this is for test', '20');

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` int(100) NOT NULL,
  `rtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `rtype`) VALUES
(1, 'Single room'),
(2, 'double room');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT '3',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `tel`, `password`, `address`, `gender`, `level`, `created_date`) VALUES
(1, 'Dilum Sadeepa', 'dilum19990612@gmail.com', '+94789843284', '123', 'No. 40, Aluth Dambewatana', 'Male', '1', '2022-04-28 00:59:09'),
(6, 'Admin', 'admin@email.com', '1254687953', '123', 'university of Ruhuna', 'Male', '1', '2022-04-29 06:08:00'),
(7, 'User', 'user@email.com', '1254698745', '123', 'new address', 'Male', '3', '2022-04-30 14:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `wedbook`
--

CREATE TABLE `wedbook` (
  `id` int(100) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `bdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookrooms`
--
ALTER TABLE `bookrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodcat`
--
ALTER TABLE `foodcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderfoods`
--
ALTER TABLE `orderfoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pac`
--
ALTER TABLE `pac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedbook`
--
ALTER TABLE `wedbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookrooms`
--
ALTER TABLE `bookrooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foodcat`
--
ALTER TABLE `foodcat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderfoods`
--
ALTER TABLE `orderfoods`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pac`
--
ALTER TABLE `pac`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wedbook`
--
ALTER TABLE `wedbook`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
