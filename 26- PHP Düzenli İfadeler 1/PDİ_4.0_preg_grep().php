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
			preg_grep() 	=	Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda dizi içeriğini kontrol eder ve aranan değer / değerlerin eşleşmesi durumunda, eşleşmeyi sağlayan içeriğin değer / değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		*/
	
	$Icerik 	= array(22, 12, 143, 252, 82, 104);
	$Desen		= "/1/";
	$Sonuc 		= preg_grep($Desen, $Icerik); 
	
	// (1) Hangi desenden seçileceğini
	// (2) Icerik bilgisi
	
	
		echo "Orjinal İçerik: <br>";
		echo "<pre>";
		print_r($Icerik);
		echo "</pre>";
		echo "<br><br>";
		echo "Bulunan İçerik: <br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>