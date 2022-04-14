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
			preg_split() 	=	Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda içeriği kontrol eder ve eşleşmeyi sağlayan değer / değerlerden içeriği bölümleyerek yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız, Ben Bir PHP Ögrencisiyim. Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";
	$Desen		= "//u"; // Türkçe karakterleri göstermesi için ("u") unicode karakteri kullanılır.
	$Sonuc 		= preg_split($Desen, $Icerik); 
	
	// (1) Hangi desenden kesileceği
	// (2) Icerik bilgisi
	
		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "Değişen İçerik: <br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	
	?>
</body>
</html>