<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
									<script>
							$(document).ready(function(){
							$("#staffin").click(function(){
							$(this).hide();
							$("#staffout").show();
							});
						});
							</script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default" style="background: transparent;position: absolute;top: 0;width: 100%;left: 0;">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">HealthCare</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active0"><a href="index.php">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#team">Best Doctors</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
						<div class="nav navbar-nav navbar-right">
							<?php
								if(isset($_SESSION['userid'])){
									echo '<form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
													<button type="submit" class="btn btn-danger" name="logout-submit">Logout</button>
										</form>';
								}
								else{
									echo '<button id="staffin"class="btn btn-primary">Login for Doctors&nbsp;<span><i class="fas fa-user-md"></i></span></button>
											<form id="staffout" style="display:none" class="navbar-form navbar-left enterform" action="includes/login.inc.php" method="post">
													<div class="form-group enterid">
																<input type="text" class="form-control" name="mailuid" placeholder="Username/Email">
																<input type="password" class="form-control" name="pwd" placeholder="Password">
													</div>
													<button type="submit" class="btn btn-primary" name="login-submit">Log In</button>
											</form>
													<li><a href="signup.php" class="btn btn-block">Signup</a></li>
										';
								}
							?>
						</div>
					</div>
				</div>
			</nav>
		</header>
	</body>
</html>