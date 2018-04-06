<?php
	session_start();
	if (!isset($_SESSION['username'])){
		header("Location: login.php");
	}else {
		include_once 'include/connection.inc.php';
		$id=$_GET['id'];
		$sql="DELETE FROM posts where id=$id";
		$result=mysqli_query($conn, $sql);
		header("Location: admin-panel.php");
	}
?>