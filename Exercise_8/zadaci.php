<?php
	$gradovi=array('Sarajevo', 'Bihac', 'Bugojno', 'Mostar');
	echo '<h2>Drop down</h2><br>';
	echo 'Izaberite grad iz kojeg dolazite: ';
	echo  '<select>';
	foreach ($gradovi as $value){
		echo '<option>'. $value. '</option>';
	}
	echo '</select>';
	echo '<br>';
	echo '<h2>Radio dugmad</h2>';
	$kontinenti=array('Sjeverna Amerika', 'Juzna Amerika', 'Afrika', 'Evropa', 'Azija', 'Australija', 'Antarktika');
	foreach($kontinenti as $k){
		echo '<label><input type=radio name="continents">'. $k . '</label>';
	}
	echo '<br>';
	echo '<h2>Checkbox</h2>';
	$voce=array('jabuke', 'kruske', 'banane', 'maline');
	echo 'Tri vrste voca koje najvise volim su: <br>';
	foreach($voce as $vocka){
		echo '<label><input type="checkbox" name="fruit">' . $vocka . '</label><br>';
	}
?>