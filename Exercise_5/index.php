<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba - 5</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
			 
		
	</head>
	<body>
	<h2>Foreach petlja </h2>
		<?php 
			$voce=array("jabuke", "kruske", "maline", "borovnice");
			foreach ($voce as $a){
				echo $a. '<br>';
				}
		
		?>
		
	</body>
</html>