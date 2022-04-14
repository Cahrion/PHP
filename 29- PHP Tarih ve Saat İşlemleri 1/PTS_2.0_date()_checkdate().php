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
		date() 			=	Tarih ve saat bilgilerini bularak, bulduğu değeri geriye döndürür. Ayrıca tarih ve saat bilgilerini istege bağlı olarak biçimlendirmek için de kulanılır.
		checkdate()		=	Belirtilecek olan zamanı Gregoryen (Miladi) takvime göre doğrulamasını yaparak, doğrulama sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
		*/
	
	$Tarih 		=  date("d.m.Y"); // Tarih bilgisi verir
	
		echo "Tarih: " . $Tarih;
		
	?>
</body>
</html>