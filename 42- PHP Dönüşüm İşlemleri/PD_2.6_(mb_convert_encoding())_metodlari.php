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
		mb_convert_encoding()	= Belirtilecek olan içeriği, belirtilecek olan karakter kodlaması dahilinde dönüştürerek, karakter kodlaması dönüştürülmüş olan değeri geriye döndürür.
			auto 	= ASCII, HIS, UTF-8, EUC-JP, SJIS kodlaması sırası kullanılır.
		mb_detect_encoding()	= Belirtilecek olan içeriğin karakter kodlamasını algılayarak, bulduğu değeri geriye döndürür.
		mb_list_encodings()		= PHP yazılımı içerisinde kullanılabilecek olan sisteme tanımlı tüm karakter kodlaması listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
	*/
	
	$Sonuc		= mb_list_encodings(); // Sunucudaki tüm karakter kodlaması verisini verir.
	echo "<pre>"; 
	print_r($Sonuc);
	echo "</pre>"; 
	?>
</body>
</html>