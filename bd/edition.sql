-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 26 Août 2019 à 19:01
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autorecrute`
--

-- --------------------------------------------------------

--
-- Structure de la table `edition`
--

CREATE TABLE `edition` (
  `id` int(11) NOT NULL,
  `titre1` varchar(255) NOT NULL,
  `titre2` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `edition`
--

INSERT INTO `edition` (`id`, `titre1`, `titre2`, `texte`, `lien`) VALUES
(1, 'Notre Ã©dition prÃ©cÃ©dente', '11 Ã¨me Ã©dition', 'OrganisÃ© le 4 avril 2019 par Autorecrute, NÂ°1 du recrutement automobile en France, le Salon de lâ€™emploi Automobile fait son retour au siÃ¨ge social du Groupe Argus Ã  Paris 10Ã¨me. \nCe salon est ouvert Ã  tous les mÃ©tiers et formations du secteur automobile. \nTous les postes de la vente et lâ€™aprÃ¨s-vente : mÃ©caniciens, carrossiers, chefs dâ€™atelier, rÃ©ceptionnaires mais aussi tous les postes de commerciaux VN/VO, chefs des ventes et directeurs de concession. \nTous les postes supports dans les domaines de lâ€™assistanat, les ressources Humaines, le marketing, la communication, la finance et la comptabilitÃ©â€¦ \nChaque Ã©dition accueille entre 1000 et 3000 visiteurs. La derniÃ¨re Ã©dition qui sâ€™est tenue place de la Concorde, les 4 et 5 octobre 2018, en partenariat avec Paris Pour lâ€™Emploi, a remportÃ© un vif succÃ¨s en rassemblant prÃ¨s de 2000 visiteurs venus Ã  la rencontre de recruteurs. 2400 postes Ã©taient Ã  pouvoir dans le secteur automobile. \nUnique forum emploi dÃ©diÃ© Ã  lâ€™automobile, en 6 ans dâ€™existence, le Salon de lâ€™emploi Automobile est dÃ©sormais devenu le rendez-vous incontournable du secteur. ', 'AccÃ©dez Ã  notre derniÃ¨re Ã©dition'),
(1, 'Notre Ã©dition prÃ©cÃ©dente', '11 Ã¨me Ã©dition', 'OrganisÃ© le 4 avril 2019 par Autorecrute, NÂ°1 du recrutement automobile en France, le Salon de lâ€™emploi Automobile fait son retour au siÃ¨ge social du Groupe Argus Ã  Paris 10Ã¨me. \nCe salon est ouvert Ã  tous les mÃ©tiers et formations du secteur automobile. \nTous les postes de la vente et lâ€™aprÃ¨s-vente : mÃ©caniciens, carrossiers, chefs dâ€™atelier, rÃ©ceptionnaires mais aussi tous les postes de commerciaux VN/VO, chefs des ventes et directeurs de concession. \nTous les postes supports dans les domaines de lâ€™assistanat, les ressources Humaines, le marketing, la communication, la finance et la comptabilitÃ©â€¦ \nChaque Ã©dition accueille entre 1000 et 3000 visiteurs. La derniÃ¨re Ã©dition qui sâ€™est tenue place de la Concorde, les 4 et 5 octobre 2018, en partenariat avec Paris Pour lâ€™Emploi, a remportÃ© un vif succÃ¨s en rassemblant prÃ¨s de 2000 visiteurs venus Ã  la rencontre de recruteurs. 2400 postes Ã©taient Ã  pouvoir dans le secteur automobile. \nUnique forum emploi dÃ©diÃ© Ã  lâ€™automobile, en 6 ans dâ€™existence, le Salon de lâ€™emploi Automobile est dÃ©sormais devenu le rendez-vous incontournable du secteur. ', 'AccÃ©dez Ã  notre derniÃ¨re Ã©dition'),
(1, 'Notre Ã©dition prÃ©cÃ©dente', '11 Ã¨me Ã©dition', 'OrganisÃ© le 4 avril 2019 par Autorecrute, NÂ°1 du recrutement automobile en France, le Salon de lâ€™emploi Automobile fait son retour au siÃ¨ge social du Groupe Argus Ã  Paris 10Ã¨me. \nCe salon est ouvert Ã  tous les mÃ©tiers et formations du secteur automobile. \nTous les postes de la vente et lâ€™aprÃ¨s-vente : mÃ©caniciens, carrossiers, chefs dâ€™atelier, rÃ©ceptionnaires mais aussi tous les postes de commerciaux VN/VO, chefs des ventes et directeurs de concession. \nTous les postes supports dans les domaines de lâ€™assistanat, les ressources Humaines, le marketing, la communication, la finance et la comptabilitÃ©â€¦ \nChaque Ã©dition accueille entre 1000 et 3000 visiteurs. La derniÃ¨re Ã©dition qui sâ€™est tenue place de la Concorde, les 4 et 5 octobre 2018, en partenariat avec Paris Pour lâ€™Emploi, a remportÃ© un vif succÃ¨s en rassemblant prÃ¨s de 2000 visiteurs venus Ã  la rencontre de recruteurs. 2400 postes Ã©taient Ã  pouvoir dans le secteur automobile. \nUnique forum emploi dÃ©diÃ© Ã  lâ€™automobile, en 6 ans dâ€™existence, le Salon de lâ€™emploi Automobile est dÃ©sormais devenu le rendez-vous incontournable du secteur. ', 'AccÃ©dez Ã  notre derniÃ¨re Ã©dition'),
(1, 'Notre Ã©dition prÃ©cÃ©dente', '11 Ã¨me Ã©dition', 'OrganisÃ© le 4 avril 2019 par Autorecrute, NÂ°1 du recrutement automobile en France, le Salon de lâ€™emploi Automobile fait son retour au siÃ¨ge social du Groupe Argus Ã  Paris 10Ã¨me. \nCe salon est ouvert Ã  tous les mÃ©tiers et formations du secteur automobile. \nTous les postes de la vente et lâ€™aprÃ¨s-vente : mÃ©caniciens, carrossiers, chefs dâ€™atelier, rÃ©ceptionnaires mais aussi tous les postes de commerciaux VN/VO, chefs des ventes et directeurs de concession. \nTous les postes supports dans les domaines de lâ€™assistanat, les ressources Humaines, le marketing, la communication, la finance et la comptabilitÃ©â€¦ \nChaque Ã©dition accueille entre 1000 et 3000 visiteurs. La derniÃ¨re Ã©dition qui sâ€™est tenue place de la Concorde, les 4 et 5 octobre 2018, en partenariat avec Paris Pour lâ€™Emploi, a remportÃ© un vif succÃ¨s en rassemblant prÃ¨s de 2000 visiteurs venus Ã  la rencontre de recruteurs. 2400 postes Ã©taient Ã  pouvoir dans le secteur automobile. \nUnique forum emploi dÃ©diÃ© Ã  lâ€™automobile, en 6 ans dâ€™existence, le Salon de lâ€™emploi Automobile est dÃ©sormais devenu le rendez-vous incontournable du secteur. ', 'AccÃ©dez Ã  notre derniÃ¨re Ã©dition');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
