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
		unset() 	= Belirtilecek olan değişkenin, dizi anahtarı ve elemanını veya session'ı (oturumu) yok etmek için kullanılır.
	*/
	
	$Isimler 		= array("Ahmet", "Mehmet", "Aslı", "Icabi", "Umut");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	unset($Isimler); // Diziyi yok edebilir. 
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";

	?>
</body>
</html>