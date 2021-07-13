<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Website</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">
<!-- Css file link -->
<link rel="stylesheet"  href="stylee.css">
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
    <?php 
    include"header.php";
     ?>
    <section class="header">
      <?php include "sideMenu.php" ?>
      <div class="slider">
         <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" ></li>
                <li data-target="#myCarousel" data-slide-to="2" ></li>
                <li data-target="#myCarousel" data-slide-to="3" ></li>
                
               </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="New folder/slider9.gif" class="d-block w-80" >
                </div>
                <div class="item">
                    <img src="New folder/slider8.jpg" class="d-block w-100">
                </div>
                <div class="item">
                    <img src="New folder/shot2.jpg" class="d-block w-100">
                </div>
                <div class="item">
                    <img src="New folder/Shoppingcrosel1.jpg" class="d-block w-100 h-60">
                </div>
                
            </div>
            </div>
      </div>
      </div>  
    </section>
    <br><br>
   
    <!-------featured-categories------>
    <section class="featured-categories">
        <div class="container-fluid">
            <div class="title-box">
              <h2>Top categories</h2>
            </div>
               
        
              <div class="col-md-4">
                  <img src="New folder/slider1.jpg">
              </div>
              <div class="col-md-4">
                  <img src="New folder/furniture.jpg">
              </div>
              <div class="col-md-4">
                  <img src="New folder/Happliences.jpg">
              </div>
            </div>  
          </div>  
        </div>
    </section>
       <!-------------Deal of the day--------------------->
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
  $sql="SELECT * FROM `product` WHERE pcategory='Deal of the day' LIMIT 5";
   $result=$conn->query($sql);
   ?>
          <section>

       <div class="title-box">
              <h2>Deal of the Day</h2>
            </div>
              <div class="side_btn">
              <a href="detailpdt1.php?type=Deal of the Day" class="btn btn-sm" id="myBtn" style="background: #00ffff" >
           See More</a>
         </div>

  <!-- Swiper -->
  <div class="row">
  <div class="swiper-container">
       <div class="swiper-wrapper">
        
        <?php
           while($row=$result->fetch_assoc()){
           echo '
           <div class="col-sm-3">
           <div class="swiper-slide">
             <div class="slider-box">
         
        <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
            <form action="manage_cart.php" method="POST">
          <div class="img-box">
         <a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
          </div>
          <p class="detail">'.$row["ptitle"].'
          <a href="detail2.php?id='.$row["id"].'" class="price" alt="'.$row["ptitle"].'" >Rs. '.$row["price"].'</a>
          </p>
          
          <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
          
          <button type="submit" name="add_to_cart" class="btn btn-primary" style="background:#ff696e;width:250px;">Add To Cart</button>
        
          </div>
          </form>
          </div>
        </div>';
    }

    ?>
      </div>
     </div> 
    </div>
 </section>
 <br><br>
 
<!----------------------------------new products---------------------->
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
  $sql="SELECT * FROM `product` WHERE pcategory='cloth' LIMIT 5";
   $result=$conn->query($sql);
   ?>
