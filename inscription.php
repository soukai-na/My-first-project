<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <title>Inscription</title>
    <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
    <header>
        <?php include('scriptes/menu.php'); ?>
        <?php include('scriptes/recherche.php'); ?>
    </header>
    <?php
    $paysErr = 'Sélectionnez un pays';
    $activiteErr = 'Choisissez une activité';
    $metierErr = 'Choissisez un métier';
    $button = $_POST['button'];
   
     
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $annee = $_POST['annee'];
        $mois = $_POST['mois'];
        $jour = $_POST['jour'];
        $pays = $_POST['pays'];
        $adr = $_POST['adr'];
        $ville = $_POST['ville'];
        $tele1 = $_POST['tele1'];
        $postal = $_POST['postal'];
        $tele2 = $_POST['tele2'];
        $mobilite = $_POST['mobilite'];
        $activite = $_POST['activite'];
        $metierac = $_POST['metierac'];
        $metierre = $_POST['metierre'];
        $disp = $_POST['disp'];
        $condition = $_POST['condition'];

        $lien='http://localhost/autorecrute/bd.php';
     
    ?>
    <div id=sous>
        <div style='margin-top: 50px; margin-left: 415px;'><a href=http://localhost/autorecrute/autorecrute.php>Acceuil </a>> Inscription</div> </br> </div> <form method='POST' action='<?php echo $lien; ?>'>
                <div style='margin:auto; border:1px black solid; width:1000; padding:10;'>
                    <b style='color:red;'>Informations personnelles</b>
                    <div style='display:flex; padding-top:10;'>
                        <div class="nom-naiss">
                            <div> Nom<font color=red>*</font><input type='text' name='nom' style=';margin-left:85; width:300; height:30;' /></div></br>
                            <?php

                            ?>
                            <div style='margin-right:140;'> Date de naissance<font color=red>*</font>
                                <select name='annee' style='margin-left:5;'>
                                    <option value='annee'>Année</option>
                                    <option value='2019'>2019</option>
                                    <option value='2018'>2018</option>
                                    <option value='2017'>2017</option>
                                    <option value='2016'>2016</option>
                                    <option value='2015'>2015</option>
                                    <option value='2014'>2014</option>
                                    <option value='2013'>2013</option>
                                    <option value='2012'>2012</option>
                                    <option value='2011'>2011</option>
                                    <option value='2010'>2010</option>
                                    <option value='2009'>2009</option>
                                    <option value='2008'>2008</option>
                                    <option value='2007'>2007</option>
                                    <option value='2006'>2006</option>
                                    <option value='2005'>2005</option>
                                    <option value='2004'>2004</option>
                                    <option value='2003'>2003</option>
                                    <option value='2002'>2002</option>
                                    <option value='2001'>2001</option>
                                    <option value='2000'>2000</option>
                                    <option value='1999'>1999</option>
                                    <option value='1998'>1998</option>
                                    <option value='1997'>1997</option>
                                    <option value='1996'>1996</option>
                                    <option value='1995'>1995</option>
                                    <option value='1994'>1994</option>
                                    <option value='1993'>1993</option>
                                    <option value='1992'>1992</option>
                                    <option value='1991'>1991</option>
                                    <option value='1990'>1990</option>
                                    <option value='1989'>1989</option>
                                    <option value='1988'>1988</option>
                                    <option value='1987'>1987</option>
                                    <option value='1986'>1986</option>
                                    <option value='1985'>1985</option>
                                    <option value='1984'>1984</option>
                                    <option value='1983'>1983</option>
                                    <option value='1982'>1982</option>
                                    <option value='1981'>1981</option>
                                    <option value='1980'>1980</option>
                                    <option value='1979'>1979</option>
                                    <option value='1978'>1978</option>
                                    <option value='1977'>1977</option>
                                    <option value='1976'>1976</option>
                                    <option value='1975'>1975</option>
                                    <option value='1974'>1974</option>
                                    <option value='1973'>1973</option>
                                    <option value='1972'>1972</option>
                                    <option value='1971'>1971</option>
                                    <option value='1970'>1970</option>
                                    <option value='1969'>1969</option>
                                    <option value='1968'>1968</option>
                                    <option value='1967'>1967</option>
                                    <option value='1966'>1966</option>
                                    <option value='1965'>1965</option>
                                    <option value='1964'>1964</option>
                                    <option value='1963'>1963</option>
                                    <option value='1962'>1962</option>
                                    <option value='1961'>1961</option>
                                    <option value='1960'>1960</option>
                                    <option value='1959'>1959</option>
                                    <option value='1958'>1958</option>
                                    <option value='1957'>1957</option>
                                    <option value='1956'>1956</option>
                                    <option value='1955'>1955</option>
                                    <option value='1954'>1954</option>
                                    <option value='1953'>1953</option>
                                    <option value='1952'>1952</option>
                                    <option value='1951'>1951</option>
                                    <option value='1950'>1950</option>
                                    <option value='1949'>1949</option>
                                    <option value='1948'>1948</option>
                                    <option value='1947'>1947</option>
                                    <option value='1946'>1946</option>
                                    <option value='1945'>1945</option>
                                    <option value='1944'>1944</option>
                                    <option value='1943'>1943</option>
                                    <option value='1942'>1942</option>
                                    <option value='1941'>1941</option>
                                    <option value='1940'>1940</option>
                                    <option value='1939'>1939</option>
                                    <option value='1938'>1938</option>
                                    <option value='1937'>1937</option>
                                    <option value='1936'>1936</option>
                                    <option value='1935'>1935</option>
                                    <option value='1934'>1934</option>
                                    <option value='1933'>1933</option>
                                    <option value='1932'>1932</option>
                                    <option value='1931'>1931</option>
                                    <option value='1930'>1930</option>
                                </select>
                                <select name='mois'>
                                    <option value='mois'>Mois</option>
                                    <option value='01'>01</option>
                                    <option value='02'>02</option>
                                    <option value='03'>03</option>
                                    <option value='04'>04</option>
                                    <option value='05'>05</option>
                                    <option value='06'>06</option>
                                    <option value='07'>07</option>
                                    <option value='08'>08</option>
                                    <option value='09'>09</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                </select>
                                <select name='jour' style='margin-left:5;'>
                                    <option value='jour'>Jour</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                    <option value='6'>6</option>
                                    <option value='7'>7</option>
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                    <option value='13'>13</option>
                                    <option value='14'>14</option>
                                    <option value='15'>15</option>
                                    <option value='16'>16</option>
                                    <option value='17'>17</option>
                                    <option value='18'>18</option>
                                    <option value='19'>19</option>
                                    <option value='20'>20</option>
                                    <option value='21'>21</option>
                                    <option value='22'>22</option>
                                    <option value='23'>23</option>
                                    <option value='24'>24</option>
                                    <option value='25'>25</option>
                                    <option value='26'>26</option>
                                    <option value='27'>27</option>
                                    <option value='28'>28</option>
                                    <option value='29'>29</option>
                                    <option value='30'>30</option>
                                    <option value='31'>31</option>
                                </select></div></br>
                        </div>
                        <div class="pre-pays">
                            <div> Prénom<font color=red>*</font><input type='text' name='prenom' style=';margin-left:68; width:300; height:30;' /></div></br>
                            <div> Pays de résidence<font color=red>*</font>
                                <select name='pays' style='margin-left:5;  width:300;'>
                                    <option value='selectionnez un pays'>Sélectionnez un pays</option>
                                    <option>France</option>
                                    <option>Belgique</option>
                                    <option>Luxembourg</option>
                                    <option>Allemagne</option>
                                    <option>Royaume-Uni</option>
                                    <option>Afghanistan</option>
                                    <option>Afrique de Sud</option>
                                    <option>Albanie</option>
                                    <option>Algérie</option>
                                    <option>Andorre</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                    <option>Antigua-et-Barbuda</option>
                                    <option>Antilles Néérlandaises</option>
                                    <option>Arbie Saoudite</option>
                                    <option>Argentine</option>
                                    <option>Arménie</option>
                                    <option>Aruba</option>
                                    <option>Australie</option>
                                    <option>Autriche</option>
                                    <option>Azerbaidjan</option>
                                    <option>Bahamas</option>
                                    <option>Bahrein</option>
                                    <option>Bande de Gaza</option>
                                    <option>Bangladesh</option>
                                    <option>Barbade</option>
                                    <option>Beliz</option>
                                    <option>Bénin</option>
                                    <option>Bermudes</option>
                                    <option>Bhoutan</option>
                                    <option>Bilérussie</option>
                                    <option>Bolivie</option>
                                    <option>Bosnie-Herzégovine</option>
                                    <option>Botswana</option>
                                    <option>Brésil</option>
                                    <option>Brunei Darussalam</option>
                                    <option>Bulgarie</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                                    <option>Cambodge</option>
                                    <option>Cameroun</option>
                                    <option>Canada</option>
                                    <option>Cap vert</option>
                                    <option>Chili</option>
                                    <option>Chine</option>
                                    <option>Chypre</option>
                                    <option>Cisjordanie</option>
                                    <option>Colombie</option>
                                    <option>Comores</option>
                                    <option>Congo</option>
                                    <option>Cook Islands</option>
                                    <option>Corée du Nord</option>
                                    <option>Corée du Sud</option>
                                </select></div></br>
                        </div>
                    </div>
                    Adresse<font color=red>*</font> <input type='text' name='adr' style='width:862;;margin-left:63; height:30;' />
                    <div style='display:flex;'>
                        <p style='margin-right:143;'>
                            Ville<font color=red>*</font> <input type='text' name='ville' style=';margin-left:83; width:300; height:30;' /></br></br>
                            Téléphone 1 <font color=red>*</font> <input type='text' name='tele1' style=';margin-left:35; width:300; height:30;' />
                        </p>
                        <p>
                            Code postal<font color=red>*</font> <input type='text' name='postal' style=';margin-left:35; width:300; height:30;' /></br></br>
                            Téléphone 2 <input type='text' name='tele2' style=';margin-left:29; width:300; height:30;' />
                        </p>
                    </div>
                    <hr>
                    Mobilité géographique<font color=red>*</font>
                    <input type='radio' name='mobilite' value='Aucune' />Aucune
                    <input type='radio' name='mobilite' value='Régionale' />Régionale
                    <input type='radio' name='mobilite' value='Nationale' />Nationale
                    <input type='radio' name='mobilite' value='Continentale' />Continentale
                    <input type='radio' name='mobilite' value='Globale' />Globale
                    <div class="trois" style='display:flex; padding-top:15;'>
                        <div>
                            Votre activité<font color=red>*</font>
                            <select name='activite' style='margin-left:38;  width:300; height:30; margin-right:145;'>
                                <option value='choisissez une activité'>Choisissez une activité</option>
                                <option value='autre'>Autre</option>
                                <option value='Cadre en administration / col.terr.'>Cadre en administration / col.terr.</option>
                                <option value='Cadre en entreprise'>Cadre en entreprise</option>
                                <option value='Chef d’entreprise'>Chef d’entreprise</option>
                                <option value='Employé ou ouvrier'>Employé ou ouvrier</option>
                                <option value='Enseignant'>Enseignant</option>
                                <option value='Etudiant'>Etudiant</option>
                                <option value='Profession intermèdiaire'>Profession intermèdiaire</option>
                                <option value='Profession libérale'>Profession libérale</option>
                                <option value='Retraité'>Retraité</option>
                            </select>
                        </div>
                        <div style='display:block;'>
                            <p style='margin-top: 0px;'> Métier actuel
                                <select name='metierac' style='margin-left:33px; width:300; height:30;'>
                                    <option>Choisissez un métier</option>
                                    <option>Adjoint chef d’atelier</option>
                                    <option>Administrateur des ventes</option>
                                    <option>Apprenti carrossier/peintre</option>
                                    <option>Apprenti mécanicien</option>
                                    <option>Assistant Homologation</option>
                                    <option>Carrossier peintre automobile</option>
                                    <option>Chef d’équipe Homologation</option>
                                    <option>Chef d’unité carrosserie</option>
                                    <option>Chef d’unité mécanique</option>
                                    <option>Chef d’atelier</option>
                                    <option>Chef d’équipe</option>
                                    <option>Chef de réception aprés-vente</option>
                                    <option>Conseiller Service AV</option>
                                    <option>Conseiller technique</option>
                                    <option>Conseiller(e) Service AV Mécanique</option>
                                    <option>Conseiller(re) Service AV Carrosserie</option>
                                    <option>Controleur technique</option>
                                    <option>Electricien automobile</option>
                                    <option>Expert automobile</option>
                                    <option>Formateur technique</option>
                                    <option>Gestion de Flotte</option>
                                    <option>Gestionnaire de sinistre</option>
                                    <option>Gestionnaire garantie</option>
                                    <option>Laveur/Pisteur</option>
                                    <option>Mécanicien automobile</option>
                                    <option>Mécanicien motoriste/Dieseliste</option>
                                    <option>Mécanicien poids lourds/VI</option>
                                    <option>Mécanicien TP/véhicule agricole</option>
                                    <option>Monteur accessoires automobiles</option>
                                    <option>Monteur ajusteur</option>
                                    <option>Opérateur service rapide</option>
                                    <option>Outilleur</option>
                                    <option>Peintre automobile/PL</option>
                                    <option>Peintre industriel</option>
                                    <option>Préparateur de commandes</option>
                                    <option>Préparateur VN-VO</option>
                                    <option>Réceptionnaire après-vente</option>
                                    <option>Responsable après-vente</option>
                                    <option>Responsable Carrosserie</option>
                                    <option>Responsable de site</option>
                                    <option>Responsable qualité et satisfaction client</option>
                                    <option>Secrétaire administrative</option>
                                    <option>Secrétaire après vente</option>
                                    <option>Secrétaire de direction</option>
                                    <option>Secrétaire de livraison</option>
                                    <option>Sellier</option>
                                    <option>Soudeur</option>
                                    <option>Technicien</option>
                                    <option>Technicien diagnostic</option>
                                    <option>Tolier</option>
                                </select></p>
                            <p>Métier Recherché<font color=red>*</font>
                                <select name='metierre' style='margin-left:1px; width:300; height:30;'>
                                    <option>Choisissez un métier</option>
                                    <option>Acheteur</option>
                                    <option>Adjoint chef d’atelier</option>
                                    <option>Adjoint chef de centre</option>
                                    <option>Administrateur des ventes</option>
                                    <option>Ambassadeur show room</option>
                                    <option>Animateur réseau</option>
                                    <option>Apprenti carrossier/peintre</option>
                                    <option>Apprenti mécanicien</option>
                                    <option>Approvisionneur</option>
                                    <option>Assistant Homologation</option>
                                    <option>ASSISTANT QUALITE</option>
                                    <option>Attaché(e) commercial(e)</option>
                                    <option>Auditeur</option>
                                    <option>Carrossier peintre automobile</option>
                                    <option>Chargé d’affaire</option>
                                    <option>Chargé d’études marketing</option>
                                    <option>Chargé de clientèle</option>
                                    <option>Chargé de communication</option>
                                    <option>Chargé de recrutement</option>
                                    <option>Chauffeur livreur</option>
                                    <option>Chauffeur Routier</option>
                                    <option>Chef d’équipe Homologation</option>
                                    <option>Chef d’equipe logistique</option>
                                    <option>Chef d’unité carrosserie</option>
                                    <option>Chef d’unité mécanique</option>
                                    <option>Chef d’atelier</option>
                                </select></p>
                        </div>
                    </div>
                    Disponibilité<font color=red>*</font>
                    <input type='radio' name='disp' style='margin-left:44;' value='En recherche d’activité' />En recherche d’activité
                    <input type='radio' name='disp' value='A l’écoute du marché' />A l’écoute du marché
                    </br></br>
                    <input type='checkbox' name='condition' style='margin-left:300;' />J'ai lu et j'accepte <a href='https://www.autorecrute.com/mentions-legales' style='color:#428bca; text-decoration:none;'><b>les conditions d'utilisation du site Autorecrute</b></a>
                    <font color=red>*</font>
                    </br></br>
                    <input type='checkbox' name='offre' style='margin-left:165;' />Je souhaite recevoir occasionnellement par email les offres d'emploi en rapport avec mon secteur d'activité ?

                </div>

                <div class='conf-insc'><input type='submit' name='button' value='Confirmer mon inscription' /></div></br>
                </form>
                <?php include('scriptes/footer.php'); ?>

</body>

</html>