<!DOCTYPE html>
<html>
<head>
  <title>vender page</title>
  <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
  body{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    background: #A9A9A9;
  }
  
.top-nav-bar{
  height: 57px;
  top: 0;
  position: sticky;
  background:#000;
  margin-bottom: 20px;
  border-bottom: 4px solid #00ffff;
  z-index: 1;
}
.logo {
  height:40px;
  margin:9px 10px;
  font-size: 20px;
  padding-left: 10px;

}

.form-control{
  margin-top: 9px;
  margin-left: 20px;
  border:1px solid #00ffff !important;
  border-top-left-radius: 20px !important;
  border-bottom-left-radius: 20px !important;
  border-top-right-radius: 0px !important;
  border-bottom-right-radius: 0px !important;
     box-shadow:none !important; 
}
.input-group-text{
  width:42px;
  background: #00ffff !important;
  border:1px solid #00ffff !important;
  margin: 8.5px 10px 15px 0 !important;
  border-top-left-radius: 0px !important;
  border-bottom-left-radius: 0px !important;
  border-top-right-radius: 30px !important;
  border-bottom-right-radius: 30px !important;
    cursor: pointer;
    align-items: center;
}
.search-box{
  display: inline-flex;
  width:50%;
}
.glyphicon-search{
  color:#fff;
  padding: 6px 0px 0px 5px;
}
.menu-bar{
  width:40%;
  height:57px;
  float:right;
}
.menu-bar ul{
  display: inline-flex;
  float: right;
}
.menu-bar ul li{
  /*border-left: 1px solid #fff;*/
  list-style-type: none;
  padding: 16px 14px;
  text-align: center;
  /*background-color: #ff8c00;*/
  cursor:pointer;
  
}


.menu-bar ul li a{
  font-size: 15px;
  color:#00ffff;
  text-decoration: none;
}
 .menu-bar ul :hover{
  background-color: #000;
  color: #ff8c00;
}
.menu-bar ul ul{
  display: none;
}

@media only screen and (max-width:980px)
{
  .top-nav-bar{
    height:118px;
    border-bottom:0;
  }
  .search-box{
    width:100%;
  }
  .menu-bar{
    width:100%;
  }
  .menu-bar ul{
    margin: 10px 0;
    width: 100%;
  }
  .menu-bar ul li{
    height: 57px;
    width: 100%;
  }
}

  h5, p , .btn-in , .btn-on {
    margin-left:10px;
   color: #00ffff;
  }

  .btn-in{
  background: #00ffff;
  color: #000;
  

}
.btn-in:hover{
  background:red;
  color: #000;
}
.btn-on{
  background: #00ffff;
  color: #000;
 float:right;
  display:inline-flex;
   margin-left: 130px;
  margin-top:-11%;
  margin-right: 10%;
  margin-bottom: -30px;
  
}
.btn-on:hover{
  background:red;
  color: #000;
}
    .dropdown-menu{
                display:none;
                position:absolute;
                
                width: 260px;
                box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index:1;
                


            }
            .dropdown-menu a{
                display:block;
                color:#fff;
               text-align: left;
                text-decoration:none;
                line-height: 0px;

            }
           
            .dropdown:hover .dropdown-menu{
                display:block;

            }

            
  #content1{
    
    background-image: linear-gradient(red,yellow);
    list-style-type: none;
    margin-top: 4%;
  }
  #content2{
    background: yellow;
    background-image: linear-gradient(yellow,green);
    list-style-type: none;
    margin-top: 4%;
  }
  #sidebar{
       
       background-image: linear-gradient(blue,red);
       height:100vh;
  }
  #sidebar ul {
    list-style-type: none;
    margin-top: 20%;
    padding-left: 0px;
    padding-right: 0px;
    font-size: 19px;
    color: #000;
  }
 
#sidebar ul li,label{
  padding-left: 35px;
  padding-right: 0px;
}
#sidebar li a{
  text-decoration: none;
  background-image: linear-gradient(to right,#00ffff,blue);
  border-radius: 50%;
  padding: 5% 14%;
  color: #000;
}
.btn-info{
  margin-left: 40%;

}

