<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba -1</title>
		 <style>
			body{
				font-size: 22px;
			}
			.container{
				width: 80%;
				margin: 0 auto;
			}
		 </style>
			 
		
	</head>
	<body>
	<div class="container">
		<?php
		/*Ime: Alma
		  Prezime: Djedovic
		  Susret: prvi*/
		  //Ovo je linijski komentar koji koristi znakove '//'
		  #Ovo je linijski komentar koji koristi znakove '#'
			echo 'Ovo je moj prvi kod u PHP!'; 
			echo '<br>';
			print 'Ovo je moj drugi kod u PHP!';
			echo '<br>';
			$ime='Alma';
			$prezime="Djedovic";
			$brojGodina=21;
			echo 'Ja se zovem '. $ime .' '. $prezime. ' i imam '. $brojGodina. ' godina. <br>';
			var_dump($ime, $prezime, $brojGodina);
			echo '<br><br>';
			$br1=41;
			$br2=8;
			echo $br1/$br2. '<br>'. $br1%$br2. '<br>';
			echo $br1+$br2. '<br>';
			echo $br1-$br2. '<br>';
			echo $br1*$br2. '<br>';
		?>
		</div>
	</body>
</html>