<?php
	include 'konekcija.php';
	$sql="SELECT * FROM nav_meni1";
	$rezultat=mysqli_query($conn, $sql);
	//$red=mysqli_fetch_assoc($rezultat);
	echo '<br>';
	while ($red=mysqli_fetch_assoc($rezultat)){
		echo 'Ime: '. $red['ime']. '<br>';
		echo 'Link: '. $red['link']. '<br>';
	}
?>