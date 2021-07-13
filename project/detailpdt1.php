<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 102 Template</title>
<!--------css-link-------->
<link rel="stylesheet"  href="stylee.css">
<meta name="viewport" content="width = device-width, initial-scale = 1.0">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>
<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
	function myFunction(){
		setInterval(function(){
			var d=new Date();
			var h=d.getHours();
			var m=d.getMinutes();
			var s=d.getSeconds();
			document.getElementById("p1").innerHTML=h+":"+m+":"+s;
		}, 1000);
	}
</script>
<style type="text/css">
body{
		margin:0;
		padding: 0;
		background: #fff;
		font-family: sans-serif;
  }
	.digitalclk{
		position: relative;
		display:flex;
		padding-left: 404px;
		

    }
    .digitalclk h1{
    	font-size: 180%;
    	color: red;
    	padding: 16px 0px 0px 16px;
    }
    .digitalclk h2{
    	font-size: 180%;
    	color:blue;
        
    }
    #p1{
    	padding: 16px 0px 0px 16px;
        
    }
    
	.bigbox{
	 margin:17px;
	 height:350px;
	 width:260px;
	 position:relative;
	 background-color:#0e0e0f;;
	 border-radius:5px;
	 display:flex;
	 flex-direction:column;
	 overflow: hidden;
     box-shadow: 0 15px 40px rgba(0,0,0,0.3);
	}	
  @media only screen and (max-width:980px){
    .bigbox{
      margin-left: 20%;
    }
    .digitalclk{
      padding-left: 25px;
    }

  }
    .bigbox .img-box{
  	height: 100%;
  	box-sizing: border-box;
  }
  .bigbox .img-box img{
  	display: block;
    height: 250px;
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

</style>
</head>

<body onload="myFunction()">
  <?php
   include "header.php" ?>
   <?php include "sideMenu.php" ?>
	
  <div class="digitalclk">
    	<h1><b>Deal of the day</b></h1>
    	<h2><p id="p1"></p></h2>
    	<h1><b>left</b></h1>
    </div>
     <hr>
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
  $sql="SELECT * FROM `product` WHERE pcategory='".$_GET["type"]."' LIMIT 6, 20";
   $result=$conn->query($sql);
   ?>
     <section>
      <div class="container-fluid">
     	<div class="row">
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
</section>
 <br><br>
 <!---------------footer---------------------->
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

           <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $("#myModal").modal();
      });
    });
  </script>

        <script>
        function openmenu()
        {
            document.getElementById("side-menu").style.display="block";
            document.getElementById("menu-btn").style.display="none";
            document.getElementById("close-btn").style.display="block";
        }
         function closemenu()
        {
            document.getElementById("side-menu").style.display="none";
            document.getElementById("menu-btn").style.display="block";
            document.getElementById("close-btn").style.display="none";
        }
    </script>


  

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>