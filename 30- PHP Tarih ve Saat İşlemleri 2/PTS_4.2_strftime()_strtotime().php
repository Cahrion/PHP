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
			strftime() 		=	Yerel tarih ve saat bilgilerini belirtilecek olan formata göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
			strftoime() 	=	İngilizce metin içerikli bir zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
		*/
	
	$Zaman 			=	strftime("%d.%m.%Y %T %Z"); 
	
		echo $Zaman . "(Normal)<br><br>";
	
	setlocale(LC_ALL, "tr_TR", "tr", "turkish");
	$Zaman 			=	strftime("%d.%m.%Y %T %Z"); 
	
		echo $Zaman . "(setlocale)<br><br>";
	
	$Zaman 			=	strftime("%d.%m.%Y %T %Z"); 
	$Islem			= 	iconv("LATIN5", "UTF-8", $Zaman);
		echo $Zaman . "(Normal)<br>";
		echo $Islem . "(Iconv)";
	
	?>
</body>
</html>