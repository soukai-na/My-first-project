-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2019 at 03:50 PM
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
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `titre`, `lien`) VALUES
(1, 'Lâ€™ENTREPRISE', '<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/qui-sommes-nous>Qui sommes-nous ?</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/mentions-legales>Mentions lÃ©gales</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/CGU>Conditions gÃ©nÃ©rales dâ€™utilisation</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/contactez-nous>Nous contacter</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/protection-donnees-personnelles>Politique de confidentialitÃ© et de protection des donnÃ©es personnelles</a>'),
(2, 'SERVICES', ' <i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/espace-recruteur>DÃ©poser une offre</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/espace-recruteur#la-cvtheque>Parcourir la CVthÃ¨que</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/cabinet-recrutement>Conseil en recrutement</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/recruter-stagiaire>Recruter un stagiaire</a></p></br>'),
(3, 'LES OFFRES PAR MÃ‰TIER', ' <i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/vendeur-automobile-vn-vo>Vendeur automobile VN / VO</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/mecanicien-automobile>MÃ©canicien automobile</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/mecanicien-poids-lourds-vi>MÃ©canicien poids lourds / VI</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/vendeur-magasinier>Vendeur magasinier</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/receptionnaire-apres-vente>RÃ©ceptionnaire aprÃ¨s-vente</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/vendeur-societe-pme-pmi-grands-comptes>Vendeur sociÃ©tÃ©/PME/PMI/Grands comptes</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/carrossier-peintre-automobile>Carrossier peintre automobile</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/attache-e-commercial-e>AttachÃ©(e) commercial(e)</a>'),
(4, 'LES OFFRES PAR MÃ‰TIER', ' <i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/chef-d-atelier>Chef dâ€™atelier</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/technicien>Technicien</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/chef-des-ventes-vn-vo>Chef des ventes VN-VO</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/responsable-magasin-pr>Responsable Magasin PR</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/secretaire-commercial>SecrÃ©taire commercial</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/magasinier-piece-de-rechange>Magasinier piece de rechange</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/responsable-des-ventes>Responsable des ventes</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/chef-d-equipe>Chef dâ€™Ã©quipe</a>'),
(5, 'LES OFFRES PAR MÃ‰TIER', ' <i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/comptable>Comptable</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/technicien-diagnostic>Technicien diagnostic</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/directeur-de-concession>Directeur de concession</a></br>\r\n<i class=material-icons style=color:#b1b1b1;width:20px;vertical-align:middle;>navigate_next</i><a href=https://www.autorecrute.com/metiers/chef-d-equipe>Chef dâ€™Ã©quipe</a>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
