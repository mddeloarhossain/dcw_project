<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login Panel</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/admin/login.css">
</head>
<body>

	<div class="container">
		<!--Start admin login form-->
		<div class="row justify-content-center h-100vh" id="login_form_box">
			<div class="col-lg-10 my-auto">
				<div class="card-group">
					<div class="card p-4">
						<h2 class="text-center text-primary font-weight-bold">Login to your account</h2>
						<hr class="my-3">
						<form method="POST" action="" class="px-3" id="login_form">
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-envelope"></i>
									</span>
								</div>
								<input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-key"></i>
									</span>
								</div>
								<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
							</div>
							<div class="form-group">
								<div class="float-left custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="rememberMe">
									<label class="custom-control-label" for="rememberMe">Remember me</label>
								</div>
								<div class="float-right">
									<a href="javascript:" class="text-decoration-none" id="ShowforgottenForm">Forgot password?</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-block btn-primary" value="SignIn">
							</div>
						</form>
					</div>
					<div class="card p-4 justify-content-center" style="background-color: #363c43;">
						<h2 class="text-center text-light font-weight-bold">Welcome back!</h2>
						<hr class="my-3 bg-light">
						<p class="text-center text-light">Please login using your email and password. if you haven't registered yet, you can register for free.</p>
						<button class="btn btn-outline-light mt-4 align-self-center" id="ShowSignUpForm">SignUp</button>
					</div>
				</div>
			</div>
		</div>
		<!--End admin login form-->

		<!--Start admin register form-->
		<div class="row justify-content-center h-100vh" id="register_form_box" style="display: none">
			<div class="col-lg-10 my-auto">
				<div class="card-group">
					<div class="card p-4">
						<h2 class="text-center text-primary font-weight-bold">Create new account</h2>
						<hr class="my-3">
						<form method="POST" action="" class="px-3" id="register_form">
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-user"></i>
									</span>
								</div>
								<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-envelope"></i>
									</span>
								</div>
								<input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-key"></i>
									</span>
								</div>
								<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-key"></i>
									</span>
								</div>
								<input type="password" class="form-control" id="c_password" placeholder="Enter your confirm password" name="c_password">
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-block btn-primary" value="Register">
							</div>
						</form>
					</div>
					<div class="card p-4 justify-content-center" style="background-color: #363c43;">
						<h2 class="text-center text-light font-weight-bold">Welcome back!</h2>
						<hr class="my-3 bg-light">
						<p class="text-center text-light">Please login using your email and password. if you haven't registered yet, you can register for free.</p>
						<button class="btn btn-outline-light mt-4 align-self-center" id="ShowSignInForm">SignIn</button>
					</div>
				</div>
			</div>
		</div>
		<!--End admin register form-->

		<!--Start admin forgotten password form-->
		<div class="row justify-content-center h-100vh" id="forgotten_form_box" style="display: none">
			<div class="col-lg-10 my-auto">
				<div class="card-group">
					<div class="card p-4">
						<h2 class="text-center text-primary font-weight-bold">Forgotten password ?</h2>
						<hr class="my-3">
						<form method="POST" action="" class="px-3" id="forgotten_form">
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fas fa-envelope"></i>
									</span>
								</div>
								<input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-block btn-primary" value="Reset Password">
							</div>
						</form>
					</div>
					<div class="card p-4 justify-content-center" style="background-color: #363c43;">
						<h2 class="text-center text-light font-weight-bold">Welcome back!</h2>
						<hr class="my-3 bg-light">
						<p class="text-center text-light">Enter your email and check your inbox for instructions. Please also check your spam folder.</p>
						<button class="btn btn-outline-light mt-4 align-self-center" id="Back">Back</button>
					</div>
				</div>
			</div>
		</div>
		<!--End admin forgotten password form-->
	</div>

	<script type="text/javascript" src="../assets/js/jquery-3.6.3.min.js"></script>
	<script type="text/javascript" src="../assets/js/popper.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../assets/js/admin/login.js"></script>
	
</script>
</body>
</html>