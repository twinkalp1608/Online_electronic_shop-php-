
<?php  include "navbar.php";?>
<?php  include "slider.php";?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<title>User Panel</title>
  
</head>
<body>


  
<!-- carousel 
   
    <div id="demo" class="carousel slide" data-ride="carousel">

Indicators -->
<!-- <ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>  -->

<!-- The slideshow -->
<!-- <div class="carousel-inner">
  <div class="carousel-item active">
    <img src="AdminPanel\ad1.jpg" alt="">
  </div>
  <div class="carousel-item">
    <img src="ad2.jpg" alt="">
  </div>
  <div class="carousel-item">
    <img src="ad3.jpg" alt="">
  </div>
</div>  -->

<!-- Left and right controls -->
<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a> --> 
<video autoplay muted loop  height="700" width="1300" >
    <source src="12345.mp4">
</video>
<div class="container py-5">
        <div class="row gy-3">
        <h2 align=center><b>Popular Products</b></h2>
        <hr>
        <p class="lead" align=center>Easiest way to order your product</p>
                <hr>
                <?php require "Rangedisplay.php";?>
                <hr>
        </div>
    </div>
</body>
</html>
<?php include "footer.php";?>
