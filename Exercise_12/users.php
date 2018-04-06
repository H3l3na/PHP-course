<?php
	session_start();
	if (!isset($_SESSION['username'])){
		header("Location: login.php");
	}
	include_once 'include/connection.inc.php';
	$sql="SELECT * FROM users";
	$result=mysqli_query($conn, $sql);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Vjezba 12: Admin panel</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<nav class="vertical">
			<div class="profile">
				<img src="images/profile.png">
				<div class="name">
					<p>Welcome <?php echo $_SESSION['firstname']; ?></p>
				</div>
			</div>
			<div class="links">
				<a href="admin-panel.php">Home</a>
				<a href="users.php">Users</a>
				<a href="#">Contact</a>
			</div>
		</nav>

		<main class="wrapper">
			<div class="horizontal-nav">
				<a class="btn logoutbutton" href="logout.php">Logout</a>
			</div>
			<div class="content">
				<h3>List of posts</h3>
				<a class="addbutton" href="add.php">Add post</a>
				<table class="table table-striped">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
					<th>Email</th>
				</tr>
				<?php
					echo '<tr>';
					while ($row=mysqli_fetch_assoc($result)){
						echo '<td>'. $row['firstname']. '</td>';
						echo '<td>'. $row['lastname']. '</td>';
						echo '<td>'. $row['username']. '</td>';
						echo '<td>'. $row['email']. '</td>';
						echo '<td><a class="deletebutton" href="#">Delete </a></td>';
						echo '</tr>';
					}
				?>
				</table>
			</div>
		</main>
	</div>
</body>
</html>