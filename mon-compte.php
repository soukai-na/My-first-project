<?php session_start(); ?>
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
        <div id='face1' style='border: 3px black solid;width: 553px;'>
            <div class=buttons>
                <a href=mon-compte.php><button id=b1>Mon profil Autorecrute</button></a>
                <a href=mes-annonces.php><button id=b2>Mes annonces sauvegardées</button></a>
                <a href=mes-candidatures.php><button id=b3>Mes candidatures</button></a>
                <a href=donnees-perso.php><button id=b4>Données perso</button></a>
            </div>


            <div id='cvv'>
                <p>Vous n'avez toujours pas ajouté de CV à votre compte Autorecrute. Saviez-vous qu'un candidat avec un CV a potentiellement 100 fois plus de chance de ce faire recruter. Alors n'hésitez pas : </p>
                <b id='moncv'>Mes CV publiés</b><a href='ajouter-un-cv.php'><input type='submit' id='annonce-svg' name='submit' value='AJOUTER UN CV' /></a>
                </br></br>


                <?php
                $req = "SELECT * FROM cv WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "' ORDER BY id DESC";
                $sql = mysqli_query($conn, $req);
                while ($result = mysqli_fetch_array($sql)) {
                    echo "<span style='display:flex;'>
                    <span>
                        <a href='show-cv.php' style='color:black;'><i class='material-icons' style='font-size:70px;'>insert_drive_file</i></a>
                    </span>
                    <span style='margin-top:20; margin-right:19px;'><b>" . $result['titre'] . "</b></br>Fonction envisagée : " . $result['fonction'] .
                        "</br>Disponibilité : " . $_SESSION['disponiblite'] . "
                                    <form method='POST' action='show-cv.php'>
                                        <input type='hidden' name='titre' value='" . $result['titre'] . "' />
                                        <input type='submit' name='modifier' value='Modifier' style='margin-left: 0px;'>
                                    </form>
            
                            <form method='POST' action='cv-supprimer.php' >
                                <input type='hidden' name='titre' value='" . $result['titre'] . "' />
                                <button class='btn-sup' name='delete'>Suspendre</button>
                            </form>

                                    </span>


                </span>";
                }

                ?>


                <p>Astuce : Ajouter une lettre de motivation augmente votre visibilité auprès des recruteurs potentiels. Gagnez en visibilité en quelques minutes :</p>
                <b id="motivation">Mes lettres de motivation</b><a href=lettre-de-motivation.php><input type='submit' name='submit' value='Mes lettres de motivation' /></a>
                </br>

                <?php
                $requete = "SELECT * FROM lettre WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "' ORDER BY id DESC";
                $sqli = mysqli_query($conn, $requete);
                while ($resultat = mysqli_fetch_array($sqli)) {
                    echo "<span>
                    <a href='show-lettre.php' style='color:black;'><i class='material-icons' style='font-size:70px;'>insert_drive_file</i></a>
                </span><span>Objet:<b>" . $resultat['objet'] . "</b></span></br>
                        <form method='POST' action='show-lettre.php'>
                        <input type='hidden' name='objet' value='" . $resultat['objet'] . "' />
                        <input type='submit' value='Modifier' style='margin-left: 0px;margin-top: -30px;margin-right: 169px; color:white; font-weight:bold;'>
                        </form>

                  <form method='POST' action='lettre-supprimer.php'>
                  <input type='hidden' name='objet' value='" . $resultat['objet'] . "' />
                  <button class='btn-sup' name='delete' style='margin-right: 60px;margin-top:-47px; margin-left:11px;'>Suspendre</button>
                  </form></br>";
                }
                
                ?>
                </br>
                <b>Mes annonces sélectionnées</b><a href='mes-annonces.php'><input type='submit' id='annonce-svg' name='submit' value='VOIR MES ANNONCES SAUVEGARDÉES' /></a>
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