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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
  <title>Les offres d'emploi dans l'automobile-Autorecrute.com</title>
  <link rel='stylesheet' href='style-css/style.css' />
</head>
<body>  
  <header>
      <?php $color1='#d7dae1'; include('scriptes/menu.php'); ?>
      <?php include('scriptes/recherche.php'); ?>
  </header>
  <?php
      $req="SELECT * FROM focus WHERE id=2";
      $result=mysqli_query($conn,$req);
      $sql=mysqli_fetch_array($result);
  ?>
  <div id='face' style='margin-top:50;'>
    <div id='face1'>
        <div id=sous>
          <div style='font-weight:100; font-size:13; margin:auto;'>
             <a href=http://localhost/autorecrute/autorecrute.php>Acceuil</a> >  Les métiers de l'automobile
          </div>
        </div>
      <font  color='#555555' size=5px face=arial><?php echo$sql['titre1'];?></font>
      <?php echo$sql['texte1'];?>
      <div style=display:flex;>
           <?php echo$sql['titre2'];?><div style=' margin-left:130px; margin:8px; font-size:14px;' ><font color=red  face=arial >694 offres trouvées</font></div>
      </div>
      
      <div id=total>
           <?php echo$sql['texte2'];?>
      </div>
      <?php
        $req="SELECT * FROM offre";
        $result=mysqli_query($conn,$req);
        $sql=mysqli_fetch_array($result);
      ?>
      <font size=3><div style=margin:12; ><?php echo $sql['titre']; ?></div></font>
       <?php echo $sql['tableaux']; ?>
    </div>
    <div id="face2" style="margin-left:12;">
        <?php 
        if($_POST['btn']){
          $margin='1px';
          $link='http://localhost/autorecrute/emploi-et-stage.php';
           include('scriptes/creer.php');
        }else if($_POST['connecter']){
          $href='http://localhost/autorecrute/emploi-et-stage.php';
          include('scriptes/cnx.php');
        }else{
          include('scriptes/compte.php');
        }
        
        ?>
        </br>
        <?php
            $req="SELECT * FROM image";
            $result=mysqli_query($conn,$req);
            $sql=mysqli_fetch_array($result);
        ?>
        <?php echo $sql['image']; ?>
        </br>
        <div style='margin-top:10;' >
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
            $req="SELECT * FROM liste ";
            $result=mysqli_query($conn,$req);
            $sql=mysqli_fetch_array($result);
              echo $sql['nombre'];
        ?>
      </tr>
    </table>
  </div>
  </br>
  <a href='http://localhost/autorecrute/emploi-et-stage.php'><img src='images/ss.png' style='cursor:pointer;margin-right:30;margin-top:-117px; width:50; float:right;'/></a></br>
  <?php include('scriptes/footer.php');?>
</body>
</html>

