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
	
	$Bilgiler 	= array("Isim" => "Icabi", "Soyisim" => "Kırgız", "Sehir" => "Istanbul", "Yas" => 19);
	
		echo "<pre>";
		print_r($Bilgiler);
		echo "</pre>";
	
	$Sonuc		= serialize($Bilgiler);
	
		echo $Sonuc;
	
	
	?>
</body>
</html>