<!DOCTYPE html>
<html lang="en">
<head>
  <title>Responsive Sidebar</title>
  <!-- Link Styles -->
  <link rel="stylesheet" href="adminsidebar.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
      <i class="bx bxl-audible icon"></i>
      <div class="logo_name">TRK Electronices</div>
      <div id="main">
        <i class="bx bx-menu" id="btn"></i>
      </div>
      
    </div>
    <ul class="nav-list">
      <li>
        <a href="Dashboard.php">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="ViewCategory.php">
          <i class="bx bx-user"></i>
          <span class="link_name">Category</span>
        </a>
        <span class="tooltip">Category</span>
      </li>
      <li>
        <a href="ViewBrands.php">
          <i class="bx bx-chat"></i>
          <span class="link_name">Brands</span>
        </a>
        <span class="tooltip">Brands</span>
      </li>
      <li>
        <a href="ViewProduct.php">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="link_name">Products</span>
        </a>
        <span class="tooltip">Products</span>
      </li>
      <li>
        <a href="ViewCustomer.php">
          <i class="bx bx-folder"></i>
          <span class="link_name">Customer</span>
        </a>
        <span class="tooltip">Customer</span>
      </li>
      <li>
        <a href="orders.php">
          <i class="bx bx-cart-alt"></i>
          <span class="link_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>
      <li>
        <a href="ViewContactUs.php">
          <i class="bx bx-cart-alt"></i>
          <span class="link_name">ContactUs</span>
        </a>
        <span class="tooltip">ContactUs</span>
      </li>
      <li>
        <a href="ViewFeedback.php">
          <i class="bx bx-cart-alt"></i>
          <span class="link_name">Feedback</span>
        </a>
        <span class="tooltip">Feedback</span>
      </li>
      <li>
        <a href="ViewCoupon.php">
          <i class="bx bx-cart-alt"></i>
          <span class="link_name">Coupon</span>
        </a>
        <span class="tooltip">Coupon</span>
      </li>
      <li class="profile">
        <div class="profile_details" width="50px">
          <img src="../logo.jpeg" width="" alt="profile image">
          <div class="profile_content">
            <div class="name">TRK Electronic </div>
          </div>
        </div>
        <form action="" method="post">
        <button class="bx bx-log-out" id="log_out" name="Logout" ></button>
        </form>
      </li>
    </ul>
  </div>
  
  <!-- Scripts -->
  <script src="script.js"></script>
</body>
</html>

<?php
    if(isset($_REQUEST['Logout'])){
      session_destroy();
      header("location:login.php");  
    }
  ?>