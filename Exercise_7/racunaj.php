<?php

	if (isset($_GET['btn1'])){
		$broj1=$_GET['x'];
		$broj2=$_GET['y'];
		$suma=$broj1+$broj2;
		echo $broj1. ' + '. $broj2. ' = '. $suma. '<br>';
	}else if (isset($_GET['btn2'])){
		$start=$_GET['start'];
		$end=$_GET['kraj'];
		for ($a=$start; $a<=$end; $a++){
			echo $a. ' ';
		}
		echo '<br>';
	}
	
?>
<a href="index.php">Pokusaj ponovo</a>
