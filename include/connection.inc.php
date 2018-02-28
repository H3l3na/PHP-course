<?php

	$servername="localhost";
	$username="root";
	$password="";
	$database="php_vjezba_11";
	
	$conn=mysqli_connect($servername, $username, $password, $database);
	
	if ($conn==TRUE){
		echo "Konekcija na bazu uspjesna. ";
	}else {
		echo "Greska. Konekcija na bazu nije uspjela. ";
	}

?>