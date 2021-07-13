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
   $fnm=$_POST["fname"];
   $email=$_POST["email"];
   $pwd =$_POST["pass"];
   $pwd=md5($pwd);

    $gen=$_POST["gender"];
    $addr=$_POST["addr"];
    $mob=$_POST["mob"];
    $dt=date('r');

   if($gen=="Female")
   {
   $image="woman.jpg";
   }
   else
   {
   $image="man.jpg";
   }

 $sql="INSERT INTO users(`fname`,`gender`,`email`,`pwd`,`addr`,`mob`,`reg_date`,`image`)
   VALUES ('".$fnm."','".$gen."','".$email."','".$pwd."','".$addr."','".$mob."','".$dt."','".$image."')";
   echo $sql;
   $query=$conn->query($sql);
   if(!$query)
   {
   echo '<script>alert("Data not inserted '.$conn->error.'"); window.location="index.php";</script>';
   }
   else
   {
   echo'<script>alert("Registration successful...You can Login Now..."); window.location="index.php";</script>'; 
   }
   $conn->close();
  // header("location:index.php");
   ?>