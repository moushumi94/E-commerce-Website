<?php
   // Start the Session
   session_start();

   $id=$_POST["email"];
   $pass=$_POST["pass"];
   $pass=md5($pass);

  // include "dbconn.php";
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
   $sql="select id,fname,pwd from users where email='".$id."'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
        
   if($row["pwd"]==$pass){
   //set session variables

   $_SESSION["fname"]=$row["fname"];
   $_SESSION["id"]=$row["id"];
    $_SESSION["cart_qty"]=$row["cart_qty"];
   $_SESSION["wish_qty"]=$row["wish_qty"];
   echo '
       <script>alert("login successfully"); window.location="index.php";</script>';
   }
   else{
      
   echo'<script>alert("Invalid User Id or Password"); window.location="index.php";</script>';
   }
   }
   } else{
       
   echo '<script>alert("Invalid User Id"); window.location="index.php";</script>';
   }
   $conn->close();
   ?>