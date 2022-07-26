

<html>
	<head>
	<title> Welcome | Health Consultancy Service </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	</head>

	<body>
	<?php
		require 'includes/common.php';
	?>

	<div id="image_home">
        <div class="container" style="padding-top:5%;">
			<div class="row">
				<div class="column col-lg-6 col-lg-offset-3">
					<?php
						if(isset($_POST['submit']))
						{
							$uemail = $_POST['u_email'];
							$result = mysqli_query($con,"SELECT * FROM users WHERE u_email='" . $_POST['u_email'] . "'");
							$row = $result->fetch_array();

							$fetch_user_id=$row['u_email'];
							$email_id=$row['u_email'];
							$password=$row['u_password'];
							$pass=md5($password);
							if($email==$fetch_user_id) {
								$to = $email_id;
								$subject = "Password";
								$txt = "Your password is : $pass.";
								$headers = "From: mano.1917130@gct.ac.in" . "\r\n" .
								"CC: manojkuna05@gmail.com";
								mail($to,$subject,$txt,$headers);
							}
							else{
								echo 'invalid username';
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>




	</body>



</html>

