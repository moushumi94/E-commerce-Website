<?php
session_start();

include "dbconn.php";

   if(isset($_REQUEST['submit'])){
    $query ="DELETE FROM `add-to-cart` WHERE id = {$_REQUEST['id']}";
    if(mysqli_query($conn,$query))
{
      $_SESSION["cart_qty"] -=1;
    $sql="UPDATE `users` set `cart_qty`=".$_SESSION["cart_qty"]." WHERE id=".$user_id;
 echo $sql;
   $query=$conn->query($sql); 
   
    echo '<script>alert("Record deleted successfully"); window.location="mycart.php";</script>';
  
  
} else {

  echo '<script>alert("Record not deleted "); window.location="index.php";</script>';

}
}

?>