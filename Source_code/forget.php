<?php
require 'includes/common.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Forget Password | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    
    <body>
        
        <?php
        include 'includes/header.php';
        ?>

        <div id="image_home" style="height:100vh;">
            <div class="container" style="padding-top:10%;">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="panels">
                            <div class="panel-heading">
                                <h1 style = "color : skyblue;">Enter Your Email ID</h1><hr>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="forget_sub.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required = "true"><br>   
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                </form>
                            </div>                         
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>