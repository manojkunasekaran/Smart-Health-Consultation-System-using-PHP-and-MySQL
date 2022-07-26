<?php
require '../includes/common.php';
?>

<!DOCTYPE html>
<html>

<head>
  <title>List of users | Health Consultancy Service </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
</head>

<body>

  <div class="container">
    <div class="col-md-12">
      <div class="page-header">

      <?php
      include 'header.php';
      $userid = $_GET['userid'];
      ?>
      </div>

      <div class="page-header">
        <a href="user_dashboard.php?userid=<?php echo $userid;?>" style="float:left;" class="btn btn-primary">Home</a>
        <h1 style = "color : skyblue; text-align:center;">List of your Appointment details</h2>
      </div>


      <table class="table">
        <thead>
          <tr>

          <th scope="col">S.No</th>
          <th scope="col">Appointment ID</th>
          <th scope="col">User mail</th>
          <th scope="col">User Contact</th>
          <th scope="col">Appointment Reason</th>
          <th scope="col">User Address</th>

          <th scope="col">Doctor ID</th>
          <th scope="col">Doctor Name</th>
          <th scope="col">Scheduled at</th>
          <th scope="col">Consulted at</th>
          <th scope="col">Prescription</th>
          <th scope="col">Application Submitted At</th>
          <th scope="col">Last modified at</th>

          </tr>
        </thead>

        <tbody>

          <?php
          $query="select * from appoint where user_id='$userid' order by user_id"; // Fetch all the data from the table customers
          $result=mysqli_query($con,$query);
          $count = 1;
          ?>
          <?php if ($result->num_rows > 0): ?>
          <?php while($array=mysqli_fetch_row($result)): ?>

          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $array[0];?></td>

            <td><?php echo $array[2];?></td>
            <td><?php echo $array[3];?></td>
            <td><?php echo $array[4];?></td>
            <td><?php echo $array[5];?></td>


            <td><?php echo $array[6];?></td>
            <td><?php echo $array[7];?></td>

            <td><?php echo $array[8];?></td> <!-- schedule  -->

            
            <td><?php echo $array[9];?></td>  <!-- consulted at -->
           

            <td><?php echo $array[10];?></td>

            <td><?php echo $array[11];?></td>
            <td><?php echo $array[12];?></td>

          </tr>

          <?php $count++; ?>
          <?php endwhile; ?>
          <?php else: ?>
            
          <tr>
            <td colspan="3" rowspan="1" headers="">No Data Found</td>
          </tr>

          <?php endif; ?>

          <?php mysqli_free_result($result); ?>

        </tbody>
      </table>
      </div>
    </div>        
  </div>
</body>
</html>