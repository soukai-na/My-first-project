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
-- Structure de la table `recruter`
--

CREATE TABLE `recruter` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte1` text NOT NULL,
  `texte2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `recruter`
--

INSERT INTO `recruter` (`id`, `titre`, `texte1`, `texte2`) VALUES
(1, 'Ils recrutent', '<div class=ligne>\r\n   <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px;height:95; background:white;\'>\r\n      <div><img src=images/vendez.jpg /></div>\r\n      <div style=margin-left:5;><font color=rgb(66,139,202)><b>WKDA France-VendezVotre Voiture.fr<b></font></br>\r\n         <li>9 offres trouvÃ©es</li><li>Entreprise</li>\r\n      </div>\r\n     </div>\r\n \r\n \r\n   <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px; height:95; background:white;\'>\r\n     <div><img src=images/dekra.png /></div>\r\n     <div style=margin-left:5;><font color=rgb(66,139,202)><b>DEKRA Automotive Solutions</b></font>\r\n        </br><li>3 offres trouvÃ©es</li>\r\n             <li>Entreprise</li>\r\n     </div>\r\n   </div>\r\n  </div>\r\n </br></br>\r\n \r\n  <div class=ligne> \r\n   <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px;height:95; background:white;\'>\r\n       <div><img src=images/gnfa.jpeg /></div>\r\n       <div style=margin-left:5;><font color=rgb(66,139,202)><b>GNFA<b></font></br>\r\n            <li>3 offres trouvÃ©es</li>\r\n            <li>Entreprise</li>\r\n       </div>\r\n   </div>\r\n   <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px; height:95; background:white;\'>\r\n        <div><img src=images/siva.png /></div>\r\n        <div style=margin-left:5;><font color=rgb(66,139,202)><b>SIPA<b></font></br>\r\n             <li>3 offres trouvÃ©es</li>\r\n             <li>Entreprise</li>\r\n         </div>\r\n   </div>\r\n  </div>\r\n </br></br>\r\n \r\n  <div class=ligne>\r\n   <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px;height:95; background:white;\'>\r\n         <div><img src=images/lecluse.gif /></div>\r\n         <div style=margin-left:5;><font color=rgb(66,139,202)><b>LECLUSE EVEREUX<b></font></br>\r\n                  <li>3 offres trouvÃ©es</li>\r\n                  <li>Entreprise</li>\r\n         </div>\r\n   </div>\r\n \r\n   <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px; height:95; background:white;\'>\r\n         <div><img src=images/msx.gif /></div>\r\n         <div style=margin-left:5;><font color=rgb(66,139,202)><b>MSX International<b></font></br>\r\n                 <li>2 offres trouvÃ©es</li>\r\n                 <li>Entreprise</li>\r\n         </div>\r\n   </div>\r\n  </div>\r\n </br></br>', ' <div class=ligne>\r\n  <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px;height:95; background:white;\'>\r\n         <div><img src=images/altair.jpeg /></div>\r\n         <div style=margin-left:5;><font color=rgb(66,139,202)><b>Groupe Altair<b></font></br>\r\n                     <li>2 offres trouvÃ©es</li>\r\n                     <li>Entreprise</li>\r\n                     <li>Viry-Chatillon</li>\r\n         </div>\r\n  </div>\r\n\r\n  <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px; height:95; background:white;\'>\r\n         <div><img src=images/sas.jpg /></div>\r\n         <div style=margin-left:5;><font color=rgb(66,139,202)><b>FERREYRA SAS<b></font></br>\r\n                      <li>2 offres trouvÃ©es</li>\r\n                      <li>Entreprise</li>\r\n                      <li>VILLENEUVE SAINT GEORGES</li>\r\n         </div>\r\n  </div>\r\n</div>\r\n</br></br>\r\n\r\n <div class=ligne>\r\n  <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px;height:95; background:white;\'>\r\n         <div><img src=images/basf.png /></div>\r\n         <div style=margin-left:5;><font color=rgb(66,139,202)><b>BASF COATING S.A.S<b></font></br>\r\n                   <li>1 offre trouvÃ©e</li>\r\n                   <li>Entreprise</li>\r\n                   <li>Breuil-le-Sec</li>\r\n          </div>\r\n  </div>\r\n\r\n  <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px; height:95; background:white;\'>\r\n          <div><img src=images/indra.gif /></div>\r\n          <div style=margin-left:5;><font color=rgb(66,139,202)><b>INDRA<b></font></br>\r\n                     <li>1 offre trouvÃ©e</li>\r\n                     <li>Entreprise</li>\r\n                     <li>Villefontaine codex</li>\r\n          </div>\r\n  </div>\r\n</div>\r\n</br></br>\r\n\r\n <div class=ligne>\r\n  <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px;height:95; background:white;\'>\r\n       <div><img src=images/care.gif /></div>\r\n       <div style=margin-left:5;><font color=rgb(66,139,202)><b>THIERRY ASTIER-Care Motors<b></font></br>\r\n               <li>15 offres trouvÃ©es</li>\r\n               <li>cabinet de recrutement</li>\r\n        </div>\r\n  </div>\r\n\r\n  <div style=\'display:flex; border:2px solid rgb(243,245,247); width:325px; height:95; background:white;\'>\r\n  <div><img src=images/caree.gif /></div>\r\n        <div style=margin-left:5;><font color=rgb(66,139,202)><b>CARE CONSULTING ASSOCIES<b></font></br>\r\n             <li>5 offres trouvÃ©es</li>\r\n             <li>cabinet de recrutement</li>\r\n        </div>\r\n  </div>\r\n</div>\r\n</br></br>'),
(2, 'Ils nous font confiance', ' <div>\r\n      <img src=\'images/Como_logo.jpg\' style=margin-left:8;/>\r\n      <img src=\'images/vauban_logo.jpg\' style=margin-left:8;/>\r\n      <img src=\'images/ald automotive_logo.jpg\' style=margin-left:8;/>\r\n      <img src=\'images/allmakes_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div> \r\n     <img src=\'images/aramis-auto_logo.jpeg\' style=margin-left:8;/>\r\n     <img src=\'images/autodif_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/BMW_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/carrigue_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div>\r\n     <img src=\'images/Citroen_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Dacia_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Ford_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Groupe Bernard_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div>\r\n     <img src=\'images/groupe convenant_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Groupe courtois_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/hyundai_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/ISUZU_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div>\r\n     <img src=\'images/KIA_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/largus_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/lexus_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/logo_autorecrute-conseil_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div>\r\n     <img src=\'images/Mazda_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Mercedes_Benz_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Mini_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Mitsubishi_Motors_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div> \r\n     <img src=\'images/Nissan_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/parot_logo.jpg \'style=margin-left:8;/>\r\n     <img src=\'images/Peugeot_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/porsche_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div>\r\n     <img src=\'images/Renault_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/seat_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/skoda_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Smart_logo.jpg\' style=margin-left:8;/>\r\n   </div></br>\r\n   <div>\r\n     <img src=\'images/toyota_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/via_logo.jpg\' style=margin-left:8;/>\r\n     <img src=\'images/Volkswagen_logo.jpg\'/>\r\n   </div>', ' ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `recruter`
--
ALTER TABLE `recruter`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
