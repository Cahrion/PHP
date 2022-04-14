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
		date_create_from_format()		= 	Belirtilecek olan formata göre biçimlendirilmiş tarih değerlerine göre, yeni bir tarih nesnesi dizisi oluşturarak oluşturduğu dizi değerini geriye döndürür.
		date_format()					= 	Oluşturulmuş olan yeni bir tarih nesnesini, belirtilecek olan bir formata biçimlendirerek biçimlendirdiği değeri geriye döndörür.
		*/
	
	$Zaman 			=	date_create("1980-12-08");  // Yıl-Ay-Gün
	date_time_set($Zaman, 20, 30, 15); // Saat, Dakika, Saniye
	
	$Formatla 		= 	date_format($Zaman, "d.m.y H:i:S");
	
		echo "Yeni Tarih Zaman Nesnesi Dizisinin Orjinal Hali";
		echo "<pre>";
		print_r($Zaman);
		echo "</pre>";
		echo "<br><br>";
	
		echo "Yeni Tarih Zaman Nesnesi Dizisinin Biçimlendirilmiş Hali";
		echo "<pre>";
		print_r($Formatla);
		echo "</pre>";
	
	?>
</body>
</html>