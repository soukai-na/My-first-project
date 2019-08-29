<?php
$servername = "localhost";
$username = 'root';
$password = 'P@ssw0rd';
$conn = mysqli_connect($servername, $username, $password, 'autorecrute');
if (!$conn) {
  echo 'Error:' . mysqli_connect_error();
}
$req = "SELECT * FROM recherche";
$result = mysqli_query($conn, $req);
$sql = mysqli_fetch_array($result);




?>
<form method=POST action=search.php>
  <div id='gr'>
    <p style='margin-right:290;'><?php echo $sql['texte']; ?></p>
    <div style='margin-right:20; margin-left:-250;'><?php echo $sql['input']; ?></div>
    <div style='margin-right:20;'><?php echo $sql['selectt']; ?> </div>
    <?php echo $sql['button']; ?>
    
   
  </div>
</form>
