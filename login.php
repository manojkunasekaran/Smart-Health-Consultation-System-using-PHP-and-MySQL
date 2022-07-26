<?php
require 'includes/common.php';
?>

<!DOCTYPE html>

<!--login page for the website-->

<html>
    <head>
        <title>Login | Health Consultancy Service </title>
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
        
        <div id=image_home style="height:100vh;text-align:left;">
            <div class="container">
                <div class="row">
                    <div class="column col-lg-6 col-lg-offset-3">
                        

                        <h1 style = "color : skyblue;">LOGIN</h1>
                        
                            <p class="text-warning">
                                <i> User / Doctor / Admin LOGIN</i>
                            </p><hr>
                            
                        <form method="POST" action="login_sub.php">
                            Email:
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                            </div>
                            Password:
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg active">Login</button>
                        </form><br>
                        
                        <?php

                        if(isset($_GET['error'])==true)
                        {
                            echo '<p><span><font color="red" align="center">Invalid E-mail id and Password </font> </span></p>';
                        }

                        ?>
                        <i><a class="btn btn-danger btn-lg active" href="forget.php">Forget password?</a></i>
                        <hr>
                        <p>Don't have an account?</p> 
                        <a class="btn btn-success btn-lg active" href="user/signup.php">User Registration</a>
                        <a class="btn btn-success btn-lg active" href="doctor/doc_signup.php">Doctor Registration</a>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>


