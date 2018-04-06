<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba -4</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
			 
		
	</head>
	<body>
		<h2>Brisanje elemenata iz niza</h2>
		<?php 
			$hrana=array("meso"=>"piletina", "voce"=>"banana", "povrce"=>"paradajz", "zitarice"=>"hljeb");
			unset($hrana["voce"]);
			var_dump($hrana);
			echo '<br>';
			array_pop($hrana);
			var_dump($hrana);
			echo '<br>';
			array_shift($hrana);
			var_dump($hrana);
			echo '<br>';
		?>
		
	</body>
</html>