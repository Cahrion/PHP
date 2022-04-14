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
		array_merge()	 			= Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır.
		array_merge_recursive()	 	= Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır. (GELİŞMİŞ)
	*/
	
	$Dizi1 		= array("Volkan","Hakan","Onur");
	$Dizi2 		= array("Aslı","Banu","Ayşe","Nergiz","Şevval");
	$Dizi3 		= array("Sarı","Mavi","Kırmızı","Beyaz");
	$YeniDizi 	= array_merge($Dizi1, $Dizi2, $Dizi3);
		
	echo "<pre>";
	print_r($Dizi1);
	echo "</pre>";
		
	echo "<pre>";
	print_r($Dizi2);
	echo "</pre>";
	
	echo "<pre>";
	print_r($Dizi3);
	echo "</pre>";
		
	echo "<pre>";
	print_r($YeniDizi);
	echo "</pre>";
	
	?>
</body>
</html>