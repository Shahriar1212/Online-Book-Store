<?php 
session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['message']);
unset($_SESSION['email']);
unset($_SESSION['user_id']);
unset($_SESSION['phone']);
$_SESSION['status'] = 0; 
unset($_SESSION['status']);

header("location: login.php");


?>