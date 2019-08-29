<div>

    <?php
    session_start();
    $mail = $_POST['mail'];
    $passwd = $_POST['passwd'];

    if (isset($mail) && isset($passwd)) {

        $result = mysqli_query($conn, "SELECT email,password,prenom,nom FROM formulaire WHERE email='" . $mail . "' and password='" . $passwd . "'") or die(mysqli_error($conn));
        $sql = mysqli_fetch_array($result);
        if ($sql) {

            echo "<div class=icon >
                    <i class='material-icons'>account_circle</i>
                    <p style='font-size:37;margin-bottom: 0px;'>" . $sql['prenom'] . " " . $sql['nom'] . "</p>
                    </br><p class=fiche>
                    </br>
                    ><a href='mon-compte.php' >Mon COmpte</a></br>
                    ><a href=mes-annonces.php >Suivre mes annonces sauvegardées</a></br>
                    ><a href= >Suivre mes candidatures</a></br>
                    ><a href=mes-candidateurs.php >Gérer mes CV</a></br>
                    ><a href=mon-compte.php >Gérer mes lettres de motivation</a></br>
                    ><a href=donnees-perso.php >Modifier mes informations personnelles</a></br>
                    <span><a href=" . $href . " >Se déconnecter</a> </span>
                </p></div>";
        } else {
            echo "<script>alert('email ou mot de passe incorrecte!');</script>";
            include('compte.php');
        }
    }
    $_session['prenom'] = $sql['prenom'];
    $_session['nom'] = $sql['nom'];
    ?>
    <input type='hidden' name='email' value='<?php echo $mail; ?>' />
    <input type='hidden' name='password' value='<?php echo $passwd; ?>' />
    <?php

    var_dump($mail);
    ?>
</div>