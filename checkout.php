<?php
    include("function/userfunction.php");
    include("authencticate.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<a href="cart.php" class="btn btn-warning" style="margin:10px;">Back</a>
    <div class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-body shadow ">
                    <form action="function/placeorder.php" method="POST">
                        <div class="row">
                            <div class="col-md-7">

                                <h5>Basic Details</h5>
                                <hr>
                                <?php $items=getUser();
                                        
                                            foreach($items as $uitem)
                                            {
                                ?>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Name</label>
                                            <input type="text" name="name" placeholder="Enter your Full Name" class="form-control" value="<?= $uitem['name']?>">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Email</label>
                                            <input type="email" name="email" placeholder="Enter your email"  class="form-control" value="<?= $uitem['email']?>" >
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Phone</label>
                                            <input type="text" name="phone" placeholder="Enter your phone Number"  class="form-control" value="<?= $uitem['contactno']?>" >
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="fw-bold">Pin code</label>
                                            <input type="number" name="pincode" placeholder="Enter your Full Name" class="form-control" >
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="fw-bold">Address</label>
                                            <textarea name="address" class="form-control" rows="5" value="" ><?= $uitem['address']?></textarea>    
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    
                                
                            </div>
                            <div class="col-md-5">
                                <h5>Order Details</h5>
                                <hr>
                                        <?php $items=getCartItems();
                                        $totalPrice=0;
                                            foreach($items as $citem)
                                            {
                                                ?>
                                            <div class="mb-1 border">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <img src="AdminPanel/upload/<?= $citem['image']?>" alt="Image" class="w-100">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label><?= $citem['product_name']?></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label><?= $citem['selling_price']?></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>x<?= $citem['qty']?></h5></label>
                                                    </div>
                                                </div>
                                            </div>
                                                <?php
                                                    $totalPrice +=( $citem["selling_price"] * $citem["qty"]);
                                            }
                                        ?>
                                        <hr>
                                        
                                        <br>                
                                        <h5 id="total">Total Price:<span class="float-end fw-bold">Rs.<?= $totalPrice ?></span></h5> 
                                        <div class="">
                                        
                                            
                                            <!-- <img src="" alt="" width="100px" height="100px" value=""   > -->
                                            <input type="hidden" name="payment_mode" value="COD">
                                            <button type="submit" id="activate" name="placeOrder" class="btn btn-primary w-100">Confirm and place order</button>
                                        </div>  
                            </div>
                        </div>
                                        </form>
                            
                </div>
            </div>
        </div>
    </div>

    
    <script src="javas\cust.js"></script>
</body>
</html>
<?php include "footer.php";?>

