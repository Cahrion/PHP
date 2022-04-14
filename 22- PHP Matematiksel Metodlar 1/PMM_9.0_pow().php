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
	$Deger1 	= 5;
	$Deger2 	= 4;
	$Ussu 		= pow($Deger1, $Deger2);
	
		echo "5 üssü 4: " . $Ussu . "<br>";
	
	$Deger3 	= 5.10;
	$Deger4 	= 4.20;
	$Ussu2 		= pow($Deger3, $Deger4);
	
		echo "5.10 üssü 4.20: " . $Ussu2 . "<br>";
	
	
	?>
</body>
</html>