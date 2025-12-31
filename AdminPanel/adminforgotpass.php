
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password</title>
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

}

    
    .container {
        max-width: 400px;
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow:black;
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
<body >

<div class="container">
<a href="login.php" style="margin-left:0px; font-size: 2ch; text-decoration:none; color:black;" >X</a>
    <h2>Forgot Password</h2>

<form action="" method="post">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br><br>
    <span id="security_error" class="error"></span><br>
    <input type="submit" value="Submit">
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
    

    // Check if username exists in the database
    // Perform a SQL query to select the user's security question and answer
    $query = "SELECT email FROM login WHERE email = '$email'";
    // Execute the query and fetch the result
    // Assuming $mysql is your database connection
    $result = mysqli_query($mysql, $query);
    
    // Check if query was successful
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Verify security answer
        if ($row) {
            
                // Security answer matches, allow the user to reset password
                // Redirect the user to the reset password page or display a password reset form
                header("Location: adminReset.php?email=$email");
                exit();
        } else {
            echo '<script>document.getElementById("security_error").textContent = "Email not found.";</script>';
        }
    } else {
        // Query failed
        echo "Error: " . mysqli_error($mysql);
    }
}
?>