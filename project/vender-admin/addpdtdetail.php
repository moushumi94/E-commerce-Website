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
 
 $Item_Name=$_POST["$pname"];
 $Price=$_POST["price"];

 $sql="INSERT INTO add-to-cart(`pname`,`price`)
 VALUES('".$Item_Name."','".$Price."')";
 echo $sql;
   $query=$conn->query($sql);

    if(!$query)
   {
   echo '<script>alert("Data not updated '.$conn->error.'");  window.location="viewAll.php";</script>';
   }
   else
   {
   echo'<script>alert("Data Updated successfully");  window.location="mycart.php";</script>';
   }
   $conn->close();
  // header("location:index.php");  