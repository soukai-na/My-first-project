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
-- Table structure for table `recruteurs`
--

CREATE TABLE `recruteurs` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `tableau1` text NOT NULL,
  `tableau2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruteurs`
--

INSERT INTO `recruteurs` (`id`, `titre`, `tableau1`, `tableau2`) VALUES
(1, '<font size=5px color=gray face=arial>Autorecrute rÃ©pond Ã  vos besoins en recrutement</font></br>\n        <font size=3px color=red>Autorecrute accompagne depuis 2006 tous les acteurs du secteur automobile en phase de recrutement</font>', ' <div style=\'background:#d7dae1;width:670;height:34;justify-content:center;font-weight:900;padding-top:20;padding-left:10;\'>Autorecrute en chiffres</div>\r\n      <div style=\'display:flex;width:678;border:1px solid #d7dae1;\'>\r\n        <div style=padding-left:26px;width:188.484;>\r\n\r\n          <div>\r\n            <font color=red size=5>80 000 </font></br>visiteurs uniques par mois\r\n          </div></br>\r\n          <div>\r\n            <font color=red size=5>450 000 </font></br>pages vues par mois\r\n          </div>\r\n        </div>\r\n        <hr style=margin-left:145px;>\r\n        <div style=width:280px;padding-right:87px;>\r\n          <div>\r\n            <font color=red size=5>+6500 </font>Candidatures par mois\r\n          </div></br>\r\n          <div>\r\n            <font color=red size=5>+2000</font> Nouveaux CV par mois\r\n          </div></br>\r\n          <div>\r\n            <font color=red size=5>+850</font>Nouvelles annonces par mois\r\n          </div>\r\n        </div>\r\n      </div>', '            <div style=background:#d7dae1;width:670;height:34;justify-content:center;font-weight:900;padding-top:20;padding-left:10;>Ils nous font confiance</div>\r\n\r\n<div class=people>\r\n        <div style=padding:10;><img src=images/f.png style=margin-left:55px; /></br></br>â€œLa CvthÃ¨que dâ€™Autorecrute.com nous a permis de recruter des profils trÃ¨s qualifiÃ©s correspondant Ã  nos besoins.â€</br></br></br><b style=margin-left:160;>Emilie N.</b></br><b style=margin-left:120;>Assistante DRH</b></div>\r\n        <hr>\r\n        <div style=padding:10;><img src=images/h.png style=margin-left:80; /></br></br>â€œJâ€™ai recrutÃ© un salariÃ© grÃ¢ce Ã  Autorecrute, je nâ€™hÃ©siterai pas Ã  faire appel Ã  leurs services pour mes prochains besoins de recrutementâ€</br></br></br><b style=margin-left:200;>Nathan B.</b></br><b style=margin-left:50px;>Directeur dâ€™un garage indÃ©pendant</b></div>\r\n        <hr>\r\n        <div style=padding:10;><img src=images/v.png style=margin-right:10; /></br></br>â€œJâ€™ai recrutÃ© trois commerciaux avec les services dâ€™Autorecruteâ€</br></br><b style=margin-left:60px;>Vincent L.</b></br><b style=margin-left:-3px;>Directeur de concession</b></div>\r\n      </div>\r\n      <div style=\'display:flex;border:1px solid rgb(215,218,225);width:678;\'><img src=images/1.png style=margin-left:55;margin-right:50; /><img src=images/2.png style=margin-right:50; /><img src=images/3.png style=margin-right:50; /><img src=images/4.png style=margin-right:50; /><img src=images/5.png /></div>\r\n    </div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recruteurs`
--
ALTER TABLE `recruteurs`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
