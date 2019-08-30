<?php
 
    session_start();
 
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) { 
 
        $_SESSION = array();
        session_destroy();
 
        setcookie('login', '');
        setcookie('pass_hache', '');
         
        header('Location: autorecrute.php');
 
    }else{ 
        header('Location: autorecrute.php');
 
    }
 
         
 
?>
