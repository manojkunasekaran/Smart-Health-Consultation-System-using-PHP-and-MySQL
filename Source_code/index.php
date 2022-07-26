<?php

require 'includes/common.php';

if(isset($_SESSION['u_email']))
    {
        header('location:doctor.php');
    }

if(isset($_SESSION['admin_email']))
    {
        header('location:admin/admindashboard.php');
    }
?>

<!DOCTYPE html>

<html>
    
    <head>
        <title> Welcome | Health Consultancy Service </title>
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
            <div class="container">
                
                <div id="content" style="text-align: center;">
                    <h1 style = "color : black;">Healthvisory System</h1><br><br>
                    
                    <a href="login.php" class="btn btn-danger btn-lg active" style = "background:url(images/p2.jpg);">Log in to Explore</a>
                    
                    <div class="inner_content" style="margin:10px;"><br>
                        <a href="first_aid.php" class="btn btn-primary btn-lg active" style = "background:url(images/p2.jpg);">First Aid Assistance</a>
                        <a href="medicine.php" class="btn btn-primary btn-lg active" style = "background:url(images/p2.jpg);">Medicament</a>
                    </div>
                        
                </div>   
            </div>

            <div class="row">
                <div class="column col-lg-3">
                    <div class="card">
                    <p><i class="fa fa-user"></i></p>
                    <h3>15+</h3>
                    <p>Doctors</p>
                    </div>
                </div>

                <div class="column col-lg-3">
                    <div class="card">
                    <p><i class="fa fa-check"></i></p>
                    <h3>100+</h3>
                    <p>Miraculous Recoveries</p>
                    </div>
                </div>

                <div class="column col-lg-3">
                    <div class="card">
                    <p><i class="fa fa-smile-o"></i></p>
                    <h3>1000+</h3>
                    <p>Happy Patients</p>
                    </div>
                </div>

                <div class="column col-lg-3">
                    <div class="card">
                    <p><i class="fa fa-coffee"></i></p>
                    <h3>100+</h3>
                    <p>Appointments</p>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="column col-lg-12">
                    <p><i class="fa-fa-newusersignup"></i>
                        <a href="signup.php" class="btn btn-success btn-block" style = "background:url(images/p2.jpg); margin-top:10px; box-shadow: 0px 0px 10px 1px  #0ff;">New to our site?    Signup to create your free Account!!!   "Offer closes soon"</a>
                    </p>
                </div>

            </div>  

        </div>
        
        
        
        
       
    </body>
</html>

 