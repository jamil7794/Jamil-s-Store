<html>
	<head>
		<title>
			Jamil's Store
		</title>
		<style>
		div{
			border-radius: 25px;
			width:  320px;
			height: 220px;
			padding: 10px;
			border: 5px solid gray;
			margin: 0;
		}
		</style>
		<?php
			$usernameErr=$passErr=$conn_fail="";
			$username=$pass="";
			
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				
				if(empty($_POST['username'])){
					$usernameErr= "Username is required";
				}
				if(empty($_POST['pasword'])){
					$passErr="Password is required";
				}
				$user=$_POST['username'];
				$pass=$_POST['pasword'];
				// Get variables from other users;
				
				if(!empty($user)&&!empty($pass)){
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
						session_start();
						$_SESSION['username']=$user;
						$_SESSION['logged']=true;
						header("Location: search.php");
						exit();
					}
						}else{
					$conn_fail="Connection Failed: ".$conn->error;
				}
			
			
				$conn->close();
				}
			}
		?>
	
	</head>
	<body style="background-color:lightgray;">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute; left:75px; top: 2px; font-size:40; font-family:Edwardian Script ITC">-Store</h2> 
		<br>
		<h1 style="position:absolute;left:470px;top:70px;font-size:50;font-family:Edwardian Script ITC"> Welcome to Jamil's Store </h1>
		<div style="position:absolute;left:500px; top:200px">
			<p style="text-align:center;"> <b>Login</b></p>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="demo">
				<b>Username</b><br>
				<input style="border-radius:25px;" type="text" name="username"><br>
				<span class="error"> <?php echo "* ".$usernameErr;?></span>
				<br>
				<b>Password</b><br>
				<input style="border-radius:25px;" type="password" name="pasword" id="123"><br>
				<span class="error"> <?php echo "* ".$passErr;?></span>
				<br>
				<input style="border-radius:25px;" type="submit" value="Submit">
				<span class="fail"><?php echo $conn_fail;?></span>
			</form>
			<p  style="text-align:right;"> <a style="color:black" href="register.php">Register it!</a></p>
			
		</div>
	</body>
</html>
		
		
			