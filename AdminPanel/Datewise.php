<?php include "header.php";?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    background-image:url("../2.jpeg");
    background-repeat: no-repeat;
    background-size:cover;

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
</div>

<div id="main" >
  <h4 >Admin Dashbord</h4>
  <span style="font-size:30px;cursor:pointer;background-color:; " onclick="openNav()" ><i class="fa fa-home"></i></span>
  <div class="container mt-5">
        <div class="rows">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(39, 31, 31);">
                    <h3 class="text-white">Report on Date </h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="date" name="start_date" id="" value="<?php if(isset($_GET['start_date'])){ echo $_GET['start_date'];}?>" class="form-control">
                                </div> <br>
                                <div class="form-group">
                                    <input type="date" name="end_date" id="" value="<?php if(isset($_GET['end_date'])){ echo $_GET['end_date'];}?>" class="form-control">
                                </div>
                                <br>
                                <input type="submit" value="Filter" class="form-control btn btn-primary"><br>
                                <br><br>
                            </div>
                        </form>
                            <?php
                            $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                            if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
                                $start_date = $_GET['start_date'];
                                $end_date = $_GET['end_date'];
                        
                                // Query to fetch users within the specified date range
                                $query = "SELECT * FROM tblreg WHERE date BETWEEN '$start_date' AND '$end_date'";
                                $result = $mysql->query($query);
                                if ($result->num_rows > 0) {
                                    echo "<table class='table table-bordered'>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>";
                        
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                                <td>" . $row['user_id'] . "</td>
                                                <td>" . $row['name'] . "</td>
                                                <td>" . $row['email'] . "</td>
                                                <td>" . $row['contactno'] . "</td>
                                                <td>" . $row['address'] . "</td>
                                                <td>" . $row['date'] . "</td>
                                                <td>" . $row['status'] . "</td>
                                            </tr>";
                                    }
                                    echo "</table>";
                                } else {
                                    echo "No users found within the specified date range.";
                                }
                            }
                        
                            ?>

                    </div>
                </div>
            </div>
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

