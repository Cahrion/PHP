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
		date_create() 	= Belirtilecek olan tarih değerlerine göre, yeni bir tarih nesnesi dizisi oluşturarak oluşturduğunu dizi değerini geriye döndürür.
		date_date_set() = Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan yeni bir tarihi atamak için kullanılır.
		date_time_set() = Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan yeni bir saati atamak için kullanılır.
		*/
	
	$Tarih 		=	date_create(); // Yıl-Ay-Gün  (Varsayılan zaman şuanki zamandır.)
	
		echo "<pre>";
		print_r($Tarih); // Tam olarak bir dizi değildir.
		echo "</pre>";
	
	?>
</body>
</html>