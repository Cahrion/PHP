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
	zend_version()		= Kullanılmakta olan server'da (sunucuda) çalışmakta olan zend motorunun sürüm numarası değerini bularak bulduğu değeri geriye döndürür.
	phpversion() 		= Kullanılmakta olan server'da (sunucuda) çalışmakta olan PHP sisteminin sürüm numarası değerini bularak bulduğu değeri geriye döndürür.
	sys_get_temp_dir() 	= Kullanılmakta olan server'da (sunucuda) çalışmakta olan PHP sisteminde kullanılan temp (geçiçi) dizininin path (yol) değerini bularak bulduğu değeri geriye döndürür.
	*/
	
	$Deger 	= zend_version(); 
	echo "Kullanılmakta olan server'da çalışmakta olan zend motorunun sürüm numarası: " . $Deger . "<br><br>";
	
	$Deger 	= phpversion(); 
	echo "Kullanılmakta olan server'da çalışmakta olan PHP sisteminin sürüm numarası: " . $Deger . "<br><br>";
		
	$Deger 	= sys_get_temp_dir(); 
	echo "Kullanılmakta olan server'da çalışmakta olan PHP sisteminde kullanılan temp dizininin path değeri: " . $Deger;
	
	?>
</body>
</html>