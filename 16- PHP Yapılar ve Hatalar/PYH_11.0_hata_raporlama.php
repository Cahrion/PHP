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
		(php.ini) (dosyasının içinde)
		error_reporting() 	= Hata raporlama işlemleri dahilinde bulunan tüm hata seviyelerinin ayarlama işlemleri için kullanılır.
		HATA SEVİYELERİ 	= E_ALL | E_ERROR | E_WARNING | E_PARSE | E_NOTICE
		E_ALL 				= Tüm seviye hataları. (Diğer yazım şekli : -1)
		E_ERROR				= Önemli çalışma zamanı hataları.
		E_WARNING 			= Önemli olmayan çalışma zamanı uyarıları.
		E_PARSE 			= Derleme zamanı ayrıştırma hataları.
		E_NOTICE			= Çalışma zamanı bildirimleri.
		0 					= Seviyeleri kapatması.
	*/
	
	error_reporting(0); // Kapatılabilir. 
	
	deneme(); // Fatal error
	echo "Çalışıyor mu";
	
	
	?>
</body>
</html>