<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="box form-box">
            <a href="AdminPanel/Dashbord.php" style="margin-left:370px;">Back</a>
            <header>Change Password</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="password">Current Password</label>
                    <input type="password" name="current_psw" id="current_psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">New Password</label>
                    <input type="password" name="new_psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}"  id="new_psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="cnf_psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}"  id="cnf_psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Change Password" required>
                </div>
              </form>
        </div>
    </div>
</body>
</body>
</html>

<?php
    session_start();
    $mysql=mysqli_connect("localhost","root","","electronicshop");
    if(!empty($_POST['submit'])){
        $current_psw=$_POST['current_psw'];
        $new_psw=$_POST['new_psw'];
        $cnf_psw=$_POST['cnf_psw'];
        if($new_psw == $cnf_psw){
            $query="select * from login where pwd='$current_psw'";
            $result=mysqli_query($mysql,$query);
            $count=mysqli_num_rows($result);
            if($count>0){
                $query1="update login set pwd='$new_psw'";
                mysqli_query($mysql,$query1);
                echo "<script>alert('Password update successfully...');
                window.location.href='AdminPanel/login.php';  
            </script>" ;
            }
            else{
                echo "<script>alert('Old password does not match!!');
                window.location.href='change_psw.php';  
            </script>" ;
            }
        }
        else{
            echo "<script>alert('New password and Confirm password does not match!!');
                window.location.href='change_psw.php';  
            </script>" ;
        }
    }
?>

