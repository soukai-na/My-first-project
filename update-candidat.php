<?php session_start();  ?>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <title>-Automobile.com</title>
    <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
    <header>
        <?php include('scriptes/menu.php'); ?>
        <?php include('scriptes/recherche.php'); ?>
    </header>
    <?php
    $req = "SELECT * FROM header";
    $result = mysqli_query($conn, $req);
    $sql = mysqli_fetch_array($result);
    ?>
    <div id='back'></br>
        <div id='n1' style='margin-left:184px; margin-right: 178px; '><?php echo $sql['texte1']; ?></div>
        </br>


        <?php
        $servername = "localhost";
        $username = 'root';
        $password = 'P@ssw0rd';
        $conn = mysqli_connect($servername, $username, $password, 'autorecrute');
        if (!$conn) {
            echo 'Error:' . mysqli_connect_error();
        }

        $result = mysqli_query($conn, "SELECT * FROM formulaire WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "'") or die(mysqli_error($conn));
        $sql = mysqli_fetch_array($result);

        ?>
        <div class=icon>
            <i class='material-icons'>account_circle</i>
            <p style='font-size:37;margin-bottom: 0px;'><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?></p>
            </br>
            <p class=fiche>
                </br>
                ><a href='mon-compte.php'>Mon COmpte</a></br>
                ><a href=mes-annonces.php>Suivre mes annonces sauvegardées</a></br>
                ><a href=mes-candidatures.php>Suivre mes candidatures</a></br>
                ><a href=mon-compte.php>Gérer mes CV</a></br>
                ><a href=mon-compte.php>Gérer mes lettres de motivation</a></br>
                ><a href=donnees-perso.php>Modifier mes informations personnelles</a></br>
                <span><a href=" . $href . ">Se déconnecter</a> </span>
            </p>
        </div>

    </div>
    </div>
    <div id='sous'>
        <div style='font-weight:100; font-size:13; margin:auto;margin-left: 435px;'><a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a> >Mon compte</div>
    </div>
    <div id='face'>
        <?php
        $servername = "localhost";
        $username = 'root';
        $password = 'P@ssw0rd';
        $conn = mysqli_connect($servername, $username, $password, 'autorecrute');
        if (!$conn) {
            echo 'Error:' . mysqli_connect_error();
        }
        $req = "SELECT * FROM formulaire";
        $sql = mysqli_query($conn, $req);
        $result = mysqli_fetch_array($sql);
        ?>
        </br>
        <div id='face1' style='border: 3px black solid;width: 553px;'>
            <div class=buttons>
                <a href=mon-compte.php><button id=b2>Mon profil Autorecrute</button></a>
                <a href=mes-annonces.php><button id=b3>Mes annonces sauvegardées</button></a>
                <a href=mes-candidatures.php><button id=b4>Mes candidatures</button></a>
                <a href=donnees-perso.php><button id=b1>Données perso</button></a>
            </div>
            <form method='POST' action='' >
                <div class=formulaire style='display:block;'>
                    Prénom<input type='text' name='prenom' value='<?php echo $result["prenom"]; ?>' style='margin-left:86px;'></br>
                    Nom<input type='text' name='nom' value='<?php echo $result["prenom"]; ?>' style='margin-left:103px;'></br>
                    <div style='display:flex;'><span>Date de naissance</span>
                        <select name='jour'>
                            <option value='jour'><?php echo $result["jour"] ?></option>
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
                        </select>
                        <select name='mois' value=''>
                            <option value='mois'><?php echo $result["mois"] ?></option>
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
                        <select name='annee' style='margin-left:5;' value=''>
                            <option value='annee'><?php echo $result["annee"] ?></option>
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
                    </div></br>
                    Pays de résidence <select name='pays' value='' style='margin-left:25;'>
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
                    </select></br>
                    E-mail<input type='text' name='email' value='<?php echo $result["email"]; ?>' style='margin-left:95;'></br>
                    Adresse<input type='text' name='adresse' value='<?php echo $result["adresse"]; ?>' style='margin-left:88;'></br>
                    Ville<input type='text' name='ville' value='<?php echo $result["ville"]; ?>' style='margin-left:107px;'></br>
                    Code postal<input type='text' name='postal' value='<?php echo $result["postal"]; ?>' style='margin-left:65;'></br>
                    Téléphone 1<input type='text' name='tele1' value='<?php echo $result["telephone1"]; ?>' style='margin-left:60;'></br>
                    Téléphone 2<input type='text' name='tele2' value='<?php echo $result["telephone2"]; ?>' style='margin-left:60;'></br>
                    Fonction souhaitée<select name='metierre' style='margin-left: 22px;'>
                        <option value=''><?php echo $result["metierrecherche"]; ?></option>
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
                    </select></br>
                    Secteur d'activité <select name='activite' style='margin-left: 28px;' value=''>
                        <option value='choisissez une activité'><?php echo $result["activite"]; ?></option>
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
                    </select></br>
                    Disponibilité<select style='margin-left:59;' value='<?php echo $result["disponibilite"]; ?>' selected="selected">
                        <option value='En recherche d’activité'>En recherche d’activité</option>
                        <option value='A l’écoute du marché'>A l’écoute du marché</option>
                    </select>
                    </br> Mobilité géographique<select name=mobilite value='<?php echo $result["mobilite"]; ?>'>
                        <option value='Aucune'>Aucune</option>
                        <option value='Régionale'>Régionale</option>
                        <option value='Nationale'>Nationale</option>
                        <option value='Continentale'>Continentale</option>
                        <option value='Globale'>Globale</option>
                    </select></br>
                    <input type='checkbox' name='offre' style='margin-left:14;' checked='checked' />Je souhaite recevoir occasionnellement par email les offres d'emploi en rapport avec mon secteur d'activité ?</br>
                    <input type=submit value=MODIFIER class='modifier'>
                    <p style='margin-left: 165px; color:#428bca;'>Modifier le mot de passe</p>
                </div>
            </form>
        </div>
        <div id='face2'>
            <div class='first'>
                <b>Mettez vous en avant !</b>
                <p>Soyez visible auprès des recruteurs à la recherche de futurs talents</p><button>DÉPOSEZ VOTRE CV</button>
            </div>
            </br>
            <div class='second'>
                <b>Faites partie des premiers !</b>
                <p>Ne passez pas à côté des dernières offres qui vous correspondent</p><button>ÊTRE ALERTÉ PAR MAIL</button>
            </div>
        </div>
    </div>
    </br>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>