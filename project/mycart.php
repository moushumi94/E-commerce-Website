<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>My cart</title>
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet"  href="stylee.css">
     <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		

             .footer{
  
  margin-top: 30%;
    background: #000;
    color:#fff;
   margin-left: 0px;
   margin-right: 0px;

  }

  .footer h1{
    font-size: 18px;
    
  }
  .footer p{
    font-size: 14px;
  }
  .footer.row{
   padding-right: 20px;
  }
  .glyphicon-trash{
    color:red;
  }

   @media only screen and (max-width:980px){
    .btn-primary{
      margin-left: 20%;
    }
    

  }
	</style>

</head>
<body>
<?php include"header.php" ?>
  <!-----------------------content----------------------------------->
      
      <br><h3><center><b style="color:red; font-size: 30px;">My Shopping Cart</b></center></h3><br>
   <?php include "dbconn.php"; ?>
  <div class="row">
    <div class="col-md-offset-1 col-md-10" id="crt_table">
      <table class="table" style="background: #fff">
        <thead>
          <th>Item Image</th>
          <th>Item Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php 
            $st=0;
            $user_id=$_SESSION['id'];
            $sel="SELECT * FROM `add-to-cart` WHERE user_id='$user_id'";
            $rs=$conn->query($sel);
            while ($row=$rs->fetch_assoc()) {
              $pid=$row['pid'];
              $selp="SELECT * FROM product WHERE id='$pid'";
              $rsp=$conn->query($selp);
              while($rowp=$rsp->fetch_assoc()){
                $st =$st+($row['qty']*$row['price']);
          ?>
          <tr>
            <td><img src="vender-admin/image/<?php echo $row["image"] ; ?>" height="100px" width="100px"></td>
            <td><?php echo $row["pname"] ; ?></td>
            <td>
              <form id="frm<?php echo $row["id"] ; ?>">
                <input type="hidden" name="cart_id" value="<?php echo $row["id"] ; ?>">
                <input type="number" name="qty" value="<?php echo $row["qty"] ; ?>" onchange="updcart(<?php echo $row["id"] ; ?>)"
                style="width:60px;" start="1">
              </form>
            </td>
            <td><?php echo $row["price"] ; ?></td>
            <td><?php echo $row["qty"]* $row["price"] ; ?></td>
            <td><form action="delete.php" method="POST">
              <input type="hidden" name="id" value='<?php echo $row["id"] ; ?>'>
              <input type="submit" name="submit" class=" btn btn-success" value="Delete">
            </form></td>
          </tr>
        
          <?php 
          }
        }
          ?>
          <tr>
            <th colspan="4">Sub Total</th>
            <th><?php echo $st; ?></th>
          </tr>
        </tbody>
      </table>
       
    </div>
  </div>
<div class="row">
  <div class="col-md-offset-4 col-md-8">
     <form  action="porder.php" method="POST">
         <input type="hidden" name="Item_id"  value="<?php echo $row["id"]; ?>">
         <input type="hidden" name="Item_Name" value="<?php echo $row["ptitle"]; ?>">
         <input type="hidden" name="Price"  value="<?php echo $row["price"]; ?>">
         <input type="hidden" name="user_id" value="<?php echo $SESSION["id"]; ?>">
         <input type="hidden" name="image"  value="<?php echo $row["image"]; ?>">
         <input type="hidden" name="total" value="<?php echo $st; ?>">
         <input type="hidden" name="addr" value="<?php echo $row["addr"]; ?>">
         <button type="submit" name="order" class="btn btn-primary" style="background:#ff696e;width:250px;">Place Order</button>
       </form>
  </div>
</div>
    <div class="footer">
         <div class="container text-center">
             <div class="row">
                 <div class="col-md-3">
                     <h1>Useful Links</h1>
                     <p>Privacy Policy</p>
                     <p>Terms of Use</p>
                     <p>Return Policy</p>
                     <p>Discount Coupons</p>
                 </div>
                 <div class="col-md-3">
                     <h1>Company</h1>
                     <p>About Us</p>
                     <p>Contact Us</p>
                     <p>Career</p>
                     <p>Affiliate</p>
                 </div>
                  <div class="col-md-3">
                     <h1>Follow Us On</h1>
                     <p>Facebook</p>
                     <p>YouTube</p>
                     <p>Linkedin</p>
                     <p>Twitter</p>
                 </div>
                  <div class="col-md-3" ">
                     <h1>Download App</h1>
                     <img src="New folder/AppStoreLogo.png" width="40%" height="30%">
                 </div>
         </div>
         <hr>
         <p class="copyright">copyright @2020</p>
     </div>
     </div>
  
  <script type="text/javascript">
    function updcart(id){
      $.ajax({
        url:'updqty.php',
        type:'POST',
        data:$("#frm"+id).serialize(),
        success:function(res){
          $("#crt_table").html(res);
        }
      });
    }
  </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>