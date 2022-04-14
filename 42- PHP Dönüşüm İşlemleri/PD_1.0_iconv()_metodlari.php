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
		iconv() 				= Belirtilecek olan içeriği, belirtilecek olan karakter kodlaması dahilinde dönüştürerek, karakter kodlaması dönüştürülmüş olan değeri geriye döndürür.
			TRANSLIT 	= Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanılacak olursa ilgili karakterin yada karakterlerin yerine benzer bir karakter değeri yerleştirmek için kullanılır.
			IGNORE  	= Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanılacak olursa ilgili karakter yada karakterler yok sayılır veya ilgili karakterin / karakterlerin yerine kural dışı karakter değeri yerleştirmek için kullanılır.
			
		iconv_get_encoding()	= PHP sayfası dahilinde kullanılmakta olan karakter kodlama bilgileri listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür. Ayrıca belirtilecek olan değer doğrultusunda tüm karakter kodlama bilgisi yerine sadece ilgili karakter kodlaması değerini döndürebilir.
		iconv_set_encoding()	= PHP sayfası dahilinde kullanılmakta olan karakter kodlama türüne belirtilecek olan karakter kodlama kümesini atamak için kullanılır.
	*/
	
	$Icerik		= "IK System - Icabi Kırgız - A'dan Z'ye PHP Görsel Eğitim Notları";
	echo $Icerik . "<br>";
	$Sonuc 		= iconv("UTF-8", "ISO-8859-9", $Icerik); // 1.Parametre şuanki kodlama - 2.Parametre istenen kodlama - 3. Parametre icerik
	echo $Sonuc . "<br>";
	$Islem 		= iconv("ISO-8859-9", "UTF-8", $Sonuc); // 1.Parametre şuanki kodlama - 2.Parametre istenen kodlama - 3. Parametre icerik
	echo $Islem;
		
	?>
</body>
</html>