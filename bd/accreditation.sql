-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2019 at 03:49 PM
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
-- Table structure for table `accreditation`
--

CREATE TABLE `accreditation` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte1` varchar(255) NOT NULL,
  `texte2` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accreditation`
--

INSERT INTO `accreditation` (`id`, `titre`, `texte1`, `texte2`, `tel`, `button`) VALUES
(1, 'AccrÃ©ditation presse', 'Flash-rp', 'PILONCHERY Soraya', 'Tel: 06 20 00 62 63', 'Contact');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accreditation`
--
ALTER TABLE `accreditation`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
