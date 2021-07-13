<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css" >
	body{
		margin:0;
		padding: 0;
		box-sizing: border-box;
		background: #A9A9A9;
	}
	
.top-nav-bar{
	height: 57px;
	top: 0;
	position: sticky;
	background:#000;
	margin-bottom: 20px;
	border-bottom: 4px solid #00ffff;
	z-index: 1;
}
.logo {
	height:40px;
	margin:9px 10px;
	font-size: 20px;
	padding-left: 10px;

}

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
	background-color: #000;
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
                
                width: 260px;
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
         .Channel{
		
		background: #fff;
				

	}
	.box1{
		border:5px solid #000;
	margin-left: 65px;
	margin-right: 65px;
	border-style: double;
	}
   
	.recentpost{
		
		background:#fff;
		
		
	}
	.recentpost ul {
      list-style-type: none;
        margin-top: 10%;
		padding-left: 12%;
		padding-right: 8%;
		font-size: 17px;
		color: #00ffff;
	}
	.recentpost ul li{
		color: #000;
	}
		.responsive-image{
		height:350px;
		width: 450px;
		margin-top: 0%;
		margin-left: 20%;
	
		
	}
	 h5{
	 	font-size: 28px;
	 	padding-left: 11%;
	 }
	.btn-info{
		margin-left: 45%;
		margin-top: 0%;
	}
	p{
		font-size: 18px;
		padding-left: 29%;
		color: #696969;
	}
     
    hr{
		border:2px solid #ddd;
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
<div class="top-nav-bar">
        <div class="search-box">
           
             <a class="logo" href="#" style="color: #00ffff; text-decoration: none">MultiBazer</a>
            <input type="text" class="form-control">
            <div class="input-group-text"><span class="glyphicon glyphicon-search"></span></div>
        </div>
        <div class="menu-bar">
            <ul>
             <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span> About</a></li>
                      <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> profile</a>
                      <ul class="dropdown-menu">
                         <h5><b>Welcome</b></h5>
                         <p>&nbsp;To access account and manage orders</p>
                       <a href="Modal.html"><button type="button" class="btn-in btn-sm" id="myBtn" data-toggle="modal"
                            data-target="#myModal">Sign Up</button></a>
                       <a href="C:\wamp\www\project\Modalbox.html"><button type="button" class="btn-on btn-sm " id="myBtn" data-toggle="modal" data-target="#myModal">LOG IN</button></a>
                            <hr>
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Coupons</a></li>
                            <li><a href="#">MultiBazer Credit</a></li>
                            <li><a href="#">Saved Cards</a></li>
                            <li><a href="#">Saved Addresses</a></li>
                        </ul></li>
                <li><a href="#"><span class="glyphicon glyphicon-heart"></span> Wishlist</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>



            </ul>
        </div>
    </div>
    <div class="container">
	<div class="row">
	<div class="col-md-9">
    <div class="Channel">
        <br><br><br><br><br><br>
        <div class="box1">
         	<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>NO ACTIVE ORDERS</b></h5>
         	<p >There are no recent orders to show</p>
         	<center>
         	<img class="responsive-image" src="/project/hanger.jpg" alt="first pic"><br><br></center><hr>
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Start Shopping</button>
          <br><br>
      </div>
      <br><br><br><br><br><br><br>
    </div>
</div>
 <!---------------------2nd part------------------------------->   	
    <div class="col-md-3">
    <div class="recentpost">
	<br><br><br>
		<ul>
			<li>OVERVIEW</li><br><hr>
			<label>ORDER</label><br><br>
			<li>Orders & Returns</li><br><hr>
			<label>CREDITS</label><br><br>
			<li>Coupons</li>
			<li>MultiBazer Credit</li>
			<li>MultiBazer Cash</li><br><hr>
			<label>ACCOUNT</label><br><br>
			<li>Profile</li>
			<li>Saved Cards</li>
			
			<li class="Cds" style="color: #00ffff">Address</li>
             <br><br><br><br>
		</ul>
	

	</div>
</div>
</div>
</div><br>
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
                     <img src="../New Folder/AppStoreLogo.png" width="40%" height="30%">
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