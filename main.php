<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="jumbotron">
			<div class="container text-center">
				<h1>Welcome to Hospital Database</h1>
				<p></p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a></p>
			</div>
		</div>
		<div class="container col-sm-4 col-sm-offset-4">
			<ul class="nav nav-tabs">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="includes/booking.inc.php">Book Now</a></li>
						<li><a href="#">Booking Availability</a></li>
					</ul>
				</li>
				<li role="presentation"><a href="Department.php">Department</a></li>
				<li role="presentation"><a href="Room.php">Room/Ward</a></li>
				<li role="presentation"><a href="Doctors.php">Doctors</a></li>
			</ul>
		</div>
	</body>
</html>