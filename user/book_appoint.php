<?php

require '../includes/common.php';
include 'header.php';

?>
<!DOCTYPE html>
<html>
    <head>
      
        <title> Confirm Book Appointment | Health Consultancy Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    <body>
    
            <?php

            $userid=$_GET['userid'];  
            $id=$_GET['id'];
            
           // $resultdoc = mysqli_query($con,"SELECT * FROM doctor WHERE d_id='$id'");
            $query = "SELECT * FROM doctor WHERE d_id='$id'";
            $result = mysqli_query($con,$query);
            $row= mysqli_fetch_array($result);
            

            $docid = $row['d_id'];
            $doc_name = $row['d_name'];

            

            // $insert =  "INSERT INTO appoint (doc_id,doc_name)
            // VALUES ('$docid', '$doc_name')";

            // $insert_query_result = mysqli_query($con, $insert);
            // if($insert_query_result)
            // {
            // $user_id = mysqli_insert_id($con);
            // $_SESSION['u_email']=$email;
            // $_SESSION['u_id']= $user_id;
            // $_SESSION['u_username']=$name;
            // header('location:user/user_dashboard.php');
            // }
            // else 
            // {
            //     echo 'registration failed';
            //     header('refresh:3; url:signup.php');
            // }
            
            // $insert_query_result = mysqli_query($con, $insert);
               
            //$result = mysqli_query($con,"SELECT * FROM users where u_id='$userid'");
            // $query = "SELECT * FROM users where u_id='$userid'";
            // $result = mysqli_query($con,$query);
            // $row= mysqli_fetch_array($result);

            // $user_id = $row['u_id'];
            // $user_email = $row['u_email'];
            // $user_contact = $row['u_contact'];
            // $useraptreason = $_POST['reason'];
            // $user_address = $row['u_address'];
            // $schedule = $_POST['sch'];

        
            // $update =  "UPDATE appoint set user_id='".$user_id."', user_email='".$user_email."', user_contact='".$user_contact.", user_aptmt_reason='".$useraptreason."', user_address='".$user_address."', doc_id='".$docid."',doc_name='".$_doc_name."',u_schedule_at='".$schedule."' where appoint_id='".$appid"' ";
            // mysqli_query($con, $update) or die(mysqli_error());
            ?>


           <div class= "image_home" style="height:100vh;">
                <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="doc_details.php?userid=<?php echo $userid;?>&id=<?php echo $id;?>" style="float:left;" class="btn btn-primary">Back</a>  
                            </div>
                             
                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                
                                <hr>
                                <hr>
                                <br>
                                <h1>Confirm the details to book appointment</h1>
                                <hr>
                                <hr>

                                <form name="form-group" method="POST" action="book_appoint_sub.php?userid=<?php echo $userid;?>">

                                <input type="hidden" name="docid" value="<?php echo $row['d_id'];?>" />
                                <input type="hidden" name="docname" value="<?php echo $row['d_name'];?>" />
                                <!-- <input type="hidden" name="userid" value="" /> -->

                                


                                
                                Reason to Book Appointment:
                                <div class="form-group">
                                    <input type="text-field" class="form-control" placeholder="reason may include if you have any symptoms" name="reason" >
                                </div>

                                Schedule an Appointment at:
                                <div class="form-group">
                                    <!-- <input type="text" class="form-control" placeholder="DD-MM-YYY HH:MM:AM/PM" name="schedule" required="true"> -->
                                    <input type="datetime-local"  class="form-control" placeholder="DD-MM-YYY HH:MM:AM/PM" name="schedule" required="true">
                                </div>
                                <hr>

                                <button type="submit" name="submit" type="update" class="btn btn-success btn-block">Schedule</button>
                                </form>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>




    </body>
</html