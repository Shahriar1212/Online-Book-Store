
<?php include("includes/header_user_account.php");
session_start();
?>


<?php
    if(isset($_SESSION['username'])){
        echo "hello". $_SESSION['username'];
        
    } else {
        //header("location: index.php");
    }

?>

<link rel="stylesheet" href="css/user_profile_style.css">

<div>
 <div class="wrapper my_wrapper">
    <div class="left">
        <img src="img/test.png" width="180" height="200">
        <h4>Shahriar Hasan Chowdhury</h4>
        
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Phone</h4>
                    <p>01521429409</p>
                 </div>
                 <div class="data">
                    <h4>Email</h4>
                    <p>shahriarmoin.aust@gmail.com</p>
              </div>
            </div>
        </div>
      
      
      
        
    </div>
 </div>
</div>



<?php include("includes/footer.php") ?>