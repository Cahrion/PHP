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
		json_encode() 	= Belirtilecek olan içeriğin, JSON karşılığını bularak, bulduğu değeri geriye döndürür.
			JSON_HEX_TAG		= Belirtilecek olan içerikte bulunan tag (etiket) başlangıç ve bitiş karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_HEX_APOS		= Belirtilecek olan içerikte bulunan ' (tek tırnak) karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_HEX_QUOT		= Belirtilecek olan içerikte bulunan " (çift tırnak) karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_HEX_AMP		= Belirtilecek olan içerikte bulunan & (ampersant) karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_FORCE_OBJECT	= Belirtilecek olan içeriği nesne dönüşüm yapısına göre zorlamak için kullanılır.
			
		json_decode() 	= Belirtilecek olan JSON değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Degerler 	= array("Extra Egitim", "Icabi Kırgız", "A'dan Z'ye PHP Görsel Egitim Seti", "27\" Monitor", "HTML & CSS & JS");

	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	
	$Donustur 	= json_encode($Degerler); 
	
	echo $Donustur; // Geri döndürme herhangi bir türkçe hatası oluşmaz.
	
	$GeriDondur = json_decode($Donustur); 
	
	echo "<pre>";
	print_r($GeriDondur);
	echo "</pre>";
	?>
</body>
</html>