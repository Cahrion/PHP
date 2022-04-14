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
		
			pow() 		= Herhangi bir sayının belirtilecek kadar üssünü bularak, bulduğu değeri geriye döndürür.
			
		*/
	$Deger1 	= -6.25;
	$Deger2 	= -2;
	$Ussu 		= pow($Deger1, $Deger2);
	
		echo "-6 üssü -2: " . $Ussu . "<br>";
	
	$Deger3 	= -2.25;
	$Deger4 	= -4.2;
	$Ussu2 		= pow($Deger3, $Deger4);
	
		echo "-2.25 üssü -4.2: " . $Ussu2 . "<br>";
	// Üst taraf (-) eksi ondalık sayı olamaz.
	
	
	?>
</body>
</html>