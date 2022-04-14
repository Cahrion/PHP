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
			file()			=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak bulucu) içeriği kontrol ederek ve bilgiler satır satır bularak, bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
			readfile()		=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak bulucu) içeriği kontrol ederek ve bilgiler tek bir defa da bularak, bulduğu değeri geriye döndürür. Ayrıca dosyalara download (indirilebilme) veya transfer özelliği atamak için kullanılır.
		*/		
	
	$URL 		= "https://socialdilemma.com";  
	$URLAc 		= file($URL); 

	foreach($URLAc as $Anahtar => $Eleman){
		echo $Anahtar . ". Satır: " . $Eleman . "<br>";
	}
	
	?>
</body>
</html>