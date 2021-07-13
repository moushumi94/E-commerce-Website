<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment page</title>
	 <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet"  href="style.css">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #000;
  background-color: #f1f1f1;
  width: 30%;
  height: 64vh;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color:greenyellow;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: 1px solid #000;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color:lawngreen;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color:lawngreen;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #000;
  width: 50%;
  border-left: none;
  height: 64vh;
}
h3{
	padding-left: 30%;
}
 input[type=text]{
 	width: 80%;

 }
 input[type=number]{
 	width: 50%;

 }
    .close{
   
    color: white !important;
    text-align: center;
    font-size: 30px;
  }
 @media only screen and (max-width:980px){
    h3{
      padding-left: 10%;
    }
    .tab{
      margin-left: 10%;
      height: 84vh;
    }
    .tabcontent {
          height: 84vh;
    }
    .btn-success{
      margin-left: 40%;
    }
  }
 
</style>
</head>
<body>
   <?php
   include "header.php";
  ?>
  <!-----------------------content----------------------------------->
      <h2><center><b style="color:red;">Select Payment Method </b></center></h2><br>
   <?php "dbconn.php" ?>
   <div class="row">
   <div class="col-md-offset-2 col-md-10">  

<div class="tab">
  
  <button class="tablinks" onclick="openCity(event, 'CREDIT/DEBIT CARD')" id="defaultOpen">CREDIT/DEBIT CARD</button>
  <button class="tablinks" onclick="openCity(event, 'PHONEPE/GOOGLE PAY/BHIM UPI')">GOOGLE PAY/BHIM UPI</button>
  <button class="tablinks" onclick="openCity(event, 'PAYTM/WALLET')">PAYTM/WALLET</button>
  <button class="tablinks" onclick="openCity(event, 'NET BANKING')">NET BANKING</button>
  <button class="tablinks" onclick="openCity(event, 'EMI')">EMI</button>
  <button class="tablinks" onclick="openCity(event, 'Have a Gift Card?')">Have a Gift Card?</button>
</div>



<div id="CREDIT/DEBIT CARD" class="tabcontent">
  <h3>CREDIT/DEBIT CARD</h3><br><br>
<input type="text" class="form-control" id="usrname" placeholder="Card Number" name="email" required><br>
  <input type="text" class="form-control" id="usrname" placeholder="Name on Card" name="email" required><br>
  <input type="text" class="form-control" id="usrname" placeholder="Valid Thru(MM/YY)" style="width: 50%;" name="email" required><br>
  <input type="text" class="form-control" id="usrname" placeholder="CVV" name="email" style="width: 50%;" required><br><br>
    <label><input type="checkbox" value="" checked>Save this card for faster payment</label> 
</div>

<div id="PHONEPE/GOOGLE PAY/BHIM UPI" class="tabcontent">
  <h3> PAY using UPI</h3>
   <label><input type="radio" value="" >Phone Pay</label><br><br><br>
    <label><input type="radio" value="" >Google Pay</label><br><br><br> 
     <label><input type="radio" value="" >Other UPI</label> <br><br><br><br><br><br>
     <label><input type="checkbox" value="" checked>Save this card for faster payment</label> 
</div>

<div id="PAYTM/WALLET" class="tabcontent">
  <h3>Select WALLET to pay </h3><br>
  <label><input type="radio" value="" >PayTM</label><br>
  <label><input type="radio" value="" >PayZapp</label><br>
  <label><input type="radio" value="" >Mobikwik</label><br>
  <label><input type="radio" value="" >Airtel Money</label><br>
  <label><input type="radio" value="" >PayPal</label><br>
  <label><input type="radio" value="" >FreeCharge</label><br>
  <label><input type="radio" value="" >OlaMoney (postpaid + wallet)</label><br><br><br><br><br>
  <label><input type="checkbox" value="" checked>Save this card for faster payment</label>
</div>

<div id="NET BANKING" class="tabcontent">
  <h3>NET BANKING</h3>
  <label><input type="radio" value="" >Axis Bank</label><br><br>
  <label><input type="radio" value="" >HDFC Bank</label><br><br>
  <label><input type="radio" value="" >ICICI Bank</label><br><br>
  <label><input type="radio" value="" >Kotak</label><br><br>
  <label><input type="radio" value="" >SBI</label><br><br>
  <label><input type="radio" value="" >Other Bank</label><br><br><br><br><br>
  <label><input type="checkbox" value="" checked>Save this card for faster payment</label>
</div>

<div id="EMI" class="tabcontent">
  <h3>Select EMI Option</h3>
  <label><input type="radio" value="" >Credit Card/HDFC Debit Card EMI</label><br><br>
  <label><input type="radio" value="" >ZentMoney</label><br><br>
  <label><input type="radio" value="" >Cardless EMI</label><br><br><br><br><br>
  <label><input type="checkbox" value="" checked>Save this card for faster payment</label>

</div>

<div id="Have a Gift Card?" class="tabcontent">
  <h3>Have a Gift Card?</h3><br><br><br>
  <input type="text" class="form-control" id="usrname" placeholder="Type Gift Card Code" name="email" required><br><br><br><br><br>
  <label><input type="checkbox" value="" checked>Save this card for faster payment</label>
</div>
</div>
 </div> <br><br>   
 <div class="row">
   <div class="col-md-offset-5 col-md-10"> 
   	
      <button type="button" class="btn btn-success btn-sm " data-toggle="modal" data-target="#mybtn">place order</button>
       <div class="modal fade"  id="mybtn" role="dialog">
       <div class="modal-dialog">
          <!------Modal content----->
         <div class="modal-content">
           <div class="modal-header" style="padding: 35px 50px;">
             <button class="close" data-dismiss="modal">&times;</button>
             
           </div>
           <div class="modal-body" style="padding: 40px 50px">
            <p style="padding-left: 16%; font-size: 20px;"><b>Thank you for Shopping from<br> <span style="color:#000; padding-left: 20%;">Multibazer</span><br>your ordered will be delivered <br><span style="color:#000; padding-left: 20%;">in 2-3 days.</span></b></p>
           </div>
            
         </div>
       </div>
      </div>
 
</div>
</div>
    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>