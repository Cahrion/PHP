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
		array_reverse() 	= Dizi içerisinde bulunan eleman veya elemanların tersten sıralanmasını sağlayarak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler 				= array("Volkan", "Hakan", "Onur", "Serkan", "Eray", "Özgür", "Gökhan");
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	$Sonuc					= array_reverse($Isimler); // Anahtar değerleri korunmaz (Varsayılan değer)
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";

	?>
</body>
</html>