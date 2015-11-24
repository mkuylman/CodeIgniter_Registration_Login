<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User Login</title>
	<link rel="stylesheet" href="../assets/stylesheets/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="div_form">
			<h3>Login</h3>
<?php if($this->session->flashdata("login_errors"))
			{
				echo $this->session->flashdata("login_errors");
			}
?>
			<form id="login" action="/dashboard/process_login" method="post">
				<label for="email">Email: </label>
				<input type="text" name="email"/>
				<label for="password">Password</label>
				<input type="password" name="password"/>
				<input type="submit" value="Login" />
			</form>
		</div>
		<div class="div_form">
			<h3>Register</h3>
<?php if($this->session->flashdata("registration_errors"))
			{
				echo $this->session->flashdata("registration_errors");
			}
?>
			<form id="register" action="/dashboard/process_registration" method="post">
				<label for="first_name">First Name: </label>
				<input type="first_name" name="first_name"/>
				<label for="last_name">Last Name: </label>
				<input type="last_name" name="last_name"/>
				<label for="email">Email: </label>
				<input type="text" name="email"/>
				<label for="password">Password</label>
				<input type="password" name="password"/>
				<label for="confirm_password">Confirm Password</label>
				<input type="password" name="confirm_password"/>
				<input type="submit" value="Register" />
			</form>
		</div>
	</div>
</body>