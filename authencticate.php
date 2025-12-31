<?php
session_start();
if(!isset($_SESSION['auth']))
{
    echo "<script>alert('Login to Continue');
    window.location.href='login.php';  
    </script>" ;
}

?>