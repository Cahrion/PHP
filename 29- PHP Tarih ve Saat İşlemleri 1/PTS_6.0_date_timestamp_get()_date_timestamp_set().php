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
		date_timestamp_get()		= 	Oluşturulmuş olan yeni bir tarih nesnesinin, Unix zaman damgasını bularak bulduğu değeri geriye döndürür.
		date_timestamp_set()		=	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilmiş olan  Unix zaman damgası değerini atar ve yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		*/
	
	$Zaman 			=	date_create("1980-12-08"); // Yıl-Ay-Gün  
	$ZamanDamgasi 	=	date_timestamp_get($Zaman);
	
		echo "Oluşturulmuş olan zamanın, Unix zaman damgası değeri: " . $ZamanDamgasi;
	
	?>
</body>
</html>