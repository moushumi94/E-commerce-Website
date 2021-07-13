<?php
   // Start the Session
   session_start();
   ?>
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
    $altnum=$_POST["altnum"];
    $dt=date('r');

  

 $sql="UPDATE users set fname='".$fnm."',email='".$email."',gender='".$gen."',addr='".$addr."',mob='".$mob."', altnum='".$altnum."' where id=".$_SESSION["id"];
 
   
   echo $sql;
   $query=$conn->query($sql);
   if(!$query)
   {
   echo '<script>alert("Data not updated '.$conn->error.'"); window.location="profile1.php";</script>';
   }
   else
   {
   echo'<script>alert("Data Updated successfully"); window.location="profile1.php";</script>';
   }
   $conn->close();
  // header("location:index.php");
   ?>