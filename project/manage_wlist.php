<?php
session_start();

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
 $sql="INSERT INTO `wishlist`(`pname`,`price`,`user_id`,`pid`,`image`)
 VALUES('".$Item_Name."',".$Price.",".$user_id.",".$id.",'".$image."')";
 echo $sql;
   $query=$conn->query($sql);

 if(!$query)
   {
   echo '<script>alert("Data not updated '.$conn->error.'");  window.location="index.php";</script>';
   }
   else
   {
    $_SESSION["wish_qty"] +=1;
    $sql="UPDATE `users` set `wish_qty`=".$_SESSION["wish_qty"]." WHERE id=".$user_id;
 echo $sql;
   $query=$conn->query($sql);
   echo'<script>alert("Data Updated successfully");  window.location="mywishlist.php?pid='.$id.'";</script>';
   }
   $conn->close();
  // header("location:index.php");
   ?>