<?php 
    $mysql=mysqli_connect("localhost","root","","electronicshop") or die("Error!!".mysqli_error($mysql));
   
    
function getCartItems()
{
    global $mysql;
    $userId=$_SESSION['auth_user']['user_id'];
    $query="SELECT  c.cart_id as cid , c.product_id, c.qty, p.product_id as pid, p.product_name, p.image, p.selling_price
              FROM carts c ,product p WHERE c.product_id=p.product_id AND c.user_id='$userId' ORDER BY c.cart_id DESC ";
    return $query_run=mysqli_query($mysql,$query);
}


function getWishlistItems()
{
    global $mysql;
    $userId=$_SESSION['auth_user']['user_id'];
    $query="SELECT  w.wishlist_id as wid , w.product_id, w.qty, p.product_id as pid, p.product_name, p.image, p.selling_price
              FROM wishlist w ,product p WHERE w.product_id=p.product_id AND w.user_id='$userId' ORDER BY w.wishlist_id DESC ";
    return $query_run=mysqli_query($mysql,$query);
}

function getUser()
{
    global $mysql;
    $userId=$_SESSION['auth_user']['user_id'];
    $query="SELECT name,email,contactno,address from tblreg where user_id='$userId'";
    return $query_run=mysqli_query($mysql,$query);

}

function getOrders()
{
    global $mysql;
    $userId=$_SESSION['auth_user']['user_id'];
    
    $query="SELECT * from `order` where `user_id`='$userId' ORDER BY order_id DESC";
    return $query_run=mysqli_query($mysql,$query);
}

function chechTrackinNoValid($tracking_no)
{
    global $mysql;
    $userId=$_SESSION['auth_user']['user_id'];
    
    $query="SELECT * from `order` where `tracking_no`='$tracking_no' and user_id='$userId'";
    return mysqli_query($mysql,$query);
}


?>
