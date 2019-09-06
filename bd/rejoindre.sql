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
-- Table structure for table `rejoindre`
--

CREATE TABLE `rejoindre` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejoindre`
--

INSERT INTO `rejoindre` (`id`, `titre`, `texte`, `image`) VALUES
(1, 'Rejoinez-nous', ' <i class=material-icons style=vertical-align:middle;>assignment</i>03/10/2019</br></br>\n      <i class=material-icons style=vertical-align:middle;>location_on</i>Place de la Concorde, 75008 Paris</br></br>\n      <i class=material-icons style=vertical-align:middle;>email</i>contact@autorecrute.com</br></br>\n      <i class=material-icons style=vertical-align:middle;>radio_button_unchecked</i>Concorde</br></br>\n      <i class=material-icons style=vertical-align:middle;>directions_bus</i>24,42,52,72,73,94</br></br>', '<img src=images/maps.png />');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rejoindre`
--
ALTER TABLE `rejoindre`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
