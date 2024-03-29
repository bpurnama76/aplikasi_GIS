<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GISTARA - Management</title>

	<script src="<?php echo base_url(); ?>template/js/jquery-1.11.1.min.js"></script>
	<link href="<?php echo base_url(); ?>template/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/fontawesome/css/all.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/DataTables/datatables.min.css">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>template/js/html5shiv.js"></script>
	<script src="<?php echo base_url(); ?>template/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><span>Dinas</span> Tata Ruang</a>
					<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
								</a>
								<div class="message-body"><small class="pull-right">3 mins ago</small>
									<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
								</a>
								<div class="message-body"><small class="pull-right">1 hour ago</small>
									<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
						<li><a href="#">
							<div><em class="fa fa-envelope"></em> 1 New Message
								<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
								</a></li>
								<li class="divider"></li>
								<li><a href="#">
									<div><em class="fa fa-user"></em> 5 New Followers
										<span class="pull-right text-muted small">4 mins ago</span></div>
									</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- /.container-fluid -->
			</nav>
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">Username</div>
						<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="divider"></div>
				<form role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
				<ul class="nav menu">
					<?php
					$main_menu = $this->db->get_where('tbl_menu',array('induk'=>0))->result();
					foreach ($main_menu as $main) {
						$sub_menu =$this->db->get_where('tbl_menu',array('induk'=>$main->id_menu));
						if ($sub_menu->num_rows()>0) {
							echo "<li class='parent '>
							<a data-toggle='collapse' href='#".$main->link."'>
							<em class='".$main->icon."'>&nbsp;</em> $main->nama_menu <span data-toggle='collapse' href='".$main->link."' class='icon pull-right'><em class='fa fa-plus'></em></span>
						</a>
						<ul class='children collapse' id='".$main->link."'>";
							foreach ($sub_menu->result() as $sub) {
								echo "<li>"
								.anchor($sub->link, "<span class='".$sub->icon."'>&nbsp;</span> ".($sub->nama_menu))."</li>";
						}
						echo "</ul></li>";
					} else {
						echo "<li class=''>"
						.anchor($main->link, "<em class='".$main->icon."'>&nbsp;</em>".($main->nama_menu))."</li>";	
					}
				}
				?>
				<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
		</div><!--/.sidebar-->
		<!--.main-->
		<?php echo $contents; ?>

		<!--/.main-->

		<script src="<?php echo base_url(); ?>template/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>template/js/chart.min.js"></script>
		<script src="<?php echo base_url(); ?>template/js/chart-data.js"></script>
		<script src="<?php echo base_url(); ?>template/js/easypiechart.js"></script>
		<script src="<?php echo base_url(); ?>template/js/easypiechart-data.js"></script>
		<script src="<?php echo base_url(); ?>template/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>template/js/custom.js"></script>
		<script type="<?php echo base_url(); ?>template/fontawesome/js/all.min.js"></script>
		<script>
			window.onload = function () {
				var chart1 = document.getElementById("line-chart").getContext("2d");
				window.myLine = new Chart(chart1).Line(lineChartData, {
					responsive: true,
					scaleLineColor: "rgba(0,0,0,.2)",
					scaleGridLineColor: "rgba(0,0,0,.05)",
					scaleFontColor: "#c5c7cc"
				});
			};
		</script>
		
	</body>
	</html>