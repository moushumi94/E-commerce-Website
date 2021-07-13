<!DOCTYPE html>
<html>
<head>
	<title>product list</title>
	 <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
  body{
    margin:0;
    padding: 0;
    
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
  padding: 14px 12px 15px 10px;
  text-align: center;
  /*background-color: #ff8c00;*/
  cursor:pointer;
  
}


.menu-bar ul li a{
  font-size: 14px;
  color:#00ffff;
  text-decoration: none;
}
 .menu-bar ul :hover{
  background-color: #fff;
  color: #ff8c00;
  border-radius: 5px;
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
    height: 45px;
    width: 100%;
  }
}

  h5, p  {
    margin-left:20px;
   color: #00ffff;
  }

.btn-on:hover{
  background:red;
  color: #000;
}
.btn-success{
	margin:0px 14px;

}
    .dropdown-menu{
                display:none;
                position:absolute;
                
                width: 230px;
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

     #sidebar{
       margin-top: -20px;
       background-image: linear-gradient(blue,red);
       height:140vh;
  }
  #sidebar ul {
    list-style-type: none;
    margin-top: 20%;
    padding-left: 0px;
    padding-right: 0px;
    font-size: 19px;
    color: #000;
  }
 
#sidebar ul li,label{
  padding-left: 35px;
  padding-right: 0px;
}
#sidebar li a{
  text-decoration: none;
  background-image: linear-gradient(to right,#00ffff,blue);
  border-radius: 50%;
  padding: 5% 14%;
  color: #000;
}
.headerbox{
  background-image: linear-gradient(to right,blue,#00ffff);
  padding-left: 9%;
  font-size: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  margin-top: 3%;
  color: #fff;
  
}
#content1{
     margin-left: 2%; 
    background-image: linear-gradient(red,blue);
    
    margin-top: -2%;
    border-radius: 13px;
  }
  .btn-group{
  	padding-left: 32%;
  }
  td,th{
  	text-align:center; ;
  	padding-top: 15px;
  	color: yellow;
  
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
                         <p>To access account and manage orders</p>
                       <a href="Modal.html"><button type="button" class="btn btn-success btn-sm" >Sign Up</button></a>
                       <a href="C:\wamp\www\project\Modalbox.html"><button type="button" class="btn btn-success btn-sm" style="float: right;margin-top: -29px;" >Log In</button></a>
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

    <div class="container-fluid">
    	<div class="row">
    		 <!------------side row-------------------------->
    <div class="col-sm-2 " id="sidebar">
      <ul>
        <label>V-ADMIN</label><hr><br>
        <li ><a href="profile.php">Dashboard</a> </li><br><br>
        <li><a href="productlist.php">Productlist</a> </li><br><br>
        <li><a href=""> Add Product</a></li><br><br>
        <li><a href="">Manage User</a> </li><br><br>
        <li>&nbsp;&nbsp;<a href="logout.php"> Log Out</a></li>
      </ul>
    </div>
   <!-----------------side row ends---------------->
   <div class="col-sm-10" id="content">
   	<div class="row">
   		<div class="col-sm-11" id="content1">
   			<div><h4>PRODUCT LIST</h4>
   				<ul class="nav nav-tabs">
   					<li class="active"><a data-toggle="tab" href="#home">Electronics</a></li>
   					<li><a data-toggle="tab" href="#menu1">Cloths</a></li>
   					<li><a data-toggle="tab" href="#kitchen">Kitchen Appliances</a></li>
   					<li><a data-toggle="tab" href="#luggages">Luggages</a></li>
   				</ul>
   			
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
          <p>
            if you are planning to start your career in PHP and you wish to know the skills related to it, now is the right time to dive in. These PHP Interview Questions and Answers are collected after consulting. 
          </p>
            
          </div>
          <div id="menu1" class="tab-pane fade ">
            <p> It is a widely used open-source programming language especially suited for creating dynamic websites and mobile API’s. So, if you are planning to start your career in PHP and you wish to know the skills related to it, now is the right time to dive in. These PHP Interview Questions and Answers are collected after consulting with .</p>
          </div>
        </div>
      </div>
   		

   		</div>
   	</div>
   </div>
   





    </div>
    </div>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>