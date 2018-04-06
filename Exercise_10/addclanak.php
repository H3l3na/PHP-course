<?php
	$error_msg = '';
	$success_msg = '';
	
	include('konekcija.php');
	
	include 'header.php';
	
	if(isset($_GET['add'])){
		$naslov = $_GET['naslov'];
		$autor = $_GET['autor'];
		$datum = $_GET['datum'];
		$kategorija = $_GET['kategorija'];
		$slika = $_GET['slika'];
		$tekst = addslashes ($_GET['tekst']);
		
		if(empty($naslov = $_GET['naslov']) || empty($autor = $_GET['autor']) || empty($kategorija = $_GET['kategorija']) || empty($slika = $_GET['slika']) || empty($datum = $_GET['datum']) || empty($tekst = addslashes ($_GET['tekst']))){
			
			$error_msg = "Input polja su obavezna, molimo da popunite ista.";
		
		}else{
			
			$sql_add = mysqli_query($conn, "INSERT INTO clanci(naslov, autor, datum, kategorija, slika, tekst) VALUES ('$naslov', '$autor', '$datum', '$kategorija', '$slika', '$tekst') ");
			
			$success_msg = "Članak uspjesno dodan.";
		}
	}

?>
	<h2>Dodavanje članka</h2>
	<form action="addclanak.php" method="get">
		<table class="noborder"sss>
			<tr>
				<td width="120px" class="noborder">Naslov:</td>
				<td class="noborder"><input class="input-form-nav" type="text" name="naslov"></td>
			</tr>
			<tr>
				<td class="noborder">Autor:</td>
				<td class="noborder"><input class="input-form-nav" type="text" name="autor"></td>
			</tr>
			<tr>
				<td class="noborder">Datum objave:</td>
				<td class="noborder"><input class="input-date" type="date" name="datum"></td>
			</tr>
			<tr>
				<td class="noborder">Kategorija:</td>
				<td class="noborder"><input class="input-form-nav" type="text" name="kategorija"></td>
			</tr>
			<tr>
				<td class="noborder">Putanja do slike:</td>
				<td class="noborder"><input class="input-form-nav" type="text" name="slika"></td>
			</tr>
			<tr>
				<td class="noborder">Tekst clanka:</td>
				<td class="noborder"><textarea class="input-form-nav" type="text" name="tekst" rows="5" cols="60"></textarea></td>
			</tr>
			<tr>
				<td class="noborder" colspan="2"><input class="addbutton" type="submit" name="add" value="Dodaj clanak" /></td>
			</tr>
		</table>
	</form>
	<p class="error"><?php echo $error_msg; ?></p>
	<p class="success"><?php echo $success_msg; ?></p>
	
	</body>
</html>