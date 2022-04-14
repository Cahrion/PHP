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
		array_sum() 	= Dizi içerisinde bulunan eleman veya elemanların sayısal değerler içermesi durumunda tüm elemanların toplamını almak için kullanılır.
		array_product() = Dizi içerisinde bulunan eleman veya elemanların sayısal değerler içermesi durumunda tüm elemanların çarpımını almak için kullanılır.
	*/
	
	$Sayilar 				= array(1.44, 4.75, 8, 16.44, 15, 23.12, 34, 41);
	
		echo "<pre>";
		print_r($Sayilar);
		echo "</pre>";
	
	$Sonuctop				= array_sum($Sayilar); 
	$Sonuccarp				= array_product($Sayilar); 
	
		echo "Dizi elemanlarının toplamı: " . $Sonuctop . "<br>";
		echo "Dizi elemanlarının çarpımı: " . $Sonuccarp;
	

	?>
</body>
</html>