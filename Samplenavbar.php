<?php 
session_start();?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="AllProduct.php">Allproduct</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
        if(isset($_SESSION['auth'])){
       ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <?= $_SESSION['auth_user']['name'];?>
            </a>
                <ul class="dropdown-menu">
                <li><a href="my-order.ph">My Orders</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="logout.php">Log Out</a></li>
                </ul>
            </li>
        <?php
        }
        else
        {
        ?>
            <li><a href="Registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php
        }
    ?>

    </ul>
  </div>
</nav>