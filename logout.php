<?php
session_start();

if(isset($_SESSION['auth']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    echo "<script>alert('Logged Out Successfully');
    window.location.href='index.php';  
    </script>" ;

}
//header("location:index.php");   
    
?>