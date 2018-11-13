<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/indexstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header class="master">
			<div class="jumbotron">
				<div class="container text-center">
					<h1>Welcome to HealthCare</h1>
					<h2>How we can help you?</h2>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Patient Section <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="booking.php">Book Appointment</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="bookingdisp.php">Patient Booking Status</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section id="about">
			<div class="container-fluid about-head">
				<div class="row">
					<div class="col-sm-12 about text-center">
						<h2 class="tittle" style="font-size: 50px; margin-bottom: 16vh">We are  healthCare leader.</h2>
					</div>
					<div class="container about-description text-center">
						<div class="container">
							<div class="col-sm-4">
						<img class="img-responsive"src="images/slide5.jpg" alt="">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive"src="images/slide4.jpg" alt="" style="height: 232px;">
					</div>
					<div class=" col-sm-4">
						<img class="img-responsive"src="images/slide6.jpg" alt="">
					</div>
					</div>
						<p style="margin-top: 20vh; font-size: 20px; font-family: cursive;">We Provide Best Treatment in our Pocession, Combining advanced technology, medical excellence and compassionate care, we go beyond caring for people to caring about people. Located where our patients live and work.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-light" id="team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading text-uppercase" style="color:#fff">Our Amazing Doctors</h2>
						<h3 class="section-subheading text-muted" style="color:#ddd">Specialised in Various Departments.</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle" src="images/doctor1.jpg" alt="">
							<h4 style="color:#fff">Dr.Susan Harsley</h4>
							<p style="color:#fff"class="text-muted">ENT Specialist</p>
							<ul class="list-inline social-buttons">
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>

					</div>
					<div class="col-sm-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle" src="images/doctor4.jpg" alt="">
							<h4 style="color:#fff">Dr.Jose Denyl</h4>
							<p  style="color:#fff" class="text-muted">MBBS,MD Physician</p>
							<ul class="list-inline social-buttons">
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="team-member">
							<img class="mx-auto" src="images/doctor3.jpg" alt="">
							<h4 style="color:#fff">Dr.Diana Pertersen</h4>
							<p style="color:#fff" class="text-muted">Gynecologist</p>
							<ul class="list-inline social-buttons">
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 mx-auto text-center">
						<p style="color:#fff" class="large text-muted">Getting effective treatment depends on identifying the right problem. In a recent study, 88 percent of patients who came to HealthCare for a second opinion received a new or refined diagnosis.At HealthCare, every aspect of your care is coordinated and teams of experts work together to provide exactly the care you need. What might take months elsewhere can often be done in days here.
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact -->
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading text-uppercase">Contact Us</h2>
						<h3 class="section-subheading text-muted">Having any queries, feel free to contact us!</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="btn btn-primary btn-xl bte text-uppercase" type="submit">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; HealthCare 2018-MOHAMMED YOUSUF P U</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li class="list-inline-item">
								<a href="#">Privacy Policy</a>
							</li>
							<li class="list-inline-item">
								<a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script>
		</script>
	</body>
</html>