<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
  <title>vender page</title>
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
  margin-bottom: 20px;
  border-bottom: 4px solid #00ffff;
  z-index: 20;
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
  width:50%;
  height:50px;
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


  h5, p {
    margin-left:12px;
   color: #00ffff;
  }


.btn-on:hover{
  background:red;
  color: #000;
}
.btn-success{
  margin:0px 6px;

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
 #content5{
      background-image: linear-gradient(red,yellow);
    list-style-type: none;
    margin-top: 3%;
    margin-left: 2%;
    margin-right: 12%;
    border-radius: 15px;

 }
            
  #content1{
     margin-left: 2%; 
    background-image: linear-gradient(red,yellow);
    list-style-type: none;
    margin-top: 0%;
    border-radius: 15px;
  }
  #content2{
   margin-left: 2%;
    background-image: linear-gradient(yellow,green);
    list-style-type: none;
    margin-top: 0%;
   border-radius: 15px;
  }
   #content3{
     margin-left: 2%;
    background-image: linear-gradient(red,yellow);
    list-style-type: none;
    margin-top: 3%;
    border-radius: 15px;
  }
  #content4{
     margin-left: 2%;
    background-image: linear-gradient(yellow,green);
    list-style-type: none;
    margin-top: 3%;
    border-radius: 15px;
  }
  #sidebar{
     border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
       background-image: linear-gradient(blue,red);
       height:134vh;
       margin-top: 0px;
       margin-bottom: 5px;
       z-index: 10;
  }
  #sidebar ul {
   /* list-style-type: none;
    margin-top: 20%;
    padding-left: 0px;
    padding-right: 0px;
    font-size: 19px;
    color: #000;*/
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
   }
.btn-info{
  margin-left: 40%;
  margin-bottom: 7%;

}
 /*.headerbox{
   background-image: linear-gradient(to right,blue,#00ffff);
  padding-left: 37%;
  font-size: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  margin: 0px 10px 10px 10px;
  border-radius: 7px;
  
 }*/
