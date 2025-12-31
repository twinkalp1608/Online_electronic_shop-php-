<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
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
  transition: margin-left .5s;
  padding: 16px;
  min-height:100vh;
    
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
    <img src="../profile.jpg" style="margin-left:50px;" width="120" height="120" alt="Welcome to Ice Cream Parlour" class="rounded"> 
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
  <a href="ViewAboutus.php">AboutUs</a>
</div>

<div id="main" >
  <h2>Admin Dashbord</h2>
  <span style="font-size:30px;cursor:pointer;background-color:;" onclick="openNav()"><i class="fa fa-home"></i></span>
  <form action="" method="post">
  <div class="col-sm-10">
    <div class="card">
      <div class="card-header" style="background-color:black;" >
          <h3 class="text-white" align=center >Add Brands </h3>
        </div>
        <div class="card-body">
            <div>
              <div class="form-group">
                  <label>Brand Name:</label>
                  <br>
                  <input type="text" class="form-control" id="usr" name="brand_name" placeholder="Enter Brand Name" required>
              </div>
              <br>
                <input type="submit" class="form-control btn btn-primary" value="Brand Added" name="add">
            </div>
          </div>
        </div>
   
    </div>
     
    </form>
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


<?php
  if(isset($_REQUEST['add'])){
    $brand=$_REQUEST['brand_name'];
    $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql));
    $check_query="select brand_name from brand where brand_name='$brand'";
    $check_query_run=mysqli_query($mysql,$check_query);
    if(mysqli_num_rows($check_query_run)>0)
    {
      echo "<script>alert('brand already exits');
      window.location.href='ViewBrands.php';  
      </script>";
    }
    else
    {
      $q="insert into brand values(null,'$brand')";
      if(mysqli_query($mysql,$q)){
        header("location:ViewBrands.php");
        //echo "added";
      }
      else{
        die("could not add brand".mysqli_error($mysql));
      }
    }
  }

?>