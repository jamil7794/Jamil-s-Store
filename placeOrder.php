<html>
	<head>
		<title>
			Jamil's Store Payment
		</title>
		<?php
		session_start();
		$fn=$_SESSION['fn'];
		$ln=$_SESSION['ln'];
		echo "<h2 style='position:relative;left:1000px;top:10px'> ".$fn." ".$ln."</h2>"	
		if(!empty($_POST['item'])){
					foreach($_POST['item'] as $check){
						echo "
						<table>
							<tr>
								<td>
									<li>".$check."</li>";
									
					echo"		</td>
								<td>";
								
									
					}
						
				}?>
		?>
		<?php
			$conn = new mysqli("localhost","root","","jstore");
				if(mysqli_connect_errno()){
				exit("Connection Failed: ". mysqli_error());
				}
				
				$sql="select creditCardInfo from jsoftcust where lastName='$ln' ";
				$result=$conn->query($sql);
				if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					$_SESSION['crinfo'] = $row['creditCardInfo'];
					$crinfo=$_SESSION['crinfo'];
				
				}
				}else{
					$conn_fail="Connection Failed: ".$conn->error;
					
				}
			
			
				$conn->close();
				
				?>
				<?php
					if(!empty($_POST['ITEM']){
						foreach($_POST['ITEM'])
					}
						
				?>
	</head>
	<body style="background-color:lightgray">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute; left:75px; top: 2px; font-size:40; font-family:Edwardian Script ITC">-Store</h2> 
		<h1 style="position:absolute;left:400px;top:61px;font-size:30">Place your order:</h1>
		
		<form>
		
			<table style="position:absolute;left:300px;top:400px;width:70%;">
				<tr>
					<td><h1 style="text-aligned:center;font-size:20"> Enter your Info:</h1>
				<tr>
					<td>First Name</td>
					<td><?php echo $fn; ?></td><br>
				</tr>
				<tr>
					<td>Last Name </td>
					<td><?php echo $ln; ?></td><br> 
				</tr>
				<tr>
					<td>Credit Card Number</td>
					<td><input type="password" style="border-radius:25px" value=<?php echo $crinfo;?> disabled></td><br>
				</tr>
				<tr>
					<td>Shipping Address</td>
					<td><input type="text" style="border-radius:25px"></td><br>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="number" style="border-radius:25px"></td><br>
				</tr>
				<tr>
				<td><input type="checkbox" name="accept" value="accept"><b>I Accept the terms and condition of Jamil's Store Inc.</b><br></td>
				</tr>
				<tr>
				<td></td>
				<td>
				<a href="confirmation.html" style="text-align:right"><ins>Next</ins></a>
				</td>
				</tr>
			</table>
		</form>
	</body>
</html>