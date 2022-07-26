<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "hcs");

$userid = $_GET['userid'];

?>

        
<div class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container">
                
        <!--header with name of the website-->
                
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            
            <?php
            if(isset($_SESSION['u_email']))
            {
            ?>
                <a class="navbar-brand" href="user_dashboard.php?userid=<?php echo $userid;?>">Health Consultancy Service</a>
            
            <?php
            }
            else
            {
            ?>
                <a class="navbar-brand" href="../index.php">Health Consultancy Service</a>
            <?php
            }
            ?>
            
        </div>
                
        <!--links for login and signup page-->
              
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                        
                <?php
                
                if(isset($_SESSION['u_email']))
                {
                ?>
                <li><a href="user_dashboard.php?userid=<?php echo $userid;?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                
                
                <li><a href="setting.php?userid=<?php echo $userid;?>"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
                
                
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        
                
                <?php
                }
                else
                {
                ?>
                <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               
               
                        
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>

