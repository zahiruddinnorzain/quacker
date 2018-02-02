<?php

// get values pass from form in login.php file

$username = $_POST['user'];
$password = $_POST['pass'];

// prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// connect tot he server and select database
mysql_connect("localhost","root","norzain");
mysql_select_db("login");

// query the database for user

$result = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'") or die("Failed to query database.".mysql_error());

$now = mysql_fetch_array($result);

if ($now['username'] == $username && $now['password'] == $password) {
	echo "Log in success! Welcome".$now['username'];
}
else{

	echo "Failed to login! try again na";
}

?>