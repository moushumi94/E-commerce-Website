<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>checkout process</title>
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
<link rel="stylesheet"  href="style.css">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
 include "header.php";
 include "dbconn.php";
?>

<div class="row">
  <div class="col-md-offset-5 col-md-7">
    <?php 
     if(isset($_SESSION["fname"])){
     echo '  
      <script> window.location="header.php";</script>';
    }else{
    	
      echo'
        <script> window.location="login.php";</script>';
     }
    
    ?>
    </div>
</div>
<div class="footer">
         <div class="container text-center">
             <div class="row">
                 <div class="col-md-3">
                     <h1>Useful Links</h1>
                     <p>Privacy Policy</p>
                     <p>Terms of Use</p>
                     <p>Return Policy</p>
                     <p>Discount Coupons</p>
                 </div>
                 <div class="col-md-3">
                     <h1>Company</h1>
                     <p>About Us</p>
                     <p>Contact Us</p>
                     <p>Career</p>
                     <p>Affiliate</p>
                 </div>
                  <div class="col-md-3">
                     <h1>Follow Us On</h1>
                     <p>Facebook</p>
                     <p>YouTube</p>
                     <p>Linkedin</p>
                     <p>Twitter</p>
                 </div>
                  <div class="col-md-3" ">
                     <h1>Download App</h1>
                     <img src="New folder/AppStoreLogo.png" width="40%" height="30%">
                 </div>
         </div>
         <hr>
         <p class="copyright">copyright @2020</p>
     </div>
     </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>