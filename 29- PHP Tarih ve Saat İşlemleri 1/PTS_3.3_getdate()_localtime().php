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
	
	$Zaman 		=	localtime(); 
		echo "Yıl: " . $Zaman[5] . " (Yılın başlangıcı 1900 olarak kabul edilir ve değer 1900 yılından sonra kaç yıl geçtiğidir)<br>";
		echo "Ay: " . $Zaman[4] . " (Bu değer 0'dan başlar. Ocak : 0, Şubat : 1, ... şeklinde Aralık : 11 e kadar devam eder.)<br>";
		echo "Gün: " . $Zaman[3] . "<br>";
	
		echo "Saat: " . $Zaman[2] . "<br>";
		echo "Dakika: " . $Zaman[1] . "<br>";
		echo "Saniye: " . $Zaman[0] . "<br>";
	
		echo "Bugün yılın " . $Zaman[7] . "<br>";
		echo "Bugün haftanın " . $Zaman[6] . "<br>";
	
		echo "Yaz saati uygulaması " . $Zaman[8] . " (1 veya 0) ";
	?>
</body>
</html>