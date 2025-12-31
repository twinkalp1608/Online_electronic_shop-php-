<?php
session_start();
require 'userfunction.php';
$mysql=mysqli_connect("localhost","root","","electronicshop") or die("Error!!".mysqli_error($mysql));

    if(isset($_SESSION['auth']))
    {
        if(isset($_REQUEST['placeOrder']))
        {
            $name=mysqli_real_escape_string($mysql,$_REQUEST['name']);
            $email=mysqli_real_escape_string($mysql,$_REQUEST['email']);
            $phone=mysqli_real_escape_string($mysql,$_REQUEST['phone']);
            $pincode=mysqli_real_escape_string($mysql,$_REQUEST['pincode']);
            $address=mysqli_real_escape_string($mysql,$_REQUEST['address']);
            $payment_mode=mysqli_real_escape_string($mysql,$_REQUEST['payment_mode']);
            //$payment_id=mysqli_real_escape_string($mysql,$_REQUEST['payment_id']);

            if($name =="" || $email == "" || $phone == "" || $pincode == "" || $address == "")
            {
                echo "<script>alert('All fields are mandatory');
                        window.location.href='../checkout.php';  
                    </script>" ;
            }

            $userId=$_SESSION['auth_user']['user_id'];
            $query="SELECT  c.cart_id as cid , c.product_id, c.qty, p.product_id as pid, p.product_name, p.image, p.selling_price
                    FROM carts c ,product p WHERE c.product_id=p.product_id AND c.user_id='$userId' ORDER BY c.cart_id DESC ";
            $query_run=mysqli_query($mysql,$query);

            
            $totalPrice=0;
            foreach($query_run as $citem)
            {
                
                $totalPrice += $citem['selling_price'] * $citem['qty'];
            }
            //echo $totalPrice;
            $tracking_no = "TRKtracker".rand(1111,9999).substr($phone,2);
            $insert_query="INSERT into `order`(`tracking_no`,`user_id`,`name`,`email`,`phone`,`address`,`pincode`,`total_price`,`payment_mode`)values('$tracking_no','$userId','$name','$email','$phone','$address','$pincode','$totalPrice','$payment_mode')";
            $insert_query_run=mysqli_query($mysql,$insert_query);
            if($insert_query_run)
            {
                $order_id=mysqli_insert_id($mysql);
                foreach($query_run as $citem)
                {
                    $product_id=$citem['product_id'];
                    $qty=$citem['qty'];
                    $price=$citem['selling_price'];
                    $insert_items_query="INSERT into order_items (order_id,product_id,qty,price) values('$order_id','$product_id','$qty','$price')";
                    $insert_items_query_run=mysqli_query($mysql,$insert_items_query);

                    $product_query="SELECT * from product where product_id='$product_id' LIMIT 1";
                    $product_query_run=mysqli_query($mysql,$product_query);
                    
                    $productData=mysqli_fetch_array($product_query_run);
                    $current_qty=$productData['qty'];

                    $new_qty=$current_qty-$qty;

                    $updateQty_query="UPDATE product set qty='$new_qty' where product_id='$product_id'";
                    $updateQty_query_run=mysqli_query($mysql,$updateQty_query);

                }

                $deleteCartQuery="DELETE from carts where user_id='$userId'";
                $deleteCartQuery_run=mysqli_query($mysql,$deleteCartQuery);

                echo "<script>alert('Order Placed successfully');
                        window.location.href='../my-orders.php';  
                    </script>" ;
                die();
                

            }


        }
        
    }
    else{
        header("location:../index.php");
    }

?>
<?php
// $apiKey="rzp_test_teaKdgZvTm2Th9";
?>

