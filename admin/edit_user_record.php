<?php

require '../includes/common.php';
include 'header.php';

?>
<!DOCTYPE html>
<html>
    <head>
      
        <title>Update User Record | Health Consultancy Service </title>
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
            $result = mysqli_query($con,"SELECT * FROM users WHERE u_id='$id'");
            $row= mysqli_fetch_array($result);

            $status = "";
            if(isset($_POST['new']) && $_POST['new']==1)
            {
            $uname =$_REQUEST['uname'];
            $uage = $_REQUEST['uage'];
            $ugender = $_REQUEST['ugender'];
            $uemail = $_REQUEST['uemail'];
            $ucontact = $_REQUEST['ucontact'];
            $ucity = $_REQUEST['ucity'];
            $uaddress = $_REQUEST['uaddress'];
          
            $update="update users set u_name='".$uname."', u_email='".$uemail."', u_age='".$uage."', u_gender='".$ugender."',
            u_contact='".$ucontact."', u_city='".$ucity."', u_address='".$uaddress."'
             where u_id='".$id."'";
            if(mysqli_query($con, $update) === true){
                header("location: list_users.php");
            }
            else{
                die(mysqli_error());
            } 
                
            }else {
            ?>
           <div class= "image_home">
                <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                
          
                                <h1>Update Record</h1><hr>

                                <form name="form-group" method="POST" action="">

                                <input type="hidden" name="new" value="1" />
                                
                                <input name="id" type="hidden" value="<?php echo $row['u_id'];?>" />
                                
                                NAME:
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="uname"  required = "true" value="<?php echo $row['u_name'];?>" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                </div>

                                AGE:
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Age" name="uage" required = "true" value="<?php echo $row['u_age'];?>">
                                </div>

                                GENDER:
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" name="ugender"  required = "true" value="<?php echo $row['u_gender'];?>">
                                        <option selected>Select Gender</option>
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option>
                                        <option value="OTHERS">OTHERS</option>
                                    </select>
                                </div>

                                EMAIL ADDRESS:
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email"  name="uemail" required = "true" value="<?php echo $row['u_email'];?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                </div>

                                <!-- <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                </div> -->

                                CONTACT NUMBER:
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Tele Phone Number" name="ucontact" required = "true" value="<?php echo $row['u_contact'];?>">
                                </div>

                                
                                CITY:
                                <div class="form-group">
                                    <input class="form-control"  placeholder="City" name="ucity" required = "true" value="<?php echo $row['u_city'];?>">
                                </div>

                                ADDRESS:
                                <div class="form-group">
                                    <input class="form-control"  placeholder="Address" name="uaddress" required = "true" value="<?php echo $row['u_address'];?>">
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