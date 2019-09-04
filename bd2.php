<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <title> Emploi automobile-Offres d'emploi automobile, stage, alternance-Autorecrute.com</title>
    <link rel='stylesheet' href='style-css/style.css' />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <?php include('scriptes/menu.php'); ?>
        <?php include('scriptes/recherche.php'); ?>
    </header>
    </br>
    <div id='face'>
        
            <?php
            session_start();
            $servername = "localhost";
            $username = 'root';
            $password = 'P@ssw0rd';
            $nom = $_POST['nom'];
            $type = $_POST['type'];
            $pays = $_POST['pays'];
            $adresse = $_POST['adresse'];
            $postal = $_POST['postal'];
            $ville = $_POST['ville'];
            $telephone = $_POST['telephone'];
            $civilite = $_POST['civilite'];
            $nom2 = $_POST['nom2'];
            $prenom = $_POST['prenom'];
            $fonction = $_POST['fonction'];
            $mail = $_POST['mail'];
            $mtp=$_POST['mtp'];
            $mtp = md5($mtp);
            $confmtp = $_POST['confmtp'];
            $tele = $_POST['tele'];
            $file = $_POST['myfile'];
            $adrfact = $_POST['adrfact'];
            $postalfact = $_POST['postalfact'];
            $villefact = $_POST['villefact'];
            $fax1 = $_POST['fax1'];
            $fax2 = $_POST['fax2'];
            $site = $_POST['site'];
            $teleptb = $_POST['teleptb'];



            if (
                empty($nom) || empty($type) || empty($pays) || empty($adresse) || empty($postal) ||
                empty($ville) || empty($telephone) || empty($nom2) || empty($prenom) || empty($fonction)
                || empty($mail) || empty($mtp) || empty($confmtp) || empty($tele) || empty($file)
            ) {
                echo '<font color=red >Veuillez remplire tous les champs</font>';
                echo '<p style="color:red; font-size:33px;"><i class="material-icons">error</i>Error</p></br>
            <p style="color=black; font-size:15px;">' . mysqli_error($conn) . '
            </p><div display:block; ></div><div style=" margin-left: 205px; background:white;"><a href="http://localhost/autorecrute/compte-recruteur.php"><button style="color: white; font-family: sans-serif; border: 1px solid black; width: 165px; height: 44px; border-radius: 20px; font-size: 15px; background-color: #e6333c; margin-top:110px; margin-left:-350px;">Retour à la formulaire</button></a></div>';
            } else {

                $conn = mysqli_connect($servername, $username, $password, 'autorecrute');
                $sel = mysqli_select_db($conn, 'autorecrute') or die("erreur de connexion base");
                $req = mysqli_query($conn, "INSERT INTO formulaire2 (id,societe,pays,type,adresse,postal,ville,telephone1,fax1,site,adrfacturation,postalfacturation,villefacturation,file,civilite,nom,prenom,fonction,email,password,telephone2,teleportable,fax2) 
            VALUES (null,'$nom','$pays','$type','$adresse','$postal','$ville','$telephone','$fax1','$site','$adrfact','$postalfact','$villefact',
            '$file','$civilite','$nom2','$prenom','$fonction','$mail','$mtp','$tele','$teleptb','$fax2')");



                if ($req) {
                    echo '<div id=face1>
            <h2>Confirmez votre inscription</h2>
            <p style="color:green; background:#d6e9c6; border:1px solid green; width:600; padding:10;">Nous avons envoyé un email comportant un lien de confirmation sur l’adresse email indiquée.
                Cliquez sur ce dernier pour activer votre compte.
                </br></br>
                N’oubliez-pas de regarder dans vos courriers indésirables. Bonne journée, l’équipe Autorecrute.</p></br>
            <a href=autorecrute.php><button style="color: white; font-family: sans-serif; border: 1px solid black; width: 165px; height: 44px; border-radius: 20px; font-size: 15px; background-color: #e6333c; ">Retour à l’acceuil</button></a>
        </div>';
                } else {
                    echo  mysqli_error($conn);
                }
            }
            ?>
       
        <div id="face2" style='margin-left:10; margin-top:30;'>
            <?php include('scriptes/compte.php'); ?>
            </br>
            <?php include('scriptes/metier.php'); ?>
        </div>
    </div>
    </br>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>