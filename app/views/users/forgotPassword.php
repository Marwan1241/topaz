
<!DOCTYPE html>
<html lang="en">
<head>
   <title>forgot password</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?php URLROOT . 'users/register';  ?>" method="post">
			<h1>Forgot Password</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>please enter your email:</span>
			<input type="email" name="email" placeholder="Email" />
			<button type="submit" value="forgotpassword">Sign Up</button>
		</form>
	</div>
   
</body>
</html>