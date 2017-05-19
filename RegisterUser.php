<html>
	<head>
	</head>
	<body style="background-color:lightgray;">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute; left:75px; top: 2px; font-size:40; font-family:Edwardian Script ITC">-Store</h2> 
		<br>
		<?php
		
		session_start();
		$fn = $_SESSION['first'];
		$ln = $_SESSION['last'];
		$em = $_SESSION['email'];
		$crinfo = $_SESSION['crinfo'];
		$user = $_SESSION['user'];
		$pass = $_SESSION['pass'];
		$pass = md5($pass);
		$pass1 = crypt($pass,"he");
		$pass=$pass1;
		
			// connection to the mysql server
			$conn = new mysqli('localhost','root','','jstore');
			
			// check if connection is failed
			if(mysqli_connect_errno()){
				exit('Connection Failed: '.mysqli_connect_error());
			}
			$query="select username, password from jsoftcust where username='$user' or password='$pass' ";
			$result = $conn->query($query);
			if($result->num_rows>0){
				echo "<p style='text-align:center'><b>Username or Password already exist</b></p>";
			}else{
			$sql = "insert into jsoftcust values ('$fn','$ln','$em','$crinfo','$user','$pass')";
			if($conn->query($sql)===TRUE){
				echo "<p style='text-align:center'><b>User Created Successfully!</b></p>";
				echo "<p style='text-align:center'><a href='Login_page.php'>Home Page</a></p>";
			}else{
				echo "Error: ".$conn->error;
				
			}
			}
			$conn->close();
		?>
	</body>
</html>