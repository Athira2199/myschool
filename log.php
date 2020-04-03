<?php
session_start();
unset($_SESSION['login_user']);
unset($_SESSION['password']);
$_SESSION=array();
session_destroy(); 
header("location:sessiontimedout.php");
?>
