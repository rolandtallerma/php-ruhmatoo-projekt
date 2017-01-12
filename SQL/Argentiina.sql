-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 08:49 AM
-- Server version: 5.5.54
-- PHP Version: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if16_paulvase_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `Argentiina`
--

CREATE TABLE `Argentiina` (
  `id` int(11) NOT NULL,
  `nimi` varchar(70) NOT NULL,
  `tagasiside` varchar(255) NOT NULL,
  `deleted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Argentiina`
--

INSERT INTO `Argentiina` (`id`, `nimi`, `tagasiside`, `deleted`) VALUES
(4, 'Mormor', 'Kanaliha omas mahlas', '0000-00-00'),
(5, 'rolandtallerma', 'Ãœlimalt hea koht, soe, hea muusika', '0000-00-00'),
(6, 'asdas', 'sadadasd', '0000-00-00'),
(7, 'vihane klient', 'kraan lasi pÃ¼ksid mÃ¤rjaks, toidu sees oli juuksekarv', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Argentiina`
--
ALTER TABLE `Argentiina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Argentiina`
--
ALTER TABLE `Argentiina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
