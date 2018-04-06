<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba -3</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
			 
		
	</head>
	<body>
		<h2>Numericki (numeric) nizovi</h2>
		<?php
		$gradovi=array("Sarajevo", "Banja Luka");
		echo $gradovi[0].'<br>';
		var_dump($gradovi);
		
		echo '<h2>Tekstualni (associative) nizovi</h2>'.'<br>';
		$cijenaAuta=array("Porsche"=>35000, "AudiTT"=>15000, "PassatCC"=>20000, "KIA"=>10000, "Volvo"=>25000);
		echo "Cijena Porsche-a je ". $cijenaAuta["Porsche"]. '<br>';
		echo "Cijena PassatCC-a je ". $cijenaAuta["PassatCC"]. '<br>';
		echo "Cijena AudiTT-a je ". $cijenaAuta["AudiTT"]. '<br>';
		var_dump($cijenaAuta);
		echo '<br>';
		echo '<h2>Pretrazivanje u nizu</h2><br>';
		$heroji=array("Batman", "Superman", "Hulk", "Iron man");
		$found=in_array("Hulk", $heroji);
		var_dump($found);
		echo '<br>';
		$foundKey=array_search("Hulk", $heroji);
		echo 'Trazena rijec Hulk unutar niza se nalazi na poziciji ['.$foundKey.'].<br>';
		echo '<h2>Sortiranje nizova po vrijednosti</h2><br>';
		$sastojci=array("ulje", "brasno", "vegeta", "germa");
		sort($sastojci);
		var_dump($sastojci);
		echo '<br>';
		rsort($sastojci);
		var_dump($sastojci);
		echo '<br>';
		$associativeArray=array("a"=>"jabuka", "b"=>"kruska", "d"=>"ananas", "c"=>"banana");
		var_dump($associativeArray);
		asort($associativeArray);
		var_dump($associativeArray);
		echo '<br>';
		ksort($associativeArray);
		var_dump($associativeArray);
		echo '<br>';
		arsort($associativeArray);
		var_dump($associativeArray);
		echo '<br>';
		?>
		
		
	</body>
</html>