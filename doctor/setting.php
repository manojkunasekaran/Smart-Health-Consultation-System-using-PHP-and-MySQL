<?php

require '../includes/common.php';

?>

<!DOCTYPE html>

<!--setting page for the website-->

<html>
    <head>
        <title>Setting | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        <?php
            if(!isset($_SESSION['d_email']))
            {
                header('location:../index.php');
            }
            
        ?>
        <?php
        include 'header.php';
        ?>
        <div class="image_home" style="height:100vh;">
        <!--panel for change the password in setting-->
        <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>Change Password</h2>
                    <form method="POST" action="setting_sub.php">
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Old Password"  name="oldpassword" required = "true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder=" New Password" name="newpassword" required = "true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Re-type New Password" name="retypepassword" required = "true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        </form>
                </div>
            </div>
        </div>
        </div>
        
</div>
        
    </body>
</html>

