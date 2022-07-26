<?php
require '../includes/common.php';
?>

<!DOCTYPE html>

<!--admin page for the website-->

<html>
<head>
        <title>Admin Dashboard | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <div class="image_home">
            <?php
            include 'header.php';
            ?>

      
            <div class="container">
                <div class="page-header">
                    <h2 style = "color : skyblue;">Admin Dashboard</h2>
                </div>
        
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/list_doctors.jpg" alt="list available doctors">
                            <div class="caption">
                                <h3>Show available doctors</h3>
                                <a href="list_doctors.php" class="btn btn-primary btn-block">List of doctors</a>
                            </div>
                        </div> 
                    </div>
                

                
                    <div class="col-md-6 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/list_doctors.jpg" alt="Add a new doctor to list">
                            <div class="caption">
                                <h3>Add a new Doctor</h3>
                                <a href="add_doctor.php" class="btn btn-primary btn-block">Add doctor</a>
                            </div>
                        </div> 
                    </div>
                


                    
                    <div class="col-md-6 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/cardio_1.jpeg" alt="list available users">
                            <div class="caption">
                                <h3>Show Available Users</h3>
                                <a href="list_users.php" class="btn btn-primary btn-block">List Users</a>
                            </div>
                        </div> 
                    </div>
                

                
                    <div class="col-md-6 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/cardio_1.jpeg" alt="Add a new doctor to list">
                            <div class="caption">
                                <h3>Add a new User</h3>
                                <a href="add_user.php" class="btn btn-primary btn-block">Add User</a>
                            </div>
                        </div> 
                    </div>
                </div>
               
            </div>
        </div>

    </body>
</html>