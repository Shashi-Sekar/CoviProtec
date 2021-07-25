<?php

	session_start();
	include("connection1.php");
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p>Enter all the fields</p>";
		}
		else if($_GET["error"] == "wrongnabhid"){
			echo "<p>Incorrect NABH ID</p>";
		}
		else if($_GET["error"] == "wrongpassword"){
			echo "<p>Invalid password</p>";
		}
		else if($_GET["error"] == "wronglogin"){
			echo "<p>Sorry, something went wrong. Try again.</p>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Hospital Login Page</title>

	<link href="../assets/img/logo.png" rel="icon">
  	<link href="../assets/img/logo.png" rel="logo">
  	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/my-login.css">
</head>

<body class="my-login-page" style="background-color:#D3D3D3">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="../assets/img/logo.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Hospital Login</h4>
							<form method="POST" action="login1.inc.php" class="my-login-validation">
								<div class="form-group">
									<label for="nabh_id">NABH ID</label>
									<input id="nabh_id" type="number" class="form-control" name="nabh_id" value="" required autofocus>
									<div class="invalid-feedback">
										invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="#" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="submit">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="signup1.php">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; Covid Drive
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../assets/js/my-login.js"></script>
</body>
</html>