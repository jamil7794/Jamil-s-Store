<html>
	<head>
	<title>Search Item</title>
	</head>
	<body style="background-color:lightgray">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute;left:75px;top:2px;font-size:40;font-family:Edwardian Script ITC">-Store</h2> 
		<?php	
			session_start();
			$user = $_SESSION['username'];
			
			
			$conn = new mysqli("localhost","root","","jstore");
			if(mysqli_connect_errno()){
				exit("Connection Failed: ". mysqli_error());
			}

			$sql="select firstName,lastName from jsoftcust where username='$user' ";
			$result=$conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					echo "<a style='position:absolute;left:1000px;' href='Login_Page.php' >Log Out</a>";
					
					$fn = $row['firstName'];
					$ln = $row['lastName'];
					echo "<h2 style='position:relative;left:550px;top:100px'> Welcome ".$fn." ".$ln."</h2>";
					$_SESSION['fn']=$fn;
					$_SESSION['ln']=$ln;
				}
			}else{
				header("Location: Login_Page.php");
				die();
			}
				
			
			
				$conn->close();
				
			
			?>
		<br><br><br>
		
		
		
		<form style="position:absolute;left:350px;top:150px"action="e.php" method="get">
			<hr />
			<h1>Search Item:
			<input type="text" name="k" size="50">
			<input type="submit" value="Search!">
			</h1>
			<hr />
		</form>
	
	</body>
</html>