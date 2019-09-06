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
-- Table structure for table `button`
--

CREATE TABLE `button` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `buttons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `button`
--

INSERT INTO `button` (`id`, `titre`, `buttons`) VALUES
(1, 'Les familles de mÃ©tiers de lâ€™automobile', '<div>\n\n<a href=http://www.autorecrute.com/famille-metier/apres-vente-controle-entretien-mecanique><button>AprÃ©s vente / ContrÃ´le/ Entretien / Mecanique</button></a></br></br>\n<a href=http://www.autorecrute.com/famille-metier/communication-marketing><button>Communication /Marketing</button></a></br></br>\n<a href=http://www.autorecrute.com/famille-metier/gestionnaire-de-flotte><button>Gestionnaire de Flotte</button></a></br></br>\n<a href=http://www.autorecrute.com/famille-metier/logistique-transport-approvisionnement><button>Logistique / Transport / Approvisionnement</button></a></br></br>\n</div>\n\n<div style=margin-left:12;>\n\n<a href=http://www.autorecrute.com/famille-metier/commercial-vente-distribution><button>Commercial / Vente / Distribution</button></br></br>\n\n<a href=http://www.autorecrute.com/famille-metier/direction-rh-gestion-audit-comptabilite><button>Direction / RH / Gestion / Audit / ComptabilitÃ©</button></br></br>\n\n<a href=http://www.autorecrute.com/famille-metier/ingenierie-informatique-design><button>IngÃ©nierie / Informatique / Design</button></a></br></br>\n</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `button`
--
ALTER TABLE `button`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
