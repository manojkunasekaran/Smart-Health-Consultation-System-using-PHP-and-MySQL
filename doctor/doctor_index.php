<?php
require '../includes/common.php';
?>

<!DOCTYPE html>

<!--admin page for the website-->

<html>
    <head>
        <title>Doctor | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        <div class="image_home" style="height:100vh;">
            <?php
            include 'header.php';
            ?>

            <div class="container">
                <div class="page-header">
                    <h2 style = "color : skyblue;">Doctor Dashboard</h2>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3">
                        <div class="thumbnail">
                            <img src="../images/list_schedules.jpg" alt="list of available and previous schedules">
                            <div class="caption">
                                <h3>Show available Schedules</h3>
                                <a href="doc_schedule.php?docid=<?php echo $docid;?>" class="btn btn-primary btn-block">List Schedules</a>
                            </div>
                        </div> 
                    </div>
                </div>  
            </div>
        </div>

    </body>
</html>