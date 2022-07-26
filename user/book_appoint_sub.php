<?php

require '../includes/common.php';

$userid=$_GET['userid'];  
            


$query = "SELECT * FROM users where u_id='$userid'";
$result = mysqli_query($con,$query);
$row= mysqli_fetch_array($result);

$user_id=$row['u_id'];
$useremail = $row['u_email'];
$usercontact=$row['u_contact'];
$useraddress=$row['u_address'];
$useraptmtreason = $_POST['reason'];
$schedule = $_POST['schedule'];


$docid = $_POST['docid'];
$docname = $_POST['docname'];



// if(mysqli_num_rows($select_query_result )> 0)
// {
    
//     mysqli_query($con, $update) or die(mysqli_error());
//     $status = "The Doctor with similar email Id is already registered"</br></br>
//     <a href='list_doctors.php'>Click here to add another record</a>;
//     echo '<p style="color:#FF0000;">'.$status.'</p>';
// }
//  else 
// {
  
?>
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
     <div class="image_home" style="height:100vh;">
     <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3">
           <div class="card">
              <?php
               // $nowvariable = new DateTime();
               $currentDateTime = date('Y-m-d H:i');
               
               echo "Current Date time:";
               echo $currentDateTime;
               

               $nowvariable = date('Y-m-d H:i');
               //echo $schedule->format('Y-m-d H:i:s');
               echo "\r\nScheduling Time:";
               echo $schedule;
               
               if($nowvariable > $schedule) {
                  
                  ?>

                  <div class="d-flex justify-content-center mb-2">
                     <h1>Given 'DATE' is in past, unable to schedule an appoint</h1>
                     <h3>(Please choose an future date)</h3><br>
                     <a href="book_appoint.php?userid=<?php echo $userid;?>&id=<?php echo $docid;?>"  class="btn btn-danger">Book Appointment Again</a>
                  <br><br>
                  </div>
                  <?php
                  
               }
               else{
                  $insert =  "INSERT INTO appoint (user_id,user_email,user_contact,user_aptmt_reason,u_address,doc_id,doc_name,u_scheduled_at,u_application_submitted_at)
                  VALUES ('$user_id', '$useremail', '$usercontact', '$useraptmtreason','$useraddress','$docid','$docname','$schedule',now())";
                  $insert_query_result = mysqli_query($con, $insert);   
               
                     if($insert_query_result)
                     {
                        $appoint_id = mysqli_insert_id($con);
                     
                        $_SESSION['appoint_id']= $appoint_id;
                        //$_SESSION['u_username']=$uname;
                        echo ' Doctor Details were inserted successfully!!! ';
                        header("location: user_appoint_details.php?userid=".$userid. "&id=" . $docid);
                        
                     }
                     else 
                     {
                        echo 'Doctor Registration failed';
                        header("location:doc_details.php?userid=".$userid. "&id=" . $docid);
                     }

                  ?>
                
               </div>
            </div>
         </div>
         </div>
      </body>
   </html>
 
   <?php
  }

?>

