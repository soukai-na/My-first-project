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
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `tableaux` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `offre`
--

INSERT INTO `offre` (`id`, `titre`, `tableaux`) VALUES
(1, 'Cliquez sur lâ€™offre pour accÃ©der au dÃ©tail', '<div class=tab1>\n<p>\n<font color=gray size=2>CENTRE AUTO ROADY - SAINT JULIEN EN GENEVOIS - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>MÃ‰CANICIEN AUTOMOBILE OPÃ‰RATIONS RAPIDES H/F</b></font></br>\nRejoignez Roady, 3Ã¨me rÃ©seau de centres auto en France, et faites de votre passion pour la mÃ©canique votre mÃ©tier. Nous recherchons pour notre centre Roady de SAINT JULIEN EN GENEVOIS un Technicien </br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-JULIEN-EN-GENEVOIS</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/94422>Sauvegarder lâ€™annonce</a></br><img src=images/roady.png alt=CURIOZ-LOISIRS /></p>\n</div>\n</br>\n\n<div class=tab2>\n<p>\n<font color=gray size=2 >CENTRE AUTO ROADY - SAINT JULIEN EN GENEVOIS - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>TECHNICIEN VITRAGE AUTOMOBILE H/F</b></font></br>\nRejoignez Roady, 3Ã¨me rÃ©seau de centres auto en France, et faites de votre passion pour la mÃ©canique votre mÃ©tier. LE POSTE A POURVOIRNous recherchons dans le cadre du dÃ©veloppement de </br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e IndÃ©terminÃ©e (CDI) -</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/94388>Sauvegarder lâ€™annonce</a></br><img src=images/roady.png /></p>\n</div>\n</br>\n\n<div class=tab3>\n<p>\n<font color=red><b>INSCRIVEZ-VOUS AU SALON EMPLOI AUTOMOBILE</b></font></br>\nLes 3 et 4 octobre 2019, venez rencontrer des recruteurs de marque du secteur de lâ€™automobile, place de la Concorde Ã  PARIS</br></br>\n<font color=gray size=2>PublicitÃ©</font><input type=submit value=A-trÃ©s-vite style=margin-left:320; />\n</p>\n<p><img src=images/boy.jpg  /></p>\n</div>\n</br>\n\n<div class=tab1>\n<p>\n<font color=gray size=2>CENTRE AUTO ROADY - SAINT JULIEN EN GENEVOIS - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>VENDEUR PIÃˆCES DE RECHANGE ET ACCESSOIRES AUTOMOBILE H/F</b></font></br>\nRejoignez ROADY, 3Ã¨me rÃ©seau de centres auto en France et faites de votre passion votre mÃ©tierNous recherchons pour notre centre ROADY de SAINT JULIEN EN GENEVOIS  un vendeur en Ã©quipements et </br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-JULIEN-EN-GENEVOIS</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/94275>Sauvegarder lâ€™annonce</a></br><img src=images/roady.png /></p>\n</div>\n</br>\n\n<div class=tab1>\n<p>\n<font color=gray size=2>JBM CAMPLLONG - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>TECHNICO-COMMERCIAL ITINÃ‰RANT â€“ AUTOMOBILE-INDUSTRIEL H/F</b></font></br>\nAvec plus de 20 ans dâ€™expÃ©rience, la sociÃ©tÃ© JBM Campllong SL est un distributeur espagnol dâ€™outils professionnels de rÃ©fÃ©rence pour les secteurs automobile, quincaillerie-bricolage et industriel. Son catalogue \n</br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e IndÃ©terminÃ©e (CDI) - PARIS, REIMS, ROUEN\n</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/94173>Sauvegarder lâ€™annonce</a></br><img src=images/jbm.jpg.png /></p>\n</div>\n</br>\n\n<div class=tab1>\n<p>\n<font color=gray size=2>LYCEE PROFESSIONNEL POULLART DES PLACES - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>ENSEIGNANT EN CAP MÃ‰CANIQUE AUTO EN LYCÃ‰E PROFESSIONNEL Ã€ THIAIS (94)</b></font></br>\nLe LycÃ©e Professionnel Poullart des Places des Apprentis dâ€™Auteuil de Thiais, privÃ© sous contrat, recherche :Un enseignant en CAP MÃ©canique Auto MVA Ã  temps plein (Maintenance des VÃ©hicules Automobiles \n</br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e DÃ©terminÃ©e (CDD) - THIAIS</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/94207>Sauvegarder lâ€™annonce</a></br><img src=images/cap.png /></p>\n</div>\n</br>\n\n<div class=tab1>\n<p>\n<font color=gray size=2>RIESTER RH - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>CONSEILLER DES VENTES (H/F)</b></font></br>\n<font color=black>Vos principales missions :	Accueil des clients en concession Prospection, dÃ©veloppement et fidÃ©lisation de la clientÃ¨le	RÃ©alisation dâ€™objectifs qualitatifs et quantitatifs fixÃ©s par la hiÃ©rarchie </font>\n</br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-MAXIMIN\n</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/94171>Sauvegarder lâ€™annonce</a></br><img src=images/riester.png /></p>\n</div>\n</br>\n\n<div class=tab1>\n<p>\n<font color=gray size=2>SARL AUTOCOME - AUTO LECLERC - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>DIRECTEUR CENTRE AUTO</b></font></br>\n<font color=black>Vous rÃ©alisez les objectifs commerciaux dÃ©terminÃ©s avec votre hiÃ©rarchie , permettant Ã  lâ€™entreprise d â€˜arriver dans un premier temps Ã  un bon Ã©quilibre financier et dans un deuxiÃ¨me temps Ã  dÃ©gager des </font>\n</br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e IndÃ©terminÃ©e (CDI) - SAINT-AMAND-LES-EAUX\n</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/93116>Sauvegarder lâ€™annonce</a></br><img src=images/elec.jpeg /></p>\n</div>\n</br>\n\n<div class=tab1>\n<p>\n<font color=gray size=2>BMW FOUREL - PubliÃ© le 01/08/19</font></br>\n<font color=red><b>AMBASSADEUR SHOWROOM / PRODUCT GENIUS</b></font></br>\n<font color=black>Dans le cadre de notre dÃ©veloppement, nous recrutons pour la concession de Valence, un(e) Product Genius.Missions gÃ©nÃ©rales:ÃŠtre lâ€™ambassadeur de BMW : accueillir chaleureusement les prospects et clients et communiquer sa passion de la marque,Ã‰couter les prospects et clients, leur prÃ©senter et leur ... </font>\n\n</br></br>\n<font color=red size=2>Contrat Ã  DurÃ©e IndÃ©terminÃ©e (CDI) - VALENCE\n</font>\n</p>\n<p><a href=http://www.autorecrute.com/ajouter-selection-candidat/annonce/93313>Sauvegarder lâ€™annonce</a></br><img src=images/bmw.png /></p>\n</div>');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
