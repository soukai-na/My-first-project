<?php
session_start();
session_destroy();
header('location:recruteurs.php');
exit;

/*session_start();

if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {

$_SESSION = array();
session_destroy();

setcookie('login', '');
setcookie('pass_hache', '');

header('Location: recruteurs.php');

}else{
header('Location: recruteurs.php');

}*/
?>