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
-- Structure de la table `temoignages`
--

CREATE TABLE `temoignages` (
  `id` int(11) NOT NULL,
  `titre1` varchar(255) NOT NULL,
  `texte1` text NOT NULL,
  `titre2` varchar(255) NOT NULL,
  `texte2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `titre1`, `texte1`, `titre2`, `texte2`) VALUES
(1, 'TÃ©moignages clients', '          <div class=client>\n        â€œAutorecrute Conseil a pleinement rempli nos attentes en terme de qualitÃ© de profil et de dÃ©lai suite au recrutement dâ€™un Chef de rÃ©ception AV.â€ </br>\n           <b>COMO Trocadero</b></br>\n           â€œLa nouvelle activitÃ© de Conseil en recrutement dâ€™Autorecrute nous a permis de recruter rapidement le mÃ©canicien poids lourds que nous recherchions.â€ </br>\n           <b>Garage de la Mariniere</b>\n        </div>', 'TÃ©moignages candidats', '            <div class=candidat>\n              â€œLâ€™Ã©quipe conseil mâ€™a recrutÃ© pour le Groupe Argus, jâ€™ai intÃ©grÃ© un cadre jeune et dynamique et jâ€™ai eu en charge des projets enrichissants.â€ </br>\n              <b>Fabien. C </b></br>\n              â€œActuellement dans lâ€™armÃ©e, autorecrute conseil mâ€™a aidÃ© Ã  trouver un CDI dans le cadre de ma reconvertion dans le civilâ€ </br>\n              <b>Louison Y </b></br>\n              â€œJâ€™ai apprÃ©ciÃ© la qualitÃ© du suivi du cabinet de conseil lors de mon processus de recrutement au sein du groupe COMO.â€ </br>\n              <b>Patrice A. </b></br>\n              â€œAutorecrute Conseil mâ€™a permis de trouver un poste en CDI plus prÃ¨s de mon domicile et qui mâ€™offre des perspectives de carriÃ¨re.â€ </br>\n              <b>Sebastien S. </b></br>\n            </div>');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
