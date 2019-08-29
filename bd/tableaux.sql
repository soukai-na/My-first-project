-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 26 Août 2019 à 19:02
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
-- Structure de la table `tableaux`
--

CREATE TABLE `tableaux` (
  `id` int(11) NOT NULL,
  `tableau1` text NOT NULL,
  `tableau2` text NOT NULL,
  `tableau3` text NOT NULL,
  `tableau4` text NOT NULL,
  `tableau5` text NOT NULL,
  `tableau6` text NOT NULL,
  `tableau7` text NOT NULL,
  `tableau8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tableaux`
--

INSERT INTO `tableaux` (`id`, `tableau1`, `tableau2`, `tableau3`, `tableau4`, `tableau5`, `tableau6`, `tableau7`, `tableau8`) VALUES
(1, '<div class=taab1>\r\n      <div class=pack>PACK STARTER</div>\r\n      </br><b>A partir de 499 â‚¬ HT</b></br>30 jours de multidiffusion\r\n      <hr>\r\n      <font color=#6A95C2><b>Multidiffusion</b></br></br></br></br></br></br></br></font>\r\n      <hr>\r\n      <h5>Nos tarifs dÃ©gressifs</h5>\r\n      <table border=1 style=margin-left:20px;>\r\n        <tr>\r\n          <td>Pack</td>\r\n          <td>Prix HT â‚¬ </td>\r\n          <td>Prix Unitaire HT</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 2</td>\r\n          <td> 989</td>\r\n          <td>495</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 3</td>\r\n          <td> 1459 </td>\r\n          <td>486</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 5</td>\r\n          <td> 2289</td>\r\n          <td>458</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 10</td>\r\n          <td>3799</td>\r\n          <td> 380</td>\r\n        </tr>\r\n      </table></br>\r\n      <a href=https://www.autorecrute.com/espace-recruteur/inscription style=color:white;text-decoration:none;><button>Contactez-nous</button></a>\r\n    </div>', '<div class=taab2 style=margin-left:60;>\r\n      <div class=pack>PACK PREMIUM</div>\r\n      </br><b>A partir de 699 â‚¬ HT</b></br>60 jours de multidiffusion\r\n      <hr>\r\n      <font color=#6A95C2><b>Multidiffusion</b></br>+</br>(Par tranche de 10 annonces)</br>+</br>Aide Ã  la rÃ©daction et mise en ligne</br></br></br></font>\r\n      <hr>\r\n      <h5>Nos tarifs dÃ©gressifs</h5>\r\n      <table border=1 style=margin-left:20px;>\r\n        <tr>\r\n          <td>Pack</td>\r\n          <td>Prix HT â‚¬ </td>\r\n          <td>Prix Unitaire HT</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 2</td>\r\n          <td>1319</td>\r\n          <td>660</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 3</td>\r\n          <td> 1879</td>\r\n          <td>626</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 5</td>\r\n          <td>2709</td>\r\n          <td>542</td>\r\n        </tr>\r\n        <tr>\r\n          <td>Pack 10</td>\r\n          <td>4429</td>\r\n          <td>443</td>\r\n        </tr>\r\n      </table></br>\r\n      <a href=https://www.autorecrute.com/espace-recruteur/inscription style=color:white;text-decoration:none;><button>Contactez-nous</button></a>\r\n    </div>', '<div class=taab3 style=margin-left:60;>\r\n      <div class=pack>PACK STARTER</div>\r\n      </br><b>A partir de 999 â‚¬ HT</b></br>3 - 6 - 12 mois\r\n      <hr>\r\n      <font color=#6A95C2><b>Multidiffusion</b></br>+</br>\r\n        <font color=#6A95C2><b>Annonce modifiable</b></br>durant toute la durÃ©e</br>+</br>5 cv offerts</br>(Par tranche de 10 annonces)</br>+</br>Aide Ã  la rÃ©daction et mise en ligne</br></font>\r\n        <hr>\r\n        </br></br>\r\n        <table border=1 style=\'margin-left:48px;margin-right:41;\'>\r\n          <tr>\r\n          <tr>\r\n            <td>Nous proposons des tarifs dÃ©gressifs pour les pÃ©riodes de 3, 6 et 12 mois en fonction du nombre dâ€™annonces souhaitÃ©es</td>\r\n          </tr>\r\n        </table></br>\r\n        <a href=https://www.autorecrute.com/espace-recruteur/inscription style=color:white;text-decoration:none;><button>Contactez-nous</button></a>\r\n    </div>', '<font color=#23A4FF size=5 face=sans-serif><b>Multidiffusion</b></font></br>\r\n    <img src=\'images/Screenshot_2019-07-18 Autorecrute, Espace Recruteur.png\' />', ' <div style=background:rgb(215,218,225);width:1013;height:34;justify-content:center;font-weight:900;padding-top:20;padding-left:10;color:black;>Contact : publications dâ€™annonces, Ã©vÃ©nements, offres mÃ©dia (solutions digitales)</div>\n    <div class=contact>\n      <div style=margin-right:165;><b>Bennour Amrane</b></br>abennour@largus.fr</br>\n        <font color=red>01 53 29 11 40</font>\n      </div>\n      <div style=margin-right:195;><b>Gazard GÃ©raldine</b></br>ggazard@largus.fr</br>\n        <font color=red>01 53 29 11 51</font>\n      </div>\n\n      <a href=https://www.linkedin.com/in/autorecrute-conseil-1bb54164 style=background:white;><img src=images/download.png style=margin-right:20;width:100;height:60; /></a>\n      <a href=https://fr.viadeo.com/fr/profile/auto.recrute style=background:white;><img src=images/viadio.jpg style=margin-right:20;width:100;height:65; /></a>\n      <a href=https://www.facebook.com/autorecrute/ style=background:white;><img src=images/fb.png style=width:50;height:50; /></a>\n    </div>', '\r\n    <div style=\"background:rgb(215,218,225);width:488;height:34;justify-content:center;font-weight:900;padding-top:20;padding-left:10;color:black;\">Le salon emploi automobile</div>\r\n<div style=\'display:flex;padding:30;font-family:sans-serif;font-size:28;border:1px solid rgb(215,218,225);width:436;\'>\r\n        <div>\r\n          <font color=silver>2 salons par an</font></br>\r\n          <font color=red size=5>Mars & Octobre</font>\r\n        </div>\r\n        <div style=\'border:1px solid white;margin-top:14px;margin-left:80;\'><a href=http://localhost/autorecrute/salons.php target=blanck ;><img src=images/SALON.png style=width:131;height:45; /></a></div>\r\n      </div>', '<div style=\'background:rgb(215,218,225);width:488;height:34;justify-content:center;font-weight:900;padding-top:20;padding-left:10;color:black;\'>Afterwork Job Dating</div>\r\n      <div style=\'display:flex;padding:30;border:1px solid rgb(215,218,225);width:436;\'>\r\n        <div><img src=images/job.png /></div>\r\n        <div style=margin-left:65;>\r\n          <font color=#585b62 face=sans-serif><b>EvÃ©nements de recrutement en rÃ©gions</b></font>\r\n        </div>\r\n      </div>', '<div style=\'background:rgb(215,218,225);width:1013;height:34;justify-content:center;font-weight:900;padding-top:20;padding-left:10;color:black;\'>Cabinet Conseil</div>\r\n    <div style=\'padding:10;border:1px rgb(215,218,225) solid;width:1001;\'>\r\n      <font color=red size=5 face=sans-serif>Nos prestations</font></br>\r\n      <p style=\'color:black;width:420;\'>RÃ©daction conjointe du descriptif du poste\r\n        Une mise en place des outils de communication et des dispositifs de recherche\r\n        Des entretiens de prÃ©selection des candidats ciblÃ©s\r\n        La convocation des candidats en entretien\r\n        Des prises de rÃ©fÃ©rences\r\n        Un compte-rendu et analyse des candidats rencontrÃ©s\r\n        Une dÃ©cision dâ€™embauche concertÃ©e\r\n        Un suivi des candidats durant la phase dâ€™intÃ©gration</p>\r\n      </br>\r\n      <font color=red size=5 face=sans-serif>Nos engagements</font></br>\r\n      <p style=color:black;width:580;>Remplacement des candidats en cas de rupture de contrat de travail selon le forfait choisi.\r\n        Respect de notre charte de dÃ©ontologie (Non dÃ©bauchage et confidentialitÃ© des informations)\r\n        Engagement de moyen jusquâ€™Ã  rÃ©alisation de la prestation</p>\r\n      </br>\r\n      <a href=http://localhost/autorecrute/cabinet-conseil.php style=background:white;><button style=\'margin-left:340;background:rgb(230,51,60);color:white;width:220;height:55;border:1px black solid;font-size:22;font-family:sans-serif;\'>Contactez-nous</button></a>\r\n    </div>');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tableaux`
--
ALTER TABLE `tableaux`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
