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
	
	$Degerler 				= array("A1" => "5", "A2" => 5, "A3" => "10", "A4" => 10);
	
		echo "<pre>";
		print_r($Degerler);
		echo "</pre>";
	
	$Sonuc 					= array_search(5 ,$Degerler, true); // (true) verisi integer olup olmadığına bakar.
	
		echo "Aranılan elemanın anahtar değeri: " . $Sonuc;
	
	

	?>
</body>
</html>