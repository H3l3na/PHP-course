<?php
	
	$error_msg = '';
	$success_msg = '';
	
	include ('konekcija.php');
	
	include 'header.php';
	
	if(isset($_POST['addnav'])){
		
		//Simple salidacija
		if(empty($name = $_POST['meni_name']) || empty($link = $_POST['link'])){
			
			$error_msg = "Input polja su obavezna, molimo da popunite ista.";
			
		}else{
			
			$sql_insert = mysqli_query($conn, "INSERT INTO nav_meni(link, name) VALUES('$link', '$name')");
						
			$success_msg = "Navigacijski meni uspjesno dodan.";
			
		}
		
	}

?>
	<h2>Dodavanje menija</h2>
	<form action="" method="post">
		<table class="noborder">
			<tr>
				<td width="120px" class="noborder">Naziv menija:</td>
				<td class="noborder"><input class="input-form-nav" type="text" name="meni_name" /></td>
			</tr>
			<tr>
				<td class="noborder">Link menija:</td>
				<td class="noborder"><input class="input-form-nav" type="text" name="link" /></td>
			</tr>
			<tr><td class="noborder" colspan="2"><input class="addbutton" type="submit" name="addnav" value="Dodaj meni" /></td>
			</tr>
		</table>		
	</form>
	<p class="error"><?php echo $error_msg; ?></p>
	<p class="success"><?php echo $success_msg; ?></p>
	
	</body>
</html>
