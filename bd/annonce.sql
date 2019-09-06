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
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `exemple` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `exemple`) VALUES
(1, 'Les annonces Ã  la lune', '<div id=f>\n<div id=f1><div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-thierry-astier-care-motors/vendeur-voitures-neuves-confirme-marque-generaliste-h-f/94512>\n<b>VENDEUR VOITURES NEUVES C... </b>\n</a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-thierry-astier-care-motors/73>THIERRY ASTIER - Care Motors</a></font>\n</div></br>\n\n<div id=p2>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sarl-autocome-auto-leclerc/directeur-centre-auto/94489>\n<b>DIRECTEUR CENTRE AUTO </b></a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sarl-autocome-auto-leclerc/2950>SARL AUTOCOME - AUTO LECLERC</a></font>\n</div></br>\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-act/analyste-standards-ventes-et-apres-vente-industrie-automobile-h-f/94272>\n<b>Analyste Standards Ventes et AprÃ¨s... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-act/1577>ACT</a>\n</font></div></br>\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-autorecrute/un-e-secretaire-commerciale-marque-premium-h-f-78-en-cdi/94515>\n<b>Un(e) SecrÃ©taire commerciale ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/1630>AUTORECRUTE</a>\n</font></div></br>\n<div id=p5>\n<span><font color=red size=3px>\n<a href=http://www.autorecrute.com/offre-emploi-autorecrute/un-e-conseiller-e-commerciale-vn-et-vo-marque-allemande-h-f-35-en-cdi/94350>\n<b>Un(e) Responsable de Magasine ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/2951>AUTORECRUTE</a></font></div></br>\n</div>\n\n<div id=f2 style=margin-left:10;>\n\n<div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sipa/vendeur-vo-h-f/94485>\n<b>Vendeur VO (H/F) </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sipa/443>SIPA</a></font></div></br>\n\n<div id=p2><span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-picard-autos-33/conseiller-e-commercial-e-hall-vehicules-neufs/94482>\n<b>CONSEILLER(E) COMMERCIAL(E) HALL V...</b>\n</a></font></span></br>\n<font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-picard-autos-33/562>PICARD AUTOS 33\n</a></font></div></br>\n\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-gnfa/formateur-formatrice-technique-vehicules-industriels-en-cdi/93253>\n<b>Formateur / Formatrice techniqu... </b></a>\n</font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-gnfa/320>GNFA</a>\n</font></div></br>\n\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-centre-auto-roady-argeles-sur-mer/receptionnaire-vendeur-libre-service/94498>\n<b>RÃ©ceptionnaire - Vendeur libre s...</b></a></font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-centre-auto-roady-argeles-sur-mer/2791>CENTRE AUTO ROADY - ARGELES SUR MER</a>\n</font></div></br>\n\n<div id=p5>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-izyscoot/technicien-vitrage-automobile-h-f/94494>\n<b>Technicien vitrage automobile H/F </b>\n</a></font></span>\n</br><font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-izyscoot/2952>IZYSCOOT</a></font></div></br></div>\n</div>'),
(1, 'Les annonces Ã  la lune', '<div id=f>\n<div id=f1><div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-thierry-astier-care-motors/vendeur-voitures-neuves-confirme-marque-generaliste-h-f/94512>\n<b>VENDEUR VOITURES NEUVES C... </b>\n</a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-thierry-astier-care-motors/73>THIERRY ASTIER - Care Motors</a></font>\n</div></br>\n\n<div id=p2>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sarl-autocome-auto-leclerc/directeur-centre-auto/94489>\n<b>DIRECTEUR CENTRE AUTO </b></a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sarl-autocome-auto-leclerc/2950>SARL AUTOCOME - AUTO LECLERC</a></font>\n</div></br>\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-act/analyste-standards-ventes-et-apres-vente-industrie-automobile-h-f/94272>\n<b>Analyste Standards Ventes et AprÃ¨s... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-act/1577>ACT</a>\n</font></div></br>\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-autorecrute/un-e-secretaire-commerciale-marque-premium-h-f-78-en-cdi/94515>\n<b>Un(e) SecrÃ©taire commerciale ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/1630>AUTORECRUTE</a>\n</font></div></br>\n<div id=p5>\n<span><font color=red size=3px>\n<a href=http://www.autorecrute.com/offre-emploi-autorecrute/un-e-conseiller-e-commerciale-vn-et-vo-marque-allemande-h-f-35-en-cdi/94350>\n<b>Un(e) Responsable de Magasine ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/2951>AUTORECRUTE</a></font></div></br>\n</div>\n\n<div id=f2 style=margin-left:10;>\n\n<div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sipa/vendeur-vo-h-f/94485>\n<b>Vendeur VO (H/F) </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sipa/443>SIPA</a></font></div></br>\n\n<div id=p2><span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-picard-autos-33/conseiller-e-commercial-e-hall-vehicules-neufs/94482>\n<b>CONSEILLER(E) COMMERCIAL(E) HALL V...</b>\n</a></font></span></br>\n<font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-picard-autos-33/562>PICARD AUTOS 33\n</a></font></div></br>\n\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-gnfa/formateur-formatrice-technique-vehicules-industriels-en-cdi/93253>\n<b>Formateur / Formatrice techniqu... </b></a>\n</font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-gnfa/320>GNFA</a>\n</font></div></br>\n\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-centre-auto-roady-argeles-sur-mer/receptionnaire-vendeur-libre-service/94498>\n<b>RÃ©ceptionnaire - Vendeur libre s...</b></a></font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-centre-auto-roady-argeles-sur-mer/2791>CENTRE AUTO ROADY - ARGELES SUR MER</a>\n</font></div></br>\n\n<div id=p5>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-izyscoot/technicien-vitrage-automobile-h-f/94494>\n<b>Technicien vitrage automobile H/F </b>\n</a></font></span>\n</br><font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-izyscoot/2952>IZYSCOOT</a></font></div></br></div>\n</div>'),
(1, 'Les annonces Ã  la lune', '<div id=f>\n<div id=f1><div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-thierry-astier-care-motors/vendeur-voitures-neuves-confirme-marque-generaliste-h-f/94512>\n<b>VENDEUR VOITURES NEUVES C... </b>\n</a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-thierry-astier-care-motors/73>THIERRY ASTIER - Care Motors</a></font>\n</div></br>\n\n<div id=p2>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sarl-autocome-auto-leclerc/directeur-centre-auto/94489>\n<b>DIRECTEUR CENTRE AUTO </b></a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sarl-autocome-auto-leclerc/2950>SARL AUTOCOME - AUTO LECLERC</a></font>\n</div></br>\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-act/analyste-standards-ventes-et-apres-vente-industrie-automobile-h-f/94272>\n<b>Analyste Standards Ventes et AprÃ¨s... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-act/1577>ACT</a>\n</font></div></br>\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-autorecrute/un-e-secretaire-commerciale-marque-premium-h-f-78-en-cdi/94515>\n<b>Un(e) SecrÃ©taire commerciale ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/1630>AUTORECRUTE</a>\n</font></div></br>\n<div id=p5>\n<span><font color=red size=3px>\n<a href=http://www.autorecrute.com/offre-emploi-autorecrute/un-e-conseiller-e-commerciale-vn-et-vo-marque-allemande-h-f-35-en-cdi/94350>\n<b>Un(e) Responsable de Magasine ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/2951>AUTORECRUTE</a></font></div></br>\n</div>\n\n<div id=f2 style=margin-left:10;>\n\n<div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sipa/vendeur-vo-h-f/94485>\n<b>Vendeur VO (H/F) </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sipa/443>SIPA</a></font></div></br>\n\n<div id=p2><span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-picard-autos-33/conseiller-e-commercial-e-hall-vehicules-neufs/94482>\n<b>CONSEILLER(E) COMMERCIAL(E) HALL V...</b>\n</a></font></span></br>\n<font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-picard-autos-33/562>PICARD AUTOS 33\n</a></font></div></br>\n\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-gnfa/formateur-formatrice-technique-vehicules-industriels-en-cdi/93253>\n<b>Formateur / Formatrice techniqu... </b></a>\n</font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-gnfa/320>GNFA</a>\n</font></div></br>\n\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-centre-auto-roady-argeles-sur-mer/receptionnaire-vendeur-libre-service/94498>\n<b>RÃ©ceptionnaire - Vendeur libre s...</b></a></font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-centre-auto-roady-argeles-sur-mer/2791>CENTRE AUTO ROADY - ARGELES SUR MER</a>\n</font></div></br>\n\n<div id=p5>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-izyscoot/technicien-vitrage-automobile-h-f/94494>\n<b>Technicien vitrage automobile H/F </b>\n</a></font></span>\n</br><font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-izyscoot/2952>IZYSCOOT</a></font></div></br></div>\n</div>'),
(1, 'Les annonces Ã  la lune', '<div id=f>\n<div id=f1><div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-thierry-astier-care-motors/vendeur-voitures-neuves-confirme-marque-generaliste-h-f/94512>\n<b>VENDEUR VOITURES NEUVES C... </b>\n</a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-thierry-astier-care-motors/73>THIERRY ASTIER - Care Motors</a></font>\n</div></br>\n\n<div id=p2>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sarl-autocome-auto-leclerc/directeur-centre-auto/94489>\n<b>DIRECTEUR CENTRE AUTO </b></a>\n</font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sarl-autocome-auto-leclerc/2950>SARL AUTOCOME - AUTO LECLERC</a></font>\n</div></br>\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-act/analyste-standards-ventes-et-apres-vente-industrie-automobile-h-f/94272>\n<b>Analyste Standards Ventes et AprÃ¨s... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-act/1577>ACT</a>\n</font></div></br>\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-autorecrute/un-e-secretaire-commerciale-marque-premium-h-f-78-en-cdi/94515>\n<b>Un(e) SecrÃ©taire commerciale ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/1630>AUTORECRUTE</a>\n</font></div></br>\n<div id=p5>\n<span><font color=red size=3px>\n<a href=http://www.autorecrute.com/offre-emploi-autorecrute/un-e-conseiller-e-commerciale-vn-et-vo-marque-allemande-h-f-35-en-cdi/94350>\n<b>Un(e) Responsable de Magasine ... </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-autorecrute/2951>AUTORECRUTE</a></font></div></br>\n</div>\n\n<div id=f2 style=margin-left:10;>\n\n<div id=p1>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-sipa/vendeur-vo-h-f/94485>\n<b>Vendeur VO (H/F) </b>\n</a></font></span></br>\n<font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-sipa/443>SIPA</a></font></div></br>\n\n<div id=p2><span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-picard-autos-33/conseiller-e-commercial-e-hall-vehicules-neufs/94482>\n<b>CONSEILLER(E) COMMERCIAL(E) HALL V...</b>\n</a></font></span></br>\n<font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-picard-autos-33/562>PICARD AUTOS 33\n</a></font></div></br>\n\n<div id=p3>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-gnfa/formateur-formatrice-technique-vehicules-industriels-en-cdi/93253>\n<b>Formateur / Formatrice techniqu... </b></a>\n</font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-gnfa/320>GNFA</a>\n</font></div></br>\n\n<div id=p4>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-centre-auto-roady-argeles-sur-mer/receptionnaire-vendeur-libre-service/94498>\n<b>RÃ©ceptionnaire - Vendeur libre s...</b></a></font></span></br><font color=silver size=2px>\n<a href=https://www.autorecrute.com/offres-emploi-centre-auto-roady-argeles-sur-mer/2791>CENTRE AUTO ROADY - ARGELES SUR MER</a>\n</font></div></br>\n\n<div id=p5>\n<span><font color=red size=3px>\n<a href=https://www.autorecrute.com/offre-emploi-izyscoot/technicien-vitrage-automobile-h-f/94494>\n<b>Technicien vitrage automobile H/F </b>\n</a></font></span>\n</br><font color=silver size=2px >\n<a href=https://www.autorecrute.com/offres-emploi-izyscoot/2952>IZYSCOOT</a></font></div></br></div>\n</div>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
