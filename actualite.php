<?php
$servername = "localhost";
$username = 'root';
$password = 'P@ssw0rd';
$conn = mysqli_connect($servername, $username, $password, 'autorecrute');
if (!$conn) {
  echo 'Error:' . mysqli_connect_error();
}
?>
<html>

<head>

  <link rel="shortcut icon" type="image/x-icon" href="icon.png" />
  <title>L'actualité de l'emploi automobile-Automobile.com</title>
  <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
  <header>
    <?php
    $color6 = '#d7dae1';
    include('scriptes/menu.php'); ?>
    <?php include('scriptes/recherche.php'); ?>
  </header>
  <div id='face'>
    <div id='face1'>
      <div id='sous'>
        <div style='font-weight:100; font-size:13; margin:auto; margin-top:50;'><a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a> >Actualité de l'automobile</div>
      </div>
      <div id='tous'>
        <p>
          <font id='service'>
            <font size='5px' color='#555555' face='arial'>
              <?php
              $req = "SELECT * FROM actualite";
              $result = mysqli_query($conn, $req);
              $sql = mysqli_fetch_array($result);
              ?>
              <div style='margin:18;'><?php echo $sql['titre']; ?></div>
            </font>
        </p>
        <div style='margin:18;'>
          <div id='Nactu'>
            <div id='N'>

              <a href='http://www.autorecrute.com/actualite-recrutement/30-km-h-en-ville-une-baisse-qui-pourrait-s-etendre/1123'>
                <div id='opc'>
                  <p>Publié il y a 1 jours</p>
                  <hr><span><b>30 km/h en ville : une baisse qui pourrait </br>s’étendre</b></span>
                </div>
              </a>
            </div>

            <div id='tabactu' style='margin-left:25;'>
              <div id='actu'>
                <a href='http://www.autorecrute.com/actualite-recrutement/assurance-automobile-de-grosses-disparites-regionales/1121'>Victime de son succès, la prime à la conversion bientôt limitée ?</a></br><span>Publié il ya 4 jours</span></br>
                <a href='http://www.autorecrute.com/actualite-recrutement/assurance-automobile-de-grosses-disparites-regionales/1121'>Assurance automobile : de grosses disparités régionales</a></br><span>Publié il ya 8 jours</span></br>
                <a href='http://www.autorecrute.com/actualite-recrutement/industrie-automobile-attention-a-l-effet-ciseau/1120'>Industrie automobile:attention à l'effet ciseau</a></br><span>Publié il ya 11 jours</span>
              </div>
            </div>
          </div>
          </br>
          <?php echo $sql['texte']; ?>
          <div style='color:#428bca; text-align:right; font-family:sans-serif;'><a href='https://www.autorecrute.com/actualite-recrutement/actualite' style='color:#428bca; text-align:right; font-family:sans-serif;'><?php echo $sql['lien']; ?></a></div>
          <p>
            <font size='5px' color='#555555' face='arial'>
              <?php
              $req = "SELECT * FROM actualite WHERE id=2";
              $result = mysqli_query($conn, $req);
              $sql = mysqli_fetch_array($result);
              ?>
              <div style='margin:18;'><?php echo $sql['titre']; ?></div>
            </font>
          </p>
          <?php echo $sql['texte']; ?>
          <div style='color:#428bca; text-align:right; font-family:sans-serif;'><a href='https://www.autorecrute.com/actualite-recrutement/interview' style='color:#428bca; text-align:right; font-family:sans-serif;'><?php echo $sql['lien']; ?></a></div>

          <p>
            <font size='5px' color='#555555' face='arial'>
              <?php
              $req = "SELECT * FROM actualite WHERE id=3";
              $result = mysqli_query($conn, $req);
              $sql = mysqli_fetch_array($result);
              ?>
              <div style='margin:18;'><?php echo $sql['titre']; ?></div>
            </font>
          </p>
          <?php echo $sql['texte']; ?>
          <div style='color:#428bca; text-align:right; font-family:sans-serif;'>
            <div><a href='https://www.autorecrute.com/actualite-recrutement/dossier' style='color:#428bca; text-align:right; font-family:sans-serif;'><?php echo $sql['lien']; ?></a></div>
          </div>
        </div>
      </div>
    </div>
    </br>
    <div id="face2">
      </br></br>
      <?php include('scriptes/compte.php'); ?>
      </br>
      <a href='http://www8.smartadserver.com/click?imgid=24101916&insid=8858851&pgid=721181&ckid=4095424161592067675&uii=232037792706787758&acd=1562681536987&pubid=24&tmstp=9388355883&tgt=%24dt%3d1t%3b%24dt%3d1t%3b%24hc&systgt=%24qc%3d1307007910%3b%24ql%3dUnknown%3b%24qpc%3d10000%3b%24qt%3d209_4878_185200t%3b%24dma%3d0%3b%24b%3d16740%3b%24o%3d99999%3b%24sw%3d1920%3b%24sh%3d1080&pgDomain=http%3a%2f%2fwww.autorecrute.com%2f&go=http%3a%2f%2fsalon.autorecrute.com%2fdownloads%2fsalon%2fexposant%2f5ced46cb68b77.pdf'><img src='images/pub.jpg' /></a>
      </br></br>

      <?php include('scriptes/metier.php'); ?>
    </div>
  </div>
  </br></br>
  <?php include('scriptes/footer.php'); ?>
</body>

</html>