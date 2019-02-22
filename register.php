<?php include('connection.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Login - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title">Management Registration</h3>
					<div class="account-box">
						<div class="account-wrapper">
							<div class="account-logo">
								<a href="index.html"><img src="assets/img/logo2.png" alt="Focus Technologies"></a>
							</div>
							<form method = "POST" action="register.php">
								<?php include('errors.php'); ?>
								<div class="form-group form-focus">
									<label class="control-label">Username</label>
						<input class="form-control floating" type="text" name="usrname" value="<?php echo $usrname; ?>">
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Email</label>
						<input class="form-control floating" type="email" name="email" value="<?php echo $email; ?>">
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Password</label>
									<input class="form-control floating" type="password" name="password_1">
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Confirm Password</label>
									<input class="form-control floating" type="password" name="password_2">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" type="submit" name="reg_user">Login</button>
								</div>
								    <p>
								      Already a member? <a href="login.php">Sign in</a>
								    </p>

							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
    </body>
</html>