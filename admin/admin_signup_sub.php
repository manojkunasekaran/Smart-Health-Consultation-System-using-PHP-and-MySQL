<?php

require '../includes/common.php';

$aname = $_POST['name'];
$aemail = $_POST['email'];
$apassword = $_POST['password'];
$encryptpass = md5($apassword);
$acontact = $_POST['contact'];

$select = "SELECT * FROM admin1 WHERE admin_email = '$aemail'";
$select_query_result = mysqli_query($con, $select);

if(mysqli_num_rows($select_query_result )> 0)
{
    echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Email Id is already registered, Click here to signup again")) {';
        echo '    window.location = "admin_signup.php"';
        echo '  }';
        echo '</script>';
}
 else 
{
   $insert =  "INSERT INTO admin1 (admin_name,admin_email,admin_pass,admin_contact)
               VALUES ('$aname','$aemail','$encryptpass','$acontact')";
   $insert_query_result = mysqli_query($con, $insert);
   
   if($insert_query_result)
   {
      $admin_id = mysqli_insert_id($con);
      $_SESSION['admin_email']=$aemail;
      $_SESSION['admin_id']= $admin_id;
      $_SESSION['admin_username']=$aname;
      header('location:admindashboard.php');
   }
   else 
   {
       echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Admin Registration failed, Click here to register again")) {';
        echo '    window.location = "admin_signup.php"';
        echo '  }';
        echo '</script>';
   }
}
?>

