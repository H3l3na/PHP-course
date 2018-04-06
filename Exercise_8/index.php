<?php
	include 'konekcija.php';
	$sql="SELECT * FROM users";
	$rezultat=mysqli_query($conn, $sql);
	$red=mysqli_fetch_assoc($rezultat);
?>

<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba - 8</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		
		
	</head>
	<body>
		<h1>Podaci iz baze </h1>
		<table>
			<tr>
				<th>Ime</th>
				<th>Prezime</th>
			</tr>
			<?php
				while ($red=mysqli_fetch_assoc($rezultat)){
					echo '<tr><td>'. $red['ime']. '</td>';
					echo '<td>'. $red['prezime']. '</td>';
				}
			?>
		</table>
		
	</body>
</html>