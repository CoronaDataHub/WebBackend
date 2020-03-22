<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Corona-DataHub * Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->

		<!-- Icon -->
		<div class="fadeIn first">
			<img src="<?php echo base_url(); ?>assets/images/icon/logo-design.png" id="icon" alt="User Icon" />
		</div>

		<!-- Login Form -->
		<form action="" method="post">
			<?php if(isset($_SESSION['error'])) { ?>
				<div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
			<?php } else if(isset($_SESSION['success'])) { ?>
				<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
			<?php } ?>
			<?php echo validation_errors('<div class="alert alert-danger">', '</div>');?>
			<input type="text" id="email" name="email" class="form-control fadeIn second" placeholder="E-Mail Address">
			<input type="password" id="password" name="password" class="form-control fadeIn third" placeholder="Password">
			<input type="submit" class="fadeIn fourth" value="Log In">
		</form>

		<!-- Remind Passowrd -->
	</div>
</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
