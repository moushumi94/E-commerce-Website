<?php
   // Start the Session
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Detail</title>
<link rel="stylesheet"  href="style.css">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css" >
	body{
		margin:0;
		padding: 0;
		box-sizing: border-box;
		background: #696969;
	}
	

        
	.Channel{
		
		background: #ddd;
		
		

	}
	
	.recentpost{
		
		background:#ddd;
		
	
		
	}
	.responsive-image{
		height:120px;
		margin-top: 0%;
		margin-left: 39%;
		border-radius:50%;
		border: 3px solid #00ffff;
	}
	h3{
		margin-left: 37%;
		font-size:30px; 
	}
	.btn-info{
		margin-left: 39%;
	}
	.Channel ul{
		list-style-type: none;
		margin-left: 7%;
		font-size: 17px;
	}
	ul input[type="text"]{
		border:none;
		border-bottom: 2px solid #00ffff;
		outline: none;
        margin-left: 15%;
	}
	.Channel input[type="text"]{
		width: 60%;
	}
	.Channel input{
		margin-left:22%;
	}
	
	hr{
		border:2px solid #ddd;
	}
	h5{
      margin-left: 5%;
      font-size: 19px;
	}
	.recentpost ul {
      list-style-type: none;
        margin-top: 10%;
		margin-left: 2%;
		margin-right: 5%;
		font-size: 17px;
		color: #00ffff;
		padding-left: 30px;
	}
	.recentpost ul li{
		color: #000;
	}
	.recentpost li a{
		text-decoration: none;
		color: #000;
	}
	.footer{
	margin-top: 0%;
  	background: #000;
  	color:#fff;
  }

  .footer h1{
  	font-size: 18px;
  }
  .footer p{
  	font-size: 14px;
  }
  .footer.row{
   padding-right: 20px;
  }
</style>


</head>
<body>

 <?php
   include "header.php";
  ?> 
    <?php
   $id=$_SESSION["id"];
   include "dbconn.php";
   $sql="select * from users where id =".$id;
   $result=$conn->query($sql);
   if($result->num_rows>0){
	   
       if($row=$result->fetch_assoc());
   }
   else{
    echo '<script>alert("no result found");</script>';
}
?>
<div class="container">
	<div class="row">
	<div class="col-md-9">
<div class="Channel">
	     <br><br>
	     <h3>Profile Details</h3>
		<img class="responsive-image" src="images/<?php echo $row["image"]; ?>" alt="first pic"><br><br>
		  <a href="profile2.php"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">
		  Edit your profile</button></a>
		  <hr>
		  <br><br> 
         <ul>
         <li>Name &nbsp;  :<?php echo $row["fname"]; ?></li><br><br>
         	
         <li>Email &nbsp; :&nbsp;<?php echo $row["email"]; ?></li><br><br>
         	
         <li>Mobile&nbsp; :<?php echo $row["mob"]; ?></li><br><br>
         	
         <li>Alt No.&nbsp;:&nbsp;<?php echo $row["altnum"]; ?></li><br><br>
         	
         <li>Gender:&nbsp;:&nbsp;<?php echo $row["gender"]; ?>
         	</li><br><br>
         	
         	<li>Location: &nbsp;:&nbsp;
         		<?php echo $row["addr"]; ?>
         	</li><br><br>
         </ul>
	
	<br>
	
</div>
</div>

<div class="col-md-3">
<div class="recentpost">
	<br><br><br>
		<ul>
			<li>OVERVIEW</li><br><hr>
			<label>ORDER</label><br><br>
			<li><a href="order.php"> Order</a></li><br><hr>
			<label>CREDITS</label><br><br>
			<li><a href="coupon.php">Coupon</a></li><br>
			<li><a href="credit.php"> MultiBazer Credit</a></li><br>
			<li><a href="save.php"> MultiBazer Cash</a></li><br><hr>
			<label>ACCOUNT</label><br><br>
			<li style="color: #00ffff">Profile</li><br>
			<li><a href="CARDs.php"> Saved Cards</a></li><br>
			
			<li><a href="Address.php"> Address</a></li><br><br><br><br>

		</ul>
	

</div>	
</div>
</div>
</div>
<br>
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
                  <div class="col-md-3">
                     <h1>Download App</h1>
                     <img src="New folder/AppStoreLogo.png" width="40%" height="30%">
                 </div>
         </div>
         <hr>
         <p class="copyright">Made by Moushumi</p>
     </div>
     </div>
     
        

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="jquery-3.1.1.min.js"></script>

     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js"></script>
</body>
</html>