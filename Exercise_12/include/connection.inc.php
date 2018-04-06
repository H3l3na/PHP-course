<?php
	$servername="localhost";
	$database="php_vjezba_12";
	$username="root";
	$password="";
	$conn=mysqli_connect($servername, $username, $password, $database);
	if (!$conn==TRUE){
		echo 'Greska. Konekcija na bazu nije uspjela.';
	}
?>