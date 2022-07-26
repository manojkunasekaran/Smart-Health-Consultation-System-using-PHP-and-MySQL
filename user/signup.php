<?php
require '../includes/common.php';
?>
<!DOCTYPE html>

<!--sign up page for the website-->

<html>
    <head>
        <title>User Sign Up | Health Consultancy Service</title>
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
        <div class= "image_home" style="text-align:left;">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                    <h1 style = "color : skyblue;">User SIGN UP</h1><hr>
                        <form method="POST" action="signup_sub.php">
                            Name:
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            Age:
                            <div class="form-group">
                                <input type="text" placeholder="Age" name="age" required = "true">
                            </div>
                            Gender:
                            <div class="form-group">
                                <select class="form-select" style="color:black;" aria-label="Default select example" name="gender"  required = "true">
                                    <option selected>Select Gender</option>
                                    <option value="MALE">MALE</option>
                                    <option value="FEMALE">FEMALE</option>
                                    <option value="OTHERS">OTHERS</option>
                                </select>
                            </div>
                            Email:
                            <div class="form-group">
                                <input type="email" placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                            Password:
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" required = "true"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            Contact:
                            <div class="form-group">
                                <input type="text" placeholder="Contact" name="contact" required = "true">
                            </div>
                            City:
                            <div class="form-group">
                                <input type="text"  placeholder="City" name="city" required = "true">
                            </div>
                            Address:
                            <div class="form-group">
                                <input type="text"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-success btn-lg active">Submit</button><hr>
                            <div class="form-group">
                                <br><p style="text-align: center;font-weight: bolder;font-size: 20px;"> Already a customer?&nbsp; <a href="../login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
       
    </body>
</html>
