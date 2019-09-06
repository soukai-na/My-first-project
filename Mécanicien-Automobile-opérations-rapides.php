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
        <div style='font-weight:100; font-size:13; margin:auto;margin-left: 435px;'>
            <a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a>
            <a href='emploi-et-stage.php'>Emploi automobile</a>
            >Mécanicien automobile opérations rapides h/f
        </div>
    </div>
    <div id=face>
        <div id=face1 style='width:660px;'>
            <b style='color:#bc1e46; font-size:20px; font-family:sans-serif;'>Mécanicien Automobile opérations rapides H/F</b>
            </br>
            <div style='display:flex; border:1px solid black; padding:10;'>
                <span style='margin-right:40px;'>
                    <b>Informations pratiques </b>
                    </br>
                    Publiée le 08/07/19 par :</br>
                    CENTRE AUTO ROADY - MERIGNAC</br>
                    MERIGNAC 33700, France</br>
                    Contrat à Durée Indéterminée (CDI)</br>
                    Aprés vente / Contrôle/ Entretien / Mecanique</br>
                    Date de début : Dès que possible</br>
                    Salaire indicatif : Non précisé</br>
                    Niveau d'expérience : 2 à 4 ans d'expérience</br>
                </span>
                <span style='display:block;'>
                    <img src="images/2734.png" alt='roady logo' />
                    </br>
                    <i class="material-icons">local_printshop</i>Imprimer</br>
                    <i class="material-icons">local_post_office</i>Envoyer à un ami</br>
                    <i class="material-icons">system_update_alt</i>Sauvegarder</br>
                </span>
            </div>
            </br>
            <b style='font-size:18px; font-family:sans-serif; color:#555555;'>Description du poste</b>
            </br>
            <p style='font-size:20;'>
                Rejoignez Roady, 3ème réseau de centres auto en France, et faites de votre passion pour la mécanique votre métier.



                Nous recherchons pour notre centre Roady de MERIGNAC un mécanicien automobile Service Rapide en CDI 35h (H/F).

                Ce poste est à pourvoir dès que possible.

                Rémunération attractive adaptée à votre expérience.



                Doté(e) d'un bon esprit d'équipe, ayant le sens du service et l’envie de satisfaire les clients, votre motivation et votre dynamisme vous permettront de réussir chez Roady.

                Sous la responsabilité du chef d’atelier, vous réaliserez les travaux d'entretien et de réparation (pneus, vidanges, freinage …) attendus par nos clients dans le respect des normes en vigueur chez Roady.
            </p>
            </br>
            <b style='font-size:18px; font-family:sans-serif; color:#555555;'>Description du profi</b>
            </br>
            <p style='font-size:20;'>
                Titulaire d’un CAP, Bac Pro, BTS

                Expérience minimum exigée de 1 an minimum

                Permis B indispensable.
            </p>
            <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])) { ?>
            <div class='postuler'>
                <form method='POST' action='mes-candidatures.php'>
                    <b style='color: #bc1e46;font-size: 15px;'>Postulez dès maintenant !</b>
                    </br>
                    Déposer votre CV*<input type='text' name='postulercv' required>
                    </br>
                    Lettre de motivation<input type='text' name='postulerlettre' style='margin-left:35px;' required>
                    </br>
                    <input type='submit' name='envoyer' value='ENVOYER MA CANDIDATEUR'>
                </form>
            </div>
            <?php 
            }
            ?>
            
            <?php echo $sql['texte']; ?>
            <?php
            $req = "SELECT * FROM annonce";
            $result = mysqli_query($conn, $req);
            $sql = mysqli_fetch_array($result);
            ?>
            <font size='5px' face='arial' color='#555555'>
                <p>
                    <div style='margin:16;'><?php echo $sql['titre']; ?></div>
                </p>
            </font>
            <div id='annonce'>
                <?php echo $sql['exemple']; ?>
            </div>
            <?php
            $req = "SELECT * FROM service";
            $result = mysqli_query($conn, $req);
            $sql = mysqli_fetch_array($result);
            ?>
            <p id=service>
                <font size=5px color=#555555 face=arial>
                    <div style=margin:16;><?php echo $sql['titre']; ?></div>
                </font>
            </p>
            <?php echo $sql['texte1']; ?>

        </div>
        <div id=face2>
            <a href='http://www8.smartadserver.com/click?imgid=24101916&insid=8858851&pgid=721181&ckid=4095424161592067675&uii=232037792706787758&acd=1562681536987&pubid=24&tmstp=9388355883&tgt=%24dt%3d1t%3b%24dt%3d1t%3b%24hc&systgt=%24qc%3d1307007910%3b%24ql%3dUnknown%3b%24qpc%3d10000%3b%24qt%3d209_4878_185200t%3b%24dma%3d0%3b%24b%3d16740%3b%24o%3d99999%3b%24sw%3d1920%3b%24sh%3d1080&pgDomain=http%3a%2f%2fwww.autorecrute.com%2f&go=http%3a%2f%2fsalon.autorecrute.com%2fdownloads%2fsalon%2fexposant%2f5ced46cb68b77.pdf'><img src='images/pub.jpg' /></a>
            <?php include('scriptes/metier.php'); ?>
        </div>
    </div>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>