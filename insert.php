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

	date_default_timezone_set("Asia/Kuala_Lumpur");
    $jamtarikh = date('d-m-Y H:i:s'); //Returns IST

	$IsiQuack = $_POST['tquack'];
	#$masa = $_POST['email'];

	$sql = "INSERT INTO quacker(Quack, Waktu) VALUES ('$IsiQuack','$jamtarikh')";

	if(!mysql_query($sql,$con)) 
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}



	#header("refresh:2; url=main.php");
	header("refresh:0; url=main.php");


?>