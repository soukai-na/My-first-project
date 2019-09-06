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
-- Table structure for table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `texte`, `lien`) VALUES
(1, 'Lâ€™actualitÃ© de lâ€™emploi automobile', '  <div class=pub1>\r\n          <font color=red><b>142 000 voitures volÃ©es en France en 2018</b></font></br>\r\n          Regis Delance-publiÃ© le 26/06/19</br>\r\n          <img src=\'images/Vol voitures juin 2019.jpg\' /><b>142 000 voitures volÃ©es en France en 2018</b></br></br></br>\r\n          Dâ€™aprÃ¨s une Ã©tude de la sociÃ©tÃ© Coyote Secure, spÃ©cialisÃ©e dans lâ€™aide...</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>\r\n        <div class=pub1>\r\n          <font color=red><b>Un centre dâ€™essai pour voitures autonomes inaugurÃ© prÃ¨s de Paris</b></font></br>\r\n          Regis Delanoe - publiÃ© le 19/06/19</br>\r\n          <img src=\'images/center.jpg\' /></br>\r\n          Avant dâ€™autoriser la mise en circulation des vÃ©hicules autonomes, il faut pouvoir les tester grandeur nature. Le ministre de lâ€™Economie Bruno Le Maire a inaugurÃ© en dÃ©but...</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>\r\n        <div class=pub1>\r\n          <font color=red><b>Radars automobiles : des changements Ã  venir</b></font></br>\r\n          Regis Delanoe - publiÃ© le 17/06/19</br>\r\n          <img src=\'images/Radars nouveautÃ©s juin 2019.jpg\' /></br>\r\n          Alors quâ€™en 2018, la Cour des comptes a relevÃ© 2,5 millions dâ€™infractions en moins par rapport Ã  lâ€™annÃ©e prÃ©cÃ©dente, soit un manque Ã  gagner...</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>\r\n        <div class=pub1>\r\n          <font color=red><b>La voiture, mode de transport indispensable pour plus de 7 FranÃ§ais sur 10</b></font></br>\r\n          RÃ©gis DELANOÃŠ - publiÃ© le 13/06/19</br>\r\n          <img src=\'images/Sondage voiture utilisation juin 2019.jpg\' /></br>\r\n          PossÃ©der une voiture demeure indispensable pour 73 % de la population franÃ§aise, 87 % des habitants dâ€™une zone pÃ©riurbaine et 95 % de ceux qui rÃ©sident en zone rurale....</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>', '>Toutes les actualitÃ©s'),
(2, 'Les interviews', '<div class=pub1>\r\n          <font color=red><b>Kia Motors France va former ses futurs vendeurs en alternance</b></font></br>\r\n          RÃ©gis DelanoÃ«- publiÃ© le 17/05/17</br>\r\n          <img src=\'images/Kia Motors France Mai 2017.jpg\' /></br>\r\n          La marque corÃ©enne va ouvrir Ã  la rentrÃ©e prochaine sa premiÃ¨re Ã©cole de vente en France. Au total, 15 jeunes vont faire partie de cette promotion inaugurale. Ils...</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>\r\n        <div class=pub1>\r\n          <font color=red><b>Â« Chez nous, la relation de confiance avec lâ€™automobiliste prime Â»</b></font></br>\r\n          @ Autorecrute- publiÃ© le 13/06/13</br>\r\n          <img src=\'images/DelkoWilliamBertrand.jpg\' /></br>\r\n          William Bertrand, responsable du DÃ©veloppement du rÃ©seau Delko Chaque rÃ©seau dâ€™entretien et de rÃ©paration revendique une spÃ©cificitÃ©, un positionnement propre. Delko se dÃ©nomme Â« Les nouveaux garages...</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>\r\n        <div class=pub1>\r\n          <font color=red><b>Â« OpÃ©rateur en CDD, une belle maniÃ¨re de se faire remarquer Â»</b></font></br>\r\n          @ Autorecrute- publiÃ© le 23/05/13</br>\r\n          <img src=\'images/annivspeedy.jpg\' /></br>\r\n          Que reprÃ©sente Speedy en 2013 ? Le groupe Speedy est prÃ©sent sur lâ€™ensemble du territoire national grÃ¢ce Ã  un rÃ©seau de 320 succursales et de 150 franchises. Au total, ce sont 2500 collaborateurs qui...</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>\r\n        <div class=pub1>\r\n          <font color=red><b>Â« Feu Vert Services, une opportunitÃ© pour les investisseurs en temps de crise Â»</b></font></br>\r\n          @ Autorecrute- publiÃ© le 03/05/13</br>\r\n          <img src=\'images/CentreFeuVertServicesvueext 1.jpeg\' /></br>\r\n          Feu Vert compte des succursales, au nombre de 130, et 180 franchisÃ©s, fin mars 2013. Pourquoi ce double statut ? Les succursales permettent dâ€™expÃ©rimenter, de tester un service, un protocole, un schÃ©ma...</br>\r\n          <h5>Lire la suite</h5>\r\n        </div>\r\n        </br>', '>Toutes les interviews'),
(3, 'Les dossiers', '          <div class=pub1>\r\n            <font color=red><b>Les erreurs Ã  Ã©viter en entretien</b></font></br>\r\n            Autorecrute publiÃ© le 19/02/14</br>\r\n            <img src=\'images/fond billet.jpg\' />\r\n            <b>Lâ€™imprÃ©paration fatale </b>\r\n            </br>\r\n            Lâ€™entretien est un exercice qui nÃ©cessite de minimiser les risques dâ€™improvisation le jour J. Il faut sâ€™entraÃ®ner en amont, en potassant votre CV et en prÃ©parant les rÃ©ponses...</br>\r\n            <h5>Lire la suite</h5>\r\n          </div>\r\n          </br>\r\n          <div class=pub1>\r\n            <font color=red><b>Tout savoir pour bien se vendre auprÃ¨s des employeurs</b></b></font></br>\r\n            Autorecrute publiÃ© le 12/02/14</br>\r\n            <img src=\'images/fond billet.jpg\' />\r\n            <b>Sur la forme, un comportement et une allure irrÃ©prochables </b>\r\n            </br>\r\n            La premiÃ¨re impression est essentielle et peut mÃªme sâ€™avÃ©rer dÃ©cisive. Lors dâ€™un salon, les recruteurs enchaÃ®nent les rendez-vous. Une...</br>\r\n            <h5>Lire la suite</h5>\r\n          </div>\r\n          </br>\r\n          <div class=pub1>\r\n            <font color=red><b>5 conseils pour prÃ©parer sa visite Ã  un salon de lâ€™emploi</b></font></br>\r\n            Autorecrute publiÃ© le 29/01/14</br>\r\n            <img src=\'images/fond billet.jpg\' />\r\n            <b> 1. EquipÃ© et en tenue de combat</b>\r\n            </br>\r\n            Il existe plÃ©thore de salons, tantÃ´t multisectoriels, tantÃ´t spÃ©cialisÃ©s. Avant de se rendre Ã  lâ€™une de ces manifestations, il est important de bien se prÃ©parer...</br>\r\n            <h5>Lire la suite</h5>\r\n          </div>\r\n          </br>\r\n          <div class=pub2>\r\n            <font color=red><b>Quelles opportunitÃ©s pour les IngÃ©nieurs automobiles ?</b></font></br>\r\n            publiÃ© le 29/04/08</br>\r\n            <div style=width:18;><img src=\'images/fondbillet.jpg\' /></div><b>Quelles opportunitÃ©s pour les IngÃ©nieurs automobiles ? Sur la ligne de dÃ©part </b>\r\n\r\n            </br>\r\n            <h5>Lire la suite</h5>\r\n          </div>\r\n          </br>', '>Toutes les dossiers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
