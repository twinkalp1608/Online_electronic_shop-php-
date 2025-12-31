<?php include "header.php";?>
<?php
ob_start();
?>
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
  <a href="ViewAboutus.php">AboutUs</a>
</div>

<div id="main" >
  <h2>Admin Dashbord</h2>
  <span style="font-size:30px;cursor:pointer;background-color:; " onclick="openNav()" ><i class="fa fa-home"></i></span>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header" style="background-color: rgb(39, 31, 31);">
                    <h3 class="text-white" align=center>Add Product</h3>
        </div>
        <div class="card-body">
        <div class="col-sm-10">
            <div >
                <div class="form-group">
                    <label class="fw-bold">Product Name:</label>
                    <br>
                    <input type="text" class="form-control"  name="product_name" placeholder="Enter Product Name" required>
                </div>
                <div class="form-group">
                    <label class="fw-bold">Select Brand:</label>
                    <br>
                    <select class="form-control" name="brand" id="" required>
                        <?php
                            $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                            $brands=mysqli_query($mysql,"select * from brand");
                            while($b=mysqli_fetch_array($brands)){
                        ?>
                        <option  value="<?php echo $b['brand_name']?>"><?php echo $b['brand_name']?></option>
                        <?php } ?>
                    </select>    
                </div>
                <div class="form-group">
                    <label class="fw-bold">Select Category:</label>
                    <br>
                    <select class="form-control" name="category" id="" required>
                        <?php
                            $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                            $category=mysqli_query($mysql,"select * from category");
                            while($c=mysqli_fetch_array($category)){
                        ?>
                        <option  value="<?php echo $c['category_name']?>"><?php echo $c['category_name']?></option>
                        <?php } ?>
                    </select>    
                </div>
                <div class="form-group">
                    <label class="fw-bold">Orignal Price:</label>
                    <br>
                    <input type="number" class="form-control"  name="price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label class="fw-bold">Selling Price:</label>
                    <br>
                    <input type="number" class="form-control"  name="selling_price" placeholder="Enter Selling Price" required>
                </div>
                <div class="form-group">
                    <label class="fw-bold">Quantity:</label>
                    <br>
                    <input type="number" class="form-control"  name="qty" placeholder="Enter quantity" required>
                </div>
                <div class="form-group">
                    <label class="fw-bold" for="">Description</label>
                    <br>
                    <textarea name="description" id="" cols="10" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label class="fw-bold">Image:</label>
                    <br>
                    <input type="file" name="image" id="" class="form-control" required>
                </div>
                <input type="submit" class="form-control btn btn-primary" value="Added" name="add" ><br>
                <br><br><input type="reset" align="center" class=" btn btn-warning" value="Reset">
                
                <br>
        
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
        $product_name=$_REQUEST['product_name'];
        $brand=$_REQUEST['brand'];
        $category=$_REQUEST['category'];
        $price=$_REQUEST['price'];
        $selling_price=$_REQUEST['selling_price'];
        $qty=$_REQUEST['qty'];
        $description=$_REQUEST['description'];
        $image = $_FILES["image"]["name"];
        //$tempname = $_FILES["uploadfile"]["tmp_name"];
        if(file_exists("upload/".$_FILES["image"]["name"])){
            header("location:ViewProduct.php");
        }else{
            $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
            $q="insert into product values(null,'$product_name','$brand','$category','$price','$selling_price','$qty','$description','$image')";
            if(mysqli_query($mysql,$q)){
                move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$_FILES['image']['name']);
                header("location:ViewProduct.php");
                ob_end_flush();
            }
            else
            {
                    die("Error!!!".mysqli_error($mysql));
            }
        }

    }
?>