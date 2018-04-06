<?php
	include 'konekcija.php';
	$sql="SELECT * FROM nav_meni";
	$rezultat=mysqli_query($conn, $sql);
	$red=mysqli_fetch_assoc($rezultat);
?>

<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba - 9</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		
		
	</head>
	
	<body>
	<h3><a href="addnav.php">Dodaj </a><h3>
		
		<table border=1px id="tabela">
		 
			<tr>
			    <?php 
					echo '<td id="first"><strong>'. 'ID'. ' </strong></td>';
					echo '<td id="first"><strong>'. 'Name'. '</strong> </td>';
					echo '<td id="first"><strong>'. 'Link'. ' </strong></td>';
					echo '<td id="first"><strong>'. 'Action'. ' </strong></td>';
					echo '<br>';?>
				</tr>
				<tr>
				<?php
				while ($red=mysqli_fetch_assoc($rezultat)){
					echo '<td>'. $red['id']. ' </td>';
					echo '<td>'. $red['name']. ' </td>';
					echo '<td>'. $red['link']. ' </td>';
					echo "<td><a href=\"deletenav.php?id=$red[id]\">Delete | <a href=\"editnav.php?id=$red[id]\">  Edit </a> </a>";
					echo '<br>';
				}
				?>
			</tr>
		</table>
		
	</body>
</html>