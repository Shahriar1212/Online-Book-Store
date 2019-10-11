
<?php 
session_start();
include("includes/header.php");
include("includes/db.php");


if(isset($_POST['submit'])) {

	if(isset($_SESSION['username'])){
		$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
		$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
		$phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
		$message = htmlspecialchars(stripslashes(trim($_POST['msg'])));

		date_default_timezone_set('Asia/Dhaka');
		$current_date = date('Y-m-d H:i:s');

		$sql = 'INSERT INTO feedback(name, email, phone, message, date) VALUES("'.$name.'" , "'.$email.'" , "'.$phone.'" , "'.$message.'" , "'.$current_date.'")' or die("failed");
		//$sql = 'INSERT INTO feedback(name, email, phone, message, date) VALUES("moin", "sha@gmail.com", "0122422424", "asdflkajsdfkjlasd", "0000-00-00 00:00:00")' or die("failed");
		$result = mysqli_query($db,$sql);
		$lastInsertID = mysqli_insert_id($db);
	} else {
		echo '<script language="javascript">';
		echo 'alert("you have to login first")';
		echo '</script>';
	}

	
}



?>



<link rel="stylesheet" href="css/contuct_us_style.css">

<div class="my_contuct">

	<div class="main">
		<div class="info">Hello! We are always ready to serve you :)</div>
		<form action="contuct_us.php" method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email ID" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone Number" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="msg-box" placeholder="Enter Your Message Here" required></textarea><br>
			<input type="submit" name="submit" value="Submit" class="sub-btn">
		</form>
	</div>

</div>


<?php include("includes/footer.php") ?>
