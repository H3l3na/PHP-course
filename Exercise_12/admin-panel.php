<?php
	session_start();
	if (!isset($_SESSION['username'])){
		header("Location: login.php");
	}
	include_once 'include/connection.inc.php';
	$sql="SELECT * FROM posts";
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
					<th>Title</th>
					<th>Category</th>
					<th>Published</th>
					<th>Author</th>
					<th>Action</th>
				</tr>
				<?php
					echo '<tr>';
					while ($row=mysqli_fetch_assoc($result)){
						echo '<td>'. $row['title']. '</td>';
						echo '<td>'. $row['category']. '</td>';
						echo '<td>'. $row['published']. '</td>';
						echo '<td>'. $row['author']. '</td>';
						echo '<td> <a class="viewbutton" href="view.php?id='.$row['id'].'"> View </a> <a class="deletebutton" href="delete.php?id='.$row['id'].'">Delete </a></td>';
						echo '</tr>';
					}
				?>
				</table>
			</div>
		</main>
	</div>
</body>
</html>