-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 06:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eve`
--

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `Latitude` decimal(10,0) NOT NULL,
  `Longitude` decimal(10,0) NOT NULL,
  `IconType` enum('Fire','Car Accident','Plume','Flooding','Other') NOT NULL DEFAULT 'Other',
  `ExtraInfo` text NOT NULL,
  `TimeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OverlayNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`Latitude`, `Longitude`, `IconType`, `ExtraInfo`, `TimeStamp`, `OverlayNumber`) VALUES
('83', '-10', 'Car Accident', 'Car Accident Occurred Here. Send Help ASAP', '2016-02-01 00:02:19', -1),
('10', '21', 'Other', 'Overlay1', '2016-02-01 12:16:28', 1),
('10', '22', 'Other', 'Overlay1', '2016-02-01 12:16:54', 1);
--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `eve points`
--

CREATE TABLE IF NOT EXISTS `eve points` (
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `IconType` enum('Test','Fire','Car Accident') NOT NULL DEFAULT 'Test',
  `Extra Info` varchar(1024) NOT NULL,
  `TimeStamp` date NOT NULL,
  `Overlay Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
