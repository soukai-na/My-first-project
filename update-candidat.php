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
                ><a href='mon-compte.php'>Mon Compte</a></br>
                ><a href=mes-annonces.php>Suivre mes annonces sauvegardées</a></br>
                ><a href=mes-candidatures.php>Suivre mes candidatures</a></br>
                ><a href=mon-compte.php#cv>Gérer mes CV</a></br>
                ><a href=mon-compte.php#motivation>Gérer mes lettres de motivation</a></br>
                ><a href=donnees-perso.php>Modifier mes informations personnelles</a></br>
                <span><a href=deconnexion.php>Se déconnecter</a> </span>
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
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $jour = $_POST['jour'];
        $mois = $_POST['mois'];
        $annee = $_POST['annee'];
        $pays = $_POST['pays'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $postal = $_POST['postal'];
        $tele1 = $_POST['tele1'];
        $tele2 = $_POST['tele2'];
        $fonction = $_POST['fonction'];
        $activite = $_POST['activite'];
        $disponiblite = $_POST['disponiblite'];
        $mobilite = $_POST['mobilite'];
        $mtp = $_POST['mtp'];
        $nvmtp = $_POST['nvmtp'];
        $confmtp = $_POST['confmtp'];
        $requete = "UPDATE formulaire SET email='$email' , nom='$nom' , prenom='$prenom' , annee='$annee' , 
        mois='$mois' , jour='$jour' , pays='$pays' , adresse='$adresse' , ville='$ville' , 
        postal='$postal' , telephone1='$tele1' , telephone2='$tele2' , mobilite='$mobilite' , 
        activite='$activite' , metierrecherche='$fonction' , disponiblite='$disponiblite' WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "'";
        $query = mysqli_query($conn, $requete);
        if ($nvmtp != null) {
            $update = "UPDATE formulaire SET password='md5($nvmtp)'";
            $resultat = mysqli_query($conn, $update);
        }
        $req = "SELECT * FROM formulaire WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "'";
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
            <form method='POST' action='update-candidat.php'>
                <div class=formulaire style='display:block;'>
                    Prénom<input type='text' name='prenom' value='<?php echo $result["prenom"]; ?>' style='margin-left:86px;'></br>
                    Nom<input type='text' name='nom' value='<?php echo $result["nom"]; ?>' style='margin-left:103px;'></br>
                    <div style='display:flex;'><span>Date de naissance</span>
                        <select name='jour' value='<?php echo $result["jour"] ?>'>
                            <option value='jour'>Jour</option>
                            <option <?php if ('1' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>1</option>
                            <option <?php if ('2' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>2</option>
                            <option <?php if ('3' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>3</option>
                            <option <?php if ('4' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>4</option>
                            <option <?php if ('5' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>5</option>
                            <option <?php if ('6' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>6</option>
                            <option <?php if ('7' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>7</option>
                            <option <?php if ('8' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>8</option>
                            <option <?php if ('9' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>9</option>
                            <option <?php if ('10' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>10</option>
                            <option <?php if ('11' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>11</option>
                            <option <?php if ('12' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>12</option>
                            <option <?php if ('13' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>13</option>
                            <option <?php if ('14' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>14</option>
                            <option <?php if ('15' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>15</option>
                            <option <?php if ('16' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>16</option>
                            <option <?php if ('17' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>17</option>
                            <option <?php if ('18' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>18</option>
                            <option <?php if ('19' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>19</option>
                            <option <?php if ('20' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>20</option>
                            <option <?php if ('21' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>21</option>
                            <option <?php if ('22' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>22</option>
                            <option <?php if ('23' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>23</option>
                            <option <?php if ('24' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>24</option>
                            <option <?php if ('25' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>25</option>
                            <option <?php if ('26' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>26</option>
                            <option <?php if ('27' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>27</option>
                            <option <?php if ('28' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>28</option>
                            <option <?php if ('29' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>29</option>
                            <option <?php if ('30' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>30</option>
                            <option <?php if ('31' == $result["jour"]) {
                                        echo 'selected';
                                    } ?>>31</option>
                        </select>
                        <select name='mois' value='<?php echo $result["mois"] ?>'>
                            <option value='mois'>mois</option>
                            <option <?php if ('01' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>01</option>
                            <option <?php if ('02' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>02</option>
                            <option <?php if ('03' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>03</option>
                            <option <?php if ('04' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>04</option>
                            <option <?php if ('05' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>05</option>
                            <option <?php if ('06' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>06</option>
                            <option <?php if ('07' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>07</option>
                            <option <?php if ('08' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>08</option>
                            <option <?php if ('09' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>09</option>
                            <option <?php if ('10' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>10</option>
                            <option <?php if ('11' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>11</option>
                            <option <?php if ('12' == $result["mois"]) {
                                        echo 'selected';
                                    } ?>>12</option>
                        </select>
                        <select name='annee' style='margin-left:5;' value='<?php echo $result["annee"] ?>'>
                            <option <?php if ('' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>annee</option>
                            <option <?php if ('2019' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2019</option>
                            <option <?php if ('2018' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2018</option>
                            <option <?php if ('2017' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2017</option>
                            <option <?php if ('2016' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2016</option>
                            <option <?php if ('2015' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2015</option>
                            <option <?php if ('2014' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2014</option>
                            <option <?php if ('2013' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2013</option>
                            <option <?php if ('2012' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2012</option>
                            <option <?php if ('2011' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2011</option>
                            <option <?php if ('2010' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2010</option>
                            <option <?php if ('2009' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2009</option>
                            <option <?php if ('2008' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2008</option>
                            <option <?php if ('2007' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2007</option>
                            <option <?php if ('2006' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2006</option>
                            <option <?php if ('2005' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2005</option>
                            <option <?php if ('2004' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2004</option>
                            <option <?php if ('2003' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2003</option>
                            <option <?php if ('2002' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2002</option>
                            <option <?php if ('2001' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2001</option>
                            <option <?php if ('2000' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>2000</option>
                            <option <?php if ('1999' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1999</option>
                            <option <?php if ('1998' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1998</option>
                            <option <?php if ('1997' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1997</option>
                            <option <?php if ('1996' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1996</option>
                            <option <?php if ('1995' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1995</option>
                            <option <?php if ('1994' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1994</option>
                            <option <?php if ('1993' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1993</option>
                            <option <?php if ('1992' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1992</option>
                            <option <?php if ('1991' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1991</option>
                            <option <?php if ('1990' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1990</option>
                            <option <?php if ('1989' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1989</option>
                            <option <?php if ('1988' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1988</option>
                            <option <?php if ('1987' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1987</option>
                            <option <?php if ('1986' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1986</option>
                            <option <?php if ('1985' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1985</option>
                            <option <?php if ('1984' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1984</option>
                            <option <?php if ('1983' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1983</option>
                            <option <?php if ('1982' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1982</option>
                            <option <?php if ('1981' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1981</option>
                            <option <?php if ('1980' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1980</option>
                            <option <?php if ('1979' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1979</option>
                            <option <?php if ('1978' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1978</option>
                            <option <?php if ('1977' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1977</option>
                            <option <?php if ('1976' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1976</option>
                            <option <?php if ('1975' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1975</option>
                            <option <?php if ('1974' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1974</option>
                            <option <?php if ('1973' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1973</option>
                            <option <?php if ('1972' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1972</option>
                            <option <?php if ('1971' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1971</option>
                            <option <?php if ('1970' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1970</option>
                            <option <?php if ('1969' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1969</option>
                            <option <?php if ('1968' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1968</option>
                            <option <?php if ('1967' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1967</option>
                            <option <?php if ('1966' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1966</option>
                            <option <?php if ('1965' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1965</option>
                            <option <?php if ('1964' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1964</option>
                            <option <?php if ('1963' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1963</option>
                            <option <?php if ('1962' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1962</option>
                            <option <?php if ('1961' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1961</option>
                            <option <?php if ('1960' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1960</option>
                            <option <?php if ('1959' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1959</option>
                            <option <?php if ('1958' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1958</option>
                            <option <?php if ('1957' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1957</option>
                            <option <?php if ('1956' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1956</option>
                            <option <?php if ('1955' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1955</option>
                            <option <?php if ('1954' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1954</option>
                            <option <?php if ('1953' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1953</option>
                            <option <?php if ('1952' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1952</option>
                            <option <?php if ('1951' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1951</option>
                            <option <?php if ('1950' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1950</option>
                            <option <?php if ('1949' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1949</option>
                            <option <?php if ('1948' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1948</option>
                            <option <?php if ('1947' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1947</option>
                            <option <?php if ('1946' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1946</option>
                            <option <?php if ('1945' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1945</option>
                            <option <?php if ('1944' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1944</option>
                            <option <?php if ('1943' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1943</option>
                            <option <?php if ('1942' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1942</option>
                            <option <?php if ('1941' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1941</option>
                            <option <?php if ('1940' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1940</option>
                            <option <?php if ('1939' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1939</option>
                            <option <?php if ('1938' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1938</option>
                            <option <?php if ('1937' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1937</option>
                            <option <?php if ('1936' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1936</option>
                            <option <?php if ('1935' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1935</option>
                            <option <?php if ('1934' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1934</option>
                            <option <?php if ('1933' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1933</option>
                            <option <?php if ('1932' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1932</option>
                            <option <?php if ('1931' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1931</option>
                            <option <?php if ('1930' == $result["annee"]) {
                                        echo 'selected';
                                    } ?>>1930</option>
                        </select>
                    </div></br>
                    Pays de résidence <select name='pays' style='margin-left:25;'>
                        <option value='selectionnez un pays'>Sélectionnez un pays</option>
                        <option <?php if ('France' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>France</option>
                        <option <?php if ('Belgique' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Belgique</option>
                        <option <?php if ('Luxembourg' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Luxembourg</option>
                        <option <?php if ('Allemagne' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Allemagne</option>
                        <option <?php if ('Royaume-Uni' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Royaume-Uni</option>
                        <option <?php if ('Afghanistan' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Afghanistan</option>
                        <option <?php if ('Afrique de Sud' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Afrique de Sud</option>
                        <option <?php if ('Albanie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Albanie</option>
                        <option <?php if ('Algérie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Algérie</option>
                        <option <?php if ('Andorre' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Andorre</option>
                        <option <?php if ('Angola' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Angola</option>
                        <option <?php if ('Anguilla' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Anguilla</option>
                        <option <?php if ('Antigua-et-Barbuda' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Antigua-et-Barbuda</option>
                        <option <?php if ('Antilles Néérlandaises' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Antilles Néérlandaises</option>
                        <option <?php if ('Arbie Saoudite' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Arbie Saoudite</option>
                        <option <?php if ('Argentine' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Argentine</option>
                        <option <?php if ('Arménie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Arménie</option>
                        <option <?php if ('Aruba' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Aruba</option>
                        <option <?php if ('Australie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Australie</option>
                        <option <?php if ('Autriche' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Autriche</option>
                        <option <?php if ('Azerbaidjan' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Azerbaidjan</option>
                        <option <?php if ('Bahamas' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bahamas</option>
                        <option <?php if ('Bahrein' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bahrein</option>
                        <option <?php if ('Bande de Gaza' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bande de Gaza</option>
                        <option <?php if ('Bangladesh' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bangladesh</option>
                        <option <?php if ('Barbade' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Barbade</option>
                        <option <?php if ('Beliz' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Beliz</option>
                        <option <?php if ('Bénin' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bénin</option>
                        <option <?php if ('Bermudes' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bermudes</option>
                        <option <?php if ('Bhoutan' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bhoutan</option>
                        <option <?php if ('Bilérussie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bilérussie</option>
                        <option <?php if ('Bolivie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bolivie</option>
                        <option <?php if ('Bosnie-Herzégovine' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bosnie-Herzégovine</option>
                        <option <?php if ('Botswana' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Botswana</option>
                        <option <?php if ('Brésil' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Brésil</option>
                        <option <?php if ('Brunei Darussalam' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Brunei Darussalam</option>
                        <option <?php if ('Bulgarie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Bulgarie</option>
                        <option <?php if ('Burkina Faso' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Burkina Faso</option>
                        <option <?php if ('Burundi' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Burundi</option>
                        <option <?php if ('Cambodge' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Cambodge</option>
                        <option <?php if ('Cameroun' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Cameroun</option>
                        <option <?php if ('Canada' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Canada</option>
                        <option <?php if ('Cap vert' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Cap vert</option>
                        <option <?php if ('Chili' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Chili</option>
                        <option <?php if ('Chine' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Chine</option>
                        <option <?php if ('Chypre' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Chypre</option>
                        <option <?php if ('Cisjordanie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Cisjordanie</option>
                        <option <?php if ('Colombie' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Colombie</option>
                        <option <?php if ('Comores' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Comores</option>
                        <option <?php if ('Congo' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Congo</option>
                        <option <?php if ('Cook Islands' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Cook Islands</option>
                        <option <?php if ('Corée du Nord' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Corée du Nord</option>
                        <option <?php if ('Corée du Sud' == $result["pays"]) {
                                    echo 'selected';
                                } ?>>Corée du Sud</option>
                    </select></br>
                    E-mail<input type='text' name='email' value='<?php echo $result["email"]; ?>' style='margin-left:95;'></br>
                    Adresse<input type='text' name='adresse' value='<?php echo $result["adresse"]; ?>' style='margin-left:88;'></br>
                    Ville<input type='text' name='ville' value='<?php echo $result["ville"]; ?>' style='margin-left:107px;'></br>
                    Code postal<input type='text' name='postal' value='<?php echo $result["postal"]; ?>' style='margin-left:65;'></br>
                    Téléphone 1<input type='text' name='tele1' value='<?php echo $result["telephone1"]; ?>' style='margin-left:60;'></br>
                    Téléphone 2<input type='text' name='tele2' value='<?php echo $result["telephone2"]; ?>' style='margin-left:60;'></br>
                    Fonction souhaitée<select name='metierre' style='margin-left: 22px;' value='<?php echo $result["metierrecherche"]; ?>'>
                        <option>Choisissez un métier</option>
                        <option <?php if ('Acheteur' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Acheteur</option>
                        <option <?php if ('Adjoint chef d’atelier' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Adjoint chef d’atelier</option>
                        <option <?php if ('Adjoint chef de centre' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Adjoint chef de centre</option>
                        <option <?php if ('Administrateur des ventes' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Administrateur des ventes</option>
                        <option <?php if ('Ambassadeur show room' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Ambassadeur show room</option>
                        <option <?php if ('Animateur réseau' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Animateur réseau</option>
                        <option <?php if ('Apprenti carrossier/peintre' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Apprenti carrossier/peintre</option>
                        <option <?php if ('Apprenti mécanicien' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Apprenti mécanicien</option>
                        <option <?php if ('Approvisionneur' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Approvisionneur</option>
                        <option <?php if ('Assistant Homologation' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Assistant Homologation</option>
                        <option <?php if ('ASSISTANT QUALITE' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>ASSISTANT QUALITE</option>
                        <option <?php if ('Attaché(e) commercial(e)' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Attaché(e) commercial(e)</option>
                        <option <?php if ('Auditeur' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Auditeur</option>
                        <option <?php if ('Carrossier peintre automobile' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Carrossier peintre automobile</option>
                        <option <?php if ('Chargé d’affaire' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chargé d’affaire</option>
                        <option <?php if ('Chargé d’études marketing' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chargé d’études marketing</option>
                        <option <?php if ('Chargé de clientèle' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chargé de clientèle</option>
                        <option <?php if ('Chargé de communication' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chargé de communication</option>
                        <option <?php if ('Chargé de recrutement' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chargé de recrutement</option>
                        <option <?php if ('Chauffeur livreur' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chauffeur livreur</option>
                        <option <?php if ('Chauffeur Routier' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chauffeur Routier</option>
                        <option <?php if ('Chef d’équipe Homologation' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chef d’équipe Homologation</option>
                        <option <?php if ('Chef d’equipe logistique' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chef d’equipe logistique</option>
                        <option <?php if ('Chef d’unité carrosserie' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chef d’unité carrosserie</option>
                        <option <?php if ('Chef d’unité mécanique' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chef d’unité mécanique</option>
                        <option <?php if ('Chef d’atelier' == $result["metierrecherche"]) {
                                    echo 'selected';
                                } ?>>Chef d’atelier</option>
                    </select></br>
                    Secteur d'activité <select name='activite' style='margin-left: 28px;' value='<?php echo $result["activite"]; ?>'>
                        <option <?php if ('' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>choisissez une activité</option>
                        <option <?php if ('Autre' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Autre</option>
                        <option <?php if ('Cadre en administration / col.terr.' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Cadre en administration / col.terr.</option>
                        <option <?php if ('Cadre en entreprise' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Cadre en entreprise</option>
                        <option <?php if ('Chef d’entreprise' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Chef d’entreprise</option>
                        <option <?php if ('Employé ou ouvrier' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Employé ou ouvrier</option>
                        <option <?php if ('Enseignant' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Enseignant</option>
                        <option <?php if ('Etudiant' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Etudiant</option>
                        <option <?php if ('Profession intermèdiaire' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Profession intermèdiaire</option>
                        <option <?php if ('Profession libérale' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Profession libérale</option>
                        <option <?php if ('Retraité' == $result["activite"]) {
                                    echo 'selected';
                                } ?>>Retraité</option>
                    </select></br>
                    Disponibilité<select style='margin-left:59;' name='disponiblite' selected="selected">
                        <option <?php if ('En recherche d’activité' == $result["disponiblite"]) {
                                    echo 'selected';
                                } ?>>En recherche d’activité</option>
                        <option <?php if ('A l’écoute du marché' == $result["disponiblite"]) {
                                    echo 'selected';
                                } ?>>A l’écoute du marché</option>
                    </select>
                    </br> Mobilité géographique<select name='mobilite'>
                        <option <?php if ('Aucune' == $result["mobilite"]) {
                                    echo 'selected';
                                } ?>>Aucune</option>
                        <option <?php if ('Régionale' == $result["mobilite"]) {
                                    echo 'selected';
                                } ?>>Régionale</option>
                        <option <?php if ('Nationale' == $result["mobilite"]) {
                                    echo 'selected';
                                } ?>>Nationale</option>
                        <option <?php if ('Continentale' == $result["mobilite"]) {
                                    echo 'selected';
                                } ?>>Continentale</option>
                        <option <?php if ('Globale' == $result["mobilite"]) {
                                    echo 'selected';
                                } ?>>Globale</option>
                    </select></br>

                    <input type='checkbox' name='offre' style='margin-left:14;' checked='checked' />Je souhaite recevoir occasionnellement par email les offres d'emploi en rapport avec mon secteur d'activité ?</br>
                    <input type=submit value=MODIFIER class='modifier'></form>
                    <form onclick="return validate()" name='myform'>
                        <p style='margin-left: 165px; color:#428bca; text-decoration:underline; cursor:pointer;' onclick="myFunction()">
                            Modifier le mot de passe
                        </p>
                        <div id="myDIV">
                            Mot de passe actuel<input type='password' name='mtp'></br>
                            Nouveau mot de passe <input type='password' name='nvmtp'></br>
                            Confirmation mot de passe <input type='password' name='confmtp'></br>
                            </bR><input type='submit' value='MODIFIER' class='modifier'>
                        </div>
                    </form>

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
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function validate() {
        var oldpass = document.forms.write["myform"]["$result['password']"].value;
        var pass = document.forms.write["myform"]["mtp"].value;
        var passwd = document.forms["myform"]["nvmtp"].value;
        var conf = document.forms["myform"]["confmtp"].value;
        if (pass != oldpass) {
            alert("mot de passe incorrecte");
            return false;
        }
        if (passwd != conf) {
            alert("Les mots de passe ne sont pas identiques");
            return false;
        }
        if (passwd.length <= 12) {
            alert("votre mot de passe doit respecter les conditions");
            return false;
        }
    }
</script>