<!DOCTYPE html>
<html>
	<head>
		<title>LOG IN
		</title>
		<link rel="stylesheet" href="style.css">
	</head>
<body>
<header>QUACKER</header>
<div id='frm'>
	<form action="process.php" method="POST">
	Sign in
		<p>
			<label>Username:</label>
			<input type="text" id="user" name="user" required="required"/>
		</p>
		<p>
			<label>Password:</label>
			<input type="password" id="pass" name="pass" required="required" />
		</p>
		<p>
			<input type="submit" id="btn" name="login" value="Log in" />
		</p>
	</form>
	<p id="link"><a href="../signup/signup.php">Sign up now</a></p>
	<div id="foot">zahiruddin 2018</div>
</div>

</body>
</html>