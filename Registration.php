<?php
include "navbar.php";
    
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
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

        <section class="bg-dark" style="margin-top :50px;" >
            <article class="py-5  text-white">
                
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div>
                            <a href="index.php" style=margin-left:0px; class="btn btn-white">X</a>
                        </div>
                        
                        <div class="modal-header text-dark" style="margin-left:150px;">
                            <h3 align=center class="modal-title">Sign Up Here</h3>
                            <button type="button" class="close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-dark ">
                            <form action="function/authcode.php" method="post">
                                <div class="form-group">
                                    <label for="fname" class="fw-bold">Name</label>
                                    <input type="text" name="name"  class="form-control" placeholder ="Enter Your First Name"required >
                                </div>
                                <div class="form-group" >
                                    <label for="email" class="fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder ="Enter Your Email" autocomplete="off"  required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="fw-bold">Password</label>
                                    <input type="password" name="password"  class="form-control" placeholder ="Enter Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="lname" class="fw-bold">Confirm Password</label>
                                    <input type="password" name="con_password" class="form-control" placeholder ="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                </div>
                                <div class="form-group">
                                    <label for="cno" class="fw-bold">Contact No</label>
                                    <input type="text" name="contactno"  class="form-control"  pattern="[0-9]{10}" placeholder ="Enter Your Contact No" title="Please enter currect mobile number" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="fw-bold">Address</label>
                                    <textarea name="address" class="form-control" placeholder ="Enter Your Proper Address" autocomplete="off"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="fw-bold">Date</label>
                                    <input type="date" name="date" id="" class="form-control" placeholder="Select Joining Date">   
                                </div>
                                    <input type="submit" class="btn btn-warning form-control" name="submit" value="Submit" required>
                                <div class="links" style="margin-left:145px;">
                                    Aldready a member? <a href="login.php">Sign In</a>
                                    <!-- <a href="index.php" style=margin-left:300px; class="btn btn-white">X</a> -->

                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <br><br>
        <body>
            
        <?php include "footer.php";?>
        </body>
</html>

