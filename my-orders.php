<?php
include("navbar.php");
include("function/userfunction.php");
//include("authencticate.php");
//session_start();
if(!isset($_SESSION['auth']))
{
    echo "<script>alert('Login to Continue');
    window.location.href='login.php';  
    </script>" ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    
</head>
<body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<a href="index.php" class="btn btn-warning" style="margin:10px;">Back</a>
    <div class="py-5">
        <div class="container">
            <div class="card card-body shadow">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tracking No</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $orders=getOrders();
                                if(mysqli_num_rows($orders)>0)
                                {
                                    foreach($orders as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['order_id'];?></td>
                                            <td><?= $item['tracking_no'];?></td>
                                            <td><?= $item['total_price'];?></td>
                                            <td><?= $item['created_at'];?></td>
                                            <td>
                                                <a href="viewOrder.php?tracking_no=<?= $item['tracking_no'];?>" class="btn btn-primary">View Details</a>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="5">No orders yet</td>
                                        </tr>

                                    <?php
                                   
                                }
                            ?>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="javas\cust.js"></script>
</body>
</html>
<?php include "footer.php";?>
