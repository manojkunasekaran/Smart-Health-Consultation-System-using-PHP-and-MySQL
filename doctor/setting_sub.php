<?php

require '../includes/common.php';

if(!isset($_SESSION['d_email']))
{
    header('location:../index.php');
}

$oldpass = $_POST['oldpassword'];
$encrypt_old = md5($oldpass);

$newpass = $_POST['newpassword'];
$encrypt_new = md5($newpass);

$retypepass = $_POST['retypepassword'];
$encrypt_retype = md5($retypepass);

$select = "SELECT d_password FROM doctor WHERE d_email='".$_SESSION['d_email']."'";
$select_query_result = mysqli_query($con, $select);
$row = mysqli_fetch_array($select_query_result);
$originalpass = $row['d_password'];

if($encrypt_retype != $encrypt_new)
{

    echo '<script type="text/javascript"> '; 
        echo '  if (confirm("New Password didnot match, Please enter the correct credentials")) {';
        echo '    window.location = "setting.php"';
        echo '  }';
        echo '</script>';
}
else
{
   if($originalpass == $encrypt_old)
   {
        $update = "UPDATE doctor SET d_password='$encrypt_new' WHERE d_email='".$_SESSION['d_email']."'";
        $update_result = mysqli_query($con, $update);
    
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Password Changed!!!Keep it confidential")) {';
        echo '    window.location = "setting.php"';
        echo '  }';
        echo '</script>';
   }
   else
   {
    

       echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Old Password didnot match, Please enter the correct credentials")) {';
        echo '    window.location = "setting.php"';
        echo '  }';
        echo '</script>';
   }
}

?>