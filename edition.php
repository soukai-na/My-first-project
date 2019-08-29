<html>
<head>
  <?php
  $server = 'localhost';
  $user = 'root';
  $passwd = 'P@ssw0rd';

  $conn = mysqli_connect($server, $user, $passwd, 'autorecrute');
  if (!$conn) {
    die("error:" . mysqli_connect_error());
  }
  ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
  <title>Salon de l'emploi automobile:le seul forum de recrutement 100% automobile-Automobile.com</title>
  <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
  <header>
    <?php
    $color5 = '#d7dae1';
    include('scriptes/menu.php'); ?>
    <?php include('scriptes/recherche.php'); ?>
  </header>
  <div>
    <video autoplay muted loop id='vd'>
      <source src='images/video.mp4' width="500">
    </video>
    <div style='text-align:center; margin-top:142px;'>
      <img src='images/emploi.png' style='width:300;' /></br></br>
      <font color='white' size='5'>Le seul forum de recrutement 100% automobile</font></br></br>
      <button style='font-weight:900; color:white; background:#e6333c; border:1px solid #e6333c; width:150; height:35; font-family:sans-serif; font-size:18;'>INSCRIPTIONS</button></br>
      <p  style='text-decoration:underline; margin-top:10; color:aliceblue;'>Vous êtes recruteur ?</p>
    </div>
  </div>
  <div id='page' style='justify-content:center; margin-left:480px;'>
    <div style='margin-top:100px;'>
      <?php

      $req = "SELECT * FROM salon WHERE id=2";
      $result = mysqli_query($conn, $req);
      $sql = mysqli_fetch_array($result);


      echo "<font color='gray' face='sans-serif'><b><a href='http://localhost/autorecrute/salons.php' style='text-decoration:none; color:gray;'>Le salon</a></b></font><font color='red' face='sans-serif'><b style='background:lightgray; margin-left:7px;'><a href='http://localhost/autorecrute/edition.php' style='text-decoration:none; color:red'>" .
        $sql['titre'] . "</a></b></font>";
      echo "<p style='width:800px; font-weight:100; font-family:sans-serif;'>" .
        $sql['contenu'];

      mysqli_free_result($result);
      ?>
      <div style='display:flex;'>
        <div>Géraldine GAZARD</br></br>01.53.29.11.51</div>
        <div style='margin-left:30px;'> Amrane BENNOUR</br></br>01.53.29.11.40</div>
      </div>

      <div class='dossier'><a href='https://salon.autorecrute.com/downloads/salon/exposant/5ced46cb68b77.pdf'><button>Dossier exposantssss<i class="material-icons" style='color:black; margin-left:10; vertical-align: middle; '>file_download</i></button></a> </div>
    </div></br>
    <?php
      $req="SELECT * FROM rejoindre";
      $result = mysqli_query($conn, $req);
      $sql = mysqli_fetch_array($result);
    ?>
    <b style='color:red; text-align:center; margin-left:340px;'><?php echo $sql['titre']; ?></b></br>
    <hr style=' border: 1px solid red; margin-inline-end: 865px; margin-left: 315px;  '>
    <div style='display:flex; padding:10;'>
      <div>
      <?php echo $sql['texte']; ?>
      </div>
      <div style='margin-left:165px;'>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6105371776616!2d2.3190416514923466!3d48.86563660804835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fcd61ae0a01%3A0x18030de10e25ab2c!2sPlace+de+la+Concorde!5e0!3m2!1sen!2sma!4v1566565469189!5m2!1sen!2sma" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
      <div id=presse>
       <?php include('scriptes/accr.php') ?>
      </div>
  </div>

  </br></br>
  <a href='http://localhost/autorecrute/edition.php'><img src='images/ss.png' style='cursor:pointer;margin-right:30;margin-top:-117px; width:50; float:right;'/></a></br>
  <?php include('scriptes/footer.php'); ?>
</body>

</html>