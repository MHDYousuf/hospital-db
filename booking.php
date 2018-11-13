<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/booking.css">
		<title></title>
	</head>
	<body>
		<section>
			<div class="container-fluid col-sm-4 col-sm-offset-4 cover">
				<h3 class="text-center">Patient Booking</h3>
				<?php
								if(isset($_GET['error'])){
									if($_GET['error'] == "emptyfields"){
										echo '<p style="color:red";>Fill in all fields</p>';
									}elseif($_GET["error"] == "invalidfirstlast"){
										echo '<p style="color:red";>Invalid First Name and Last Name</p>';
									}elseif($_GET["error"] == "invalidfirst"){
										echo '<p style="color:red";>Invalid First Name</p>';
									}elseif($_GET["error"] == "invalidlast"){
										echo '<p style="color:red";>Invalid Last Name</p>';
									}elseif($_GET["error"] == "departmentcheck"){
										echo '<p style="color:red";>Choose a Department</p>';
									}
								}
								elseif(isset($_GET['booking'])){
									if($_GET["booking"] == "success"){
										echo  '<p style="color:green";>Booked Successfully</p>';
									}
								}
				?>
				<form action="includes/booking.inc.php" class="form-group"method="post">
					<label>First Name:</label>
					<input name="first" class="form-control" placeholder="First Name" type="text" required>
					<label>Last Name:</label>
					<input name="last" class="form-control" placeholder="Last Name" type="text" required>
					<label>Phone Number:</label>
					<input name="contact" class="form-control" placeholder="Phone Number" type="number" required>
					<label>Address</label>
					<textarea name="address" class="form-control" rows="5" placeholder="Enter Address" required></textarea>
					<label>Choose Department:</label>
					<!--<input list="department" class="form-control" name="department" placeholder="Choose Department" required>-->
					<select name="department" id="department" class="" style="width:100%;height:35px;">
					<option value="Choose Department" style="color:lightgrey">Choose Department</option>
					<option value="Physician">Physician</option>
					<option value="Neurology">Neurology</option>
					<option value="Gynecology">Gynecology</option>
					<option value="Pediatrician">Pediatrician</option>
					<option value="Cardiology">Cardiology</option>
					</select>
					<label>Date of Birth</label>
					<input type='date' name="dob" class="form-control" required>
					<label>Date of Appointment</label>
					<input type='date' name="date" class="form-control" required>
					<button type="submit" name="booking-submit" class="btn btn-primary center-block">Submit</button>
				</form>
			</div>
		</section>
	</body>
</html>