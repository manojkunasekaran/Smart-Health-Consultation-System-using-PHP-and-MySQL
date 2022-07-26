<?php

require '../includes/common.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Delete Doctor Record | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php

        $msg = "Doctor record deleted successfully";
        $id=$_REQUEST['id'];
        $query = "DELETE FROM doctor WHERE d_id=$id"; 
        
        if (mysqli_query($con,$query) === true){
            // header("Location: list_doctors.php");
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Doctor Record Deleted Successfully!!!")) {';
            echo '    window.location = "list_doctors.php"';
            echo '  }';
            echo '</script>';      
        }
        
        else{
            die (mysqli_error());
        } 
        ?>
</body>
</html>
