<?php include"dbconn.php" ?>

 <!DOCTYPE html>
<html>
<head>
  <title>Ecommerce Website</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">
<link rel="stylesheet"  href="style.css">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="package/css/swiper.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>
<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>
<body>
 <div class="top-nav-bar">
        <div class="search-box">
            <span class="glyphicon glyphicon-align-justify" id="menu-btn" onclick="openmenu()"></span>
            <span class="glyphicon glyphicon-remove" id="close-btn" onclick="closemenu()"></span>
            
            <a class="logo" href="#" style="color: #00ffff; text-decoration: none">MultiBazer</a>
            <input type="text" class="form-control">
            <div class="input-group-text"><span class="glyphicon glyphicon-search"></span></div>
        </div>
        <div class="menu-bar">
            <ul>
             <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    
                     <?php
                            if(isset($_SESSION["fname"])){
                    
                               


                                echo '
                                 <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="profile1.php"><span class="glyphicon glyphicon-user"></span> profile</a>
                      <ul class="dropdown-menu">
                         <br>
                      <a href="profile1.php" class="dropdown" style="color:#000 ; font-size:18px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Hi '.$_SESSION["fname"].'</a>

                               <br>
                    
                         <p style="padding-left:9px ;">Access your account & manage orders</p>
                           
                           <a href="U_logout.php">
                            <button type="button" class="btn btn-success btn-sm" id="myBtn" style="margin-left: 70px;">logout</button></a>
                                    <hr>
                                     <li><a href="vender-admin/profile.php"><b>VENDER ADMIN</b></a></li><hr>
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Coupons</a></li>
                            <li><a href="#">MultiBazer Credit</a></li>
                            <li><a href="#">Saved Cards</a></li>
                            <li><a href="#">Saved Addresses</a></li>
                        </ul></li>


                                ';

                            }else{
                            
                            


                      echo '
                <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> profile</a>
                      <ul class="dropdown-menu">
                         <h5>Welcome</h5>
                         <p style="padding-left:9px ;">Access your account & manage orders</p>
                          
                          <a href=""  data-toggle="modal" data-target="#signupModal">
                            <button type="button" class="btn btn-success btn-sm" id="myBtn"  style="margin-left: 13px;">Sign Up</button></a>
                       
                       <a href="" data-toggle="modal" data-target="#loginModal"> 
                        <button type="button" class="btn btn-success btn-sm " id="myBtn"  style="float: right; margin-top: -29px; margin-right: 13px">Log In</button></a>
                            <hr>
                            <li><a href="vender-admin/profile.php"><b>VENDER ADMIN</b></a></li>
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Coupons</a></li>
                            <li><a href="#">MultiBazer Credit</a></li>
                            <li><a href="#">Saved Cards</a></li>
                            <li><a href="#">Saved Addresses</a></li>
                        </ul></li> '; } ?>
                
          <li><a href="mycart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span id="badge" style="background: red;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;">
    <?php if(isset($_SESSION["cart_qty"])){ 
      echo $_SESSION["cart_qty"];
    } else{ 
      echo "0";
    }?></span></a></li>
                <li><a href="mywishlist.php"><span class="glyphicon glyphicon-heart"></span> Wishlist <span id="badge1" style="background: red;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;"><?php if(isset($_SESSION["wish_qty"])){ echo $_SESSION["wish_qty"];} else{ echo "0";}?></a></li>
            </ul>
        </div>
    </div>
      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>