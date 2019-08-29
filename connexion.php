<html>

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
    $req = "SELECT * FROM header";
    $result = mysqli_query($conn, $req);
    $sql = mysqli_fetch_array($result);
    ?>
    <div id='back'></br>
        <div id='n1' style='margin-left:184px; margin-right: 178px; '><?php echo $sql['texte1']; ?></div>
        </br>

        <input type='hidden' name='mail' value='<?php echo $POST['mail']; ?>' />
        <input type='hidden' name='passwd' value='<?php echo $POST['passwd']; ?>' />
        <?php
        $href='autorecrute.php';
        include('scriptes/cnx.php'); ?>

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
    <a href='http://localhost/autorecrute/autorecrute.php'><img src='images/ss.png' style='cursor:pointer;margin-right:30;margin-top:-117px; width:50; float:right;' /></a></br>
    <?php include('scriptes/footer.php'); ?>
</body>

</html>