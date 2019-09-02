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
        $servername = "localhost";
        $username = 'root';
        $password = 'P@ssw0rd';
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
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];

        if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['pays']) || empty($_POST['adr']) || empty($_POST['ville']) || empty($_POST['postal']) || empty($_POST['tele1']) || empty($_POST['mobilite']) || empty($_POST['activite']) || empty($_POST['metierre']) || empty($_POST['disp']) || empty($_POST['condition'])) {
            echo '<font color=red >Veuillez remplire tous les champs</font>';
            echo '<p style="color:red; font-size:33px;"><i class="material-icons">error</i>Error</p></br>
            <p style="color=black; font-size:15px;">' . mysqli_error($conn) . '
            </p><div display:block; ></div><div style=" margin-left: 205px; background:white;"><a href="http://localhost/autorecrute/inscription.php"><button style="color: white; font-family: sans-serif; border: 1px solid black; width: 165px; height: 44px; border-radius: 20px; font-size: 15px; background-color: #e6333c; margin-top:110px; margin-left:-350px;">Retour à la formulaire</button></a></div>';
        } else {
            $md5 = md5('$passwd');
            var_dump($passwd);
            var_dump($md5);
            $conn = mysqli_connect($servername, $username, $password, 'autorecrute');
            $sel = mysqli_select_db($conn, 'autorecrute') or die("erreur de connexion base");
            $req = mysqli_query($conn, "INSERT INTO formulaire (id,email,password,nom,prenom,annee,mois,jour,pays,adresse,ville,postal,telephone1,telephone2,mobilite,activite,metieractuel,metierrecherche,disponiblite) 
            VALUES (null,'$email','$md5','$nom','$prenom','$annee','$mois','$jour','$pays','$adr','$ville','$postal','$tele1','$tele2','$mobilite','$activite','$metierac','$metierre','$disp')");

            if ($req) {
                echo '<div id=face1>
            <h2>Confirmez votre inscription</h2>
            <p style="color:green; background:#d6e9c6; border:1px solid green; width:600; padding:10;">Nous avons envoyé un email comportant un lien de confirmation sur l’adresse email indiquée.
                Cliquez sur ce dernier pour activer votre compte.
                </br></br>
                N’oubliez-pas de regarder dans vos courriers indésirables. Bonne journée, l’équipe Autorecrute.</p></br>
            <a href="http://localhost/autorecrute/autorecrute.php" style="margin-left: 205px; border: 1px solid white;  "><button style="color: white; font-family: sans-serif; border: 1px solid black; width: 165px; height: 44px; border-radius: 20px; font-size: 15px; background-color: #e6333c; ">Retour à l’acceuil</button></a>
        </div>';
            } else {
                echo  mysqli_error($conn);
            }
        }
        ?>

        <div id="face2" style='margin-left:10; margin-top:30;'>
            <?php
            if ($_POST['btn']) {
                $margin = '1px';
                $link = 'http://localhost/autorecrute/bd.php';
                include('scriptes/creer.php');
            } else {
                include('scriptes/compte.php');
            }

            ?>
            </br>
            <?php include('scriptes/metier.php'); ?>
        </div>
    </div>
    </br>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>