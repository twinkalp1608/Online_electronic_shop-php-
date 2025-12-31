<?php
include "header.php";
$mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 

//session_start();
if(!isset($_SESSION['id'])){
  header("location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
body {
    
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}



.background{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    min-height:100vh;
    
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition:margin-left .5s;
  padding: 16px;
  min-height:50vh;
    
   

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
<div class="side-header">
    <img src="../profile.jpg" style="margin-left:50px;" width="120" height="120" alt="" class="rounded"> 
    <h5 style="margin-top:10px; margin-left:50px; color:white;">Hello, Admin</h5>
</div>
<hr>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Dashbord.php">Dashbord</a>
  <a href="ViewCustomer.php">User</a>
  <a href="ViewCategory.php">Category</a>
  <a href="ViewBrands.php">Brand</a>
  <a href="ViewProduct.php">Product</a>
  <a href="orders.php">Orders</a>
  <a href="ViewFeedback.php">Feedback</a>
  <a href="ViewContactus.php">ContactUs</a>
  <a href="qtyReport.php">Quantity Wise</a>
  <a href="Revenue.php">Per product Revenue</a>
  <a href="totalRevenue.php">Total Revenue</a>
  <a href="maximum.php">Maximum Product sale</a>
  <a href="Datewise.php">Datewise</a>
</div>

<div id="main"  style="background-image:url('../theme.jpeg');
    background-repeat: no-repeat;
    background-size:cover; height: 700px;">
  <h4 style="color:white">Admin Dashbord</h4>
  <span style="font-size:30px;cursor:pointer;background-color:; color:white;" onclick="openNav()" ><i class="fa fa-home"></i></span>
  <div class="row">
      <div class="col-sm-3">
        <a href="ViewCustomer.php" style="text-decoration:none;">
              <div class="card" style="background-color: ; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                  <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                  <h4 style="color:black;">Total Users</h4>
                  <h5 style="color:black;">
                  <?php
                      $sql="SELECT * from tblreg ";
                      $result=$mysql-> query($sql);
                      $count=0;
                      if ($result-> num_rows > 0){
                          while ($row=$result-> fetch_assoc()) {
                  
                              $count=$count+1;
                          }
                      }
                      echo $count;
                  ?></h5>
              </div>
        </a>
        </div>
        <div class="col-sm-3">
          <a href="ViewCategory.php" style="text-decoration:none;">
                <div class="card" style="background-color:; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:black;">Total Categories</h4>
                    <h5 style="color:black;">
                    <?php
                        $sql="SELECT * from category ";
                        $result=$mysql-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="ViewBrands.php" style="text-decoration:none;">
                <div class="card" style="background-color:; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:black;">Total Brands</h4>
                    <h5 style="color:black;">
                    <?php
                        $sql="SELECT * from brand ";
                        $result=$mysql-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="ViewProduct.php" style="text-decoration:none;">
                <div class="card" style="background-color:; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                    <i class="fa fa-th" style="font-size: 70px;"></i>
                    <h4 style="color:black;">Total Product</h4>
                    <h5 style="color:black;">
                    <?php
                        $sql="SELECT * from product";
                        $result=$mysql-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="orders.php" style="text-decoration:none;">
                <div class="card" style="background-color: ; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                    <i class="fa fa-th-list" style="font-size: 70px;"></i>
                    <h4 style="color:black;">Total Orders</h4>
                    <h5 style="color:black;">
                    <?php
                        $sql="SELECT * from `order`";
                        $result=$mysql-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="ViewFeedback.php" style="text-decoration:none;">
                <div class="card" style="background-color: ; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                    <i class="fa fa-th-list" style="font-size: 70px;"></i>
                    <h4 style="color:black;">Total Feedbacks</h4>
                    <h5 style="color:black;">
                    <?php
                        $sql="SELECT * from tbl_fb";
                        $result=$mysql-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="ViewContactus.php" style="text-decoration:none;">
                <div class="card" style="background-color:; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                    <i class="fa fa-th-list" style="font-size: 70px;"></i>
                    <h4 style="color:black;">ContactUs </h4>
                    <h5 style="color:black;">
                    <?php
                        $sql="SELECT * from `order`";
                        $result=$mysql-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="orders.php" style="text-decoration:none;">
                <div class="card" style="background-color:; padding:20px; margin: 10px; border-radius: 10px; box-shadow: 8px 5px 5px #3B3131;">
                    <i class="fa fa-th-list" style="font-size: 70px;"></i>
                    <h4 style="color:black;">admin</h4>
                    <h5 style="color:black;">
                    <?php
                        $sql="SELECT * from login";
                        $result=$mysql-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
          </a>
        </div>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 
