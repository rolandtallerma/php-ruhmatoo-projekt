-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2017 at 08:53 AM
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
-- Table structure for table `phpkasutajad`
--

CREATE TABLE `phpkasutajad` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpkasutajad`
--

INSERT INTO `phpkasutajad` (`id`, `email`, `password`, `created`) VALUES
(1, 'mees@ahv.ee', 'b40d03386fb8fd7dc6ca9c6f8d680dfc58d60fd6ea72c63f573cc5bfbb09695746a849c91517c235cdfeaca4e734208f184bc08aae06797748988e95928f80b1', '2016-11-24 10:35:57'),
(2, 'mees2@ahv.ee', 'b40d03386fb8fd7dc6ca9c6f8d680dfc58d60fd6ea72c63f573cc5bfbb09695746a849c91517c235cdfeaca4e734208f184bc08aae06797748988e95928f80b1', '2016-11-24 10:37:19'),
(3, 'mees3@ahv.ee', 'b40d03386fb8fd7dc6ca9c6f8d680dfc58d60fd6ea72c63f573cc5bfbb09695746a849c91517c235cdfeaca4e734208f184bc08aae06797748988e95928f80b1', '2016-11-24 10:37:42'),
(4, 'mees4@ahv.ee', 'b40d03386fb8fd7dc6ca9c6f8d680dfc58d60fd6ea72c63f573cc5bfbb09695746a849c91517c235cdfeaca4e734208f184bc08aae06797748988e95928f80b1', '2016-11-24 10:38:09'),
(5, 'mees5@ahv.ee', 'b40d03386fb8fd7dc6ca9c6f8d680dfc58d60fd6ea72c63f573cc5bfbb09695746a849c91517c235cdfeaca4e734208f184bc08aae06797748988e95928f80b1', '2016-11-24 10:38:34'),
(6, 'mees6@ahv.ee', 'b40d03386fb8fd7dc6ca9c6f8d680dfc58d60fd6ea72c63f573cc5bfbb09695746a849c91517c235cdfeaca4e734208f184bc08aae06797748988e95928f80b1', '2016-11-24 10:38:50'),
(7, 'roland@roland.ee', '4c377cd6185a475dd49c607a31b7fb8a17d7c82d618498964c32de940d061ead822903d487ec06007db8b717144a1c0b0ced169f648453df2e939d1a5cee8dd2', '2016-11-24 11:06:58'),
(8, 'joosep@joosep.ee', '12b03226a6d8be9c6e8cd5e55dc6c7920caaa39df14aab92d5e3ea9340d1c8a4d3d0b8e4314f1f6ef131ba4bf1ceb9186ab87c801af0d5c95b1befb8cedae2b9', '2016-12-01 08:34:26'),
(9, 'a@hotmail.com', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', '2016-12-23 11:07:24'),
(10, 'test@eesti.ee', 'fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe', '2017-01-11 18:02:15'),
(11, 'test@test.ee', 'fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe', '2017-01-12 06:28:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpkasutajad`
--
ALTER TABLE `phpkasutajad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phpkasutajad`
--
ALTER TABLE `phpkasutajad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
