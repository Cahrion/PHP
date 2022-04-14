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
		array_search()		= Dizi içerisinde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemanı aramak ve ilgili elemanın anahtarını bulmak için kullanılır.
		array_key_exists()	= Dizi içerisinde bulunan anahtar veya anahtarlar dahilinde, belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır.
		in_array()			= Dizi içerisinde bulunan aeleman veya elemanlar dahilinde, belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır.
	*/
	
	$Degerler 				= array("A1" => "Volkan", "A2" =>"Hakan", "A3" => "Onur", "A4" => "Serkan", "A5" => "Levent");
	
		echo "<pre>";
		print_r($Degerler);
		echo "</pre>";
	
	$Sonuc 					= array_key_exists("A3", $Degerler);  
	
		echo "Sonuc : " . $Sonuc; // Varsa = 1, Yoksa = (Değer göndermez)
	
	

	?>
</body>
</html>