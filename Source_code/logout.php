
<?php

session_start();
if (!isset($_SESSION['u_email'])) {
    header('location: login.php');
}

if (!isset($_SESSION['d_email'])) {
    header('location: login.php');
}

if (!isset($_SESSION['admin_email'])) {
    header('location: login.php');
}

session_destroy();
header('location: index.php');

?>