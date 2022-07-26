<?php
require '../includes/common.php';
?>
<!DOCTYPE html>

<!-- Add a new Doctor -->

<html>
<head>
        <title>Admin Add Doctor | Health Consultancy Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
        
         <?php
         include 'header.php';
         ?>

        <div class= "image_home" style="text-align:left;">
        <div class="container">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                        <h2>Add Doctor Details</h2><hr>
                        <form method="POST" action="add_doctor_sub.php">
                            NAME:
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="dname"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>

                            SPECIALIZATION:
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" name="dspecial"  required = "true">
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
                                <input class="form-control" placeholder="Qualification" name="dquali"  required = "true">
                            </div>

                            EXPERIENCE:
                            <div class="form-group">
                                <input class="form-control" placeholder="Experience Gained" name="dexp"  required = "true">
                            </div>

                            AGE:
                            <div class="form-group">
                                <input class="form-control" placeholder="Age " name="dage"  required = "true">
                            </div>

                            GENDER:
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" name="dgender"  required = "true">
                                    <option selected>Select Gender</option>
                                    <option value="MALE">MALE</option>
                                    <option value="FEMALE">FEMALE</option>
                                    
                                    <option value="OTHERS">OTHERS</option>
                                </select>
                            </div>

                            CONTACT NUMBER:
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Tele Phone Number" name="dcontact" required = "true">
                            </div>

                            EMAIL ADDRESS:
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="demail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>

                            PASSWORD:
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="dpassword" required = "true"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>

                            CITY:
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="dcity" required = "true">
                            </div>

                            ADDRESS:
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="daddress" required = "true">
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
            </div>
            </div>
        </div>
        </div>
       
    </body>
</html>
