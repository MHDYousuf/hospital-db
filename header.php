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
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Hospital Database</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active0"><a href="index.php">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<div class="nav navbar-nav navbar-right">
							<?php
								if(isset($_SESSION['userid'])){
									echo '<form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
												<button type="submit" class="btn btn-danger" name="logout-submit">Logout</button>
										</form>';
								}
								else{
									echo '<form class="navbar-form navbar-left" action="includes/login.inc.php" method="post">
												<div class="form-group">
														<input type="text" class="form-control" name="mailuid" placeholder="Username/Email">
														<input type="password" class="form-control" name="pwd" placeholder="Password">
												</div>
												<button type="submit" class="btn btn-primary" name="login-submit">Log In</button>
										</form>
										<ul class="nav navbar-nav">
												<li><a href="signup.php">Signup</a></li>
										</ul>';
								}
							?>
							
						</div>
					</div>
				</div>
			</nav>
		</header>
	</body>
</html>