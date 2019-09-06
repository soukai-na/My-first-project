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
-- Table structure for table `recherche`
--

CREATE TABLE `recherche` (
  `id` int(11) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `input` text NOT NULL,
  `selectt` text NOT NULL,
  `button` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recherche`
--

INSERT INTO `recherche` (`id`, `texte`, `input`, `selectt`, `button`) VALUES
(1, '699 offres Ã  jour', '<input type=text name=terme placeholder=Rechercher-par-mot-clefs   />', '<select name=region ><option name=region value=selectioner>SÃ©lectionner une rÃ©gion</option>\n<option name=region value=alsace>Alsace</option>\n<option name=region value=aquitaine>Aquitaine</option>\n<option name=region value=auvergne>Auvergne</option>\n<option name=region value=bourgogne>Bourgogne</option>\n<option name=region value=bretagne>Bratagne</option>\n<option name=region value=centre-val>Centre-val de loire</option>\n<option name=region value=champagne-ardenne>Champagne-ardenne</option>\n<option name=region value=corse>Corse</option>\n<option name=region value=franche-comtÃ©>Franche-comtÃ©</option>\n<option name=region value=iie-de-france>IIe-de-France</option>\n<option name=region value=languedoc-roussillon>Languedoc-roussillon</option>\n<option name=region value=limousin>Limousin</option>\n<option name=region value=lorraine>Lorraine</option>\n<option name=region value=midi-pyrÃ©nÃ©es>Midi-pyrÃ©nÃ©es</option>\n<option name=region value=nord-pas-de-calais>Nord-Pas-de-Calais</option>\n<option name=region value=basse-normandie>Basse-narmandie</option>\n<option name=region value=haute-normandie>Haute-normandie</option>\n<option name=region value=pays-de-la-loire>Pays de loire</option>\n<option name=region value=picardie>Picardie</option>\n<option name=region value=poitou-charentes>Poitou-Charentes</option>\n<option name=region value=provence-alpes-cote-dazure>Provence-Alpes-Cote dâ€™azure</option>\n<option name=region value=rhone-alpes>Rhone-Alpes</option>\n<option name=region value=outre-mer>Outre-Mer</option>\n<option name=region value=etranger>Etranger</option>\n</select>', '<input type=submit name=s value=RechercherðŸ” />');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
