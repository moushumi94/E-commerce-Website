<!DOCTYPE html>
<html>
<head>
<title>Bootstrap form</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<style>
  .modal-header, h4, .close{
    background-color: #4169E1;
    color: white !impotant;
    text-align: center;
    font-size: 30px;
  }
  .btn{
    background-color: #f08080;
  }
  .btnn{
    background-color: blue;
    border:1px solid blue;
  }
  .modal-footer{
    background-color: #808080;
  }
  .modal-footer a{
    color:red; 
  }
</style>
</head>
<body>
  <div class="container">
    <!------Modal Register---------->
      <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="overflow-y: scroll; max-height: 85%; margin-top:50px; margin-bottom: 50px; ">
          <!---------------model content------------------>
          <div class="modal-content">
           <div class="modal-header" style="padding: 35px 50px;">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4><span class="glyphicon glyphicon-lock"></span>Register</h4>
           </div>
           <div class="modal-body" style="padding: 40px 50px">
             <form role="form" method="post" action="manage_reg.php">
              <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span>Full Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fname" required>
               </div>
               <div class="form-group">
                  <label for="email"><span class="glyphicon glyphicon-envelope"></span>Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
               </div>
               <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Password</label>
                <input type="password" class="form-control" id="psw" placeholder="Enter password" name="pass" required>
               </div>
               <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Retype Password</label>
                <input type="password" class="form-control" id="psw" placeholder="Enter password again" name="repassword" required>
               </div>
               <div class="form-group">
                  <label for="gender"><span class="glyphicon glyphicon-user"></span>Gender</label>
                  <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="addr"><span class="glyphicon glyphicon-eye-open"></span>Address</label>
                <textarea class="form-control" id="addr" name="addr" placeholder="Enter Address" rows="3" required=""></textarea>
               </div>
               <div class="form-group">
                  <label for="mob"><span class="glyphicon glyphicon-phone"></span>Mobile No.</label>
                <input type="text" class="form-control" id="mob" placeholder="Enter Mobile No." name="mob" required>
               </div>
               <button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-copy">
                </span></button>
             </form>
           </div>
            <div class="modal-footer">
              <button type="submit" class="btnn btn-lg btn-default pull-right" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove"></span>
              <p>Already a member?<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Login</a></p>
              <p>Forgot<a href="contact.php">Password?</a></p></button>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>