<?php
	$msg="";
	$msg_error="";
	session_start();
	if (!isset($_SESSION['username'])){
		header("Location: login.php");
	}else {
		if (isset($_POST['add'])){
		include_once 'include/connection.inc.php';
		$title=$_POST['title'];
		$published=$_POST['published'];
		$category=$_POST['category'];
		$image=$_POST['image'];
		$author=$_POST['author'];
		$text=$_POST['text'];
		if (!empty($title) && !empty($published) && !empty($category) && !empty($author) && !empty($image) && !empty($text)){
			$sql="INSERT INTO posts (title, category, published, image, author, text) VALUES ('$title', '$category', '$published', '$image', '$author', '$text')";
			$result=mysqli_query($conn, $sql);
			if ($result){
				$msg='Post successfully inserted to DB';
			}
		}else {
			$msg_error="All fields are required";
		}
	}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Vjezba 12: Dashboard</title>
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		input{ text-align: left; padding-left: 10px; padding-right: 10px;}
	</style>
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
				<h3>Add new post</h3>
				<p class="success"><?php echo $msg; ?></p>
        		<p class="error"><?php echo $msg_error; ?></p>
        		<form action="" method="POST">
        			<table class="table table-striped">
						<tr>
							<td>Title</td>
							<td><input type="text" name="title"></td>
						</tr>
						<tr>
							<td>Category</td>
							<td><input type="text" name="category"></td>
						</tr>
						<tr>
							<td>Published</td>
							<td><input type="date" name="published"></td>
						</tr>
						<tr>
							<td>Author</td>
							<td><input type="text" name="author"></td>
						</tr>
						<tr>
							<td>Image</td>
							<td><input type="text" name="image"></td>
						</tr>
						<tr>
							<td>Text</td>
							<td><textarea type="text" name="text" cols="50" rows="18"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input style="width:100px; text-align: center;" class="addbutton" type="submit" name="add" value="Add"></td>
						</tr>
					</table>
        		</form>
			</div>
		</main>
	</div>
</body>
</html>