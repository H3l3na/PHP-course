<?php 
	session_start();
	if (!isset($_SESSION['username'])){
		header("Location: admin-panel.php");
	}else {
		$id=$_GET['id'];
		include_once 'include/connection.inc.php';
		$sql="SELECT * FROM posts where id=$id";
		$result=mysqli_query($conn, $sql);
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP Vjezba 12: Dashboard</title>
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
				<a class="btn logoutbutton" href="logout.php">Logut</a>
			</div>
			<div class="content">
				<?php while ($row=mysqli_fetch_assoc($result)) { ?>
				<h1 class="title"> <?php echo $row['title']; ?> </h1>
				<p><strong>Author: </strong><?php echo $row['author']; ?>, <strong>Published: </strong><?php echo $row['published']; ?></p>
				<div class="image">
					<img src="images/<?php echo $row['image']; ?> ">
				</div>
				<div class="text">
					<?php echo $row['text']; ?>
				</div>
				<?php } ?>
				?>
			</div>
		</main>
	</div>
</body>
</html>