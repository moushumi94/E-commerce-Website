<?php
session_start(); ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Ecommerce Website</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>
<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>
<body >
    
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
 $id=$_POST["Item_id"];
 $Item_Name=$_POST["Item_Name"];
 $Price=$_POST["Price"];
 $user_id=$_POST["user_id"];
 $image=$_POST["image"];

echo $user_id;
 $sql="INSERT INTO `add-to-cart`(`pname`,`price`,`user_id`,`pid`,`image`)
 VALUES('".$Item_Name."',".$Price.",".$user_id.",".$id.",'".$image."')";
 
   $query=$conn->query($sql);

 if(!$query)
   
   
       
   {
   echo '<script>alert("Data not updated '.$conn->error.'");  window.location="index.php";</script>';
   }

     else
   {
    $_SESSION["cart_qty"] +=1;
    $sql="UPDATE `users` set `cart_qty`=".$_SESSION["cart_qty"]." WHERE id=".$user_id;
    $query=$conn->query($sql);
    
   echo'<script>  window.location="index.php";</script>';
   }
   $conn->close();
// header("location:index.php");
   ?>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>