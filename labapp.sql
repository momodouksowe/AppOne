-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2016 at 11:02 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equipName` varchar(200) NOT NULL,
  `equipID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`equipName`, `equipID`) VALUES
('PC 1', 1),
('PC 2', 2),
('PC 3', 3),
('VGA Cable', 4),
('Remote', 5),
('Air Condition', 7),
('AC Remote', 9),
('Projector', 10),
('USB Cable', 11),
('HDMI Cable', 13),
('Ethernet Cable', 20);

-- --------------------------------------------------------

--
-- Table structure for table `itpersonnel`
--

CREATE TABLE `itpersonnel` (
  `Name` varchar(200) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itpersonnel`
--

INSERT INTO `itpersonnel` (`Name`, `ID`) VALUES
('Gloria Kwweke', 1),
('Segla', 2001283),
('Ato', 32032983);

-- --------------------------------------------------------

--
-- Table structure for table `labequipment`
--

CREATE TABLE `labequipment` (
  `labID` int(11) NOT NULL,
  `equipID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labequipment`
--

INSERT INTO `labequipment` (`labID`, `equipID`) VALUES
(222, 20),
(206, 1),
(206, 1),
(221, 3);

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `labID` int(11) NOT NULL,
  `labName` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`labID`, `labName`) VALUES
(206, 'Design Lab'),
(221, 'lab221'),
(222, 'lab221');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(200) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `userID`) VALUES
('momodou sowe', 123456),
('Elom', 242013),
('Bota', 1232017),
('Emanuella', 2312017),
('Isaac', 20192016);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equipID`);

--
-- Indexes for table `itpersonnel`
--
ALTER TABLE `itpersonnel`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `labequipment`
--
ALTER TABLE `labequipment`
  ADD KEY `labID` (`labID`),
  ADD KEY `equipID` (`equipID`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`labID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `labequipment`
--
ALTER TABLE `labequipment`
  ADD CONSTRAINT `labequipment_ibfk_1` FOREIGN KEY (`equipID`) REFERENCES `equipments` (`equipID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
