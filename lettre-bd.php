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
    <?php
    $objet = $_POST['objet'];
    $motivation=$_POST['motivation']; 

    if (
        empty($objet) || empty($motivation)
    ) {
        echo '<font color=red >Veuillez remplire tous les champs</font>';
        echo '<p style="color:red; font-size:33px;"><i class="material-icons">error</i>Error</p></br>
        <p style="color=black; font-size:15px;">' . mysqli_error($conn) . '
        </p><div display:block; ></div><div style="  background:white;"><a href=""><button style="color: white; font-family: sans-serif; border: 1px solid black; width: 165px; height: 44px; border-radius: 20px; font-size: 15px; background-color: #e6333c; margin-top:110px;">Retour à la formulaire</button></a></div>';
    } else {
        $prenom = $_SESSION['prenom'];
        $nom = $_SESSION['nom'];
        $conn = mysqli_connect($servername, $username, $password, 'autorecrute');
        $sel = mysqli_select_db($conn, 'autorecrute') or die("erreur de connexion base");
        $req = mysqli_query($conn, "INSERT INTO lettre (id,nom,prenom,objet,texte) 
    VALUES (null,'$nom','$prenom','$objet','$motivation')");



        if ($req) {
            echo "
            <div id=face>
    <div id=face1 >
    <p style='color:green; margin-bottom:575px; background:#d6e9c6; border:1px solid green; width:600; padding:10;'>On a bien reçu votre lettre de motivation.</p>
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
</div>";
        } else {
            echo  mysqli_error($conn);
        }
    }

    ?>









    <?php include('scriptes/footer.php'); ?>
</body>

</html>