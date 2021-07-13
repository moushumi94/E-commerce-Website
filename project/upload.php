<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<?php
	 error_reporting(0);
	?>
<form action="" method="post" enctype="multipart/form-data">
        <label>Select image to upload:</label>
          <input type="file" name="ImageUpload" required><br><br>
          <input type="submit" value="Upload " name="UploadBtn">
         </form>
         <?php
             if(isset($_POST['UploadBtn']))
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
                 	  echo "<img src ='$folder' height='200px' width='200px'>";
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

         ?>
</body>
</html>