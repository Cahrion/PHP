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
			ceil() 		=	Herhangi bir ondalıklı sayıyı yukarıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
			floor() 	=	Herhangi bir ondalıklı sayıyı aşağıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
			round() 	=	Herhangi bir ondalıklı sayıyı kendisine en yakın tam sayıyı konrol ederek yukarıya veya aşağıya yuvarlayarak, yuvarlama sonucunda oluşan değeri geriye döndürür.
		*/
	$deger	= 8.5;
		echo "Değer sayısı: " . $deger . "<br>";
		echo "ceil komutu: " . ceil($deger)  . "<br>";
		echo "floor komutu: " . floor($deger) . "<br>";
		echo "round komutu: " . round($deger) . "<br><br>";
	$deger2	= 11.49;
		echo "Değer sayısı: " . $deger2 . "<br>";
		echo "ceil komutu: " . ceil($deger2)  . "<br>";
		echo "floor komutu: " . floor($deger2) . "<br>";
		echo "round komutu: " . round($deger2) . "<br>";
	
	
	
	?>
</body>
</html>