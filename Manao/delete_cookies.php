<?php
session_start();
if (isset($_POST['exit'])) {
    if($_COOKIE['login_cookies']){
         $_COOKIE=[];
         session_destroy();
         echo header("Refresh:0; url=index.php");
         exit();
    }   
}
?>
