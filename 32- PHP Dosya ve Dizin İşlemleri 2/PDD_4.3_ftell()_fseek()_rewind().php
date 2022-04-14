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
			ftell()			=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinde okumaya hazır bulunan konumu bularak, bulduğu değeri geriye döndürür.
			fseek()			=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinde okumaya hazır bulunan konumu değiştirerek, değiştirdiği değeri geriye döndürür.
			rewind()		=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinde değiştirilmiş olan okumaya hazır bulunan konumu sıfırlamak / varsayılan hale döndürme için kullanılır.
		*/		
	$Dosya 		= "Harici/Belge.txt";  
	$DosyaAc 	= fopen($Dosya, "r"); 
	
	
	$Konum 		= ftell($DosyaAc);
	$Oku 		= fread($DosyaAc, 10);
	
	echo "Şuanki konum: " . $Konum . "<br>";
	echo "Önündeki 10 adet karakter: " . $Oku . "<br><br>";  
	
	fseek($DosyaAc, 3); // "3" karakter ileri git
	
	$Konum 		= ftell($DosyaAc);
	$Oku 		= fread($DosyaAc, 10);
	
	echo "Şuanki konum: " . $Konum . "<br>";
	echo "Önündeki 10 adet karakter: " . $Oku . "<br><br>";  

	rewind($DosyaAc); // Varsayılan konuma döner.
	
	$Konum 		= ftell($DosyaAc);
	$Oku 		= fread($DosyaAc, 10);
	
	echo "Şuanki konum: " . $Konum . "<br>";
	echo "Önündeki 10 adet karakter: " . $Oku;
	
	fclose($DosyaAc);
	?>
</body>
</html>