<section>
       <div class="title-box">
              <h2>New Arrivals</h2>
          </div>
              <div class="side_btn">
              <a href="detailpdt2.php?type=cloth" class="btn btn-sm" id="myBtn" style="background: #00ffff">See More</button></a>
           </div>
  <!-- Swiper -->
  <div class="row">
   <div class="swiper-container">
       <div class="swiper-wrapper">
        
        <?php
           while($row=$result->fetch_assoc()){
           echo '
           <div class="col-sm-3">
           <div class="swiper-slide">
            <div class="slider-box">
         
        <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
            <form action="manage_cart.php" method="POST">
          <div class="img-box">
         <a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
          </div>
          <p class="detail">'.$row["ptitle"].'
          <a href="detail2.php?id='.$row["id"].'" class="price" alt="'.$row["ptitle"].'" >Rs. '.$row["price"].'</a>
          </p>
          
          <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
          
          <button type="submit" name="add_to_cart" class="btn btn-primary" style="background:#ff696e;width:250px;">Add To Cart</button>
          
          </div>
          </form>
          </div>
        </div>';
    }

    ?>
       
    </div>
    </div>
  </div>
 </section>
 <br><br>
 <!----------------------------travel gear------------------------------------->
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
  $sql="SELECT * FROM `product` WHERE pcategory='Luggegas' LIMIT 5";
   $result=$conn->query($sql);
   ?>
  <section>
       <div class="title-box">
              <h2>Travel gear</h2>
          </div>
              <div class="side_btn">
              <a href="detailpdt3.php?type=Luggegas" class="btn btn-sm" id="myBtn" style="background: #00ffff" >See More</button></a>
           </div>
  <!-- Swiper -->
  <div class="row">
  <div class="swiper-container">
       <div class="swiper-wrapper">
      
        <?php
           while($row=$result->fetch_assoc()){
           echo '
           <div class="col-sm-3">
           <div class="swiper-slide">
             <div class="slider-box">
         
        <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
            <form action="manage_cart.php" method="POST">
          <div class="img-box">
         <a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
          </div>
          <p class="detail">'.$row["ptitle"].'
          <a href="detail2.php?id='.$row["id"].'" class="price" alt="'.$row["ptitle"].'" >Rs. '.$row["price"].'</a>
          </p>
          
          <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
          
          <button type="submit" name="add_to_cart" class="btn btn-primary" style="background:#ff696e;width:250px;">Add To Cart</button>
          
          </div>
          </form>
          </div>
        </div>';
    }

    ?>
    </div>
    </div>
  </div>
 </section>
 <br><br>
 <!--------------------------------kitchen product----------------------------------->
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
  $sql="SELECT * FROM `product` WHERE pcategory='Kitchen Product' LIMIT 5";
   $result=$conn->query($sql);
   ?>
 <section>
       <div class="title-box">
              <h2>Kitchen Product</h2>
          </div>
              <div class="side_btn">
              <a href="detailpdt3.php?type=Kitchen Product" class="btn btn-sm" id="myBtn" style="background: #00ffff">See More</a>
           </div>
  <!-- Swiper -->
  <div class="row">
   <div class="swiper-container">
       <div class="swiper-wrapper">
        
        <?php
           while($row=$result->fetch_assoc()){
           echo '
           <div class="col-sm-3">
           <div class="swiper-slide">
            <div class="slider-box">
         
        <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
            <form action="manage_cart.php" method="POST">
          <div class="img-box">
         <a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
          </div>
          <p class="detail">'.$row["ptitle"].'
          <a href="detail2.php?id='.$row["id"].'" class="price" alt="'.$row["ptitle"].'" >Rs. '.$row["price"].'</a>
          </p>
          
          <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
          
          <button type="submit" name="add_to_cart" class="btn btn-primary" style="background:#ff696e;width:250px;">Add To Cart</button>
          
          </div>
          </form>
          </div>
        </div>';
    }

    ?>
        </div>
    </div>
  </div>
 </section>
 <br><br>
 <!------------------------kindle books--------------------------------------------->
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
  $sql="SELECT * FROM `product` WHERE pcategory='Kindle Book' LIMIT 5";
   $result=$conn->query($sql);
   ?>
      <section>
       <div class="title-box">
              <h2>Kindle Books</h2>
          </div>
              <div class="side_btn">
           <a href="detailpdt3.php?type=Kindle Book" class="btn btn-sm" style="background: #00ffff" >See More</a>
           
           </div></a>
  <!-- Swiper -->
  <div class="row">
  <div class="swiper-container">
       <div class="swiper-wrapper">
        
        <?php
           while($row=$result->fetch_assoc()){
           echo '
           <div class="col-sm-3">
           <div class="swiper-slide">
             <div class="slider-box">
         
        <form  action="manage_wlist.php" method="POST">
         <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
        <button type="submit" name="wishlist" class="time" style="border:transparent; background:transparent;"><span class="glyphicon glyphicon-heart"></span></button>
       </form>
            <form action="manage_cart.php" method="POST">
          <div class="img-box">
         <a href="detail2.php?id='.$row["id"].'"><img src="vender-admin/image/'.$row["image"].'" ></a>
          </div>
          <p class="detail">'.$row["ptitle"].'
          <a href="detail2.php?id='.$row["id"].'" class="price" alt="'.$row["ptitle"].'" >Rs. '.$row["price"].'</a>
          </p>
          
          <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
         <input type="hidden" name="user_id" value="'.$_SESSION["id"].'">
         <input type="hidden" name="image"  value="'.$row["image"].'">
          
          <button type="submit" name="add_to_cart" class="btn btn-primary" style="background:#ff696e;width:250px;">Add To Cart</button>
          
          </div>
          </form>
          </div>
        </div>';
    }

    ?>
       </div>
    </div>
  </div>>
 </section>
 <br><br>
<!--------------------website features------------------------------->

  <section class="website-features">
      <div class="container">
          <div class="row">
              <div class="col-md-3 feature-box">
                  <img src="New folder/stamp1.jpg">
                  <div class="feature-text">
                      <p><b>100% Original items</b> are available at company</p>
                  </div>
              </div>
               <div class="col-md-3 feature-box">
                  <img src="New folder/arrow.png">
                  <div class="feature-text">
                      <p><b>Return within 30 days</b> of receiving your order.</p>
                  </div>
              </div>
               <div class="col-md-3 feature-box">
                  <img src="New folder/delivery.png">
                  <div class="feature-text">
                      <p><b>Get free delivery for every</b> order on more than price.</p>
                  </div>
              </div>
               <div class="col-md-3 feature-box">
                  <img src="New folder/online payment.png">
                  <div class="feature-text">
                      <p><b>Pay online through multiple</b>option(card payment-net banking)</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

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
                     <img src="New Folder/AppStoreLogo.png" width="40%" height="30%">
                 </div>
         </div>
         <hr>
         <p class="copyright">Copyright @2020 All rights reserved</p>
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

      <!-- Swiper JS -->
  <script src="package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 10,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>