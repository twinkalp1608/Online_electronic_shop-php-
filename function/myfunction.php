<?php

$mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 

function getAllActive($product)
{
    global $mysql;
    $q="select * from $product";
    return $query_run=mysqli_query($mysql,$q );
}

function getAllOrders()
{
    global $mysql;
    $q="SELECT *from `order`where `status`='0' ";
    return $query_run=mysqli_query($mysql,$q);
}

function getOrderHistory()
{
    global $mysql;
    $q="SELECT *from `order`where `status`!='0' ";
    return $query_run=mysqli_query($mysql,$q);
}


function chechTrackinNoValid($tracking_no)
{
    global $mysql;
    $query="SELECT * from `order` where `tracking_no`='$tracking_no'";
    return mysqli_query($mysql,$query);
}



?>