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
-- Structure de la table `formulaire2`
--

CREATE TABLE `formulaire2` (
  `id` int(11) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `postal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone1` varchar(20) NOT NULL,
  `fax1` varchar(20) NOT NULL,
  `site` varchar(255) NOT NULL,
  `adrfacturation` text NOT NULL,
  `postalfacturation` varchar(255) NOT NULL,
  `villefacturation` varchar(255) NOT NULL,
  `file` blob NOT NULL,
  `civilite` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone2` varchar(20) NOT NULL,
  `teleportable` varchar(20) NOT NULL,
  `fax2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formulaire2`
--

INSERT INTO `formulaire2` (`id`, `societe`, `pays`, `adresse`, `postal`, `ville`, `telephone1`, `fax1`, `site`, `adrfacturation`, `postalfacturation`, `villefacturation`, `file`, `civilite`, `nom`, `prenom`, `fonction`, `email`, `telephone2`, `teleportable`, `fax2`) VALUES
(1, 'argused', 'France', 'anassi', '121212', 'casa', '0611165546', '052245789856', 'eeeeeeee', 'agdal', '152535', 'rabat', 0x346431386662612e6a73, '', 'bendaoud', 'soukaina', 'zzzzzz', 'bendaouds62@gmail.com', '0650879758', '0618587093', '0522121548'),
(2, 'argused', 'France', 'anassi', '784512', 'Casa', '0611165546', '052015457', 'souqayta.com', 'anassi 35', '784512', 'casa', 0x356432633430613335383132392e706e67, '', 'Bendaoud', 'Soukaina', 'Chef', 'bendaouds@gmail.com', '0645781212', '0645128754', '0528145769'),
(3, 'argused', 'France', 'anassi', '784512', 'Casa', '0611165546', '052015457', 'souqayta.com', 'anassi 35', '784512', 'casa', 0x356432633430613335383132392e706e67, '', 'Bendaoud', 'Soukaina', 'Chef', 'bendaouds@gmail.com', '0645781212', '0645128754', '0528145769'),
(4, 'argused', 'France', 'anassi', '784512', 'Casa', '0611165546', '052015457', 'souqayta.com', 'anassi 35', '784512', 'casa', 0x356432633430613335383132392e706e67, '', 'Bendaoud', 'Soukaina', 'Chef', 'bedaouds62@gmail.com', '0645781212', '0645128754', '0528145769'),
(5, 'argused', 'France', 'anassi', '784512', 'Casa', '0611165546', '052015457', 'souqayta.com', 'anassi 35', '784512', 'casa', 0x356432633430613335383132392e706e67, '', 'Bendaoud', 'Soukaina', 'Chef', 'bedaouds62@gmail.com', '0645781212', '0645128754', '0528145769'),
(6, 'argused', 'France', 'anassi', '784512', 'Casa', '0611165546', '052015457', 'souqayta.com', 'anassi 35', '784512', 'casa', 0x356432633430613335383132392e706e67, '', 'Bendaoud', 'Soukaina', 'Chef', 'bedaouds62@gmail.com', '0645781212', '0645128754', '0528145769'),
(7, 'azaz', 'Belgique', 'ddddddd', 'dddddddddddddddddddd', 'ddddddddddddd', '1333333333333', '0000000000', 'dddddddd', '', '', '', 0x356133363132322e6a73, '', 'ddddddd', 'dddddddddddd', 'dddddddddddd', 'dddddddddd@gmail.com', '22222222222222', '33333333333333', '000000000000000'),
(8, 'ssssssss', 'Belgique', 'ssssssssss', 'ssssssssssss', 'ssssssssss', '2222222222222', '2222222222', '', '', '', '', 0x303136653134362e6a73, '', 'sssss', 'sssssssss', 'sssssssssss', 'sss@gmail.com', '555555555555555', '222222222222', '00000000000'),
(9, 'zzzzzzzz', 'Luxembourg', 'zzzz', 'zzzzzzz', 'zzzzzzzzz', '135486512', '', '', '', '', '', 0x356432633430613335383132392e706e67, '', 'zzzzz', 'dzdz', 'dzzd', 'b@gmail.com', '0645124512', '', ''),
(10, 'zzzzzzzz', 'Luxembourg', 'zzzz', 'zzzzzzz', 'zzzzzzzzz', '135486512', '', '', '', '', '', 0x356432633430613335383132392e706e67, '', 'zzzzz', 'dzdz', 'dzzd', 'b@gmail.com', '0645124512', '', ''),
(11, 'argused', 'France', 'bd.kiki', '784512', 'paris', '0621412236', '0512457845', 'souqayta.ma', '', '', '', 0x73616c6f6e732e706870, '', 'bd', 'suqua', 'etd', 'suq@gmail.com', '0645124512', '06451278', '06451232');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `formulaire2`
--
ALTER TABLE `formulaire2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formulaire2`
--
ALTER TABLE `formulaire2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
