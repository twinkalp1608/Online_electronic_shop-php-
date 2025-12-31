<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<?php include "adminSidebar.php"; ?>
<body>
    <form action="" method="post">
        <div class="col-sm-10">
            <div  style="margin-left: 300px; border: 5px; margin-top:100px;"  >
                <div class="form-group">
                    <label>Coupon Code:</label>
                    <br>
                    <input type="text" class="form-control" id="usr" name="coupon_code" >
                </div>
                <div class="form-group">
                    <label>Coupon Value:</label>
                    <br>
                    <input type="text" class="form-control" id="usr" name="coupon_value">
                </div>
                <div class="form-group">
                    <label>Coupon Type:</label>
                    <br>
                    <select name="coupon_type" class="form-control"  id="">
                        <option value="">Select</option>
                        <?php 
                            if($coupon_type=='Percentage'){
                                echo '<option value="Percentage" selected>Percentage</option>
                                <option value="Rupee" selected>Rupee</option>';
                            }
                            elseif($coupon_type=='Rupee'){
                                echo '<option value="Percentage" selected>Percentage</option>
                                <option value="Rupee" selected>Rupee</option>';
                            }
                            else{
                                echo '<option value="Percentage" selected>Percentage</option>
                                <option value="Rupee" selected>Rupee</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label> Cart Min Value:</label>
                    <br>
                    <input type="text" class="form-control" id="usr" name="cart_min_value">
                </div>
                <div class="form-group">
                    <label for="">status</label>
                    <input type="text" class="form-control" name="status">
                </div>
                <br>
                <input type="submit" class="form-control btn btn-primary" value="Added" name="add">
            </div>
        </div> 
    </form>
</body>
</html>

<?php
  if(isset($_REQUEST['add'])){
    $coupon_code=$_REQUEST['coupon_code'];
    $coupon_value=$_REQUEST['coupon_value'];
    $coupon_type=$_REQUEST['coupon_type'];
    $cart_min_value=$_REQUEST['cart_min_value'];
    $status=$_REQUEST['status'];
    
    $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql));
    $q="INSERT INTO coupon VALUES('null', '$coupon_code', '$coupon_value', '$coupon_type', '$cart_min_value', '$status')";
    if(mysqli_query($mysql,$q)){
        echo "<script>alert('Successfully added');
                        window.location.href='ViewCoupon.php';  
                    </script>" ;
    }
    else{
      die("could not add category".mysqli_error($mysql));
    }
  }

?>