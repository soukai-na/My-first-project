<html>
<head>
    <?php
        $servername="localhost";
        $username='root';
        $password='P@ssw0rd';
        $conn=mysqli_connect($servername,$username,$password,'autorecrute');
           if(!$conn){
                 echo 'Error:'.mysqli_connect_error();
          }
    ?>
    <style type='text/css'>
         #gr {height:53px !important;}
         #gr p{margin-top:10px !important;}
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="icon.png" />
    <title>Cabinet de conseil en recrutement automobile-Nos experts sont à votre service-Autorecrute.com</title>
    <link rel='stylesheet' href='style-css/style.css' />
</head>
<body>
    <header>
       <?php 
         $color4='#d7dae1';
         include('scriptes/menu.php'); 
      ?>
      <?php include('scriptes/recherche.php'); 
      ?>
    </header>
  <div id='face'>
    <div id='face1'>
        <div id='sous'> 
          <div style='font-weight:100; font-size:13; margin:auto; margin-top:50px;'>
             <a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a> >Conseil en recrutement
          </div>
        </div>
        <?php
        $req="SELECT * FROM cabinet ";
        $result=mysqli_query($conn,$req);
        $sql=mysqli_fetch_array($result);
        ?>
        <font  color='#555555' size='5px' face='arial'><?php echo $sql['titre1']; ?></font></br>
        <div class='prem'>
            <?php echo $sql['image']; ?></br>
            <font  color='#555555' size='5px' face='arial'><?php echo $sql['titre2']; ?></font></br>
            <hr>
            <div class='contact'>
              <?php echo $sql['texte']; ?>
            </div>
            <hr>
        </div>
      <?php
              $req="SELECT * FROM recruter WHERE id=2 ";
              $result=mysqli_query($conn,$req);
              $sql=mysqli_fetch_array($result);
    
      ?>
      <font  color='#555555' size='5px' face='arial'><p style='margin-top:120;'><?php echo $sql['titre']; ?></p></font>
        <div  class='iimages'>
          <?php echo $sql['texte1']; ?>
        </div>
    </div>
    <div id='face2' style='margin-left:12;'>
        <div class='tabb' style='margin-top:60; margin-bottom:25;'>
          <font color='white' size='5' face='sans-serif'><b>Se faire recontacter</b></font></br>
          <input type='text' placeholder='Société*' style='margin-bottom:8;'/></br>
          <input type='text' placeholder='Nom*' style='margin-bottom:8;'/></br>
          <input type='text' placeholder='Prénom*' style='margin-bottom:8;'/></br>
          <input type='text' placeholder='E-mail*' style='margin-bottom:8;'/></br>
          <input type='text' placeholder='Téléphone*' style='margin-bottom:8;'/></br>
          <input type='checkbox' style='margin-bottom:15px;' ><font color='white'>Recevoir les offres partenaires de l'argus</font></br>
          <input type='submit' value='Nous contacter' /></br>
        </div>
        <?php
        $req="SELECT * FROM temoignages";
        $result=mysqli_query($conn,$req);
        $sql=mysqli_fetch_array($result);
        ?>
         <font  color='#555555' size='5px' face='arial'><?php echo$sql['titre1'];?></font></br>
         <div class='tabbclient' style='margin-top:10;'>
          <?php echo$sql['texte1'];?>
        </div>
        </br>
        <font  color='#555555' size='5px' face='arial'><?php echo$sql['titre2'];?></font></br>
        <div class='tabbcandidat' style='margin-top:10;'>
          <?php echo$sql['texte2'];?>
        </div>
    </div>
  </div>
  <div style='margin-top:50;' >
      <?php include('scriptes/footer.php');?>
  </div>
</body>
</html>