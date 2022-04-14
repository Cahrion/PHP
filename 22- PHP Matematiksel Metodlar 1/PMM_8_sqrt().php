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
		
			sqrt() 		= Herhangi bir sayının karekökünü bularak, bulduğu değeri geriye döndürür.
			
		*/
	
	$SayiBir 		= 9;
	$SayiBirKarekok = sqrt(9);
	
		echo "9 sayısının ilk hali: " . $SayiBir . "<br>";
		echo "9 sayısının karekoklü hali: " . $SayiBirKarekok . "<br>";
	
	$SayiIki 		= -4;
	$SayiIkiMutlak 	= sqrt(-4);
	
		echo "-4 sayısının ilk hali: " . $SayiIki . "<br>";
		echo "-4 sayısının karekoklü hali: " . $SayiIkiMutlak . "<br>";
	
	?>
</body>
</html>