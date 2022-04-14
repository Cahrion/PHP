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
			
			sha1() 		= Belirtilecek olan içeriğin sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
			sha1_file() = Belirtilecek olan dosyanın sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
			
			// Bu şifreleme sistemi çözüldü.
		*/
			
	$Dosya 		= "Dokumanlar\Deney.zip";
	$Olustur 	= sha1_file($Dosya); 			// Boyut değiştirme, ekleme, çıkarma gibi işlemlere göre md5 özelliği değişir.
	echo $Olustur . "<br>";
	
	$Dosya 		= "Dokumanlar\CSS3AdanZye.png"; // Fotograflarında alınabilir.
	$Olustur 	= sha1_file($Dosya); 	
	echo $Olustur . "";
	
	?>
</body>
</html>