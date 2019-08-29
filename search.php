<html>
<?php
$servername = "localhost";
$username = 'root';
$password = 'P@ssw0rd';
$conn = mysqli_connect($servername, $username, $password, 'autorecrute');
if (!$conn) {
    echo 'Error:' . mysqli_connect_error();
}

?>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <title> Emploi automobile-Offres d'emploi automobile, stage, alternance-Autorecrute.com</title>
    <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
    <header>
        <?php include('scriptes/menu.php'); ?>
        <?php include('scriptes/recherche.php'); ?>
    </header>
    <?php
    $req = "SELECT * FROM focus WHERE id=2";
    $result = mysqli_query($conn, $req);
    $sql = mysqli_fetch_array($result);
    ?>
    <div id=face>
        <div id=face1>
            <div id=sous style='margin-top:-11px;'>
                <div style='font-weight:100; font-size:13; margin:auto;'>
                    <a href=http://localhost/autorecrute/autorecrute.php>Acceuil </a>> Les métiers de l'automobile </div> </div> <font color='#555555' size=5px face=arial>
                        <?php echo $sql['titre1']; ?></font>
                        <?php echo $sql['texte1']; ?>
                        <div style=display:flex;>
                            <?php echo $sql['titre2']; ?>
                        </div>
                        <?php
                        $_POST['pays'] = 'Sélectionner une région';
                        $terme = $_POST['terme'];
                       
                      
                        
                        if (isset($terme) && !empty($terme)) {
                            
                            if (isset($_POST['submit'])) {
                                $terme = mysqli_real_espace_string($conn, $terme);
                            }
                            $requete = mysqli_query($conn, "SELECT mot,offre FROM mtrderecherche WHERE mot LIKE '%$terme%'") or die(mysqli_error($conn));
                            $sql=mysqli_fetch_array($requete);
                            if ($sql) {
                                    echo $sql['offre'] . '</br>';
                            } else {
                                echo '0 offre trouvée';
                            }
                        } 
                        else if (isset($_POST['region']) && empty($terme)) {
                           
                                $region = $_POST['region'];
                            $result = mysqli_query($conn,"SELECT mot,pays FROM region WHERE mot ='".$region."' ORDER BY id DESC") or die(mysqli_error($conn));
                            $row=mysqli_fetch_array($result);
                            if ($row) {
                                    echo $row['pays'] . '</br>';
                            } else {
                                echo '0 offre trouvée';
                            }
                        }else{
                            echo '0 offre trouvée';
                        }


                        ?>
                </div>




                <div id=face2 style='margin-top:55px;'>
                    <?php
                    if ($_POST['btn']) {
                        $margin = '1px';
                        $link = 'http://localhost/autorecrute/emploi-et-stage.php';
                        include('scriptes/creer.php');
                    } else {
                        include('scriptes/compte.php');
                    }

                    ?>
                    </br>
                    <?php
                    $req = "SELECT * FROM image";
                    $result = mysqli_query($conn, $req);
                    $sql = mysqli_fetch_array($result);
                    ?>
                    <?php echo $sql['image']; ?>
                    </br>
                    <div style='margin-top:10;'>
                        <font style='margin-top:10;' color='#555555' size=5px face=arial><?php echo $sql['titre']; ?></font></br>
                        <?php echo $sql['texte']; ?>
                    </div>
                    <?php include('scriptes/metier.php'); ?>
                </div>
            </div>
            </br>
            <?php include('scriptes/footer.php'); ?>
</body>

</html>