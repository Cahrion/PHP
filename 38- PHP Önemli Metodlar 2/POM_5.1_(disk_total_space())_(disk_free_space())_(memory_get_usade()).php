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
	disk_total_space() 	= Kullanılmakta olan server'ın (sunucunun), belirtilecek olan sürücüsü doğrultusunda toplam disk kapasitesinin değerini bayt cinsinden bularak bulduğu değeri geriye döndürür. 
	disk_free_space() 	= Kullanılmakta olan server'ın (sunucunun), belirtilecek olan sürücüsü doğrultusunda kalan kullanılabilir disk kapasitesinin değerini bayt cinsinden bularak bulduğu değeri geriye döndürür. 
	memory_get_usage() 	= Çalışmakta olan PHP dosyası için sistemden ayrılan memory (hafıza) miktarı değerini bayt cinsinden bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger 	= disk_free_space("C:"); // İstenilen yerin boyutunu sorabiliriz. (C: yerine "/" yazılabilir.)
	echo "Server'ın (sunucunun) toplam boş disk kapasitesi: " . $Deger . "Byte <br>";
	
	$Deger 	= disk_free_space("D:"); // İstenilen yerin boş kullanılabilir disk kapasitesini sorabiliriz.
	echo "Farklı bir diskin toplam boş kapasitesi: " . $Deger . "Byte";
	
	?>
</body>
</html>