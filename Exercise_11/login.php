<?php
	$err = '';
	session_start();

    if (isset($_POST['login'])) {
		
        include_once 'include/connection.inc.php';

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
		
		if(empty($username) || empty($password)){
			
			$err = "Username or password can't be empty";
			
		}else{
			
			$sql = "SELECT * FROM users WHERE username='$username'";
			$result = mysqli_query($conn, $sql);
			//$resultCheck = mysqli_num_rows($result);
			
			$row = mysqli_fetch_assoc($result);
			//Dehashing password
			$hashedPwdCheck = password_verify($password, $row['password']);
			
			if($hashedPwdCheck){
				
				$_SESSION['username'] = $row['username'];
				$_SESSION['firstname'] = $row['firstname'];
				$_SESSION['lastname'] = $row['lastname'];
				header("Location: index.php");
				
			} else {
				
				$err = "Username or password incorrect!";
			}
			
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/style.css" > 
    <title>PHP Kurs - Vjezba 10: Login</title>
</head>
<body>
    <div class="login-form">
        <h2 align="center">Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<p class="error"><?php echo $err; ?></p>
            <div class="form-group">
                <label>Username</label><input type="text" name="username" />
            </div>
            <div class="form-group">
                <label>Password</label><input type="password" name="password" />
            </div>
            <div class="form-group>">
                <input type="submit" name="login" class="login-button" value="Login">
            </div>
            <p>Dont have account? <a href="register.php">Register now</a></p>
        </form>
    </div>
</body>
</html>