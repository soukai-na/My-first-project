<?php
$servername="localhost";
$username='root';
$password='P@ssw0rd';
$conn=mysqli_connect($servername,$username,$password,'autorecrute');
if(!$conn){
  echo 'Error:'.mysqli_connect_error();
}
?>
<?php
$req="SELECT * FROM service WHERE id=2";
$result=mysqli_query($conn,$req);
$sql=mysqli_fetch_array($result);
?>
<div id='tous'>
<p><font id='service'><font size='5px' color='#555555' face='arial'><div style='margin:18;'><?php echo $sql['titre']; ?></div></font></p>

<div id=Nactu style=margin:18;>
<?php echo $sql['texte1']; ?>

<div id='tabactu' style='margin-left:20;'>
<?php echo $sql['texte2']; ?>



</div>
</div>
</div>