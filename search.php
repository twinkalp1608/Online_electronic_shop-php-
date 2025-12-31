<?php  include "navbar.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container py-5">
    <div class="row gy-3">
        <?php
        if(isset($_POST['submit'])){
            $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
            $search=$_POST['search'];
            $q="select * from product where product_name like '%$search%' or category like '%$search%' or brand like '%$search%'";
            $query_run=mysqli_query($mysql,$q);
            $check_faculty=mysqli_num_rows($query_run)>0;
            if($check_faculty)
            {
                while($row=mysqli_fetch_array($query_run))
                {  
                ?>
                    <div class="col-lg-3 col-md-4">
                        <a href="ViewDetails.php?product_id=<?php echo $row['product_id'];?>" style="text-decoration:none;">
                            <div class="card bg-white h-100 d-flex p-4 flex-column">
                                <div class="content">
                                <h6 class="card-title" align="center" style="color:black;"><?php echo $row['brand'];?></h6>
                                    <h6 class="card-title" align="center" style="color:black;"><?php echo $row['category'];?></h6>
                                    <img src="AdminPanel/upload/<?php echo $row['image']?>" style="width:200px; height:200px; align:center;"alt="">
                                    <h4 class="card-title" align="center" style="color:black;"><?php echo $row['product_name'];?></h4>
                                    <h4 class="card-title" align="center" style="color:green;">Rs.<?php echo $row['selling_price'];?> <s class="text-danger"><?= $row['price'];?></s></h4>
                               </div>
                            </div>
                       </a>
                     </div>
                    <?php
                }
                
            }
            else{
                echo"No data Found";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
<?php
    ///$mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
    // if(isset($_POST['submit'])){
    //     $search=$_POST['search'];
    //     $q="select * from product where product_name='$search'";
    // }
?>
<?php include "footer.php";?>