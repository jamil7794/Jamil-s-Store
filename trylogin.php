<html>
	<head>
	</head>
	<body>
	
	<img src="wb.jpg?id=1" width="200px" height="200px" alt="wB!">
	<img src="iP.jpg?id=2" width="200px" height="200px" alt="ip!">
	<img src="bP.jpg?id=3" width="200px" height="200px" alt="bp!">
		<?php
		
		/*	// Get variables from other users;
			$user = $_POST['username'];
			$pass = $_POST['pasword'];
			
			// Conect to the database
			$conn = new mysqli("localhost","root","","jstore");
			if(mysqli_connect_errno()){
				exit("Connection Failed: ". mysqli_error());
			}
			$pass = md5($pass);
			$pass1=crypt($pass,"he");
			$pass = $pass1;

			$sql="select * from jsoftcust where username='$user' and password='$pass' ";
			$result=$conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					header("Location: Store.php");
				}
			}else{
				echo "Connection Failed: ".$conn->error;
			}
			
			
			$conn->close();*/
		?>
	</body>
</html>