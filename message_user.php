<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Message Received</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<!-- //web-fonts -->

</head>
<style type="text/css">
	.card-header{
		padding: 15px;
		font-size: 30px;
	}
	.card-body{
		padding: 15px;
	}
	.card-footer{
		text-align: left;
		padding: 15px;
	}
</style>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home">
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				  <a  href="home.php"><div class = "logo-img"> </div></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>
						<li class="nav-item active">
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

<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
    $roll_no = $_SESSION['roll'];
    $query = "SELECT * FROM Message WHERE receiver_id ='$roll_no'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result)){
    	$hostel_id = $row['hostel_id'];
    	$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
       $result6 = mysqli_query($conn,$query6);
       $row6 = mysqli_fetch_assoc($result6);
       $hostel_name = $row6['Hostel_name'];
          ?>

    <div class="container">
      <div class="card">
      <div class="card-header"><b><?php echo $row['subject_h']; ?></b></div>
      <div class="card-body"><?php echo $row['message']; ?></div>
      <div class="card-footer"><?php echo $hostel_name." Hostel Manager"; ?><span style="float: right"><?php echo $row['msg_date']." ".$row['msg_time']; ?></span></div>
  </div>
</div>
<br><br>

    <?php
    }

?>

<br>
<br>

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
		<a class="navbar-brand" href="http://www.aiet.org.in" target="_blank"> AIET MOODBIDRE</span></a>
  </div>
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


	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->




</body>
</html>