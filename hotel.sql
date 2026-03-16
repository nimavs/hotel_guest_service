-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2026 at 07:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `gid` int(11) NOT NULL,
  `gname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `idproof` varchar(100) NOT NULL,
  `idno` varchar(100) NOT NULL,
  `checkin` varchar(25) NOT NULL,
  `checkout` varchar(25) NOT NULL,
  `rno` varchar(10) NOT NULL,
  `rtype` varchar(25) NOT NULL,
  `noguest` int(20) NOT NULL,
  `pmethod1` varchar(25) NOT NULL,
  `srequest` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`gid`, `gname`, `address`, `gender`, `phoneno`, `emailid`, `idproof`, `idno`, `checkin`, `checkout`, `rno`, `rtype`, `noguest`, `pmethod1`, `srequest`) VALUES
(1, 'Anitha', 'sree bhra', 'female', '09645506723', 'anitha@gmail.com', 'Passport', 'a23456', '2026-03-24', '2026-03-26', '160', 'Double', 3, 'Card', 'asss shsdhjd jjjj'),
(2, 'Nivin', 'Sree padam', 'male', '9843218900', 'nivinjose@gmail.com', 'Voter ID', 'E43216789', '2026-03-31', '2026-04-09', '134', 'Deluxe', 2, 'UPI', 'Wifi connection available in any time'),
(5, 'Maya', 'Saradha vilasam, pattathanam kollam', 'female', '8790432100', 'mayaviswa55@gmail.com', 'Passport', 'P98651255', '2026-03-17', '2026-03-20', '221', 'Single', 1, 'Card', 'Cab available in early morning');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `rid` int(11) NOT NULL,
  `gname` varchar(250) NOT NULL,
  `rno` int(15) NOT NULL,
  `stype` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `priority` varchar(250) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`rid`, `gname`, `rno`, `stype`, `description`, `priority`, `rdate`, `stime`) VALUES
(1, 'Anusha', 432, 'Maintenance', 'AC is not cooling properly', 'High', '2026-03-23', '08:15'),
(2, 'Deepthi', 412, 'Food service', 'Ifthar special at 06:45 pm', 'Low', '2026-03-17', '07:40'),
(3, 'maya', 221, 'Room Cleaning', 'I need room cleaning tomorrow morning', 'Medium', '2026-03-16', '05:15');

-- --------------------------------------------------------

--
-- Table structure for table `service-rqt`
--

CREATE TABLE `service-rqt` (
  `rid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `username`, `password`) VALUES
(1, 'Diya', 'diya', 'diya11'),
(3, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `service-rqt`
--
ALTER TABLE `service-rqt`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
