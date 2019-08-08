<?php
$servername="localhost";
$username='root';
$password='P@ssw0rd';
$conn=mysqli_connect($servername,$username,$password,'autorecrute');
if(!$conn){
  echo 'Error:'.mysqli_connect_error();
}
$req="SELECT * FROM focus";
$result=mysqli_query($conn,$req);
$sql=mysqli_fetch_array($result);
?>
<p><font color='#555555' size='5px'face='arial'><?php echo $sql['titre1']; ?></font></p>
<div id='tabimg'>
<div id='img'>
<?php echo $sql['texte1']; ?>
</div>
</div>
</br>
<div id='metier'>
<p><font color='#555555' size='5px' face='arial'><?php echo $sql['titre2']; ?></font></p>
<div id='tabtitre'>
<div id='titre'> 
<?php echo $sql['texte2']; ?>
 </div>
 </div>
</div>
</div>