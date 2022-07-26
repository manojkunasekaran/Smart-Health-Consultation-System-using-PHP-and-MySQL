<?php
require '../includes/common.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Specialist | Health Consultancy Service </title>
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

      <?php 
        $id=$_GET['id']; 
        $userid=$_GET['userid'];
      ?>

      <div class="container">
        <div class="page-header">
          <a href="special_list.php?userid=<?php echo $userid?>" style="float:left;" class="btn btn-primary">Back</a>
          <h2 style="color: skyblue;"><?php echo $id;?></h2>
        </div>    

        <?php

          $query= "SELECT * FROM doctor WHERE d_special='$id'"; // Fetch all the data from the table customers
          $result=mysqli_query($con,$query);     
          $count = $result->num_rows;
          $rows = array();
          while($row = mysqli_fetch_array($result))
            $rows[] = $row;
          foreach($rows as $row){ 
            $dname = stripslashes($row['d_name']);
            $dspecial = stripslashes($row['d_special']);
            $did = $row['d_id'];
            ?>
            <div class="image_home">
              <div class="container">
                
                <div class="row">
                  <div class="col-lg-3">
                    
                    <div class="card mb-4">
                      <!-- <div class="card-body text-center"> -->
                        <img src="../images/pic_boy.jpg" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;"></div>
                      <!-- </div> -->
                    </div>

                    <div class="col-lg-8 text-left">
                      <div class="card">
                      <h3 class="my-3"><?php echo $row['d_name']?></h3>
                      <p class="text-muted mb-2"><?php echo $row['d_quali'];?></p>
                      <p class="text-muted mb-1"><?php echo $row['d_special'];?></p>
                      <p class="text-muted mb-1"><?php echo $row['d_experience'];?></p>     
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <br>
                    <div class="col-lg-12 mb-4">
                      <a href="doc_details.php?userid=<?php echo $userid;?>&id=<?php echo $did;?>"  class="btn btn-primary btn-block">View Details</a>       
                    </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          <?php 
          } 
          ?>


        <?php mysqli_free_result($result); ?>

      </div>
    </div>
  </body>
</html>


