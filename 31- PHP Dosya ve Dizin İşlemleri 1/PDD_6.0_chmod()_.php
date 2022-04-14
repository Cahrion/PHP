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
			touch() 	= Belirtilecek olan değer ve izin doğrultusunda, ilgili kaynağın dosya / dizin erişim izinlerini ayarlamak için kullanılırr. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
		*/
			
	$Dosya 			= "Cahrion.txt";  // ( dosya veya dizin olabilir. )
	$Izinler 		= fileperms($Dosya);
	
		echo "Erişim Izni Değeri: " . $Izinler . "<br>";
	
	$Bicimlendir 	= substr(sprintf("%o", $Izinler), -4);
		
		echo "Erişim Izni Değeri: " . $Bicimlendir . "<br><br>";
	
	chmod($Dosya, 0444); // Normalde çalışır (Windows) yapılandırmasında sıkıntı çıkar.
		
	$Izinler 		= fileperms($Dosya);
		echo "Erişim Izni Değeri: " . $Izinler . "<br>";
	
	$Bicimlendir 	= substr(sprintf("%o", $Izinler), -4);
		
		echo "Erişim Izni Değeri: " . $Bicimlendir;
	?>
</body>
</html>