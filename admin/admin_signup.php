<?php
require '../includes/common.php';
?>
<!DOCTYPE html>

<!--sign up page for the website-->

<html>
<head>
        <title>Admin Sign up | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
        <!--header-->
        
         <?php
         include 'header.php';
         ?>
        
        <!--sign up panel for the website-->
        <div class= "image_home">
        <div class="container">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form method="POST" action="admin_signup_sub.php">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                            </div>
                            <!-- <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div> -->
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <div class="form-group">
                                <br><p style="text-align: center;font-weight: bolder;font-size: 20px;"> Already a customer?&nbsp; <a href="admin_login.php">Admin Login</a></p>
                            </div>
                        </form>
                    </div>
            </div>
            </div>
        </div>
        </div>
       
    </body>
</html>
