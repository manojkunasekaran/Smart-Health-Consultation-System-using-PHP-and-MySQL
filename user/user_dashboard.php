<?php
require '../includes/common.php';
?>

<!DOCTYPE html>

<!--user page for the website-->

<html>
    <head>
        <title>Doctors | Health Consultancy Service</title>|
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet"  href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
             
        <?php
        include 'header.php';
        $userid=$_GET['userid'];
        ?>

        <div class="image_home" style="text-align:center;height:100vh;">
            <div class="container">
                <div class="page-header">
                    <h2 style = "color : skyblue;">User Dashboard</h2>
                </div>        
                <br>
                <br> 

                <div class="row text-center">

                    <div class="col-md-6 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/list_doctors.jpg" alt="list available doctors category">
                            <div class="caption">
                                <h3>Show available doctors</h3>
                                <a href="special_list.php?userid=<?php echo $userid;?>" class="btn btn-primary btn-block">List doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/list_schedule.jpg" alt="list of previous schedules">
                            <div class="caption">
                                <h3>Check Previous Schedules</h3>
                                <a href="user_appoint_details.php?userid=<?php echo $userid;?>" class="btn btn-primary btn-block">History of Schedules</a>
                            </div>
                        </div> 
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
