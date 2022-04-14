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
	
	$Isimler 		= array("1" => "Volkan","31" => "Hakan","64" => "Serkan","75" => "Serkan","84" => "Serkan","86" => "Serkan","37" => "Serkan","11" => "Onur");
	
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