
<?php require "Rangedisplay.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
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
<?php include "navbar.php"?>
<body>
    <div class="container py-5">
        <div class="row gy-3">
            <?php
                $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                $q="select * from product";
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