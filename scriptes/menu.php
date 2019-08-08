<?php
$server = 'localhost';
$user = 'root';
$passwd = 'P@ssw0rd';

$conn = mysqli_connect($server, $user, $passwd, 'autorecrute');
if (!$conn) {
  echo "error:" . mysqli_connect_error();
}
$req = "SELECT * FROM menu";
$result = mysqli_query($conn, $req);
$sql = mysqli_fetch_array($result);
?>
<div id='acceuil'>
  <div id='auto'><a href='http://localhost/autorecrute/autorecrute.php' style='background:white;'><?php echo $sql['logo']; ?></a></div>
  <div id='title'><a href='http://localhost/autorecrute/emploi-et-stage.php' style='background-color:<?php echo $color1; ?>'><?php echo $sql['titre1']; ?></a>
    <a href='http://localhost/autorecrute/metiers.php' style="background-color:<?php echo $color2; ?>;"><?php echo $sql['titre2']; ?></a>
    <a href='http://localhost/autorecrute/ils-recrutent.php' style='background-color:<?php echo $color3; ?>;'><?php echo $sql['titre3']; ?></a>
    <a href='http://localhost/autorecrute/cabinet-conseil.php' style='background-color:<?php echo $color4; ?>;'><?php echo $sql['titre4']; ?></a>
    <a href='http://localhost/autorecrute/salons.php' style='background-color:<?php echo $color5; ?>;'><?php echo $sql['titre5']; ?></a>
    <a href='http://localhost/autorecrute/actualite.php' style='background-color:<?php echo $color6; ?>;'><?php echo $sql['titre6']; ?></a>
    <a href='http://localhost/autorecrute/recruteurs.php' style='margin-left:50; background-color:<?php echo $color7; ?>;'>
      <font color='red'><?php echo $sql['titre7']; ?></font>
    </a></div>
</div>