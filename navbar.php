<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   *{
    margin:0;
    padding:0;
    box-sizing:border-box;
   }
form.example input[type=text] {
  padding: 4px;
  border: 1px solid grey;
  float: left;
  width: 70%;
  background: #f1f1f1;
}

form.example button {
  
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
  /* .search{
    position: relative;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-left:20px;
  }
  .searchtext{
    width:0rem;
    border-radius:5rem;
    border:none;
    outline:none;
    transition:all 0.2s linear;

  }
  .searchbtn{
    position:absolute;
    right:1rem;
    display:grid;
    place-items:center;
  }

  .search:hover > .searchtext{
    width:12rem;
    padding:1rem;
    } */
  
  
</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="container-fuild">
    
<nav class="navbar navbar-expand-lg" style="background-color:black;"> 
     <a class="navbar-brand" href="index.php">
      <img src="logo.jpeg" alt="" style="width:60px; margin-left:7px;" class="rounded-pill">
      <!-- <a style="color:white;"class="navbar-brand" href="index.php">TRK ELECTRONIC</a> -->
    </a> 
    

  <!-- <div class="search">
    <input type="text" class="searchtext" placeholder="Search Here..">
    <a href="#" class="searchbtn"></a>
  <i class="fa-solid fa-magnifying-glass" style="color:white;"></i>
  </div> -->
  <form class="example" action="search.php" method="post">
    <input type="text" class="form-control" placeholder="Search here..." name="search">
    <input type="submit" class="form-control" value="Search" name="submit" style="float: left;  width:30%; padding: 4px; background: black; color: white; border: 1px solid grey; border-left: none; cursor: pointer;"></input>
  </form>

    

  <div class="container-fuild">
    <ul class="nav">

    
        <!-- <form class="">
         <li><input class="form-control" style="width:100px;"type="search" placeholder="Search" aria-label="Search"></li> 
        <input class="form-control" style="width:100px;"type="search" placeholder="Search" aria-label="Search"><button style="color:white; margin-left:110px; margin-top:0px;" class="btn btn-outline-success" type="submit">Search</button>
        </form>
     -->
   
      
      <li class="nav-item">
        <a href="index.php" class="nav-link" style="color:white;">HOME</a>
      </li>
      

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  style="color:white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORY
          </a>
          <ul class="dropdown-menu">

          <?php
          
         
              $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
              $cq="select * from category";
              $result=mysqli_query($mysql,$cq);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                  echo '<li><a class="dropdown-item" href="CategoryWise.php?category='.$row['category_name'].'">'.$row['category_name'].'</a></li>';
                }
            }
          ?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  style="color:white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BRAND
          </a>
          <ul class="dropdown-menu">
            <?php
                $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
                $bq="select * from brand";
                $result=mysqli_query($mysql,$bq);
                if(mysqli_num_rows($result)>0)
                {
                  while($row=mysqli_fetch_assoc($result))
                  {
                    echo '<li><a class="dropdown-item" href="BrandWise.php?brand='.$row['brand_name'].'">'.$row['brand_name'].'</a></li>';
                   }
                }
            ?>
          </ul>
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:white; " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           MORE
          </a>
          <ul class="dropdown-menu" style="">
            <li><a class="dropdown-item" href="aboutus.php">ABOUT US</a></li>
            <li><a class="dropdown-item" href="Contactus.php">CONTACT US</a></li>
            
          </ul>
          </li>

      

      <li class="nav-item dropdown">
      <?php
        if(isset($_SESSION['auth'])){
       ?>
          <a class="nav-link dropdown-toggle ml-20"  style="color:white; margin-left:300px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['name'];?>
          </a>
          <ul class="dropdown-menu" style="margin-left:300px;">
            <li><a class="dropdown-item" href="cart.php">My Cart</a></li>
            <li><a class="dropdown-item" href="show-wishlist.php">My Wishlist</a></li>
            <li><a class="dropdown-item" href="logout.php">LOG OUT</a></li>
            <li><a class="dropdown-item" href="my-orders.php">My Orders</a></li>
          </ul>
          </li>
          <?php
        }
        else
        {
        ?>
        <li class="nav-item" style="margin-left:260px;">
        <li  style="color:white; margin-right:5px;"><a class="btn btn-outline-info" href="Registration.php">Registration</a></li>
        <li  style="color:white;"><a class="btn btn-outline-info"  href="login.php">Login</a></li>
        </li>
        
        <?php
        }
    ?>        
    </ul>
    


  </div>
  
  <!-- <input type="text" class="searchtext" placeholder="Search Here.."> -->
  
  
 
</nav>
    </div>

    </body>
    </html>
