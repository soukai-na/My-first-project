<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<?php
$server = 'localhost';
$user = 'root';
$passwd = 'P@ssw0rd';

$conn = mysqli_connect($server, $user, $passwd, 'autorecrute');
if (!$conn) {
  echo "error:" . mysqli_connect_error();
}

?>
<?php
$req = "SELECT * FROM footer";
$result = mysqli_query($conn, $req);
$sql = mysqli_fetch_array($result);
?>
<footer>
  <div id='pied1' style='display:flex; justify-content:center; background:#2a2f39; padding:10; padding-top:15px;'>
    <div style='display:block; margin-right:36; '>
      <div>
        <div style='color:brown;'><b><?php echo $sql['titre']; ?></b></div></br>
        <p style='display: table-caption; margin-right:-60px; color:#b1b1b1; width:237; margin-top:0;'>
          <?php echo $sql['lien']; ?>
          <p></br>
      </div>
      <div>
        <?php
        $req = "SELECT * FROM footer WHERE id=2";
        $result = mysqli_query($conn, $req);
        $sql = mysqli_fetch_array($result);
        ?>
        <div style='color:brown;'><b><?php echo $sql['titre']; ?></b></div></br>
        <p style='display: table-caption; margin-right:-60px; color:#b1b1b1; width:170; margin-top:0;'>
          <?php echo $sql['lien']; ?>
      </div>
    </div>
    <div style='border-left:1px solid grey; margin-right:17; padding-left:20px;  margin-block-end: 100px;'>
      <?php
      $req = "SELECT * FROM footer WHERE id=3";
      $result = mysqli_query($conn, $req);
      $sql = mysqli_fetch_array($result);
      ?>
      <div style='color:brown; '><b><?php echo $sql['titre']; ?></b></div></br>
      <p style='display: table-caption; margin-right:-60px; color:#b1b1b1; width:256; margin-top:0;'>
        <?php echo $sql['lien']; ?>
      </p></br>
    </div><?php
          $req = "SELECT * FROM footer WHERE id=4";
          $result = mysqli_query($conn, $req);
          $sql = mysqli_fetch_array($result);
          ?>
    <div style='border-left:1px solid grey; margin-right:12; padding-left:20px; padding-top:40px;margin-block-end: 215px;'>
      <p style='display: table-caption; margin-right:-60px; color:#b1b1b1; width:222; margin-top:0;'>
        <?php echo $sql['lien']; ?>
      </p></br>
    </div>
    <div style='border-left:1px solid grey; margin-right:0; padding-left:20px; padding-top:40px;margin-block-start: 10px;
  margin-block-end: 215px; height:113;'>
      <?php
      $req = "SELECT * FROM footer WHERE id=5";
      $result = mysqli_query($conn, $req);
      $sql = mysqli_fetch_array($result);
      ?>
      <p style='display: table-caption;margin-right:-60px; color:#b1b1b1; width:187; margin-top:0;'>
        <?php echo $sql['lien']; ?>
      </p></br>
    </div>
  </div>
  <div id='pied2' style='background:brown; color:white; font-family:arial; font-size:13px; height:30px; text-align:center; padding-top:9px;'>Copyright © 2015 AUTORECRUTE - Tous droits réservés</div>
</footer>