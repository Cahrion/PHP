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
	$deger	= 8.5495;
		echo "Değer sayısı: " . $deger . "<br>";
		echo "round komutu: " . round($deger, 2) . "<br><br>";
	// Ikinci parametrede virgülden sonraki hane sayısı belirlenir.
	$deger2	= 11491123;
		echo "Değer sayısı: " . $deger2 . "<br>";
		echo "round komutu: " . round($deger2, -2) . "<br>";
	// Ikinci parametrede virgülden sonraki hane sayısı belirlenir. (-) parametreler sondan veriyi ele alır ve kaç adet (-) ise ona göre o haneye bakılır 
	// (-2) değeri son iki hane alınır baştaki değere göre işlem yapar. Ek olarak aldıklarını 0 yapar.
	
	
	
	?>
</body>
</html>