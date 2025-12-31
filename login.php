
<?php
require "navbar.php";
    
    if(isset($_SESSION['auth']))
    {
        echo "<script>alert('You Are Allready Loged In ');
            window.location.href='index.php';  
            </script>" ;

    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<section class="bg-dark" style="margin-top :50px;" >
  <article class="py-5  text-white">
    <!-- <div class="text-center">
      <h3 style="font-size:40px;" >Log In!!!!</h3>
      <p style="font-size:25px;">If you want to log.</p>
      <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Sign Up</button>
    </div>
    <div class="modal fade" id="myModal"> -->
        
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="card shadow">
                <div>
                    <a href="index.php" style=margin-left:0px; class="btn btn-white">X</a>
                    </div>

                    <div class="modal-header text-dark">
                        
                        <h4 class="modal-title" style="margin-left:150px;">Sign In Here</h4>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    
                    <!-- sign in body  -->
                
                            <div class="modal-body text-dark ">
                            <form action="function/authcode.php" method="post">
                                <div class="form-group">
                                <div class="form-group">
                                    <label for="email" class="fw-bold">Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd" class="fw-bold">Password:</label>
                                    <input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password" id="pwd">
                                </div>
                                <div class="links" style="margin-left:170px;">
                                            <a href="forgotPassword.php">Forgot Password</a>
                                </div>
                                <br> 
                                <button type="submit"name="Login" class=" form-control btn btn-warning">Login</button>
                                <div class="links" style="margin-left:130px;">
                                            Don't have account? <a href="Registration.php">Sign Up Now</a>
                                </div>
                            </form>


                </div>
            </div>
        </div>
        </div>
        </div>
  </article>
</section>
<br><br>

<?php include "footer.php";?>
    
</body>
</html>
