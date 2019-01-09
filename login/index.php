<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>Projeto Gramachinhos &mdash; Área administrativa</title>

	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">

	<!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo-painel.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form action="login.php" method="POST">

								<div class="form-group">
									<label for="text">Login</label>

									<input id="text" type="login" class="form-control" name="txtLogin" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Senha
										<a href="forgot.html" class="float-right">
											Esqueceu a senha?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="txtPass" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-success btn-block">
										Login
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; Projeto Gramachinhos 2019
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<?php
	if(isset($_SESSION['status'])) {
	   echo "<script>toastr.{$_SESSION['status']['tipo']}('{$_SESSION['status']['msg']}');</script>";
	  session_unset($_SESSION['status']);
	  unset($_SESSION['status']);
	}
	?>
</body>
</html>
