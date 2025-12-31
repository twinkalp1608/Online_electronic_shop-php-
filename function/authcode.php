<?php
  session_start();
  $mysql=mysqli_connect("localhost","root","","electronicshop") or die("Error!!".mysqli_error($mysql));


if(isset($_REQUEST['submit']))
{
    $name=mysqli_real_escape_string($mysql,$_REQUEST['name']);
    $email=mysqli_real_escape_string($mysql,$_REQUEST['email']);
    $password=mysqli_real_escape_string($mysql,$_REQUEST['password']);
    $con_password=mysqli_real_escape_string($mysql,$_REQUEST['con_password']);
    $contactno=mysqli_real_escape_string($mysql,$_REQUEST['contactno']);
    $address=mysqli_real_escape_string($mysql,$_REQUEST['address']);
    $date=mysqli_real_escape_string($mysql,$_REQUEST['date']);
    
    //check if email allready register 
    $check_email_query="select email from tblreg where email='$email'";
    $check_email_query_run=mysqli_query($mysql,$check_email_query);
    if(mysqli_num_rows($check_email_query_run)>0)
    {
      echo "<script>alert('Email already Registered');
      window.location.href='../Registration.php';  
      </script>";
    }
    else
    {
      if($password==$con_password)
      {
      // insert user data
      $q="insert into tblreg(name,email,password,contactno,address,date) values('$name','$email','$password','$contactno','$address','$date')";
      $query_run=mysqli_query($mysql,$q);

      if($query_run)
      {
        $_SESSION['message']="Registered Succesfully";
        header("location:../login.php");
      }
      else
      {
        echo "<script>alert('Something went wrong');
                      window.location.href='../Registration.php';  
                      </script>";
      }
      }
      else
      {
            echo "<script>alert('Password do not match');
                      window.location.href='../Registration.php';  
                      </script>";
      }
    }

}
else if(isset($_REQUEST['Login']))
{
  $email=mysqli_real_escape_string($mysql,$_REQUEST['email']);
  $password=mysqli_real_escape_string($mysql,$_REQUEST['password']);
  $status=mysqli_real_escape_string($mysql,$_GET['status']);
  $login_query="select * from tblreg where email='$email' and password='$password' and status!='0'";
  $login_query_run=mysqli_query($mysql,$login_query);
// if($status != 0){
    // echo "<script>alert('You are blocked');
    //   window.location.href='../login.php';  
    //   </script>";
  
    if(mysqli_num_rows($login_query_run)>0)
    {
      $_SESSION['auth']=true;
      $userdata=mysqli_fetch_array($login_query_run);
      $userid=$userdata['user_id'];
      $username=$userdata['name'];
      $useremail=$userdata['email'];
      
      $_SESSION['auth_user']=
      [
        'user_id'=>$userid,
        'name' => $username,
        'email' => $useremail
      ];
      
      echo "<script>alert('Logged In Successfully');
      window.location.href='../index.php';  
      </script>" ;
      
    }
    else
    {
      
        echo "<script>alert('Invalid ');
        window.location.href='../login.php';  
        </script>";
      
    }
  
  // }
  // else{
  //   echo "<script>alert('blocked');
  //     window.location.href='../login.php';  
  //     </script>";
  // }

}
?>