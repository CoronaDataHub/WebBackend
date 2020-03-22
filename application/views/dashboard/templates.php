<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Corona-DataHub * Admin-Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icon/favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css">
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>assets/css/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>assets/css/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/typography.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default-css.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- preloader area start -->
<div id="preloader">
	<div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
	<!-- sidebar menu area start -->
	<div class="sidebar-menu">
		<div class="sidebar-header">
			<div class="logo">
				<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/icon/logo-design.png" alt="logo"></a>
			</div>
		</div>
		<div class="main-menu">
			<div class="menu-inner">
				<nav>
					<ul class="metismenu" id="menu">
						<li class="active">
							<a href="<?php echo base_url('dashboard/templates')?>" aria-expanded="true"><i class="ti-list"></i><span>Templates</span></a>
						</li>
						<li>
							<a href="<?php echo base_url('dashboard/contact')?>" aria-expanded="true"><i class="ti-book"></i><span>Kontakt</span></a>
						</li>
						<li>
							<a href="<?php echo base_url('dashboard/api')?>" aria-expanded="true"><i class="ti-pie-chart"></i><span>API-Anfragen</span></a>
						</li>
						<li>
							<a href="<?php echo base_url('dashboard/quellen')?>" aria-expanded="true"><i class="ti-palette"></i><span>Quellen</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- inside -->
	<div class="main-content">
		<div class="col-lg-12 mt-10 text-center">
			<br>
			<h3 class="text-white text-left">API-Templates</h3>
			<table class="table text-center">
				<thead class="text-uppercase">
				<tr class="">
					<th scope="col">ID</th>
					<th scope="col">Author</th>
					<th scope="col">Nachricht</th>
					<th scope="col">Aktion</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($templates as $template): ?>
					<?php if($template['type'] == 'API') { ?>
						<tr>
							<th><?php echo $template['id'] ?></th>
							<th><?php echo $template['author'] ?></th>
							<th><?php echo strip_tags(substr($template['text'], 0, 50)); ?></th>
							<th><button type="button" class="btn btn-info" data-toggle="modal" data-target="#my_modal_<?php echo $template['id'];?>">Bearbeiten</button></th>
						</tr>

						<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="my_modal_<?php echo $template['id']; ?>">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">API-Template #<?php echo $template['id']; ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="" method="post">
										<input type="hidden" name="id" value="<?php echo $template['id']; ?>">
										<div class="modal-body">
											<label for="answer">Antwort:</label>
											<textarea class="form-control" id="answer" name="answer" rows="3"><?php echo $template['text']; ?></textarea>
										</div>
										<h6>Eine Liste der Placeholder findest du in der <a href="https://github.com/CoronaDataHub/WebBackend/blob/master/README.md" target="_blank">README.</a></h6>
										<br>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary mr-auto">Speichern</button>
											<a href="<?php echo site_url() ?>dashboard/templates/delete/<?php echo $template['id'] ?>"><button type="button" class="btn btn-danger">Löschen</button></a>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
				</tbody>
			</table>

			<br>
			<h3 class="text-white text-left">Contact-Templates</h3>
			<table class="table text-center">
				<thead class="text-uppercase">
				<tr class="">
					<th scope="col">ID</th>
					<th scope="col">Author</th>
					<th scope="col">Nachricht</th>
					<th scope="col">Aktion</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($templates as $template): ?>
					<?php if($template['type'] == 'CONTACT') { ?>
						<tr>
							<th><?php echo $template['id'] ?></th>
							<th><?php echo $template['author'] ?></th>
							<th><?php echo strip_tags(substr($template['text'], 0, 50)); ?></th>
							<th><button type="button" class="btn btn-info" data-toggle="modal" data-target="#my_modal_<?php echo $template['id'];?>">Bearbeiten</button></th>
						</tr>

						<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="my_modal_<?php echo $template['id']; ?>">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Contact-Template #<?php echo $template['id']; ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="" method="post">
										<input type="hidden" name="id" value="<?php echo $template['id']; ?>">
										<div class="modal-body">
											<label for="answer">Antwort:</label>
											<textarea class="form-control" id="answer" name="answer" rows="3"><?php echo $template['text']; ?></textarea>
										</div>
										<h6>Eine Liste der Placeholder findest du in der <a href="https://github.com/CoronaDataHub/WebBackend/blob/master/README.md" target="_blank">README.</a></h6>
										<br>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary mr-auto">Speichern</button>
											<a href="<?php echo site_url() ?>dashboard/templates/delete/<?php echo $template['id'] ?>"><button type="button" class="btn btn-danger">Löschen</button></a>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
				</tbody>
			</table>

			<br>
			<h3 class="text-white text-left">Quellen-Templates</h3>
			<table class="table text-center">
				<thead class="text-uppercase">
				<tr class="">
					<th scope="col">ID</th>
					<th scope="col">Author</th>
					<th scope="col">Nachricht</th>
					<th scope="col">Aktion</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($templates as $template): ?>
					<?php if($template['type'] == 'QUELLEN') { ?>
						<tr>
							<th><?php echo $template['id'] ?></th>
							<th><?php echo $template['author'] ?></th>
							<th><?php echo strip_tags(substr($template['text'], 0, 50)); ?></th>
							<th><button type="button" class="btn btn-info" data-toggle="modal" data-target="#my_modal_<?php echo $template['id'];?>">Bearbeiten</button></th>
						</tr>

						<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="my_modal_<?php echo $template['id']; ?>">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Quellen-Template #<?php echo $template['id']; ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="" method="post">
										<input type="hidden" name="id" value="<?php echo $template['id']; ?>">
										<div class="modal-body">
											<label for="answer">Antwort:</label>
											<textarea class="form-control" id="answer" name="answer" rows="3"><?php echo $template['text']; ?></textarea>
										</div>
										<h6>Eine Liste der Placeholder findest du in der <a href="https://github.com/CoronaDataHub/WebBackend/blob/master/README.md" target="_blank">README.</a></h6>
										<br>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary mr-auto">Speichern</button>
											<a href="<?php echo site_url() ?>dashboard/templates/delete/<?php echo $template['id'] ?>"><button type="button" class="btn btn-danger">Löschen</button></a>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endforeach; ?>
				</tbody>
			</table>
			<br>
			<button type="button" class="btn btn-primary" style="float: left;" data-toggle="modal" data-target="#my_modal_new_template">Template hinzufügen</button>
			<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="my_modal_new_template">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Template hinzufügen</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="" method="post">
							<div class="modal-body">
								<label for="selectedtype">Type</label>
								<select class="form-control" id="type" name="type">
									<option>API</option>
									<option>CONTENT</option>
									<option>QUELLEN</option>
								</select>
								<br>
								<label for="answer">Antwort:</label>
								<textarea class="form-control" id="answer" name="answer" rows="3"></textarea>
							</div>
							<h6>Eine Liste der Placeholder findest du in der <a href="https://github.com/CoronaDataHub/WebBackend/blob/master/README.md" target="_blank">README.</a></h6>
							<br>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary mr-auto">Speichern</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="footer-area">
			<p>© Copyright 2020. All right reserved.</p>
		</div>
	</footer>
	<!-- jquery latest version -->
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<!-- bootstrap 4 js -->
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>
	<!-- start chart js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<!-- start highcharts js -->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<!-- start zingchart js -->
	<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
	<script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
	</script>
	<!-- all line chart activation -->
	<script src="<?php echo base_url(); ?>assets/js/line-chart.js"></script>
	<!-- all pie chart -->
	<script src="<?php echo base_url(); ?>assets/js/pie-chart.js"></script>
	<!-- others plugins -->
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
</body>

</html>
