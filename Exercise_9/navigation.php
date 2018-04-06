<?php
	include 'konekcija.php';
	$sql="SELECT * FROM nav_meni";
	$rezultat=mysqli_query($conn, $sql);
	//$red=mysqli_fetch_assoc($rezultat);
	echo '<br>';
	while ($red=mysqli_fetch_assoc($rezultat)){
		echo 'Link: '. $red['link']. '<br>';
	}
?>