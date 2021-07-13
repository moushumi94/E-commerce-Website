<?php
session_start()
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-flow">

	<!--------css-link-------->
<link rel="stylesheet"  href="stylee.css">
	<title>VIEW ALL PAGE</title>
	<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
	h2{
		text-align: center;
	}

    .bigbox{
   margin-top:17px;
    height:350px;
   width:260px;
   position:relative;
   background-color:#0e0e0f;
   border-radius:5px;
   display:flex;
   flex-direction:column;
   overflow: hidden;
     box-shadow: 0 15px 40px rgba(0,0,0,0.3);
     float: left;
     
  } 
    .bigbox .img-box{
    height: 100%;
    box-sizing: border-box;
  }
  .bigbox .img-box img{
    display: block;
    width: 90%;
    margin:10px auto 0px;
  }
   .specifies{
  	position: absolute;
  	width: 100%;
  	bottom:-60px;
  	background: #fff;
  	text-align:left;
  	padding: 10px;
  	box-sizing: border-box;
  	transition: .5s;
  }
  .bigbox:hover .specifies{
    bottom: 0px;
  }
  .specifies h2{
    margin:0px;
    padding:0;
    font-size: 20px;
    
  
  }
  .specifies h2 span{
    font-size: 17px;
    color:green;
    font-weight: normal;
  }
  .specifies .price{
    position: absolute;
    top:52px;
    font-weight: bold;
    color:#000;
    font-size: 25px;
  }
   .specifies .glyphicon{
    position: absolute;
    top:12px;
    right:25px;
    font-size: 20px;

  }
  .specifies label{
    display: block;
    margin-top: 5px;
    font-weight: bold;
    font-size: 15px;
  }
  .specifies ul{
    display: flex;
    margin:0;
    padding:0;
  }
 .specifies ul li{
    list-style: none;
    margin:5px 5px 0px;
    font-size: 15px;
    font-weight: normal;
    color:green;
  }
    .specifies button{
  	display: block;
    width:100%;
  	padding: 5px;
  	color: #fff;
  	margin: 10px 0 0;
  	background: #ff8c00;
  	text-align: center;
  	text-decoration: none;
  	transition: .02s;
  	cursor: pointer;
  }
  .specifies button:hover{
  	background: red;
  	color: #000;
  	text-decoration: none;
  }

.img-box img{
  height: 35vh;
  width:95%;
  border-radius: 6px;
}
.time1{
  display: block;
  position: absolute;
  top:2%;
  margin-left: 190px;
  width: 70px;
}
.time1 .glyphicon{
  cursor: pointer;
  background-color:#ddd;
  color: #000;
  height: 30px;
  width:35px;
  font-size: 20px;
  padding: 7px;
  margin-top:5%;
  margin-bottom:5%;
}
.overlay-right{
  display: block;
  opacity: 0;
  position: absolute;
  top:4%;
  margin-left: 0px;
  width: 70px;
}
.overlay-right .glyphicon{
  cursor: pointer;
  background-color:#ddd;
  color: #000;
  height: 30px;
  width:35px;
  font-size: 20px;
  padding: 7px;
  margin-top:5%;
  margin-bottom:5%; 

}
.overlay-right .btn-secondary{
  background: none !important;
  border:none !important;
  box-shadow: none !important;

}
.img-box:hover .overlay-right{
  opacity: 1;
  margin-left:3%;
  transition: 0.5s;
}
        #sidebar{
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
       background-image: linear-gradient(blue,red);
       height:140vh;
       margin-top: 0px;
       margin-bottom: 5px;
       z-index: 10;
  }
  #sidebar ul {
    list-style-type: none;
    margin-top: 20px;
    padding-left: 0px;
    padding-right: 0px;
    font-size: 18px;
    color: #000;
  }
 
#sidebar ul li,label{
  padding-left: 18px;
  padding-right: 0px;
}
#sidebar li a{
  text-decoration: none;
  background-image: linear-gradient(to right,blue,#00ffff,blue);
  border-radius: 50%;
  padding: 3% 10%;
  color: #000;
  border:1px solid #fff;
}
    #menu-btn,#close-btn{
     	font-size: 30px;
     	margin:10px;
     	color: #00ffff;
     	display: none;
     }

    
   @media only screen and (max-width:980px)
     {
     	#sidebar{
     		
     		width: 40%;
     		margin-top: 60px;
     		margin-left: 10px;
     		top:133px;
     		position: fixed;
     		font-size: 12px;
     		display:none; 
          }
     	.sidebar ul li ul{
     		top:133px;
     	}
     	.sidebar ul li:hover ul{
     		margin-left: 31%;
     	}
     	#menu-btn{
     		display: block;
     	}
     	.box{
     		
     		display: flex;
     	}
     	.box h2{
     		margin-top: 10px;
     		padding-left: 90px;
     	}
     }
  
     
</style>
</head>
<body>
 <?php include"header.php" ?>
  
<!--------------------- contents---------------------------------->
    <div class="container-fluid">
    	<div class="col-sm-12">
      <div class="row">

                     <?php
