<html>
	<head>
		<title>
			Jamil's Store Payment
		</title>
		
		<style>
		div{
			border-radius: 25px;
			width:  500px;
			height: 200px;
			padding: 10px;
			border: 5px solid red;
			margin: 0;
		}
		</style>
		<?php
		session_start();
		$fn=$_SESSION['fn'];
		$ln=$_SESSION['ln'];
		echo "<h2 style='position:relative;left:1000px;top:10px'> ".$fn." ".$ln."</h2>";
		echo "<a style='position:relative;left:1000px;' href='Login_Page.php' >Log Out</a>";
		
		?>
		<?php
			$conn = new mysqli("localhost","root","","jstore");
				if(mysqli_connect_errno()){
				exit("Connection Failed: ". mysqli_error());
				}
				
				$sql="select creditCardInfo from jsoftcust where firstName='$fn' and lastName='$ln' ";
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
					$shpErr=$accErr="";
					$acc=$shp="";
			
						if($_SERVER["REQUEST_METHOD"]=="GET"){
				
							if(empty($_GET['username'])){
								$shpErr= "Shippping Address is required";
							}
							if(empty($_GET['pasword'])){
							$accErr="Accept the terms";
							}
							
							$total=0;
						if(!empty($_POST['item'])){
						
							$a=$_POST['item'];
							$b=$_POST['quantity'];
						
							foreach($a as $check => $n){
							//echo $check."   ";
							$price;
							
							$conn1=new mysqli("localhost","root","","jstore");
							if(mysqli_connect_errno()){
								exit("Connection Failed: ".mysqli_error());
							}
							
							$sql1 = "select Price from jstoreprod where Product='$n' ";
					
							$result = $conn1->query($sql1);
							if($result->num_rows>0){
								while($row = $result->fetch_assoc()){
									$price =$row['Price'];
									
								}
							}
							$prItem=$price*$b[$check];
							
							echo "<table><tr><td><b>Item: </b>".$n.",</td> <td><b>Price each:</b>$".$price.",</td<td>   <b>Quantity: </b>".$b[$check]."</td><td>  "."<b>Total:</b> $".$prItem."</td></tr></table>";
							$total+= $prItem;
							echo "<hr />";
							
							}
						echo "<b>Total Price: </b>$".$total."<br>";
						

						}
						
						if((!empty($_GET['shpAddr'])&&!empty($_GET['accept']))){
								
								$conn2 = new mysqli("localhost","root","","jstore");
								if(mysqli_connect_errno()){
									exit("Connection Failed: ".mysqli_connect_error());
								}
								$shpadd= $_GET['shpAddr'];
								/*$sql2 = "insert into jstoreorders values ('$fn','$ln','$shpadd' )";*/
								$sql2 = "INSERT INTO jstoreorders (firstName, lastName, shippingAddress) VALUES ('$fn', '$ln', '$shpadd')";
								$result=$conn2->query($sql2);
								if($result===TRUE){
									header("Location: Confirmation.php");
								}
								
							}
					}
						
						
						
				?>
				
	</head>
	<body style="background-color:lightgray">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute; left:75px; top: 2px; font-size:40; font-family:Edwardian Script ITC">-Store</h2> 
		<h1 style="position:absolute;left:400px;top:61px;font-size:30">You've selected these items:</h1>
		
		<div style="position:absolute;left:300px;top:150px">
		<table >
			<tr>
				<td>
				<?php
					$total=0;
					if(!empty($_POST['item'])){
						
						$a=$_POST['item'];
						$b=$_POST['quantity'];
						
						foreach($a as $check => $n){
							//echo $check."   ";
							$price;
							
							$conn1=new mysqli("localhost","root","","jstore");
							if(mysqli_connect_errno()){
								exit("Connection Failed: ".mysqli_error());
							}
							
							$sql1 = "select Price from jstoreprod where Product='$n' ";
					
							$result = $conn1->query($sql1);
							if($result->num_rows>0){
								while($row = $result->fetch_assoc()){
									$price =$row['Price'];
									
								}
							}
							$prItem=$price*$b[$check];
							
							echo "<table><tr><td><b>Item: </b>".$n.",</td> <td><b>Price each:</b>$".$price.",</td<td>   <b>Quantity: </b>".$b[$check]."</td><td>  "."<b>Total:</b> $".$prItem."</td></tr></table>";
							$total+= $prItem;
							echo "<hr />";
							
						}
						echo "<b>Total Price: </b>$".$total."<br>";
						

					}
			
		
				?>
				</td>
			</tr>
		</table>
		</div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
		
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
					<td><input type="text" name="shpAddr" style="border-radius:25px"><span class="error">* <?php echo $shpErr; ?></td><br>
				</tr>
				<tr>
				<td><input type="checkbox" name="accept" value="accept"><b>I Accept the terms and condition of Jamil's Store Inc.</b><span class="error">* <?php echo $accErr; ?><br></td>
				</tr>
				<tr>
				<td></td>
				<td>
				<input type="submit" value="Place Order!">
				</td>
				</tr>
				</form>
			</table>
		</form>
	</body>
</html>