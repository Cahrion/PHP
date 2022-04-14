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
		array_flip() 	= Dizi içerisinde bulunan anahtarların ve elemanların yer değişimi yapması için kullanılır.
	*/
	
	$Degerler 				= array("Anahtar1" => "Deger1", "Anahtar2" => "Deger2", "Anahtar3" => "Deger3");
	
		echo "<pre>";
		print_r($Degerler);
		echo "</pre>";
	
	$Sonuc					= array_flip($Degerler); 
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	

	?>
</body>
</html>