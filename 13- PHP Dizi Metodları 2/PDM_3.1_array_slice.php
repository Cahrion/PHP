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
		array_slice()	 	= Dizinin belli bölümlerini alarak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler 		= array("A1" => "Volkan","A2" => "Hakan","A3" => "Onur","A4" => "Serkan","A5" => "Levent","A6" => "Ümit","A7" => "Erkan","A8" => "Özgür"); 
		
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$Sonuc 			= array_slice($Isimler, 3); // (3.'den başlar') // Anahtarlar korunur.
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>