<?php
	$err="";
	session_start();
	if (isset($_POST['login'])){
		include_once 'include/connection.inc.php';
		$username=mysqli_real_escape_string($conn, $_POST['username']);
		$password=mysqli_real_escape_string($conn, $_POST['password']);
		if (empty($username) || empty($password)){
			$err = "Username or password can't be empty";
		}else {
			$sql="SELECT * FROM users WHERE username='$username'";
			$result=mysqli_query($conn, $sql);
			$row=mysqli_fetch_assoc($result);
			$hashedpasscheck=password_verify($password, $row['password']);
			if ($hashedpasscheck){
				$_SESSION['username']=$row['username'];
				$_SESSION['firstname']=$row['firstname'];
				$_SESSION['lastname']=$row['lastname'];
				header("Location: admin-panel.php");
			}else {
				$err = "Username or password incorrect.";
			}
			
		}
	}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PHP Vjezba 12: Login Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<form action="" method="POST">
				<div class="login-form">
					<div class="control-group">
					<input type="text" class="login-field" value="" placeholder="username" id="login-name" name="username">
					<label class="login-field-icon fui-user" for="login-name"></label>
					</div>

					<div class="control-group">
					<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="password">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>

					<input class="btn btn-primary btn-large btn-block" type="submit" name="login" value="Login">
					<p class="error"><?php echo $err; ?></p>
				</div>
			</form>
			
		</div>
	</div>
</body>
  
</body>

</html>