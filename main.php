<!DOCTYPE html>
<head>
<title>
insert data to mysql and display
</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
QUACKER

</header>

<nav>
Oleh zahiruddin 2018<br>
kepaknaga@gmail.com
</nav>

<form action="insert.php" method="post">

	<br/>
	Quack now : 
	<br/>

	<textarea name="tquack" style="width:300px; height:70px;" maxlength="340"></textarea>
	<img src='duck.png' width='60px' height='60px'>
	<br/>
	<input type="submit" name="Insert" value="Quack!">

</form>



<br>



<center>
	<table>
		<tr><th>Quack</th><th>Time</th></tr>
		<?php
			
			#date_default_timezone_set("Asia/Kuala_Lumpur");
    		#echo date('d-m-Y H:i:s'); //Returns IST
						
			$con = mysql_connect('localhost','root','norzain');

			if(!$con)	#cek connection
			{
				echo 'Not connected to server';
			}

			if(!mysql_select_db('zebbo',$con))	#pilih database
			{
				echo 'Database not selected';
			}


			$query = "SELECT * FROM quacker ORDER BY id DESC";	#Query sql

			$result = mysql_query($query,$con);
			

			if($result === FALSE) { 	#cek result
    			die(mysql_error()); 	# TODO: better error handling
			}

			while($row = mysql_fetch_array($result)){		# show to html
				echo "</td><td>".$row["Quack"]."</td><td>".$row["Waktu"]."</td></tr>";
			}
		?>
	</table>
</center>

<br>
<footer>
zahiruddin 2018 kepaknaga@gmail.com
</footer>

</body>
</html>