//include "dbconn.php";
$servername = "localhost";
$username ="root";
$password = "";
$database="mbazer";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
    	 <ul class="nav nav-tabs" id="myTab" role="tablist">
        	<li class="nav-item active dropdown" ><a class="nav-link active" data-toggle="tab" href="#men" style="padding-left: 100px; padding-right: 100px;"><b>MEN</b></a>
            <ul class="dropdown-menu">
                           <h4><b>&nbsp;&nbsp;&nbsp;&nbsp;TOP WEAR</b></h4>
                            <li><a href="Mentopwear.html">T-Shirts</a></li>
                            <li><a href="MenCasualwear.html">Casual Shirts</a></li>
                            <li><a href="MenFormalwear.html">Formal Shirts</a></li>

                             <h4><b>&nbsp;&nbsp;&nbsp;&nbsp;INDIAN & FESTIVE WR</b></h4>
                              <li><a href="MenKurta.html">Kurtas & Kurta Sets</a></li>
                              <li><a href="SherwaniForMen.html">Sherwani</a></li>
                               
                               <h4><b>&nbsp;&nbsp;&nbsp;&nbsp;BOTTOM WEAR</b></h4>
                               <li><a href="Menjeans.html">Jeans</a></li>
                            <li><a href="MenCasualtrouser.html">Casual Trousers</a></li>
                            <li><a href="MenFormaltrouser.html">Formal Trousers</a>

                        </ul>
          </li>
        	<li class="nav-item dropdown"><a class="nav-link " data-toggle="tab" href="#women" style="padding-left: 100px;

           padding-right: 100px;"><b>WOMEN</b></a>
             <ul class="dropdown-menu">
              <h4><b>&nbsp;&nbsp;&nbsp;&nbsp;TOP WEAR</b></h4>
                            <li><a href="Mentopwear.html">T-Shirts</a></li>
                            <li><a href="MenCasualwear.html">Casual Shirts</a></li>
                            <li><a href="MenFormalwear.html">Formal Shirts</a></li>
             </ul>
          </li>
        	<li class="nav-item dropdown"><a class="nav-link " data-toggle="tab" href="#kid" style="padding-left: 100px; 
          padding-right: 100px;"><b>KID</b></a>
               <ul class="dropdown-menu">
              <h4><b>&nbsp;&nbsp;&nbsp;&nbsp;TOP WEAR</b></h4>
                            <li><a href="Mentopwear.html">T-Shirts</a></li>
                            <li><a href="MenCasualwear.html">Casual Shirts</a></li>
                            <li><a href="MenFormalwear.html">Formal Shirts</a></li>
             </ul>
          </li>
        </ul>
     
        <div class="tab-content " id="myTabContent">
         
     <?php

     $sql="SELECT * FROM `product` WHERE ccategory='men'";
     $result=$conn->query($sql);
   ?> 
        	<div class="tab-pane active" id="men">
             
        	<h2>Men Products</h2>
        	
           <?php
           while($row=$result->fetch_assoc()){
           echo '
       <div class="col-md-3">
          <div class="bigbox">
     				<div class="img-box">
              <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time1" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
<form action="manage_cart.php" method="POST">
		<a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
		<div class="overlay-right">
                 <a href="watchess.html" class="btn btn-secondary" title="Similar Product">
                          <span class="glyphicon glyphicon-tasks"></span>
                      </a>
                  </div>
		</div>
		<div class="specifies">
			<h2><b> '.$row["pbrand"].'</b><br><span>'.$row["ptitle"].'</span><br></h2>
			
			<br>
			<div class="price">Rs.'.$row["price"].'&nbsp;&nbsp;<span  style="color: #ff8c00"><del>Rs.'.$row["price"]*1.1.'</del></span></div><br>
		  
        <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
      <button type="submit" name="add_to_cart" class="btn btn-primary">Add To Cart</button>
	</div>
     		</div>
        </form>
     	 </div>';
    }
    ?>
    
          </div>
    
<?php

  $sql="SELECT * FROM `product` WHERE ccategory='women'";
   $result=$conn->query($sql);
   ?> 
        	<div class="tab-pane " id="women">
        		 
          <h2>Women Products</h2>  
          <?php
           while($row=$result->fetch_assoc()){
           echo '
         <div class="col-md-3">
          <div class="bigbox">
     				<div class="img-box">
              <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time1" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
<form action="manage_cart.php" method="POST">
		<a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
		<div class="overlay-right">
                 <a href="watchess.html" class="btn btn-secondary" title="Similar Product">
                          <span class="glyphicon glyphicon-tasks"></span>
                      </a>
                  </div>
		</div>
		<div class="specifies">
			<h2><b> '.$row["pbrand"].'</b><br><span>'.$row["ptitle"].'</span><br></h2>
			
			<br>
			<div class="price">Rs.'.$row["price"].'&nbsp;&nbsp;<span  style="color: #ff8c00"><del>Rs.'.$row["price"]*1.1.'</del></span></div><br>
		  
        <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
      <button type="submit" name="add_to_cart" class="btn btn-primary">Add To Cart</button>
	</div>
     		</div>
        </form>
     	 </div>';
    }
    ?>
         </div>
    
 
 <?php

  $sql="SELECT * FROM `product` WHERE ccategory='kid'";
   $result=$conn->query($sql);
   ?>  
        	
        	<div class="tab-pane "  id="kid" >
        	 
         <h2>Kid Products</h2>
          <?php
           while($row=$result->fetch_assoc()){
           echo '
         <div class="col-md-3">
          <div class="bigbox">
     				<div class="img-box">
              <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time1" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
<form action="manage_cart.php" method="POST">
		<a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
		<div class="overlay-right">
                 <a href="watchess.html" class="btn btn-secondary" title="Similar Product">
                          <span class="glyphicon glyphicon-tasks"></span>
                      </a>
                  </div>
		</div>
		<div class="specifies">
			<h2><b> '.$row["pbrand"].'</b><br><span>'.$row["ptitle"].'</span><br></h2>
			
			<br>
			<div class="price">Rs.'.$row["price"].'&nbsp;&nbsp;<span  style="color: #ff8c00"><del>Rs.'.$row["price"]*1.1.'</del></span></div><br>
		  
        <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
      <button type="submit" name="add_to_cart" class="btn btn-primary">Add To Cart</button>
	</div>
     		</div>
        </form>
     	 </div>';
    }
    ?>
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