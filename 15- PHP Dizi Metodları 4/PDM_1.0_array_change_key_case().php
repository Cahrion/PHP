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
		array_change_key_case() 	= Dizi içerisinde bulunan anahtar veya anahtarların büyük harf, küçük harf dönüştürme işlemleri için kullanılır.
		CASE_LOWER 					= Küçük harf yapar. (Varsayılan değer)
		CASE_UPPER 					= Büyük harf yapar.
	*/
	
	$Degerler 				= array("IsimBir" => "Volkan","IsimIki" => "Hakan", "IsimUc" => "Onur", "IsimDort" => "Levent", "IsimBes" => "Serkan",);
	
		echo "<pre>";
		print_r($Degerler);
		echo "</pre>";
	
	$Sonuc					= array_change_key_case($Degerler); // Alttakinin aynısı
// 	$Sonuc					= array_change_key_case($Degerler, CASE_LOWER);
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	

	?>
</body>
</html>