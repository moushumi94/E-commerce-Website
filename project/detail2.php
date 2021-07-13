<?php
   // Start the Session
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 103 Template</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>
<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  body{
    margin:0;
    padding: 0;
    background: #fff;
    font-family: sans-serif;
  }

.top-nav-bar{
  height: 57px;
  top: 0;
  position: sticky;
  background:#000;
  margin-bottom: 20px;
  border-bottom: 3px solid #00ffff;
  z-index: 2;
}
.logo {
  height:40px;
  margin:9px 10px;
  font-size: 20px;
  padding-left: 10px;}

.form-control{
  margin-top: 9px;
  margin-left: 20px;
  border:1px solid #00ffff !important;
  border-top-left-radius: 20px !important;
  border-bottom-left-radius: 20px !important;
  border-top-right-radius: 0px !important;
  border-bottom-right-radius: 0px !important;
     box-shadow:none !important; 
}
.input-group-text{
  width:42px;
  background: #00ffff !important;
  border:1px solid #00ffff !important;
  margin: 8.5px 10px 15px 0 !important;
  border-top-left-radius: 0px !important;
  border-bottom-left-radius: 0px !important;
  border-top-right-radius: 30px !important;
  border-bottom-right-radius: 30px !important;
    cursor: pointer;
    align-items: center;
}
.search-box{
  display: inline-flex;
  width:50%;
}
.glyphicon-search{
  color:#fff;
  padding: 6px 0px 0px 5px;
}
.menu-bar{
  width:40%;
  height:57px;
  float:right;
}
.menu-bar ul{
  display: inline-flex;
  float: right;
}
.menu-bar ul li{
  /*border-left: 1px solid #fff;*/
  list-style-type: none;
  padding: 16px 14px;
  text-align: center;
  /*background-color: #ff8c00;*/
  cursor:pointer;
  
}


.menu-bar ul li a{
  font-size: 15px;
  color:#00ffff;
  text-decoration: none;
}
 .menu-bar ul :hover{
  background-color: #fff;
  color: #ff8c00;
}
.menu-bar ul ul{
  display: none;
}

@media only screen and (max-width:980px)
{
  .top-nav-bar{
    height:118px;
    border-bottom:0;
  }
  .search-box{
    width:100%;
  }
  .menu-bar{
    width:100%;
  }
  .menu-bar ul{
    margin: 10px 0;
    width: 100%;
  }
  .menu-bar ul li{
    height: 57px;
    width: 100%;
  }
}


  h5, p , .btn-in , .btn-on {
    margin-left:10px;
   color: #00ffff;
  }

  .btn-in{
  background: #00ffff;
  color: #000;
  

}
.btn-in:hover{
  background:red;
  color: #000;
}
.btn-on{
  background: #00ffff;
  color: #000;
 float:right;
  display:inline-flex;
   margin-left: 130px;
  margin-top:-11%;
  margin-right: 10%;
  margin-bottom: -30px;
  
}
.btn-on:hover{
  background:red;
  color: #000;
}
    .dropdown-menu{
                display:none;
                position:absolute;
                
                min-width: 270px;
                box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index:1;
                


            }
            .dropdown-menu a{
                display:block;
                color:#fff;
               text-align: left;
                text-decoration:none;
                line-height: 0px;

            }
           
            .dropdown:hover .dropdown-menu{
                display:block;

            }
             .single-product{
  	margin-top: 50px;
  }
  .new-arrival{
  	background: green;
  	width: 50px;
  	color: #fff;
  	font-size: 12px;
  	font-weight: bold;
  	margin-top: 20px;
  }
  .sticky {
  	margin-top: 48px;
  position: -webkit-sticky;
  position:fixed;
  
  width: 350px;
  
  
}

 .col-md-7{
 	float: right;
 }
 .single-product .glyphicon{
 	color: #ff8c00;
 }
 .single-product .price{
 	color: #ff8c00;
 	font-size: 26px;
 	font-weight: bold;
 	padding-top: 20px;
 }
 .single-product input{
 	border:1px solid #ccc;
 	font-weight: bold;
 	height: 33px;
 	text-align: center;
 	width: 30px;
 }
 .single-product .btn-default{
 	color: red;
 	font-weight: bold;
 	border:none;

 }
 .size-btn{
	width:40%;
	height:57px;

	border-radius: 50px;
}
.size-btn ul{
	display: inline-flex;
	
	padding-left: 7px;
}
.size-btn ul li{
	border: 1px solid #000;
	list-style-type: none;
	padding: 15px 20px;
	text-align: center;
	background-color: #ff8c00;
	cursor:pointer;
	border-radius: 50%;
}
.size-btn ul li a{
	color: #fff;
    font-size: 18px;
	font-weight: bold;
	text-decoration:none;

}
.size-btn ul li:hover{
   background-color: #000;

}
.size-btn ul a:hover{
   background-color: #000;
	color:red;
}

.single-product .btn-primary{
	background: #fff;
	border:1px solid #ff8c00;
	color:#ff8c00;
	font-size: 18px;
 	font-weight: bold;
 	text-decoration: none;
}

.single-product .btn-primary:hover{
	color:#000 ;
	background: #fff;
}
.single-product .btn-warning{
	background: #fff;
	border:1px solid green;
	color:green;
	font-size: 18px;
 	font-weight: bold;
 	text-decoration: none;
}

.single-product .btn-warning:hover{
	color:#00008B ;
	background:#fff;
	border:1px solid #DC143C;
}
.single-product .glyphicon-heart:hover{
    color:#00008B ;
	background:#fff;
	border:1px solid #DC143C;
}
.product-col  ul{
column-count: 2;
	column-gap: 1;
}
.product-col ul li{
	list-style-type: none;
	
}
.item ul{
column-count: 2;
	column-gap: 1;
}
.item ul li{
	list-style-type: none;
	
}
.Pincode-check input[type=text]{ 
    width: 40%;
	border:1px solid #000;
	border-radius: 4px;
	margin:8px 0px;
	outline: none;
	padding-right: 24%;

	} 
	.footer{
  	margin-top: 50px;
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
   <?php include"header.php" ?>
    <!----------single product------------------------------------->
    <?php
    $_SESSION["pid"]=$_GET["id"];

    ?>
    <iframe src="detail1.php" height="620px" width="100%" alt="Ladies Kurti">
    </iframe>
    <section class="footer">
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
                     <img src="../New Folder/AppStoreLogo.png" width="40%" height="30%">
                 </div>
         </div>
         <hr>
         <p class="copyright">Made by Moushumi</p>
     </div>
     </section>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>