<?php

require 'includes/common.php';

if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

?>

<!DOCTYPE html>

<!--setting page for the website-->

<html>
    <head>
        <title>Profile | Health Consultancy Service</title>
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
        $select = 'SELECT * FROM doctor WHERE d_id = "$id"';
        $select_query_result = mysqli_query($con, $select);
        $row =  mysqli_fetch_array($select_query_result);
        ?>
      

    <section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
        <div class="col">
        <a href="user_dashboard.php" style="float:left;" class="btn btn-primary">Home</a>
        <a href="book_appoint.php?userid=<?php echo $userid;?>&id=<?php echo $row['d_id'];?>" style="float:right;" class="btn btn-primary">Book Appointment</a>
            <!-- <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol> -->
            </nav>
        </div>
        </div>
        <hr>
        <hr>

        <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
            <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"><?php echo $row['d_name']?>Doctor Name</h5>
                <p class="text-muted mb-1"><?php echo $row['d_special'];?>Specialization</p>
                <!-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
                <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-success">Book Appointment</button>
                </div>
                <hr>
                
                
            </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body text-left">
                    <ul class="list-group">                  
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="glyphicon glyphicon-envelope" class="mb-0" class="fas fa-globe fa-lg text-warning">&nbsp;&nbsp;<?php echo $row['d_email'];?>email@email.com</i>
        
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="glyphicon glyphicon-map-marker" class="fab fa-github fa-lg"  style="color: #333333; ">&nbsp;&nbsp;<?php echo $row['d_address'];?>address</i>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="glyphicon glyphicon-earphone" class="fab fa-twitter fa-lg" class="mb-0" style="color: #55acee;" >&nbsp;&nbsp;<?php echo $row['d_contact'];?></i>
                
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="glyphicon glyphicon-time" class="fab fa-instagram fa-lg" class="mb-0" style="color: #ac2bac;">&nbsp;&nbsp;10-00 am to 08-00 pm</i>
                        
                    </li>
                    <!-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <p class="mb-0">mdbootstrap</p>
                    </li> -->
                    </ul>
                </div>
      </div>
        </div>
        

        <div class="col-lg-8">
            <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo row['d_name'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">specialization</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo row['d_special'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Qualification</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo row['d_quali'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Experience</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo row['d_experience'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Age</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo row['d_age'];?></p>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Gender</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo row['d_gender'];?></p>
                </div>
                </div>
                <hr>

                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Email ID</p>
                </div>
                <div class="col-sm-9">
                    <p class="text-muted mb-0"><?php echo row['d_email'];?></p>
                </div>
                </div>
                <hr>
            </div>
            </div>
        </div>


       
        </div>
    </div>
    </section>
       

    </body>
</html>   