
<?php
// include "navbar.php";
include("function/userfunction.php");



// include("function/handlecart.php");
include("authencticate.php");
//include "navbar.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<a href="index.php" class="btn btn-warning" style="margin:10px;">Back</a>
                            
    <div class="py-5">
        <div class="container">
            <h4>Your Cart</h4>
            <div class="card card-body shadow">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mycart">
                    <?php $items=getCartItems();
                        if(mysqli_num_rows($items) > 0){
                         ?>
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <h6>Product</h6>
                            </div>
                            <div class="col-md-3">
                                <h6>Price</h6>
                            </div>
                            <div class="col-md-2">
                                <h6>Quantity</h6>
                            </div>
                            <div class="col-md-2">
                                <h6>Remove</h6>    
                            </div>
                        </div>
                            <div id="">

                                <?php
                                    foreach($items as $citem)
                                    {
                                        ?>
                                    <div class="card product-data shadow-sm mb-3">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <img src="AdminPanel/upload/<?= $citem['image']?>" alt="Image" class="w-50">
                                            </div>
                                            <div class="col-md-3">
                                                <h5><?= $citem['product_name']?></h5>
                                            </div>
                                            <div class="col-md-3">
                                                <h5>Rs.<?= $citem['selling_price']?></h5>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="hidden" class="prodId" value="<?= $citem['product_id']?>">
                                                <div class="input-group mb-3" style="width:100px;">
                                                    <button class="input-group-text fw-bold decrement-btn updateQty">-</button>
                                                        <input type="text" class="form-control qty-input bg-white fw-bold text-center" disabled value="<?= $citem['qty']?>">
                                                    <button class="input-group-text fw-bold increment-btn updateQty">+</button>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid']?>">
                                                Remove</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                        <?php
                                        
                                    }
                                ?>
                            </div>
                            <div class="float-end">
                                <a href="checkout.php" class="btn btn-outline-primary">Proceed to checout</a>
                            </div>
                            <?php 
                            }
                            else
                            {
                                ?>
                                <div class="card card-body shadwo text-center">
                                    <h4 class="py-3">Your Cart is Empty</h4>
                                </div>
                                <?php
                            }
                            ?>
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