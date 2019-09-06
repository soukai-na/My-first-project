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
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`id`, `titre`, `contenu`) VALUES
(1, 'Le salon', 'Autorecrute 1er site spÃ©cialisÃ© dans lâ€™emploi automobile organise 2 fois par an des Salons de lâ€™emploi Automobile : au siÃ¨ge social du groupe Argus Ã  Paris et en partenariat avec Paris pour lâ€™Emploi place de la Concorde.\n\nOuvert Ã  tous les mÃ©tiers et formations du secteur automobile chaque Ã©dition accueille entre 1000 et 3000 visiteurs.\n\nLa derniÃ¨re Ã©dition qui sâ€™est tenue le 4 et 5 octobre 2018, a remportÃ© un vif succÃ¨s en rassemblant prÃ¨s de 2000 visiteurs venus Ã  la rencontre de recruteurs reconnus sur le marchÃ© automobile qui proposaient prÃ¨s de 2400 postes.\n\nEn 6 ans dâ€™existence, le Salon de lâ€™emploi Automobile, unique forum emploi dÃ©diÃ© Ã  lâ€™automobile, sâ€™est imposÃ© comme le rendez-vous emploi incontournable du secteur.'),
(2, '12 Ã¨me Ã©dition', 'La 12Ã¨me Ã©dition du Salon de lâ€™emploi Automobile aura lieu les 3 et 4 octobre 2019, Place de la Concorde Ã  Paris.\r\n\r\n  En partenariat avec Paris Pour lâ€™Emploi, Autorecrute, NÂ°1 du recrutement de lâ€™emploi automobile, animera, pour la 4Ã¨me annÃ©e consÃ©cutive, le pavillon dÃ©diÃ© Ã  ce secteur qui regroupera des distributeurs, des Ã©quipementiers, des loueurs, des cabinets de recrutement, des centres auto et de formation.\r\n  \r\n  PrÃ¨s de 3000 candidats du secteur automobile seront attendus pour cette Ã©dition avec des expertises allant du mÃ©canicien, du carrossier au chef dâ€™atelier, du rÃ©ceptionnaire mÃ©canique en passant par des postes dâ€™acheteurs automobiles, de commerciaux VN/VO, chefs de vente jusquâ€™aux directeurs de concession, de plaquesâ€¦ sans omettre toutes les fonctions supports dans les domaines de lâ€™assistanat, des Ressources Humaines, de la communication, du marketing, de la finance et de la comptabilitÃ©.\r\n  \r\n  Unique forum emploi dÃ©diÃ© aux professionnels de lâ€™automobile, le Salon de lâ€™emploi Automobile sâ€™impose comme le rendez-vous emploi incontournable du secteur.\r\n  \r\n  Pour rÃ©server votre stand, contactez nos conseillers :\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
