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
		end() 	= Dizinin göstericisi son konumundaki elemanı bulmak için kullanılır.
	*/
	
	$Isimler 		= array("Volkan", "Hakan", "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
		
	$Sonuc			= end($Isimler); 	// Son konumdaki elemanın ismini döndürür.
	echo "(end)<br>Dizinin göstericisinin son konumundaki eleman değeri: $Sonuc" . "<br>";
		
	?>
</body>
</html>