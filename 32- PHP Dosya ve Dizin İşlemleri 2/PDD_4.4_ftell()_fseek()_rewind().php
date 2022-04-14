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
	$URL 		= "https://socialdilemma.com/";  
	$URLAc 		= fopen($URL, "r"); 
	
	
	$Konum 		= ftell($URLAc);
	$Oku 		= fread($URLAc, 1);
	
	echo "Şuanki konum: " . $Konum . "<br>";
	echo "Önündeki 1 adet karakter: " . $Oku . "<br><br>"; 
	
	fseek($URLAc, 3); // "3" karakter ileri git
	
	$Konum 		= ftell($URLAc);
	$Oku 		= fread($URLAc, 10);
	
	echo "Şuanki konum: " . $Konum . "<br>";
	echo "Önündeki 10 adet karakter: " . $Oku . "<br><br>"; 

	rewind($URLAc); // Varsayılan konuma döner. (URL yapılarında başa dönme desteklenmez.)
	
	$Konum 		= ftell($URLAc);
	$Oku 		= fread($URLAc, 10);
	
	echo "Şuanki konum: " . $Konum . "<br>";
	echo "Önündeki 10 adet karakter: " . $Oku;
	
	fclose($URLAc);
	?>
</body>
</html>