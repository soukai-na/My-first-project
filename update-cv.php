<?php
session_start();
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
        <?php include('scriptes/cnx-menu.php'); ?>
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
                ><a href=mon-compte.php#cv>Gérer mes CV</a></br>
                ><a href=mon-compte.php#motivation>Gérer mes lettres de motivation</a></br>
                ><a href=donnees-perso.php>Modifier mes informations personnelles</a></br>
                <span><a href=deconnexion.php>Se déconnecter</a> </span>
            </p>
        </div>

    </div>
    </div>
    <div id='sous'>
        <div style='font-weight:100; font-size:13; margin:auto;margin-left: 435px;'><a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a> ><a href=mon-compte.php>Mon compte</a>>Insertion cv</div>
    </div>
    <?php
    
    $query = "SELECT * FROM cv WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "' and titre='".$_POST['title']."'";
    $sqll = mysqli_query($conn, $query);
    $resultt = mysqli_fetch_array($sqll);

    $file = $_POST['file'];
    $titre = $_POST['titre'];
    $niveau = $_POST['niveau'];
    $fonction = $_POST['fonction'];
    $nvetude = $_POST['nvetude'];
    $contrat = $_POST['contrat'];
    $consultable = $_POST['consultable'];
    $infosupp = $_POST['infosupp'];
    $edecform = $_POST['edecform'];
    $langue = $_POST['langue'];
    $comppers = $_POST['comppers'];
    $infocomp = $_POST['infocomp'];
    $requete = "UPDATE cv SET file='$file',titre='$titre',niveauexp='$niveau',
    fonction='$fonction',niveauetd='$nvetude',contrat='$contrat',consultable='$consultable',expprof='$infosupp',
    edcform='$edecform',langues='$langue',comppers='$comppers',infocomp='$infocomp' WHERE titre='".$_POST['title']."'";
    $sqli = mysqli_query($conn, $requete);
    $req = "SELECT * FROM cv WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "'";
    $sql = mysqli_query($conn, $req);
    $result = mysqli_fetch_array($sql);
    ?>
    <form method=POST action=update-cv.php>
        <div class='inserer-cv'>
            <p style='color:brown;font-size:25px;font-family:sans-serif;'>Insérer un CV dans mon compte</p>
            <b style='color:red;'>Votre CV</b></br>
            Sélectionner un CV<p><input type="file" name="file" value='<?php echo $result['file'];  ?>'></p>
            <font style='color:lightgreen; text-decoration:underline;'><?php echo $result['file'];  ?></font>
            <p style='color:red;'>(.doc, .pdf, .docx, .rtf, .txt de 2 mo ou moins)</p></br>
            Titre de votre CV<input type='text' name='titre' placeholder="Titre accrocheur" value='<?php echo $result['titre']; ?>'>
            <span> Niveau d'expérience<select name=niveau style='margin-left: 16px;margin-bottom: 15px;'>
                    <option <?php if ('' == $result["niveauexp"]) {
                                echo 'selected';
                            } ?>>Choisissez</option>
                    <option <?php if ('Débutant et jeune diplomé' == $result["niveauexp"]) {
                                echo 'selected';
                            } ?>>Débutant et jeune diplomé</option>
                    <option <?php if ('2 à 4 ans d’expérience' == $result["niveauexp"]) {
                                echo 'selected';
                            } ?>>2 à 4 ans d’expérience</option>
                    <option <?php if ('5 ans d’expérience et plus' == $result["niveauexp"]) {
                                echo 'selected';
                            } ?>>5 ans d’expérience et plus</option>
                    <option <?php if ('Aucune ecpérience automobile' == $result["niveauexp"]) {
                                echo 'selected';
                            } ?>>Aucune ecpérience automobile</option>
                </select></span>
            </br>
            Fonction envisagée<select name='fonction' style='margin-left: 60px;margin-bottom: 15px;'>
                <option>Choisissez un métier</option>
                <option <?php if ('Acheteur' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Acheteur</option>
                <option <?php if ('Adjoint chef d’atelier' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Adjoint chef d’atelier</option>
                <option <?php if ('Adjoint chef de centre' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Adjoint chef de centre</option>
                <option <?php if ('Administrateur des ventes' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Administrateur des ventes</option>
                <option <?php if ('Ambassadeur show room' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Ambassadeur show room</option>
                <option <?php if ('Animateur réseau' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Animateur réseau</option>
                <option <?php if ('Apprenti carrossier/peintre' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Apprenti carrossier/peintre</option>
                <option <?php if ('Apprenti mécanicien' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Apprenti mécanicien</option>
                <option <?php if ('Approvisionneur' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Approvisionneur</option>
                <option <?php if ('Assistant Homologation' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Assistant Homologation</option>
                <option <?php if ('ASSISTANT QUALITE' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>ASSISTANT QUALITE</option>
                <option <?php if ('Attaché(e) commercial(e)' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Attaché(e) commercial(e)</option>
                <option <?php if ('Auditeur' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Auditeur</option>
                <option <?php if ('Carrossier peintre automobile' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Carrossier peintre automobile</option>
                <option <?php if ('Chargé d’affaire' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chargé d’affaire</option>
                <option <?php if ('Chargé d’études marketing' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chargé d’études marketing</option>
                <option <?php if ('Chargé de clientèle' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chargé de clientèle</option>
                <option <?php if ('Chargé de communication' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chargé de communication</option>
                <option <?php if ('Chargé de recrutement' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chargé de recrutement</option>
                <option <?php if ('Chauffeur livreur' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chauffeur livreur</option>
                <option <?php if ('Chauffeur Routier' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chauffeur Routier</option>
                <option <?php if ('Chef d’équipe Homologation' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chef d’équipe Homologation</option>
                <option <?php if ('Chef d’equipe logistique' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chef d’equipe logistique</option>
                <option <?php if ('Chef d’unité carrosserie' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chef d’unité carrosserie</option>
                <option <?php if ('Chef d’unité mécanique' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chef d’unité mécanique</option>
                <option <?php if ('Chef d’atelier' == $result["fonction"]) {
                            echo 'selected';
                        } ?>>Chef d’atelier</option>
            </select>
            <span>Niveau d'études <select name='nvetude' style='margin-left: 39px;margin-bottom: 15px;'>
                    <option <?php if ('' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>Choisissez</option>
                    <option <?php if ('CAP' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>CAP</option>
                    <option <?php if ('BEP' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>BEP</option>
                    <option <?php if ('BAC' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>BAC</option>
                    <option <?php if ('BAC+1' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>BAC+1</option>
                    <option <?php if ('BAC+2' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>BAC+2</option>
                    <option <?php if ('BAC+3' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>BAC+3</option>
                    <option <?php if ('BAC+4' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>BAC+4</option>
                    <option <?php if ('BAC+5' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>BAC+5</option>
                    <option <?php if ('>BAC+5' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>>BAC+5</option>
                    <option <?php if ('Aucune formation automobile' == $result["niveauetd"]) {
                                echo 'selected';
                            } ?>>Aucune formation automobile</option>
                </select></span>
            </br>
            Type de contrat souhaité<select name=contrat style='margin-left: 28px;margin-bottom: 15px;'>
                <option <?php if ('' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>Choisissez</option>
                <option <?php if ('Contrat à Durée Indéterminée(CDI)' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>Contrat à Durée Indéterminée(CDI)</option>
                <option <?php if ('Contrat à Durée Déterminée(CDD)' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>Contrat à Durée Déterminée(CDD)</option>
                <option <?php if ('Mission/Intérim' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>Mission/Intérim</option>
                <option <?php if ('VIE' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>VIE</option>
                <option <?php if ('Contrat de Professionnalisation' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>Contrat de Professionnalisation</option>
                <option <?php if ('Contrat d’Apprentissage' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>Contrat d’Apprentissage</option>
                <option <?php if ('CIFRE' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>CIFRE</option>
                <option <?php if ('contrat Nouvelles Embauches(CNE)' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>contrat Nouvelles Embauches(CNE)</option>
                <option <?php if ('contrat de stage' == $result["contrat"]) {
                            echo 'selected';
                        } ?>>contrat de stage</option>
            </select>
            <span>Consultable par d'autres recruteurs ?
                <input type=radio <?php if ('OUI' == $result["consultable"]) {
                                        echo 'checked';
                                    } ?> name=consultable value='OUI'>OUI
                <input type=radio <?php if ('NON' == $result["consultable"]) {
                                        echo 'checked';
                                    } ?> name=consultable value='NON'>NON
            </span>
        </div>
        </br>
        <div class='inserer-cv'>
            <b>Informations supplémentaires sur votre CV</b></br></br>
            <b style='color:darkred; margin-right:10px;'>Expérience professionnelle</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='infosupp' placeholder="Informations supplémentaires sur votre CV..."><?php echo $result["expprof"]; ?></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Éducation et formations</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='edecform' placeholder="Éducation et formations..."><?php echo $result['edcform']; ?></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Langues</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='langue' placeholder="Langues..."><?php echo $result['langues']; ?></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Compétences personnelles</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='comppers' placeholder="Compétences personnelles..."><?php echo $result['comppers']; ?></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Informations complémentaires</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='infocomp' placeholder="Informations complémentaires..."><?php echo $result['infocomp']; ?></textarea>
        </div>
        <span><input type='submit' value='MODIFIER'></span>
    </form>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>