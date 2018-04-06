<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP vjezba -2</title>
		 <style>
			
		 </style>
			 
		
	</head>
	<body>
		<?php 
			$y=pow(4,3);
			echo $y.'<br>';
			define('number', 23);
			echo number.'<br>';
			define('str', "Ovo je string konstanta");
			echo str. '<br>';
			$text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of
Lorem Ipsum.";
			echo $text. '<br><br>';
			echo strlen($text).'<br>';
			echo str_word_count($text).'<br>';
			echo str_replace("Lorem", "Alma", $text).'<br>';
			$text2="The quick brown fox jumped over the fence.";
			echo strpos($text2, "fox").'<br>';
			$text3="Alma1";
			echo trim($text3, "A1").'<br>';
		
		?>
		
	</body>
</html>