.box{
  background-image: linear-gradient(to right,blue,#00ffff);
  padding-left: 31%;
  font-size: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 50%;
}


.headerbox{
  background-image: linear-gradient(to right,blue,#00ffff);
  /*padding-left: 9%;*/
  margin-top: 2%;
 margin: 0px 10px 0px 10px;
  border-radius: 15px;
  color: #fff;
  display: flex;
  
}
.headerbox h4{
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 35%;
    font-size: 25px;
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
   include "header1.php";
  ?>
<div class="container-fluid">
  <div class="row" >
    <!------------side row-------------------------->
    <div class="col-sm-2 " id="sidebar">
      <ul>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V-ADMIN</label><hr><br>
        <li >&nbsp;&nbsp;<a href="profile.php">Dashboard</a> </li><br><br>
        <li>&nbsp;&nbsp;<a href="productlist.php">Productlist</a> </li><br><br>
        <li><a href="addproduct.php"> Add Product</a></li><br><br>
        <li><a href="">Manage User</a> </li><br><br>
        <li>&nbsp;&nbsp;&nbsp;<a href="logout.php"> Log Out</a></li>
      </ul>
    </div>
   <!-----------------side row ends---------------->
   <div class="col-sm-10" id="content">
    <div class="row">
        <div class="headerbox">
          <span class="glyphicon glyphicon-align-justify" id="menu-btn" onclick="openmenu()"></span>
            <span class="glyphicon glyphicon-remove" id="close-btn" onclick="closemenu()"></span>
          <br><h4><b>DASHBOARD</b></h4></div><br><br>
      <!------ CATEGORIES LIST box start--------------->
      <div class="col-sm-5" id="content1"><br>
        <div class="box"><b>CATEGORIES LIST</b></div><br>
        <?php

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
  $sql="SELECT * FROM `catagories`";
   $result=$conn->query($sql);
   if($result->num_rows>0){

       echo  '<table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th> <th>CATEGORIES</th><th>COUNT</th>
             </tr>
           </thead><tbody> ';
            while($row=$result->fetch_assoc()){
           echo '
             <tr>
               <td>'.$row["id"].'.</td><td>'.$row["cname"].'</td><td>'.$row["count"].'</td>
             </tr>';
           }
             echo '</tbody>
         </table>';
        }
   else{
     echo "no result found";
   }
   ?>
         <button type="button" class="btn btn-info">Add Items</button>
           
      </div>
     <!------ CATEGORIES LIST box ends---------------->

     <!--------------- BRAND LIST box start--------------------->
      <div class="  col-sm-6" id="content2"><br>
        <div class="box"><b>&nbsp;&nbsp;&nbsp;&nbsp;BRAND LIST</b></div><br>
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
  $sql="SELECT * FROM `brandtab`";
   $result=$conn->query($sql);
   if($result->num_rows>0){

       echo  ' <table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th><th>BRANDS</th><th>COUNT</th>
             </tr>
           </thead><tbody>';
            while($row=$result->fetch_assoc()){
           echo '
             <tr>
               <td>'.$row["id"].'</td><td>'.$row["bname"].'</td><td>'.$row["count"].'</td>
             </tr>';
           }
             echo ' </tbody>
         </table> ';
          }
   else{
     echo "no result found";
   }
   ?>
         <button type="button" class="btn btn-info">Add Items</button>
         

            </div>
          </div>
        <!------ BRAND LIST box ends---------------------->  
          <!------2 row-------->
              <div class="row" >
          <!--------------- ORDER LIST box start------------>
               <div class="   col-sm-5" id="content4"><br>
                <div class="box"><b>&nbsp;ORDERS LIST</b></div><br>
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
      $sql="SELECT * FROM `ordertab`";
      $result=$conn->query($sql);
      if($result->num_rows>0){

           echo  '<table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th>
               <th>ORDERS</th>
               <th>COUNT</th>
             </tr>
           </thead>
           <tbody>';
            while($row=$result->fetch_assoc()){
           echo '
             <tr>
               <td>'.$row["id"].'</td><td>'.$row["oname"].'</td><td>'.$row["count"].'</td>
             </tr>';
           }
             echo ' </tbody>
         </table> ';
          }
            else{
             echo "no result found";
         }
        ?>
         
        </div>
              <!--------------- ORDER LIST box ends------------> 

              <!----------------SUBSCRIBER box starts---------------> 
                <div class=" col-sm-offset-1 col-sm-6" id="content3" ><br>
                  <div class="box"><b>&nbsp;SUBSCRIBERS</b></div><br>
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
         $sql="SELECT * FROM `subscribers`";
         $result=$conn->query($sql);
        if($result->num_rows>0){

              echo  ' <table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th>
               <th>E-MAIL</th>
            </tr>
           </thead>
           <tbody>';
            while($row=$result->fetch_assoc()){
           echo '
             <tr>
               <td>'.$row["id"].'</td><td>'.$row["sbname"].'</td>
             </tr>';
           }
             echo ' </tbody>
         </table> ';
          }
   else{
     echo "no result found";
   }
   ?>
         <!------------ SUBSCRIBERS box ends------------->
                  
         
                </div>
              
      </div>
      <!--------------3 row-------------------->
      <div class="row" >
       <!------------USER LIST box start-------------->
         
         <div class=" col-sm-11" id="content5" ><br>
          <div class="box"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          USER LIST</b></div><br>
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
         $sql="SELECT * FROM `users`";
         $result=$conn->query($sql);
        if($result->num_rows>0){

              echo  '<table class="table table-hover">
          <thead><tr>
            <th>ID</th><th>FULLNAME</th><th>EMAIL</th><th>CONTACT</th><th>ADDRESS</th></tr>
          </thead>
          <tbody>';
            while($row=$result->fetch_assoc()){
           echo '
             <tr>
             <td>'.$row["id"].'</td><td>'.$row["fname"].'</td><td>'.$row["email"].'</td><td>'.$row["mob"].'</td><td>'.$row["addr"].'</td>
             </tr>';
           }
             echo ' </tbody>
         </table> ';
          }
   else{
     echo "no result found";
   }
   ?>
          
         </div>
        <!----------USER LIST box ends------------------->
      </div>
     <!--------3 row end------->
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
   





