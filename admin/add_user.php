<?php
require '../includes/common.php';
?>
<!DOCTYPE html>

<!-- Add a new Doctor -->

<html>
    <head>
        <title>Admin Add Doctor | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
         <?php
         include 'header.php';
         ?>
    
        <div class= "image_home" style="text-align:left;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                        <h2>Add User Details</h2><hr>
                        <form method="POST" action="add_user_sub.php">
                            <div class="form-group">
                                Name:
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                Age:
                                <input type="text" class="form-control"  placeholder="Age" name="age" required = "true">
                            </div>
                            
                            <div class="form-group">
                                Gender:
                                <select class="form-select" aria-label="Default select example" name="gender"  required = "true">
                                    <option selected>Select Gender</option>
                                    <option value="MALE">MALE</option>
                                    <option value="FEMALE">FEMALE</option>
                                    <option value="OTHERS">OTHERS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                Email:
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                            <div class="form-group">
                                Password:
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>
                            <div class="form-group">
                                Contact:
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                City:
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                Address:
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>
