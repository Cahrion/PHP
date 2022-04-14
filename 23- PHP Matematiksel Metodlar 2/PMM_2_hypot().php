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
		
			hypot() 		= Belirtilecek olan uzunluk değerine sahip bir dik üçgenin hipotenüsünü hesaplayarak, bulduğu değeri geriye döndürür.
			
		*/
	$X 			= 5;
	$Y 			= 12;
	$hyp 		= hypot($X, $Y);
		echo "X kenarı: " . $X . "<br>";
		echo "Y kenarı: " . $Y . "<br>";
		echo "Hipotenus uzunlugu: " . $hyp;

	
	?>
</body>
</html>