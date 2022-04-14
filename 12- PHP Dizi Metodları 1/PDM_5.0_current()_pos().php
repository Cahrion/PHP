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
		current() 	= Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
		pos() 		= Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	*/
	
	$Isimler 		= array("Volkan", "Hakan", "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
		
	$Sonuccurrent 	= current($Isimler); 	// İlk konumdaki elemanın ismini döndürür.
	$Sonucpos 		= pos($Isimler); 		// İlk konumdaki elemanın ismini döndürür.
	echo "(current)<br>Dizinin göstericisi konumundaki eleman değeri: $Sonuccurrent" . "<br>";
	echo "(pos)<br>Dizinin göstericisi konumundaki eleman değeri: $Sonucpos";
		
	?>
</body>
</html>