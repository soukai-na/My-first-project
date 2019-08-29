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
    $req = "SELECT * FROM header";
    $result = mysqli_query($conn, $req);
    $sql = mysqli_fetch_array($result);
    ?>
    <div id='back' style='margin-top:-15px;'></br>
        <div id='n1' style='margin-left:100;'><?php echo $sql['texte1']; ?></div>
        </br>

        <div id=comptee style=margin-left:112;>
            <form method='POST' action='connexion.php' onsubmit="return validate()" name='myform'>
                <p>
                    <font color=white face=arial size=6>Mon compte</font>
                </p>
                <hr><a href=https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=77reu8cupyym2y&state=fc68342e58e6e0cfc1b7b33399480ef2&redirect_uri=http%3A%2F%2Fwww.autorecrute.com%2F&scope=r_basicprofile%20r_emailaddress> <img src=images/linkedin.png /></a></br></br>
                <input type=text id=mail  name=mail placeholder=Adresse-e-mail required /></br></br>
                <span><input type=password id=passwd name=passwd placeholder=Mot-de-passe required /><img src=images/eye.png onclick="myFunction()" style='cursor:pointer;'/></span></br>
                <input type='hidden' name='nom' value='<?php echo $_POST['nom']; ?>' />
                <p id=mtp onclick="myfunction()" style="cursor:pointer; margin-top:15px;">
                    <font size=1px face=arial>>Mot de passe oublié?</font>
                </p></br>
                <div style='display:flex; width:300px; margin:auto; height:40px;'><input type=submit value='Se connecter' name='connect' />
                    <hr>
                    <p><a href=http://localhost/autorecrute/creer-un-compte.php> <font size=2>Créer un compte</font>
                        </a></p>
            </form>
        </div>
    </div>
    </div>
    <?php
    $req = "SELECT * FROM pays";
    $result = mysqli_query($conn, $req);
    $sql = mysqli_fetch_array($result);
    ?>
    <div id=face style='margin-top:35px;'>
        <div id='face1'>
            <?php echo $sql['texte']; ?>
            <?php
            $req = "SELECT * FROM annonce";
            $result = mysqli_query($conn, $req);
            $sql = mysqli_fetch_array($result);
            ?>
            <font size='5px' face='arial' color='#555555'>
                <p>
                    <div style='margin:16;'><?php echo $sql['titre']; ?></div>
                </p>
            </font>
            <div id='annonce'>
                <?php echo $sql['exemple']; ?>
            </div>
            <?php
            $req = "SELECT * FROM service";
            $result = mysqli_query($conn, $req);
            $sql = mysqli_fetch_array($result);
            ?>
            <p id=service>
                <font size=5px color=#555555 face=arial>
                    <div style=margin:16;><?php echo $sql['titre']; ?></div>
                </font>
            </p>
            <?php echo $sql['texte1']; ?>
            <?php echo $sql['texte2']; ?>
        </div>
        <?php include('scriptes/actualite.php'); ?>
    </div>

    <div id='face2'>
        <a href='http://www8.smartadserver.com/click?imgid=24101916&insid=8858851&pgid=721181&ckid=4095424161592067675&uii=232037792706787758&acd=1562681536987&pubid=24&tmstp=9388355883&tgt=%24dt%3d1t%3b%24dt%3d1t%3b%24hc&systgt=%24qc%3d1307007910%3b%24ql%3dUnknown%3b%24qpc%3d10000%3b%24qt%3d209_4878_185200t%3b%24dma%3d0%3b%24b%3d16740%3b%24o%3d99999%3b%24sw%3d1920%3b%24sh%3d1080&pgDomain=http%3a%2f%2fwww.autorecrute.com%2f&go=http%3a%2f%2fsalon.autorecrute.com%2fdownloads%2fsalon%2fexposant%2f5ced46cb68b77.pdf'><img src='images/pub.jpg' /></a>
        <?php include('scriptes/metier.php'); ?>
    </div>
    </div>
    <p id='dern'>Autorecrute.com, le site spécialiste du recrutement automobile. CDI, CDD, Intérim et stage du secteur automobile.</p>
    <a href=><img src='images/ss.png' style='cursor:pointer;margin-right:30;margin-top:-117px; width:50; float:right;' /></a></br>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>
<script>
    function myfunction() {
        var pass = prompt('entrez votre email', 'user@gmail.com');
        if (pass != null) {
            alert('veuillez visiter votre boite email! ');
        } else {
            alert('Veuillez entrer votre email pour récupérer votre mot de passe');
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
    function myFunction() {
  var x = document.getElementById("passwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

