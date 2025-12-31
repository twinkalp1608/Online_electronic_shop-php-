<?php
// if(isset($_REQUEST['user_id'])){
//     $user_id=$_REQUEST['user_id'];
//     $mysql=mysqli_connect("localhost","root","","electronicshop") or die("could not found".mysqli_error($mysql)); 
//     $q="select * from tblreg where user_id='$user_id'";
//     $result=mysqli_query($mysql,$q)or die("Error!");
//     $r=mysqli_fetch_array($result);
//     // print_r($r);
//   }
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   body{
  min-height: 100vh;
  padding: 0.5rem;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #222;
  font-size: 0.24rem;
  font-family: "Space Grotesk", sans-serif;
  background-color:rgb(41, 40, 40);;
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
    <h2>Change Password</h2>
        <form action="" method="post">
            <label>Old Password:</label>
            <input type="password" id="old_pass" name="old_pass" placeholder="Enter old password" required><br><br>
            <label>New Password:</label>
            <input type="password" id="new_pass" name="new_pass" placeholder="Enter new password" required><br><br>
            <label>Confirm Password:</label>
            <input type="password" id="con_pass" name="con_pass" placeholder="Enter Confirm password" required><br><br>
            <input type="submit" value="Submit" name="re-password">
        </form>
    </div>
</body>
</html>
<?php 
// $mysql=mysqli_connect("localhost","root","","electronicshop") or die("Error!!".mysqli_error($mysql));
// if(isset($_POST['re-password'])){
//     $old_pass=$_POST['old_pass'];
//     $new_pass=$_POST['new_pass'];
//     $con_pass=$_POST['con_pass'];
//     $q=mysqli_query("select * from tblreg where user_id='$user_id'");
//     $query_run=mysqli_fetch_array($q);
//     $data_pwd=$query_run['password'];
//     if($data_pwd==$old_pass){
//         if($new_pass==$con_pass){
//             $update_pwd=mysqli_query("update tblreg set password='$new_pass' where user_id='$user_id'");
//             echo "<script>alert('Your Password changed Successfully');
//             windows.loaction='login.php'</script>";
            
//         }
//         else
//         {
//             echo "<script>alert('Your New password  and confirm password is not match');
//             windows.loaction='login.php'</script>";

//         }
//     }
//     else
//     {   
//         echo "<script>alert('Your old password is Incorrect');
//             windows.loaction='login.php'</script>";
//     }

// }

// ?>