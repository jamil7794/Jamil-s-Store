<html>
	<head>
		<title> Jamil's web register</title>
		
	</head>
	<body style="background-color:lightgray">
		<img src="j.png" style="position: absolute;left:20px;top:20px" width="50px" height="50px" alt="H!">
		<h2 style="position:absolute; left:75px; top: 2px; font-size:40; font-family:Edwardian Script ITC">-Store</h2> 
		
		<?php 
			$firstName=$lastName=$email=$creditCardInfo=$user=$pass="";
				$firstNameErr=$lastNameErr=$emailErr=$creditCardInfoErr=$userErr=$passErr="";
			if($_SERVER['REQUEST_METHOD']=="POST"){
				
				
				
				if(empty($_POST['first'])){
					$firstNameErr="First Name is required";
				}
				if(empty($_POST['last'])){
					$lastNameErr="Last Name is required";
				}
				if(empty($_POST['email'])){
					$emailErr="Email is required";
				}
				if(empty($_POST['crinfo'])){
					$creditCardInfoErr="Credit Card Number is required";
				}
				if(empty($_POST['user'])){
					$userErr="Username is required";
				}
				if(empty($_POST['pass'])){
					$passErr="Password is required";
				}
				
				if((!empty($_POST['first']))&&(!empty($_POST['last']))&&(!empty($_POST['email']))&&(!empty($_POST['crinfo']))&&(!empty($_POST['user']))&&(!empty($_POST['pass']))){
					
				
						session_start();
						$_SESSION['first']=$_POST['first'];
						$_SESSION['last']=$_POST['last'];
						$_SESSION['email']=$_POST['email'];
						$_SESSION['crinfo']=$_POST['crinfo'];
						$_SESSION['user']=$_POST['user'];
						$_SESSION['pass']=$_POST['pass'];
					
						header("Location: RegisterUser.php");
					
				}
			}
			
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
		<table style="width:100%;position:absolute;top:200px">
			<tr>
				<td> First Name </td>
				<td><input type="text" name="first" style="border-radius:25px"><span class="error">*<?php echo $firstNameErr;?></span></td>
		
			</tr>
			<tr>
				<td> Last Name </td>
				<td><input type="text" name="last" style="border-radius:25px"><span class="error">*<?php echo $lastNameErr;?></span></td>
		
			</tr>
			<tr>
				<td> Email </td>
				<td><input type="text" name="email" style="border-radius:25px"><span class="error">*<?php echo $emailErr;?></span></td>
				
			</tr>
			<tr>
				<td> Credit Card Info </td>
				<td><input type="password" name="crinfo" style="border-radius:25px"><span class="error">*<?php echo $creditCardInfoErr;?></span></td>
		
			</tr>
			
			<tr>
				<td> Username </td>
				<td><input type="text" name="user" style="border-radius:25px"><span class="error">*<?php echo $userErr;?></span></td>
				
			</tr>
			<tr>
				<td> Password </td>
				<td><input type="password" name="pass" style="border-radius:25px"><span class="error">*<?php echo $passErr;?></span></td>
				
			</tr>
				<td>  </td>
				<td><input type="submit" style="border-radius:25px" name="register" value="Register it!"></td>
			</tr>
		</table>
		</form>
	</body>
</html>
