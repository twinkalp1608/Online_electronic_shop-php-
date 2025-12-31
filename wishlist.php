<?php
session_start();
$mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 


    if(!isset($_SESSION['auth']))
    {
        header("location:login.php");
    }
    else{
        $product_id=$_REQUEST['product_id'];
        $user_id=$_SESSION['auth_user']['user_id'];


        $chk_wishlist="select * from wishlist where product_id='$product_id' and user_id='$user_id' ";
        $chk_wishlist_run=mysqli_query($mysql,$chk_wishlist);
        if(mysqli_num_rows($chk_wishlist_run)==1){
            echo "<script>alert('Product already exits in wishlist');
            window.location.href='show-wishlist.php';
                    </script>" ;
        }else{
            $insert_query="insert into wishlist (user_id,product_id)values('$user_id','$product_id')";
            if(mysqli_query($mysql,$insert_query)){
            echo "<script>alert('Product added to wishlist');
                window.location.href='show-wishlist.php';
                </script>";
        }
        }   

    }

?>