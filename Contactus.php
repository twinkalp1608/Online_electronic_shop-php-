
<?php include "navbar.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>contact Us</title>
</head>
<body>

<div style="height:10%;" >
<video autoplay muted loop  height="700" width="1300" >
    <source src="large_2x.mp4">
</video>
</div>

<section class="bg-dark" style="margin-top :50px;">
    <article class="py-5  text-white">
    <div class="text-center">
      <h3 style="font-size:40px;" >+91 8787654543</h3>
      <br>
      <p style="font-size:25px;">TRKElectronic@gmail.com</p>
    </div>
    </article>
</section>

<section>
<div class="container-fluid">
    <h1 class="text-center text-capitalize pt-5"> Contact Us</h1>
    <hr class="w-25 mx-auto pt-5">
    <div class="w-50 mx-auto">
    <form action="">
        <div class="form-group ">
            <label for="name">Name:</label>
            <input type="name" name="name" class="form-control"  id="name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="msg"></textarea>
           </div>
          <button type="submit" align="center" name="submit" class="btn btn-primary">Send Message</button>
        </form>
        <br>
        <br>
    </div>
</section>





</body>
</html>
<?php
if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $msg=$_REQUEST['msg'];
  
    $mysql=mysqli_connect("localhost","root","","electronicshop");
    $q="insert into tbl_contactus values(null,'$name','$email','$msg')";
    if(mysqli_query($mysql,$q)){
        echo "<script>alert('Successfully');
        window.location.href='index.php';  
        </script>" ;
    }else
    {
      die("Error!!");
    }
  }
  
  ?>
  <?php include "footer.php";?>