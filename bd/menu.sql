-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2019 at 03:51 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autorecrute`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `titre1` varchar(255) NOT NULL,
  `titre2` varchar(255) NOT NULL,
  `titre3` varchar(255) NOT NULL,
  `titre4` varchar(255) NOT NULL,
  `titre5` varchar(255) NOT NULL,
  `titre6` varchar(255) NOT NULL,
  `titre7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `logo`, `titre1`, `titre2`, `titre3`, `titre4`, `titre5`, `titre6`, `titre7`) VALUES
(1, '<img src=images/auto.png alt=Autorecrute style=margin-right:30;/>', 'Emploi et stage', 'MÃ©tiers', 'Ils recrutent', 'Cabinet Conseil', 'Salons', 'ActualitÃ©', 'Recruteurs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
