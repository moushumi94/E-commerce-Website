 <?php
   
        
        if($_POST['ImageBtn'])
             {
                for($i = 0; $i < count($_FILES['ImageUpload']['name']); $i++)
             	   {
                        $image_name[$i] = $_FILES['ImageUpload']['name'][$i];

                        $image_temp_name = $_FILES['ImageUpload']['tmp_name'][$i];
                        $image_type = $_FILES['ImageUpload']['type'][$i];
                        $image_size = $_FILES['ImageUpload']['size'][$i];
                        $folder = "image/";

              //echo $image_name . " " . $temp_name ." " . $image_type . " " . $image_size;

             if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/jpeg" || strtolower($image_type) == "image/png")
                 {
                  if ($image_size <= 1000000) 
                  {

                    $folder = $folder. $image_name[$i];
                    move_uploaded_file($image_temp_name,$folder);
                      echo "<script>alert('Image Inserted..')</script>";
                   
                   
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
   $ptitle=$_POST["ptitle"];
   $pbrand=$_POST["pbrand"]; 
   $pQty=$_POST["pQty"];
   $price=$_POST["price"] ;
   $pcategory=$_POST["pcategory"]; 
   $description=$_POST["description"];
   $Vaddr=$_POST["Vaddr"];
   

 $sql="INSERT INTO product(`ptitle`,`pbrand`,`pQty`,`price`,`pcategory`,`description`,`image`,`image2`,`image3`,`Vaddr`)
         VALUES ('".$ptitle."','".$pbrand."','".$pQty."','".$price."','".$pcategory."','".$description."','".$image_name[0]."',
         '".$image_name[1]."','".$image_name[2]."','".$Vaddr."')";
   echo $sql;
   $query=$conn->query($sql);
 
   
   
   if(!$query)
   {
   echo '<script>alert("Data not updated '.$conn->error.'");  window.location="productlist.php";</script>';
   }
   else
   {
   echo'<script>alert("Data Updated successfully");  window.location="productlist.php";</script>';
   }
   $conn->close();
  // header("location:index.php");
   ?>