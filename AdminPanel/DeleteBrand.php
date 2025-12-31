<?php
    if(isset($_REQUEST['brand_id'])){
        $brand_id=$_REQUEST['brand_id'];
        $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
        $q="delete from brand where brand_id='$brand_id'";

        if(mysqli_query($mysql,$q))
            header("location:ViewBrands.php");
        else
            die("Query Failed!!!".mysqli_error($mysql));
    }
?>