<?php
require '../includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>List of doctors | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
</head>
<body>
 
    
<div class="container-sm border py-3 my-3">
<!-- <div class="container-fluid"> -->
    <!-- <div class="row"> -->
        <div class="col-md-12">
            <div class="page-header">
              <?php
                include 'header.php';
              ?>
            </div>
            <div class="page-header">
                <h2 align="center">List of doctors available</h2>
                <a href="admindashboard.php" style="float:left;" class="btn btn-primary">Back</a>
            <a href="add_doctor.php" style="float:right;" class="btn btn-primary">Add Record</a>
            </div>
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Doctor ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Specialization</th>
                  <th scope="col">Qualification</th>
                  <th scope="col">Experience</th>
                  <th scope="col">Age</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Contact</th>
                  <th scope="col">Email</th>
                  <th scope="col">City</th>
                  <th scope="col">Address</th>
                  <th scope="col">Created at</th>
                  <th scope="col">Last Modified at</th>
                </tr>
              </thead>
              <tbody>
              <?php

                // $result = mysqli_query($con,"SELECT * FROM doctor");
                // $row= mysqli_fetch_array($result);

                $query="select * from doctor order by d_id"; // Fetch all the data from the table customers

                $result=mysqli_query($con,$query);
                $count = 1;

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $count;?></th>
                    <td><?php echo $array[0];?></td>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                    <td><?php echo $array[10];?></td>
                    <td><?php echo $array[11];?></td>
                    <td><?php echo $array[12];?></td>
                    <td><?php echo $array[13];?></td>
                    <td>
                        <a href="edit_doc_record.php? id=<?php echo $array[0]; ?>" class="btn btn-primary" >Edit</a>
                        
                    </td>
                    <td>
                        <a href="delete_doc_record.php? id=<?php echo $array[0]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" >Delete</a>  

                    </td>
                    
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
    <!-- </div>         -->
</div>

</body>
</html>