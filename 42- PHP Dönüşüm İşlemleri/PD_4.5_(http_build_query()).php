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
		http_build_query()	= Belirtilecek olan dizi içerisindeki tüm anahtar ve değerleri bularak, bulduğu değerleri URL kodlamalı bir sorgu dizisine dönüştürerek dönüştürdüğü değeri geriye döndürür.
	*/
	
	$Degerler 		= array("EgitimTuru" => "Web Programlama", "EgitimSekli" => "Görsel Eğitim Seti", "KodlamaDili" => "PHP");
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	
	$Sonuc			= http_build_query($Degerler, "", "|||"); // 3. anahtar "&" değerini değiştirir ve istenilen değeri yapar.
	echo $Sonuc;
	
	?>
</body>
</html>