<!doctype html>
<?php
	// including the database connection file
	include('konekcija.php');
		
	if(isset($_GET['update'])){
		
		$id = $_GET['id'];
		
		$naslov = $_GET['naslov'];
		$autor = $_GET['autor'];
		$datum = $_GET['datum'];
		$kategorija = $_GET['kategorija'];
		$slika = $_GET['slika'];
		$tekst = addslashes ($_GET['tekst']);
				
		$rez = mysqli_query($conn, "UPDATE clanci SET naslov='$naslov', autor='$autor', datum='$datum', kategorija='$kategorija', slika='$slika', tekst='$tekst' WHERE id=$id");
		
		if($rez == TRUE){
			echo "Record updated successfully";
		}else{
			echo "Error updating record: ";
		}
		header("Location:index.php");
	}
	
?>

<?php
	//getting id from url
	$id = $_GET['id'];
 
	//selecting data associated with this particular id
	$result = mysqli_query($conn, "SELECT * FROM clanci WHERE id=$id");
 
	while($red = mysqli_fetch_array($result)){
		$naslov = $red['naslov'];
		$autor = $red['autor'];
		$datum = $red['datum'];
		$kategorija = $red['kategorija'];
		$slika = $red['slika'];
		$tekst = $red['tekst'];
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ureðivanje clanka</title>
	</head>
	
	<body>
		<form action="updateclanak.php" method="get">
			<table>
				<tr>
					<td>Naslov:</td>
					<td><input type="text" name="naslov" value="<?php echo $naslov; ?>"></td>
				</tr>
				<tr>
					<td>Autor:</td>
					<td><input type="text" name="autor" value="<?php echo $autor; ?>"></td>
				</tr>
				<tr>
					<td>Datum objave:</td>
					<td><input type="date" name="datum" value="<?php echo $datum; ?>"></td>
				</tr>
				<tr>
					<td>Kategorija:</td>
					<td><input type="text" name="kategorija" value="<?php echo $kategorija; ?>"></td>
				</tr>
				<tr>
					<td>Putanja do slike:</td>
					<td><input type="text" name="slika" value="<?php echo $slika; ?>" style="width:300px;"></td>
				</tr>
				<tr>
					<td>Tekst clanka:</td>
					<td><textarea type="text" name="tekst" rows="10" cols="80" ><?php echo $tekst; ?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
						<input type="submit" name="update" value="Update" />
					</td>
				</tr>
			</table>
		</form>
		
	</body>
</html>