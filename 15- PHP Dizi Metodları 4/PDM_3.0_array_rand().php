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
		array_rand() 	= Dizi içerisinde bulunan elemanlardan, belirtilecek eleman sayısı kadar rasgele değer döndürmek için kullanılır.
	*/
	
	$Isimler 				= array("Volkan", "Hakan", "Onur", "Levent", "Serkan", "Eray", "Özgür", "Gökhan");
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	$Sonuc					= array_rand($Isimler, 2); // rasgele satı döndürülür (2. parametre) kaç adet istendiği seçilir.
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
		echo "Ilk değer: " . $Isimler[$Sonuc[0]] . "<br>";
		echo "Ikinci değer: " . $Isimler[$Sonuc[1]];

	?>
</body>
</html>