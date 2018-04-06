<?php
	include('konekcija.php');
	
	$id = $_GET['id'];
	
	$delete_clanak = mysqli_query($conn, "DELETE FROM clanci WHERE id=$id");
	
	header("Location:index.php");

?>