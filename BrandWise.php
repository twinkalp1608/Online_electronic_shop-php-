<?php include "navbar.php"?>
<?php 

    $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
    if(isset($_GET['brand'])){
        $brand=$_GET['brand'];
        //$q="select * from product where category='$category'";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<style>
    
    .card{
        
        margin:0 10px;
        box-shadow:0 0 5px  rgba(0,0,0,.1);
    }

    .card img{
        display:block;
        border-radius:5px;
        transition:1s;
    }

    .card:hover{
        transform:scale(1.1);
        z-indesx:2;
    }
</style>

<body>
    <div class="container py-5">
    <div class="col-md-12">                                
            <div class="border">
                <div class="card-header">
                    <h4>price</h4>
                </div>
                <div class="">
                    <form action="" method="get">
                    <div class="row">
                        <input type="hidden" name="brand" value="<?php echo $_GET['brand'];?>">
                        <div class="col-md-4">
                            <label for="">Start Price</label>
                            <input type="text" name="start_price" value="<?php if(isset($_GET['start_price'])){ echo $_GET['start_price'];}else{echo "100";}?>" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">End Price</label>
                            <input type="text" name="end_price" value="<?php if(isset($_GET['end_price'])){ echo $_GET['end_price'];}else{echo "200000";}?>" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">Click</label><br>
                            <input type="submit" value="Filter" class="btn btn-primary">        
                        </div>
                    </div>
                    </form>
                    <br>
                </div>
            </div>                
        </div>
        <br><br>
        <div class="row gy-3">
            <?php
                $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                //$q="select * from product where brand='$brand'";
                if(isset($_GET['start_price']) && isset($_GET['end_price']) )
                {
                    // $category=$_GET['category'];
                    $start_price=$_GET['start_price'];
                    $end_price=$_GET['end_price'];
                    $q="SELECT * FROM product WHERE brand='$brand' and  selling_price BETWEEN $start_price AND $end_price ";
   
                }
                else{
                    $q="select * from product where brand='$brand'";
                }
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
                                    <div class="content" >
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
                else
                {
                    echo"No data Found";
                }

            ?>
            
        </div>
    </div>
</body>
</html>
<?php include "footer.php";?>