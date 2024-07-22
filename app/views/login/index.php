	<!DOCTYPE html>
	<html lang="en">
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Login - Movie Website</title>
			<style>
					body {
							background: url('https://images6.alphacoders.com/134/1344355.png') no-repeat center center fixed;
							background-size: cover;
					}
					.login-container {
							max-width: 400px;
							margin: 5% auto;
							padding: 2rem;
							background-color: rgba(255, 255, 255, 0.9);
							border-radius: 10px;
					}
					.login-header {
							margin-bottom: 2rem;
					}
					.login-header h2 {
							color: #333;
					}
			</style>
	</head>
	<body>
		<?php require_once 'app/views/templates/header.php' ?>
			<div class="container login-container">
					<div class="login-header text-center">
							<h2>Login to Search for Movie</h2>
					</div>
					<form action="/login/verify" method="post">
							<div class="mb-3">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="username" name="username" required>
							</div>
							<div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<input type="password" class="form-control" id="password" name="password" required>
							</div>
							<button type="submit" class="btn btn-primary w-100">Login</button>
					</form>
					<div class="text-center mt-3">
							<a href="/signup" class="btn btn-link">Create an Account</a>
					</div>
			</div>
	<?php require_once 'app/views/templates/footer.php' ?>
	</body>
	</html>
