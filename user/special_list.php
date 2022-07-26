<?php
require '../includes/common.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Doctors | Health Consultancy Service</title>|
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet"  href="../style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>

        <?php
        include 'header.php';
        $userid=$_GET['userid'];
        ?>
        
        <div class="image_home">
            <div class="container">
                <div class="page-header">
                    <a href="user_dashboard.php?userid=<?php echo $userid?>" style="float:left;" class="btn btn-primary">Back</a>
                    <h2 style = "color : skyblue;">SPECIALISTS</h2>
                </div>
   
                <form method="POST" action="list_special_doc.php">
                        
                    <div class="col-md-4 col-sm-3">
                        <div class="thumbnail">
                            <img src="../images/cardio_1.jpeg" alt="cardio">
                            <div class="caption">
                                <?php $cardio="CARDIOLOGIST";?>
                                <h3><?php echo $cardio;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $cardio;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/neuro_1.jpg" alt="neuro">
                            <div class="caption">
                                
                                <?php $neuro="NEUROLOGIST";?>
                                <h3><?php echo $neuro;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $neuro;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/dentist_1.jpeg" alt="dentist">
                            <div class="caption">
                                
                                <?php $dental="DENTIST";?>
                                <h3><?php echo $dental;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $dental;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail" >
                            <img src="../images/dermis_1.jpg" alt="cardio" width="94%">
                            <div class="caption">
                                
                                <?php $derm="DERMATOLOGIST";?>
                                <h3><?php echo $derm;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $derm;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>
                

                
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/allergy_1.jpg" alt="allergy" width="97%">
                            <div class="caption">
                                
                                <?php $allergic="ALLERGIST";?>
                                <h3><?php echo $allergic;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $allergic;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/nephron_1.jpg" alt="nephron">
                            <div class="caption">
                                
                                <?php $nephro="NEPHROLOGIST";?>
                                <h3><?php echo $nephro;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $nephro;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/pedia_1.jpg" alt="cardio">
                            <div class="caption">
                                
                                <?php $pedia="PEDIATRICIANS";?>
                                <h3><?php echo $pedia;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $pedia;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/psycha_1.jpg" alt="psycha" width="98%">
                            <div class="caption">
                                
                                <?php $psych="PSYCHIATRISTS";?>
                                <h3><?php echo $psych;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $psych;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="../images/psycha_1.jpg" alt="psycha" width="98%">
                            <div class="caption">
                                
                                <?php $other="OTHERS";?>
                                <h3><?php echo $other;?></h3>
                                <a href="special_doc_list.php?userid=<?php echo $userid;?>&id=<?php echo $other;?>" class="btn btn-primary btn-block">View doctors</a>
                            </div>
                        </div> 
                    </div>    
                </form>

            </div>
        </div>
    </body>
</html>
