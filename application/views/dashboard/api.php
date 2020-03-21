<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Corona-DataHub</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="">
					<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50px" height="50px" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
					<h4 class=""><?php echo $user["email"] ?></h4>
                    <a href="#">Ausloggen</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo base_url('dashboard/contact')?>">
                                <i class="fas fa-address-book"></i>Kontakt</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('dashboard/api')?>">
                                <i class="fas fa-key"></i>API-Key Request</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="<?php echo base_url('dashboard/quellen')?>">
                                <i class="fas fa-copy"></i>Quellen
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30"></div>
            </header>


            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">beschwert euch bei pascal dass das so kacke aussieht</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
					<tr>
						<th>Datum</th>
						<th>Name</th>
						<th>E-Mail</th>
						<th>Status</th>
						<th>Aktion</th>
					</tr>
                    </thead>
                    <tbody>
					<?php foreach($apirequests as $apirequest): ?>
						<tr>
							<td><?php echo date("d.m.Y", strtotime($apirequest['date'])) ?></td>
							<td><?php echo $apirequest['name'] ?></td>
							<td><?php echo $apirequest['email'] ?></td>
							<?php if($apirequest['status']) { ?>
								<td><button type="button" class="btn au-btn--green">Beantwortet</button></td>
							<?php } else { ?>
								<td><button type="button" class="btn btn-danger">Offen</button></td>
							<?php } ?>
							<td><button type="button" class="btn au-btn--blue" data-toggle="modal" data-target="#my_modal_<?php echo $apirequest['id'];?>">Antworten</button></td>
						</tr>

						<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="my_modal_<?php echo $apirequest['id']; ?>">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">API-Key Anfrage #<?php echo $apirequest['id']; ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<h6>Originalnachricht:</h6>
										<?php echo $apirequest['text'] ?>
										<br>
										<br>
										<label for="answer">Antwort:</label>
										<textarea class="form-control" id="answer" rows="3"></textarea>
									</div>
									<button type="button" class="btn btn-primary">Antwort senden</button>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
            <!-- END STATISTIC-->
        </div>
    </div>



    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url(); ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/select2/select2.min.js">
    </script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
