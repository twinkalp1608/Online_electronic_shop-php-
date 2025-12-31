<?php
$mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
// include "navbar.php";
include("function/userfunction.php");
include("authencticate.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<a href="index.php" class="btn btn-warning" style="margin:10px;">Back</a>
                 <div class="container py-5">
                    <h4>Your Wishlist</h4>
                        <div class="row gy-3">
                             <?php
                                $userId=$_SESSION['auth_user']['user_id'];
    
                                $q="SELECT  w.wishlist_id as wid , w.product_id, p.product_id as pid, p.product_name, p.image, p.selling_price
                                FROM wishlist w ,product p WHERE w.product_id=p.product_id AND w.user_id='$userId' ORDER BY w.wishlist_id DESC ";
                                $result=mysqli_query($mysql,$q);
                                if(mysqli_num_rows($result)>0){
                                    foreach($result as $row)
                                    {
                                        ?>
                                <div class="col-lg-3 col-md-4">
                                    <a href="ViewDetails.php?product_id=<?php echo $row['product_id'];?>" style="text-decoration:none;">
                                        <div class="card bg-white h-100 d-flex p-4 flex-column">
                                            <div class="content" >
                                            <img src="AdminPanel/upload/<?php echo $row['image'];?>" style="width:200px; height:200px; align:center;"alt="">
                                                <h4 class="card-title" align="center" style="color:black;"><?php echo $row['product_name'];?></h4>
                                                <h4 class="card-title" align="center" style="color:green;">Rs.<?php echo $row['selling_price'];?></h4>
                                                <a href="DeleteWishlist.php?wishlist_id=<?php echo $row['wid'];?>"class="btn btn-outline-danger" style="margin-left:70px;" >
                                                <ion-icon name="trash"></ion-icon>Remove</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>                                    
                                        <?php
                                        }
                                    }
                                    else
                            {
                                ?>
                                <div class="card card-body shadow text-center">
                                    <h4 class="py-3">Your Wishlist is Empty</h4>
                                </div>
                                <?php
                            }
                                    
                                ?>
                                
                               </div>
                               </div>
 
</body>
</html><?php include "footer.php";?>