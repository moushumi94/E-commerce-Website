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
 $total=$_POST["total"];

echo $user_id;
echo $Item_Name;
 $sql="INSERT INTO `place_order`(`pname`,`price`,`user_id`,`pid`,`image`,`Totalp`)
 VALUES('".$Item_Name."',".$Price.",".$user_id.",".$id.",'".$image."',".$total.")";
 echo $sql;
   $query=$conn->query($sql);

 if(!$query)
   {
  /* echo '<script>alert("Data not updated '.$conn->error.'");  window.location="index.php";</script>';*/
   }
   else
   {
 
   echo'<script>alert("Data Updated successfully");  window.location="porder.php?pid='.$id.'";</script>';
   }
   $conn->close();
  // header("location:index.php");
   ?>