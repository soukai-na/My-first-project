<?php
   $server='localhost';
   $user='root';
   $passwd='P@ssw0rd';
   $conn=mysqli_connect($server, $user, $passwd,'autorecrute');
    if(!$conn){
          die("error:".mysqli_connect_error());
    }
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="icon.png" />
    <title>Salon de l'emploi automobile:le seul forum de recrutement 100% automobile-Automobile.com</title>
    <link rel='stylesheet' href='style-css/style.css' />
</head>
<body>
   <header>
      <?php 
        $color5='#d7dae1';
        include('scriptes/menu.php');
       ?>
      <?php include('scriptes/recherche.php'); ?>
   </header>
   <video autoplay muted loop id='vd'>
       <source src='images/video.mp4' width="500">
   </video>
   <div class='cont'>
       <?php
            $req="SELECT * FROM acceuil";
            $result=mysqli_query($conn,$req);
            $sql=mysqli_fetch_array($result);
       ?>
       <?php echo $sql['texte']; ?>
   </div>
   <div class='page'>
      <div id='b'>
          <div id='b1'>
                <button><b>
                        <?php
                               $requete='SELECT * FROM salon ';
                               $reponse=mysqli_query($conn,$requete);
                               $data=mysqli_fetch_array($reponse);
                               echo "<font color='red' style='margin-left:-704px; font-size:17;'><a href='http://localhost/autorecrute/project6.php' style='text-decoration:none; color:red; background:lightgray;' >".$data['titre']."</a></font><font color='gray' face='sans-serif' style='margin-left:10;'><b><a href='http://localhost/autorecrute/edition.php' style='text-decoration:none; color:gray; font-size:17;'>12 ème édition</a></b></font>
                                     </br></br><div  style='text-align:left; font-weight:100;color:black;width:890px;' ><font>". $data['contenu']."</font></div>"; 
                                mysqli_free_result($reponse);
                                mysqli_close($conn);
                        ?>
                </b></button>
            </br>
          </div>
      </div>
      <?php
              $server='localhost';
              $user='root';
              $passwd='P@ssw0rd';
              $conn=mysqli_connect($server, $user, $passwd,'autorecrute');
               if(!$conn){
                     die("error:".mysqli_connect_error());
               }
           $req="SELECT * FROM images";
           $result=mysqli_query($conn,$req);
           $sql=mysqli_fetch_array($result);
      ?>
      <div id='imgss' style='padding-left:70px;'>
            <font color='red'><b><?php echo $sql['titre1']; ?></b></font>
            <hr>
            <div style='overflow:auto; position:relative; margin-left: 170px; margin-right: 170px; background:white; border: 1px solid white;'>
               <div class='imgss'>
               <marquee direction="scroll" behavior="alternate" scrollamount="10">
               <?php echo $sql['image1']; ?>
               </marquee>
               </div>
            </div></br>
            <font color='gray'size='5'><?php echo $sql['titre2']; ?></font></br>
            <div class='tabimagess'> 
              <?php echo $sql['image2']; ?>
            </div>
      </div>
      <div class='salon'>
            <?php 
                $req="SELECT * FROM edition ";
                $result=mysqli_query($conn,$req);
                $sql=mysqli_fetch_array($result);
            ?>
            <h3><?php echo $sql['titre1']; ?></h3></font></br>
            <h5 style='margin-left:-67;'><?php echo $sql['titre2']; ?></h5>
            <div style='display:flex; width:990px; background:whitesmoke; padding:30; margin-left:363px; border:1px solid whitesmoke; margin-left:-69px;'>
                <div style='width:1375px; height:300px; margin-top:-86px; '><img src='images/5ced43c283734.png'/></div>
                    <div style='text-align:left; width:1375px;margin-top:10;'>
                        <?php echo $sql['texte']; ?>
                        <font color='#428bca' style='margin-left:125;'><a href='http://localhost/autorecrute/edition.php' style='color:#428bca; text-decoration:none;'><b><?php echo $sql['lien']; ?></b></a></font>
                    </div>
                </div>
            </div></br>
            <div class='pubs'>
                <?php
                $req="SELECT * FROM images WHERE id=2";
                $result=mysqli_query($conn,$req);
                $sql=mysqli_fetch_array($result);
                ?>
                <font color='red'><b><?php echo $sql['titre1']; ?></b></font><hr>
                <div style='background:white; display:flex; border-right: 100px solid #e1e1e1; border-left: 100px solid #e1e1e1;'>
                    <div style='display:flex; justify-content:center; margin:auto; width:815; overflow:auto; position:relative;'>
                        <marquee direction="scroll" behavior="alternate" scrollamount="10" scrolldelay="170">       
                        <?php echo $sql['image1']; ?>
                        </marquee>
                    </div>
                </div>
            </div></br>
            <div class='presse'>
              <?php include('scriptes/accr.php') ?>
            <div>
              <a href='http://www8.smartadserver.com/click?imgid=24101916&insid=8858851&pgid=721181&ckid=4095424161592067675&uii=232037792706787758&acd=1562681536987&pubid=24&tmstp=9388355883&tgt=%24dt%3d1t%3b%24dt%3d1t%3b%24hc&systgt=%24qc%3d1307007910%3b%24ql%3dUnknown%3b%24qpc%3d10000%3b%24qt%3d209_4878_185200t%3b%24dma%3d0%3b%24b%3d16740%3b%24o%3d99999%3b%24sw%3d1920%3b%24sh%3d1080&pgDomain=http%3a%2f%2fwww.autorecrute.com%2f&go=http%3a%2f%2fsalon.autorecrute.com%2fdownloads%2fsalon%2fexposant%2f5ced46cb68b77.pdf'><img src='images/pub.jpg'/></a>
            </div>
       </div>
   </div></br>
   <?php include('scriptes/footer.php');?>

</body>
</html>