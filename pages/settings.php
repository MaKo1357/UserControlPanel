<?php checkLoggedIn(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Settings - <?php echo $name; ?></title>
	
	<!-- CORE CSS -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
	<!-- PLUGINS -->
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet">

	<!-- THEME CSS -->
	<link href="assets/css/theme.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
</head>

<body class="fixed-header">
	<header>
		<div class="container">
			<span class="bar hide"></span>
			<a href="/?page=dashboard" class="logo"><img src="assets/img/logo.png" height="40" width="40"></a>
			
			<nav>
				<div class="nav-control">
					<ul>
						<li><a href="/?page=dashboard">Dashboard</a></li>
						<li><a href="https://forum.pr-rp.com" target="_blank">Forums</a></li>
						<li><a href="/?page=online">Online players</a></li>
						<li><a href="/?page=wall-of-fame">Wall of Fame</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">My characters</a>
							<ul class="dropdown-menu default">
								<li><a href="#"><i class="fa fa-user-circle"></i>Albert Gallo</a></li>
								<li><a href="#"><i class="fa fa-user-circle"></i>Jimmy Peizhi</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Log center</a>
							<ul class="dropdown-menu default">
								<li><a href="#"><i class="fa fa-book"></i>Account logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Command logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Payment logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Death logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Weapon logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Inventory logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Property logs</a></li>
								<li><a href="#"><i class="fa fa-book"></i>Admin logs</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Administration panel</a>
							<ul class="dropdown-menu default">
								<li><a href="#"><i class="fa fa-gavel"></i>Ban center</a></li>
								<li><a href="#"><i class="fa fa-address-card"></i>View account</a></li>
								<li><a href="#"><i class="fa fa-address-card-o"></i>Manage account</a></li>
								<li><a href="#"><i class="fa fa-pie-chart"></i>Faction management</a></li>
								<li><a href="#"><i class="fa fa-black-tie"></i>Staff management</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			
			<div class="nav-right">
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span>Habibi</span></a>
					
					<ul class="dropdown-menu">
						<li><a href="/?page=settings"><i class="fa fa-gear"></i>Settings</a></li>
						<li><a href="/?page=logout"><i class="fa fa-power-off"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	
	<div id="wrapper">	
		<section class="hero" style="background-image: url(assets/img/cover/cover-game.png);">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Account Settings</div>
				</div>
			</div>
		</section>
		
		<section class="elements bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>Change forumname</h3>
						<p>This will re-assign the forum username linked to your game characters.</p>
						
						<form class="form-inline">
							<div class="form-group">
								<input type="text" class="form-control" name="forumname" id="forumname" placeholder="Habibi">
							</div>
							
							<button type="button" class="btn btn-primary">Update</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<section class="elements bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>Change password</h3>
						<p>This is your UCP password only, <u>not</u> your in-game character password.</p>
						
						<div class="col-md-5 pull-none margin-auto">
							<form>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Old password">
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control" placeholder="New password">
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Repeat new password">
								</div>
								
								<button type="button" class="btn btn-primary">Update</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="elements bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>Two-factor authentication</h3>
						<p>2FA is an optional but highly recommended security feature. You can read more about two-factor authentication <u><a href="#">here!</a></u></p>
						
						<button type="button" class="btn btn-primary btn-lg btn-outline" data-toggle="modal" data-target=".bs-modal">Enable 2FA</button>
						
						<div class="modal fade bs-modal" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title">Two-factor authentication</h4>
									</div>
									
									<div class="modal-body">
										This feature is still in development.
									</div>
									
									<div class="modal-footer">
										<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	<footer>
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<h4 class="title">Information</h4>
					<p>
						This is an user control panel for the players of <?php echo $name; ?>. This control panel is mainly for account management and administrative tasks. You need to register an account in-game before you can login to the user control panel. All logins or login attempts are being monitored.
						<br><br>Please contact the <?php echo $name; ?> management team through the forums if there are any questions about this user control panel.
					</p>
				</div>
					
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h4 class="title">Quick links</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=4" target="_blank">Announcements</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=7521" target="_blank">Changelog</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=6" target="_blank">Server IP</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=7473" target="_blank">Staff Team</a></li>
								
							</ul>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=91" target="_blank">Server Rules</a></li>
								<li><a href="https://forum.pr-rp.com/showthread.php?t=7" target="_blank">Subscriptions</a></li>
								<li><a href="https://lspd.pr-rp.com" target="_blank">LSPD Forums</a></li>
								<li><a href="https://lsfd.pr-rp.com" target="_blank">LSFD Forums</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<br><br>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=6" target="_blank">Help Desk</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=186" target="_blank">Server Guides</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=77" target="_blank">Modifications</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=60" target="_blank">Faction Forums</a></li>
							</ul>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="nav">
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=42" target="_blank">Ban Appeals</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=29" target="_blank">Player Complaints</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=52" target="_blank">Suggestions</a></li>
								<li><a href="https://forum.pr-rp.com/forumdisplay.php?f=56" target="_blank">Bug Reports</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				&copy; 2017 <?php echo $name; ?>. All rights reserved.<br>
				<i>Design and coding by <?php echo $developer; ?>.</i>
			</div>
		</div>
	</footer>
	
	<!-- JAVASCRIPT -->
	<script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function()
	{
		setInterval(function(){
			$("#message").slideUp("slow");
		}, 6000);
	});
	</script>
	
	<!-- AJAX -->
	<script src="assets/ajax/login.js" type="text/javascript"></script>
	
</body>
</html>