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
	
	$Zaman 			=	date_create_from_format("d-m-Y","08-12-1980");  
	// 1. Parametre : Sabitler, 2. Parametre : Tarih (Gün-Ay-Yıl) (Gün-ay-yıl verilerinin yerleri değişebilir.)
	
		echo "<pre>";
		print_r($Zaman);
		echo "</pre>";
	
	?>
</body>
</html>