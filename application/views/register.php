<html>
<head>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/signin.css" rel="stylesheet" type="text/css" />
</head>
<body>
<body class="text-center">
<form class="form-signin" action="" method="post">
	<?php if(isset($_SESSION['error'])) { ?>
		<div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
	<?php } else if(isset($_SESSION['success'])) { ?>
		<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
	<?php } ?>
	<?php echo validation_errors('<div class="alert alert-danger">', '</div>');?>
	<img class="mb-4" src="<?php echo base_url(); ?>assets/img/logo.png" alt="" width="100" height="100">
	<h1 class="h3 mb-3 font-weight-normal">Admin Register</h1>
	<label for="inputEmail" class="sr-only">E-Mail Address</label>
	<input type="email" id="email" name="email" class="form-control" placeholder="E-Mail Address" required autofocus>
	<label for="inputPassword" class="sr-only">Password</label>
	<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

	<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
	<p class="mt-5 mb-3 text-muted">&copy; Corona-DataHub.com 2020</p>
</form>
</body>
</body>
</html>
