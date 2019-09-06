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
-- Table structure for table `cabinet`
--

CREATE TABLE `cabinet` (
  `id` int(11) NOT NULL,
  `titre1` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `titre2` varchar(255) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`id`, `titre1`, `image`, `titre2`, `texte`) VALUES
(1, 'Le conseil en recrutement', '<img src=images/prj5.jpg />', 'Contactez un conseil en recrutement', '<div > \r\n        <b style=font-size:20;>\r\n         MARIE DÃ‰BORAH\r\n        </b></br>\r\n        <font color=red>\r\n          <i class=\'glyphicon glyphicon-earphone\'></i>\r\n          01 53 29 11 24 \r\n        </font></br> \r\n        <font color=#428bca>\r\n          <i class=\'glyphicon glyphicon-envelope\'>\r\n          dmarie@largus.fr </i>\r\n        </font></br></br>\r\n        <b style=font-size:20;> \r\n        WILLIAMS Joseph\r\n        </b></br>\r\n        <font color=red>\r\n          <i class=\'glyphicon glyphicon-earphone\'></i>\r\n          01 53 29 35 82 \r\n        </font></br> \r\n        <font color=#428bca>\r\n          <i class=\'glyphicon glyphicon-envelope\'>\r\n          jwilliams@largus.fr</i>\r\n        </font></br>\r\n       </div>\r\n       <div style=margin-left:130;> \r\n        <b style=font-size:20;>\r\n        GERARD Maurine\r\n        </b></br>\r\n        <font color=red>\r\n          <i class=\'glyphicon glyphicon-earphone\'></i>\r\n          01 53 29 11 16 \r\n        </font></br> \r\n        <font color=#428bca>\r\n          <i class=\'glyphicon glyphicon-envelope\'>\r\n          mgerard@largus.fr</i>\r\n        </font></br>\r\n       </div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
