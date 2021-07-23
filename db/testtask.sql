-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 09:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id_Questions` bigint(20) NOT NULL,
  `Question` text NOT NULL,
  `CorrectAnswer` varchar(50) NOT NULL,
  `WrongAnswer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id_Questions`, `Question`, `CorrectAnswer`, `WrongAnswer`) VALUES
(1, 'Is JavaScript a case-sensitive language?', 'Yes', 'No'),
(2, 'When was Einstein born?', '1879', '2020'),
(3, 'When was Einstein died?', '1955', 'Still alive'),
(4, 'when internet was invented?', '1983', 'Still in development process'),
(5, 'when javascript invented?', '1995', '1940'),
(6, 'Who introduced JavaScript?', 'BrendanEich', 'brad pitt'),
(7, 'Is JavaScript faster than C?', 'Yes', 'No'),
(8, 'NaN is a number?', 'YES', 'Yes'),
(9, 'null is an object?', 'Yes', 'No'),
(10, '0.1 + 0.2 =', '0.30000000000000004', '0.4'),
(11, 'Math.max() smaller than Math.min()', 'yes', 'no'),
(12, 'Functions can execute itself in Js?', 'yes', '29!'),
(13, 'nodeJs vs PHP?', 'PHP', 'NO'),
(14, 'javascript is the same as java?', 'No', 'Yes'),
(15, '2+2', '5', '69');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id_Results` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id_Results`, `Name`, `Surname`, `Result`) VALUES
(35, 'Leonids', 'Guramo', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_Questions`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id_Results`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_Questions` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id_Results` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
