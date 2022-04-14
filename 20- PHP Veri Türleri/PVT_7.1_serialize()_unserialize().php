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
			serialize() 	= Herhangi bir değeri saklanabilir veri türüne dönüştürerek, dönüştürdüğü değeri geriye döndürür.
			unserialize() 	= serialize() metodu kullanılarak üretilmiş olan herhangi bir değeri saklanabilir veri türündeki değerin eski orijinal haline dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		*/
	
	$Bilgiler 	= 'a:4:{s:4:"Isim";s:5:"Icabi";s:7:"Soyisim";s:8:"Kırgız";s:5:"Sehir";s:8:"Istanbul";s:3:"Yas";i:19;}';
	// Boşluksuz yazılır.
	
		echo $Bilgiler . "<br><br>";
	
	$Sonuc		= unserialize($Bilgiler);
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	
	?>
</body>
</html>