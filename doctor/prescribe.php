<?php

require '../includes/common.php';
include 'header.php';

?>
<!DOCTYPE html>
<html>
    <head>
      
        <title>Update Appointment Details | Health Consultancy Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="image_home" style="height:100vh;text-align:left;">
            <?php

            $appointid=$_GET['appointid'];
            $docid=$_GET['docid'];
            $result = mysqli_query($con,"SELECT * FROM appoint WHERE appoint_id='$appointid'");
            $row= mysqli_fetch_array($result);

            $status = "";
            if(isset($_POST['new']) && $_POST['new']==1)
            {
                $prescribe =$_REQUEST['prescribe'];
            
                $update="update appoint set prescription='".$prescribe."',u_consulted_at= now() where appoint_id='".$appointid."'";
                mysqli_query($con, $update) or die(mysqli_error());
                header("location: doc_schedule.php?docid=".$docid);
            }
            else {
                ?>
                <div class="container">
                    
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4">
            
                            <h1 style = "color : skyblue;">Update Appointment Record</h1><hr>

                            <form name="form-group" method="POST" action="">

                            <input type="hidden" name="new" value="1" />
                            
                            <input name="appointid" type="hidden" value="<?php echo $row['appoint_id'];?>" />
                        
                            PRESCRIPTION:<br>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Prescribtion for the patient" name="prescribe" required = "true" value="<?php echo $row['prescription'];?>">
                            </div>
                            <br>
                            <button type="submit" name="submit" value="update" class="btn btn-danger btn-lg active">Update</button>
                            </form>
                            
                        </div>   
                    </div>
                </div>
            <?php } ?>
              
        </div>
    </body>
</html