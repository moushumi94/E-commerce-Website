 <?php
   
        
        if($_POST['ImageBtn'])
             {
             	//print_r($_FILES['ImageUpload']);
             	$image_name = $_FILES['ImageUpload']['name'];
             	$temp_name = $_FILES['ImageUpload']['tmp_name'];
             	$image_type = $_FILES['ImageUpload']['type'];
             	$image_size = $_FILES['ImageUpload']['size'];
             	$folder = "images/";

             	//echo $image_name . " " . $temp_name ." " . $image_type . " " . $image_size;

             if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/jpeg" || strtolower($image_type) == "image/png")
                 {
                 	if ($image_size <= 1000000) 
                 	{

                 	  $folder = "images/" . $image_name;
                 	  move_uploaded_file($temp_name, $folder);
                 	  echo "<script>alert('File Uploaded Successfully')</script>";
                 	  echo "<br>";
                 	  echo "<img src ='$folder' height='500px' width='200px'>";
                 	}
                 	else
                 	{
                 		echo "<script>alert('Image should be less than 1MB')</script>";
                 	}

                 }
                 else
                 {
                 	echo "<script>alert('Image Format not supported')</script>";
                 }

             }


         
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
    

  

 $sql="UPDATE users set image='".$image_name."' where id=".$_POST["user"];
 
   
   echo $sql;
   $query=$conn->query($sql);
   if(!$query)
   {
   echo '<script>alert("Data not updated '.$conn->error.'");  window.location="profile1.php";</script>';
   }
   else
   {
   echo'<script>alert("Data Updated successfully");  window.location="profile1.php";</script>';
   }
   $conn->close();
  // header("location:index.php");
   ?>