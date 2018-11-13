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
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bookingdisp.css">
	</head>
	<body>
		<div class="cover container col-sm-8 col-sm-offset-2">
			<div class="table-responsive">
			<?php
			require 'includes/dbh.inc.php';
			$sql = "SELECT id, firstname,lastname, Phonenumber, address, department, dateappointment, dob FROM booking";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			echo "<table class='table table-bordered table-hover'><thead  style='background-color:#54a0ff;color:white'><tr><th>Booking ID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Address</th><th>Date of Birth</th><th>Dateappointment</th><th>Department</th></tr></thead><tbody>";
			while($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td> " . $row["lastname"]."</td><td> ". $row["Phonenumber"]. "</td><td> ". $row["address"]. "</td><td> ". $row["dob"]. "</td><td> ". $row["dateappointment"]. "</td><td> ". $row["department"];
			}
		echo "</tbody></table>";
		} else {
			echo "0 results";
		}
		mysqli_close($conn);
		
		?>
	</div>
	</div>
</body>
</html>