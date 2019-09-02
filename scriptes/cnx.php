<?php session_start(); ?>
    <div>

        <?php
        
        $mail = $_POST['mail'];
        $passwd = md5($_POST['passwd']);
        if (isset($mail) && isset($passwd)) {

            $result = mysqli_query($conn, "SELECT * FROM formulaire WHERE email='" . $mail . "' and password='" . $passwd . "'") or die(mysqli_error($conn));
            $sql = mysqli_fetch_array($result);
            if ($sql) {

                echo "<div class=icon >
                    <i class='material-icons'>account_circle</i>
                    <p style='font-size:37;margin-bottom: 0px;'>" . $sql['prenom'] . " " . $sql['nom'] . "</p>";
                    
                    $_SESSION['mail']=$sql['email'];
                    $_SESSION['passwd']=$passwd;
                    $_SESSION['prenom']=$sql['prenom'];
                    $_SESSION['nom']=$sql['nom'];
                    $_SESSION['jour']=$sql['jour'];
                    $_SESSION['disponiblite']=$sql['disponiblite'];
                    
                   echo" </br><p class=fiche>
                    </br>
                    ><a href=mon-compte.php >Mon Compte</a></br>
                    ><a href=mes-annonces.php >Suivre mes annonces sauvegardées</a></br>
                    ><a href= >Suivre mes candidatures</a></br>
                    ><a href=mes-candidateurs.php >Gérer mes CV</a></br>
                    ><a href=mon-compte.php >Gérer mes lettres de motivation</a></br>
                    ><a href=donnees-perso.php >Modifier mes informations personnelles</a></br>
                    <span><a href=deconnexion.php >Se déconnecter</a> </span>
                </p></div>
                <input type=hidden name='email' value='" . $mail . "'/>
    <input type=hidden name='password' value='" . $passwd . "'/>";
            } else {
                echo "<script>alert('email ou mot de passe incorrecte!');</script>";
                include('compte.php');
            }
        }
        
        ?>

        
    </div>
