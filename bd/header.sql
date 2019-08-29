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
-- Structure de la table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `texte1` text NOT NULL,
  `texte2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `header`
--

INSERT INTO `header` (`id`, `texte1`, `texte2`) VALUES
(1, '<p><b>NÂ°1 DU RECRUTEMENT AUTOMOBILE</b></p>\r\n<a href=http://www.autorecrute.com/offres-emploi-gnfa/320 ><img src=images/GNFA.png style=margin-right:48;/></a><a href=http://salon.autorecrute.com/edition/11-eme-edition><img src=images/SALON.png /></a><a href=http://www.autorecrute.com/offres-emploi-auto1/584  style=\'margin-left:15;\'><img src=images/vendez.jpg /></a></br></br>\r\n<span>TOP RECRUTEURS</span></br>\r\n<a href=http://www.autorecrute.com/offres-emploi-itm-automobile-roady/2725><img src=images/roady.png style=margin-right:48; /></a><a href=http://www.autorecrute.com/offres-emploi-groupe-argus/1750><img src=images/argus.png /></a><a href=http://www.autorecrute.com/offres-emploi-alliance-automotive-group/92 style=\'margin-left:15;\'><img src=images/alliance.png /></a></br></br></br>\r\n<a href=http://localhost/autorecrute/emploi-et-stage.php><input type=submit value=\'AccÃ©der Ã  toutes les offres dâ€˜emploi et de stage\' /></a>', '<div id=comptee style=margin-left:112;><p><font color=white face=arial size=6>Mon compte</font></p><hr><a href=https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=77reu8cupyym2y&state=fc68342e58e6e0cfc1b7b33399480ef2&redirect_uri=http%3A%2F%2Fwww.autorecrute.com%2F&scope=r_basicprofile%20r_emailaddress><img src=images/linkedin.png /></a></br></br>\r\n<input type=text placeholder=Adresse-e-mail /></br></br>\r\n<span><input type=password placeholder=Mot-de-passe /><img src=images/eye.png /></span></br>\r\n<p id=mtp><font size=1px face=arial>>Mot de passe oubliÃ©?</font></p></br>\r\n<div style=\'display:flex; width:300px; margin:auto; height:40px;\'><input type=submit value=\'Se connecter\'/><hr><p><a href=javascript:void(0)><font size=2>CrÃ©er un compte</font></a></p></div>\r\n</div>');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
