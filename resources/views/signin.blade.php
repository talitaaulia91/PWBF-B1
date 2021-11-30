<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TPQ AL-MUBAROQ || Login</title>
	<link href="css/signin.css" rel="stylesheet">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="/signin" method="post">
			@csrf
			<h1>Login</h1>

			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type="submit" class="button" id="signin" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay"> 
			<div class="overlay-panel overlay-right">
				<h1>Welcome back!</h1>
				<p>Don't have an account? Register now!</p>
				<button id="signUp">
				<a href="/signup" >Sign Up</a>	
				</button>

			</div>
		</div>
	</div>
</div>


</body>
</html>