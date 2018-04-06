<?php
	include 'konekcija.php';
	$id=$_GET['id'];
	$delete_nav=mysqli_query($conn, "DELETE FROM nav_meni WHERE id=$id");
	header("Location:index.php");
?>
