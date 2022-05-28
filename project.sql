-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2022 at 10:45 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Math` int(11) NOT NULL,
  `Arabic` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Art` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`ID`, `Name`, `Math`, `Arabic`, `English`, `Art`) VALUES
(203126, 'Muhammed Yasser', 6, 7, 5, 9),
(203078, 'Omar Akram ', 8, 5, 10, 6),
(203031, 'iman ashraf', 9, 4, 2, 5),
(203071, 'Abdelrahman Marzouk', 5, 7, 9, 3),
(203060, 'mariam houssam', 7, 5, 6, 9),
(203056, 'salma ossama', 5, 8, 3, 9),
(203015, 'ahmed mostafa', 5, 8, 5, 9),
(203088, 'mohamed mamoud', 5, 8, 9, 7),
(203099, 'sara anwer', 5, 8, 9, 7),
(203148, 'Mayar ossama', 10, 10, 10, 10),
(203102, 'laila ashraf', 8, 5, 6, 8),
(203045, 'rania ahmed', 5, 8, 5, 5),
(201505, 'ahmed ramdan', 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `first name` varchar(50) NOT NULL,
  `last name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone number` int(11) NOT NULL,
  `school name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`first name`, `last name`, `password`, `phone number`, `school name`, `email`) VALUES
('Abdelrahman', 'Marzouk', '444', 1238665, 'El orouba international school', 'marzouk@gmail.com'),
('Muhammed', 'Yasser', '111', 12979207, 'mohammed korayem', 'yasser@gmail.com'),
('mariam', 'houssam', '666', 789456123, 'future languages school', 'mariam@gmail.com'),
('Omar', 'Akram', '777', 15223652, 'moharam bek', 'omar@gmail.com'),
('iman', 'ashraf', '999', 784589, 'Alexandria international school', 'zakareia@gmail.com'),
('salma', 'ossama', '789', 789456, 'sedi gaber language school', 'osama@gmail.com'),
('sara ', 'ahmed', '789', 8552477, 'EGC', 'sara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration2`
--

DROP TABLE IF EXISTS `registration2`;
CREATE TABLE IF NOT EXISTS `registration2` (
  `first name` varchar(60) NOT NULL,
  `last name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone number` int(11) NOT NULL,
  `qualifications` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration2`
--

INSERT INTO `registration2` (`first name`, `last name`, `password`, `phone number`, `qualifications`, `email`) VALUES
('Sara', 'Anwer', '123', 1234567890, 'Graduated from faculty of science', 'sara@gmail.com'),
('ahmed', 'saleh', '234', 1556489732, 'graduated from faculty of Engineering', 'saleh@gmail.com'),
('mai', 'ahmed', '753', 1478523698, 'graduated from faculty of science', 'mai@gmail.com'),
('islam', 'kabbany', '555', 1234567889, 'Graduated from faculty of science', 'islam@gmail.com'),
('Noura', 'Nasr', '888', 1239687458, 'Graduated from faculty of science', 'noura@gmail.com'),
('ahmed', 'youness', '123', 852369741, 'Graduated from faculty of science', 'youness@gmail.com'),
('rasha', 'montaser', '666', 481528, 'Graduated from faculty of science', 'rasha@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
