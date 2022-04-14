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
		array_combine()	 	= İki farklı diziyi ilişkisel olarak birleştirerek yeni bir dizi oluşturmak için kullanılır.(Anahtar - kilit)
	*/
	
	$Dizi1 		= array("Deger1" => "Renk1","Deger2" => "Renk2","Deger3" => "Renk3");
	$Dizi2 		= array("Sonuc1" => "Mavi", "Sonuc1" => "Yeşil","Sonuc1" => "Kırmızı");
	$YeniDizi 	= array_combine($Dizi1, $Dizi2);
		
	echo "<pre>";
	print_r($Dizi1);
	echo "</pre>";
		
	echo "<pre>";
	print_r($Dizi2);
	echo "</pre>";
		
	echo "<pre>";
	print_r($YeniDizi);
	echo "</pre>";
	
	?>
</body>
</html>