<?php
   // Start the Session
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">
<link rel="stylesheet"  href="style.css">

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

 h5, p , .btn-in , .btn-on {
    margin-left:10px;
   color: #000;
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
  	margin-top: 21px;
  position: -webkit-sticky;
  position:fixed;
  
  width: 400px;
  
  
}
 @media only screen and (max-width:980px){
  .col-md-7{
    margin-left: 15px;
  }
  p{
    padding-left: 20px;
  }
 }

 .col-md-7{
 	float: right;
 }
  .single-product .text{
  font-size: 21px;
 }
 .single-product h2{
  margin-top: 0px;
 }
 .single-product .glyphicon{
 	color: #00ffff;
 }
 
 .single-product .price{
 	color: #000;
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
	background-color: #00ffff;
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
	border:1px solid #00008B;
	color:#00008B;
	font-size: 18px;
 	font-weight: bold;
 	text-decoration: none;
}

.single-product .btn-primary:hover{
	color:#f08080;
	background: #fff;
  border:1px solid #f08080;
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
	color:#DC143C ;
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
   
  .carousel-inner> .item > img,
  .carousel-inner> .item > img {
    width: 100%;
    margin:auto;
    height:90vh;
  }
	
</style>
</head>
<body>
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

  $sql="SELECT * FROM `product` WHERE id=".$_SESSION["pid"];
   $result=$conn->query($sql);
   $row=$result->fetch_assoc();

  ?> 
<section class="single-product">
    <div class="container">
        <div class="row">
        
           
          
         <div class="col-md-5">
                   <div id="myCarousel" class="carousel slide sticky" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" ></li>
          <li data-target="#myCarousel" data-slide-to="2" ></li>
          
            </ol>
            
        <div class="carousel-inner">
          
          <div class="item active">
            <img src="vender-admin/image/<?php echo $row["image"]; ?>" >
          </div>
          <div class="item">
            <img class="responsive-img"  src="vender-admin/image/<?php echo $row["image2"]; ?>" width="50%" alt="first slide">
          </div>
          <div class="item">
            <img class="responsive-img"  src="vender-admin/image/<?php echo $row["image3"]; ?>" width="50%" alt="first slide">
          </div>
          </div>
             <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">previous</span></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                
              </span><span class="sr-only">Next</span></a>
      </div>
         </div>
              <div class="col-md-7">
                 <p class="new-arrival text-center">NEW</p> 
                 
                 <h2><b><?php echo $row["pbrand"];?></b><br><span class="text"><?php echo $row["ptitle"];?></span></h2>
                  
                  <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star-empty"></span>
                 <span class="glyphicon glyphicon-star-empty"></span>

 <p class="price"><?php echo "Rs ".$row["price"]; ?> &nbsp;<del style="color:#696969;"><?php echo "Rs ".$row["price"]*1.1; ?></del>&nbsp<span style="color: #ff8c00">10% Off</span></p>
                 
                 <p><b>Availability:</b> In stock</p>
                    
                   <?php 
                   if($row["pcategory"]=="Cloth")
                   echo '<label><b>SELECT SIZE</b></label>
                 <a href=""><button type="text" class="btn btn-default">Size Chart &nbsp;
                    <span class="glyphicon glyphicon-chevron-right"></span></button></a><br><br>
                    <div class="size-btn">
                        <ul>
                          <li><a href="#"> XS </a></li>&nbsp;&nbsp;&nbsp;  
                          <li> <a href="#"> S </a></li> &nbsp;&nbsp;&nbsp; 
                           <li> <a href="#"> M </a></li>&nbsp;&nbsp;&nbsp;  
                           <li> <a href="#"> L </a></li> &nbsp;&nbsp;&nbsp; 
                          <li>  <a href="#"> XL  </a></li>&nbsp;&nbsp;&nbsp; 
                          <li>  <a href="#"> XXL </a></li> &nbsp;&nbsp;&nbsp; 
                        </ul>
                    </div>';
                    ?>
                    <br>
                <br>
                 <label><b>Quantity</b></label>
                 <select>
                    <option>0</option>
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                 </select>
                 <br><br>
                  <a href="#" type="button" class="btn btn-primary"> Add to Cart</a>
                  <a href="#" type="button" class="btn btn-warning"> Wishlist</a>
                  
                  <br><br><br>
                  
                  <label><b>BEST  OFFERS</b><br></label>
                <ul>
                    <li>This product is already at its best price</li>
                   </ul><hr>
                
                 <label>PRODUCT DETAILS</label>
                 <p><?php echo $row["description"]; ?></p>
                  
               
            <br><hr>
            <div class="Pincode-check">
            <label>DELIVERY OPTION</label><br>
            <input type="text" placeholder="Enter Pincode"><br>
            <p><?php echo $row["Vaddr"]; ?></p>
      
   
            
           </div>
           </div>
          
        </div>
            </div>
       </div>

              </div>
              

            </div>
            </div>
    

        </section>
        


        <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
        </body>
        </html>