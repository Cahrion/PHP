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
	
	$Deger 		=  checkdate(12, 8, 1980); // Ay, gün(Tek hane), yıl
	
	if($Deger == 1){
		echo "Girilen tarih değeri geçerlidir. ";
	}else{
		echo "Girilen tarih değeri geçerlidir. ";
	}
	
	?>
</body>
</html>