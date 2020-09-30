<?php

 require '../includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Admin </title>

	<link href="../web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- css files -->
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="../web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
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

			<h1><a  href="admin_home.php"><div class = "logo-img"> </div></a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
					</li>
          <li class="nav-item">
						<a class="nav-link" href="create_hm.php">Appoint/Remove Hostel Manager</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="students.php">Students</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin_contact.php">Contact</a>
					</li>
          <li class="nav-item">
						<a class="nav-link" href="studentcont.php">Student Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin_profile.php">My Profile</a>
							</li>
							<li>
								<a href="../includes/logout.inc.php">Logout</a>
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
<div id = "slides" class="carousel slide" data-ride="carousel">
<ul class = "carousel-indicators">
<li data-target="#slides" data-slide-to = "0" class = "active"></li>

<li data-target="#slides" data-slide-to ="1"></li>

<li data-target="#slides" data-slide-to ="2"></li>
</ul>
<div class = "carousel-inner">
<div class = "carousel-item active">
<img src = "../web_home/images/aandb.jpg">
<div class = "carousel-caption">
  <h1 class = "display-2">Hostel</h1>
  <h3>Alva's Institute Of Engineering & Technology</h3>


</div>
</div>

<div class = "carousel-item">
<img src = "../web_home/images/ablock.jpg">
<div class = "carousel-caption">
  <h1 class = "display-2">Hostel</h1>
</div>
</div>

<div class = "carousel-item">
<img src = "../web_home/images/aa.jpg">
<div class = "carousel-caption">
  <h1 class = "display-2">Hostel</h1>
</div>
</div>

</div>
</div>
</div>

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="http://www.aiet.org.in" target="_blank">AIET<span class="display"> MOODBIDRE</span></a>
		</div>
		<div class="footer-grid">

			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="admin_home.php">Home</a>
					</li>

					<li>
						<a href="create_hm.php">Appoint</a>
					</li>
					<li>
						<a href="students.php">Student</a>
					</li>
					<li>
						<a href="admin_contact.php">Contact</a>
					</li>
					<li>
						<a href="admin_profile.php">Profile</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->


</body>
</html>
