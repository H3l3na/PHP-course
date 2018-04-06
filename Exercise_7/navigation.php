<?php

	$nav_meni=array('Home'=>'/php', 'About'=>'about.php', 'Clanci'=>'clanci.php', 'Portfolio'=>'portfolio.php');
	foreach($nav_meni as $key=>$value){
		echo '<a href=" ' .$value. '"> '. $key. '</a>';
	}
	
?>

