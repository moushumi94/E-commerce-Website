<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname="mbazer";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

    $id = $_GET['id'];
    echo "$id";
    $query ="DELETE FROM product WHERE id = '".$id."'";
    if(mysqli_query($conn,$query))
{

    echo '<script>alert("Record deleted successfully"); window.location="productlist.php";</script>';
	
	
} else {

	echo '<script>alert("Record not deleted "); window.location="productlist.php";</script>';

}
?>