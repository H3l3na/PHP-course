<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="php_vjezba_8";
	
	$conn=mysqli_connect($servername, $username, $password, $database);
	
	if ($conn!=true){
		echo 'Greska. Konekcija na bazu nije uspjela. ';
	}else {
		echo 'Konekcija na bazu uspjesna!!!!!!!';
	}
?>