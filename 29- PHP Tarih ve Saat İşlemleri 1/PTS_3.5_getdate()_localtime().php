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
		getdate() 	= Geçerli zaman bilgileri değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.	
		localtime() = Yerel zaman bilgileri değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		*/
	
	$ZamanDamgasi 	=	date("U");
		echo "Zaman damgası: " . $ZamanDamgasi . "<br><br>";
	
	$Zaman 			=	localtime($ZamanDamgasi, true);
	
		echo "Yıl: " . $Zaman["tm_year"] . " (Yılın başlangıcı 1900 olarak kabul edilir ve değer 1900 yılından sonra kaç yıl geçtiğidir)<br>";
		echo "Ay: " . $Zaman["tm_mon"] . " (Bu değer 0'dan başlar. Ocak : 0, Şubat : 1, ... şeklinde Aralık : 11 e kadar devam eder.)<br>";
		echo "Gün: " . $Zaman["tm_mday"] . "<br>";
	
		echo "Saat: " . $Zaman["tm_hour"] . "<br>";
		echo "Dakika: " . $Zaman["tm_min"] . "<br>";
		echo "Saniye: " . $Zaman["tm_sec"] . "<br>";
	
		echo "Bugün yılın " . $Zaman["tm_yday"] . "<br>";
		echo "Bugün haftanın " . $Zaman["tm_wday"] . "<br>";
	
		echo "Yaz saati uygulaması " . $Zaman["tm_isdst"] . " (1 veya 0) ";
	?>
</body>
</html>