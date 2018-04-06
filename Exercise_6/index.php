<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba - 6</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
			 
		
	</head>
	<body>
	<h2>Switch case</h2>
		<?php 
			$grad="Sarajevo";
			switch($grad){
			case("Sarajevo"):
				echo 'Obavezno posjetite Bascarsiju <br>'; break;
				default:
					echo 'Ne znam taj grad<br>';
			}
			function zbirDvaBroja($broj1, $broj2){
				$suma=$broj1+$broj2;
				echo 'Zbir brojeva '. $broj1 . ' i '. $broj2. ' je '. $suma . '<br>';
			}
			zbirDvaBroja(1,2);
		?>
		
	</body>
</html>