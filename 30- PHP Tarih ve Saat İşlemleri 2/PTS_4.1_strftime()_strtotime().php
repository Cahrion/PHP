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
			strftime() 		=	Yerel tarih ve saat bilgilerini belirtilecek olan formata göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
			strftoime() 	=	İngilizce metin içerikli bir zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
		*/
	
	$ZamanDamgasi 	= mktime(20, 30, 45, 12, 8, 1980); 
	
		echo "Zaman Damgasi Değeri: " . $ZamanDamgasi . "<br>";
	
	setlocale(LC_ALL, "tr_TR", "tr", "turkish");
	$Zaman 			=	strftime("%d %B %Y %T %A", $ZamanDamgasi); 
	
		echo $Zaman;
	
	?>
</body>
</html>