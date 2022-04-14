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
		array_replace()	 			= Dizinin içersinde bulunan boş eleman veya elemanları filtre ederek yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler 	= array("Ahmet","Yaprak","","Yakup","","Erdem","","Muzaffer");

		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	$Sonuc 			= array_filter($Isimler); // Anahtarlar korunur.
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>