<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Hostel </title>


	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home">
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

	        <h1><a  href="home.php"><div class = "logo-img"> </div></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="message_user.php">Message Received</a>
					</li>
						<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>

			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner -->

<!-- services -->
<section class="services py-5">
	<div class="container py-lg-5 py-3">
		<h2 class="heading text-capitalize mb-sm-5 mb-4">Kumardavra Boys Hostel </h2>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 service-grid1">
				<a href="application_form.php"><h3>A Block</h3></a>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>A Block</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5 service-grid1">
				<h3>B Block</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>3 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>B Block</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5 service-grid1">
				<h3>C Block</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>2 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>C Block</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<h3>D Block</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>1 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>D Block</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- services -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for A-Block</h3>
								<p>A Block</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=A"><img src="web_home/images/s1.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for B-Block</h3>
								<p>B Block</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=B"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for C-Block</h3>
								<p>C Block</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=C"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for D-Block</h3>
								<p>D Block</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=D"><img src="web_home/images/s4.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- banner-bottom -->

<br>

<!-- team -->

<!-- //team -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
	<a class="navbar-brand" href="http://www.aiet.org.in" target="_blank"> AIET MOODBIDRE</span></a>
		<div class="footer-grid">

			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home.php">Home</a>
					</li>

					<li>
						<a href="services.php">Hostels</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="profile.php">Profile</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->

<!-- //js-scripts -->

</body>
</html>
