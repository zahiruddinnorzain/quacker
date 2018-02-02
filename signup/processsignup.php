<?php

	$con = mysql_connect('localhost','root','norzain');

	if(!$con)	#cek connection
	{
		echo 'Not connected to server';
	}

	if(!mysql_select_db('zebbo',$con))	#pilih database
	{
		echo 'Database not selected';
	}


	$Usernamephp = $_POST['usernamein'];
	$Passwordphp = $_POST['passwordin'];
	#$masa = $_POST['email'];

	$sql = "INSERT INTO login(username, password) VALUES ('$Usernamephp','$Passwordphp')";

	if(!mysql_query($sql,$con)) 
	{
		echo 'error creating account';
	}
	else
	{
		echo 'created success';
	}



	#header("refresh:2; url=main.php");
	header("refresh:0; url=../login/login.php");


?>