<?php

require 'includes/common.php';

$email = $_POST['email'];
$password = $_POST['password'];
$encryptpass = md5($password);

$select = "SELECT admin_id,admin_email FROM admin1 WHERE admin_email = '$email' AND admin_pass='$encryptpass'";
$select_query_result = mysqli_query($con, $select);

if(mysqli_num_rows($select_query_result ) == 0)
{
    $select = "SELECT u_id,u_email FROM users WHERE u_email = '$email' AND u_password='$encryptpass'";
    $select_query_result = mysqli_query($con, $select);

    if(mysqli_num_rows($select_query_result ) == 0)
    {
        // header('location: login.php?error=1');
        $select = "SELECT d_id,d_email FROM doctor WHERE d_email = '$email' AND d_password='$encryptpass'";
        $select_query_result = mysqli_query($con, $select);

        if(mysqli_num_rows($select_query_result) == 0)
        {
            header('location: login.php?error=1');
        }
        else 
        {
            $row = mysqli_fetch_array($select_query_result);
            $_SESSION['d_email']=$row['d_email'];
            $_SESSION['d_id']= $row['d_id'];
            $docid = $row['d_id'];
            $_SESSION['d_username']=$row['d_name'];
            

            if(isset($_SESSION['d_email']))
            {
                header("location:doctor/doctor_index.php?docid=".$docid);
            }
        }
    }
    else 
    {
        $row = mysqli_fetch_array($select_query_result);
        $_SESSION['u_email']=$row['u_email'];
        $_SESSION['u_id']= $row['u_id'];
        $userid = $row['u_id'];
        $_SESSION['u_username']=$row['u_name'];
    

    if(isset($_SESSION['u_email']))
    {
        header("location:user/user_dashboard.php?userid=".$userid);
    }
}
    // header('location: login.php?error=1');
}
 else 
{
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['admin_email']=$row['admin_email'];
    $_SESSION['admin_id']= $row['admin_id'];
    $_SESSION['admin_username']=$row['admin_name'];
    

    if(isset($_SESSION['admin_email']))
    {
        header('location:admin/admindashboard.php');
    }
}

?>

