<?php 
    session_start();
    $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
  
    
    if(isset($_SESSION['auth']))
    {
        if(isset($_REQUEST['scope']))
        {
            $scope=$_REQUEST['scope'];
            switch($scope)
            {
                case "add":
                    $product_id=$_REQUEST['product_id'];
                    $qty=$_REQUEST['qty'];

                    $user_id=$_SESSION['auth_user']['user_id'];

                    $chk_existing_cart="select * from carts where product_id='$product_id' and user_id='$user_id' ";
                    $chk_existing_cart_run=mysqli_query($mysql,$chk_existing_cart);

                    if(mysqli_num_rows($chk_existing_cart_run) > 0)
                    {
                         echo "existing";
                    }
                    else
                    {

                        $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                        $insert_query="insert into carts (user_id,product_id,qty)values('$user_id','$product_id','$qty')";
                        $insert_query_run=mysqli_query($mysql,$insert_query);

                        if($insert_query_run)
                        {
                            echo 201;
                        }
                        else
                        {
                            echo 500;
                        }
                     }
                break;
               
                case "update":
                    $product_id=$_REQUEST['product_id'];
                    $qty=$_REQUEST['qty'];

                    $user_id=$_SESSION['auth_user']['user_id'];

                    $chk_existing_cart="select * from carts where product_id='$product_id' and user_id='$user_id' ";
                    $chk_existing_cart_run=mysqli_query($mysql,$chk_existing_cart);

                    if(mysqli_num_rows($chk_existing_cart_run)>0)
                    {
                        $update_query="UPDATE carts SET qty='$qty' WHERE product_id='$product_id' AND user_id='$user_id'";
                        $update_query_run=mysqli_query($mysql,$update_query);
                        if($update_query_run){
                            echo 200;
                        }else{
                            echo 500;
                        }
                    }
                    else
                    {
                        echo "Something went wrong";
                    }     
                break;

                case "delete":
                    $cart_id=$_REQUEST['cart_id'];
                    $user_id=$_SESSION['auth_user']['user_id'];

                    $chk_existing_cart="select * from carts where cart_id='$cart_id' and user_id='$user_id' ";
                    $chk_existing_cart_run=mysqli_query($mysql,$chk_existing_cart);

                    if(mysqli_num_rows($chk_existing_cart_run)>0)
                    {
                        $delete_query="DELETE FROM carts WHERE  cart_id='$cart_id'";
                        $delete_query_run=mysqli_query($mysql,$delete_query);
                        if($delete_query_run){
                            echo 200;
                        }else{
                            echo "Something went wrong";
                        }
                    }
                    else
                    {
                        echo "Something went wrong";
                    }     

                break;
                default:
                    echo 500;

            }
        }
        
     }
    else{
         echo 401;
    }
?>