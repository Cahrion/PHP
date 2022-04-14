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
			feof()			=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğinin sonuna kadar okunup okunmadığını tespit etmek için kullanılır.
			fgets()			=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri satır satır bularak bulduğu değeri geriye döndürür. Ayrıca tüm içerikte bulunan satır verileri herhangi bir döngü ile elde edilebilir.
			fgetc()			=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri karakter karakter bularak bulduğu değeri geriye döndürür. Ayrıca tüm içerikte bulunan satır verileri herhangi bir döngü ile elde edilebilir.
			fread()			=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve belirtilecek karakter değerlerine bölünmüş içerikleri bularak, bulduğu değeri geriye döndürürü. Ayrıca tüm içerikte bulunan ve  belirtilecek karakter değerlerine bölünmüş verileriherhangi bir döngü ile elded edebiliriz.
			fpassthru()		=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve tüm içeriği bire defada bularak bulduğu değeri geriye döndürür.
			
			KARAKTER SAYILARI 		=
				Tüm karakterler 	= 1
				Türkçe karakterler 	= 2
				Tırnak İşareti	 	= 2
				Enter Boşluğu		= 2
			
		*/
	
	$Dosya 		= "Harici/Belge.txt";  
	$DosyaAc 	= fopen($Dosya, "r"); 
	$Oku 		= fpassthru($DosyaAc); // Sona karakter sayısını ekler. (Enter'ları boşluk olarak ele alır. )
	// Enter gibi bir boşluklu okunması isteniyorsa "<br>" yapılır ve boşluklu okur lakin "<br>" karakterlerinide ele alıcaktır.
	
	echo $Oku;
	fclose($DosyaAc);
	?>
</body>
</html>