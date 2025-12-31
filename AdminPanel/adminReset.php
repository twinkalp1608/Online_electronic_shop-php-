<?php
if(isset($_REQUEST['email'])){
    $email=$_REQUEST['email'];
    $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
    $q="select * from login where email='$email'";
    $result=mysqli_query($mysql,$q)or die("Error!");
    $r=mysqli_fetch_array($result);
    // print_r($r);
  }
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>
<style>
   body{
  
  display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: url('123.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    animation: animateBg 5s linear infinite;
  /* background-image: radial-gradient(farthest-side, #434143 90%, #fff0), radial-gradient(farthest-side, white 90%, #fff0), radial-gradient(circle at 0 0, #434143, #e5d5f6) !important;
  background-size: 7rem 7rem, 6rem 6rem, auto;
  background-position: 30% 10%, 80% 90%, 0;
  background-repeat: no-repeat;
  backdrop-filter: blur(50px); */
}

    
    .container {
        max-width: 400px;
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px black;
        gap: 0.3rem;
        border-radius: 0.25rem;
        box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.2);
        background-color: ;
        z-index: 1;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
         font-size: 30px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 0.90rem;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: black;
    }

    .error {
        color: red;
        margin-top: 5px; /* Adjust margin as needed */
        font-size: 0.9rem; /* Adjust font size as needed */
    }
</style>
</head>
<body>

<div class="container">
<a href="login.php" style="margin-left:0px; color:black; font-size: 2ch; text-decoration:none;" >X</a>
    
    <h2>Reset Password</h2>
    
<form action="" method="post">

    <input type="hidden" name="email" value="<?php echo $r['email']; ?>">
    <label for="new_password">New Password:</label>
    <input type="password" id="pwd" name="pwd" required><br><br>
    <input type="submit" value="Reset Password">
</form>

</div>

</body>
</html>

<?php
// Include your database connection file here
$mysql=mysqli_connect("localhost","root","","electronicshop") or die("Error!!".mysqli_error($mysql));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $new_password = $_POST['pwd'];


    // Update the password in the database
    $query = "UPDATE login SET pwd = '$new_password' WHERE email = '$email'";
    // Execute the query
    mysqli_query($mysql, $query);

    // Redirect the user to a login page or any other appropriate page
    header("Location: login.php");
    exit();
}
?>