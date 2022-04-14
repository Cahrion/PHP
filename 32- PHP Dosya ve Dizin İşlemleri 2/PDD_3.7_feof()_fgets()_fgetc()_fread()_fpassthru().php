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
		*/
			
	$Dosya 		= "Harici/Belge.txt";  
	$DosyaAc 	= fopen($Dosya, "r"); 
	$Numara 	= 1;
	
	while(!feof($DosyaAc)){
		$Oku 		= fread($DosyaAc, 10) . "<br>"; // Türkçe karakterlerde hata çıkar.(Her 10 karakteri alır ve satır diye geriye döndürür.)
		$Karakter 	= iconv("LATIN5", "UTF-8", $Oku); // Bu olayı çözmezse (NOT defterini (ANSI şeklinde kodlayın.))
		echo $Numara . ". Karakter: " . $Karakter;
		$Numara++;
	}
	
	fclose($DosyaAc);
	?>
</body>
</html>