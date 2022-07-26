<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "hcs");


?>

        
<div class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container">
                
        <!--header with name of the website-->
                
        <div class="navbar-header">
            <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            
            
                <a class="navbar-brand" href="index.php">Health Consultancy Service</a>
        
            
        </div>
                
        <!--links for login and signup page-->
              
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                        
    
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               
     
            </ul>
        </div>
    </div>
</div>

