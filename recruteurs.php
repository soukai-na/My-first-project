<?php
session_start();
$server = 'localhost';
$user = 'root';
$passwd = 'P@ssw0rd';

$conn = mysqli_connect($server, $user, $passwd, 'autorecrute');
if (!$conn) {
  echo "error:" . mysqli_connect_error();
}
?>
<html>

<head>
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
  <title>Recruter les meilleurs profils de secteur automobile avec autorecrute.com,le site spécialisé dans le recrutement automobile-Autorecrute.com</title>
  <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
  <header>
    <?php
    $color7 = '#d7dae1';
    include('scriptes/menu.php'); ?>
    <?php include('scriptes/recherche.php'); ?>
  </header>
  <div id='face'>
    <div id='face1'>
      <div id='sous'>
        <div style='font-weight:100; font-size:13; margin:auto; margin-top:50;'><a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a> >Espace recruteur</div>
      </div>
      <?php
      $req = "SELECT * FROM recruteurs";
      $result = mysqli_query($conn, $req);
      $sql = mysqli_fetch_array($result);
      ?>
      <?php echo $sql['titre']; ?></br>
      <?php echo $sql['tableau1']; ?>
      </br>
      <?php echo $sql['tableau2']; ?>

      <div id='face2'>
        </br>
        <form method=POST action='cnx-recruteur.php'  onsubmit="return validate()" name='myform'>
          <div class='compte' style='margin-left:10;'>
            <p>
              <font color='white' face='arial' size='5'><b>Mon compte recruteur</b></font>
            </p>
            <hr>
            <input type='text' name=mail placeholder='Email' required /></br></br>
            <input type='password' name=passwd placeholder='Mot de passe' id='passwd' required /><span><i class="material-icons" style='font-size: 17px; color: black; margin-top: -23px; margin-left: 235px; cursor:pointer;' onclick="myFunction()">visibility</i></span></br>
            <p id='mtp'>
              <font size='1px' face='arial'><span style='margin-right:100;'><a href='http://localhost/autorecrute/compte-recruteur.php'>>Inscription</a></span><span onclick="mafonction()" style="cursor:pointer;">>Mot de passe oublié?</span></font>
            </p></br>
            <div style='display:flex; width:280px; margin-left:35px; height:50px;'><input type='submit' value='Se connecter' style='font-size:22;' /></div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </br></br>
  <?php
  $req = "SELECT * FROM tableaux";
  $result = mysqli_query($conn, $req);
  $sql = mysqli_fetch_array($result);
  ?>
  <div id='taab'>
    <?php echo $sql['tableau1']; ?>

    <?php echo $sql['tableau2']; ?>

    <?php echo $sql['tableau3']; ?>
  </div>
  </br>
  <div style='border:1px silver solid; text-align:center; padding:10; width:1000px; margin-left:417;'>
    <?php echo $sql['tableau4']; ?>
  </div>
  </br>
  <div class='tabcontact'>
    <?php echo $sql['tableau5']; ?>
  </div>
  </br>
  <div style='display:flex; justify-content:center; margin-left:17;'>
    <div>
      <?php echo $sql['tableau6']; ?>
    </div>

    <div style=margin-left:26;>
      <?php echo $sql['tableau7']; ?>
    </div>
  </div>
  </br>
  <div style=margin-left:415;>
    <?php echo $sql['tableau8']; ?>
  </div>
  </br></br>
  <a href='http://localhost/autorecrute/recruteurs.php'><img src='images/ss.png' style='cursor:pointer;margin-right:30;margin-top:-117px; width:50; float:right;' /></a></br>
  <?php include('scriptes/footer.php'); 
  mysqli_close($conn);
  ?>
</body>

</html>
<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("passwd");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function validate() {
        var email = document.forms["myform"]["mail"].value;
        var passwd = document.forms["myform"]["passwd"].value;
        var exp = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
        if (!exp.test(email)) {
            alert("L’email n’est pas au bon format");
            return false;
        }

        if (passwd.length <= 12) {
            alert("votre mot de passe est incorrecte");
            return false;
        }

    }
  function mafonction() {
    var pass = prompt('entrez votre email', 'user@gmail.com');
    if (pass != null) {
      alert('veuillez visiter votre boite email! ');
    } else {
      alert('Veuillez entrer votre email pour récupérer votre mot de passe');
    }
  }
</script>