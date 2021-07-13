<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Bootstrap form</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">
<link rel="stylesheet"  href="style.css">
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
    color: white !important;
    text-align: center;
    font-size: 30px;
  }
 /* .btn{
    background-color: #f08080;
  }
  .btnn{
    background-color: blue;
    border:1px solid blue;*/
  }
  .modal-footer{
    background-color: #808080;
  }
  .modal-footer a{
    color:#000; 
  }
</style>
</head>
<body>
  <div class="container">
    <!--------modal input-------->
    
    <div class="modal fade"  id="loginModal" role="dialog">
       <div class="modal-dialog">
          <!------Modal content----->
         <div class="modal-content">
           <div class="modal-header" style="padding: 35px 50px;">
             <button class="close" data-dismiss="modal">&times;</button>
             <h4><span class="glyphicon glyphicon-lock"></span>Login</h4>
           </div>
           <div class="modal-body" style="padding: 40px 50px">
             <form role="form" method="post" action="manage_login.php">
               <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span>Username</label>
                <input type="email" class="form-control" id="usrname" placeholder="Enter email" name="email" required>
               </div>
                <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Password</label>
                <input type="password" class="form-control" id="psw" placeholder="Enter password" name="pass" required>
               </div>
               <div class="checkbox">
                 <label><input type="checkbox" value="" checked>Remember me</label>
               </div>
               <button type="submit" class="btn btn-info btn-block" id="greenbox"><span class="glyphicon glyphicon-off"></span>Login</button>
             </form>
           </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-default pull-left" onclick="closebtn()">
                <span class="glyphicon glyphicon-remove"></span>cancel</button>
              <p>Not a member?<a href="#" data-dismiss="box" data-toggle="modal" data-target="#registerModal">Sign-up</a></p>
              <p>Forgot<a href="contact.php">Password?</a></p></button>
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