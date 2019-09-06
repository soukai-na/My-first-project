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
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `id` int(11) NOT NULL,
  `titre1` varchar(225) NOT NULL,
  `titre2` varchar(225) NOT NULL,
  `texte` text NOT NULL,
  `lien1` varchar(225) NOT NULL,
  `lien2` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`id`, `titre1`, `titre2`, `texte`, `lien1`, `lien2`, `img`) VALUES
(1, 'CENTRE AUTO ROADY - SAINT JULIEN EN GENEVOIS - PubliÃ© le 01/08/19', 'MÃ‰CANICIEN AUTOMOBILE OPÃ‰RATIONS RAPIDES H/F', 'Rejoignez Roady, 3Ã©me rÃ©seau de centres auto en France, et faites de votre passion pour la mÃ©canique votre mÃ©tier. Nous recherchons pour notre centre Roady de SAINT JULIEN EN GENEVOIS un Technicien', 'Contrat Ã Â  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-JULIEN-EN-GENEVOIS', 'Sauvegarder lâ€™annonce', '<img src=images/roady.png alt=CURIOZ-LOISIRS />'),
(2, 'CENTRE AUTO ROADY - SAINT JULIEN EN GENEVOIS - PubliÃ© le 01/08/19', 'TECHNICIEN VITRAGE AUTOMOBILE H/F', 'Rejoignez Roady, 3Ã©me rÃ©seau de centres auto en France, et faites de votre passion pour la mÃ©canique votre mÃ©tier. LE POSTE A POURVOIRNous recherchons dans le cadre du dÃ©veloppement de', 'Contrat Ã Â  DurÃ©e IndÃ©terminÃ©e (CDI) -', 'Sauvegarder lâ€™annonce', '<img src=images/roady.png />'),
(3, '', 'INSCRIVEZ-VOUS AU SALON EMPLOI AUTOMOBILE', 'Les 3 et 4 octobre 2019, venez rencontrer des recruteurs de marque du secteur de lâ€™automobile, place de la Concorde Ã Â  PARIS', 'PublicitÃ©', '', '<img src=images/boy.jpg />'),
(4, 'CENTRE AUTO ROADY - SAINT JULIEN EN GENEVOIS - PubliÃ© le 01/08/19', 'VENDEUR PIÃˆCES DE RECHANGE ET ACCESSOIRES AUTOMOBILE H/F', 'Rejoignez ROADY, 3Ã©me rÃ©seau de centres auto en France et faites de votre passion votre mÃ©tierNous recherchons pour notre centre ROADY de SAINT JULIEN EN GENEVOIS un vendeur en Ã©quipements et', 'Contrat Ã Â  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-JULIEN-EN-GENEVOIS', 'Sauvegarder lâ€™annonce', '<img src=images/roady.png />'),
(5, 'JBM CAMPLLONG - PubliÃ© le 01/08/19', 'TECHNICO-COMMERCIAL ITINÃ‰RANT AUTOMOBILE-INDUSTRIEL H/F', 'Avec plus de 20 ans dâ€™expÃ©rience, la sociÃ©tÃ© JBM Campllong SL est un distributeur espagnol dâ€™outils professionnels de rÃ©fÃ©rence pour les secteurs automobile, quincaillerie-bricolage et industriel. Son catalogue', 'Contrat Ã Â  DurÃ©e IndÃ©terminÃ©e (CDI) - PARIS, REIMS, ROUEN', 'Sauvegarder lâ€™annonce', '<img src=images/jbm.jpg.png />'),
(6, 'LYCEE PROFESSIONNEL POULLART DES PLACES - PubliÃ© le 01/08/19', 'ENSEIGNANT EN CAP MÃ‰CANIQUE AUTO EN LYCÃ‰E PROFESSIONNEL Ã€ THIAIS (94)', 'Le LycÃ©e Professionnel Poullart des Places des Apprentis dâ€™Auteuil de Thiais, privÃ© sous contrat, recherche :Un enseignant en CAP MÃ©canique Auto MVA Ã Â  temps plein (Maintenance des VÃ©hicules Automobiles', 'Contrat Ã Â  DurÃ©e DÃ©terminÃ©e (CDD) - THIAIS', 'Sauvegarder lâ€™annonce', '<img src=images/cap.png />'),
(7, 'RIESTER RH - PubliÃ© le 01/08/19', 'CONSEILLER DES VENTES (H/F)', 'Vos principales missions : Accueil des clients en concession Prospection, dÃ©veloppement et fidÃ©lisation de la clientÃ¨le RÃ©alisation dâ€™objectifs qualitatifs et quantitatifs fixÃ©s par la hiÃ©rarchie', 'Contrat Ã Â  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-MAXIMIN', 'Sauvegarder lâ€™annonce', '<img src=images/riester.png />'),
(8, 'SARL AUTOCOME - AUTO LECLERC - PubliÃ© le 01/08/19', 'DIRECTEUR CENTRE AUTO', 'Vous rÃ©alisez les objectifs commerciaux dÃ©terminÃ©s avec votre hiÃ©rarchie , permettant Ã Â  lâ€™entreprise dâ€™arriver dans un premier temps Ã Â  un bon Ã©quilibre financier et dans un deuxiÃ©me temps Ã Â  dÃ©gager des', 'Contrat Ã Â  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-AMAND-LES-EAUX', 'Sauvegarder lâ€™annonce', '<img src=images/elec.jpeg />'),
(9, 'BMW FOUREL - PubliÃ© le 01/08/19', 'AMBASSADEUR SHOWROOM / PRODUCT GENIUS', 'Dans le cadre de notre dÃ©veloppement, nous recrutons pour la concession de Valence, un(e) Product Genius.Missions gÃ©nÃ©rales:ÃƒÅ tre lâ€™ambassadeur de BMW : accueillir chaleureusement les prospects et clients et communiquer sa passion de la marque,Ã©couter les prospects et clients, leur prÃ©senter et leur ...', 'Contrat Ã Â  DurÃ©e IndÃ©terminÃ©e (CDI) - VALENCE', 'Sauvegarder lâ€™annonce', '<img src=images/bmw.png />');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
