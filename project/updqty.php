<?php
session_start();
include("dbconn.php");

$cartid=$_POST['cart_id'];
$qty=$_POST['qty'];

$sql="UPDATE `add-to-cart` SET qty='$qty' WHERE id='$cartid'";
$conn->query($sql);


?>
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
                <input type="number" name="qty" value="<?php echo $row["qty"] ; ?>" onchange="updcart(<?php echo $row["id"] ; ?>)">
              </form>
            </td>
            <td><?php echo $row["price"] ; ?></td>
            <td><?php echo $row["qty"]* $row["price"] ; ?></td>
            <td><a href="delete.php?id='.$row["id"].'"><button type="submit" class="btn btn-success">Remove</button></a></td>
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