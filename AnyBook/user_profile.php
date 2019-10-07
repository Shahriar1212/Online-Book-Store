
<?php include("includes/header_user_account.php");
session_start();
?>

<h1>hello <?php echo $_SESSION['username'] ?></h1> <br/>
<h1> <?php echo $_SESSION['message'] ?></h1>

<a href="logout.php">logout</a>



<?php include("includes/footer.php") ?>