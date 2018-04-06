<?php
	include ('header.php');
?>

<h2>Navigacijski meni</h2>
<a class="addbutton" href="addnav.php" />Dodaj meni </a>
<br><br>




	
	
		
		<table border=1px id="tabela">
		 
			<tr>
			    <th>ID</th>
				<th>Name</th>
				<th>Link</th>
				<th colspan="2">Action</th>
					
			</tr>
			<?php
			$sql_nav="SELECT * FROM nav_meni1";
			$rez_meni=mysqli_query($conn, $sql_nav);
			while ($red=mysqli_fetch_assoc($rez_meni)){
			echo '<tr>';
					echo '<td style="text-align:center;">' . $red['id']. '</td>';
					echo '<td>' . $red['ime']. '</td>';
					echo '<td>' . $red['link']. '</td>';
					//echo "<td><a href=\"deletenav.php?id=$red[id]\" />Delete</a> | <a href=\"updatenav.php?id=$red[id]\" />Edit</a></td>";
					echo '<td style="text-align:center;"><a class="deletebutton" href="deletenav.php?id='.$red['id'].'" >Delete</a> <a class="editbutton" href="updatenav.php?id=' . $red['id'] . '" >Edit</a></td>';
				echo '</tr>';
			}
		
			
			?>
				
			
		</table>
		<br><br>
		
		<h2>Lista članaka</h2>
	
	<a class="addbutton" href="addclanak.php">Dodaj clanak</a>
	
	<br><br>
	
	<table>
		<tr>
			<th>ID</th>
			<th>Autor</th>
			<th>Datum</th>
			<th>Kategorija</th>
			<th>Naslov</th>
			<th>Slika</th>
			<th>Tekst</th>
			<th>Action</th>
		</tr>
		<?php
			$sql_clanci = "SELECT * FROM clanci";
			
			$rez_clanci = mysqli_query($conn, $sql_clanci);
			
			while($red = mysqli_fetch_assoc($rez_clanci)){
				echo '<tr>';
					echo '<td style="text-align:center;">' . $red['id'] . '</td>';
					echo '<td>' . $red['autor'] . '</td>';
					echo '<td>' . $red['datum'] . '</td>';
					echo '<td>' . $red['kategorija'] . '</td>';
					echo '<td>' . $red['naslov'] . '</td>';
					echo '<td>' . $red['slika'] . '</td>';
					echo '<td>' . substr($red['tekst'], 0, 20) . '</td>';
					echo '<td width="178"><a class="deletebutton" href="deleteclanak.php?id='.$red['id'].'">Delete</a> <a class="editbutton" href="updateclanak.php?id='.$red['id'].'">Edit</a> <a class="viewbutton" href="view.php?id='.$red['id'].'">View</a></td>';
				echo '</tr>';
			}
		
		?>
	</table>
		
	<?php include ('footer.php'); ?>