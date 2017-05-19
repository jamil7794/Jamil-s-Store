<html>
	<head>
	<title>Search Item</title>
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
	</head>
	<body style="background-color:lightgray">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute;left:75px;top:2px;font-size:40;font-family:Edwardian Script ITC">-Store</h2> 
		<?php
		session_start();
		$fn=$_SESSION['fn'];
		$ln=$_SESSION['ln'];
		echo "<h2 style='position:relative;left:1000px;top:10px'> ".$fn." ".$ln."</h2>";
		echo "<a style='position:relative;left:1000px;' href='Login_Page.php' >Log Out</a>";
		
		?>
		<form style="position:absolute;top:100px"action="e.php" method="get">
		
			<h1>Search Item:
			<input type="text" name="k" size="50" value="<?php echo $_GET['k'];?>">
			<input type="submit" value="Search!">
			</h1>
			<hr />
		</form>
		<br><br><br><br><br><br><br><br><br><br><br>
		<?php
		
			 $k = $_GET['k'];
			 if(empty($k)){
				 echo "No Result Found";
			 }else{
			 $keywords = explode(" ",$k);
			 $sql= "select * from jstoreprod where ";
			 $i=0;
			 foreach($keywords as $each){
				$i++;
				 
				if($i==1){
					$sql .="name like '%$each%' ";
				}else{
					$sql .="or name like '%$each%' ";
				}
				
			 }
			 
			//Connect to the Database
			
			$conn = new mysqli("localhost","root","","jstore");
			if(mysqli_connect_errno()){
				exit("Connection Failed: ".mysqli_error());
			}
			
			$result = $conn->query($sql);
			$num_rowss=$result->num_rows;
			if($num_rowss>0){
				echo '<form action="payment.php" method="post">';
				while($row = $result->fetch_assoc()){
					$quantity;
					$image= $row['Image'];
					$title = $row['Name'];
					$desc = $row['Description'];
					$price = $row['Price'];
					$id = $row['ID'];
					$product= $row['Product'];
					echo '
						<div class="ip" style="position:absolute;left:150px">
							<img src='.$image.' width="200px" height="200px" alt="ip!">
								<ul style="position:absolute;left:300px; top:10px;font-size:16" width="500px" height="200px">
									<li style="font-size:16"><b>'.$title.'</b></li>
									'.$desc.'
									<li>Price: $<b>'.$price.'</b></li>
									<li><b>'.$title.'</b><input type="checkbox" name="item[]" value='.$product.'></li>
									<li><b>ID: </b>'.$id.'</li>
									<li><b>Quantity:</b> <input type="number" name="quantity[]"</li>
									</ul>
						</div>
					 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>'
					;
				}
				echo '<input type="submit" style="position:absolute;left:1000px;" value="Next"></form>';
				
			}	
			// Disconnect
			$conn->close();
			}
		?>
	
	</body>
</html>