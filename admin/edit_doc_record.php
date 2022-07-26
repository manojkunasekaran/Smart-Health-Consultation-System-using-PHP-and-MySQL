<?php

require '../includes/common.php';
include 'header.php';

?>
<!DOCTYPE html>
<html>
    <head>
      
        <title>Update Doctor Record | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    <body>
    
            <?php

            $id=$_GET['id'];
            $result = mysqli_query($con,"SELECT * FROM doctor WHERE d_id='$id'");
            $row= mysqli_fetch_array($result);

            $status = "";
            if(isset($_POST['new']) && $_POST['new']==1)
            {
            $dname =$_REQUEST['dname'];
            $dspecial = $_REQUEST['dspecial'];
            $dquali = $_REQUEST['dquali'];
            $dexp = $_REQUEST['dexp'];
            $dage = $_REQUEST['dage'];
            $dgender = $_REQUEST['dgender'];
            $dcontact = $_REQUEST['dcontact'];
            $demail = $_REQUEST['demail'];
            $dcity = $_REQUEST['dcity'];
            $daddress = $_REQUEST['daddress'];
          
            $update="update doctor set d_name='".$dname."',
            d_special='".$dspecial."', d_quali='".$dquali."', d_experience = '".$dexp."', d_age = '".$dage."', d_gender = '".$dgender."', d_contact='".$dcontact."', d_email='".$demail."', d_city='".$dcity."', d_address='".$daddress."'
             where d_id='".$id."'";
            mysqli_query($con, $update) or die(mysqli_error());
            header("location: list_doctors.php");
            }else {
            ?>
           <div class= "image_home" style="text-align:left;">
                <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                
          
                                <h1>Update Record</h1><hr>

                                <form name="form-group" method="POST" action="">

                                <input type="hidden" name="new" value="1" />
                                
                                <input name="id" type="hidden" value="<?php echo $row['d_id'];?>" />
                                
                                NAME:
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="dname"  required = "true" value="<?php echo $row['d_name'];?>" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                </div>

                                SPECIALIZATION:
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" name="dspecial"  required = "true" default="<?php echo $row['d_special'];?>">
                                        <option selected>Select Specilization</option>
                                        <option value="CARDIOLOGIST">CARDIOLOGIST</option>
                                        <option value="NEUROLOGIST">NEUROLOGIST</option>
                                        <option value="DENTIST">DENTIST</option>
                                        <option value="DERMATOLOGIST">DERMATOLOGIST</option>
                                        <option value="ALLERGIST">ALLERGIST</option>
                                        <option value="NEPHROLOGIST">NEPHROLOGIST</option>
                                        <option value="PEDIATRICIANS">PEDIATRICIANS</option>
                                        <option value="PSYCHIATRISTS">PSYCHIATRISTS</option>
                                        <option value="OTHERS">OTHERS</option>
                                    </select>
                                </div>

                                QUALIFICATION:
                                <div class="form-group">
                                    <input class="form-control" placeholder="Qualification" name="dquali"  required = "true" value="<?php echo $row['d_quali'];?>">
                                </div>

                                EXPERIENCE:
                                <div class="form-group">
                                    <input class="form-control" placeholder="Experience Gained" name="dexp"  required = "true" value="<?php echo $row['d_experience'];?>">
                                </div>

                                AGE:
                                <div class="form-group">
                                    <input class="form-control" placeholder="Age" name="dage"  required = "true" value="<?php echo $row['d_age'];?>">
                                </div>

                                GENDER:
                                <div class="form-group">
                                <select class="form-select" aria-label="Default select example" name="dgender"  required = "true" value="<?php echo $row['d_gender'];?>">
                                    <option selected>Select Gender</option>
                                    <option value="MALE">MALE</option>
                                    <option value="FEMALE">FEMALE</option>
                                    
                                    <option value="OTHERS">OTHERS</option>
                                </select>
                                </div>


                    
                                <!-- <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                </div> -->

                                CONTACT NUMBER:
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Tele Phone Number" name="dcontact" required = "true" value="<?php echo $row['d_contact'];?>">
                                </div>

                                EMAIL ADDRESS:
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email"  name="demail" required = "true" value="<?php echo $row['d_email'];?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                </div>

                                CITY:
                                <div class="form-group">
                                    <input class="form-control"  placeholder="City" name="dcity" required = "true" value="<?php echo $row['d_city'];?>">
                                </div>

                                ADDRESS:
                                <div class="form-group">
                                    <input class="form-control"  placeholder="Address" name="daddress" required = "true" value="<?php echo $row['d_address'];?>">
                                </div>

                                <button type="submit" name="submit" value="update" class="btn btn-primary">Update</button>
                                </form>
                                <?php } ?>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html