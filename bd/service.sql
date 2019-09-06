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
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte1` text NOT NULL,
  `texte2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `titre`, `texte1`, `texte2`) VALUES
(1, 'Les services dâ€™Autorecrute', '<div id=candidat>\r\n\r\n<p><font color=red size=3px>Pour les candidats</font></p>\r\n<div id=ec>\r\n<div id=tabec>\r\n<div id=emploi ><div><img src=images/6g.jpg /></div><div><font color=red size=4px><a href=http://www.autorecrute.com/offre-emploi-automobile>Les offres dâ€™emploi</a></font></br>DÃ©couvrez les 668 offres dâ€™emploi</br></br></br><a href=http://www.autorecrute.com/offre-emploi-automobile><span>Consultez les annoncesâ†’</span></a></div></div>\r\n\r\n<div id=cv style=margin-left:55;><div><img src=images/6d.jpg /></div><div><font color=red size=4px><a href=http://www.autorecrute.com/espace-candidat/inscription>La CVthÃ¨que</a></font></br>DÃ©posez votre CV pour Ãªtre contactÃ© directement par des recruteurs</br></br><a href=http://www.autorecrute.com/offre-emploi-automobile><span>DÃ©poser son CVâ†’</span></a></div></div>\r\n</div>\r\n</div>\r\n<div id=service><a href=http://www.autorecrute.com/offre-emploi-automobile>Tous les services</a></div>\r\n</div>\r\n</br>', '<div id=candidat>\r\n<p><font color=red size=3px>Pour les recruteurs</font></p>\r\n<div id=ec>\r\n<div id=tabec>\r\n<div id=emploi><div><img src=images/7g.jpg /></div><div><font color=red size=4px><a href=http://www.autorecrute.com/espace-recruteur>Publiez vos annonces</a></font></br>Postez vos annonces sur le site leader du recrutement automobile</br></br></br><a href=http://www.autorecrute.com/espace-recruteur><span>Se renseignerâ†’</span></a></div></div>\r\n<div id=cv style=margin-left:55;><div><img src=images/7d.jpg /></div><div><font color=red size=4px><a href=http://www.autorecrute.com/cabinet-recrutement>\r\nCabinet de recrutement</a></font></br>Trouvez la personne quâ€™il vous faut parmi les 148452 CV de notre base</br></br></br><a href=http://www.autorecrute.com/cabinet-recrutement><span>Plus dâ€™informationsâ†’</span></a></div></div>\r\n</div>\r\n</div>\r\n<div id=service><a href=http://www.autorecrute.com/espace-recruteur>Tous les services</a></div>'),
(2, 'Lâ€™actualitÃ© de lâ€™emploi automobile', '<div id=N>\n<a href=http://www.autorecrute.com/actualite-recrutement/30-km-h-en-ville-une-baisse-qui-pourrait-s-etendre/1123><div id=opc>\n                                       <p>PubliÃ© il y a 1 jours</p><hr><span><b>30 km/h en ville : une baisse qui pourrait  </br>sâ€™Ã©tendre</b></span>\n</div></a>\n</div>', '<div id=actu>\n\n<a href=https://www.autorecrute.com/actualite-recrutement/a-vos-agendas-12e-salon-de-l-emploi-automobile-les-3-et-4-octobre-prochains/1124>Ã€ vos agendas : 12e Salon de lâ€™emploi automobile les 3 et 4 octobre prochains</a></br><span>PubliÃ© il y a 2 jours</span></br>\n\n<a href=https://www.autorecrute.com/actualite-recrutement/30-km-h-en-ville-une-baisse-qui-pourrait-s-etendre/1123>30 km/h en ville : une baisse qui pourrait sâ€™Ã©tendre</a></br><span>PubliÃ© il y a 21 jours</span></br>\n\n<a href=https://www.autorecrute.com/actualite-recrutement/victime-de-son-succes-la-prime-a-la-conversion-bientot-limitee/1122>Victime de son succÃ¨s, la prime Ã  la conversion bientÃ´t limitÃ©e ?</a></br><span>PubliÃ© il y a 23 jours</span>\n</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
