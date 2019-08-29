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
-- Structure de la table `liste`
--

CREATE TABLE `liste` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `liste`
--

INSERT INTO `liste` (`id`, `nombre`) VALUES
(1, '<td><a href=http://www.autorecrute.com/offre-emploi-automobile>PrÃ©c</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile>1</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/2>2</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/3>3</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/4>4</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/5>5</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/6>6</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/7>7</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/8>8</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/9>9</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/10>10</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/20>20</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/30>30</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/51>51</a></td>\n<td><a href=http://www.autorecrute.com/offre-emploi-automobile/2>Suiv</a></td>');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
