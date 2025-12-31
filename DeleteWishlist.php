<?php
    if(isset($_REQUEST['wishlist_id'])){
        $wishlist_id=$_REQUEST['wishlist_id'];
        $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
        $q="delete from wishlist where wishlist_id='$wishlist_id'";

        if(mysqli_query($mysql,$q))
           // header("location:show-wishlist.php");
            echo "<script>alert('Product delete in wishlist');
            window.location.href='show-wishlist.php';
                    </script>" ;
        else
            die("Query Failed!!!".mysqli_error($mysql));
    }
?>