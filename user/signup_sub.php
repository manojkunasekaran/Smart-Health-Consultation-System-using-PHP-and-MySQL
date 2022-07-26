<?php

require '../includes/common.php';

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$encryptpass = md5($password);
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$select = "SELECT * FROM users WHERE u_email = '$email'";
$select_query_result = mysqli_query($con, $select);

if(mysqli_num_rows($select_query_result )> 0)
{
    echo 'Email Id is already registered';
    header('refresh:3; url:signup.php');
}
 else 
{
   $insert =  "INSERT INTO users (u_name, u_age, u_gender, u_email, u_password, u_contact, u_city, u_address)
               VALUES ('$name', '$age', '$gender', '$email', '$encryptpass', '$contact', '$city', '$address')";
   $insert_query_result = mysqli_query($con, $insert);
   
   if($insert_query_result)
   {
      $user_id = mysqli_insert_id($con);
      $_SESSION['u_email']=$email;
      $_SESSION['u_id']= $user_id;
      $_SESSION['u_username']=$name;
      echo '<script type="text/javascript"> '; 
        echo '  if (confirm("User Registration is Successfull!!, Click here to login to you profile")) {';
        echo '    window.location = "../login.php"';
        echo '  }';
        echo '</script>';
   }
   else 
   {
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("User Registration failed. Click here to register again")) {';
        echo '    window.location = "signup.php"';
                 echo '  }';
        echo '</script>';
   }
}
?>

