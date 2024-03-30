<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Sign up / Login Form</title>
	<link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

	<div class="main">

		<input type="checkbox" id="chk" aria-hidden="true">
		<img src="./assets/img/magnify.png" alt="magnify" class="center" width="30" height="30" />

		<style>
			img {
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
		</style>

		<div class="signup">

			<label for="chk" aria-hidden="true">Sign up</label>

			<button onclick="location.href='./signup.php'">Create New Account</button>

		</div>

		<div class="login">
			<form>
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="pswd" placeholder="Password" required="">
				<button>Login</button>
			</form>
		</div>
	</div>


</body>

</html>