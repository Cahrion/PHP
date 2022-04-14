<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<?php
		/*
		
			abs() 		= Herhangi bir sayının mutlak değerini bularak, bulduğu değeri geriye döndürür.
			
		*/
	
	$SayiBir 		= 5;
	$SayiBirMutlak 	= abs(5);
	
		echo "5 sayısının ilk hali: " . $SayiBir . "<br>";
		echo "5 sayısının mutlak hali: " . $SayiBirMutlak . "<br>";
	
	$SayiIki 		= -4;
	$SayiIkiMutlak 	= abs(-4);
	
		echo "-4 sayısının ilk hali: " . $SayiIki . "<br>";
		echo "-4 sayısının mutlak hali: " . $SayiIkiMutlak . "<br>";
	
	?>
</body>
</html>