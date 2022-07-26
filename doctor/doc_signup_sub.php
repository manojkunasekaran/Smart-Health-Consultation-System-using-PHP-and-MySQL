<?php

require '../includes/common.php';
 

$dname = $_POST['dname'];
$dspecial = $_POST['dspecial'];
$dquali = $_POST['dquali'];
$dexp = $_POST['dexp'];
$dage = $_POST['dage'];
$dgender = $_POST['dgender'];
$dcontact = $_POST['dcontact'];
$demail = $_POST['demail'];
$dpassword = $_POST['dpassword'];
$encryptdpass = md5($dpassword);
$dcity = $_POST['dcity'];
$daddress = $_POST['daddress'];

$select = "SELECT * FROM doctor WHERE d_email = '$demail'";
$select_query_result = mysqli_query($con, $select);

if(mysqli_num_rows($select_query_result )> 0)
{

    echo '<script type="text/javascript"> '; 
    echo '  if (confirm("The Doctor with similar email Id is already registered, Click here to register again")) {';
    echo '    window.location = "doc_signup.php"';
    echo '  }';
    echo '</script>';
}
 else 
{
   $insert =  "INSERT INTO doctor (d_name,d_special,d_quali,d_experience,d_age,d_gender,d_contact,d_email,d_password,d_city,d_address,d_created_at,d_updated_at)
               VALUES ('$dname','$dspecial','$dquali', '$dexp', '$dage', '$dgender', '$dcontact','$demail','$encryptdpass','$dcity','$daddress',now(),now())";
   $insert_query_result = mysqli_query($con, $insert);
   
   if($insert_query_result)
   {
      $d_id = mysqli_insert_id($con);
      $_SESSION['d_email']=$demail;
      $_SESSION['d_id']= $d_id;
      $_SESSION['d_username']=$dname;
    //   echo ' Doctor Details were inserted successfully!!! ';
    //   header("location: ../login.php");

      echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Doctor Details were  successfully Registered!!!, Click here to login")) {';
        echo '    window.location = "../login.php"';
        echo '  }';
        echo '</script>';
   }
   else 
   {
    //    echo 'Doctor Registration failed';
    //    header('refresh:3; url:doc_signup.php');
       echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Doctor Registration failed, Click here to register again")) {';
        echo '    window.location = "doc_signup.php"';
        echo '  }';
        echo '</script>';
   }
}
?>