.headerbox{
  background-image: linear-gradient(to right,blue,#00ffff);
  padding-left: 31%;
  font-size: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 50%;
}


</style>
</head>
<body>
  <div class="top-nav-bar">
        <div class="search-box">
           
             <a class="logo" href="#" style="color: #00ffff; text-decoration: none">MultiBazer</a>
            <input type="text" class="form-control">
            <div class="input-group-text"><span class="glyphicon glyphicon-search"></span></div>
        </div>
        <div class="menu-bar">
            <ul>
             <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-hand-right"></span> About</a></li>
                      <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> profile</a>
                      <ul class="dropdown-menu">
                         <h5><b>Welcome</b></h5>
                         <p>&nbsp;To access account and manage orders</p>
                       <a href="Modal.html"><button type="button" class="btn-in btn-sm" id="myBtn" data-toggle="modal"
                            data-target="#myModal">Sign Up</button></a>
                       <a href="C:\wamp\www\project\Modalbox.html"><button type="button" class="btn-on btn-sm " id="myBtn" data-toggle="modal" data-target="#myModal">LOG IN</button></a>
                            <hr>
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Coupons</a></li>
                            <li><a href="#">MultiBazer Credit</a></li>
                            <li><a href="#">Saved Cards</a></li>
                            <li><a href="#">Saved Addresses</a></li>
                        </ul></li>
                <li><a href="#"><span class="glyphicon glyphicon-heart"></span> Wishlist</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2 " id="sidebar">
      <ul>
        <label>V-ADMIN</label><hr><br>
        <li ><a href="profile.php">Dashboard</a> </li><br><br>
        <li><a href="">Productlist</a> </li><br><br>
        <li><a href=""> Add Product</a></li><br><br>
        <li><a href="">Manage User</a> </li><br><br>
        <li>&nbsp;&nbsp;<a href=""> Log Out</a></li>
      </ul>
    </div>
   <div class="col-sm-9" id="content">
      <div class="col-sm-6" id="content1"><br>
        <div class="headerbox"><b>CATEGORIES LIST</b></div><br>
         <table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th>
               <th>CATEGORIES</th>
               <th>COUNT</th>
             </tr>
           </thead> 
           <tbody>
             <tr>
               <td>1.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>2.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>3.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
         <div>
             <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">
          see more</button> <div id="demo" class="collapse"><br>
             <table class="table table-hover">
           <tbody>
             <tr>
               <td>4.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>5.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>6.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
                </div>
              </div>
           
      </div>
      <div class=" col-sm-6" id="content2"><br>
        <div class="headerbox"><b>&nbsp;&nbsp;&nbsp;&nbsp;BRAND LIST</b></div><br>
         <table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th>
               <th>CATEGORIES</th>
               <th>COUNT</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>2.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>3.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
         <div>
             <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">
          see more</button> <div id="demo1" class="collapse"><br>
             <table class="table table-hover">
           <tbody>
             <tr>
               <td>4.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>5.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>6.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
                </div>
              </div>

            </div>
          </div>
              <div class="row">
                <div class="col-sm-9">
               <div class=" col-sm-6" id="content2"><br>
                <div class="headerbox"><b>&nbsp;ORDERS LIST</b></div><br>
                  <table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th>
               <th>CATEGORIES</th>
               <th>COUNT</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>2.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>3.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
         <div>
             <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">
          see more</button> <div id="demo2" class="collapse"><br>
             <table class="table table-hover">
           <tbody>
             <tr>
               <td>4.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>5.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>6.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
                </div>
              </div>
                </div>
                <div class="col-sm-6" id="content1"><br>
                  <div class="headerbox"><b>&nbsp;SUBSCRIBERS</b></div><br>
                  <table class="table table-hover">
           <thead>
             <tr>
               <th>ID</th>
               <th>CATEGORIES</th>
               <th>COUNT</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>2.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>3.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
         <div>
             <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">
          see more</button> <div id="demo3" class="collapse"><br>
             <table class="table table-hover">
           <tbody>
             <tr>
               <td>4.</td>
               <td>Electronics</td>
               <td>20</td>
             </tr>
              <tr>
               <td>5.</td>
               <td>ladies Wear</td>
               <td>15</td>
             </tr>
              <tr>
               <td>6.</td>
               <td>Mens Wear</td>
               <td>26</td>
             </tr>
             </tbody>
         </table>
                </div>
              </div>
                </div>
              </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-9" id="content1"><br>
          <div class="headerbox"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          USER LIST</b></div><br>
        <table class="table table-hover">
          <thead><tr>
            <th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>EMAIL</th><th>CONTACT</th><th>ADDRESS</th><th>CITY</th></tr>
          </thead>
          <tbody><tr>
            <td>1.</td><td>deepa</td><td>Malik</td><td>Malikdeepa@gmail.com</td><td>98765432</td><td>Howrah</td><td>kolkata</td></tr>
          </tbody>
        </table>


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
   





