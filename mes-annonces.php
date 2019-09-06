<?php session_start();  ?>
<?php
$servername = "localhost";
$username = 'root';
$password = 'P@ssw0rd';
$conn = mysqli_connect($servername, $username, $password, 'autorecrute');
if (!$conn) {
    echo 'Error:' . mysqli_connect_error();
}
$req = "SELECT id,titre1,titre2,texte,lien1,lien2,img FROM offre WHERE titre1='" . $_POST['annonce'] . "'";
$result = mysqli_query($conn, $req);
$sql = mysqli_fetch_array($result);
if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
    ?>
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
            $reqq = "SELECT * FROM header";
            $res = mysqli_query($conn, $reqq);
            $header = mysqli_fetch_array($res);
            ?>
        <div id='back'></br>
            <div id='n1' style='margin-left:184px; margin-right: 178px; '><?php echo $header['texte1']; ?></div>
            </br>


            <?php
                $mail = $_POST['email'];
                $passwd = $_POST['password'];
                $resultt = mysqli_query($conn, "SELECT email,password,prenom,nom FROM formulaire WHERE email='" . $mail . "' and password='" . $passwd . "'") or die(mysqli_error($conn));
                $sqll = mysqli_fetch_array($resultt);

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
                    ><a href=mon-compte.php#moncv>Gérer mes CV</a></br>
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

            </br>
            <div id='face1' style='border: 3px black solid;width: 648px;'>
                <div class=buttons>
                    <a href=mon-compte.php><button id=b2 style='width: 167px;'>Mon profil Autorecrute</button></a>
                    <a href=mes-annonces.php><button id=b1 style='width:205px;'>Mes annonces sauvegardées</button></a>
                    <a href=mes-candidatures.php><button id=b3 style='width:150px;'>Mes candidatures</button></a>
                    <a href=donnees-perso.php><button id=b4 style='width:130px;'>Données perso</button></a>
                </div>


                <div class='svg'>
                    <table>
                        <?php

                            if ($_POST['submit']) {


                                $r = "SELECT * FROM annonces";
                                $s = mysqli_query($conn, $r);
                                $q = mysqli_fetch_array($s);
                                if ($q['titre1'] == $_POST['annonce']) {
                                    echo "<script>alert('Annonce déjà sauvegardée!')</script>";
                                }

                                $prenom = $_SESSION['prenom'];
                                $nom = $_SESSION['nom'];
                                $titre1 = $sql['titre1'];
                                $titre2 = $sql['titre2'];
                                $texte = $sql['texte'];
                                $lien1 = $sql['lien1'];
                                $lien2 = $sql['lien2'];
                                $img = $sql['img'];
                                $requete = "INSERT INTO annonces(id,nom,prenom,titre1,titre2,texte,lien1,lien2,img) VALUES (null,'$nom','$prenom','$titre1','$titre2','$texte','$lien1','$lien2','$img')";
                                $query = mysqli_query($conn, $requete);
                                $resultat = mysqli_fetch_array($query);
                            }
                            $reqt = "SELECT * FROM annonces WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "' ORDER BY id ";
                            $sqli = mysqli_query($conn, $reqt);
                            while ($array = mysqli_fetch_array($sqli)) {

                                echo "<form method='POST' action='supprimer-annonce.php'>
                                        <div class=tab1>
                                             <p>
                                             <input type='hidden'  name='title' value='" . $array['titre2'] . "' />
                                                <font color=gray size=2 >" . $array['titre1'] . " </font></br>
                                                <font color=red><b>" . $array['titre2'] . "</b></font></br>
                                                <font color=black>" . $array['texte'] . "</font>
                                                </br></br>
                                                <font color=red size=2>" . $array['lien1'] . "</font>
                                            </p> 
                                            <p>
                                                <button name='suppression' style='margin-bottom: 9px;margin-top:-20px;background:#dddddd;border:#dddddd;'>Supprimer l'annonce</button></br>" . $array['img'] .
                                    "</p>
                                        </div>
                                    </form>
                                    </br>";
                            }
                            ?>

                        <tr>
                            <td style='cursor:pointer;'>Préc.</td>
                            <td style='color:#5d5e65; width:38px; background:#f3f5f7;'>1</td>
                        </tr>
                    </table>
                </div>
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
<?php
} else {
    include('autorecrute.php');
    echo "<script>alert('Connectez vous!');</script>";
}
?>