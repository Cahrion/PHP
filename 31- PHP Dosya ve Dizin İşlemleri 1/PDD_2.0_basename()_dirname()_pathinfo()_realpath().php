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
	
		basename() 	= Belirtilecek olan değer doğrultusunda, kaynagın sadece dosya adını bularak, bulduğu değeri geriye döndürür.
		
		dirname() 	= Belirtilecek olan değer doğrultusunda, kaynagın içerisinde bulunduğu dizin / dizinlerin adını bularak, bulduğu değeri geriye döndürür.
		
		pathinfo() 	= Belirtilecek olan değer doğrultusunda, kaynagın içerisinde bulunduğu dizin / dizinlerin adını ve dosya adını bularak, bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değeri geriye döndürür.
		
		realpath()	= Belirtilecek olan değer doğrultusunda, kaynagın mutlak yolunu bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Dosya 		= "Harici/Belge.txt"; // Var mı yok mu diye bakılır.
	$Bul 		= basename($Dosya);
	
		echo "basename Değeri: " . $Bul;
	
	?>
</body>
</html>