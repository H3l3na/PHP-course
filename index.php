<?php
	//session_start();
	include 'header.php';
	
	if(isset($_SESSION['username'])){
		
		include 'main.php';
		
	}else{
		
		header("Location: login.php");
		
	}
?>