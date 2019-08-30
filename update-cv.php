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
                ><a href=>Suivre mes annonces sauvegardées</a></br>
                ><a href=>Suivre mes candidatures</a></br>
                ><a href=>Gérer mes CV</a></br>
                ><a href=>Gérer mes lettres de motivation</a></br>
                ><a href=>Modifier mes informations personnelles</a></br>
                <span><a href=deconnexion.php>Se déconnecter</a> </span>
            </p>
        </div>

    </div>
    </div>
    <div id='sous'>
        <div style='font-weight:100; font-size:13; margin:auto;margin-left: 435px;'><a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a> ><a href=mon-compte.php>Mon compte</a>>Insertion cv</div>
    </div>
    <form method=POST action=cv-bd.php >
        <div class='inserer-cv'>
            <p style='color:brown;font-size:25px;font-family:sans-serif;'>Insérer un CV dans mon compte</p>
            <b style='color:red;'>Votre CV</b></br>
            Sélectionner un CV<p><input type="file" name="file"></p>
            <p style='color:red;'>(.doc, .pdf, .docx, .rtf, .txt de 2 mo ou moins)</p></br>
            Titre de votre CV<input type='text' name='titre' placeholder="Titre accrocheur">
            <span> Niveau d'expérience<select name=niveau style='margin-left: 16px;    margin-bottom: 15px;'>
                    <option value='Choisissez'>Choisissez</option>
                    <option value='Débutant et jeune diplomé'>Débutant et jeune diplomé</option>
                    <option value='2 à 4 ans d’expérience'>2 à 4 ans d’expérience</option>
                    <option value='5 ans d’expérience et plus'>5 ans d’expérience et plus</option>
                    <option value='Aucune ecpérience automobile'>Aucune ecpérience automobile</option>
                </select></span>
            </br>
            Fonction envisagée<select name='fonction' style='margin-left: 60px;    margin-bottom: 15px;'>
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
            </select>
            <span>Niveau d'études <select name='nvetude' style='margin-left: 39px;margin-bottom: 15px;'>
                    <option name='Choisissez'>Choisissez</option>
                    <option name='CAP'>CAP</option>
                    <option name='BEP'>BEP</option>
                    <option name='BAC'>BAC</option>
                    <option name='BAC+1'>BAC+1</option>
                    <option name='BAC+2'>BAC+2</option>
                    <option name='BAC+3'>BAC+3</option>
                    <option name='BAC+4'>BAC+4</option>
                    <option name='BAC+5'>BAC+5</option>
                    <option name='>BAC+5'>>BAC+5</option>
                    <option name='Aucune formation automobile'>Aucune formation automobile</option>
                </select></span>
            </br>
            Type de contrat souhaité<select name=contrat style='margin-left: 28px;    margin-bottom: 15px;'>
                <option name='Choisissez'>Choisissez</option>
                <option name='Contrat à Durée Indéterminée(CDI)'>Contrat à Durée Indéterminée(CDI)</option>
                <option name='Contrat à Durée Déterminée(CDD)'>Contrat à Durée Déterminée(CDD)</option>
                <option name='Mission/Intérim'>Mission/Intérim</option>
                <option name='VIE'>VIE</option>
                <option name='Contrat de Professionnalisation'>Contrat de Professionnalisation</option>
                <option name='Contrat d’Apprentissage'>Contrat d’Apprentissage</option>
                <option name='CIFRE'>CIFRE</option>
                <option name='contrat Nouvelles Embauches(CNE)'>contrat Nouvelles Embauches(CNE)</option>
                <option name='contrat de stage'>contrat de stage</option>
            </select>
            <span>Consultable par d'autres recruteurs ?<input type=radio checked=checked name=consultable>OUI <input type=radio name=consultable>NON</span>
        </div>
        </br>
        <div class='inserer-cv'>
            <b>Informations supplémentaires sur votre CV</b></br></br>
            <b style='color:darkred; margin-right:10px;'>Expérience professionnelle</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='infosupp' placeholder="Informations supplémentaires sur votre CV..."></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Éducation et formations</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='edecform' placeholder="Éducation et formations..."></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Langues</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='langue' placeholder="Langues..."></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Compétences personnelles</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='comppers' placeholder="Compétences personnelles..."></textarea>
            </br>
            <b style='color:darkred; margin-right:10px;'>Informations complémentaires</b>Augmentez vos opportunités afin de trouver un emploi en remplissant ce champ
            <textarea name='infocomp' placeholder="Informations complémentaires..."></textarea>
        </div>
        <span><input type='submit' value='AJOUTER MON CV'></span>
    </form>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>