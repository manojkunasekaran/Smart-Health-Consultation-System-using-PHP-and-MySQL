<?php
require 'includes/common.php';
?>

<!DOCTYPE html>

<!--signup page for the website-->

<html>
    <head>
        <title>Signup | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
        <?php
        include 'includes/header.php';
        ?>

        <div id="image_home" style="height:100vh;">
            <div class="container" style="padding-top:5%;">
                <div id="content">
                    <a class="btn btn-success btn-lg active" href="user/signup.php">User Registration</a></div>
                    <div id="content">
                        <a class="btn btn-danger btn-lg active" href="doctor/doc_signup.php">Doctor Registration</a>
                    </div>  
                </div>
            </div> 
        </div>    
    </body>
</html>

