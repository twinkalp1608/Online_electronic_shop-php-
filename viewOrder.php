<?php
include "navbar.php";
include("function/userfunction.php");
//include("authencticate.php");
if(!isset($_SESSION['auth']))
{
    echo "<script>alert('Login to Continue');
    window.location.href='login.php';  
    </script>" ;
}

if(isset($_GET['tracking_no']))
{
    $tracking_no=$_GET['tracking_no'];

    $orderData=chechTrackinNoValid($tracking_no);
    if(mysqli_num_rows($orderData)<0)
    {
        ?>
            <h4>Something went wrong</h4>
        <?php
        die();

    }
}
else{
    ?>
        <h4>Something went wrong</h4>
    <?php
    die();
}
$data = mysqli_fetch_array($orderData);

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
    <div class="py-5">
        <div class="container">
            <div class="card card-body shadow">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-black">
                                <span class="text-white fs-3">View Order</span> 
                                <a href="my-orders.php" class="btn btn-warning float-end">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <h4>Delivery Details</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label for="" class="fw-bold">Name</label>
                                                <div class="border p-1">
                                                    <?= $data['name'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="" class="fw-bold">Email</label>
                                                <div class="border p-1">
                                                    <?= $data['email'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="" class="fw-bold">Phone No</label>
                                                <div class="border p-1">
                                                    <?= $data['phone'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="" class="fw-bold">Tracking_NO</label>
                                                <div class="border p-1">
                                                    <?= $data['tracking_no'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="" class="fw-bold">Address</label>
                                                <div class="border p-1">
                                                    <?= $data['address'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="" class="fw-bold">Pin Code</label>
                                                <div class="border p-1">
                                                    <?= $data['pincode'];?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Order Details</h4>
                                        <hr>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $userId=$_SESSION['auth_user']['user_id'];
                                                    $order_query="SELECT o.order_id  as `oid`,o.tracking_no , o.user_id ,oi.*,oi.qty as orderqty, p.* FROM `order` o,`order_items` oi, 
                                                    product p WHERE o.user_id='$userId' AND oi.order_id=o.order_id   AND p.product_id=oi.product_id AND o.tracking_no='$tracking_no'";
                                                    $order_query_run=mysqli_query($mysql,$order_query);

                                                    if(mysqli_num_rows($order_query_run)>0)
                                                    {
                                                        foreach($order_query_run as $item)
                                                        {
                                                            ?>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <img src="AdminPanel/upload/<?= $item['image'];?>" width="50px" height="50px" alt="<?= $item['product_name']; ?>" class="" >
                                                                        <?= $item['product_name']; ?>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <?= $item['price']; ?>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                    <?= $item['orderqty']; ?>
                                                                    </td>
                                                                </tr>
                                                          <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>

                                        <hr>
                                        <h5>Total Price: <span class="float-end fw-bold"><?= $data['total_price'];?></span></h5>
                                        <hr>
                                        <label class="fw-bold">Payment Mode</label>
                                        <div class="border p-1 mb-3">
                                            <?= $data['payment_mode'];?>
                                        </div>
                                        <label class="fw-bold">Status</label>
                                        <div class="border p-1 mb-3">
                                            
                                            <?php
                                            
                                                if($data['status']==0)
                                                {
                                                    echo "Pending";
                                                }    
                                                else if($data['status']==1)
                                                {
                                                    echo "Completed";
                                                }
                                                else if($data['status']==2)
                                                {
                                                    echo "Cancled";
                                                }  
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="javas\cust.js"></script>
</body>
</html>
<?php include "footer.php";?>
