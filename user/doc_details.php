<?php
require '../includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Doctor Details | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
</head>
<body>
 
    <div class="image_home">
        <div class="container" >
            <div class="page-header">
              <?php
                include 'header.php';
              ?>
            </div>

            <?php 
                $id=$_GET['id'];
                $userid=$_GET['userid'];
                $result = mysqli_query($con,"SELECT * FROM doctor WHERE d_id='$id'");
                $row= mysqli_fetch_array($result);

            ?>
    
            <form method="POST" action="book_appoint.php">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $row['d_special'];?>" style="float:left;" class="btn btn-primary">Back</a>  
                    </div>
                    <div class="col-lg-6">
        
                        <a href="book_appoint.php?userid=<?php echo $userid;?>&id=<?php echo $row['d_id'];?>"  style="float:right;" class="btn btn-primary">Book Appointment</a>
                    
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <br>
                        <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="../images/pic_boy.jpg" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                            <h3 class="my-3"><?php echo $row['d_name']?></h3>
                            <p class="text-muted mb-1"><?php echo $row['d_special'];?></p>
                            <!-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
                            <div class="d-flex justify-content-center mb-2">
                
                                <a href="book_appoint.php?userid=<?php echo $userid;?>&id=<?php echo $row['d_id'];?>"  class="btn btn-danger">Book Appointment</a>
                            
                            </div>
                        <br>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body text-left">
                            <ul class="list-group list-group-flush" >                  
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3 ">
                                <i class="glyphicon glyphicon-envelope" class="mb-0">&nbsp;&nbsp;<?php echo $row['d_email'];?></i>
                
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="glyphicon glyphicon-map-marker"  style="color: #333333; ">&nbsp;&nbsp;<?php echo $row['d_address'];?></i>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="glyphicon glyphicon-earphone" class="mb-0" style="color: #55acee;" >&nbsp;&nbsp;<?php echo $row['d_contact'];?></i>
                        
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="glyphicon glyphicon-time"  class="mb-0" style="color: #ac2bac;">&nbsp;&nbsp;10-00 am to 08-00 pm</i>
                                
                            </li>
                            <!-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="card">
                    <h1>Doctor Details</h1> </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <br>
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $row['d_name'];?></p>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">specialization</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $row['d_special'];?></p>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Qualification</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $row['d_quali'];?></p>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Experience</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $row['d_experience'];?></p>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Age</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $row['d_age'];?></p>
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gender</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $row['d_gender'];?></p>
                            </div>
                            </div>
                            <br>

                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email ID</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $row['d_email'];?></p>
                            </div>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
           
    </div>
</body>
</html>