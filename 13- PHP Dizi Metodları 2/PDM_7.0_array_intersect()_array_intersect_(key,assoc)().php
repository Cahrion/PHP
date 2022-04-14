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
		array_intersect()	 	= Birden fazla dizi içerisinde bulunan ve aynı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
		array_intersect_key()	= Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
		array_intersect_assoc()	= Birden fazla dizi içerisinde bulunan ve aynı anahtar isimlerine ve aynı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$IsimlerErkek 	= array("Ahmet","Erkek" => "Yaprak","Unisex" => "Deniz","Yakup","Toprak","Erdem","Mehmet","Muzaffer");
	$IsimlerKiz		= array("Ayşe","Aslı","Selinda","Unisex" => "Deniz","Toprak","Yeliz","Yaprak");

		echo "<pre>";
		print_r($IsimlerErkek);
		echo "</pre>";
	
		echo "<pre>";
		print_r($IsimlerKiz);
		echo "</pre>";
	
	$Sonuc 			= array_intersect($IsimlerErkek, $IsimlerKiz); // Anahtar değerleri korunur (İlkinin)
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>