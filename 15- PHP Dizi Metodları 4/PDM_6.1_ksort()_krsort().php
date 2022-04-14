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
		ksort() 	= Dizinin anahtarlarını büyük harf, küçük harf duyarlı olacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
		krsort() 	= Dizinin anahtarlarını büyük harf, küçük harf duyarlı olacak şekilde z'den a'ya yada büyükten küçüğe sıralamak için kullanılır.
	*/
	
	$Isimler 		= array("Bir" => "Volkan","Iki" => "Hakan","Uc" => "Serkan","Dort" => "Serkan","Bes" => "Serkan","Alti" => "Serkan","Yedi" => "Serkan","Sekiz" => "Onur");
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	krsort($Isimler); // Geri dönmede true yada false değer döner. (1-0)
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";

	?>
</body>
</html>