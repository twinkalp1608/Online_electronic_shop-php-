<?php
              $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 

  session_start();
  if(!isset($_SESSION['id'])){
    header("location:Login.php");
  }
?>
<h3 class="header" align=center>
      Welcome To - <?php echo $_SESSION['id']?> -In a Admin Dashbord 
    </h3>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h4><div class="remember-forgot" style="margin-left:1000px;">
                <a href="../change_psw.php" >Change Password</a>
            </div></h4>
    <?php
        include "adminSidebar.php";
    ?>
</body>
</html>