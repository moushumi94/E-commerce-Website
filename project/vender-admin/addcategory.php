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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
    <form name="form1" action="imageup.php" method="post" enctype="multipart/form-data">
    	<label>Add Product</label><br>
          <input type="file" name="ImageUpload[]" class="btn btn-info" multiple required>
          <input type="hidden" name="user" value="<?php echo $id; ?>">
    </form>
</body>
</html>