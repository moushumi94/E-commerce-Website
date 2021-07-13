<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
  <title>My cart</title>
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet"  href="style.css">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    
  <style type="text/css">
    body{
    margin:0;
    padding: 0;
    
    background: #A9A9A9;
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
   /*overflow: hidden;*/
     box-shadow: 0 15px 40px rgba(0,0,0,0.3);
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
    bottom:0px;
    background: #fff;
    text-align:left;
    padding: 10px;
    box-sizing: border-box;
    /*transition: .5s;*/
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
    font-size: 20px;
    color:green;
    font-weight: normal;
  }
  .specifies .price{
    position: absolute;
    top:35px;
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
    width: 100%;
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
.time2{
  
  position: absolute;
  top:2%;
  margin-left: 190px;
  width: 70px;
}
.time2 .glyphicon{
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
     
 hr{
  border:2px solid red ;

 }
 
  @media only screen and (max-width:980px){
    .btn-primary{
      margin-left: -120%;
    }
     .address{
      margin-left: 6%;
    }
  }
  
  </style>

</head>
<body>

 <?php
   include "header.php";
  ?>
  <!-----------------------content----------------------------------->
      <br><br><h2><center><b style="color:red;">..Checkout.. </b></center></h2><br>
      <div class="row">
    <div class="col-md-offset-1 col-md-10" id="crt_table">
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
  $st=0;
  $sql="SELECT * FROM `add-to-cart` WHERE user_id=".$_SESSION['id'] ;
   $result=$conn->query($sql);
    if($result->num_rows>0){
  
       echo  '<table class="table">
          <thead><tr>
        <th>IMAGE</th><th>NAME</th><th>Qty</th><th>PRICE</th>
          </tr>
          </thead>
          <tbody>';
            while($row=$result->fetch_assoc()){
              $st =$st+($row['qty']*$row['price']);
           echo '
           <tr>
          <td><img src="vender-admin/image/'.$row["image"].'" class="img-rounded" height="60px" width="80px"> </td>
          <td>'.$row["pname"].'</td>
          <td>'.$row["qty"].'</td>
          <td>'.$row["price"].'</td>
          </tr>';
         }
         ?>
             <tr>
          <td colspan="2"></td>
          <td style="padding-left: 13%;"><b>Subtotal&nbsp;:</b></td>
          <td><b><?php echo $st; ?></b></td>
             </tr>
            <?php
             echo ' </tbody>
         </table>';

    
  }else{
      echo '<div class="container">
      <center>
         <img src="New folder/cart.jpg"  style=" height:100px;  border-radius:15px; "><br><br>
         <h4>Your Basket is Empty</h4><br>
        <a href="index.php" ><button class="btn btn-success">Start Shopping</button></a>
         </center>
      </div>';
  }

?>
 </div>
 </div>  
 <div class="row">
   
  <div class="col-md-offset-4 col-md-5 ">
     <?php 
      $sql="SELECT `addr` FROM `users` WHERE id=".$_SESSION['id'];
      
   $result=$conn->query($sql);
     ?>
     <div><hr>
     <h2 style="color:#00ffff; padding-left: 120px;"><b>Address</b></h2>
      <?php
      while($row=$result->fetch_assoc()){
       
     echo '  <span class="address" style="font-size:40px;">'.$row["fname"].'</span>
        <span class="address"  style="font-size:20px;">'.$row["addr"].'</span>';
     
   }
   ?><hr></div>
  </div>
</div><br><br>
  <div class="row">
  <div class="col-md-offset-5 col-md-7">
     <a href="payment.php" class="btn btn-primary">proceed to payment</a>
  </div>
</div>
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
                  <div class="col-md-3" ">
                     <h1>Download App</h1>
                     <img src="New folder/AppStoreLogo.png" width="40%" height="30%">
                 </div>
         </div>
         <hr>
         <p class="copyright">copyright @2020</p>
     </div>
     </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>