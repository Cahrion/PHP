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
		
			mt_rand() 		= Mersenne twister algoritması kullanılarak rastgele bir tam sayı üreterek, ürettiği değeri geriye döndürür.	
			mt_getrandmax() = mt_rand() metodu ile Mersenne twister algoritması kullanılarak  üretilebilecek en büyük sayının değerini bularak, bulduğu değeri geriye döndürür.	
			
		*/
	
	$SayiUret1 		= mt_rand();
	$SayiUret2 		= mt_rand();
	$SayiUret3 		= mt_rand();
	$SayiUret4 		= mt_rand();
	$SayiUret5 		= mt_rand();
	
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret1 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret2 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret3 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret4 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret5 . "<br>";
	
	?>
</body>
</html>