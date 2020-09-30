<?php
 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Hostel Manager </title>



	<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
	<div class="banner" id="home">
		<div class="cd-radial-slider-wrapper">

<!--Header-->
<header>
	<div class="container agile-banner_nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<h1><a><div class = "logo-img"> </div></a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="allocate_room.php">Allocate Rooms</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="message_hostel_manager.php">Messages Received</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Rooms
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="allocated_rooms.php">Allocated Rooms</a>
							</li>
							<li>
								<a href="empty_rooms.php">Empty Rooms</a>
							</li>
							<li>
								<a href="vacate_rooms.php">Vacate Rooms</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact_manager.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin/manager_profile.php">My Profile</a>
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

<div id = "slides" class="carousel slide" data-ride="carousel">
<ul class = "carousel-indicators">
<li data-target="#slides" data-slide-to = "0" class = "active"></li>

<li data-target="#slides" data-slide-to ="1"></li>

<li data-target="#slides" data-slide-to ="2"></li>
</ul>
<div class = "carousel-inner">
<div class = "carousel-item active">
<img src = "./web_home/images/aandb.jpg">
<div class = "carousel-caption">
  <h1 class = "display-2">Hostel</h1>
  <h3>Alva's Institute Of Engineering & Technology</h3>


</div>
</div>

<div class = "carousel-item">
<img src = "./web_home/images/ablock.jpg">
<div class = "carousel-caption">
  <h1 class = "display-2">Hostel</h1>
</div>
</div>

<div class = "carousel-item">
<img src = "./web_home/images/aa.jpg">
<div class = "carousel-caption">
  <h1 class = "display-2">Hostel</h1>
</div>
</div>

</div>
</div>

<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
<a class="navbar-brand" href="http://www.aiet.org.in" target="_blank"> AIET MOODBIDRE</span></a>
		</div>
		<div class="footer-grid">

			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home_manager.php">Home</a>
					</li>
					<li>
						<a href="allocate_room.php">Allocate</a>
					</li>
					<li>
						<a href="contact_manager.php">Contact</a>
					</li>
					<li>
						<a href="admin/manager_profile.php">Profile</a>
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



	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>
