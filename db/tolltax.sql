-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 11:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolltax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `passwd`) VALUES
('apkr', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tollbooth`
--

CREATE TABLE `tollbooth` (
  `tid` int(11) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tollbooth`
--

INSERT INTO `tollbooth` (`tid`, `location`) VALUES
(1, 'Jetpur'),
(3, 'Sarangpur');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `charge` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trid`, `uid`, `vid`, `tid`, `time`, `charge`) VALUES
(1, 6, 9, 1, 'Any', 30);

-- --------------------------------------------------------

--
-- Table structure for table `ttusers`
--

CREATE TABLE `ttusers` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `balance` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttusers`
--

INSERT INTO `ttusers` (`uid`, `fname`, `lname`, `mobile`, `email`, `passwd`, `balance`) VALUES
(6, 'Akshay', 'Pethani', '7698760080', 'patelaksh412@gmail.com', '123456789', '5576'),
(7, 'Raj', 'Patel', '1234567895', 'asdfe@gmail.com', '123456789', '5048');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `rfid` varchar(15) NOT NULL,
  `ccmpny` varchar(50) NOT NULL,
  `vmodel` varchar(50) NOT NULL,
  `vnumber` varchar(50) NOT NULL,
  `vtype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `uid`, `rfid`, `ccmpny`, `vmodel`, `vnumber`, `vtype`) VALUES
(9, 6, '78945612365', 'Honda', 'City', 'GJ 04 6954', 'fw'),
(11, 6, '123456788', 'wdwww', 'sdsd', 'sds', 'tw'),
(12, 7, '1452369875', 'Asw', 'qwerty', '12345', 'fw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tollbooth`
--
ALTER TABLE `tollbooth`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trid`),
  ADD KEY `transaction_ibfk_1` (`uid`),
  ADD KEY `vid` (`vid`);

--
-- Indexes for table `ttusers`
--
ALTER TABLE `ttusers`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tollbooth`
--
ALTER TABLE `tollbooth`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ttusers`
--
ALTER TABLE `ttusers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `ttusers` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
