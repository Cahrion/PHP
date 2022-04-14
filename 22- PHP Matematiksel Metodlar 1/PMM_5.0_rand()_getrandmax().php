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
		
			rand() 			= Rastgele bir sayı üreterek, ürettiği değeri geriye döndürür.	
			getrandmax() 	= rand() metodu kullanılarak üretilebilecek en büyük sayının değerini bularak, bulduğu değeri geriye döndürür.	
			
		*/
	
	$SayiUret1 		= rand();
	$SayiUret2 		= rand();
	$SayiUret3 		= rand();
	$SayiUret4 		= rand();
	$SayiUret5 		= rand();
	
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret1 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret2 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret3 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret4 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret5 . "<br>";
	
	?>
</body>
</html>