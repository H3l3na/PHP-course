<?php
	include ('konekcija.php');
	if (isset($_GET['update'])){
		$id=$_GET['id'];
		$ime=$_GET['ime'];
		$link=$_GET['link'];
		$rez=mysqli_query($conn, "UPDATE nav_meni1 SET ime='$ime', link='$link' WHERE id=$id");
		if ($rez==TRUE){
			echo "Record updated successfully";
		}else {
			echo "Error updating record.";
		}
		header("Location:index.php");
	}
?>

<?php
	$id=$_GET['id'];
	$result=mysqli_query($conn, "SELECT *FROM nav_meni1 WHERE id=$id");
	
	while ($red1=mysqli_fetch_array($result)){
		$ime=$red1['ime'];
		$link=$red1['link'];
	}
?>

<form action="updatenav.php" method="GET">
	Naziv menija: <input type="text" name="ime" value="<?php echo $ime; ?>" style="width:250px"/><br><br>
	Link menija: <input type="text" name="link" value="<?php echo $link; ?>" style="width:250px"/><br><br>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
	<input type="submit" name="update" value="Update"/>
</form>

	
	





















