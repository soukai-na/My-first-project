<?php 
  $servername="localhost";
  $username='root';
  $password='P@ssw0rd';
  $conn=mysqli_connect($servername,$username,$password,'autorecrute');
     if(!$conn){
               echo 'Error:'.mysqli_connect_error();
               }
?>

<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
  <title>Les entreprises qui recrutent dans le secteur automobile-Autorecrute.com</title>
  <link rel='stylesheet' href='style-css/style.css' />
</head>
<body>
  <header>
   <?php 
     $color3='#d7dae1';
     include('scriptes/menu.php'); 
   ?>
   <?php 
     include('scriptes/recherche.php'); 
   ?>
  </header>
<div id='face'>
   <div id='face1'>
    <div id='sous'>
      <div style='font-weight:100; font-size:13; margin:auto; margin-top:50px;'>
       <a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a>
        > Entreprises qui recrutent
      </div>
    </div>
  <?php
       $req="SELECT * FROM recruter";
       $result=mysqli_query($conn,$req);
       $sql=mysqli_fetch_array($result);
  ?>
  <font  color='#555555' size='5px' face='arial'><?php echo $sql['titre']; ?></font></br>
  <div class=pub>
    <?php echo $sql['texte1']; ?>
    <?php echo $sql['texte2']; ?>
  </div>

 </br>
 <?php
        $req="SELECT * FROM logo";
        $result=mysqli_query($conn,$req);
        $sql=mysqli_fetch_array($result);
 ?>
   <div class='images'>
       <?php echo $sql['image']; ?>
   </div>
 </div>


  <div id="face2" style='margin-left:15;'>
    </br></br>
    <?php 
        if($_POST['btn']){
          $margin='1px';
          $link='http://localhost/autorecrute/ils-recrutent.php';
           include('scriptes/creer.php');
        }else if($_POST['connecter']){
          $href='http://localhost/autorecrute/ils-recrutent.php';
          include('scriptes/cnx.php');
        }else{
          include('scriptes/compte.php');
        }
        
        ?>
    </br>
    <a href='http://www8.smartadserver.com/click?imgid=24101916&insid=8858851&pgid=721181&ckid=4095424161592067675&uii=232037792706787758&acd=1562681536987&pubid=24&tmstp=9388355883&tgt=%24dt%3d1t%3b%24dt%3d1t%3b%24hc&systgt=%24qc%3d1307007910%3b%24ql%3dUnknown%3b%24qpc%3d10000%3b%24qt%3d209_4878_185200t%3b%24dma%3d0%3b%24b%3d16740%3b%24o%3d99999%3b%24sw%3d1920%3b%24sh%3d1080&pgDomain=http%3a%2f%2fwww.autorecrute.com%2f&go=http%3a%2f%2fsalon.autorecrute.com%2fdownloads%2fsalon%2fexposant%2f5ced46cb68b77.pdf'><img src='images/pub.jpg'/></a>
    </br></br>
    <?php include('scriptes/metier.php'); ?>
  </div>
  

</div>
  </br></br>
  <a href='http://localhost/autorecrute/ils-recrutent.php'><img src='images/ss.png' style='cursor:pointer;margin-right:30;margin-top:-117px; width:50; float:right;'/></a></br>
  <?php include('scriptes/footer.php');?>
</body>
</html>