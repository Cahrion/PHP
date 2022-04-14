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
		compact()	= Dizi içerisinde bulunan elemanı / elemanları anahtar gibi görerek, daha önceden aynı isimle tanımlanmış olan değişkenlerden ilgili anahtarlara değer üretmek için kullanılır.
	*/
	
	$isim 			= "Icabi";
	$soyisim 		= "Kırgız";
	$dogumtarihi 	= "1980";
	
	
	$Bilgiler 		= array("A1" =>"isim","A2" => "soyisim","A3" => "dogumtarihi"); 
	
		echo "<pre>";
		print_r($Bilgiler);
		echo "</pre>";
	
	
	$Sonuc 			= compact($Bilgiler);
// 	$Sonuc 	  		= array("isim" => "Icabi", "soyisim" => "Kırgız", "dogumtarihi" => "1980"); 
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	

	?>
</body>
</html>