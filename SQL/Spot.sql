-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 08:50 AM
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
-- Table structure for table `Spot`
--

CREATE TABLE `Spot` (
  `id` int(11) NOT NULL,
  `nimi` varchar(70) NOT NULL,
  `tagasiside` varchar(255) NOT NULL,
  `deleted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Spot`
--

INSERT INTO `Spot` (`id`, `nimi`, `tagasiside`, `deleted`) VALUES
(1, 'Jolmor joldenson', 'SÃµime mongoliliha, oli hea tihke', '0000-00-00'),
(2, 'rolts', 'vÃ¤ga awesome koht, mikrolaineahjus kalapulgad olid parimad', '0000-00-00'),
(3, 'rÃµÃµmus klient', 'toit super, hea hubane', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Spot`
--
ALTER TABLE `Spot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Spot`
--
ALTER TABLE `Spot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
