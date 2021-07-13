
<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>product list</title>
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
<link rel="stylesheet"  href="stylee.css">
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
  margin-bottom: 7px;
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

  

#content1{
     margin-left: 4%; 
    background-image: linear-gradient(red,blue);
    margin-right: 3%;
    
    border-radius: 13px;
  }

  
  .box h4{
  padding-top: 13px;
		padding-bottom: 5px;
		padding-left: 5%;
		font-size: 25px;
  
  
}
.box{
  
  
  margin-top: 2%;
 height: 18px;
  display:flex;
  color: #fff;
  
  
}

 .headerbox{
 	height: 50px;
 
 	
    
    

 }
 .headerbox ul{
  	list-style-type: none;
  	float: right;
  	display: flex;
  /*	padding-left: 360px;*/
  	padding-right: 14px;
  /*	padding-top: 10px;*/

  }
  .headerbox ul li a:hover{
  background-color: #fff;
  color: #ff8c00;
  border-radius: 5px;
 
}
  .headerbox ul li{
  	list-style-type: none;
  padding: 10px 0px 10px 0px;
  	cursor:pointer;
  	text-align: center;
 }
  .headerbox ul li a{
  	 font-size: 14px;
  color:#00ffff;
  text-decoration: none;
  
  padding: 14px 12px 10px 10px;
  }
  @media only screen and (max-width:980px)
{
  .box{
  	
    height:50px;
    border-bottom:0;
  }
   .box h4{
   	margin-top: 0%;
   }
  .headerbox{
    width:100%;
  }
  .headerbox ul{
    margin: 10px 0px 0px 0px;
    width: 110%;
    padding-bottom: 10px;
  }
  .headerbox ul li{
    height: 45px;
    width: 100%;
  }
}
  td,th{
  	color: #fff;
  	text-align: center;
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
     <?php include"header1.php" ?>

    <div class="container-fluid">
    	<div class="row">
    		 <!------------side row-------------------------->
      <div class="col-sm-2 " id="sidebar">
      <ul>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V-ADMIN</label><hr><br>
        <li >&nbsp;&nbsp;<a href="profile.php">Dashboard</a> </li><br><br>
        <li>&nbsp;&nbsp;<a href="productlist.php">Productlist</a> </li><br><br>
        <li><a href=""> Add Product</a></li><br><br>
        <li><a href="">Manage User</a> </li><br><br>
        <li>&nbsp;&nbsp;&nbsp;<a href="logout.php"> Log Out</a></li>
      </ul>
    </div>
   <!-----------------side row ends---------------->
 <div class="col-sm-10" id="content">
   	<div class="row">
   	  	<div class="col-sm-12" >
   	  		<div style="background-color: blue; margin-bottom: 1%;margin-left: 3%; margin-right: 3%;">
             <div class="box" >
             	<span class="glyphicon glyphicon-align-justify" id="menu-btn" onclick="openmenu()"></span>
            <span class="glyphicon glyphicon-remove" id="close-btn" onclick="closemenu()"></span>
   			<h4>PRODUCT LIST</h4></div>
   		    <div class="headerbox">
   				<ul>
            <li><a href="Today'sDeal.php">Today's Deal</a></li>
   					<li><a href="productlist.php">Electronics</a></li>
   					<li><a href="clothlist.php">Cloths</a></li>
   					<li><a href="kitchenlist.php">Kitchen Apls</a></li>
   					<li><a href="luggegas.php">Luggegas</a></li>
            <li><a href="kindlebook.php">Kindle Book</a></li>
   				</ul>
   			
   			</div>
   		</div>
   		</div>	
   	</div>
     <div class="row">
     	<div class="col-sm-11" id="content1">
     		<div class="listheading" style="padding-left: 35%;"><h3><b>KITCHEN APPLIENCES LIST</b><h3></div>
	    
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
  $sql="SELECT * FROM `product` WHERE pcategory='Kitchen Product'";
   $result=$conn->query($sql);
   if($result->num_rows>0){

       echo  '<table class="table">
   				<thead><tr>
   			<th>SLNO. <th>IMAGE</th><th>NAME</th><th>PRICE</th><th>TOTAL</th><th><a class=" btn btn-primary" href="addproduct.php">Add New</a></th>
   				</tr>
   				</thead>
   				<tbody>';
            while($row=$result->fetch_assoc()){
           echo '
              <tr>
          <td>'.$row["id"].'.</td>
          <td><img src="image/'.$row["image"].'" class="img-rounded" height="60px" width="80px"> &nbsp;&nbsp;
          <img src="image/'.$row["image2"].'" class="img-rounded" height="60px" width="80px"> &nbsp;&nbsp;
          <img src="image/'.$row["image3"].'" class="img-rounded" height="60px" width="80px"></td>
          <td>'.$row["ptitle"].'</td>
          <td>'.$row["price"].'.</td>
          <td>'.$row["pQty"].'</td>
          <td><a href="#'.$row["delete"].'" class="btn btn-success">Delete</a></td>
             </tr>';
           
           }
             echo '</tbody>
         </table>';
        }
   else{
     echo "no result found";
   }
   ?>
     </div>
 </div>
    </div>
    </div> <br>
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
                     <img src="../New folder/AppStoreLogo.png" width="40%" height="30%">
                 </div>
         </div>
         <hr>
         <p class="copyright">copyright @2020</p>
     </div>
     </div>





    
   
    
      <script>
        function openmenu()
        {
            document.getElementById("sidebar").style.display="block";
            document.getElementById("menu-btn").style.display="none";
            document.getElementById("close-btn").style.display="block";
        }
         function closemenu()
        {
            document.getElementById("sidebar").style.display="none";
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