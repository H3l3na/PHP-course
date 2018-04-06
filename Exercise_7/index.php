<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba - 7</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		
		
	</head>
	<body>
	<!--Navigacijski meni-->
	<nav>
		<?php include 'navigation.php' ?>
	</nav>
	<?php 
			include 'form.php';
			//include 'navigation.php';
			//include 'racunaj.php';
		?>
	
		<form action="/php/vjezba-7/racunaj.php" method="get">
		<br><br>
			Unesite pocetni broj: <input type="number" name="start"><br><br>
			Unesite krajnji broj: <input type="number" name="kraj"><br><br>
			<input type="submit" name="btn2" value="Pošalji">
		</form>
		
	</body>
</html>