<?php session_start(); ?>
<html>

<head>
  <?php
  $servername = "localhost";
  $username = 'root';
  $password = 'P@ssw0rd';
  $conn = mysqli_connect($servername, $username, $password, 'autorecrute');
  if (!$conn) {
    echo 'Error:' . mysqli_connect_error();
  }
  ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
  <title>Les offres d'emploi dans l'automobile-Autorecrute.com</title>
  <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
  <header>
    <?php $color1 = '#d7dae1';
    include('scriptes/menu.php'); ?>
    <?php include('scriptes/recherche.php'); ?>
  </header>
  <?php
  $req = "SELECT * FROM focus WHERE id=2";
  $result = mysqli_query($conn, $req);
  $sql = mysqli_fetch_array($result);
  ?>
  <div id='face' style='margin-top:50;'>
    <div id='face1'>
      <div id=sous>
        <div style='font-weight:100; font-size:13; margin:auto;'>
          <a href=http://localhost/autorecrute/autorecrute.php>Acceuil </a>> Les métiers de l'automobile </div> </div> <font color='#555555' size=5px face=arial><?php echo $sql['titre1']; ?></font>
            <?php echo $sql['texte1']; ?>
            <div style=display:flex;>
              <?php echo $sql['titre2']; ?><div style=' margin-left:130px; margin:8px; font-size:14px;'>
                <font color=red face=arial>694 offres trouvées</font>
              </div>
            </div>

            <div id=total>
              <?php echo $sql['texte2']; ?>
            </div>

            <font size=3>
              <div style=margin:12; id=neuf>Cliquez sur l'offre pour accéder au détail</div>
            </font>
            <a href='Mécanicien-Automobile-opérations-rapides.php' style='text-decoration:none;'>
              <form method='POST' action='mes-annonces.php'>
                <?php
                $req = "SELECT * FROM offre WHERE id=1";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);

                ?>
                <div class=tab1>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font></br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?></font>
                  </p>
                  <p>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
            </br>
            <a href='https://www.autorecrute.com/offre-emploi-centre-auto-roady-saint-julien-en-genevois/technicien-vitrage-automobile-h-f/94423' style='text-decoration:none;'>
              <form method=POST action=mes-annonces.php>
                <?php
                $req = "SELECT * FROM offre WHERE id=2";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);
                ?>
                <div class=tab2>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font></br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?></font>
                  </p>
                  <p>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
            <form method=POST action=mes-annonces.php>
              <?php
              $req = "SELECT * FROM offre WHERE id=3";
              $result = mysqli_query($conn, $req);
              $sql = mysqli_fetch_array($result);
              ?>
              </br>
              <div class=tab3>
                <p>
                  <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                  <font color=black><?php echo $sql['texte']; ?></font></br></br>
                  <font color=gray size=2><?php echo $sql['lien1']; ?></font><input type=submit value=A-trés-vite style=margin-left:320; />
                </p>
                <p><?php echo $sql['img']; ?></p>
              </div>
            </form>
            </br>
            <a href='https://www.autorecrute.com/offre-emploi-centre-auto-roady-saint-julien-en-genevois/vendeur-pieces-de-rechange-et-accessoires-automobile-h-f/94424' style='text-decoration:none;'>
              <form method=POST action=mes-annonces.php>
                <?php
                $req = "SELECT * FROM offre WHERE id=4";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);
                ?>
                <div class=tab1>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font> </br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?></font>
                  </p>
                  <p>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
            </br>
            <a href='' style='text-decoration:none;'>
              <form method=POST action=mes-annonces.php>
                <?php
                $req = "SELECT * FROM offre WHERE id=5";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);
                ?>
                <div class=tab1>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font>
                    </br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?>
                    </font>
                  </p>
                  <p>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
            </br>
            <a href='https://www.autorecrute.com/offre-emploi-lycee-professionnel-poullart-des-places/enseignant-en-cap-mecanique-auto-en-lycee-professionnel-a-thiais-94/94483' style='text-decoration:none;'>
              <form method=POST action=mes-annonces.php>
                <?php
                $req = "SELECT * FROM offre WHERE id=6";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);
                ?>
                <div class=tab1>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font>
                    </br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?></font>
                  </p>
                  <p>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
            </br>
            <a href='' style='text-decoration:none;'>
              <form method=POST action=mes-annonces.php>
                <?php
                $req = "SELECT * FROM offre WHERE id=7";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);
                ?>
                <div class=tab1>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font>
                    </br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?>
                    </font>
                  </p>
                  <p>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
            </br>
            <a href='' style='text-decoration:none;'>
              <form method=POST action=mes-annonces.php>
                <?php
                $req = "SELECT * FROM offre WHERE id=8";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);
                ?>
                <div class=tab1>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font>
                    </br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?>
                    </font>
                  </p>
                  <p style='display:block;'>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
            </br>
            <a href='' style='text-decoration:none;'>
              <form method=POST action=mes-annonces.php>
                <?php
                $req = "SELECT * FROM offre WHERE id=9";
                $result = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($result);
                ?>
                <div class=tab1>
                  <p>
                    <input type='hidden' name='annonce' value='<?php echo $sql['titre1']; ?>' />
                    <font color=gray size=2><?php echo $sql['titre1']; ?></font></br>
                    <font color=red><b><?php echo $sql['titre2']; ?></b></font></br>
                    <font color=black><?php echo $sql['texte']; ?></font>

                    </br></br>
                    <font color=red size=2><?php echo $sql['lien1']; ?>
                    </font>
                  </p>
                  <p>
                    <input type='submit' name='submit' value='<?php echo $sql['lien2']; ?>'>
                    </br>
                    <?php echo $sql['img']; ?>
                  </p>
                </div>
              </form>
            </a>
        </div>
        <div id="face2" style="margin-left:12;">
          <?php
          if ($_POST['btn']) {
            $margin = '1px';
            $link = 'http://localhost/autorecrute/emploi-et-stage.php';
            include('scriptes/creer.php');
          } else if ($_POST['connecter']) {
            $href = 'http://localhost/autorecrute/emploi-et-stage.php';
            include('scriptes/cnx.php');
          }
           else {
            include('scriptes/compte.php');
          }
          $_SESSION['connecter'] = $_POST['connecter'];
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
      <div class='tab'>
        <table>
          <tr>
            <?php
            $req = "SELECT * FROM liste ";
            $result = mysqli_query($conn, $req);
            $sql = mysqli_fetch_array($result);
            echo $sql['nombre'];
            ?>
          </tr>
        </table>
      </div>
      </br>
      <a href='#acceuil'><img src='images/ss.png' style='cursor:pointer;margin-right:30;margin-top:-117px; width:50; float:right;' /></a></br>
      <?php include('scriptes/footer.php'); ?>
</body>

</html>