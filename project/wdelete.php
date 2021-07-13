<?php
session_start();

include "dbconn.php";

   if(isset($_REQUEST['submit'])){
    $query ="DELETE FROM `wishlist` WHERE id = {$_REQUEST['id']}";
    if(mysqli_query($conn,$query))
{
      $_SESSION["wish_qty"] -=1;
    $sql="UPDATE `users` set `wish_qty`=".$_SESSION["wish_qty"]." WHERE id=".$user_id;
 echo $sql;
   $query=$conn->query($sql); 
   
    echo '<script>alert("Record deleted successfully"); window.location="mywishlist.php";</script>';
  
  
} else {

  echo '<script>alert("Record not deleted "); window.location="index.php";</script>';

}
}

?>