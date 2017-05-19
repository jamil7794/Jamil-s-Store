<html>
	<head>
		<title>
			Jamil's Store Confirmation
		</title>
		
	</head>
	<body style="background-color:lightgray">
		
		<?php
		session_start();
		$fn=$_SESSION['fn'];
		$ln=$_SESSION['ln'];
		
		echo "<h2 style='position:relative;left:1000px;top:10px'> ".$fn." ".$ln."</h2>";
		echo "<a style='position:relative;left:1000px;' href='Login_Page.php' >Log Out</a>";
		?>

		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute; left:75px; top: 2px; font-size:40; font-family:Edwardian Script ITC">-Store</h2>
		<h1 style="position:absolute;left:300px;top:100px;font-size:50;font-family:Edwardian Script ITC"> Your Order has been confirmed </h1>
		<h3 style="position:absolute;left:500px;top:200px;font-size:20;"><a href="search.php">Go back to Store</h3>
	</body>
</html>
