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
			preg_quote() 		=	Kendisine parametre olarak verilen içeriği kontrol eder ve içerik dahilinde özel karakter veya karakterlerin bulunması durumunda bulunan özel karakter veya karakterlerin onune \ (ters slash) ekleyerek yeni bir içerik oluşturur ve oluşturduğu içeriği geriye döndürür.
			ÖZEL KARAKTERLER 	=  . \ + * ^ $ = ? ! | : - [ ] ( ) { } < >
		*/
	
	$Icerik 	= "Merhaba Nasılsınız efenim ?";
	$Sonuc 		= preg_quote($Icerik, "M"); 
	
	// (1) Icerik bilgisi
	// (2) Özel karakterlerden farklı olarak ek bir işarete de konulsun isteniyorsa işaret yazılır.
	
		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "Değişen İçerik: <br>" . $Sonuc;
	
	?>
</body>
</html>