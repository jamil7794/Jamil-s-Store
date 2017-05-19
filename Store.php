<html>
	<head>
		<title>Jamil's Store in </title>
		<style>
		div{
			border-radius: 25px;
			width:  1000px;
			height: 250px;
			padding: 10px;
			border: 5px solid red;
			margin: 0;
		}
		</style>
		<?php
			
		?>
	</head>
	<body style="background-color:lightgray">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute;left:75px;top:2px;font-size:40;font-family:Edwardian Script ITC">-Store</h2> 
			
			
			<h1 style="position:absolute;left:800px;top:100px;font-size:20"> 
				Description
			</h1>
			<h2 style="position:absolute; left:225px; top:100px; size:20">
				Item
			</h2>
			<form method="post" action="payment.php">
			<div class="wb" style="position: absolute;left:150px;top:150px">
			<img src="wB.jpg" width="200px" height="200px" alt="wB!">
			<ul style="position:absolute;left:300px; top:10px;font-size:16" width="500px" height="200px">
					<li style="font-size:16"><b>Nalgene Water bottle</b></li>
					<li>Opening accommodates most water filters; marked with milliliters and ounces for easy measurement</li>
					<li>Made in the USA and guaranteed for the life of the product</li>
					<li>Nalgenes bestselling water bottle for more than 20 years</li>
					<li style='font-size:20'><b>Price: $10.00</b></li>
					<li><input type='checkbox' name='item[]' value='Water bottle'><b> Select</b></li>
			</ul>
			</div>
			<br><br>
			
			<div class="ip" style="position:absolute;left:150px;top:500px">
			<img src="iP.jpg" width="200px" height="200px" alt="ip!">
			<ul style="position:absolute;left:300px; top:10px;font-size:16" width="500px" height="200px">
					<li style="font-size:16"><b>iPhone 6s</b></li>
					<li>4.7-inch (diagonal) LED-backlit widescreen Multi-Touch display with IPS technology</li>
					<li>New 8-megapixel iSight camera with 1.5µ pixels</li>
					<li>A8 chip with 64-bit architecture. M8 motion coprocessor</li>
					<li>1080p HD video recording (30 fps or 60 fps)</li>
					<li>Unlocked cell phones are compatible with GSM carriers like H2O Wireless.</li>
					<li style='font-size:20'><b>Price: $550.00</b></li>
					<li><input type='checkbox' name='item[]' value='iPhone 6'></li>
			</ul>
			</div>
			
			<div class="bp" style="position: absolute;left:150px;top:850px">
		<img src="bP.jpg" width="200px" height="200px" alt="bp!">
		<ul style="position:absolute;left:300px; top:10px;font-size:16" width="500px" height="200px">
					<li style="font-size:16"><b>BluePhonic Headphone</b></li>
					<li>DESIGNED WITH EASE OF USE IN MIND. Optimized for an active lifestyle</li>
					<li>UNIVERSAL COMPATIBILITY WITH ULTRA LONG BATTERY LIFE. </li>
					<li style='font-size:20'><b>Price: $200.00</b></li>
					<li><input type='checkbox' name='item[]' value='Headphones'></li>
			</ul>
		</div>
			
		<input type="submit" style="position:absolute;left:1000px;top:1200px" value="Next">
		</form>
			
	</body>
</html>