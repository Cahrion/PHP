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
		next() 		= Dizinin göstericisi konumundaki anahtarı veya elamanı bir ileri almak için kullanılır.
		prev() 		= Dizinin göstericisi konumundaki anahtarı veya elamanı bir geri almak için kullanılır.
		reset() 	= Dizinin göstericisi konumundaki anahtarı veya elamanı varsayılan konuma (ilk) geri döndürmek için kullanılır.
	*/
	
	$Isimler 		= array("Icabi","Haluk","Volkan", "Hakan", "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
		
	$AGostericiAnahtari	= key($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki anahtarı: $AGostericiAnahtari" . "<br>";
	$AGostericiElemani	= pos($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki elemanı: $AGostericiElemani" . "<br><br>";
		
	next($Isimler);
	
	$BGostericiAnahtari	= key($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki anahtarı: $BGostericiAnahtari" . "<br>";
	$BGostericiElemani	= pos($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki elemanı: $BGostericiElemani" . "<br><br>";
	
	next($Isimler);
	
	$CGostericiAnahtari	= key($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki anahtarı: $CGostericiAnahtari" . "<br>";
	$CGostericiElemani	= pos($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki elemanı: $CGostericiElemani" . "<br><br>";
	
	reset($Isimler);
	
	$DGostericiAnahtari	= key($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki anahtarı: $DGostericiAnahtari" . "<br>";
	$DGostericiElemani	= pos($Isimler); 	
	echo "Göstericinin varsayılan gösterici konumundaki elemanı: $DGostericiElemani";
	
	?>
</body>
</html>