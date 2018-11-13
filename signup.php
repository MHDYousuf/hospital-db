<?php
require "header.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	</head>
	<body>
		<main>
			<div class="cover container text-center">
				<section>
					<div class="row col-sm-4 col-sm-offset-4 coverdiv">
						<h3>Sign Up</h3>
						<?php
							if(isset($_GET['error'])){
								if($_GET['error'] == "emptyfields"){
									echo '<p style="color:red";>Fill in all fields</p>';
								}elseif($_GET["error"] == "invaliduidmail"){
									echo '<p style="color:red";>Invalid Username and E-mail</p>';
								}elseif($_GET["error"] == "invaliduid"){
									echo '<p style="color:red";>Invalid Username</p>';
								}elseif($_GET["error"] == "invalidmail"){
									echo '<p style="color:red";>Invalid E-mail</p>';
								}elseif($_GET["error"] == "passwordcheck"){
									echo '<p style="color:red";>Your password do not match</p>';
								}elseif($_GET["error"] == "usertaken"){
									echo '<p style="color:red";>username is already taken</p>';
								}

							}
							elseif(isset($_GET['signup'])){
								if($_GET["signup"] == "success"){
									echo  '<p style="color:green";>Signup Successfully</p>';
								}
							}
						?>
						<form class="form-group" action="includes/signup.inc.php" method="post">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="uid" placeholder="Username">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="mail" placeholder="Email">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="pwd" placeholder="Password">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password"class="form-control" name="pwd-repeat" placeholder="Confirm Password">
							</div>
							<button type="submit" class="btn btn-primary" name="signup-submit">Sign Up</button>
						</form>
					</div>
				</section>
			</div>
		</main>
	</body>
</html>
<?php
require "footer.php";
?>