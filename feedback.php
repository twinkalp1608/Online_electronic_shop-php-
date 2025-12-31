<?php include "navbar.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    
</head>
<body>
  <br>
<section>
<div class="container-fluid bg-dark text-light">
    <h1 class="text-center text-capitalize pt-5"> Add your Feedback </h1>
    <hr class="w-25 mx-auto pt-5">
    <div class="w-50 mx-auto">
    <form action="" method="post">
          <div class="form-group ">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control"  id="name">
          </div>
          <div class="form-group ">
            <label for="name">Contact No:</label>
            <input type="text" name="phoneno"  pattern="[0-9]{10}" placeholder ="Enter Your Contact No" class="form-control"  id="name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label> Feedback Message:</label>
            <textarea type="text" class="form-control" name="msg"></textarea>
           </div>
           <div class="form-group ">
            <label for="">Date:</label>
            <input type="date" name="date" class="form-control"  id="date">
          </div>
          <br>
           <button type="submit" align="center" name="submit" class="btn btn-info">Add feedback</button>
           <a href="index.php" style=margin-left:400px; class="btn btn-white text-white">Close</a>
        </form>
        <br><br>
    </div>
</section>
<br>
</body>
</html>

<?php
    $mysql=mysqli_connect("localhost","root","","electronicshop");
    if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $phoneno=$_REQUEST['phoneno'];
    $email=$_REQUEST['email'];
    $msg=$_REQUEST['msg'];
    $date=$_REQUEST['date'];

    $q="insert into tbl_fb values(null,'$name','$phoneno','$email','$msg','$date')";
    if(mysqli_query($mysql,$q)){
        echo "<script>alert('Feedback are succsessfully send');
        window.location.href='index.php';  
        </script>" ;
  
    }else
    {
      die("Error!!");
    }
  }

?>
<?php include "footer.php";?>