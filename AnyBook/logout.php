<?php 
session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['message']);

header("location: login.php");


?>