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
	
	$SayiUret1 		= mt_rand(0, 100);
	$SayiUret2 		= mt_rand(500, 750);
	$SayiUret3 		= mt_rand(1000000, 2000000);
	$SayiUret4 		= mt_rand(150000, 151000);
	$SayiUret5 		= mt_rand(10, 20);
	
		echo "(0 ila 100 arası)Php tarafından rastgele üretilen sayı değeri: " . $SayiUret1 . "<br>";
		echo "(500 ila 750 arası)Php tarafından rastgele üretilen sayı değeri: " . $SayiUret2 . "<br>";
		echo "(1000000 ila 2000000 arası)Php tarafından rastgele üretilen sayı değeri: " . $SayiUret3 . "<br>";
		echo "(150000 ila 151000 arası)Php tarafından rastgele üretilen sayı değeri: " . $SayiUret4 . "<br>";
		echo "(10 ila 20 arası)Php tarafından rastgele üretilen sayı değeri: " . $SayiUret5 . "<br>";
	
	?>
</body>
</html>