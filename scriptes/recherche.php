<?php
$servername = "localhost";
$username = 'root';
$password = 'P@ssw0rd';
$conn = mysqli_connect($servername, $username, $password, 'autorecrute');
if (!$conn) {
  echo 'Error:' . mysqli_connect_error();
}
$rech = "SELECT * FROM recherche";
$resultrech = mysqli_query($conn, $rech);
$sqlfetch = mysqli_fetch_array($resultrech);




?>
<form method=POST action=search.php>
  <div id='gr'>
    <p style='margin-right:290;'><?php echo $sqlfetch['texte']; ?></p>
    <div style='margin-right:20; margin-left:-250;'><?php echo $sqlfetch['input']; ?></div>
    <div style='margin-right:20;'><?php echo $sqlfetch['selectt']; ?> </div>
    <?php echo $sqlfetch['button']; ?>
    
   
  </div>
</form>
