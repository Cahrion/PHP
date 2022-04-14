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
		time() 			= Geçerli zamanı Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
		mktime() 		= Belirtilecek olan zamanı Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
		microtime() 	= Geçerli zamanın Unix zaman damgası ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
		gettimeofday() 	= Geçerli zamanın Unix zaman damgası, mikro saniye, yaz saati uygulaması ve Greenwich batısı değerlerinden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür. Ayrıca istenirse "string" olarak da geçerli zamanın Unix zaman damgası ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
		*/
	
	$ZamanDamgasi 		=	microtime();  
	
	$Dizi 				= explode(" ", $ZamanDamgasi);
	$DiziIc				= explode(".", $Dizi[0]);
	$ZamanDamgasi 		= $Dizi[1] . "," . $DiziIc[1]; 
	
		echo "Mikro Saniye / Zaman Damgasi: " . $ZamanDamgasi . "<br>";
		echo "Zaman Damgasi: " . $Dizi[1] . "<br>";
		echo "Mikro Saniye: " . $DiziIc[1];
	?>
</body>
</html>