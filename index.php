<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>
	<form action = "" method="POST">
		<label>Username</label>
		<input name="username">
		<label>Password</label>
		<input name = "password" type="password">
		<input type="submit">
	</form>

	<?php
		if(!empty($_POST["password"])){
			$salt = 'ewgrgrw';
			$saltInputPassword = $_POST['password'] . $salt;
			if (password_verify($saltInputPassword, '$argon2i$v=19$m=65536,t=4,p=1$REhZODJhZi5XTVQ0NU1EUQ$wjxXzLB/lEj75QqUgQhpd9o2ZR37t9Rn0+wjBmDYqR8')) {
			    echo "Password is correct!";
			} else {
			    echo "Password is incorrect!";
			}

		}
	 ?>
</body>
</html>